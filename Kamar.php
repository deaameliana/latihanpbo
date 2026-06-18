<?php

abstract class Kamar
{
    // Properti Terenkapsulasi (Protected)
    protected $id_kamar;
    protected $nama_tamu;
    protected $tanggal_checkin;
    protected $durasi_menginap;
    protected $hargaDasarKamar;

    // Constructor
    public function __construct(
        $id_kamar,
        $nama_tamu,
        $tanggal_checkin,
        $durasi_menginap,
        $hargaDasarKamar
    ) {
        $this->id_kamar = $id_kamar;
        $this->nama_tamu = $nama_tamu;
        $this->tanggal_checkin = $tanggal_checkin;
        $this->durasi_menginap = $durasi_menginap;
        $this->hargaDasarKamar = $hargaDasarKamar;
    }

    // Getter
    public function getIdKamar()
    {
        return $this->id_kamar;
    }

    public function getNamaTamu()
    {
        return $this->nama_tamu;
    }

    public function getTanggalCheckin()
    {
        return $this->tanggal_checkin;
    }

    public function getDurasiMenginap()
    {
        return $this->durasi_menginap;
    }

    public function getHargaDasarKamar()
    {
        return $this->hargaDasarKamar;
    }

    // Abstract Method
    abstract public function hitungTotalTagihan();

    abstract public function tampilkanFasilitasKamar();
}
?>