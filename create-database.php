<?php 
    
    include "koneksi.php";

    $sql = "CREATE DATABASE portofolio";

    if($koneksi->query($sql) === TRUE){
        echo "Database berhasil dibuat";
    }else{
        echo "Database gagal dibuat";
    }

?>