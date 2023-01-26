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
                        <th width="100px">No. Faktur</th>
                        <th>Nama</th>
                        <th>Tipe</th>
                        <th>Kadar</th>
                        <th>Berat</th>
                        <th>Harga</th>
                        <th>Rata-rata</th>
                        <th width="50px">Foto</th>
                        <th width="150px">Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                foreach ($penjualan as $key => $value)
                {?>
                    <tr class="text-center">
                        <td><?= $no++ ?></td>
                        <!--<td></?= $value['tanggal_penjualan'] ?></td>-->
                        <td><?= $value['no_faktur'] ?></td>
                        <td><?= $value['nama_penjualan'] ?></td>
                        <td><?= $value['tipe_penjualan'] ?></td>
                        <td><?= $value['kadar_penjualan']." %" ?></td>
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
                            <!--<img src="</?= base_url('')?>/foto/<?= $value['foto'];?>" class="img-thumbnail"-->
                            <!--    onerror="if (this.src != 'error.jpg') this.src = '<?= base_url('')?>/foto/default.jpg';"-->
                            <!--    class="img-thumbnail" alt="Belum ada foto">-->
                            <a target="_blank" href="<?= base_url('')?>/foto/<?= $value['foto'];?>" onerror="if (this.src != 'error.jpg') this.src = '<?= base_url('')?>/foto/default.jpg';"
                             alt="Belum ada foto">Buka</a> 
                        </td>
                        <td>
                            <button class="btn btn-warning btn-sm btn-flat" data-toggle="modal"
                                data-target="#edit-data<?= $value['id_penjualan']?>"><i class="fas fa-pencil-alt"></i>
                            </button>
                            <button class="btn btn-danger btn-sm btn-flat" data-toggle="modal"
                                data-target="#delete-data<?= $value['id_penjualan']?>"><i class="fas fa-trash-alt"></i>
                            </button>
                            <a id="<?= $value['id_penjualan'] ?>" type="button" class="btn btn-success btn-sm btn-flat"
                                href="<?= base_url('Kasir/Nota/'.$value['no_faktur']) ?>" target="_blank"><i
                                    class="fas fa-print"></i>
                            </a>
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
            <!-- Buka Form Penjualan -->
            <?php echo form_open_multipart('Penjualan/Jual') ?>
            <!-- //Buka form -->
            <div class="modal-body">
                <!-- FORM PENJUALAN -->
                <div class="form-group">
                    <label for="" class="text-center">Data</label>
                    <h6><b>Invoice :</b>
                        <select name="invoice_jual" class="form-control">
                            <option><?= $no_faktur ?></option>
                            <?php
                                foreach ($penjualan as $key => $value)
                                {
                                ?>
                            <option><?= $value['no_faktur'] ?></option>
                            <?php } ?>
                        </select>
                    </h6>
                    <h6><b>Tanggal :</b><input name="tanggal_pjln" class="form-control" placeholder="Tanggal"
                            type="date" required></h6>
                    <h6><b>Nama :</b><input name="nama_pjln" class="form-control" placeholder="Nama" type="text"
                            required></h6>
                    <h6><b>Tipe :</b>
                            <select name="tipe_pjln[]" id="tipe_jual" class="form-control " aria-label=".form-control">
                                <option selected disabled>Pilih :</option>
                                <option value="Emas">75 %</option>
                                <option value="Murni">75 % +</option>
                            </select>
                    </h6>
                    <h6><b>Kadar :</b><input name="kadar_pjln" class="form-control" placeholder="Contoh : 75"
                            type="decimal" required></h6>
                    <h6><b>Berat :</b><input name="berat_pjln" class="form-control" placeholder="Contoh : 1.2"
                            type="decimal" required></h6>
                    <h6><b>Harga :</b>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rp.</span>
                            </div>
                            <input type="number" name="harga_pjln" id="harga" class="form-control"
                                placeholder="Contoh : 1000000">
                        </div>
                    </h6>
                    <h6><b>Foto :</b><input type="file" name="foto_jual" id="foto_jual"
                            class="form-control form-control-lg" accept="image/*"></h6>
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

<!-- Modal Edit Data -->
<?php foreach ($penjualan as $key => $value) { ?>
<div class="modal fade" id="edit-data<?= $value['id_penjualan']?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Data <?= $subjudul ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- Buka Form Penjualan -->
            <?php echo form_open_multipart('Penjualan/UpdateData/'.$value['id_penjualan'])?>
            <!-- //Buka form -->
            <div class="modal-body">
                <!-- FORM PENJUALAN -->

                <div class="form-group">
                    <input type="hidden" name="id_penjualan" value="<?= $value['id_penjualan']?>">
                    <label for="" class="text-center">Data</label>
                    <h6><b>Invoice :</b><input class="form-control" name="invoice_jual"
                            value="<?= $value['no_faktur']?>" readonly></h6>
                    <h6><b>Tanggal :</b><input name="tanggal_pjln" value="<?= $value['tanggal_penjualan']?>"
                            class="form-control" placeholder="Tanggal" type="date" required></h6>
                    <h6><b>Nama Barang :</b><input name="nama_pjln" value="<?= $value['nama_penjualan']?>"
                            class="form-control" placeholder="Nama" type="text" required></h6>
                     <h6><b>Tipe :</b>
                            <select name="tipe_pjln[]" id="tipe_jual" class="form-control " aria-label=".form-control">
                                <option selected disabled><?= $value['tipe_penjualan']?></option>
                                <option value="Emas">75 %</option>
                                <option value="Murni">75 % +</option>
                            </select>
                    </h6>
                    <h6><b>Kadar :</b><input name="kadar_pjln" value="<?= $value['kadar_penjualan']?>"
                            class="form-control" placeholder="Kadar" type="number" required></h6>
                    <h6><b>Berat :</b><input name="berat_pjln" value="<?= $value['berat_penjualan']?>"
                            class="form-control" placeholder="Berat" type="decimal" required></h6>
                    <h6><b>Harga :</b>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rp.</span>
                            </div>
                            <input value="<?= $value['harga_penjualan']?>" name="harga_pjln" class="form-control"
                                placeholder="Harga">
                        </div>
                    </h6>
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
<?php foreach ($penjualan as $key => $value) { ?>
<div class="modal fade" id="delete-data<?= $value['id_penjualan']?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Hapus Data <?= $subjudul ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5>Yakin untuk hapus data <b><?= $value['nama_penjualan']?></b> ?</h5>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Tutup</button>
                <a href="<?= base_url('Penjualan/DeleteData/' . $value['id_penjualan']) ?>"
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
        "serverSize": true,
        "deferRender": true,
        "responsive": true,
        "lengthChange": true,
        "autoWidth": true,
        // "buttons": ["excel", "pdf", "print"],
        "paging": true,
        "info": true,
        "ordering": false,
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
});

// Initialization
// new AutoNumeric('#harga', {
//     digitGroupSeparator: ',',
//     decimalCharacter: '.',
//     decimalCharacterAlternative: '.',
//     decimalPlaces: 0,
// });
</script>