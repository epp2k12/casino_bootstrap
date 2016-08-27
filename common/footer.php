
<!-- If you'd like to support WordPress, having the "powered by" link somewhere on your blog is the best way; it's our only promotion or advertising. -->

	<div class="" style="background:#010153;margin-bottom:0;height:100px;color:#ffffff">
		<p class="text-center">
			<br /><br />
			<?php echo "&copy; " . "Casino Espanol de Cebu, Inc."." ".date("Y"); ?>
			<!-- <br/>Powered by <a href="http://www.bawing.wordpress.com">epp</a> -->
		</p>
	</div>

</div> <!-- contatiner -->

<script type="text/javascript">

$(document).ready(function(){
    $(".chef_page_tip").tooltip({
        title : 'Please click here to see Chef Specials Page'
    });
    $(".contacts_tip").tooltip({
        title : 'Just send us your thoughts!'
    });




});

//for chef page carousel
$(document).ready(function(){
     $("#chef_carousel").carousel({
         interval : 2000,
         pause: "hover",
     });
});



</script>


</body>
</html>
