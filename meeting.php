<?php
session_start();
include 'common/header.php';
?>

<div class="clearfix" style="background-color:black">
<div class="col-md-8">

<style type="text/css">

#meeting_container {
color:#fff;
padding:5px;
}

#meeting_intro {
	padding:5px;
	color:#FCFFAD;
	font-size:1em;
}

.meeting {
overflow:auto;
border:1px solid gray;
margin:10px;
font-size:.9em;
min-height: 240px;
}

.meeting_details {
	padding: 15px;
	overflow:auto;
}

.meeting_image > img{
	margin:10px;
	border: 1px solid gray;
	padding:4px;
}
.meeting_title {
	font-size: 1.4em;
}

.nopadding {
   padding: 0 !important;
   margin: 0 !important;
}

</style>

<div id="meeting_container" class="row">

		<div id="meeting_intro">
			Casino Espa&#241;ol de Cebu is the best place for meetings, presentations,
				conventions, receptions, parties and other important events.
				We are well-equipped with modern facilities and offers a variety of
				services including WIFI connectivity. We can provide you with
				function rooms that can be a perfect setting for a wide variety
				of activities from product launching and display to trade exhibits,
		and other social events.

		</div>


		<div class="meeting">

			<div class="meeting_image col-sm-5" class="nopadding">
			<img src="images/meeting/mtg04.jpg" class="img-responsive">
			</div>

			<div class="meeting_details col-sm-7" >
				<div class="meeting_title">SALON DE ESPA&#209;A</div>
				Capacity: 500 persons<br/><br/>
				Perfect for large gatherings like Wedding Receptions,<br/>
				Seminar and Conventions.
			</div>

		</div>

		<div class="meeting">

			<div class="meeting_image col-sm-5">
			<img src="images/meeting/mtg06.jpg" class="img-responsive">
			</div>

			<div class="meeting_details col-sm-7" >
				<div class="meeting_title">ZARAGOSA (Board Room)</div>
				Capacity: 12 persons<br/><br/>
				Perfect for Business Meetings.<br/>
			</div>

		</div>

		<div class="meeting">

			<div class="meeting_image col-sm-5">
			<img src="images/meeting/mtg01.jpg"  class="img-responsive">
			</div>

			<div class="meeting_details col-sm-7" >
				<div class="meeting_title">GRANADA</div>
				Capacity: 120 persons<br/><br/>
				Perfect for Birthday Celebrations, Conference, <br/>
				Business Meetings and Corporate Seminars.<br/>
			</div>

		</div>

		<div class="meeting">

			<div class="meeting_image col-sm-5">
			<img src="images/meeting/mtg03.jpg" class="img-responsive">
			</div>

			<div class="meeting_details col-sm-7" >
				<div class="meeting_title">AZOTEA(adjoining Granada)</div>
				Granada w/Azotea<br/>
				Capacity: 170 persons<br/>
				<br/><br/>
				This is a veranda adjoining Granada.<br/>
			</div>

		</div>

		<div class="meeting">

			<div class="meeting_image col-sm-5">
			<img src="images/meeting/mtg08.jpg" class="img-responsive">
			</div>

			<div class="meeting_details col-sm-7" >
				<div class="meeting_title">SALON DE MADRID</div>
				Capacity: 30 persons<br/><br/>
				Best for Business Meetings,Seminars and other occasions.
			</div>

		</div>

		<div class="meeting">

			<div class="meeting_image col-sm-5">
			<img src="images/meeting/mtg09.jpg" class="img-responsive">
			</div>

			<div class="meeting_details col-sm-7" >
				<div class="meeting_title">BARCELONA/BILBAO</div>
				Barcelona<br/>
				Capacity: 80 persons
				<br/><br/>
				Bilbao<br/>
				Capacity: 40 persons
				<br/><br/>
				Barcelona and Bilbao<br/>
				Capacity: 110 persons<br/>
				Best for Birthday and Wedding Receptions.<br/>
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