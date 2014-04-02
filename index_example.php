<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <?php


    $userid = 'YOURUSERNAME';
    $album = 'ALBUMNAME';
    
	
    // build feed URL
     $feedURL = "http://picasaweb.google.com/data/feed/api/user/$userid/album/$album?imgmax=800";
	 // $feedURL = "http://picasaweb.google.com/data/feed/api/user/$userid?kind=photo&imgmax=912";



    // read feed into SimpleXML object
    $sxml = simplexml_load_file($feedURL);
	
	


 
  
  	?>
    


<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title><?php echo  $album;  ?>  // a Picasa Web Album powered by Lightbox2</title>

<link href="css/template.css" rel="stylesheet" type="text/css" />
<link href="css/lightbox.css" rel="stylesheet" media="screen" type="text/css" />

<script type="text/javascript" src="js/prototype.js"></script>
<script type="text/javascript" src="js/scriptaculous.js?load=effects,builder"></script>
<script type="text/javascript" src="js/lightbox.js"></script>


</head>





<body>



<div id="container">





<div id="title">

		  <h1><?php echo  $album;  ?>  // a Picasa Web Album powered by Lightbox 2</h1>

</div>





	<div id="description">

			  <p>Edit this page to add an introduction here... (optional) 
        </p>

  </div>		



		



		<div id="gallerycontainer">







  
    	

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


	





	<div id="footer">

			  <a href="http://picasa.google.com/">Picasa</a> / <a href="http://www.huddletogether.com/projects/lightbox">Lightbox 2</a> template by Paul van Roekel - more Picasa templates on <a href="http://www.paulvanroekel.nl/picasa/">www.paulvanroekel.nl/picasa</a>	</div>



	</div>



</div>







</body>

</html>



