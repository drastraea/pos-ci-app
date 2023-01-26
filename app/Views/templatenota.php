<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
    <title><?= $judul." ".$faktur ?></title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('AdminLTE')?>/plugins/fontawesome-free/css/all.min.css">
    <!--Theme Style-->
    <link href="<?= base_url('AdminLTE')?>/dist/css/adminlte.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url('AdminLTE')?>/dist/css/adminlte.min.css" rel="stylesheet" type="text/css" media="print" />
    <!-- Barcode Faktur -->
    <!--<script src="<?= base_url('AdminLTE')?>/dist/js/JsBarcode.all.min.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.js"></script>
    <style>
        html {
            width: 90%;
        }
        body {
            margin: 200px auto 0px auto;
            font-family: Georgia, serif !important;
        }
        .card {
            box-shadow:none;
        }
        .card-header {
            background-color: transparent;
            border-bottom: 0px solid rgba(0, 0, 0, 0.125);
            padding: 0.75rem 1.25rem;
            position: relative;
            border-top-left-radius: 0.25rem;
            border-top-right-radius: 0.25rem;
        }
        .qrcode {
          width:200px;
          height:200px;
          z-index:-1;
          left:77%;
          top:20px;
          float:right;
          position:absolute;
        }
        .logo {
            width:200px;
            height:auto;
            /*opacity:0.3;*/
            z-index:-1;
            position:absolute;
            float:left;
            left:50px;
            top:5px;
            margin:auto;
        }
        .logowm {
            opacity:0.4;
            z-index:1;
            position:absolute;
            left:50px;
            top:85px;
            width:200px;
        }
        .logowm2 {
            opacity:0.4;
            z-index:1;
            position:absolute;
            left:275px;
            top:85px;
            width:200px;
        }
        .logowm3 {
            opacity:0.4;
            z-index:1;
            position:absolute;
            left:500px;
            top:85px;
            width:200px;
        }
        .logowm4 {
            opacity:0.4;
            z-index:1;
            position:absolute;
            left:725px;
            top:85px;
            width:200px;
        }
        @media print {

            table,
            th,
            td {
                border: 1px solid #000000 !important;
                border-color: #000000 !important;
                border-collapse: collapse;
            }

            .outlined {
                border: 1px solid #000 !important;
            }
        }
        .noborder {
        border : 0px !important;
        }
        .pudar {
            background: rgba(255 , 193,7 , .3);
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <!--<p id="watermark"></p>-->
        <!-- Main content -->
        <section>
            <!-- title row -->
            <div class="row">
                <!--<img class="logo" src="</?= base_url('logoputih.png')?>"></img>-->
                <img src="<?= base_url('AdminLTE')?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                    class="img-circle logo"></img>
                <div class="col-12 text-center">
                    <p>
                        <div class="qrcode" id="qrcode"></div>
                    <address>
                        <h3 size=10>Toko Emas</h4>
                        <h1 style="font-style:italic"><strong><?= $namatoko ?></strong></h2>
                        <b><?= $blok ?></b><br>
                        <b><?= $pasar ?> </b><br>
                        <b>Rumah : <?= $rumah ?></b><br>
                        <!-- Kontak -->
                        <i class="fab fa-instagram"> <?= $ig ?></i>
                        <b> | </b>
                        <i class="fab fa-whatsapp"> <?= $no_hp?> </i>
                        <!-- End of Kontak -->
                    </address>
                </div>
                <!-- /.col -->
                </p>
                <!-- /.row -->
            </div>
            <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row">
        <?php 
            echo view('/kasir/nota.php'); ?>
    </div>
    <!-- end of row -->
</body>