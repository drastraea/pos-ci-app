<?php 
    $no = 1;
    foreach ($stok as $key => $value)
    {
        $totalberat[] = $value['berat'];?>
<tr id="example1">
    <th class="text-center" width="50px"><?= $no++ ?></th>
    <th class="text-center" width="100px"><?= $value['tanggal'] ?></th>
    <th class="text-center" width="200px"><?= $value['piring'] ?></th>
    <!-- <th></?= $value['foto'] ?></th> -->
    <th class="text-center" width="100px"><?= $value['berat'] ?></th>
    <th class="text-center" width="100px"><?= $value['masuk'] ?></th>
    <th class="text-center" width="100px"><?= $value['keluar'] ?></th>
    <th class="text-center" width="100px">
        <button type="button" class="btn text-warning btn-sm btn-flat" data-toggle="modal"
            data-target="#edit-data<?= $value['id']?>"><i class="fas fa-edit"></i>
        </button>
        <button type="button" class="btn text-danger" data-toggle="modal"
            data-target="#delete-data<?= $value['id']?>"><i class="fas fa-trash-alt"></i>
        </button>
    </th>
</tr>
<?php } ?>

<!--<tfoot>-->
<!--    <tr>-->
<!--        <td colspan="2" class="text-center bg-gray">-->
<!--            <h4>Total Berat</h4>-->
<!--        </td>-->
<!--        <td class="text-center"><b>-->
<!--                </?php -->
<!--                    if($totalberat > 0){-->
<!--                    $berat = number_format((float)array_sum($totalberat), 2)." Gram";-->
<!--                    echo $berat;-->
<!--                    } ?></b>-->
<!--        </td>-->
<!--        <td><i>-->
<!--                </?php-->
<!--                        if ($berat > 0) {-->
<!--                            $bulat = array_sum($totalberat)/1000 ;-->
<!--                            $kg = number_format((float)$bulat, 4)." Kg";-->
<!--                            echo $kg;-->
<!--                        }?></i>-->
<!--        </td>-->
<!--    </tr>-->
<!--</tfoot>-->

<!-- Modal Edit Data -->
<?php foreach ($stok as $key => $value) { ?>
<div class="modal fade" id="edit-data<?= $value['id']?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Data <?= $subjudul ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- Buka Form Penjualan -->
            <?php echo form_open_multipart('Admin/UpdateStok/'.$value['id'])?>
            <!-- //Buka form -->
            <div class="modal-body">
                <!-- FORM PENJUALAN -->

                <div class="form-group">
                    <input type="hidden" name="id" value="<?= $value['id']?>">
                    <label for="" class="text-center">Data</label>
                    <h6><b>Tanggal :</b><input name="tanggal" value="<?= $value['tanggal']?>" class="form-control"
                            placeholder="Tanggal" type="date" required></h6>
                    <h6><b>Barang :</b><input name="piring" value="<?= $value['piring']?>" class="form-control"
                            placeholder="Nama" type="text" required></h6>
                    <h6><b>Berat :</b><input name="berat" value="<?= $value['berat']?>" class="form-control"
                            placeholder="Berat" type="decimal" required></h6>
                    <h6><b>Masuk :</b><input name="masuk" value="<?= $value['masuk']?>" class="form-control" type="decimal"></h6>
                    <h6><b>Keluar :</b><input name="keluar" value="<?= $value['keluar']?>" class="form-control" type="decimal"></h6>
                </div>

                <!-- Akhir Form Penjualan -->
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-warning btn-flat">Simpan</button>
            </div>
            <!-- tutup form -->
            <?php echo form_close() ?>
            <!-- //tutup form -->
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<?php } ?>
<!-- Modal AKHIR Edit Data -->

<!-- Modal Hapus Data -->
<?php foreach ($stok as $key => $value) { ?>
<div class="modal fade" id="delete-data<?= $value['id']?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Hapus Data <?= $subjudul ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5>Yakin untuk hapus data <b><?= $value['piring']?></b> ?</h5>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Tutup</button>
                <a href="<?= base_url('admin/DeleteStok/' . $value['id']) ?>"
                    class="btn btn-danger btn-flat">Hapus</a>
            </div>
            <!-- tutup form -->
            <?php echo form_close() ?>
            <!-- //tutup form -->
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<?php } ?>

<script>
    // Table Script
$(function() {
    $("#example1").DataTable({
        "responsive": true,
        "lengthChange": true,
        "autoWidth": false,
        "buttons": ["pdf", "print", ],
        "paging": true,
        "info": true,
        "ordering": false
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });
});
</script>