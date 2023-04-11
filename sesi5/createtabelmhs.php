<?php
    include("konfigurasi.php");

    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT);

    if($cnn){
        $tabel = "tbMHS";
        $sql = "CREATE TABLE $tabel (
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            nama VARCHAR(35),
            nim VARCHAR(10),
            alamat VARCHAR(255),
            telepon VARCHAR(13),
            prodi VARCHAR(25),
            jenis kelamin VARCHAR(1),
            tanggal lahir DATE 
        ) ";
        $hasil = mysqli_query($cnn, $sql ) ;
        if($hasil){
            echo "Pembuatan Tabel " . $tabel .  "Sukses";
        }else{
        echo "Pembuatan Tabel " . $tabel .  "Sukses";
        }

    }else{
        echo "Koneksi ke Mysql Gagal";
    }