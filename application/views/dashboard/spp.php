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
                    <h2>SPP</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">SPP</li>
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
                            <h2><strong>Data</strong> SPP </h2>
                        </div>
                        <div class="body">
                            <div class="modal-footer border-0">
                                <button class="btn btn-info btn-lg" data-toggle="modal" data-target="#tambah">Tambah
                                    SPP</button>
                            </div>
                            <div class="table-responsive">
                                <table
                                    class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th width=5%>No</th>
                                            <th>Tahun</th>
                                            <th>Nominal</th>
                                            <th width=10%>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($spp as $bayar) :
                                        ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $bayar->tahun; ?></td>
                                            <td>Rp. <?= number_format($bayar->nominal) ?></td>
                                            <td>
                                                <a href="<?= base_url('dashboard/delete_spp/'); ?><?= $bayar->id_spp ?>"
                                                    class="tombol-hapus btn btn-danger">
                                                    <i class="zmdi zmdi-delete"></i></i>
                                                </a>
                                                <a href="#" class="btn btn-warning" data-toggle="modal"
                                                    data-target="#myModal"><i class="zmdi zmdi-edit"></i></i>
                                                </a>
                                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
                                                    style="display: none;" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="title" id="defaultModalLabel">Edit SPP
                                                                </h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form
                                                                    action="<?= base_url('dashboard/update_spp/' . $bayar->id_spp) ?>"
                                                                    method="post">
                                                                    <div class="form-group">
                                                                        <label for="method">Tahun</label>
                                                                        <input type="number" class="form-control"
                                                                            id="tahun" name="tahun" placeholder="Tahun"
                                                                            value="<?= $bayar->tahun ?>">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="method">Nominal</label>
                                                                        <input type="number" class="form-control"
                                                                            id="nominal" name="nominal"
                                                                            placeholder="Nominal"
                                                                            value="<?= $bayar->nominal ?>">
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-danger btn-round waves-effect"
                                                                            data-dismiss="modal">CLOSE</button>
                                                                        <button type="submit"
                                                                            class="btn btn-primary btn-round waves-effect">SAVE
                                                                            CHANGES</button>
                                                                    </div>
                                                                </form>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
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
    <div class="modal fade" id="tambah" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="title" id="defaultModalLabel">Tambah SPP</h4>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url() ?>dashboard/spp" method="post">
                        <div class="form-group">
                            <label for="method">Tahun</label>
                            <input type="number" class="form-control" id="tahun" name="tahun" placeholder="Tahun">
                        </div>
                        <div class="form-group">
                            <label for="method">Nominal</label>
                            <input type="number" class="form-control" id="nominal" name="nominal" placeholder="Nominal">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-round waves-effect"
                                data-dismiss="modal">CLOSE</button>
                            <button type="submit" class="btn btn-primary btn-round waves-effect">SAVE CHANGES</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>