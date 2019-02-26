<html>
<body>
    
    
    <?php
        include "koneksi.php";
        $nama = $_POST["nama_lokasi"];
        $about = $_POST["ttg_lokasi"];
        $nama_gambar = $_POST["nama_gambar"];
        $gambar = $_FILES['gambar']['name'];
        $lat = $_POST["latitude"];
        $lng = $_POST["longitude"];
        $negara = $_POST["negara"];
        $telepon = $_POST["telepon"];
        $email = $_POST["email"];
    
        $sql = "insert into posisi values('','$nama','$about','$nama_gambar','$gambar','$lat','$lng','$negara','$telepon','$email')";
        $sqla = mysql_query($sql);
        
        move_uploaded_file($_FILES['gambar']['tmp_name'], "gambar/".$_FILES['gambar']['name']);
        
        header('location:indexadmin.php');
    ?>
    
</body>
</html>
