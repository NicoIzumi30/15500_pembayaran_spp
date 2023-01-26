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
                    <h2>Siswa</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Siswa</li>
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
                            <h2><strong>Data</strong> Siswa </h2>
                        </div>
                        <div class="body">
                            <div class="modal-footer border-0">
                                <button class="btn btn-info btn-lg" data-toggle="modal" data-target="#tambah">Tambah
                                    Siswa</button>
                            </div>
                            <div class="table-responsive">
                                <table
                                    class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th width=5%>No</th>
                                            <th>NISN</th>
                                            <th>NIS</th>
                                            <th>Nama</th>
                                            <th>Kelas</th>
                                            <th>Alamat</th>
                                            <th>Telp</th>
                                            <th>SPP</th>
                                            <th width=12%>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($siswa as $student) :
                                        ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $student->nisn; ?></td>
                                            <td><?= $student->nis; ?></td>
                                            <td><?= $student->nama; ?></td>
                                            <td><?= $student->nama_kelas; ?></td>
                                            <td><?= $student->alamat; ?></td>
                                            <td><?= $student->no_telp; ?></td>
                                            <td><?= $student->tahun; ?></td>
                                            <td>
                                                <a href="<?= base_url('dashboard/delete_siswa/'); ?><?= $student->nisn ?>"
                                                    class="tombol-hapus btn btn-danger">
                                                    <i class="zmdi zmdi-delete"></i></i>
                                                </a>
                                                <a href="#" class="btn btn-warning" data-toggle="modal"
                                                    data-target="#myModal<?= $student->nisn ?>"><i
                                                        class="zmdi zmdi-edit"></i></i>
                                                </a>
                                                <div class="modal fade" id="myModal<?= $student->nisn ?>" tabindex="-1"
                                                    role="dialog" style="display: none;" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="title" id="defaultModalLabel">Edit Siswa
                                                                </h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form
                                                                    action="<?= base_url('dashboard/update_siswa/' . $student->nisn) ?>"
                                                                    method="post">
                                                                    <div class="form-group">
                                                                        <label for="method">NIS</label>
                                                                        <input type="number" class="form-control"
                                                                            id="nis" name="nis" placeholder="NIS"
                                                                            value="<?= $student->nis; ?>">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="method">Nama Siswa</label>
                                                                        <input type="text" class="form-control"
                                                                            id="nama" name="nama"
                                                                            placeholder="Nama Lengkap"
                                                                            value="<?= $student->nama; ?>">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="kelas">Kelas</label>
                                                                        <select class="form-control" id="kelas"
                                                                            name="kelas">
                                                                            <option value="<?= $student->id_kelas; ?>">
                                                                                <?= $student->nama_kelas; ?></option>
                                                                            <?php
                                                                                $kelas = $this->db->get('kelas')->result();
                                                                                foreach ($kelas as $class) :
                                                                                ?>
                                                                            <option value="<?= $class->id_kelas ?>">
                                                                                <?= $class->nama_kelas; ?></option>
                                                                            <?php endforeach ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <label for="method">Alamat</label>
                                                                            <textarea rows="4" name="alamat"
                                                                                class="form-control no-resize"
                                                                                placeholder="Alamat..."><?= $student->alamat; ?></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="method">Nomor Telp</label>
                                                                        <input type="number" class="form-control"
                                                                            id="telp" name="telp"
                                                                            placeholder="Phone Number"
                                                                            value="<?= $student->no_telp; ?>">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="kelas">Tahun Masuk</label>
                                                                        <select class="form-control" id="spp"
                                                                            name="spp">
                                                                            <option value="<?= $student->id_spp; ?>">
                                                                                <?= $student->tahun; ?></option>
                                                                            <?php
                                                                                $spp = $this->db->get('spp')->result();
                                                                                foreach ($spp as $spa) :
                                                                                ?>
                                                                            <option value="<?= $spa->id_spp ?>">
                                                                                <?= $spa->tahun; ?></option>
                                                                            <?php endforeach ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="modal-footer mt-3">
                                                                        <button type="button"
                                                                            class="btn btn-danger btn-lg waves-effect"
                                                                            data-dismiss="modal">CLOSE</button>
                                                                        <button type="submit"
                                                                            class="btn btn-primary btn-lg waves-effect">SAVE
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
                    <h4 class="title" id="defaultModalLabel">Tambah Siswa</h4>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url() ?>dashboard/siswa" method="post">
                        <div class="form-group">
                            <label for="method">NISN</label>
                            <input type="number" class="form-control" id="nisn" name="nisn" placeholder="NISN" value="">
                        </div>
                        <div class="form-group">
                            <label for="method">NIS</label>
                            <input type="number" class="form-control" id="nis" name="nis" placeholder="NIS" value="">
                        </div>
                        <div class="form-group">
                            <label for="method">Nama Siswa</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap"
                                value="">
                        </div>
                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <select class="form-control" id="kelas" name="kelas">
                                <option disabled selected>Choose..</option>
                                <?php
                                $kelas = $this->db->get('kelas')->result();
                                foreach ($kelas as $class) :
                                ?>
                                <option value="<?= $class->id_kelas ?>"><?= $class->nama_kelas; ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <label for="method">Alamat</label>
                                <textarea rows="4" name="alamat" class="form-control no-resize"
                                    placeholder="Alamat..."></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="method">Nomor Telp</label>
                            <input type="number" class="form-control" id="telp" name="telp" placeholder="Phone Number"
                                value="">
                        </div>
                        <div class="form-group">
                            <label for="kelas">Tahun Masuk</label>
                            <select class="form-control" id="spp" name="spp">
                                <option disabled selected>Choose..</option>
                                <?php
                                $spp = $this->db->get('spp')->result();
                                foreach ($spp as $spa) :
                                ?>
                                <option value="<?= $spa->id_spp ?>"><?= $spa->tahun; ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="modal-footer mt-3">
                            <button type="button" class="btn btn-danger btn-lg waves-effect"
                                data-dismiss="modal">CLOSE</button>
                            <button type="submit" class="btn btn-primary btn-lg waves-effect">SAVE CHANGES</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>