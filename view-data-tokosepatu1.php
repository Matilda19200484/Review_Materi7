<!DOCTYPE html>
<html>
<head>
    <title>REKAP TRANSAKSI</title>
</head>

<body>
    <center>
        <table bgcolor="PINK">
            <tr>
                <th colspan="3">
                    <h2>TOKO SEPATU  PELANGI</h2>
                    <hr>
                </th>
            </tr>
            <tr>
                <td>NAMA PEMBELI</td>
                <td>:</td>
                <td><?= $nama ?></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td>NO HP</td>
                <td>:</td>
                <td><?= $no ?></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td>MERK SEPATU</td>
                <td>:</td>
                <td><?= $merk ?></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td>UKURAN SEPATU</td>
                <td>:</td>
                <td><?= $size ?></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td>HARGA</td>
                <td>:</td>
                <td>Rp. <?= $harga ?></td>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
        </table>
        <a href="<?php echo base_url( 'tokosepatu1') ?>">Kembali</a>
    </center>
</body>
</html>