<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran SPP</title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/bootstrap/css/bootstrap.min.css">
    <style>
    body {
        margin: 0;
        padding: 0;
        background-image: url(<?= base_url('assets/images/1as1.jpg') ?>);
        background-size: cover;
        justify-content: space-between;
        height: 100vh
    }

    body::-webkit-scrollbar {
        display: none
    }

    .box {
        background-color: aliceblue;
        width: 200px;
        height: 200px
    }

    .title {
        color: #fff;
        font-weight: 700;
        font-size: 60px;
        margin-top: 100px;
        margin-bottom: 0
    }

    .sub-title {
        color: #fff;
        font-weight: 700;
        font-size: 40px
    }

    .carh {
        opacity: 91%
    }

    .carh:hover {
        scale: 1.1;
        opacity: 99%
    }
    </style>
</head>

<body>
    <div class="row justify-content-center">
        <div class="text-center">
            <h1 class="title">Pembayaran SPP</h1>
            <h2 class="sub-title">SMK Negeri 1 Bantul</h2>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-11">
                <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 g-4 justify-content-center">
                    <div class="col">
                        <div class="card carh mt-3">
                            <img src="<?= base_url('assets/images/Teacher.png') ?>" class="card-img-top h-75" alt="...">
                            <div class="card-body">
                                <h4 class="card-title text-center">Login Petugas</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card carh mt-3">
                            <img src="<?= base_url('assets/images/Guide.png') ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h4 class="card-title text-center">Cara Pembayaran</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card carh mt-3">
                            <img src="<?= base_url('assets/images/Student.png') ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h4 class="card-title text-center">Login Siswa</h4>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>