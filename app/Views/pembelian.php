<div class="col-md-12">
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
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr class="text-center">
                        <th width="50px">No.</th>
                        <th width="100px">Tanggal</th>
                        <th>Nama</th>
                        <th>Kadar</th>
                        <th>Berat</th>
                        <th>Harga</th>
                        <th>Rata-rata</th>
                        <th width="100px">Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                foreach ($pembelian as $key => $value)
                {?>
                    <tr class="text-center">
                        <td><?= $no++ ?></td>
                        <td><?= $value['tanggal_pembelian'] ?></td>
                        <td><?= $value['nama_pembelian'] ?></td>
                        <td><?= $value['kadar_pembelian']." %" ?></td>
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
                        <td>
                            <button class="btn btn-warning btn-sm btn-flat" data-toggle="modal"
                                data-target="#edit-data<?= $value['id_pembelian']?>"><i class="fas fa-pencil-alt"></i>
                            </button>
                            <button class="btn btn-danger btn-sm btn-flat" data-toggle="modal"
                                data-target="#delete-data<?= $value['id_pembelian']?>"><i class="fas fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>


                    <?php  }?>
                </tbody>
            </table>
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
            <!-- Buka Form pembelian -->
            <?php echo form_open('pembelian/Beli') ?>
            <!-- //Buka form -->
            <div class="modal-body">
                <!-- FORM pembelian -->
                <div class="form-group">
                    <label for="" class="text-center">Data</label>
                    <h6><b>Tanggal :</b><input name="tanggal_pbln" class="form-control" placeholder="Tanggal"
                            type="date" required></h6>
                    <h6><b>Nama :</b><input name="nama_pbln" class="form-control" placeholder="Nama" type="text"
                            required></h6>
                    <h6><b>Kadar :</b><input name="kadar_pbln" class="form-control" placeholder="Contoh : 75"
                            type="decimal" required></h6>
                    <h6><b>Berat :</b><input name="berat_pbln" class="form-control" placeholder="Contoh : 1.3"
                            type="decimal" required></h6>
                    <h6><b>Harga :</b>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rp.</span>
                            </div>
                            <input type="number" name="harga_pbln" class="form-control" placeholder="Contoh : 1000000">
                        </div>
                    </h6>
                </div>

                <!-- Akhir Form pembelian -->
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

<!-- Modal Edit Data -->
<?php foreach ($pembelian as $key => $value) { ?>
<div class="modal fade" id="edit-data<?= $value['id_pembelian']?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Data <?= $subjudul ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- Buka Form pembelian -->
            <?php echo form_open('pembelian/UpdateData/'.$value['id_pembelian'])?>
            <!-- //Buka form -->
            <div class="modal-body">
                <!-- FORM pembelian -->

                <div class="form-group">
                    <input type="hidden" name="id_pembelian" value="<?= $value['id_pembelian']?>">
                    <label for="" class="text-center">Data</label>
                    <h6><b>Tanggal :</b><input name="tanggal_pbln" value="<?= $value['tanggal_pembelian']?>"
                            class="form-control" placeholder="Tanggal" type="date" required></h6>
                    <h6><b>Nama Barang :</b><input name="nama_pbln" value="<?= $value['nama_pembelian']?>"
                            class="form-control" placeholder="Nama" type="text" required></h6>
                    <h6><b>Kadar :</b><input name="kadar_pbln" value="<?= $value['kadar_pembelian']?>"
                            class="form-control" placeholder="Kadar" type="decimal" required></h6>
                    <h6><b>Berat :</b><input name="berat_pbln" value="<?= $value['berat_pembelian']?>"
                            class="form-control" placeholder="Berat" type="decimal" required></h6>
                    <h6><b>Harga :</b>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rp.</span>
                            </div>
                            <input type="number" value="<?= $value['harga_pembelian']?>" name="harga_pbln"
                                class="form-control" placeholder="Contoh : 1000000">
                        </div>
                    </h6>
                </div>

                <!-- Akhir Form pembelian -->
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
<?php foreach ($pembelian as $key => $value) { ?>
<div class="modal fade" id="delete-data<?= $value['id_pembelian']?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Hapus Data <?= $subjudul ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5>Yakin untuk hapus data <b><?= $value['nama_pembelian']?></b> ?</h5>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Tutup</button>
                <a href="<?= base_url('pembelian/DeleteData/' . $value['id_pembelian']) ?>"
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

<!-- Script DataTables -->
<script>
$(function() {
    $("#example1").DataTable({
        "responsive": true,
        "lengthChange": true,
        "autoWidth": false,
        "buttons": ["excel", "pdf", "print", ],
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