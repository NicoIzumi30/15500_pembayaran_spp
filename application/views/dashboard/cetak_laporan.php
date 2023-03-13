<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Laporan Pembayaran SPP</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">
	<style>
		@page {
			size: A4
		}

		h1 {
			font-weight: bold;
			font-size: 20pt;
			text-align: center;
		}

		table {
			border-collapse: collapse;
			width: 100%;
		}

		.table th {
			padding: 8px 8px;
			border: 1px solid #000000;
			text-align: center;
			background-color: #ffc107;
		}

		.table td {
			padding: 3px 3px;
			border: 1px solid #000000;
		}

		.text-center {
			text-align: center;
		}

		@media print {

			.no-print,
			.no-print * {
				display: none !important;
			}
		}
	</style>
	</style>
</head>

<body class="A4">
	<section class="sheet padding-10mm">
		<h1>Laporan Pembayaran SPP</h1>

		<table class="table">
			<thead>
				<tr>
					<th>NO.</th>
					<th>NISN</th>
					<th>Tanggal</th>
					<th>Bulan</th>
					<th>Tahun</th>
					<th>SPP</th>
					<th>Jumlah</th>
					<th>Petugas</th>
				</tr>
			</thead>
			<tbody>
				<?php
				if ($pembayaran) {
					$no = 1;
					foreach ($pembayaran as $laporan) :
				?>
						<tr>
							<td><?= $no++; ?></td>
							<td><?= $laporan->nisn; ?></td>
							<td><?= $laporan->tgl_bayar; ?></td>
							<td><?= $laporan->bulan_bayar; ?></td>
							<td><?= $laporan->tahun_bayar; ?></td>
							<td>Tahun <?= $laporan->tahun; ?> -
								<?= number_format($laporan->nominal) ?>/Bulan</td>
							<td><?= number_format($laporan->jumlah_bayar) ?></td>
							<td><?= $laporan->nama_petugas; ?></td>
						</tr>
					<?php endforeach ?>
				<?php } else { ?>
					<tr class="text-center">
						<td colspan="8">Data Tidak Tersedia!</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
		<a href="<?= base_url('dashboard/laporan') ?>"> <button class="no-print balik" style="background-color: #ffc107; height: 30px; border: #fff; border-radius: 4px; margin-top: 35px; width: 80px; float: right; color: #fff; margin-right: 10px;">
				Kembali</button></a>

	</section>
</body>


</html>