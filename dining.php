<?php
session_start();
include 'common/header.php';
?>

<div class="clearfix" style="background-color:black">

<div class="col-md-8">

	<style type="text/css">

		#dining_container {
		color:#fff;
		padding:5px;
		}

		.dining {
		overflow:hidden ;
		margin:10px;
		border:1px solid gray;
		font-size: .9em;
		min-height: 270px;

		}

		.dining_title {
			font-size: 1.4em;
		}
		.dining_image > img {
			border: 1px solid gray;
			padding:3px;
			margin-top: 15px;
		}

		.dining_details {
			padding: 20px;
			overflow:auto;
		}
		</style>


<div id="dining_container">

		<div class="dining">

			<div class="dining_image col-sm-6">
			<img class="img-responsive" src="images/dining/laTerraza/image001.jpg" >
			</div>

			<div class="dining_details col-sm-6" >
				<div class="dining_title">La Terraza</div>
				Enjoy your dining on a very refreshing ambiance,
				and savor native and international specialties.
				* Located on the ground floor next to the pool *<br/><br/>
				* Weekend Buffet *<br/>
				Every Friday, Saturday <br/>
				(Dinner Buffet) 6:00pm - 9:00pm<br/>
				Every Sunday<br/>
				(Lunch Buffet ) 11:00am - 2:00pm<br/>
				(Dinner Buffet) 6:00pm - 9:00pm<br/><br/>
				For reservations dial 253-1260 local 704<br/>
			</div>

		</div>



		<div class="dining">

			<div class="dining_image col-sm-6">
			<img src="images/dining/fineDining/image001.jpg" class="img-responsive">
			</div>

			<div class="dining_details col-sm-6" >
				<div class="dining_title">El Comedor</div>
				The stunning ambiance, and its unique dining
				gives you that extra edge to impress business associates.<br/><br/>

				* Business Lunch<br/>
				Every Monday to Friday<br/>
				11:30am - 2:00pm<br/><br/>
				For reservations dial 253-1260 local 702<br/>

			</div>

		</div>

		<div class="dining">

			<div class="dining_image col-sm-6">
			<img src="images/dining/barMixto/image001.jpg" class="img-responsive">
			</div>

			<div class="dining_details col-sm-6" >
				<div class="dining_title">Bar Mixto</div>
				Enjoy this classic and cozy watering hole, 
				where excellent selection of wines,	delicious tapas 
				and	live entertainment is served best.<br/><br/>

				* Every Wednesday Acoustic Night w/Mario Blanco<br/>
				* Every Thursday LIVE BAND<br/>
				* Every Friday Music N Motion<br/>
				* Every Saturday IN-HOUSE PIANIST<br/><br/>
				For reservations dial 253-1260 local 701<br/>
			</div>

		</div>


		<div class="dining">

			<div class="dining_image col-sm-6">
			<img src="images/dining/sportsbar/image001.jpg" class="img-responsive">
			</div>

			<div class="dining_details col-sm-6" >
				<div class="dining_title">Sportsbar</div>
				Relax and enjoy a hearty, healthy and refreshing meal
				after a great physical workout in our sports facilities.<br/><br/>
				For reservations dial 253-1260 local 703<br/>

			</div>

		</div>

		<div class="dining">

			<div class="dining_image col-sm-6">
			<img src="images/dining/kado/kado.jpg" class="img-responsive">
			</div>

			<div class="dining_details col-sm-6" >
				<div class="dining_title">KADO - Japanese Restaurant</div>
				This is the perfect haven for japanese food enthusiasts. Kado provides
				the best and most authentic japanese cuisine in Cebu.<br/><br/>
				Schedule:<br/>
				10:00AM - 2:00PM<br/>
				6:00PM - 12:00MN<br/>
				For reservations dial 253-1260 local 806<br/>

			</div>

		</div>

		<div class="dining">

			<div class="dining_image col-sm-6">
			<img src="images/dining/taberna/taberna.jpg" class="img-responsive">
			</div>

			<div class="dining_details col-sm-6" >
				<div class="dining_title">LA TABERNA</div>
				Wines and the best foods mixed in this taberna. One of the best
				place in Casino where you can relax with your friends while enjoying
				great food and the best wines.
				<br/><br/>
				For reservations dial 253-1260 local 806<br/>

			</div>

		</div>






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