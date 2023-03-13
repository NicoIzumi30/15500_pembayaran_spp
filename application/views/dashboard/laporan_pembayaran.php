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
					<h2>Laporan Pembayaran</h2>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Dashboard</a>
						</li>
						<li class="breadcrumb-item active">Laporan Pembayaran</li>
					</ul>
					<button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
				</div>
				<div class="col-lg-5 col-md-6 col-sm-12">
					<!-- <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i
                            class="zmdi zmdi-arrow-right"></i></button> -->
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row clearfix">
				<div class="col-lg-12">
					<div class="card">
						<div class="header">
							<h2><strong>Data</strong> Laporan Pembayaran </h2>
						</div>
						<div class="body">
							<form action="<?= base_url('dashboard/cetak_laporan') ?>" method="post">
								<div class="row">
									<div class="col-md-6">
										<div class="row justify-content-center">
											<div class="col-5">
												<div class="form-group">
													<label for="method">Tanggal Awal</label>
													<input type="date" class="form-control form-control-lg" id="awal" name="awal" placeholder="Tanggal Bayar"">
                          				  </div>
										</div>
										<div class=" col-1 text-center">
													<h4>-</h4>
												</div>
												<div class="col-5">
													<div class="form-group">
														<label for="method">Tanggal Akhir</label>
														<input type="date" class="form-control form-control-lg" id="akhir" name="akhir" placeholder="Tanggal Bayar"">
                          				  </div>
										</div>
										</div>
										<div class=" row ml-4">
														<button class="btn btn-warning " type="submit">Cetak
															Laporan</button>
													</div>

												</div>
											</div>
							</form>
						</div>
					</div>
				</div>
			</div>




































		</div>
	</div>
</section>