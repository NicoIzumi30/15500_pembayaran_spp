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
						<li class="breadcrumb-item active">Logs</li>
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
							<h2><strong>Data</strong> Petugas </h2>
						</div>
						<div class="body">
							<div class="row">
							<div class="col-md-6 mb-4">
								<div class="row justify-content-center">
									<div class="col-11">
									<h4 style="font-family: auto;">Logs Petugas</h2>
									<div class="table-responsive">
                                <table class="table table-bordered table-hover js-basic-example dataTable text-center">
											<thead class="thead-dark">
											<tr>
													<th width=5%>No</th>
													<th>Username</th>
													<th>Login</th>
													<th>Logout</th>
												</tr>
											</thead>
											<tbody>
												<?php
												$no = 1;
												foreach($logsP as $log) :
												?>
											<tr>
													<td><?= $no++ ?></td>
													<td><?= $log->username ?></td>
													<td><?= $log->login ?></td>
													<td><?= $log->logout ?></td>
												</tr>
											<?php endforeach ?>
											</tbody>
										</table>
										<hr class="mt-3">
									</div>
										</div>
									</div>
									
								</div>
								<div class="col-md-6">
									<div class="row justify-content-center">
										<div class="col-11">
									<h4 style="font-family: auto;">Logs Siswa</h2>	
										<div class="table-responsive">
										<table class="table table-bordered table-hover js-basic-example dataTable text-center">
											<thead class="thead-dark">
											<tr>
													<th width=5%>No</th>
													<th>Username</th>
													<th>Login</th>
													<th>Logout</th>
												</tr>
											</thead>
											<tbody>
												<?php
												$no = 1;
												foreach($logsS as $logss) :
												?>
											<tr>
													<td><?= $no++ ?></td>
													<td><?= $logss->username ?></td>
													<td><?= $logss->login ?></td>
													<td><?= $logss->logout ?></td>
												</tr>
											<?php endforeach ?>
											</tbody>
										</table>
									</div>
										</div>
									</div>
									
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
