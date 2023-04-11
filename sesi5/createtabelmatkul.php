<?php
    include("konfigurasi.php");

    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT);

    if($cnn){
        $matkul = "tbMATKUL";
        $sql = "CREATE TABLE $matkul (
            kodeMK VARCHAR(8) primary key,
            matakuliah VARCHAR(35),
            sks int
        ) ";
        $hasil = mysqli_query($cnn, $sql ) ;
        if($hasil){
            echo "Pembuatan Tabel " . $matkul .  "Sukses";
        }else{
        echo "Pembuatan Tabel " . $matkul .  "Sukses";
        }

    }else{
        echo "Koneksi ke Mysql Gagal";
    }