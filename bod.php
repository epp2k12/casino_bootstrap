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

.bodname img {
	border: 3px solid #c2c2c2;
	padding:5px;
}
</style>


<div class="row">

<div class="col-md-8 bodpictures">

	<div class="panel" style="background-color:#ffefbe; margin: 10px;padding:10px">

		<div class="panel-heading" style="background-color:#a80000;color:#fff">
			<h3 class="panel-title">BOARD OF DIRECTORS 2015</h3>
		</div>


		
		<div class="row">
		<div class="col-md-12 bodname">
		<img src="images/bod/Moro.jpg" class="img-responsive center-block" />
		LUIS MORO III<br/>
		Presidente
		</div>
		</div>


		<div class="row">
		<div class="col-md-6 bodname">
		<img src="images/bod/gonzales.jpg" class="img-responsive center-block" />
		EDUARDO G. GONZALEZ<br/>
		Vice Presidente
		</div>

		<div class="col-md-6 bodname">
		<img src="images/bod/chiongbian.jpg" class="img-responsive center-block" />
		EDGAR CHIONGBIAN<br/>
		Secretario
		</div>
		</div>


		<div class="row">
		<div class="col-md-6 bodname">
		<img src="images/bod/kintanar.jpg" class="img-responsive center-block" />
		RENATO Y. KINTANAR<br/>
		Tesorero
		</div>

		<div class="col-md-6 bodname">
		<img src="images/bod/jarque.jpg" class="img-responsive center-block" />
		FRANCISCO C. JARQUE JR.<br/>
		Director del Comite de Servicios
		</div>
		</div>

		<div class="row">
		<div class="col-md-6 bodname">
		<img src="images/bod/leyson.jpg" class="img-responsive center-block" />
		GABRIEL V. LEYSON<br/>
		Director de Actividades Sociales y Culturales
		</div>

		<div class="col-md-6 bodname">
		<img src="images/bod/predices.jpg" class="img-responsive center-block" />
		ANTON MARI PERDICES<br/>
		Director de Actividades Deportivas
		</div>
		</div>

</div> <!-- panel -->
</div> <!-- col -->

		<div class="col-md-4" style="margin:10px 0px">
		<?php
	      include 'common/main_menu.php';
	      	      include 'common/featured.php';
	    ?>
		</div> <!-- col-md-4 -->


</div> <!-- row -->

<?php
include 'common/footer.php';
?>