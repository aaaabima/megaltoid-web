<?php

    $server = "localhost";
    $username = "root";
    $password = "gooners182";
    $database = "database_toko";

    $koneksi = mysqli_connect($server, $username, $password, $database) or die("Koneksi ke database gagal.");