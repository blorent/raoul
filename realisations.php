<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >

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

      <div class="textBody" id="textbody_real">

        <h1>Exemples de r&eacute;alisations</h1>

        <p>Vous trouverez sur cette page des exemples de nos pr&eacute;c&eacute;dentes r&eacute;alisations, afin que vous puissiez vous rendre compte par vous-m&ecirc;mes de la qualit&eacute; de notre travail.</p>


        <div id="gallery">

        <?php
          $files = glob('gallery/*.{jpg,png,gif,JPG,PNG,GIF}', GLOB_BRACE);
          $thumbs = glob('gallery/thumbs/*.{jpg,png,gif,JPG,PNG,GIF}', GLOB_BRACE);

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

</div>

</body>
</html>
