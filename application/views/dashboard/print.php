<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bukti Pembayaran SPP</title>
<link rel="icon" type="image/x-icon" href=">
<meta name=" robots" content="noindex,nofollow" />
<meta name="viewport" content="width=device-width; initial-scale=1.0;" />
<style type="text/css">
@media print {

    .no-print,
    .no-print * {
        display: none !important;
    }
}

@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);

body {
    margin: 0;
    padding: 0;
    background: #e1e1e1;
}

div,
p,
a,
li,
td {
    -webkit-text-size-adjust: none;
}

.ReadMsgBody {
    width: 100%;
    background-color: #ffffff;
}

.ExternalClass {
    width: 100%;
    background-color: #ffffff;
}

body {
    width: 100%;
    height: 100%;
    background-color: #e1e1e1;
    margin: 0;
    padding: 0;
    -webkit-font-smoothing: antialiased;
}

html {
    width: 100%;
}

p {
    padding: 0 !important;
    margin-top: 0 !important;
    margin-right: 0 !important;
    margin-bottom: 0 !important;
    margin-left: 0 !important;
}

.visibleMobile {
    display: none;
}

.hiddenMobile {
    display: block;
}

@media only screen and (max-width: 600px) {
    body {
        width: auto !important;
    }

    table[class=fullTable] {
        width: 96% !important;
        clear: both;
    }

    table[class=fullPadding] {
        width: 85% !important;
        clear: both;
    }

    table[class=col] {
        width: 45% !important;
    }

    .erase {
        display: none;
    }
}

@media only screen and (max-width: 420px) {
    table[class=fullTable] {
        width: 100% !important;
        clear: both;
    }

    table[class=fullPadding] {
        width: 85% !important;
        clear: both;
    }

    table[class=col] {
        width: 100% !important;
        clear: both;
    }

    table[class=col] td {
        text-align: left !important;
    }

    .erase {
        display: none;
        font-size: 0;
        max-height: 0;
        line-height: 0;
        padding: 0;
    }

    .visibleMobile {
        display: block !important;
    }

    .hiddenMobile {
        display: none !important;
    }
}
</style>


<!-- Header -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#e1e1e1">
    <tr>
        <td height="20"></td>
    </tr>
    <tr>
        <td>
            <table width="700" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable"
                bgcolor="#ffffff" style="border-radius: 10px 10px 0 0;">
                <tr class="hiddenMobile">
                    <td height="40"></td>
                </tr>
                <tr class="visibleMobile">
                    <td height="30"></td>
                </tr>

                <tr>
                    <td>
                        <table width="600" border="0" cellpadding="0" cellspacing="0" align="center"
                            class="fullPadding">
                            <tbody>
                                <tr>
                                    <td>
                                        <table width="300" border="0" cellpadding="0" cellspacing="0" align="left"
                                            class="col" style="padding-left: 10px;">
                                            <tbody>
                                                <tr>
                                                    <td align="left">
                                                        <img src="https://s.sim.siap-online.com//upload/sekolah/20400416.200224101633.jpg"
                                                            width="50" height="50" alt="logo" border="0" />
                                                    </td>
                                                </tr>
                                                <tr class="hiddenMobile">
                                                    <td height="40"></td>
                                                </tr>
                                                <tr class="visibleMobile">
                                                    <td height="20"></td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="font-size: 12px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height: 18px; vertical-align: top; text-align: left;">
                                                        Hello, <?= $siswa['nama']; ?>
                                                        <br> Thank you for the transaction.
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                        <table width="300" border="0" cellpadding="0" cellspacing="0" align="right"
                                            class="col">
                                            <tbody>
                                                <tr class="visibleMobile">
                                                    <td height="20"></td>
                                                </tr>
                                                <tr>
                                                    <td height="5"></td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="font-size: 21px; color: #ff0000; letter-spacing: -1px; font-family: 'Open Sans', sans-serif; line-height: 1; vertical-align: top; text-align: right;">
                                                        Pembayaran SPP
                                                    </td>
                                                </tr>
                                                <tr>
                                                <tr class="hiddenMobile">
                                                    <td height="50"></td>
                                                </tr>
                                                <tr class="visibleMobile">
                                                    <td height="30"></td>
                                                </tr>

                                                <tr align="right">
                                                    <td
                                                        style="font-size: 12px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height: 18px; vertical-align: top; text-align: right;">
                                                        Tanggal
                                                        <br><?= $siswa['tgl_bayar']; ?>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>

</table>

