<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
  function Header()
{
    $this->SetFont('Arial','I',38);
    $this->Image('C:/xampp/htdocs/TADDI/img/header.png',0,0,210);
    $this->Cell(80);
    $this->Cell(30,50,'Carga Tutoria',10,0,'C');


}

  function Footer()
{
  $this->SetY(-15);
  $this->SetFont('Times','I',12);
  $this->Image('C:/xampp/htdocs/TADDI/img/footer.jpg',0,270,210);
}



  function cabeceraHorizontal($cabecera)
{
      $this->SetXY(10, 100);
      $this->SetFont('Arial','B',10);
      $this->SetFillColor(82,90,114);//Fondo verde de celda
      $this->SetTextColor(240, 255, 240); //Letra color blanco
      foreach($cabecera as $fila)
      {
          $this->CellFitSpace(45,7, utf8_decode($fila),1, 0 , 'L', true);
      }
}

    function datosHorizontal($datos)
    {
        $this->SetXY(10,107);
        $this->SetFont('Times','',10);
        $this->SetFillColor(229, 229, 229); //Gris tenue de cada fila
        $this->SetTextColor(3, 3, 3); //Color del texto: Negro
        $bandera = false; //Para alternar el relleno
        foreach($datos as $fila)
        {
            //Usaremos CellFitSpace en lugar de Cell
            $this->CellFitSpace(45,7, utf8_decode($fila['grupo']),1, 0 , 'L', $bandera );
            $this->CellFitSpace(45,7, utf8_decode($fila['hora']),1, 0 , 'L', $bandera );
            $this->CellFitSpace(45,7, utf8_decode($fila['salon']),1, 0 , 'L', $bandera );
            $this->CellFitSpace(45,7, utf8_decode($fila['maestro']),1, 0 , 'L', $bandera );
            $this->Ln();//Salto de línea para generar otra fila
            $bandera = !$bandera;//Alterna el valor de la bandera
        }
    }

    function tablaHorizontal($cabeceraHorizontal, $datosHorizontal)
    {
        $this->cabeceraHorizontal($cabeceraHorizontal);
        $this->datosHorizontal($datosHorizontal);
    }

    //***** Aquí comienza código para ajustar texto *************
    //***********************************************************
    function CellFit($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=false, $link='', $scale=false, $force=true)
    {
        //Get string width
        $str_width=$this->GetStringWidth($txt);

        //Calculate ratio to fit cell
        if($w==0)
            $w = $this->w-$this->rMargin-$this->x;
        $ratio = ($w-$this->cMargin*2)/$str_width;

        $fit = ($ratio < 1 || ($ratio > 1 && $force));
        if ($fit)
        {
            if ($scale)
            {
                //Calculate horizontal scaling
                $horiz_scale=$ratio*100.0;
                //Set horizontal scaling
                $this->_out(sprintf('BT %.2F Tz ET',$horiz_scale));
            }
            else
            {
                //Calculate character spacing in points
                $char_space=($w-$this->cMargin*2-$str_width)/max($this->MBGetStringLength($txt)-1,1)*$this->k;
                //Set character spacing
                $this->_out(sprintf('BT %.2F Tc ET',$char_space));
            }
            //Override user alignment (since text will fill up cell)
            $align='';
        }

        //Pass on to Cell method
        $this->Cell($w,$h,$txt,$border,$ln,$align,$fill,$link);

        //Reset character spacing/horizontal scaling
        if ($fit)
            $this->_out('BT '.($scale ? '100 Tz' : '0 Tc').' ET');
    }

    function CellFitSpace($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=false, $link='')
    {
        $this->CellFit($w,$h,$txt,$border,$ln,$align,$fill,$link,false,false);
    }

    //Patch to also work with CJK double-byte text
    function MBGetStringLength($s)
    {
        if($this->CurrentFont['type']=='Type0')
        {
            $len = 0;
            $nbbytes = strlen($s);
            for ($i = 0; $i < $nbbytes; $i++)
            {
                if (ord($s[$i])<128)
                    $len++;
                else
                {
                    $len++;
                    $i++;
                }
            }
            return $len;
        }
        else
            return strlen($s);
    }

    function OpenTag($tag, $attr)
    {
      // Etiqueta de apertura
      if($tag=='B' || $tag=='I' || $tag=='U')
          $this->SetStyle($tag,true);
      if($tag=='A')
          $this->HREF = $attr['HREF'];
      if($tag=='BR')
          $this->Ln(5);
    }

    function PutLink($URL, $txt)
  {
      // Escribir un hiper-enlace
      $this->SetTextColor(0,0,255);
      $this->SetStyle('U',true);
      $this->Write(5,$txt,$URL);
      $this->SetStyle('U',false);
      $this->SetTextColor(0);
  }

    function SetStyle($tag, $enable)
  {    $this->B = 0;
      $this->I = 0;
      $this->U = 0;
      // Modificar estilo y escoger la fuente correspondiente
      $this->$tag += ($enable ? 1 : -1);
      $style = '';
      foreach(array('B', 'I', 'U') as $s)
      {
          if($this->$s>0)
              $style .= $s;
      }
      $this->SetFont('',$style);
  }

    function CloseTag($tag)
     {
      // Etiqueta de cierre
      if($tag=='B' || $tag=='I' || $tag=='U')
          $this->SetStyle($tag,false);
      if($tag=='A')
          $this->HREF = '';
     }

    function WriteHTML($html)
  {
      $this->HREF='';
      // Intérprete de HTML
      $html = str_replace("\n",' ',$html);
      $a = preg_split('/<(.*)>/U',$html,-1,PREG_SPLIT_DELIM_CAPTURE);
      foreach($a as $i=>$e)
      {
          if($i%2==0)
          {
              // Text
              if($this->HREF)
                  $this->PutLink($this->HREF,$e);
              else
                  $this->Write(5,$e);
          }
          else
          {
              // Etiqueta
              if($e[0]=='/')
                  $this->CloseTag(strtoupper(substr($e,1)));
              else
              {
                  // Extraer atributos
                  $a2 = explode(' ',$e);
                  $tag = strtoupper(array_shift($a2));
                  $attr = array();
                  foreach($a2 as $v)
                  {
                      if(preg_match('/([^=]*)=["\']?([^"\']*)/',$v,$a3))
                          $attr[strtoupper($a3[1])] = $a3[2];
                  }
                  $this->OpenTag($tag,$attr);
              }
          }
      }
  }


}
?>
