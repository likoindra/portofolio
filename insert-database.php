<?php 
    include "koneksi.php";

    $sql ="INSERT INTO person(
        id,
        nama,
        role,
        availability,
        age,
        location,
        years_experience,
        email
    ) VALUE ( 
        '1',
        'Hactiv8',
        'Front End Developer',
        'Full Time',
        '20',
        'Jakarta,Indonesia',
        '2',
        'email@gmail.com'
    ) ";

    if($koneksi->query($sql) == TRUE){
        echo "Insert Data Berhasil ";
    }else{
        echo "Gagal Insert Data";
    }




?>