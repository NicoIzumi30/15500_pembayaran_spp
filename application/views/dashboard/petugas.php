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
                        <li class="breadcrumb-item active">Petugas</li>
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
                            <h2><strong>Data</strong> Petugas </h2>
                        </div>
                        <div class="body">
                            <div class="modal-footer border-0">
                                <button class="btn btn-info btn-lg" data-toggle="modal" data-target="#tambah">Tambah
                                    Petugas</button>
                            </div>
                            <div class="table-responsive">
                                <table
                                    class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th width=5%>No</th>
                                            <th>Nama Petugas</th>
                                            <th>Username</th>
                                            <th>Level</th>
                                            <th>Created</th>
                                            <th width=10% class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($petugas as $officer) :
                                        ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $officer->nama_petugas; ?></td>
                                            <td><?= $officer->username; ?></td>
                                            <td>Petugas</td>
                                            <td><?= $officer->created; ?></td>
                                            <td>
                                                <a href="<?= base_url('dashboard/delete_petugas/'); ?><?= $officer->id_petugas ?>"
                                                    class="tombol-hapus btn btn-danger">
                                                    <i class="zmdi zmdi-delete"></i></i>
                                                </a>
                                                <a href="#" class="btn btn-warning" data-toggle="modal"
                                                    data-target="#myModal<?= $officer->id_petugas ?>"><i
                                                        class="zmdi zmdi-edit"></i></i>
                                                </a>
                                                <div class="modal fade " id="myModal<?= $officer->id_petugas ?>"
                                                    tabindex="-1" role="dialog" style="display: none;"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="title" id="defaultModalLabel">Edit Petugas
                                                                </h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form
                                                                    action="<?= base_url() ?>dashboard/update_petugas/<?= $officer->id_petugas ?>"
                                                                    method="post">
                                                                    <div class="form-group">
                                                                        <label for="method">Nama Petugas</label>
                                                                        <input type="text" class="form-control"
                                                                            id="nama" name="nama"
                                                                            placeholder="Nama Lengkap"
                                                                            value="<?= $officer->nama_petugas ?>">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="method">Username</label>
                                                                        <input type="text" class="form-control"
                                                                            id="username" name="username"
                                                                            placeholder="Username"
                                                                            value="<?= $officer->username ?>">
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
                    <h4 class="title" id="defaultModalLabel">Tambah Petugas</h4>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url() ?>dashboard/petugas" method="post">
                        <div class="form-group">
                            <label for="method">Nama Petugas</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap"
                                value="">
                        </div>
                        <div class="form-group">
                            <label for="method">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username"
                                value="" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="new_password1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="new_password1" name="password1"
                                autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="new_password2" class="form-label">Konfirmasi Password</label>
                            <input type="password" class="form-control" id="new_password2" name="password2">
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