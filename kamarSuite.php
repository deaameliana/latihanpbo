<?php

require_once 'Kamar.php';

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

    // OVERRIDING
    public function hitungTotalTagihan()
    {
        return ($this->durasi_menginap * $this->hargaDasarKamar) * 1.75;
    }

    public function tampilkanFasilitasKamar()
    {
        return "
            Butler Personal : {$this->butlerPersonal}<br>
            Dekorasi Spesial : {$this->dekorasiSpesial}
        ";
    }
}