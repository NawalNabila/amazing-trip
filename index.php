<!-- Koneksi ke database -->
<?php

include "koneksi.php";

?>

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
<!--Navbar-->
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
							<li><a href="#page-top" class="page-scroll active">Home</a></li>
                            <li><a href="#section2" class="page-scroll">Gallery</a></li>
                            <li><a href="signin.html" class="page-scroll">Add Place</a></li>
                            <li><a href="#about" class="page-scroll">About Team</a></li>
							<li><a href="#section4" class="page-scroll">Contact</a></li>
                            <li><a class="btn" id="myBtn">Login Admin</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</header>
<!--End Navbar-->
 
<!-- Modal Login-->    
<div class="container">
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3><span class="glyphicon glyphicon-lock"></span>LOGIN ADMIN</h3>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" action="checklogin.php" method="post">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" name="usrname" placeholder="Enter username">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" name="psw" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" class="btn btn-success btn-block" ><span class="glyphicon glyphicon-off"></span> Login </button>
          </form>
        </div>
        <div class="modal-footer">
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>
      
    </div>
  </div> 
</div>
<!--End Modal Login-->   
    
<!--Home-->  
<div class="container-fluid main" id="page-top">
	<div class="row">
		<div class="col-md-12 backg">
			<div class="col-md-4 col-md-offset-4 inner col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3">
				<div class="text-box">
                	<p class="intro">Welcome To IT</p>
                    <h2>imagine trip</h2>
                    <h3>Find The Amazing Places Here</h3>
                    <p>By <span><a href="http://cs.unsyiah.ac.id/~nabila">Nabil</a> & <a href="http://cs.unsyiah.ac.id/~mfutri">Mardiana</a></span></p>
                    <p><a onclick="clickCounter()" href="#section2" class="link-button">Check Them Out</a></p>
				</div>
  			</div>
		</div>
	</div>
</div>
<!--End Home-->
  
<!--Gallery-->    
<div class="container-fluid features" id="section2">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center features-text">The Amazing Place</h2>
				
				<center>
				<form method="post" class="form-inline" action="information.php">
				    <input type="text" name="keyword" placeholder="Another Place" class="form-control" size="50">
				    <button type="submit" value="search" class="btn btn-danger" >Search</button>
				</form>
				</center>
				<br><br><br>
	
	            <div class="row text-center">
                    <div class="col-sm-4">
                        <div class="thumbnail">
			                 <img src="gambar/bali-indonesia.jpg" style="width:400px;height:210px"><br>
			                 <?php
                                $sql3 = "select * from posisi where id='35'";
                                $row3 = mysql_query($sql3);
				                while ($result3 = mysql_fetch_array($row3)){
                                    echo "<a href='gallery.php?id=$result3[id]'><h5>".$result3['nama']."</h5></a>";
                                }
                            ?>
                        </div>
                    </div>
      
                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <img src="gambar/Top-10-Pantai-Indah-Dunia-Boracay.jpg" style="width:400px;height:210px"><br>
                            <?php
                                $sql3 = "select * from posisi where id='22'";
                                $row3 = mysql_query($sql3);
                                while ($result3 = mysql_fetch_array($row3)){
                                    echo "<a href='gallery.php?id=$result3[id]'><h5>".$result3['nama']."</h5></a>";
                                }
                            ?> 
                        </div>
                    </div>
      
                    <div class="col-sm-4">
                        <div class="thumbnail"> 
                            <img src="gambar/Stasiun-Kyeong-Wha-Jinhae.jpg" style="width:400px;height:210px"><br>
                            <?php
                                $sql3 = "select * from posisi where id='33'";
                                $row3 = mysql_query($sql3);
                                while ($result3 = mysql_fetch_array($row3)){
                                    echo "<a href='gallery.php?id=$result3[id]'><h5>".$result3['nama']."</h5></a>";
                                }
                            ?>
                        </div>
                    </div>
                    
	               <div class="col-sm-4">
                        <div class="thumbnail">
                            <img src="gambar/maldives.png" style="width:400px;height:210px"><br>
                            <?php
                                $sql3 = "select * from posisi where id='46'";
                                $row3 = mysql_query($sql3);
                                while ($result3 = mysql_fetch_array($row3)){
                                    echo "<a href='gallery.php?id=$result3[id]'><h5>".$result3['nama']."</h5></a>";
                                }
                            ?>
                        </div>
                    </div>
     
                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <img src="gambar/Hiller%20lake%20(Pink%20Lake)%20Australia.jpeg" style="width:400px;height:210px"><br>
                            <?php
                                $sql3 = "select * from posisi where id='49'";
                                $row3 = mysql_query($sql3);
                                while ($result3 = mysql_fetch_array($row3)){
                                    echo "<a href='gallery.php?id=$result3[id]'><h5>".$result3['nama']."</h5></a>";
                                }
                            ?> 
                        </div>
                    </div>
        
                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <img src="gambar/phuquoc.jpg" style="width:400px;height:210px"><br>
                            <?php
                                $sql3 = "select * from posisi where id='26'";
                                $row3 = mysql_query($sql3);
                                while ($result3 = mysql_fetch_array($row3)){
                                    echo "<a href='gallery.php?id=$result3[id]'><h5>".$result3['nama']."</h5></a>";
                                }
                            ?>
                        </div>
                    </div> 
	               <br>
	               <br>
                    <a href="another.php" class="btn btn-default btn-lg">See More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Gallery-->    
    
    
