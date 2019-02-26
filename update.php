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
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <title>Google Maps Location picker</title>
            <style type="text/css">    
                #map {
                    border :1px solid #212A3F;
                    padding : 5px;
                    width: 100%;
                    height: 300px;
                }
            </style>
        <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
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
							<li><a href="indexadmin.php" class="page-scroll">Home</a></li>
							<li><a href="#" class="page-scroll active" >Update Place</a></li>
					   </ul>
				    </nav>
			     </div>
		      </div>
	       </div>
      </header>
      <!--End Navbar--> 
        
      <!-- menampilkan semua data dari tabel posisi sesuai id yang di get dalam form update untuk diubah-->    
      <div class="container-fluid contact">
          <div class="container">
		      <div class="row">
			     <div class="col-md-12">
				    <h2 class="text-center portfolio-text">Update Place</h2>
                     <?php
                        include "koneksi.php";

                        $id = $_GET['id'];
                     
                        $sql = "select * from posisi where id ='$id'";
                        $row = mysql_query($sql);
                        $result = mysql_fetch_array($row);
                     ?>                 
                    <form method = 'POST' action='save-update.php'>
				        <div class="col-md-5 col-sm-12 col-xs-12contact-form">
                            <div class="form-group">
                                <label for="kode">Id Place</label>
                                <input class="form-control" type="text" name='kode' value=<?php echo $result['id']; ?> >
                            </div>
                            
                            <div class="form-group">
                                <label for="nama">Nama tempat</label>
                                <input class="form-control" type="text" name='nama_lokasi' value=<?php echo $result['nama'];?> >
                            </div>
                            
                            <div class="form-group">
                                <label for="about">Tentang tempat ini</label>
                                <input class="form-control" type="text" name='ttg_lokasi' value=<?php echo $result['about'];?> >
                            </div>
                            
                            <div class="form-group">
                                    <label for="negara">Negara</label>
                                    <input class="form-control" type="text" name="negara" id='negara' value=<?php echo $result['negara'];?> >
                            </div>

                            <div class="form-group">
                                    <label for="telepon">Telepon</label>
                                    <input class="form-control" type="number" name="telepon" id='telepon' value=<?php echo $result['telepon'];?> >
                            </div>

                            <div class="form-group">
                                    <label for="email">Email</label>
                                    <input class="form-control" type="Email" name="email" id='email' value=<?php echo $result['email'];?> >
                            </div>
                            
                            <img src="gambar/<?php echo $result['gambar']; ?>" style="width:400px;height:210px">
                            
                        </div>
                        
                        <div class="col-md-6 col-sm-12 col-xs-12 address-space">
					        <div class="form-group">
                                <label for="titik">Tentukan Lokasi (Geser Titik Merah)</label>
                                <div id="map"></div>
                            </div>
                            
                            <div class="form-group">
                                <!-- <label for="latitude">Latitude</label> -->
                                <input class="form-control" type="text" name='latitude' value=<?php echo $result['lat'];?> >
                            </div>

                            <div class="form-group">
                                <!-- <label for="longitude">Longitude</label> -->
                                <input class="form-control" type="text" name='longitude' value=<?php echo $result['lng'];?> >
                            </div>

                            <div class="form-group">
                                <input type="submit" value="Submit" class="btn btn-primary" id="submit">
                            </div>
                        </div>                            
                    </form>
                  </div>
              </div>
          </div>
        </div>
        <!--End Form Update-->
        
        <!--Footer-->
        <div class="container-fluid footer" >
	       <div class="row">
		      <div class="col-md-12">
			     <p>&copy; 2016. By <a href="http://cs.unsyiah.ac.id/~nabila">Nabil</a> & <a href="http://cs.unsyiah.ac.id/~mfutri">Mardiana Safutri</a></p>
		      </div>
	       </div>
        </div>
        <!--End Footer-->
      
        <!--Script Untuk Google Map-->
        <script type="text/javascript">
            // Fungsi untuk mendapatkan nilai latitude longitude
            function updateMarkerPosition(latLng) {
                document.getElementById('latitude').value = [latLng.lat()]
                document.getElementById('longitude').value = [latLng.lng()]
            }
       
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: new google.maps.LatLng(5.554182313059855,95.32400855877688),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });
      
            //posisi awal marker  
            var latLng = new google.maps.LatLng(5.554182313059855,95.32400855877688);
 
            /* buat marker yang bisa di drag lalu
            panggil fungsi updateMarkerPosition(latLng)
            dan letakan posisi terakhir di id=latitude dan id=longitude*/
      
            var marker = new google.maps.Marker({
                position : latLng,
                title : 'lokasi',
                map : map,
                draggable : true
            });
   
            updateMarkerPosition(latLng);
            google.maps.event.addListener(marker, 'drag', function() {
        
                /* ketika marker di drag, otomatis nilai latitude dan longitude
                menyesuaikan dengan posisi marker*/
                updateMarkerPosition(marker.getPosition());
            });
        </script>
 
    </body>
</html>