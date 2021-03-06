<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Imagine Trip</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="style.css" type="text/css">
	<link href="css/lightbox.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Poppins:400,600,700,500,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,900italic,900,700italic,700,400italic,500,500italic,300,100italic,100,300italic' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body>
    
<header class="header">
	<div class="container">
		<div class="row">
			<div class="col-md-4 ">
				<div class="navbar-header">
					    <button type="button" class="navbar-toggle menu-button" data-toggle="collapse" data-target="#myNavbar">
					        <span class="glyphicon glyphicon-align-justify"></span>
					    </button>
      					<a class="navbar-brand logo" href="#">Imagine Trip</a>
    			</div>
			</div>
			<div class="col-md-8">
				<nav class="collapse navbar-collapse" id="myNavbar" role="navigation">
					<ul class="nav navbar-nav navbar-right menu">
							<li><a href="index.php" class="page-scroll">Home</a></li>
							<li><a href="#" class="page-scroll active" >Result</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</header>

<!--Gallery-->    
<div class="container-fluid features" id="section2">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center features-text">Result</h2>
				
	            <div class="row text-center">
                    <div class="col-sm-4">
                        <div class="thumbnail">
                    <?php
 
                        include "koneksi.php";

                        $keyword= $_POST ["keyword"]; 
 
                        $sql = "select * from posisi where nama like '%$keyword%'"; 
                        $sqla=mysql_query($sql);

	                       while($data = mysql_fetch_array($sqla)){
                               $image=$data['gambar'];
                               echo '<img src="gambar/'.$image.'" style="width:400px;height:210px"/>';
                               echo "<a href='gallery.php?id=$data[id]'><h5>".$data['nama']."</h5></a>";
                            }
                        ?>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Gallery-->  
    
<!--Footer-->
<div class="container-fluid footer" >
	<div class="row">
		<div class="col-md-12">
			<p>&copy; 2016. By <a href="http://cs.unsyiah.ac.id/~nabila">Nabil</a> & <a href="http://cs.unsyiah.ac.id/~mfutri">Mardiana Safutri</a></p>
		</div>
	</div>
</div>
<!--End Footer-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.countTo.js"></script>
    <script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/lightbox.min.js"></script>
    <script>
      function initialize() {
        var myLatlng = new google.maps.LatLng(<?php echo $result['lat']; ?>,<?php echo $result['lng']; ?>);
  var mapOptions = {
    zoom: 8,
    center: myLatlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
  }
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
 
  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      animation:google.maps.Animation.BOUNCE
  });
 
 
//marker baru
  var latlng2 = new google.maps.LatLng(<?php echo $result['lat']; ?>,<?php echo $result['lng']; ?>);
 
 //description untuk marker
  var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<p><b><?php echo $result['nama']; ?></b>'+
      '<div id="bodyContent">'+
      '</div>'+
      '</div>';
 
  // membuat sebuah window modal box
  var infowindow = new google.maps.InfoWindow({
      content: contentString, maxWidth: 400
  });
 
  var marker = new google.maps.Marker({    
      position: latlng2,
      map: map,
      animation:google.maps.Animation.BOUNCE
      });
 
  //even listener google map utk menampilkan modal box description
  google.maps.event.addListener(marker, 'click', function() {
      infowindow.open(map,marker);
    });
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <script>
	$(document).ready(function () {
		$(document).on("scroll", onScroll);
 
		$('a[href^="#"]').on('click', function (e) {
			e.preventDefault();
			$(document).off("scroll");
 
			$('a').each(function () {
				$(this).removeClass('active');
			})
			$(this).addClass('active');
 
			var target = this.hash;
			$target = $(target);
			$('html, body').stop().animate({
				'scrollTop': $target.offset().top
			}, 500, 'swing', function () {
				window.location.hash = target;
				$(document).on("scroll", onScroll);
			});
		});
	});
 
	function onScroll(event){
		var scrollPosition = $(document).scrollTop();
		$('nav a').each(function () {
			var currentLink = $(this);
			var refElement = $(currentLink.attr("href"));
			if (refElement.position().top <= scrollPosition && refElement.position().top + refElement.height() > scrollPosition) {
				$('nav ul li a').removeClass("active");
				currentLink.addClass("active");
			}
			else{
				currentLink.removeClass("active");
			}
		});
	}
	</script>
	<script type="text/javascript">
    jQuery(function ($) {
      // custom formatting example
      $('.timer').data('countToOptions', {
        formatter: function (value, options) {
          return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
        }
      });
 
      // start all the timers
      $('#starts').waypoint(function() {
    $('.timer').each(count);
	});
 
      function count(options) {
        var $this = $(this);
        options = $.extend({}, options || {}, $this.data('countToOptions') || {});
        $this.countTo(options);
      }
    });
  	</script>
</body>
</html>
