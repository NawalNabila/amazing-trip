<?php
    $connect = @mysql_connect("localhost", "root", "") or die ("Gagal");
    $kode = $_POST["kode"];
    $nama = $_POST["nama_lokasi"];
    $about = $_POST["ttg_lokasi"];
    $lat = $_POST["latitude"];
    $long = $_POST["longitude"];
    $negara = $_POST["negara"];
    $telepon = $_POST["telepon"];
    $email = $_POST["email"];
    
    mysql_select_db("ipcom", $connect) or die ("can't open database");
    mysql_query("UPDATE posisi SET id='$kode', nama='$nama', about='$about', lat='$lat', lng='$long', negara='$negara', telepon='$telepon', email='$email' WHERE id='$kode'", $connect);
    header('location:indexadmin.php');
    ?>