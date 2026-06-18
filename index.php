<?php

require_once 'database.php';
require_once 'KamarStandard.php';
require_once 'KamarDeluxe.php';
require_once 'KamarSuite.php';

$db = new Database();
$conn = $db->getConnection();

$sql = "SELECT * FROM tabel_kamar ORDER BY jenis_kamar";
$result = $conn->query($sql);

$standard = [];
$deluxe = [];
$suite = [];

while ($row = $result->fetch_assoc()) {

    if ($row['jenis_kamar'] == 'Standard') {

        $obj = new KamarStandard(
            $row['id_kamar'],
            $row['nama_tamu'],
            $row['tanggal_checkin'],
            $row['durasi_menginap'],
            $row['harga_dasar_kamar'],
            $row['tipe_kasur'],
            $row['pemandangan_kamar']
        );

        $standard[] = $obj;
    }

    elseif ($row['jenis_kamar'] == 'Deluxe') {

        $obj = new KamarDeluxe(
            $row['id_kamar'],
            $row['nama_tamu'],
            $row['tanggal_checkin'],
            $row['durasi_menginap'],
            $row['harga_dasar_kamar'],
            $row['akses_lounge_eksekutif'],
            $row['layanan_spa_pribadi']
        );

        $deluxe[] = $obj;
    }

    elseif ($row['jenis_kamar'] == 'Suite') {

        $obj = new KamarSuite(
            $row['id_kamar'],
            $row['nama_tamu'],
            $row['tanggal_checkin'],
            $row['durasi_menginap'],
            $row['harga_dasar_kamar'],
            $row['butler_personal'],
            $row['dekorasi_spesial']
        );

        $suite[] = $obj;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Pemesanan Hotel</title>

    <style>

        body{
            font-family: Arial, sans-serif;
            margin:20px;
        }

        table{
            width:100%;
            border-collapse: collapse;
            margin-bottom:30px;
        }

        table, th, td{
            border:1px solid black;
        }

        th{
            background:#ddd;
            padding:10px;
        }

        td{
            padding:8px;
        }

        h2{
            background:#f2f2f2;
            padding:10px;
        }

    </style>

</head>
<body>

<h1>DAFTAR PEMESANAN HOTEL</h1>

<!-- STANDARD -->

<h2>Kamar Standard</h2>

<table>

<tr>
    <th>ID</th>
    <th>Nama Tamu</th>
    <th>Check In</th>
    <th>Durasi</th>
    <th>Fasilitas</th>
    <th>Total Tagihan</th>
</tr>

<?php foreach($standard as $kamar) : ?>

<tr>
    <td><?= $kamar->getIdKamar(); ?></td>
    <td><?= $kamar->getNamaTamu(); ?></td>
    <td><?= $kamar->getTanggalCheckin(); ?></td>
    <td><?= $kamar->getDurasiMenginap(); ?> Hari</td>

    <td>
        <?= $kamar->tampilkanFasilitasKamar(); ?>
    </td>

    <td>
        Rp <?= number_format($kamar->hitungTotalTagihan(),0,",","."); ?>
    </td>
</tr>

<?php endforeach; ?>

</table>


<!-- DELUXE -->

<h2>Kamar Deluxe</h2>

<table>

<tr>
    <th>ID</th>
    <th>Nama Tamu</th>
    <th>Check In</th>
    <th>Durasi</th>
    <th>Fasilitas</th>
    <th>Total Tagihan</th>
</tr>

<?php foreach($deluxe as $kamar) : ?>

<tr>
    <td><?= $kamar->getIdKamar(); ?></td>
    <td><?= $kamar->getNamaTamu(); ?></td>
    <td><?= $kamar->getTanggalCheckin(); ?></td>
    <td><?= $kamar->getDurasiMenginap(); ?> Hari</td>

    <td>
        <?= $kamar->tampilkanFasilitasKamar(); ?>
    </td>

    <td>
        Rp <?= number_format($kamar->hitungTotalTagihan(),0,",","."); ?>
    </td>
</tr>

<?php endforeach; ?>

</table>


<!-- SUITE -->

<h2>Kamar Suite</h2>

<table>

<tr>
    <th>ID</th>
    <th>Nama Tamu</th>
    <th>Check In</th>
    <th>Durasi</th>
    <th>Fasilitas</th>
    <th>Total Tagihan</th>
</tr>

<?php foreach($suite as $kamar) : ?>

<tr>
    <td><?= $kamar->getIdKamar(); ?></td>
    <td><?= $kamar->getNamaTamu(); ?></td>
    <td><?= $kamar->getTanggalCheckin(); ?></td>
    <td><?= $kamar->getDurasiMenginap(); ?> Hari</td>

    <td>
        <?= $kamar->tampilkanFasilitasKamar(); ?>
    </td>

    <td>
        Rp <?= number_format($kamar->hitungTotalTagihan(),0,",","."); ?>
    </td>
</tr>

<?php endforeach; ?>

</table>

</body>
</html>