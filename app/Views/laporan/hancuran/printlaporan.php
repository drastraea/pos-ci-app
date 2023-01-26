<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        <?php echo "Laporan Penjualan ".$tgl ?>
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Icon Web -->
    <link rel="icon" type="image/x-icon" href="<?= base_url()?>/harmonis.ico">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('AdminLTE')?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('AdminLTE')?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url('AdminLTE')?>/plugins/fontawesome-free/css/all.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('AdminLTE')?>/dist/css/adminlte.min.css">
    <style>
        tr {
            padding: 8px 10px; /* e.g. change 8x to 4px here */
        }
        .logo {
            height:auto;
            /*opacity:0.3;*/
            /*z-index:-1;*/
            position:absolute;
            float:left;
            left:20%;
            top:0px;
            margin:auto;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <!-- Main content -->
        <section class="invoice">
            <!-- title row -->
            <div class="row">
                <img src="<?= base_url('AdminLTE')?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" width="150" height="150"
                    class="img-circle logo"></img>
                <div class="col-12 text-center">
                    <p>
                    <address>
                        <h2 size=10>Toko Emas</h2>
                        <h4><strong><?= $namatoko ?></strong></h4>
                        <span><?= $judul ?><br />
                            Tanggal : <?= $tgl ?></span>
                    </address>
                </div>
                <!-- /.col -->
                </p>
                <!-- /.row -->
            </div>
            <!-- /.col -->
    </div>
    <div class="col-sm-10" style="float:none;margin:auto">
        <table class="table table-bordered table-striped">

            <thead>
                <tr class="text-center">
                    <th class="bg-orange" width="65px">No</th>
                    <th class="bg-orange">Nama</th>
                    <th class="bg-orange" width="100px">Kadar</th>
                    <th class="bg-orange" width="150px">Berat</th>
                    <th class="bg-orange" width="150px">Harga</th>
                    <th class="bg-orange" width="100px">Rata-rata</th>
                </tr>
            </thead>
            <?php
    $no = 1;
    foreach($dataharian as $key => $value)
    {
    $totalharga[] = $value['harga_penjualan'];
    $totalberat[] = $value['berat_penjualan'];?>
            <tr style="font-size: 12px;">
                <td width="65px" class="text-center"><?= $no++ ?></td>
                <td><?= $value['nama_penjualan'] ?> </td>
                <td width="100px" class="text-center"><?= $value['kadar_penjualan']." %" ?></td>
                <td width="150px" class="text-center"><?= $value['berat_penjualan']." gr" ?></td>
                <td width="150px" class="text-right">
                    <?php
            $nominal = $value['harga_penjualan'];
            $rp = "Rp. ".number_format($nominal,0);
            echo $rp ?>
                </td>
                <td width="100px" class="text-center">
                    <?php
            $harga = $value['harga_penjualan'];
            $berat = $value['berat_penjualan'];
            $result = $harga/$berat/1000;
            echo round($result)?>
                </td>
            </tr>
            <?php } ?>
            <tr>
                <td colspan="3" class="bg-gray text-center">
                    <h5><strong>TOTAL</strong></h5>
                </td>
                <td class="bg-green text-center"><b><?= $dataharian == null ? '' : array_sum($totalberat)." gram"; ?></b></td>
                <td class="bg-green text-right"><b><?= $dataharian == null ? '' : "Rp. ".number_format(array_sum($totalharga)); ?></b>
                </td>
                <td class="bg-green text-center">
                    <b><?php
            $ttlrp = $dataharian == null ? '' : array_sum($totalharga);
            $ttlgr = $dataharian == null ? '' : array_sum($totalberat);
            $rerata = $dataharian == null ? '' : $ttlrp/$ttlgr/1000;
            echo round($rerata)
            ?></b>
                </td>
            </tr>
        </table>
    </div>
</body>
<script>
window.addEventListener(" load", window.print());
</script>

</html>