<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <table id="laporan">
        <thead>
            <tr>
                <th>No</th>
                <th>Petugas</th>
                <th>NISN</th>
                <th>Tanggal Bayar</th>
                <th>Bulan Bayar</th>
                <th>Tahun Bayar</th>
                <th>SPP</th>
                <th>Jumlah Bayar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($pembayaran as $laporan) :
            ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $laporan->nama_petugas; ?></td>
                <td><?= $laporan->nisn; ?></td>
                <td><?= $laporan->tgl_bayar; ?></td>
                <td><?= $laporan->bulan_bayar; ?></td>
                <td><?= $laporan->tahun_bayar; ?></td>
                <td>Tahun <?= $laporan->tahun; ?> -
                    <?= number_format($laporan->nominal) ?>/Bulan</td>
                <td><?= number_format($laporan->jumlah_bayar) ?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>

</html>