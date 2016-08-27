<?php
session_start();
include 'common/header.php';
?>


<div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel" style="margin : 0 0 0 0"><!-- class of slide for animation -->
<ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
            <li data-target="#myCarousel" data-slide-to="6"></li>
        </ol>
  <div class="carousel-inner">

    <div class="item active"><!-- class of active since it's the first item -->
      <img src="images/carousel/home/04.jpg" alt="" />
      <div class="carousel-caption">
      	<h3>Casino Espanol de Cebu, Inc.</h3>
        <p>The Spanish Tradition lives on through Casino Español de Cebu</p>
      </div>
    </div>
    <div class="item">
      <img src="images/carousel/home/02.jpg" alt="" />
      <div class="carousel-caption">
        <h3>Best place for all occasions</h3>
        <p>You can celebrate special moments with us</p>
      </div>
    </div>
    <div class="item">
      <img src="images/carousel/home/10.jpg" alt="" />
      <div class="carousel-caption">
        <h3>Authentic Spanish Cuisine</h3>
        <p>Taste the most authentic spanish delights</p>
      </div>
    </div>
    <div class="item">
      <img src="images/carousel/home/03.jpg" alt="" />
      <div class="carousel-caption">
        <h3>Poolside Fun</h3>
        <p>Spend you time relaxing and swimming</p>
      </div>
    </div>
    <div class="item">
      <img src="images/carousel/home/06.jpg" alt="" />
      <div class="carousel-caption">
        <h3>Fun and Excitement</h3>
        <p>Best place to relax with your family</p>
      </div>
    </div>


    <div class="item">
      <img src="images/carousel/home/09.jpg" alt="" />
      <div class="carousel-caption">
        <h3>Best dining experience</h3>
        <p>Enjoy great food and service in our first class resto and bars</p>
      </div>
    </div>
    <div class="item">
      <img src="images/carousel/home/11.jpg" alt="" />
      <div class="carousel-caption">
        <h3>Health is wealth</h3>
        <p>You can enjoy our sports activities and exercise with the best gym facilities</p>
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

<div class="clearfix main_content row">

	<div class="col-md-8 index_main">
		<div class="welcome panel panel-default" style="padding:30px;background-color:#010153;color:#ebebeb">
		<h4>Welcome to Casino Español!</h4>
		<p class="text-justify">The Casino Español de Cebu, Inc. is a non-stock, and non-profit corporation domiciled in the City of Cebu, Republic of the Philippines, organized for the purpose of providing its members, their spouses and minor children, social, recreational, sports and cultural facilities and activities proper for a good organization formenting unity, promoting the Spanish language and culture, and the spirit of harmony and cooperation among members, absolutely disregarding racial prejudice, political creed and religious beliefs.</p>
		<p class="text-justify">The Spanish Tradition lives on through Casino Español de Cebu. It is Cebu’s club of choice - a well patronized, financially sustainable world-class landmark where families, friends and guests relax, meet and consider it their second home; where members, guests and Cebu’s elite gather to talk and transact business.</p>
		<p class="text-justify">Our mission statements are to offer excellent food with efficient services at the most competitive prices that delight our members and their guests; to ensure that our impressive physical structures, excellent recreational and leisure facilities and amenities are well-maintained; and to promote an atmosphere of collegiality and camaraderie among its members through various relevant activities.</p>
		</div>

		<div class="row" style="padding:10px">

			<div class="col-md-4">
			<div class="panel panel-warning chef_page_tip index_panel" >
		        <div class="panel-heading">
		            <a href="chef.php"><h3 class="panel-title">Chef's Specials</h3></a>
		        </div>
		        <div class="panel-body">Enjoy our Chef's Favorite and Mastered Recipe's that would delight your taste buds and send you through a nostalgia of high gastronomic satisfaction.
		        <div class="special_buttons text-right">
		        <a href="chef.php" class="btn  btn-warning btn-xs">View More ...</a>
		        </div>
		        </div>

		    </div>
		    </div>

		    <div class="col-md-4">
		    <div class="panel panel-warning index_panel">
		        <div class="panel-heading">
		            <h3 class="panel-title"><a href="weekend_buffet.php">Weekend Buffet</a></h3>
		        </div>
		        <div class="panel-body">Friday's, Saturday's and Sunday's are always a treat of delicious food. Ranging from filipino to international dishes and specialties. It is like
		        travelling and savoring authentic dishes of different countries. Weekend's are always special.
		         <div class="special_buttons text-right">
		        <a href="weekend_buffet.php" class="btn  btn-warning btn-xs">Let's go dine ...</a>
		        </div>
		        </div>
		    </div>
		    </div>

		    <div class="col-md-4">
		    <div class="panel panel-warning index_panel">
		        <div class="panel-heading">
		            <h3 class="panel-title"><a href="promo.php">Casino Promo</a></h3>
		        </div>
		        <div class="panel-body">Enjoy discounts on beers during happy hours. Burgers and Pizzas are much cheaper and way more yummier here in casino.
  				<div class="special_buttons text-right">
		        <a href="promo.php" class="btn btn-warning btn-xs">See our promo ...</a>
		        </div>
		        </div>
		    </div>
		    </div>
      
    </div>
	</div>

	<div class="col-md-4 aside_main" style="margin-right:0px">

	   <?php
      include 'common/main_menu.php';
      include 'common/fb.php';
    ?>

	</div> <!-- col-md-4 -->

</div> <!-- row -->




<?php
include 'common/footer.php';
?>