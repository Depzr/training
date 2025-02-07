<?php











$this->koneksi = mysqli_connect
($this->server, $this->username, $this->pass,$this->database);

//buat memilih database yang akan kita gunakan
mysqli_select_db($this->koneksi,
$this->database);

if ($this->koneksi){
    // echo "koneksi ke database".
    $this->database ."berhasil"

    //mengembalikan nilai koneksi jika koneksinya berhasil
    return $this->koneksi;
} else {
    echo "koneksi ke database gagal !";
}
// $koneksi = new koneksi();