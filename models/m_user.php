<?php

include_once 'm_koneksi.php';

class user{



    function tampil_data() {

        $conn = new koneksi ();

        $sql = "SELECT * FROM user";

        mysqli_query($conn->koneksi, $sql);
    }
}