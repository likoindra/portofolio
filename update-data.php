<?php

    include "koneksi.php";
    // isset dipakai untuk memeriksa ketersediaan variabel form 

    
    if(isset($_POST['submit'])){
        $id = $_POST["$id"];
        $nama  = $_POST["nama"];
        $role = $_POST["role"];
        $availability = $_POST ["availability"];
        $age = $_POST ["age"];
        $location = $_POST ["location"];
        $years_experience = $_POST ["years"];
        $email = $_POST ["email"];
  

    $sql ="UPDATE person SET nama='$nama', role='$role', availability='$availability, age='$age', location='$location', years_experience='$experience', email ='$email' WHERE id = '$id'";
    if($koneksi->query($sql)== TRUE){
        echo "Update Data berhasil";
        
    }else{
        echo "Update Data Gagal";
    }
    }

?>