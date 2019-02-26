<?php 
session_start();
require_once("koneksi.php");

$username = $_POST['usrname'];
$pass 	  = $_POST['psw'];
$checkuser  = mysql_query("SELECT * FROM admin WHERE usrname = '$username'");
$jumlah   = mysql_num_rows($checkuser);
$hasil    = mysql_fetch_array($checkuser);

if($jumlah == 0) {
 ?>
	<script language = "JavaScript">
		alert("Username tidak terdaftar..");
		document.location='index.html';
		</script>
	<?php
} else {
    if($pass != $hasil['psw']) {
       ?>
	<script language = "JavaScript">
		alert("Username atau Password Anda Salah..");
		document.location='index.html';
		</script>
	<?php
    } else {
        $_SESSION['usrname'] = $hasil['usrname'];
        $_SESSION['psw']= $hasil['psw'];
            header('location:indexadmin.php');
    }
}

?>