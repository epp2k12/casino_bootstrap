<?php
session_start();
include 'common/header.php';
?>
<div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel" style="margin-top:0"><!-- class of slide for animation -->
		<ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>
				  <div class="carousel-inner">
				    <div class="item active"><!-- class of active since it's the first item -->
				      <img src="images/carousel/food/05.jpg" alt="" />
				      <div class="carousel-caption">
				      </div>
				    </div>
				    <div class="item">
				      <img src="images/carousel/food/02.jpg" alt="" />
				      <div class="carousel-caption">
				      </div>
				    </div>
				    <div class="item">
				      <img src="images/carousel/food/03.jpg" alt="" />
				      <div class="carousel-caption">
				      </div>
				    </div>
				    <div class="item">
				      <img src="images/carousel/food/04.jpg" alt="" />
				      <div class="carousel-caption">
				      </div>
				    </div>
				  </div><!-- /.carousel-inner -->
  <!--  Next and Previous controls below
        href values must reference the id for this carousel -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
</div><!-- /.carousel -->

<div class="clearfix" style="background-color:#fff2f1;">

		<div class="col-md-8 specials">


				<div class="panel">
		        <div class="panel-heading" style="background-color:#a80000;color:#ffffff">
	            <h3 class="panel-title">PASTEL DE LENGUA (Chef's special for October 2016) </h3>
		        </div>
		        <img class="img-thumbnail" src="images/chef_specials/2016chefspecialoctober.jpg">
		        <div class="panel-body">Tasty, juicy and creamy ox tongue inside of a flaky and yummy crust
		        <div class="special_buttons text-right">
		        </div>
		        </div>
		   	 	</div>

				<div class="panel">
		        <div class="panel-heading" style="background-color:#a80000;color:#ffffff">
	            <h3 class="panel-title">SEAFOOD COMBO PLATTER (Chef's special for September 2016) </h3>
		        </div>
		        <img class="img-thumbnail" src="images/chef_specials/seafood.jpg">
		        <div class="panel-body">A combo of the best seafood dishes. Breaded squid, nicely grilled fish fillet, shrimp rebosado &amp; baked clams served with belgian fires
		        <div class="special_buttons text-right">
		        </div>
		        </div>
		   	 	</div>


				<div class="panel panel-danger">
		        <div class="panel-heading">
	            <h3 class="panel-title">PAN FRIED MAHI-MAHI FILLET (Chef's special for JULY 2016) </h3>
		        </div>
		        <img class="img-thumbnail" src="images/chef_specials/pan_fried_mahi_mahi.jpg">
		        <div class="panel-body">A mouthwatering dish fish lover will enjoy, sautéed with butter, lemon juice, garlic, salt and pepper to taset and fresh basil for aromatic herb experience.
		        <div class="special_buttons text-right">
		        </div>
		        </div>
		   	 	</div>

				<div class="panel panel-danger">
		        <div class="panel-heading">
	            <h3 class="panel-title">TERIYAKI BARBECUE PORK RIBS</h3>
		        </div>
		        <img class="img-thumbnail" src="images/chef_specials/teriyaki_barbecue.jpg">
		        <div class="panel-body">A variation from the traditional bbq flavored ribs, infused with a robust Asian Flavor using our popular teriyaki marinade recipe. Grilled beautifully with shiny glaze that sticks to your finger.
		        <div class="special_buttons text-right">
		        </div>
		        </div>
		   	 	</div>

				<div class="panel panel-danger">
		        <div class="panel-heading">
	            <h3 class="panel-title">FISH PAUPIETTE w/ Saffron Cream Sauce</h3>
		        </div>
		        <img class="img-thumbnail" src="images/chef_specials/fishpaupiette.jpg">
		        <div class="panel-body">This dish epitomizes Frindian Food, combining classic French and Indian twist with white fish contrasting beautifully with the yellow sauce. The taste is subtle yet complex. It is the perfect recipe you will surely love.
		        <div class="special_buttons text-right">
		        </div>
		        </div>
		   	 	</div>

				<div class="panel panel-danger" >
		        <div class="panel-heading">
	            <h3 class="panel-title">Pollo Vascongado</h3>
		        </div>
		        <img class="img-thumbnail" src="images/chef_specials/01.png">
		        <div class="panel-body"> A traditional and authentic dish from Spain made of delicious chicken, shrimps and added with wine. A taste that you will never forget.
		        <div class="special_buttons text-right">
		        </div>
		        </div>
		   	 	</div>

		   	 	<!--
				<div class="panel panel-danger" >
		        <div class="panel-heading">
	            <h3 class="panel-title">Huevos a la Flamenca</h3>
		        </div>
		        <img class="img-thumbnail" src="images/chef_specials/02.png">
		        <div class="panel-body">Enjoy our Chef's Favorite and Mastered Recipe's that would delight your taste buds and send you through a nostalgia of high gastronomic satisfaction.
		        <div class="special_buttons text-right">
		        </div>
		        </div>
		   	 	</div>

				<div class="panel panel-danger" >
		        <div class="panel-heading">
	            <h3 class="panel-title">Sopa al Cuarto de Hora</h3>
		        </div>
		        <img class="img-thumbnail" src="images/chef_specials/03.png">
		        <div class="panel-body">Enjoy our Chef's Favorite and Mastered Recipe's that would delight your taste buds and send you through a nostalgia of high gastronomic satisfaction.
		        <div class="special_buttons text-right">
		        </div>
		        </div>
		   	 	</div>

				<div class="panel panel-danger" >
		        <div class="panel-heading">
	            <h3 class="panel-title">Solomillo a la Sevillana</h3>
		        </div>
		        <img class="img-thumbnail" src="images/chef_specials/04.png">
		        <div class="panel-body">Enjoy our Chef's Favorite and Mastered Recipe's that would delight your taste buds and send you through a nostalgia of high gastronomic satisfaction.
		        <div class="special_buttons text-right">
		        </div>
		        </div>
		   	 	</div>

		   	 	-->

		</div>



		<div class="col-md-4" style="margin:15px 0">

				<div class="panel">

		        <div class="panel-heading" style="background-color:#a80000;color:#fff">
	            <h3 class="panel-title">Chef Agustin Villarante</h3>
		        </div>

		        <div class="panel-body">
		        <img src="images/chef_specials/chef.jpg" style="width:100%">
		        Enjoy our <strong>Chef Agustin Villarante's</strong> Favorite and Mastered Recipes that would delight your taste buds and send you through a nostalgia of high gastronomic satisfaction.
		        <div class="special_buttons text-right">
		        </div>
		        </div>

		   	 	</div>

		   	 	<?php
		   	 		include "common/main_menu.php"
		   	 	?>

		</div>





</div>



<?php
include 'common/footer.php';
?>







