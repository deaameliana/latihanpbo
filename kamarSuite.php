<?php

require_once "Kamar.php";

class KamarSuite extends Kamar
{
    protected $butlerPersonal;
    protected $dekorasiSpesial;

    public function __construct(
        $id_kamar,
        $nama_tamu,
        $tanggal_checkin,
        $durasi_menginap,
        $hargaDasarKamar,
        $butlerPersonal,
        $dekorasiSpesial
    ) {
        parent::__construct(
            $id_kamar,
            $nama_tamu,
            $tanggal_checkin,
            $durasi_menginap,
            $hargaDasarKamar
        );

        $this->butlerPersonal = $butlerPersonal;
        $this->dekorasiSpesial = $dekorasiSpesial;
    }

    public function hitungTotalTagihan()
    {
        $biayaPremium = 500000;

        return ($this->hargaDasarKamar * $this->durasi_menginap) + $biayaPremium;
    }

    public function tampilkanFasilitasKamar()
    {
        return "Butler Personal: {$this->butlerPersonal}, Dekorasi Spesial: {$this->dekorasiSpesial}";
    }
}
?>