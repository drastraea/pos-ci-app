<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        <?php echo "Laporan Stok ".$tgl ?>
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
        .logo {
            height:auto;
            /*opacity:0.3;*/
            /*z-index:-1;*/
            position:absolute;
            float:left;
            left:20%;
            top:0px;
            margin:auto;
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
                        <h2 size=9>Toko Emas</h2>
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
                <tr class="text-center" style="font-size: 10px;">
                    <th width="65px" class="bg-orange">No</th>
                    <th width="200px" class="bg-orange" class="bg-orange" class="bg-orange" class="bg-orange">Piring</th>
                    <th width="100px" class="bg-orange" class="bg-orange" class="bg-orange">Berat</th>
                    <th width="100px" class="bg-orange" class="bg-orange">Stok Masuk</th>
                    <th width="100px" class="bg-orange">Stok Keluar</th>
                </tr>
            </thead>
            <?php
    $no = 1;
    foreach($dataharian as $key => $value)
    {
    $totalberat[] = $value['berat'];
    $totalmasuk[] = $value['masuk'];
    $totalkeluar[] = $value['keluar'];
    ?>
            <tr style="font-size: 9px;">
                <td width="65px" class="text-center"><?= $no++ ?></td>
                <td width="200px" class="text-center"><?= $value['piring'] ?> </td>
                <td width="150px" class="text-center"><b><?= $value['berat']?></b></td>
                <td class="text-right"><?= $value['masuk']?></td>
                <td class="text-right"><?= $value['keluar']?></td>
            </tr>
            <?php } ?>
            <tr>
                <td colspan="2" class="bg-gray text-center">
                    <h5><strong>TOTAL</strong></h5>
                </td>
                <td class="text-center text-gray"><i>
            <?= $dataharian == null ? '' : array_sum($totalberat)." gram"; ?>
        </i></td>
        <td colspan="2" class="text-center bg-green"><b>
            <!-- </?=
                 $dataharian == null ? '' : number_format((float)(array_sum($totalberat)/1000), 4)." Kg";
             ?> -->
             <?php
             $berat = array_sum($totalberat);
             $masuk = array_sum($totalmasuk);
             $keluar = array_sum($totalkeluar);
             $ttl = $berat + $masuk - $keluar;
             echo $ttl." gram";
             ?>
        </b></td>
            </tr>
        </table>
    </div>
</body>
<script>
window.addEventListener(" load", window.print());
</script>

</html>