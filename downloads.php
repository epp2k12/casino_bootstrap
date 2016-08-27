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
		<h3 class="panel-title">DOWNLOADS</h3>
	</div>


<div id="form_download">
<p><span style="font-size: 13px; font-weight: bold; color:#6d0000;">Download Forms</span></p>


	<ul>
	<li><a href="documents/applicationfrms.pdf" target="_blank">Application for Membership</a></li>
	<li><a href="documents/changeofsignatory_frms.pdf" target="_blank">Application for a Change of Signatory</a></li>
	</ul>

</div>







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