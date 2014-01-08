<!DOCTYPE html>
<!--    
    With love by:
    Xilantra (http://afiq.me)     
    
    Github:
    https://github.com/Xilantra/Fuckin-Lazy-To-Upload-Gallery  
    
    Demo:
    http://afiq.me/kebun/Fuckin-Lazy-To-Upload-Gallery/
    
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
		<link rel="stylesheet" type="text/css" href="//dimsemenov-static.s3.amazonaws.com/dist/magnific-popup.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<style>
	.image-source-link {
	color: #98C3D1;
}

.mfp-with-zoom .mfp-container,
.mfp-with-zoom.mfp-bg {
	opacity: 0;
	-webkit-backface-visibility: hidden;
	/* ideally, transition speed should match zoom duration */
	-webkit-transition: all 0.3s ease-out; 
	-moz-transition: all 0.3s ease-out; 
	-o-transition: all 0.3s ease-out; 
	transition: all 0.3s ease-out;
}

.mfp-with-zoom.mfp-ready .mfp-container {
		opacity: 1;
}
.mfp-with-zoom.mfp-ready.mfp-bg {
		opacity: 0.8;
}

.mfp-with-zoom.mfp-removing .mfp-container, 
.mfp-with-zoom.mfp-removing.mfp-bg {
	opacity: 0;
}
</style>
	<body>
		<div class="container">
			<header>
				<h1>Fuckin Lazy To Upload Gallery</h1> <strong>#FLTUG</strong>	
				<nav class="navi">
				<!-- TODO: Ajax -->
					<a class="current" href="#">Gallery 1</a>
					<a href="#">Gallery 2</a>
					<a href="#">Gallery 3</a>
					<a href="#">Gallery 4</a>
					<a href="#">Gallery 5</a>
				</nav>
				
<!-- Social Media Button -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<main class="page-wrap">
<section class="social">
    
    <div class="social-button twitter">
      <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://afiq.me/kebun/Fuckin-Lazy-To-Upload-Gallery/" data-text="Pinterest-like gallery for lazy people with auto-upload image. #FLTUG #CSS3 #HTML5 #Github #RWD" data-related="xilantra" data-count="none">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    </div>
    
    <div class="social-button facebook">
      <div class="fb-like" data-href="http://afiq.me/kebun/Fuckin-Lazy-To-Upload-Gallery/" data-width="450" data-layout="button_count" data-show-faces="false" data-share="true"></div>
    </div>
    
    <div class="social-button googleplus">
      <div class="g-plusone" data-size="medium"></div>
<iframe src="http://ghbtns.com/github-btn.html?user=xilantra&repo=Fuckin-Lazy-To-Upload-Gallery&type=fork&size=medium" frameborder="0" scrolling="0" style="width:50px; height: 20px;" allowTransparency="true"></iframe>
    </div>
    
  </section>
</main>
<!-- Social Media Button end (Inspired by Christ Coyier pen -->

			</header>
                        <ul class="zoom-gallery grid effect-4" id="grid">
                        
                        <?php
                        $files = glob("images/*.*");
                        for ($i=1; $i<count($files); $i++) 
                        {$images= $files[$i];
                        echo '<li><a href="'.$images.'" class="hoverZoomLink"><img src="'.$images.'" alt=""/></a></li>';}?>
                        
                        </ul>
                </div>
                <script src="js/masonry.pkgd.min.js"></script>
                <script src="js/imagesloaded.js"></script>
                <script src="js/classie.js"></script>
                <script src="js/AnimOnScroll.js"></script>
                
                <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
                <script src="//dimsemenov-static.s3.amazonaws.com/dist/jquery.magnific-popup.min.js"></script>
                
                <script>
                        new AnimOnScroll( document.getElementById( 'grid' ), {
                                minDuration : 0.4,
                                maxDuration : 0.7,
                                viewportFactor : 0.2
                        } );
                </script>
                <script>
 $(document).ready(function() {
	$('.zoom-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		closeOnContentClick: false,
		closeBtnInside: false,
		mainClass: 'mfp-with-zoom mfp-img-mobile',
		image: {
			verticalFit: true
		},
		gallery: {
			enabled: true
		},
		zoom: {
			enabled: true,
			duration: 300, // don't foget to change the duration also in CSS
			opener: function(element) {
				return element.find('img');
			}
		}
		
	});
});
                </script> 		
                </body>
</html>