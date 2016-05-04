<?php
	ob_start();
	require_once ("../tutorado/contents/OperacionesSQL.php");
	$ruta = array('',
		            '/vistas/anexo1t.php',
                '/vistas/anexo2t.php',
								'/vistas/anexo3t.php',
								'/vistas/anexo4t.php',
								'/vistas/anexo5t.php',
								'/vistas/anexo6t.php',
								'/vistas/anexo7t.php'
							 );
		$nc = $_GET["nc"];
		$anexo = new OperacionesSQL();
		if($anexo -> verificaAnexo($nc,$_GET['estado']) == 1){
    include(dirname(__FILE__).$ruta[$_GET['estado']]);
    //En una variable llamada $content se obtiene lo que tenga la ruta especificada
    //NOTA: Se usa ob_get_clean porque trae SOLO el contenido
    //Evitará este error tan común en FPDF:
    //FPDF error: Some data has already been output, can't send PDF
    $content = ob_get_clean();

    //Se obtiene la librería
    require_once(dirname(__FILE__).'/../html2pdf.class.php');
    /* Las lineas siguientes siempre serán las mismas
     * A mi parecer no hay mucho que explicar. Se explican
     * por sí solas :D
     * */
    try
    {
        $html2pdf = new HTML2PDF('P', 'A4', 'es', true, 'UTF-8', 3); //Configura la hoja
        $html2pdf->pdf->SetDisplayMode('fullpage'); //Ver otros parámetros para SetDisplaMode
        $html2pdf->writeHTML($content); //Se escribe el contenido
        $html2pdf->Output('mipdf.pdf'); //Nombre default del PDF
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
	}
	else {
  echo "<script language='javascript'>alert('No se ha contestado esta encuesta!'); window.location.href='$_SERVER[HTTP_REFERER]';</script>";
	}
?>
