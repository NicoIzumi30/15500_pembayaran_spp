    <!-- Main Content -->
    <section class="content">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Dashboard</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Serana</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i
                            class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i
                            class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-md-12 col-lg-8 col-xl-8">
                    <div class="card">
                        <div class="body">
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <?php if ($this->session->userdata('level') == 'admin') { ?>
                    <div class="col-md-12">
                        <a href="<?= base_url('dashboard/petugas') ?>">
                            <div class="card widget_2 big_icon traffic">
                                <div class="body bg-danger text-white">
                                    <h6>Petugas</h6>
                                    <h2 class="text-white"><?= count($petugas) ?> <small class="info">Data
                                            Petugas</small></h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-12">
                        <div class="card widget_2 big_icon sales">
                            <div class="body bg-warning text-white">
                                <h6>Siswa</h6>
                                <h2 class="text-white"><?= count($siswa) ?> <small class="info">Data Siswa</small></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card widget_2 big_icon domains">
                            <div class="body bg-primary text-white">
                                <h6>SPP</h6>
                                <h2 class="text-white"><?= count($spp) ?> <small class="info">Data SPP</small></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card widget_2 big_icon email">
                            <div class="body bg-info text-white">
                                <h6>Kelas</h6>
                                <h2 class="text-white"><?= count($kelas) ?> <small class="info">Data Kelas</small></h2>

                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="col-md-12">
                        <div class="card widget_2 big_icon domains">
                            <div class="body bg-success text-white">
                                <h6>Laporan Pembayaran</h6>
                                <h2 class="text-white"><?= count($pembayaran) ?> <small class="info">Data Laporan
                                        Pembayaran</small></h2>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </section>