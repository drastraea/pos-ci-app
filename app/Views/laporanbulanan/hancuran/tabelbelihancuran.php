<table class="table table-bordered table-striped">
    <thead>
        <tr class="text-center">
            <th width="65px">No</th>
            <th>Tanggal</th>
            <th width="100px">Berat Total</th>
            <th width="150px">Harga</th>
            <th width="150px">Rata-rata</th>
        </tr>
    </thead>
    <?php
    $no = 1;
    foreach ($databulanan as $key => $value) {
        $totalharga[] = $value['harga_pembelian'];
        $totalberat[] = $value['berat_pembelian']; ?>
        <tr>
            <td width="65px" class="text-center"><?= $no++ ?></td>
            <td><?= $value['tanggal_pembelian'] ?> </td>
            <!--<td width="100px" class="text-center"></?= $value['kadar_pembelian'] . " %" ?></td>-->
            <td width="150px" class="text-center"><?= $value['berat_pembelian'] . " gr" ?></td>
            <td width="150px" class="text-right">
                <?php
                $nominal = $value['harga_pembelian'];
                $rp = "Rp. " . number_format($nominal, 0);
                echo $rp ?>
            </td>
            <td width="100px" class="text-center">
                <?php
                $harga = $value['harga_pembelian'];
                $berat = $value['berat_pembelian'];
                $result = $harga / $berat / 1000;
                echo round($result) 
                ?>
            </td>
        </tr>
    <?php } ?>
    <tr>
        <td colspan="2" class="bg-gray text-center">
            <h5><strong>TOTAL</strong></h5>
        </td>
        <td class="bg-gray text-center"><?= $databulanan == null ? '' : array_sum($totalberat) . " gram"; ?></td>
        <td class="bg-gray text-right"><?= $databulanan == null ? '' : "Rp. " . number_format(array_sum($totalharga)); ?></td>
        <td class="bg-gray text-center">
            <?php
            $ttlrp = $databulanan == null ? '' : array_sum($totalharga);
            $ttlgr = $databulanan == null ? '' : array_sum($totalberat);
            $rerata = $databulanan == null ? '' : $ttlrp / $ttlgr / 1000;
            echo round($rerata)
            ?>
        </td>
    </tr>
</table>