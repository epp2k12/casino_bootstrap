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

<div class="clearfix" style="background-color:black">

<div class="col-md-4 bodpictures">


<div class="panel" style="background-color:#ffffff;">

	<div class="panel-heading" style="background-color:#a80000;color:#fff">
		<h3 class="panel-title">GASTRONOMIC EVENTS ON OCTOBER</h3>
	</div>

	<div id="img_container">
		<img id="img_events" src="images/events_page/2015SeptemberEvents.jpg" class="img-responsive center-block"/>
	</div>

</div> <!-- panel -->



</div> <!-- col -->


	<div class="col-md-8" style="margin-right:0px">



<!--
<div class="panel" style="background-color:#ffffff;">

	<div class="panel-heading" style="background-color:#a80000;color:#fff">
		<h3 class="panel-title">GASTRONOMIC EVENTS ON OCTOBER</h3>
	</div>

	<div id="calendar_container">

		<div id="calendar" style="margin:10px">

		<table class="table table-condensed">
		<tr class="t_title"><td><b>Day</td><td> <b>Event</td></tr>


		<tr class="day"><td style="width:5px">1</td><td>Tuesday</td></tr>
		<tr class="day_activities"><td colspan="2"><b>CRAZY TUESDAY</b><br/>PIZZA PROMO 5% OFF<br/>5PM-7PM only<br /><br/>ALL AMERICAN BURGER<br/>20% OFF WHOLE DAY<br/>
		</td></tr>

		<tr class="special_day"><td>2</td><td>Wednesday</td></tr>
		<tr class="special_day_activities"><td colspan="2"><span class="special_activity_title">OYSTER NIGHT</span><br />@Bar Mixto<br /><br />
		Country Music Night<br />w/Mario Blanco<br />at Bar Mixto<br />
		</td></tr>

		<tr class="day"><td>3</td><td>Thursday</td></tr>
		<tr class="day_activities"><td colspan="2">WITH LIVE BAND<br />@Bar Mixto<br />8pm<br/>
		</td></tr>

		<tr class="day"><td>4</td><td>Friday</td></tr>
		<tr class="day_activities"><td colspan="2">
		ASIAN EXPEDITION<br /> Dinner Buffet<br />at La Terraza<br /><br />
		MUSIC N MOTION at Bar Mixto<br />8:00PM to 11:00PM<br />
		</td></tr>

		<tr class="day"><td>5</td><td>Saturday</td></tr>
		<tr class="day_activities"><td colspan="2">
		A TASTE OF <br />INTERNATIONAL<br />Dinner Buffet<br />@ La Terraza<br />w/Serenaders Band<br /><br />
		In house pianest at Bar Mixto<br />
		</td></tr>

		<tr class="day"><td>6</td><td>Sunday</td></tr>
		<tr class="day_activities"><td colspan="2">
		EUROPEAN DELIGHT<br />Lunch and Dinner Buffet<br />at La Terraza<br /><br />
		</td></tr>

		<tr class="day"><td>7</td><td>Monday</td></tr>
		<tr class="day_activities"><td colspan="2">KARAOKE NIGHT<br />@ BAR MIXTO<br />8pm<br />
		</td></tr>

		<tr class="day"><td>8</td><td>Tuesday</td></tr>
		<tr class="day_activities"><td colspan="2"><b>CRAZY TUESDAY</b><br/>PIZZA PROMO 5% OFF<br/>5PM-7PM only<br /><br/>ALL AMERICAN BURGER<br/>20% OFF WHOLE DAY<br/>
		</td></tr>

		<tr class="special_day"><td>9</td><td>Wednesday</td></tr>
		<tr class="special_day_activities"><td colspan="2"><span class="special_activity_title">TAPAS NIGHT</span><br />@Bar Mixto<br /><br />
		Country Music Night<br />w/Mario Blanco<br />at Bar Mixto<br />
		</td></tr>

		<tr class="day"><td>10</td><td>Thursday</td></tr>
		<tr class="day_activities"><td colspan="2">WITH LIVE BAND<br />@Bar Mixto<br />8pm<br/>
		</td></tr>

		<tr class="day"><td>11</td><td>Friday</td></tr>
		<tr class="day_activities"><td colspan="2">
		ASIAN EXPEDITION<br /> Dinner Buffet<br />at La Terraza<br /><br />
		MUSIC N MOTION at Bar Mixto<br />8:00PM to 11:00PM<br />
		</td></tr>

		<tr class="day"><td>12</td><td>Saturday</td></tr>
		<tr class="day_activities"><td colspan="2">
		A TASTE OF <br />INTERNATIONAL<br />Dinner Buffet<br />@ La Terraza<br />w/Serenaders Band<br /><br />
		In house pianest at Bar Mixto<br />
		</td></tr>

		<tr class="special_day"><td>13</td><td>Sunday</td></tr>
		<tr class="special_day_activities"><td colspan="2"><span class="special_activity_title">Grandparent's day Special</span><br />Lunch and Dinner Buffet
		<br/>at La Terraza<br /><br />
		</td></tr>

		<tr class="day"><td>14</td><td>Monday</td></tr>
		<tr class="day_activities"><td colspan="2">KARAOKE NIGHT<br />@ BAR MIXTO<br />8pm<br />
		</td></tr>

		<tr class="day"><td>15</td><td>Tuesday</td></tr>
		<tr class="day_activities"><td colspan="2"><b>CRAZY TUESDAY</b><br/>PIZZA PROMO 5% OFF<br/>5PM-7PM only<br /><br/>ALL AMERICAN BURGER<br/>20% OFF WHOLE DAY<br/>
		</td></tr>

		<tr class="special_day"><td>16</td><td>Wednesday</td></tr>
		<tr class="special_day_activities"><td colspan="2"><span class="special_activity_title">Prime Rib Night</span><br />at El Comedor<br /><br />
		Country Music Night<br />w/Mario Blanco<br />at Bar Mixto<br />
		</td></tr>

		<tr class="day"><td>17</td><td>Thursday</td></tr>
		<tr class="day_activities"><td colspan="2">WITH LIVE BAND<br />@Bar Mixto<br />8pm<br/>
		</td></tr>

		<tr class="day"><td>18</td><td>Friday</td></tr>
		<tr class="day_activities"><td colspan="2">
		ASIAN EXPEDITION<br /> Dinner Buffet<br />at La Terraza<br /><br />
		MUSIC N MOTION at Bar Mixto<br />8:00PM to 11:00PM<br />
		</td></tr>

		<tr class="day"><td>19</td><td>Saturday</td></tr>
		<tr class="day_activities"><td colspan="2">
		A TASTE OF <br />INTERNATIONAL<br />Dinner Buffet<br />@ La Terraza<br />w/Serenaders Band<br /><br />
		In house pianest at Bar Mixto<br />
		</td></tr>

		<tr class="day"><td>20</td><td>Sunday</td></tr>
		<tr class="day_activities"><td colspan="2">
		EUROPEAN DELIGHT<br />Lunch and Dinner Buffet<br />at La Terraza<br /><br />
		</td></tr>

		<tr class="day"><td>21</td><td>Monday</td></tr>
		<tr class="day_activities"><td colspan="2">KARAOKE NIGHT<br />@ BAR MIXTO<br />8pm<br />
		</td></tr>

		<tr class="day"><td>22</td><td>Tuesday</td></tr>
		<tr class="day_activities"><td colspan="2"><b>CRAZY TUESDAY</b><br/>PIZZA PROMO 5% OFF<br/>5PM-7PM only<br /><br/>ALL AMERICAN BURGER<br/>20% OFF WHOLE DAY<br/>
		</td></tr>

		<tr class="special_day"><td>23</td><td>Wednesday</td></tr>
		<tr class="special_day_activities"><td colspan="2"><span class="special_activity_title">CHICKEN BBQ<br />DELIGHT</span><br />at Bar Mixto<br /><br />
		Country Music Night<br />w/Mario Blanco<br />at Bar Mixto<br />
		</td></tr>

		<tr class="day"><td>24</td><td>Thursday</td></tr>
		<tr class="day_activities"><td colspan="2">WITH LIVE BAND<br />@Bar Mixto<br />8pm<br/>
		</td></tr>

		<tr class="day"><td>25</td><td>Friday</td></tr>
		<tr class="day_activities"><td colspan="2">
		ASIAN EXPEDITION<br /> Dinner Buffet<br />at La Terraza<br /><br />
		MUSIC N MOTION at Bar Mixto<br />8:00PM to 11:00PM<br />
		</td></tr>

		<tr class="day"><td>26</td><td>Saturday</td></tr>
		<tr class="day_activities"><td colspan="2">
		A TASTE OF <br />INTERNATIONAL<br />Dinner Buffet<br />@ La Terraza<br />w/Serenaders Band<br /><br />
		In house pianest at Bar Mixto<br />
		</td></tr>

		<tr class="day"><td>27</td><td>Sunday</td></tr>
		<tr class="day_activities"><td colspan="2">
		EUROPEAN DELIGHT<br />Lunch and Dinner Buffet<br />at La Terraza<br /><br />
		</td></tr>

		<tr class="day"><td>28</td><td>Monday</td></tr>
		<tr class="day_activities"><td colspan="2">KARAOKE NIGHT<br />@ BAR MIXTO<br />8pm<br />
		</td></tr>

		<tr class="day"><td>29</td><td>Tuesday</td></tr>
		<tr class="day_activities"><td colspan="2"><b>CRAZY TUESDAY</b><br/>PIZZA PROMO 5% OFF<br/>5PM-7PM only<br /><br/>ALL AMERICAN BURGER<br/>20% OFF WHOLE DAY<br/>
		</td></tr>

		<tr class="special_day"><td>30</td><td>Wednesday</td></tr>
		<tr class="special_day_activities"><td colspan="2"><span class="special_activity_title">BIRTHDAY BASH <br /> AND FELLOWSHIP NIGHT</span><br />at El Comedor<br /><br />
		Country Music Night<br />w/Mario Blanco<br />at Bar Mixto<br />
		</td></tr>

		</table>
		</div>

	</div>





</div> <!-- panel -->
-->







</div> <!-- col-md-4 -->




</div>


<?php
include 'common/footer.php';
?>