<?php

require_once "Kamar.php";

class KamarStandard extends Kamar
{
    protected $tipeKasur;
    protected $pemandanganKamar;

    public function __construct(
        $id_kamar,
        $nama_tamu,
        $tanggal_checkin,
        $durasi_menginap,
        $hargaDasarKamar,
        $tipeKasur,
        $pemandanganKamar
    ) {
        parent::__construct(
            $id_kamar,
            $nama_tamu,
            $tanggal_checkin,
            $durasi_menginap,
            $hargaDasarKamar
        );

        $this->tipeKasur = $tipeKasur;
        $this->pemandanganKamar = $pemandanganKamar;
    }

    public function hitungTotalTagihan()
    {
        return $this->hargaDasarKamar * $this->durasi_menginap;
    }

    public function tampilkanFasilitasKamar()
    {
        return "Tipe Kasur: {$this->tipeKasur}, Pemandangan: {$this->pemandanganKamar}";
    }
}
?>