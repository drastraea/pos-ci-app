<table class="table table-bordered table-striped">
    <thead>
        <tr class="text-center">
            <th width="65px">No</th>
            <th>Piring</th>
            <th width="100px">Berat</th>
            <th width="150px">Stok Masuk</th>
            <th width="150px">Stok Keluar</th>
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
    <tr>
        <td width="65px" class="text-center"><?= $no++ ?></td>
        <td class="text-center"><?= $value['piring'] ?> </td>
        <td width="150px" class="text-center"><?= $value['berat'] ?></td>
        <td class="text-right"><?= $value['masuk'] ?> </td>
        <td class="text-right"><?= $value['keluar'] ?> </td>
    </tr>
    <?php } ?>
    <tr>
        <td colspan="2" class="bg-gradient-gray text-center">
            <h5><strong>TOTAL AKHIR</strong></h5>
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