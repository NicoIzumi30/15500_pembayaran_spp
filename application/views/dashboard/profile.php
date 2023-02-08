<style>
@import url('https://fonts.googleapis.com/css2?family=Archivo+Black&family=Lilita+One&family=Secular+One&display=swap');
</style>
<?php
$user = $this->db->get_where('petugas', ['id_petugas' => $this->session->userdata('id')])->row_array();
?>
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
                        <li class="breadcrumb-item active">Profile</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i
                            class="zmdi zmdi-sort-amount-desc"></i></button>
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
                    <div class="card mcard_3 ">
                        <div class="body pb-5">
                            <img src="<?= base_url() ?>assets/images/user.png" class="rounded-circle"
                                alt="profile-image">

                            <h3 class="m-t-10 mb-0"><?= $user['username'] ?></h3>
                            <p>Bergabung sejak <strong><?= $user['created']; ?></strong></p>
                            <div class="row">
                                <div class="col-12 mb-4">

                                    <a href="#" class="btn btn-info" data-toggle="modal"
                                        data-target="#defaultModal">Edit Data</a>
                                    <a href="<?= base_url('dashboard/changepassword') ?>" class="btn btn-warning">Ubah
                                        Password</a>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-7 col-md-10">
                    <div class="card">
                        <div class="body">
                            <small class="text-muted">Nama Petugas: </small>
                            <p><?= $user['nama_petugas']; ?></p>
                            <hr>
                            <small class="text-muted">Username</small>
                            <p><?= $user['username'] ?></p>
                            <hr>
                            <small class="text-muted">Level</small>
                            <p><?= $user['level'] ?></p>

                            <hr>
                            <small class="text-muted">Created</small>
                            <p><?= $user['created'] ?></p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="title" id="defaultModalLabel">Edit Profile</h4>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url() ?>dashboard/update_profile" method="post">
                        <div class="form-group">
                            <label for="method">Nama Petugas</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap"
                                value="<?= $user['nama_petugas'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="method">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username"
                                value="<?= $user['username'] ?>">
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
