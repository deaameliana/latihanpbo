<?php

class Database
{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "latihan_pbo_hotel";

    public $koneksi;

    public function __construct()
    {
        $this->koneksi = new mysqli(
            $this->host,
            $this->username,
            $this->password,
            $this->database
        );

        if ($this->koneksi->connect_error) {
            die("Koneksi Gagal: " . $this->koneksi->connect_error);
        }

        echo "Koneksi Berhasil";
    }
}
?>