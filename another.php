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
							<li><a href="index.php">Home</a></li>
                            <li><a href="#" class="active">Gallery</a></li>
							<li><a class="btn" id="myBtn">More Places</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</header>
<!--End Navbar-->
 
  
<!--Location-->    
<div class="container-fluid features" id="section2">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center features-text">More Places</h2>
                <h2 class="text-left features-text">Recommended :</h2>
                <div class="col-md-10s col-sm-12 col-xs-12 icon-box">
					<div class="col-md-9 col-md-offset-1 col-sm-12 col-xs-12 icon-text-box">
                    	<!-- menampilkan data dari database -->
          
				<style>
				table {
				width:100%;
				}
				table, th, td {
				border: 1px solid black;
				border-collapse: collapse;
				}
				th, td {
				padding: 5px;
				text-align: left;
				}
				table#t01 tr:nth-child(even) {
				background-color: #eee;
				}
				table#t01 tr:nth-child(odd) {
				background-color:#fff;
				}
				table#t01 th {
				background-color: black;
				color: white;
				}
				</style>
			
				<table id="t01">
				<tr>
				<th>Location</th>
				<th>Travel</th>
				</tr>
				<tr>
				<td><center>
				<?php
					$sql3 = "select * from posisi where id='42'";
					$row3 = mysql_query($sql3);
					while ($result3 = mysql_fetch_array($row3)){
					echo "<a href='gallery.php?id=$result3[id]'><h5>".$result3['nama']."</h5></a>";
					}
					?>
				</center></td>
				<td><center><img src="gambar/132.png" style="width:250px;height:150px"></center></td>
				</tr>
				
				<tr>
				<td><center>
				<?php
					$sql3 = "select * from posisi where id='26'";
					$row3 = mysql_query($sql3);
					while ($result3 = mysql_fetch_array($row3)){
					echo "<a href='gallery.php?id=$result3[id]'><h5>".$result3['nama']."</h5></a>";
					}
					?>
				</center></td>
				<td><center><img src="gambar/phuquoc.jpg" style="width:250px;height:150px"></center></td></tr>
				
				<tr>
				<td><center>
				<?php
					$sql3 = "select * from posisi where id='22'";
					$row3 = mysql_query($sql3);
					while ($result3 = mysql_fetch_array($row3)){
					echo "<a href='gallery.php?id=$result3[id]'><h5>".$result3['nama']."</h5></a>";
					}
					?>
				</center></td>
				<td><center><img src="gambar/Top-10-Pantai-Indah-Dunia-Boracay.jpg" style="width:250px;height:150px"></center></td></tr>
				
				<tr>
				<td><center>
				<?php
					$sql3 = "select * from posisi where id='28'";
					$row3 = mysql_query($sql3);
					while ($result3 = mysql_fetch_array($row3)){
					echo "<a href='gallery.php?id=$result3[id]'><h5>".$result3['nama']."</h5></a>";
					}
					?>
				</center></td>
				<td><center><img src="gambar/23.png" style="width:250px;height:150px"></center></td></tr>
				
				<tr>
				<td><center>
				<?php
					$sql3 = "select * from posisi where id='29'";
					$row3 = mysql_query($sql3);
					while ($result3 = mysql_fetch_array($row3)){
					echo "<a href='gallery.php?id=$result3[id]'><h5>".$result3['nama']."</h5></a>";
					}
					?>
				</center></td>
				<td><center><img src="gambar/seoul-korea.jpg" style="width:250px;height:150px"></center></td></tr>
				
				<tr>
				<td><center>
				<?php
					$sql3 = "select * from posisi where id='33'";
					$row3 = mysql_query($sql3);
					while ($result3 = mysql_fetch_array($row3)){
					echo "<a href='gallery.php?id=$result3[id]'><h5>".$result3['nama']."</h5></a>";
					}
					?>
				</center></td>
				<td><center><img src="gambar/Stasiun-Kyeong-Wha-Jinhae.jpg" style="width:250px;height:150px"></center></td></tr>
				
				<tr>
				<td><center>
				<?php
					$sql3 = "select * from posisi where id='34'";
					$row3 = mysql_query($sql3);
					while ($result3 = mysql_fetch_array($row3)){
					echo "<a href='gallery.php?id=$result3[id]'><h5>".$result3['nama']."</h5></a>";
					}
					?>
				</center></td>
				<td><center><img src="gambar/tokyo-japan.jpg" style="width:250px;height:150px"></center></td></tr>
				
				<tr>
				<td><center>
				<?php
					$sql3 = "select * from posisi where id='35'";
					$row3 = mysql_query($sql3);
					while ($result3 = mysql_fetch_array($row3)){
					echo "<a href='gallery.php?id=$result3[id]'><h5>".$result3['nama']."</h5></a>";
					}
					?>
				</center></td>
				<td><center><img src="gambar/bali-indonesia.jpg" style="width:250px;height:150px"></center></td></tr>
				
				
				<tr>
				<td><center>
				<?php
					$sql3 = "select * from posisi where id='37'";
					$row3 = mysql_query($sql3);
					while ($result3 = mysql_fetch_array($row3)){
					echo "<a href='gallery.php?id=$result3[id]'><h5>".$result3['nama']."</h5></a>";
					}
					?>
				</center></td>
				<td><center><img src="gambar/jeju.jpg" style="width:250px;height:150px"></center></td></tr>
				
				<tr>
				<td><center>
				<?php
					$sql3 = "select * from posisi where id='38'";
					$row3 = mysql_query($sql3);
					while ($result3 = mysql_fetch_array($row3)){
					echo "<a href='gallery.php?id=$result3[id]'><h5>".$result3['nama']."</h5></a>";
					}
					?>
				</center></td>
				<td><center><img src="gambar/Matsumae (Fukuyama) Castle Hokkaido.jpg" style="width:250px;height:150px"></center></td></tr>

				<tr>
				<td><center>
				<?php
					$sql3 = "select * from posisi where id='39'";
					$row3 = mysql_query($sql3);
					while ($result3 = mysql_fetch_array($row3)){
					echo "<a href='gallery.php?id=$result3[id]'><h5>".$result3['nama']."</h5></a>";
					}
					?>
				</center></td>
				<td><center><img src="gambar/hongkong.jpg" style="width:250px;height:150px"></center></td></tr>

				<tr>
				<td><center>
				<?php
					$sql3 = "select * from posisi where id='40'";
					$row3 = mysql_query($sql3);
					while ($result3 = mysql_fetch_array($row3)){
					echo "<a href='gallery.php?id=$result3[id]'><h5>".$result3['nama']."</h5></a>";
					}
					?>
				</center></td>
				<td><center><img src="gambar/Jiuzhaigou-China.jpg" style="width:250px;height:150px"></center></td></tr>
				</table>
			 
		 
			
			             <!-- Modal -->
                        <div class="container">
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header" style="padding:35px 50px;">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h3><span class=""></span>More Places</h3>
                                        </div>
                                        <div class="modal-body" style="padding:40px 50px;">
                                            <form role="form" >
                                                <div class="form-group">
                                                    <p> 
                                                        <?php
                                                        $sql3 = "select * from posisi";
                                                        $row3 = mysql_query($sql3);
                                                        while ($result3 = mysql_fetch_array($row3)){
                                                            echo "<a href='gallery.php?id=$result3[id]'><h7>".$result3['nama']."</h7></a><br>";
                                                        }
                                                        ?>
                                                    </p>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Modal -->
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Location-->    
    
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.countTo.js"></script>
    <script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/lightbox.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#myBtn").click(function(){
                $("#myModal").modal();
            });
        });
    </script>  
 

    
</body>
</html>

