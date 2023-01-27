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
                    <h2>Detail Tagihan</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Transaksi</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <!-- <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i
                            class="zmdi zmdi-arrow-right"></i></button>
                </div> -->
            </div>
        </div>
        <div class="container-fluid">
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
                            <?php if ($tagihan !== null) { ?>
                                <hr>
                                <small class="text-muted">Total Tagihan</small>
                                <p>Rp. <?= number_format($tagihan['total_tagihan']) ?></p>
                                <hr>
                                <small class="text-muted">Kekurangan Tagihan</small>
                                <p>Rp. <?= number_format($tagihan['kekurangan']) ?></p>
                            <?php } ?>
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
                                                <button class="btn btn-success">Dibayar</button>
                                                <a href="<?= base_url('dashboard/printpdf/' . $tagih->id_bulan) ?>" class="btn btn-warning">Cetak</a>
                                            <?php } else { ?>
                                                <form action="<?= base_url('dashboard/pembayaran') ?>" method="post">
                                                    <input type="hidden" name="nisn" value="<?= $siswa['nisn'] ?>">
                                                    <input type="hidden" name="bulan" value="<?= $tagih->bulan; ?>">
                                                    <input type="hidden" name="tahun" value="<?= $spp['tahun']; ?>">
                                                    <input type="hidden" name="id_spp" value="<?= $spp['id_spp']; ?>">
                                                    <input type="hidden" name="id_bulan" value="<?= $tagih->id_bulan; ?>">
                                                    <button type="submit" class="btn btn-danger">Belum Dibayar</button>
                                                </form>
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

</section>