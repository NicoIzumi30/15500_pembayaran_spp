<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title_pdf; ?></title>
    <style>
        #table {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #table td,
        #table th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #table tr:hover {
            background-color: #ddd;
        }

        #table th {
            padding-top: 10px;
            padding-bottom: 10px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>

<body>
    <div style="text-align:center">
        <h3> Laporan PDF Toko Kita</h3>
    </div>
    <?php
    $pembayaran = $this->M_dashboard->pembayaran();

    ?>
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