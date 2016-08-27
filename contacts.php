<?php
	session_start();
	include 'common/header.php';
	require_once 'tools/email.php';
?>
<div class="clearfix">
<div class="col-md-8 email">

<?php
	if(isset($errors)):
	if(count($errors) > 0):
?>
				<div class="panel panel-danger" >
		        <div class="panel-heading">
	            <h3 class="panel-title">Error(s) Found</h3>
		        </div>
		        <div class="panel-body">
		        Thanks for trying to contact us, however, we encountered the following error(s)!Please hit back on your browser and try again.
				<?php
					echo "<ul style='color:#ffa7a7;font-size:.9em;'>";
					foreach($errors as $error) {
					echo "<li>".$error."</li>";
					}
					echo "</ul>";
				?>
		        </div>
		   	 	</div>

<?php
	else:
?>
				<div class="panel panel-success" >
		        <div class="panel-heading">
	            <h3 class="panel-title">Success</h3>
		        </div>
		        <div class="panel-body">
		        <em class="text-success">Thank you for contacting us. We will reply on your concern as soon as possible.</em>
				</div>
		   	 	</div>
<?php
	endif; //if isset($errors)
	endif; //if count($errors)
?>

<div class="panel panel-warning" >
<div class="panel-heading">
<h3 class="panel-title">EMAIL US</h3>
</div>
<form class="form-horizontal emails" action="contacts.php" method="post" style="margin:10px;">
        <div class="form-group">
            <label for="inputName" class="control-label col-md-2">Name</label>
            <div class="col-md-10">
               <input type="text" id="inputName" class="form-control" name="name" maxlength="60" value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>" />
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail" class="control-label col-md-2">Email</label>
            <div class="col-md-10">
                <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email" maxlength="80" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" />
            </div>
        </div>
        <div class="form-group">
            <label for="inputSubject" class="control-label col-md-2">Subject</label>
            <div class="col-md-10">
               <input type="text" id="inputSubject" class="form-control" name="subject" maxlength="80" value="<?php if(isset($_POST['subject'])) echo $_POST['subject']; ?>" />
            </div>
        </div>
        <div class="form-group">
        <label for="inputComments" class="control-label col-md-2">Comments</label>
        <div class="col-md-10">
                    <textarea class="form-control" id="inputComments" name="comments" rows="10"></textarea>
        </div>
        </div>
        <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
                <button type="submit" class="btn btn-primary" name="submit" value="Send!" />Submit</button>
            </div>
        </div>
        <input type="hidden" name="submitted" value="TRUE" />
    </form>

</div> <!-- panel -->


<style type="text/css">
.map_container{
    position: relative;
    width: 100%;
    padding-bottom: 56.25%; /* Ratio 16:9 ( 100%/16*9 = 56.25% ) */
}
.map_container .map_canvas{
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    margin: 0;
    padding: 0;
}
</style>

<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(10.307682,123.898727),
    zoom:18,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>

<div class="panel panel-warning" >
<div class="panel-heading">
<h3 class="panel-title">OUR LOCATION</h3>
</div>

<div class="map_container">
    <div id="googleMap" class="map_canvas"></div>
</div>

</div> <!-- panel -->

