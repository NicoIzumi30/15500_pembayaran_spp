<section class="content">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <div class="flash-data-gagal" data-flashdata="<?= $this->session->flashdata('flash-gagal'); ?>"></div>
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Transaksi</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Transaksi</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i
                            class="zmdi zmdi-sort-amount-desc"></i></button>
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
                            <h2><strong>Data</strong> Transaksi </h2>
                        </div>
                        <div class="body">
                            <?php
							$sppta = $this->db->get_where('spp', ['id_spp' => $setValue['id_spp']])->row_array();
							?>
                            <div class="row p-3">
                                <div class="col-md-8 mt-1">
                                    <form action="<?= base_url('dashboard/bayarSPP/') ?>" method="post">
                                        <div class="form-group">
                                            <label for="method">Petugas</label>
                                            <input type="text" class="form-control form-control-lg" id="petugas"
                                                name="petugas" value="<?= $this->session->userdata('nama_petugas'); ?>"
                                                readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="method">NISN</label>
                                            <input type="number" class="form-control form-control-lg" id="nisn"
                                                name="nisn" value="<?= $setValue['nisn'] ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="method">Tanggal Bayar</label>
                                            <input type="date" class="form-control form-control-lg" id="tanggal"
                                                name="tanggal" placeholder="Tanggal Bayar"">
                                    </div>
										<!-- <div class=" form-group">
                                            <label for="method">Tanggal Bayar</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="zmdi zmdi-calendar"></i></span>
                                                </div>
                                                <input type="text" name="tanggal" class="form-control datetimepicker"
                                                    placeholder="Please choose date &amp; time..." data-dtp="dtp_jE2Bh">
                                            </div>
                                        </div> -->
                                        <div class=" form-group">
                                            <label for="method">Bulan Bayar</label>
                                            <input type="text" class="form-control form-control-lg" id="bulan"
                                                name="bulan" value="<?= $setValue['bulan'] ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="method">Tahun Bayar</label>
                                            <input type="text" class="form-control form-control-lg" id="tahun"
                                                name="tahun" value="<?= $setValue['tahun'] ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="method">SPP</label>
                                            <input type="text" class="form-control form-control-lg" id="spp" name="spp"
                                                value="Tahun <?= $sppta['tahun'] ?> - Rp. <?= number_format($sppta['nominal']) ?>/Bulan"
                                                readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="method">Jumlah Bayar</label>
                                            <input type="number" class="form-control form-control-lg" id="jumlah"
                                                name="jumlah" placeholder="Jumlah Bayar" min="<?= $sppta['nominal'] ?>"
                                                max="<?= $sppta['nominal'] ?>">
                                        </div>
                                        <input type="hidden" name="id_spp" value="<?= $sppta['id_spp'] ?>">
                                        <input type="hidden" name="id_bulan" value="<?= $setValue['id_bulan'] ?>">

                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-success btn-lg">Bayar Sekarang</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>