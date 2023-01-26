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
                            <div class="row justify-content-center mt-3">
                                <div class="col-lg-10">
                                    <div class="input-group">
                                        <input type="text" name="keyword" id="keyword" class="form-control rounded"
                                            placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                                        <button type="button" id="subm"
                                            class="btn btn-lg btn-primary ml-2">search</button>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive mt-5">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th width=5%>No</th>
                                            <th>NISN</th>
                                            <th>Nama Siswa</th>
                                            <th>Kelas</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="siswa">

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
<script src="<?= base_url() ?>assets/js/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function() {
    $("#subm").click(function() {
        const value = document.getElementById("keyword").value;
        $.ajax({
            type: 'get',
            url: '/15500_pembayaran_spp/dashboard/search/',
            data: {
                'keyword': value
            },
            success: function(data) {
                $('#siswa').html(data);
                // console.info(data)
            }
        });

    });
});
</script>