</div> <!-- col -->

	<div class="col-md-4" >


				<div class="panel panel-warning">
		        <div class="panel-heading">
	            <h3 class="panel-title">CONTACT INFORMATION</h3>
		        </div>
		        <div class="panel-body" style="padding: 0px 20px">
				<p style="margin:5px">
						  Casino Espa&ntilde;ol de Cebu, Inc.<br>
			              107-109 V. Ranudo Street<br>
			              Cebu City 6000, Philippines<br>
			              <br>
			              Phone: +63 32 253 1260 to 64<br>
			              Fax: +63 32 253 3131, 253 1265<br>
			              <br>
			              E-mail: cec@casinoespanol.ph<br>
			              Website: www.casinoespanol.ph<br>
			              <br>
			            <table class="table table-striped table-hover table-condensed">
			                <tr><td>General Manager </td><td>253-1260 loc 200</td> </tr>
			                <tr><td>Business Center </td><td>254-2648 </td> </tr>
			                <tr><td>Purchaser </td><td>253-1265 </td> </tr>
			                <tr><td>Kitchen </td><td>253-8337 </td> </tr>
			                <tr><td colspan="2">Mobile Phone</td></tr>
			                <tr><td>General Manager</td><td>0917-6254387 </td> </tr>
			                <tr><td>Admin/Finance</td><td>0917-6209683 </td> </tr>
			                <tr><td>Events Manager </td><td>0917-6219703 </td> </tr>
			                <tr><td>HR </td><td>0917-6254389 </td> </tr>
			                <tr><td>Purchasing </td><td>0917-6219705 </td> </tr>

			              </table>


			              <br>
			             <strong>General Manager's Office</strong><br>
			             <table class="table table-striped table-hover table-condensed">

			                <tr align="left" valign="top">
			                  <td width="9%" height="11">&nbsp;</td>
			                  <td width="52%">General Manager<br>

			                    Secretary|Manager </td>
			                  <td width="39%">loc. 200<br>
			                    loc. 201</td>
			                </tr>
			              </table>
			              <br>
			              <strong>Finance Department</strong><br>
			              <table width="100%" border="0" cellpadding="0" cellspacing="0" class="news01">
			                <tr align="left" valign="top">
			                  <td width="9%" height="11">&nbsp;</td>
			                  <td width="52%">Finance Controller<br>
			                    Accountant<br>
			                    Internal Auditor<br>
			                    Cashier<br>
			                    Billing<br>
			                    A/P - Proprietary<br>
			                    Cost &amp; Inventory<br>
			                    Purchasing<br>
			                  <td width="39%">loc. 202<br>
			                    loc. 205<br>
			                    loc. 206<br>
			                    loc. 203<br>
			                    loc. 204<br>
			                    loc. 208<br>
			                    loc. 222<br>
			                    loc. 207<br>

			                </tr>
			              </table>
			              <br>
			              <strong>Human Resource Deparment</strong><br>
			              <table width="100%" border="0" cellpadding="0" cellspacing="0" class="news01">
			                <tr align="left" valign="top">
			                  <td width="9%" height="11">&nbsp;</td>
			                  <td width="52%">HR Officer</td>
			                  <td width="39%">loc. 209</td>
			                </tr>
			              </table>
			              <br>
			              <strong>Maintenance Department</strong><br>
			              <table width="100%" border="0" cellpadding="0" cellspacing="0" class="news01">
			                <tr align="left" valign="top">
			                  <td width="9%" height="11">&nbsp;</td>
			                  <td width="52%">Maintenance Supervisor</td>
			                  <td width="39%">loc. 213</td>
			                </tr>
			              </table>
			              <br>
			              <strong>Marketing Department</strong><br>
			              <table width="100%" border="0" cellpadding="0" cellspacing="0" class="news01">
			                <tr align="left" valign="top">
			                  <td width="9%" height="11">&nbsp;</td>
			                  <td width="52%">Business Center</td>
			                  <td width="39%">loc. 210/211/212</td>
			                </tr>
			              </table>
			              <br>
			              <strong>Kitchen Department</strong><br>
			              <table width="100%" border="0" cellpadding="0" cellspacing="0" class="news01">
			                <tr align="left" valign="top">
			                  <td width="9%" height="33">&nbsp;</td>
			                  <td width="52%">Chef's Office<br>
			                    Take-out counter<br>

			                  <td width="39%">loc. 220<br>
			                    loc. 219<br>

			                </tr>
			              </table>
			              <br>
			              <strong>Outlets</strong><br>
			              <table width="100%" border="0" cellpadding="0" cellspacing="0" class="news01">
			                <tr align="left" valign="top">
			                  <td width="9%" height="33">&nbsp;</td>
			                  <td width="52%">Bar Mixto<br>
			                      Kado/La Taberna<br>
			                      La Terraza<br>
			                      Banquet Pantry<br>
			                      Gym
			                  </td>
			                  <td width="39%">loc. 215<br>
			                    loc. 218<br>
			                    loc. 214<br>
			                    loc. 221<br>
			                    loc. 216</td>
			                </tr>
			              </table>


				</p>



				</div>
		   	 	</div>


	</div> <!-- col-md-4 -->






</div>








<?php
	include 'common/footer.php';
?>