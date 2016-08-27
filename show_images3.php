<?php
session_start();
include 'common/header.php';
?>

<style type="text/css">
p {
	margin: 15px;
}
img {
	margin: 5px;
}
</style>
        <link rel="stylesheet" type="text/css" href="gallery/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="gallery/css/style.css" />
		<link rel="stylesheet" type="text/css" href="gallery/css/elastislide.css" />

<div class="clearfix">

<div class="col-md-8">
<div id="goback">
<a href='javascript:javascript:history.go(-1)' class="btn btn-info" role="button">&#60;&#60;&nbsp;Click here to go back</a>
</div>
		<noscript>
			<style>
				.es-carousel ul{
					display:block;
				}
			</style>
		</noscript>
		<script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">
			<div class="rg-image-wrapper">
				{{if itemsCount > 1}}
					<div class="rg-image-nav">
						<a href="#" class="rg-image-nav-prev">Previous Image</a>
						<a href="#" class="rg-image-nav-next">Next Image</a>
					</div>
				{{/if}}
				<div class="rg-image"></div>
				<div class="rg-loading"></div>
				<div class="rg-caption-wrapper">
					<div class="rg-caption" style="display:none;">
						<p></p>
					</div>
				</div>
			</div>
		</script>

	<div id="album_name"><?php if(isset($_GET['album']))  echo "<h1>".$_GET['album']."</h1>" ; ?></div>

		<div class="container">
			<div class="content">
				<div id="rg-gallery" class="rg-gallery">
					<div class="rg-thumbs">
						<!-- Elastislide Carousel Thumbnail Viewer -->
						<div class="es-carousel-wrapper">
							<div class="es-nav">
								<span class="es-nav-prev">Previous</span>
								<span class="es-nav-next">Next</span>
							</div>
							<div class="es-carousel">
								<ul>



			<?php

			if(isset($_GET['album'])) {

				$a = $_GET['album'];

				//set path of images
				$img_path='images/albums/'.$a;

				/*  used only for PHP 5.0
				$files = scandir($img_path);
				foreach($files as $dir) {
					if(substr($dir,0,1) != '.' && $dir != 'Thumbs.db' && $dir != 'thumbs' && $dir != 'album.jpg') {
						echo '<li>';
						echo '<a href="#">';
						echo '<img src="'. $img_path .'/thumbs/'.$dir .'" data-large="'. $img_path .'/'.$dir.'"/>';
						echo '</a>';
						echo '</li>';
					}
				}
				*/


				if ($handle = opendir($img_path)) {
				    while (false !== ($dir = readdir($handle))) {
				        if (substr($dir,0,1) != '.' && $dir != 'Thumbs.db' && $dir != 'thumbs' && $dir != 'album.jpg') {

							echo '<li>';
							echo '<a href="#">';
							echo '<img src="'. $img_path .'/thumbs/'.$dir .'" data-large="'. $img_path .'/'.$dir.'"/>';
							echo '</a>';
							echo '</li>';
				        }
				    }
				    closedir($handle);
				}



			}

			?>



								</ul>
							</div>
						</div>
						<!-- End Elastislide Carousel Thumbnail Viewer -->
					</div><!-- rg-thumbs -->
				</div><!-- rg-gallery -->
			</div><!-- content -->
		</div><!-- container -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="gallery/js/jquery.tmpl.min.js"></script>
		<script type="text/javascript" src="gallery/js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="gallery/js/jquery.elastislide.js"></script>
		<script type="text/javascript" src="gallery/js/gallery.js"></script>












</div> <!-- col -->

	<div class="col-md-4" style="margin-right:0px">




	</div> <!-- col-md-4 -->




</div>


<?php
include 'common/footer.php';
?>