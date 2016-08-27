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

	.album_thumbnail {

		width: 155px;
		margin: 3px;

		border: 1px solid #5c5c5c;
		padding: 2px;
		font-family: tahoma;
		font-size:1em;
		line-height: 1em;
		color:#000000;
		float: left;
		background-color: #ffffff;

		/* display: inline-block; */

	}

	.album_thumbnail img{

		width: 138px;
		height: 115px;


	}

	.album_thumbnail p{

		display: block;
		text-align: center;
		height: 30px;


	}



#clear_both {

	clear: both;

}
</style>



<div class="clearfix">

<div class="col-md-8">



	<div id="gallery_container">
	<h3><span class="label label-primary"> PHOTO GALLERY </span></h3>
	<?php

	//directeroy path
	$path='images/albums';
	//$files = scandir($path);


	//echo 'the file inside 0 : '.$files[2].'<br />';

	/* used for php version 5.0 only
	foreach($files as $dir) {

		if(substr($dir,0,1) != '.') {

			//echo 'inside :'. $dir . '<br />';
			//echo 'path : ' . $path . '/'.$dir.'/<br />';

			echo '<div class="album_thumbnail"><a href="show_images3.php?album='.$dir.'"><img src="'. $path.'/'.$dir.'/album.jpg" /><p>'.$dir.'</p></a></div>';


		}
	}
	*/

	if ($handle = opendir($path)) {
	    while (false !== ($dir = readdir($handle))) {
	        if (substr($dir,0,1) != '.') {

	            echo '<div class="album_thumbnail"><a href="show_images3.php?album='.$dir.'"><img src="'. $path.'/'.$dir.'/album.jpg" /><p>'.$dir.'</p></a></div>';

	        }
	    }
	    closedir($handle);
	}
	?>

	<div id="clear_both"> </div>
	</div>








</div> <!-- col -->

	<div class="col-md-4" style="margin-right:0px">


	<?php
      include 'common/main_menu.php';
      include 'common/featured.php';
    ?>


	</div> <!-- col-md-4 -->




</div>


<?php
include 'common/footer.php';
?>