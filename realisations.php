<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >


<?php

  $userid = '114551784767209517591';
  $album = 'Raoul';

  // Get auth token
  $ch = curl_init();

  curl_setopt($ch, CURLOPT_URL, "https://www.google.com/accounts/ClientLogin");  
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);  
    
  $data = array('accountType' => 'GOOGLE',  
  'Email' => 'blorent@gmail.com',  
  'Passwd' => 'couillon',  
  'source'=>'web',  
  'service'=>'lh2');  
    
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  
  curl_setopt($ch, CURLOPT_POST, true);  
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);  
    
  $hasil = curl_exec($ch);
  curl_close($ch);

  $auth_token = substr($hasil, strpos($hasil, "uth="));
  $auth_token = "a" . $auth_token;


  $ch = curl_init("http://picasaweb.google.com/data/feed/api/user/$userid/album/$album");

  $header = "Authorization: GoogleLogin " . $auth_token;

  curl_setopt($ch, CURLOPT_HTTPHEADER, array($header));  
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
  curl_setopt($ch, CURLOPT_HEADER, false);  
    
  $hasil = curl_exec($ch); 
  curl_close($ch); 

  $sxml = simplexml_load_string($hasil)
?>
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

<div id="mainContent">

<div id="logo">
<img src="images/logo3.png" alt="Logo Toitures Defechereux"/>
<p></p>
</div>

<div id="menu">
<ul>
<li class="accueil"><a href="index.html" class="accueil">ACCUEIL</a></li>
<li class="services"><a href="services.html" class="services">SERVICES</a></li>
<li class="realisations"><a href="realisations.php" class="realisations active">PHOTOS</a></li>
<li class="contact"><a href="contact.html" class="contact">CONTACT</a></li>
</ul>
</div>

<div id="textBody">

<h1>Exemples de r&eacute;alisations</h1>

<p>Vous trouverez sur cette page des exemples de nos pr&eacute;c&eacute;dentes r&eacute;alisations, afin que vous puissiez vous rendre compte par vous-m&ecirc;mes de la qualit&eacute; de notre travail.</p>


<div id="gallery">
<?php
    // iterate over entries in album
    // print each entry's title, size, dimensions, tags, and thumbnail image
    foreach ($sxml->entry as $entry) {
      $title = $entry->title;
      $summary = $entry->summary;
      
      $gphoto = $entry->children('http://schemas.google.com/photos/2007');
      $size = $gphoto->size;
      $height = $gphoto->height;
      $width = $gphoto->width;
      
      $media = $entry->children('http://search.yahoo.com/mrss/');
      $thumbnail = $media->group->thumbnail[1];
      $content = $media->group->content;
      $tags = $media->group->keywords;

        echo "<div class=\"thumbnail\"> <a title=\"";
        echo $summary;
        echo "\" rel=\"lightbox[999]\" href=\"";
        // url van photo
        echo $content->attributes()->{'url'};
        echo "\"> <img src=\"";
        // url van thumb
        echo $thumbnail->attributes()->{'url'};
        echo "\" border=\"0\" width=\"150\"  height=\"100\" alt=\"";
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



</body>
</html>
