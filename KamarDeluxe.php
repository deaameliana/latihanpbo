<?php

require_once "Kamar.php";

class KamarDeluxe extends Kamar
{
    protected $aksesLoungeEksekutif;
    protected $layananSpaPribadi;

    public function __construct(
        $id_kamar,
        $nama_tamu,
        $tanggal_checkin,
        $durasi_menginap,
        $hargaDasarKamar,
        $aksesLoungeEksekutif,
        $layananSpaPribadi
    ) {
        parent::__construct(
            $id_kamar,
            $nama_tamu,
            $tanggal_checkin,
            $durasi_menginap,
            $hargaDasarKamar
        );

        $this->aksesLoungeEksekutif = $aksesLoungeEksekutif;
        $this->layananSpaPribadi = $layananSpaPribadi;
    }

    public function hitungTotalTagihan()
    {
        $bonus = 250000;

        return ($this->hargaDasarKamar * $this->durasi_menginap) + $bonus;
    }

    public function tampilkanFasilitasKamar()
    {
        return "Akses Lounge Eksekutif: " .
            ($this->aksesLoungeEksekutif ? "Ya" : "Tidak") .
            ", Layanan Spa Pribadi: " .
            ($this->layananSpaPribadi ? "Ya" : "Tidak");
    }
}
?>