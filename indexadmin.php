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
							<li><a href="admin-add.html" class="page-scroll">Add Place</a></li>
                            <li><a href="admin-logout.php" class="page-scroll">LOG OUT</a></li>
					   </ul>
				    </nav>
			     </div>
		      </div>
	       </div>
        </header>
        <!--End Navbar-->
    
        <!--Home-->  
        <div class="container-fluid main" id="page-top">
	       <div class="row">
		      <div class="col-md-12 backg">
			     <div class="col-md-4 col-md-offset-4 inner col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3">
				    <div class="text-box">
                	    <p class="intro">HELLO ADMIN</p>
                        <h2>imagine trip</h2>
                        <h3>Add The Amazing Places Here</h3>
                        <p>By <span><a href="http://cs.unsyiah.ac.id/~nabila">Nabil</a> & <a href="http://cs.unsyiah.ac.id/~mfutri">Mardiana</a></span></p>
                        <p><a href="#section2" class="link-button">Check Them Out</a></p>
				    </div>
                  </div>
               </div>
	       </div>
        </div>
        <!--End Home-->
  
        <!--Location-->    
        <div class="container-fluid features" id="section2">
	       <div class="container">
		      <div class="row">
			     <div class="col-md-12">
				    <h2 class="text-center features-text">The Amazing Place</h2>
                        <div class="col-md-8 col-md-offset-2">
                            
                    	<!-- menampilkan data dari database -->
                        <?php
	                       $sql="select * from posisi";
	                       $sqla=mysql_query($sql);
	                           echo "<table border='2'>
                                    <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Country</th>
                                    <th>Image</th>
                                    <th>Latitude</th>
                                    <th>Longitude</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                    </tr>";
	                           while($data = mysql_fetch_array($sqla)){
		                          echo "<tr>
                                  <td>".$data['id']."</td>
		                          <td>".$data['nama']."</td>
                                  <td>".$data['negara']."</td>
                                  <td>".$data['gambar']."</td>
                                  <td>".$data['lat']."</td>
                                  <td>".$data['lng']."</td>
		                          <td><a href='update.php?id=".$data['id']."'>Update</a></td>
                                  <td><a href='hapus.php?id=".$data['id']."'>Delete</a></td>
		                          </tr>";
	                           }
		                       echo"</table>"
	                    ?>
                        <!-- End menampilkan data dari database -->
                        </div>
                  </div>
               </div>
            </div>
        </div> 
        <!-- End Location-->    
    
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
			         }else{
				        currentLink.removeClass("active");
			         }
		      });
	       }
	   </script>
    
    </body>
</html>
