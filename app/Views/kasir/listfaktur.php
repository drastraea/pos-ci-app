<div class="card card-success card-outline container">
    <div class="col-12">
        <div class="card-header text-center">
            <span><b>Transaksi Hari Ini</b></span>
        </div>
        <div class="card-body">
            <table class="table table-bordered text-center">
                <thead>
                    Tanggal : <?= date('d M Y') ?>
                    <th width="50px">Pilih</th>
                    <th width="75px">No.</th>
                    <th>Nama Barang</th>
                    <th width="150px">Kadar Emas</th>
                    <th width="150px">Berat</th>
                    <th width="200px">Harga</th>
                    <th width="150px">Foto</th>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                foreach ($hasil as $key => $value)
                {?>
                    <tr class="text-center">
                        <td>
                            <input type="checkbox" id="customCheckbox1" value="option1">
                        </td>
                        <td>
                            <?= $no++ ?>
                        </td>
                        <td><?= $value['nama_penjualan'] ?></td>
                        <td><?= $value['kadar_penjualan']." %" ?></td>
                        <td><?= $value['berat_penjualan']." gram" ?></td>
                        <td><?php 
                        $nominal = $value['harga_penjualan'];
                        $rp = "Rp ".number_format($nominal,0);
                        echo $rp?></td>
                        <td>
                            <img src="<?= base_url('')?>/foto/<?= $value['foto']; ?>" class="img-fluid mb-2"
                                alt="white sample">
                        </td>
                    </tr>
                </tbody>
                <?php } ?>
                <tfoot>
                    <tr>
                        <td colspan="12">
                            <?php echo form_open('Kasir/Nota'.$value['no_faktur'])?>
                            <a id="<?= $value['no_faktur'] ?>" type="button" class="btn btn-success btn-sm btn-flat"
                                href="<?= base_url('Kasir/Nota/'.$value['no_faktur']) ?>" target="_blank"><i
                                    class="fas fa-print"></i>
                            </a>
                        </td>
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
</script>