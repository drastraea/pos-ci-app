<div class="col-sm-10" style="float:none;margin:auto">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title"><?= $subjudul ?></h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#tambah-data"><i
                        class="fas fa-plus"></i> Tambah Data
                </button>
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <?php 
                if (session()->getFlashdata('pesan'))
                {
                    echo '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h6><i class="icon fas fa-check"></i>';
                    echo session()->getFlashdata('pesan');
                    echo '</h6></div>';
                }
                ?>
            <div class="col-sm-12">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr class="text-center">
                            <th width="50px">No.</th>
                            <th width="100px">Tanggal</th>
                            <th width="200px">Piring</th>
                            <!-- <th>Foto</th> -->
                            <th width="100px">Berat</th>
                            <th width="100px">Masuk</th>
                            <th width="100px">Keluar</th>
                            <th width="100px">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php echo view('stok/viewstok.php')?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.col -->

<!-- Modal Tambah Data -->
<div class="modal fade" id="tambah-data">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data <?= $subjudul ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- Buka Form Stok -->
            <?php echo form_open_multipart('Admin/StokHarian') ?>
            <!-- //Buka form -->
            <div class="modal-body">
                <div class="form-group">
                    <label for="" class="text-center">Data Berat Barang per Piring</label>
                    <h6><b>Tanggal :</b><input name="tanggal" class="form-control" placeholder="Tanggal" type="date"
                            required></h6>
                    <h6><b>Piring :</b><input name="piring" class="form-control" value="Piring " placeholder="Piring"
                            type="text" required>
                    </h6>
                    <h6><b>Berat :</b><input name="berat" class="form-control" placeholder="Contoh : 1.2" type="decimal"
                            required></h6>
                    <h6><b>Masuk :</b><input name="masuk" class="form-control" placeholder="Contoh : 1.2" type="decimal"></h6>
                    <h6><b>Keluar :</b><input name="keluar" class="form-control" placeholder="Contoh : 1.2" type="decimal"></h6>
                    <!-- <h6><b>Foto :</b><input type="file" name="foto" id="foto" class="form-control form-control-lg"
                            accept="image/*, null"></h6> -->
                </div>

                <!-- Akhir Form Penjualan -->
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary btn-flat">Simpan</button>
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

<script>
document.getElementById("date").addEventListener("input", function() {
    document.querySelectorAll("#dates").forEach((e) => e.value = this.value);
});

$(document).ready(function() {
    $('#example').dataTable({
        "scrollY": 200,
        "scrollX": true
    });
});

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