<!--About-->
<div class="container-fluid notes" id="about">
  	<div class="row">
   		<div class="col-md-12 col-sm-12 col-xs-12 notes-bg">
    		<div class="container">
                <div class="counter-item">
                    <i class="glyphicon glyphicon-user"></i><br>
                    <h3 id="result"></h3>
                    <h3>Our Visitors</h3>
                </div> 
                <hr>
                <br>
     				<!-- our-team -->
			         <div class="team">
				        <div class="center wow fadeInDown">
					       <h2>Team of Imagine Trip</h2>
					       <h6 class="lead">"If you can't make it good, at least make it look good."<br> ~ Bill Gates ~</h6><br><br>
				        </div>
				        <div class="row clearfix">
                            
                            <!--Profil Nabil-->
					       <div class="col-md-4 col-sm-6">	
						      <div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							     <div class="media">
								    <div class="pull-left">
									   <a href="#"><img class="media-object" src="images/nn.jpg" alt=""></a>
								    </div>
								        <div class="media-body">
									       <h4>Nabil</h4>
									       <h5>Developer and Admin</h5>
									       <ul class="tag clearfix">
										      <li class="btn"><a href="#">Blog</a></li>
										      <li class="btn"><a href="#">FB</a></li>
										      <li class="btn"><a href="http://cs.unsyiah.ac.id/~nabila">CS</a></li>
										      <li class="btn"><a href="#">Github</a></li>
									       </ul>
								        </div>
							     </div>
							     <p>Hello Friend ! I'm developer and admin this web. i'm just an  amateur web developer. But i love this web, and i like my best partner works with me to complete this project. <br>"Work on the work you love" by StackOverFlow.</p>
						      </div>
					       </div>
					       <!--End Profil Nabil-->
					
                            <!--Profil Mardiana-->
					       <div class="col-md-4 col-sm-6 col-md-offset-4">	
						      <div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							     <div class="media">
								    <div class="pull-left">
									   <a href="#"><img class="media-object" src="images/zz.jpg" alt=""></a>
								    </div>
								        <div class="media-body">
									       <h4>Mardiana Safutri</h4>
									       <h5>Developer and Admin</h5>
									       <ul class="tag clearfix">
										      <li class="btn"><a href="#">Blog</a></li>
										      <li class="btn"><a href="#">fb</a></li>
										      <li class="btn"><a href="http://cs.unsyiah.ac.id/~mfutri">cs</a></li>
										      <li class="btn"><a href="#">github</a></li>
									       </ul>
								        </div>
							     </div>
							     <p>Hello Friend ! Saya Developer sekaligus Admin web ini. Angkatan 2014 S1 Informatika Universitas Syiah Kuala.<br>"Work on the work you love" by StackOverFlow.</p>
						      </div>
					       </div>
                            <!--End Profil Mardiana-->    
                            
				    </div>
    			</div>
   			</div>
   		</div>
  	</div> 
</div>
<!--End About-->  
    

<!--Contact-->
<div class="container-fluid contact" id="section4">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center portfolio-text">Contact</h2>
				<div class="col-md-6 col-sm-12 col-xs-12contact-form">
					<form role="form">
                        <div class="form-group">
                            <input type="text" class="form-control form-effect" id="name" placeholder="Name">
                        </div>
                        <div class="form-group">                                 
                            <input type="email" class="form-control form-effect" id="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <textarea type="textarea" class="form-control form-effect" id="text" placeholder="Message"></textarea>
                        </div>  
                        <button type="submit" class="btn btn-default btn-sub">Submit</button>
                    </form>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12 address-space">
					<div id="map-canvas"></div>
					<div class="address">
						<h3>Address</h3>
						<p><i class="glyphicon glyphicon-map-marker"></i>Lab. Penelitian Terpadu Unsyiah, Banda Aceh, Indonesia</p>
						<p><i class="glyphicon glyphicon-earphone"></i>+62 822 7206 8810</p>
						<p><i class="glyphicon glyphicon-envelope"></i>whit3horse89@gmail.com</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--End Contact-->
    
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
    
    <!--Script untuk Google Map-->
    <script>
      function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
          var myLatlng = new google.maps.LatLng(5.566918914916717, 95.36708215334704);
        var mapOptions = {
          center: myLatlng,
          zoom: 15,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
        var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      animation:google.maps.Animation.BOUNCE
        });
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <!--End Script untuk Google Map-->
    
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
    
    <!--Script untuk Counter Visitors-->
    <script>
        function clickCounter() {
            if(typeof(Storage) !== "undefined") {
                if (localStorage.clickcount) {
                    localStorage.clickcount = Number(localStorage.clickcount)+1;
                } else {
                    localStorage.clickcount = 1;
                }
                document.getElementById("result").innerHTML =  localStorage.clickcount;
            } else {
                document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
            }
        }
    </script>
    <!--End Script untuk Counter Visitors-->
    
    <!--Script untuk Modal Login-->
    <script>
        $(document).ready(function(){
            $("#myBtn").click(function(){
                $("#myModal").modal();
            });
        });
    </script>
    <!--End Script untuk Modal Login-->
    
</body>
</html>
