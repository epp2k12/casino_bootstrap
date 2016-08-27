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

<div class="col-md-8">
	<div class="panel" style="background-color:#ffffff;">
	<div class="panel-heading" style="background-color:#a80000;color:#fff">
		<h3 class="panel-title">FACT SHEET</h3>
	</div>

		<div id="fact_image">
			<img src="images/pages/casino_facade.jpg" class="img-responsive center-block"/>
		</div>

		<p>
		<span style="font-size: 13px; font-weight: bold; color:#6d0000;">LOCATION</span><br />
		The Casino Espa&ntilde;ol de Cebu, Inc. is located at 107-109 V. Ranudo Street which is perpendicular to F. Ramos & D. Jakosalem Streets, was a residential district of prominent families during the pre-war years. Most of the ancestral homes are still existing. The garden of the club is adjacent to the Archbishop Palace grounds.
		<br /><br />
		<span style="font-size: 13px; font-weight: bold; color:#6d0000;">ADDRESS</span><br />
		107-109 v. Ranudo Street, Cebu City 6000, Philippines<br />
		Phone   +63 32 253 1260 to 64<br />
		Fax   +63 32 253 1265, 253 3131<br />
		E-mail   info@casinoespanol.ph<br />
		Website www.casinoespanol.ph<br />
		<br />
		<span style="font-size: 13px; font-weight: bold; color:#6d0000;">CLUB HOUSE OPENING</span><br />
		October 2004 - Soft opening of limited outlets, services & sports facilities.<br />
		December 31, 2004 - Grand opening of all outlets & services<br /><br />
		<span style="font-size: 13px; font-weight: bold; color:#6d0000;">OWNERSHIP</span><br />
		Proprietary Membership Club<br /><br />
		<span style="font-size: 13px; font-weight: bold; color:#6d0000;">ARCHITECTS</span><br />
		W.V. Coscolluela & Associates<br /><br />
		<span style="font-size: 13px; font-weight: bold; color:#6d0000;">INTERIOR DESIGNER</span><br />
		Grace S. Reyes Designs, Inc.<br /><br />
		<span style="font-size: 13px; font-weight: bold; color:#6d0000;">LANDSCAPE ARCHITECT</span><br />
		ACL Asia <br /><br /><br /><br />
		</p>

	</div> <!-- panel -->

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