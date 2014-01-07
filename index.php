<!DOCTYPE html>
<!--    
    With love by:
    Xilantra (http://afiq.me)     
    
    Github:
    https://github.com/Xilantra/Fuckin-Lazy-To-Upload-Gallery  
    
    Demo:
    https://Xilantra.github.io/Fuckin-Lazy-To-Upload-Gallery
    
    Forked from
    https://github.com/codrops/GridLoadingEffects   


////////////Fuckin Lazy To Upload Gallery////////////
////////////Fuckin Lazy To Upload Gallery////////////
////////////Fuckin Lazy To Upload Gallery////////////


           DO WHAT THE FUCK YOU WANT TO PUBLIC LICENSE 
                    Version 2, December 2004 

 Copyright (C) 2004 Sam Hocevar <sam@hocevar.net> 

 Everyone is permitted to copy and distribute verbatim or modified 
 copies of this license document, and changing it is allowed as long 
 as the name is changed. 

            DO WHAT THE FUCK YOU WANT TO PUBLIC LICENSE 
   TERMS AND CONDITIONS FOR COPYING, DISTRIBUTION AND MODIFICATION 

  0. You just DO WHAT THE FUCK YOU WANT TO.
  
-->



<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Fuckin Lazy To Upload Gallery</title>
		<meta name="description" content="Because I'm too lazy to upload all your bloody picture!" />
		<meta name="keywords" content="php glob, display directory, mosaic, css animation, loading effect, google plus, grid items, masonry" />
		<meta name="author" content="Xilantra" />
 		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">
			<header>
				<h1>Fuckin Lazy To Upload Gallery</h1>	
				<nav class="codrops-demos">
				<!-- TODO: Ajax -->
					<a class="current-demo" href="#">Gallery 1</a>
					<a href="#">Gallery 2</a>
					<a href="#">Gallery 3</a>
					<a href="#">Gallery 4</a>
					<a href="#">Gallery 5</a>
				</nav>
			</header>
			<ul class="grid effect-4" id="grid">
			
			<?php
			$files = glob("images/*.*");
			for ($i=1; $i<count($files); $i++) 
			{$images= $files[$i];
			echo '<li><a href="'.$images.'"><img src="'.$images.'" alt=""/></a></li>';}?>
			
			</ul>
		</div>
		<script src="js/masonry.pkgd.min.js"></script>
		<script src="js/imagesloaded.js"></script>
		<script src="js/classie.js"></script>
		<script src="js/AnimOnScroll.js"></script>
		<script>
			new AnimOnScroll( document.getElementById( 'grid' ), {
				minDuration : 0.4,
				maxDuration : 0.7,
				viewportFactor : 0.2
			} );
		</script>
	</body>
</html>
