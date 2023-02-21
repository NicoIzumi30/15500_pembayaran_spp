<style>
	@import url('https://fonts.googleapis.com/css2?family=Archivo+Black&family=Lilita+One&family=Secular+One&display=swap');
</style>
<section class="content">
	<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
	<div class="flash-data-gagal" data-flashdata="<?= $this->session->flashdata('flash-gagal'); ?>"></div>
	<div class="body_scroll">
		<div class="block-header">
			<div class="row">
				<div class="col-lg-7 col-md-6 col-sm-12">
					<h2>Profile</h2>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Dashboard</a>
						</li>
						<li class="breadcrumb-item active">Profile</li>
					</ul>
					<button class="btn btn-primary btn-icon mobile_menu" type="button" style="z-index: 10;"><i class="zmdi zmdi-sort-amount-desc"></i></button>
				</div>
				<!-- <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i
                            class="zmdi zmdi-arrow-right"></i></button>
                </div> -->
			</div>
		</div>
		<div class="container-fluid">
			<div class="modal-footer border-0">
				<button class="btn btn-warning" data-toggle="modal" data-target="#history">Riwayat Pembayaran</button>
			</div>
			<div class="row clearfix justify-content-start">
				<div class="col-lg-5 col-md-10">
					<div class="card">
						<div class="body">
							<div class="text-center mb-5">
								<img src="<?= base_url() ?>assets/images/user.png" class="rounded-circle" alt="profile-image">
							</div>
							<small class="text-muted">Nama Siswa</small>
							<p><?= $siswa['nama']; ?></p>
							<hr>
							<small class="text-muted">NISN</small>
							<p><?= $siswa['nisn'] ?></p>
							<hr>
							<small class="text-muted">Kelas</small>
							<p><?= $siswa['nama_kelas'] ?></p>
							<hr>
							<small class="text-muted">Alamat</small>
							<p><?= $siswa['alamat'] ?></p>
							<hr>
							<small class="text-muted">No Telepon</small>
							<p><?= $siswa['no_telp'] ?></p>
							<hr>
							<small class="text-muted">SPP</small>
							<p>Tahun <?= $siswa['tahun'] ?> - <?= number_format($siswa['nominal']) ?>/Bulan</p>
							<hr>
							<small class="text-muted">Total Tagihan</small>
							<p>Rp. <?= number_format($tagihan['total_tagihan']) ?></p>
							<hr>
							<small class="text-muted">Kekurangan Tagihan</small>
							<p>Rp. <?= number_format($tagihan['kekurangan']) ?></p>
						</div>
					</div>

				</div>
				<div class="col-lg-7 col-md-10">

					<div class="table-responsive">
						<table class="table table-bordered text-center">
							<thead>
								<tr>
									<th width=10%>No</th>
									<th>Tahun</th>
									<th>Bulan</th>
									<th width="30%">Status</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								foreach ($bulan as $tagih) :
									$spp = $this->db->get_where('spp', ['id_spp' => $siswa['id_spp']])->row_array();
								?>
									<tr>
										<td><?= $no++; ?></td>
										<td><?= $spp['tahun'] ?></td>
										<td><?= $tagih->bulan; ?></td>
										<td>
											<?php if ($tagih->status == 'Dibayar') { ?>
												<button class="btn btn-success">Lunas</button>
											<?php } else { ?>
												<button type="" class="btn btn-danger">Belum Dibayar</button>

											<?php } ?>

										</td>
									</tr>
								<?php endforeach ?>
							</tbody>
						</table>
					</div>
				</div>


			</div>
		</div>
	</div>
	<div class="modal fade" id="history" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header mx-auto">
					<h4 class="title" id="defaultModalLabel" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Riwayat Pembayaran</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
				</div>
				<div class="modal-body mx-auto">
					<table class="table table-bordered table-responsive">
						<thead class="thead-dark">
						<tr>
								<th width=5%>No</th>
								<th width=15%>Bulan</th>
								<th width=10%>Tahun</th>
								<th width=15%>Jumlah</th>
								<th width=55%>Tanggal</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							$no =1 ;
							foreach($pembayaran as $bayar):
							 ?>
						<tr>
							<td><?= $no++; ?></td>
							<td><?= $bayar->bulan_bayar; ?></td>
							<td><?= $bayar->tahun_bayar; ?></td>
							<td><?= $bayar->jumlah_bayar; ?></td>
							<td><?= $bayar->tgl_bayar; ?></td>
						</tr>
						<?php endforeach ?>
						</tbody>
					</table>
				</div>

			</div>
		</div>
	</div>
</section>
