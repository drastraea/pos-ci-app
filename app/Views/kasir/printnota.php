<table class="table table-bordered table-striped">
    <?php
    $count = 1;
    $no = 1;
    foreach ($data as $key => $value)
    {
        $count++;
    ?>
    <tr id=" print-data<?= $value['id_penjualan']?>" class="text-center">
        <td width="75px">
            <?= $no++ ?>
        </td>
        <td><?= $value['nama_penjualan'] ?></td>
        <td width="150px"><?= $value['kadar_penjualan']." %" ?></td>
        <td width="150px"><?= $value['berat_penjualan']." gram" ?></td>
        <td width="150px"><?php 
        $nominal = $value['harga_penjualan'];
        $rp = "Rp ".number_format($nominal,0);
        echo $rp?></td>
        <td width="150px">
        </td>
    </tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    
    <?php } ?>
</table>