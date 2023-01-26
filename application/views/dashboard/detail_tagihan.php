<style>
@import url('https://fonts.googleapis.com/css2?family=Archivo+Black&family=Lilita+One&family=Secular+One&display=swap');
</style>
<section class="content">
    <div class="pembayaran" data-flashdata="<?= $this->session->flashdata('pembayaran'); ?>"></div>
    <div class="pembayaran-gagal" data-flashdata="<?= $this->session->flashdata('pembayaran-gagal'); ?>"></div>
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Detail Tagihan</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Detail Tagihan</li>
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
                            <h2><strong>Data</strong> Detail Tagihan </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive mt-5">
                                <table class="table table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th width=10%>No</th>
                                            <th>Tahun</th>
                                            <th>Bulan</th>
                                            <th width="20%">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($tagihan as $tagih) :
                                            $spp = $this->db->get_where('spp', ['id_spp' => $siswa['id_spp']])->row_array();
                                        ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $spp['tahun'] ?></td>
                                            <td><?= $tagih->bulan; ?></td>
                                            <td>
                                                <?php if ($tagih->status == 'Dibayar') { ?>
                                                <button class="btn btn-success">Dibayar</button>'
                                                <a href="#" class="btn btn-warning">Cetak</a>'
                                                <?php } else { ?>
                                                <form action="<?= base_url('dashboard/pembayaran') ?>" method="post">
                                                    <input type="hidden" name="nisn" value="<?= $siswa['nisn'] ?>">
                                                    <input type="hidden" name="bulan" value="<?= $tagih->bulan; ?>">
                                                    <input type="hidden" name="tahun" value="<?= $spp['tahun']; ?>">
                                                    <input type="hidden" name="id_spp" value="<?= $spp['id_spp']; ?>">
                                                    <input type="hidden" name="id_bulan"
                                                        value="<?= $tagih->id_bulan; ?>">
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
        </div>
    </div>
</section>