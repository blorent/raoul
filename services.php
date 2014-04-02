<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<head>
<title>Toiture Def&ecirc;chereux</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/lightbox.css" rel="stylesheet" media="screen" type="text/css" />

<script type="text/javascript" src="js/prototype.js"></script>
<script type="text/javascript" src="js/scriptaculous.js?load=effects,builder"></script>
<script type="text/javascript" src="js/lightbox.js"></script>
</head>
<body>

<div id="outer">

	<div id="contentRow">

		<div id="mainContent">

			<?php include('logo_menu.php'); ?>

			<div class="textBody" id="textbody_services">

				<h1>Pr&eacute;sentation De Notre Travail</h1>

				<p>Disponible pour vous guider &agrave; chaque &eacute;tape dans le choix et la s&eacute;lection des accessoires qui contribueront &agrave; rendre votre projet &agrave; la hauteur de vos esp&eacute;rances.</p>
						
				<p>Que ce soit pour un petit travail ou un chantier de grande envergure, n'h&eacute;sitez pas &agrave; nous contacter lors de la conception de votre projet
				pour b&eacute;n&eacute;ficier de notre exp&eacute;rience dans le domaine.</p>

				<p>Notre but est de fournir un service de qualit&eacute; et de satisfaire tous nos clients.</p>

				<div id="gallery">

		        <?php
		          $files = glob('refs/*.{jpg,png,gif,JPG,PNG,GIF}', GLOB_BRACE);
		          $thumbs = glob('refs/thumbs/*.{jpg,png,gif,JPG,PNG,GIF}', GLOB_BRACE);

		          for($i=0;$i<count($files);$i++) {
		                  echo "<div class=\"thumbnail\"> <a title=\"";
		                echo $summary;
		                echo "\" rel=\"lightbox[999]\" href=\"";
		                // url van photo
		                echo $files[$i];
		                echo "\"> <img src=\"";
		                // url van thumb
		                echo $thumbs[$i];
		                echo "\" border=\"0\" alt=\"";
		                echo $summary ;
		                echo "\"  title=\"";        
		                echo $summary ;
		                echo "\" /></a>" ;  
		                // echo $summary ;
		                echo "</div>";
		        }
		          

		        ?>

		        <p id="galleryFooter">Cliquez sur les photos pour les voir dans leur taille originale.</p>
		        </div>

			</div>

		</div>

	</div>

</div>

</body>
</html>
