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
                            <h2><strong>Data</strong> Laporan Pembayaran </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable"
                                    id="laporan">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
