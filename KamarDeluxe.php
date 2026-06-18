<?php

require_once 'Kamar.php';

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

    // OVERRIDING
    public function hitungTotalTagihan()
    {
        return ($this->durasi_menginap * $this->hargaDasarKamar) + 150000;
    }

    public function tampilkanFasilitasKamar()
    {
        return "
            Akses Lounge Eksekutif : " .
            ($this->aksesLoungeEksekutif ? "Ya" : "Tidak") .
            "<br>
            Layanan Spa Pribadi : " .
            ($this->layananSpaPribadi ? "Ya" : "Tidak");
    }
}