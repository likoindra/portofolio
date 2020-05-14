<?php 

    include "koneksi.php";

    if(isset($_POST['submit'])){
        $id = $_POST["id"];
        $nama = $_POST["nama"];
        $role = $_POST["role"];
        $availabily = $_POST["availability"];
        $age = $_POST["age"];
        $location = $_POST["location"];
        $experience = $_POST["experience"];
        $email = $POST["email"];
    }

    $sql = "UPDATE person SET nama= '$nama', role= '$role', availability='$availability', age ='$age', location='$location', years_experience='$experience', email='$email' WHERE id = '$id'";
    if($koneksi->query($sql)== TRUE) {
        echo "Update Data Berhasil";
    }else {
        echo "Update Data Gagal";
    }


?>