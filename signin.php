<?php
ob_start();
session_start();
$username = $_POST['username'];
$pass = $_POST['pass'];
$_SESSION['username']=$username;
	$Open=mysql_connect("localhost","root");
	if(!$Open){
	die("Koneksi Gagal1 ke mesin mysql");
	}
	$Koneksi=mysql_select_db("ipcom");
	if(!$Koneksi){
	die("Koneksi Gagal2 ke database");
	}
	$sql = "SELECT * FROM person where username='$username'";
	$qry = mysql_query($sql);
	$num = mysql_num_rows($qry);
	$row = mysql_fetch_array($qry);
	
	if($num==0 OR $pass!=$row['pass']) {
	?>
	<script language = "JavaScript">
		alert("Username atau Password Anda Salah..");
		document.location='signin.html';
		</script>
	<?php
	}
	else {
	$_SESSION['login']=1;
	header("Location: user-add.html");
	}
	mysql_clode($Open);
?>
		