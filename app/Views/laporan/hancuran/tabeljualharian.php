<table class="table table-bordered table-striped">
    <thead>
        <tr class="text-center">
            <th width="65px">No</th>
            <th>Nama</th>
            <th width="100px">Kadar</th>
            <th width="150px">Berat</th>
            <th width="150px">Harga</th>
            <th width="100px">Rata-rata</th>
        </tr>
    </thead>
    <?php
    $no = 1;
    foreach($dataharian as $key => $value)
    {
    $totalharga[] = $value['harga_penjualan'];
    $totalberat[] = $value['berat_penjualan'];?>
    <tr>
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
        <td colspan="3" class="bg-gradient-gray text-center">
            <h5><strong>TOTAL</strong></h5>
        </td>
        <td class="text-center"><?= $dataharian == null ? '' : array_sum($totalberat)." gram"; ?></td>
        <td class="text-right"><?= $dataharian == null ? '' : "Rp. ".number_format(array_sum($totalharga)); ?></td>
        <td class="text-center">
            <?php
            $ttlrp = $dataharian == null ? '' : array_sum($totalharga);
            $ttlgr = $dataharian == null ? '' : array_sum($totalberat);
            $rerata = $dataharian == null ? '' : $ttlrp/$ttlgr/1000;
            echo round($rerata)
            ?>
        </td>
    </tr>
</table>