<!doctype html>
<html class="no-js " lang="en">
<?php if (isset($title)) {
	$title = $title;
} else {
	$title = 'Pembayaran SPP';
} ?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
    <title>Detail Siswa</title>
    <link rel="icon" href="<?= base_url() ?>assets/images/logo.png" type="image/x-icon"> <!-- Favicon-->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/charts-c3/plugin.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/morrisjs/morris.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fullcalendar/fullcalendar.min.css">
    <link
        href="<?= base_url() ?>assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css"
        rel="stylesheet" />
    <link href="<?= base_url() ?>assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.min.css">
</head>

<body class="theme-blush">

    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img class="zmdi-hc-spin" src="<?= base_url() ?>assets/images/loader2.png" width="100"
                    height="100" alt="Aero"></div>
            <p>Please wait...</p>
        </div>
    </div>

    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>

    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <div class="navbar-brand">
            <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
            <a href="<?= base_url() ?>"><img src="<?= base_url() ?>assets/images/logo.png" width="40" alt="Aero"><span
                    class="m-l-10">Pembayaran SPP</span></a>
        </div>
        <div class="menu">
            <ul class="list">

                <li>
                    <div class="user-info">
                        <a class="image" href="<?= base_url() ?>"><img src="<?= base_url() ?>assets/images/user.png"
                                alt="User"></a>
                        <div class="detail">
                            <?php if (!$this->session->userdata('nisn')) { ?>
                            <h4><?= $this->session->userdata('nama_petugas'); ?></h4>
                            <small><?= $this->session->userdata('level'); ?></small>
                            <?php } else { ?>
                            <h4><?= $siswa['nama'] ?></h4>
                            <small><?= $siswa['nisn']; ?></small>
                            <?php } ?>
                        </div>
                    </div>
                </li>
                <?php if ($this->session->userdata('level') == 'admin' or 'petugas') { ?>
                <li><a href="<?= base_url('dashboard/index') ?>"><i
                            class="zmdi zmdi-home"></i><span>Dashboard</span></a>
                </li>
                <?php } ?>
                <?php if ($this->session->userdata('level') == 'admin') { ?>
                <li><a href="<?= base_url('dashboard/logs') ?>"><i
                            class="zmdi zmdi-calendar-note"></i><span>Logs</span></a></li>
                <?php } ?>
                <?php if ($this->session->userdata('level') == 'admin' or 'petugas') { ?>
                <li><a href="<?= base_url('dashboard/profile') ?>"><i
                            class="zmdi zmdi-account"></i><span>Profile</span></a></li>
                <?php } ?>
                <?php if ($this->session->userdata('nisn')) { ?>
                <li class="active"><a href="<?= base_url('siswa') ?>"><i class="zmdi zmdi-account"></i><span>Profile
                            Siswa</span></a>
                </li>
                <?php } ?>
                <?php if ($this->session->userdata('level') == 'admin') { ?>
                <li><a href="<?= base_url('dashboard/petugas') ?>"><i
                            class="zmdi zmdi-accounts"></i><span>Petugas</span></a></li>
                <?php } ?>
                </li>
                <?php if ($this->session->userdata('level') == 'admin') {
					echo '<li><a href="' . base_url('dashboard/kelas') . '"><i class="zmdi zmdi-apps"></i><span>Kelas</span></a>
                    </li>';
				} ?>
                <?php if ($this->session->userdata('level') == 'admin') {
					echo ' <li><a href="' . base_url('dashboard/spp') . '"><i class="zmdi zmdi-assignment"></i><span>SPP</span></a>
                    </li>';
				} ?>

                <?php if ($this->session->userdata('level') == 'admin') {
					echo ' <li><a href="' . base_url('dashboard/siswa') . '"><i
                    class="zmdi zmdi-account-box-mail"></i><span>Siswa</span></a>
                </li>';
				} ?>

                <?php if ($this->session->userdata('level') == 'admin' or 'petugas') { ?>

                <li><a href="<?= base_url('dashboard/transaksi') ?>"><i
                            class="zmdi zmdi-paypal"></i><span>Transaksi</span></a>
                </li>
                <?php } ?>
                <?php if ($this->session->userdata('level') == 'admin') { ?>

                <li><a href="<?= base_url('dashboard/laporan') ?>"><i class="zmdi zmdi-assignment"></i><span>Laporan
                            Transaksi</span></a>
                </li>
                <?php } ?>
                <li><a href="javascript:void(0);" class="js-right-sidebar" title="Setting"><i
                            class="zmdi zmdi-settings zmdi-hc-spin"></i><span>Setting</span></a>
                </li>
                <?php if ($this->session->userdata('level') == 'admin' && 'petugas') { ?>

                <li><a href="<?= base_url('auth/logout') ?>" class="mega-menu" title="Sign Out"><i
                            class="zmdi zmdi-power"></i><span>Logout</span></a></li>
                <?php } ?>
                <?php if ($this->session->userdata('nisn')) { ?>
                <li><a href="<?= base_url('auth_siswa/logout') ?>" class="mega-menu" title="Sign Out"><i
                            class="zmdi zmdi-power"></i><span>Logout</span></a></li>
                <?php } ?>

            </ul>
        </div>
    </aside>

    <!-- Right Sidebar -->
    <aside id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs sm">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#setting"><i
                        class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#chat"><i
                        class="zmdi zmdi-comments"></i></a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="setting">
                <div class="slim_scroll">
                    <div class="card">
                        <h6>Theme Option</h6>
                        <div class="light_dark">
                            <div class="radio">
                                <input type="radio" name="radio1" id="lighttheme" value="light" checked="">
                                <label for="lighttheme">Light Mode</label>
                            </div>
                            <div class="radio mb-0">
                                <input type="radio" name="radio1" id="darktheme" value="dark">
                                <label for="darktheme">Dark Mode</label>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <h6>Color Skins</h6>
                        <ul class="choose-skin list-unstyled">
                            <li data-theme="purple">
                                <div class="purple"></div>
                            </li>
                            <li data-theme="blue">
                                <div class="blue"></div>
                            </li>
                            <li data-theme="cyan">
                                <div class="cyan"></div>
                            </li>
                            <li data-theme="green">
                                <div class="green"></div>
                            </li>
                            <li data-theme="orange">
                                <div class="orange"></div>
                            </li>
                            <li data-theme="blush" class="active">
                                <div class="blush"></div>
                            </li>
                        </ul>
                    </div>
                    <div class="card">
                        <h6>General Settings</h6>
                        <ul class="setting-list list-unstyled">
                            <li>
                                <div class="checkbox rtl_support">







         
                           <input id="checkbox1" type="checkbox" value="rtl_view">
                                    <label for="checkbox1">RTL Version</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox ms_bar">
                                    <input id="checkbox2" type="checkbox" value="mini_active">
                                    <label for="checkbox2">Mini Sidebar</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </aside>