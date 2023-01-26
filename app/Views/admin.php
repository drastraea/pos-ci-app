<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-success">
        <div class="inner">
            <h3>Penjualan<p>Hari ini</p>
            </h3>
            <?php
                foreach ($harianjual as $key => $value) {
                $totalberat[] = $value['berat_penjualan'];
                $totalharga[] = $value['harga_penjualan'];
                $gram = array_sum($totalberat);
                $harga = array_sum($totalharga);?>
            <span><?php echo $gram." gram"?></span> |
            <span><?php $rp = "Rp. ".number_format($harga,0); 
            echo $rp ?></span> |
            <span><?php 
                        if ($harga > 0 && $gram > 0) {
                        $rerata = $harga/$gram/1000;
                        echo round($rerata);
                        }?></span>
            <?php } ?>
        </div>
        <div class="icon">
            <i class="nav-icon fas fa-cash-register"></i>
        </div>
        <a href="<?= base_url('Penjualan')?>" class="small-box-footer">More info <i
                class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
<!-- ./col -->
<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-warning">
        <div class="inner">
            <h3>Pembelian<p>Hari ini</p>
            </h3>
            <?php
                foreach ($harianbeli as $key => $value) {
                $totalberatbeli[] = $value['berat_pembelian'];
                $totalhargabeli[] = $value['harga_pembelian'];
                $grambeli = array_sum($totalberatbeli);
                $hargabeli = array_sum($totalhargabeli);?>
            <span><?php echo $grambeli." gram"?></span> |
            <span><?php $rpb = "Rp. ".number_format($hargabeli,0); 
            echo $rpb ?></span> |
            <span><?php 
                        if($hargabeli > 0 && $grambeli > 0){
                        $rata = $hargabeli/$grambeli/1000;
                        echo round($rata);
                        }?></span>
            <?php } ?>
        </div>
        <div class="icon">
            <i class="fas fa-shopping-cart"></i>
        </div>
        <a href="<?= base_url('Pembelian')?>" class="small-box-footer">More info <i
                class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
<!-- ./col -->
<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-danger">
        <div class="inner">
            <h3>Laporan<p>Total</p>
            </h3>

            <span>Cek laporan buka menu <i class="fas fa-bars"></i></span>
        </div>
        <div class="icon">
            <i class="fas fa-folder"></i>
        </div>
        <a href="<?= base_url('Laporan')?>" class="small-box-footer">More info <i
                class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
<!-- ./col -->
<div class="col-lg-3 col-6">
    <!-- small box -->
</div>


<!-- Chart -->
<!-- <div class="col-md-12">
    <canvas id="myChart" width="100%" height="30px"></canvas>
</div> -->
<!-- <script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)'
                ],
                borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script> -->