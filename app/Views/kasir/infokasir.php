<!-- Info Kasir -->
<div class="col-12">
    <div class="row">
        <div class="col-md-3 col-sm-6 col-12" style="float:none;margin:auto;">
            <div class="info-box">
                <span class="info-box-icon bg-success"><i class="fas fa-laugh-wink"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Nama</span>
                    <span class="info-box-number"><?= session()->get('nama_user')?></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-12" style="float:none;margin:auto;">
            <div class="info-box">
                <span class="info-box-icon bg-success"><i class="fas fa-calendar-alt"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Tanggal</span>
                    <span class="info-box-number"><?= date('d/m/Y')?></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-12" style="float:none;margin:auto;">
            <div class="info-box">
                <span class="info-box-icon bg-success"><i class="fas fa-clock"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Jam</span>
                    <span class="info-box-number"><?= date('H:i')?></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>
<!-- End of Info Kasir -->