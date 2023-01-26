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
                    <h2>Kelas</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Kelas</li>
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
                            <h2><strong>Data</strong> Kelas </h2>
                        </div>
                        <div class="body">
                            <div class="modal-footer border-0">
                                <button class="btn btn-info btn-lg" data-toggle="modal" data-target="#tambah">Tambah
                                    Kelas</button>
                            </div>
                            <div class="table-responsive">
                                <table
                                    class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th width=5%>No</th>
                                            <th>Nama Kelas</th>
                                            <th>Kompetensi Keahlian</th>
                                            <th width=10%>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($kelas as $class) :
                                        ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $class->nama_kelas; ?></td>
                                            <td><?= $class->kompetensi_keahlian; ?></td>
                                            <td>
                                                <a href="<?= base_url('dashboard/delete_kelas/'); ?><?= $class->id_kelas ?>"
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
                                                                <h4 class="title" id="defaultModalLabel">Edit Kelas
                                                                </h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form
                                                                    action="<?= base_url('dashboard/update_kelas/' . $class->id_kelas) ?>"
                                                                    method="post">
                                                                    <div class="form-group">
                                                                        <label for="method">Nama Kelas</label>
                                                                        <input type="text" class="form-control"
                                                                            id="kelas" name="kelas"
                                                                            placeholder="Nama Kelas"
                                                                            value="<?= $class->nama_kelas ?>">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="method">Kompetensi Keahlian</label>
                                                                        <input type="text" class="form-control"
                                                                            id="kompetensi" name="kompetensi"
                                                                            placeholder="Kompetensi Keahlian"
                                                                            value="<?= $class->kompetensi_keahlian ?>">
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
                    <h4 class="title" id="defaultModalLabel">Tambah Kelas</h4>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url() ?>dashboard/kelas" method="post">
                        <div class="form-group">
                            <label for="method">Nama Kelas</label>
                            <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Nama Kelas"
                                value="">
                        </div>
                        <div class="form-group">
                            <label for="method">Kompetensi Keahlian</label>
                            <input type="text" class="form-control" id="kompetensi" name="kompetensi"
                                placeholder="Kompetensi Keahlian" value="">
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