<div class="card card-success card-outline container">
    <div class="col-12">
        <div class="card-header text-center">
            <span><b>Transaksi Hari Ini</b></span><br />
            <span><?= date('d/m/Y') ?></span>
        </div>
        <div class="card-body table-responsive p-0" style="height: 500px;">
            <table class="table table-bordered text-center table-head-fixed text-nowrap">
                <thead>
                    <th width="75px">No.</th>
                    <th>Nama Barang</th>
                    <th width="100px">Tipe</th>
                    <th width="100px">Kadar</th>
                    <th width="100px">Berat</th>
                    <th width="200px">Harga</th>
                    <th width="100px">Rata-rata</th>
                </thead>
                <tbody class="table-striped">
                    <?php
                    $no = 1;
                foreach ($hasil as $key => $value)
                {
                    $totalharga[] = $value['harga_pembelian'];
                    $totalberat[] = $value['berat_pembelian'];
                    ?>
                    <tr class="text-center">
                        <td>
                            <?= $no++ ?>
                        </td>
                        <td><?= $value['nama_pembelian'] ?></td>
                        <td><?= $value['tipe_pembelian'] ?></td>
                        <td>
                            <?php if($value['kadar_pembelian'] == 24000){
                                    echo "24K";
                                    }else{
                                    echo $value['kadar_pembelian']." %" ;}?>
                        </td>
                        <td><?= $value['berat_pembelian']." gram" ?></td>
                        <td><?php 
                        $nominal = $value['harga_pembelian'];
                        $rp = "Rp ".number_format($nominal,0);
                        echo $rp?></td>
                        <td><?php 
                        $harga = $value['harga_pembelian'];
                        $berat = $value['berat_pembelian'];
                        $result = $harga/$berat/1000;
                        echo round($result)?></td>
                    </tr>
                </tbody>
                <?php } ?>
                <tfoot>
                    <tr>
                        <td colspan="4" class="bg-gradient-gray"><b>Total</b></td>
                        <td>
                            <?php
                            $gr = $hasil == null ? '' : array_sum($totalberat)." gram";
                            echo $gr?>
                        </td>
                        <td>
                            <?php
                            $rp = $hasil == null ? '' : number_format(array_sum($totalharga),0);
                            echo "Rp. ".$rp
                            ?>
                        </td>
                        <td><?php
                            $ttlrp = $hasil == null ? '' : array_sum($totalharga);
                            $ttlgr = $hasil == null ? '' : array_sum($totalberat);
                            if($ttlrp > 0 && $ttlgr > 0){
                            $rerata = $ttlrp/$ttlgr/1000;
                            echo round($rerata);
                            }?></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

<!-- Script Ekko Light -->
<script>
$(function() {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox({
            alwaysShowClose: true
        });
    });

    $('.filter-container').filterizr({
        gutterPixels: 3
    });
    $('.btn[data-filter]').on('click', function() {
        $('.btn[data-filter]').removeClass('active');
        $(this).addClass('active');
    });
})

function kirimfaktur() {
    var x = document.getElementById("myCheck").value;
    document.getElementById("demo").innerHTML = x;
}
</script>