<!-- /Header -->
<!-- Order Details -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#e1e1e1">
    <tbody>
        <tr>
            <td>
                <table width="700" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable"
                    bgcolor="#ffffff">
                    <tbody>
                        <tr>
                        <tr class="hiddenMobile">
                            <td height="60"></td>
                        </tr>
                        <tr class="visibleMobile">
                            <td height="40"></td>
                        </tr>
                        <tr>
                            <td>
                                <table width="600" border="0" cellpadding="0" cellspacing="0" align="center"
                                    class="fullPadding">
                                    <tbody>
                                        <tr align="center">
                                            <th width="15%"
                                                style="font-size: 12px;font-family: 'Open Sans', sans-serif; color: #1e2b33; font-weight: normal;">
                                                Nama Siswa</th>
                                            <th width="15%"
                                                style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #1e2b33; font-weight: normal;">
                                                Kelas</th>
                                            <th width="15%%"
                                                style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #1e2b33; font-weight: normal;">
                                                Bulan Bayar</th>
                                            <th width="15%%"
                                                style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #1e2b33; font-weight: normal;">
                                                Tahun Bayar</th>
                                            <th width="20%%"
                                                style="font-size: 12px;font-family: 'Open Sans', sans-serif; color: #1e2b33; font-weight: normal;">
                                                SPP</th>
                                            <th width="15%%"
                                                style="font-size: 12px;font-family: 'Open Sans', sans-serif; color: #1e2b33; font-weight: normal;">
                                                Total Bayar</th>
                                        </tr>

                                        <tr>
                                            <td height="1" colspan="6"
                                                style="border-bottom:1px solid #e4e4e4;padding-top:10px"></td>
                                        </tr>
                                        <tr>
                                            <td height="10" colspan="6"></td>
                                        </tr>
                                        <tr align="center">
                                            <td
                                                style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e;  line-height: 18px;  vertical-align: top; padding:10px 0;">
                                                <?= $siswa['nama']; ?></td>
                                            <td
                                                style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e;  line-height: 18px;  vertical-align: top; padding:10px 0;">
                                                <?= $siswa['nama_kelas']; ?></td>
                                            <td
                                                style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e;  line-height: 18px;  vertical-align: top; padding:10px 0;">
                                                <?= $siswa['bulan_bayar']; ?></td>
                                            <td
                                                style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e;  line-height: 18px;  vertical-align: top; padding:10px 0;">
                                                <?= $siswa['tahun_bayar']; ?></td>
                                            <td
                                                style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e;  line-height: 18px;  vertical-align: top; padding:10px 0;">
                                                Tahun <?= $siswa['tahun']; ?> -
                                                <?= number_format($siswa['nominal']); ?>/Bulan</td>
                                            <td
                                                style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e;  line-height: 18px;  vertical-align: top; padding:10px 0;">
                                                Rp. <?= number_format($siswa['jumlah_bayar']); ?></td>
                                        </tr>

                                        <tr>
                                            <td height="1" colspan="6" style="border-bottom:2px solid #e4e4e4"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td height="60"></td>
                        </tr>
                    </tbody>
                    <table width="700" border="0" cellpadding="0" style="padding-right: 60px;" cellspacing="0"
                        align="center" class="fullTable" bgcolor="#ffffff">
                        <tr>
                            <td align="right"
                                style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #000;  line-height: 18px;  vertical-align: top; padding:10px 0;">
                                Petugas SMK Negeri 1 Bantul</td>
                        </tr>
                        <tr>
                            <td height="40"></td>
                        </tr>
                        <tr>
                            <td align="right"
                                style="font-size: 14px; font-family: 'Open Sans', sans-serif; color: #000;  line-height: 18px;  vertical-align: top; padding:10px 20px;">
                                <?= $siswa['nama_petugas'] ?></td>
                        </tr>
                    </table>
                    <table width="700" border="0" height="300px" cellpadding="0" style="padding-right: 60px;"
                        cellspacing="0" align="center" class="fullTable" bgcolor="#ffffff">
                        <tr>
                            <td align="right">
                                <a href="<?= base_url('dashboard/detail_tagihan/' . $siswa['nisn']) ?>"><button
                                        style="background-color: #ffc107; color:#fff;border:0 solid white;width:120px;height:35px;border-radius:10px"
                                        class="no-print">Kembali</button></a>
                            </td>
                        </tr>
                    </table>
                </table>
            </td>
        </tr>
    </tbody>
</table>
<script>
window.print()
</script>