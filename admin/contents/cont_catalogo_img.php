<div class="contenido container">
	<div class="titulo text-center">
		<h2><b>CATÁLOGO IMÁGENES</b></h2>
	</div>
	<div class="container">
		<br>
		<div class="row">
<?php
              $dir="../img/*";
              foreach (glob($dir) as $filename) {
                $aux="$filename";
                $aux = substr($aux, 21);
                  echo "<div class='col-xs-12 col-md-6 col-lg-3'>
          <a href=$filename class='thumbnail'>
              <img src=$filename alt='...' style='width: 200px; height: 200px;'>
          </a>
        </div>";
                }
                ?>
		</div>
	</div>
</div>