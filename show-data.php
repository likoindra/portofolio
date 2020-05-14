<?php 

    include "koneksi.php";

    $sql = "SELECT * FROM person";
    $result = $koneksi->query($sql);

    // mapping hasil data dari database 

    foreach($result as $result){
        $id = $result["id"];
        $nama = $result["nama"];
        $role = $result["role"];
        $availability =$result["availability"];
        $age   = $result["age"];
        $location = $result["location"];
        $experience = $result["years_experience"];
        $email = $result["email"];

        // echo "id :".$id." nama : ".$nama." role : ".$role." ";
    }

?>