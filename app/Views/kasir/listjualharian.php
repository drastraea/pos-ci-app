<div class="card card-success card-outline container">
    <div class="col-12">
        <div class="card-header text-center">
            <span><b>Transaksi Hari Ini</b></span><br />
            <span><?= date('d/m/Y') ?></span>
        </div>
        <div class="card-body">
            <table class="table table-bordered text-center">
                <span>Pilih salah satu penjualan, item yang lain dalam <b>satu faktur yang sama</b> akan
                    diprint otomatis</span>
                <thead>
                    <th width="50px">Pilih</th>
                    <th width="50px">No.</th>
                    <th width="75px">Faktur</th>
                    <th>Nama Barang</th>
                    <th width="75px">Tipe</th>
                    <th width="100px">Kadar</th>
                    <th width="100px">Berat</th>
                    <th width="180px">Harga</th>
                    <th width="100px">Rata-rata</th>
                    <th width="150px">Foto</th>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                foreach ($hasil as $key => $value)
                {
                    $totalharga[] = $value['harga_penjualan'];
                    $totalberat[] = $value['berat_penjualan'];
                    ?>
                    <tr class="text-center">
                        <td>
                            <?php echo form_open('Kasir/Nota'.$value['id_penjualan'])?>
                            <a id="kirimfaktur" href="<?= base_url('Kasir/Nota/'.$value['no_faktur']) ?>"
                                target="_blank" type="button" class="btn btn-success btn-sm btn-flat"><i
                                    class="fas fa-print"></i>
                            </a>
                        </td>
                        <td>
                            <?= $no++ ?>
                        </td>
                        <td><?= $value['no_faktur'] ?></td>
                        <td><?= $value['nama_penjualan'] ?></td>
                        <td><?= $value['tipe_penjualan'] ?></td>
                        <td>
                            <?php if($value['kadar_penjualan'] == 24000){
                                    echo "24K";
                                    }else{
                                    echo $value['kadar_penjualan']." %" ;}?>
                        </td>
                        <td><?= $value['berat_penjualan']." gram" ?></td>
                        <td><?php 
                        $nominal = $value['harga_penjualan'];
                        $rp = "Rp ".number_format($nominal,0);
                        echo $rp?></td>
                        <td><?php 
                        $harga = $value['harga_penjualan'];
                        $berat = $value['berat_penjualan'];
                        $result = $harga/$berat/1000;
                        echo round($result)?></td>
                        <td>
                            <img src="<?= base_url('')?>/foto/<?= $value['foto'];?>"
                                onerror="if (this.src != 'error.jpg') this.src = '<?= base_url('')?>/foto/default.jpg';"
                                class="img-fluid mb-2" alt="Belum ada foto">
                        </td>
                    </tr>
                </tbody>
                <?php } ?>
                <tfoot>
                    <tr>
                        <td colspan="6" class="bg-gradient-gray"><b>Total</b></td>
                        <td>
                            <?php $gr = $hasil == null ? '' : array_sum($totalberat)." gram";
                            echo $gr ?>
                        </td>
                        <td>
                            <?php
                            $rp = $hasil == null ? '' : "Rp ".number_format(array_sum($totalharga),0);
                            echo $rp?>
                        </td>
                        <td><?php
                            $ttlrp = $hasil == null ? '' : array_sum($totalharga);
                            $ttlgr = $hasil == null ? '' : array_sum($totalberat);
                             if($ttlrp > 0 && $ttlgr > 0){
                            $rerata = $ttlrp/$ttlgr/1000;
                            echo round($rerata);
                            }?></td>
                        <td></td>
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