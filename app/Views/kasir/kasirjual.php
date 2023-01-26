<!-- Kasir : Catat Jual -->
<div class="card card-success card-outline container">
    <div class="col-12">
        <div class="card-header text-center">
            <span><b>Transaksi Hari Ini</b></span>
        </div>
        <div class="card-body">
            <table class="table table-bordered text-center">
                <span class="text-center">Kolom faktur : Pilih yang paling atas untuk nomor faktur baru.</span>
                <thead>
                    <th width="170px">Nomor Faktur</th>
                    <th width="50px">Tanggal</th>
                    <th width="150px">Nama Barang</th>
                    <th width="150px">Tipe</th>
                    <th width="100px">Kadar</th>
                    <th width="100px">Berat</th>
                    <th width="200px">Harga</th>
                    <th width="200px">Foto</th>
                </thead>
                <?php
                echo form_open_multipart('Kasir/Jual') ?>
                <tbody id="tb">
                    <tr class="text-center">
                        <td>
                            <select class="form-control" name="invoice_jual">
                                <option><?= $no_faktur ?></option>
                                <?php
                                foreach ($hasil as $key => $value)
                                {
                                ?>
                                <option><?= $value['no_faktur'] ?></option>
                                <?php } ?>
                            </select>
                        </td>
                        <td>
                            <input name="tanggal_jual[]" type="date" class="form-control"
                                placeholder="Tanggal Penjualan" required>
                        </td>
                        <td>
                            <input name="nama_jual[]" id="nama_penjualan" autocomplete="off" class="form-control"
                                placeholder="Nama Produk" required>
                        </td>
                        <td>
                            <select name="tipe_jual[]" id="tipe_jual" class="form-control " aria-label=".form-control">
                                <option selected disabled>Pilih :</option>
                                <option value="Emas">75 %</option>
                                <option value="Murni">75 % ++</option>
                            </select>
                        </td>
                        <td><input name="kadar_jual[]" type="number" class="form-control" placeholder="%" required></td>
                        <td><input name="berat_jual[]" class="form-control" autocomplete="off" placeholder="gram" required></td>
                        <td><input name="harga_jual[]" type="number" class="form-control" autocomplete="off"
                                placeholder="Rp." required></td>
                        <td><input type="file" name="foto_jual" id="foto_jual" class="form-control form-control-lg"
                                accept="image/*">
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="12">
                            <button type="submit" name="save" id="save" value="save" class="btn btn-primary"><i
                                    class="fa fa-fw fa-save"></i> Simpan</button>
                        </td>
                    </tr>
                </tfoot>
                <?php echo form_close() ?>
            </table>
        </div>
    </div>
</div>

<!-- List Transaksi Hari ini -->
<?= view('/kasir/listjualharian.php') ?>
<!-- End of List -->

<!-- List Transaksi Hari ini -->
<!-- </?= view('/kasir/listfaktur.php') ?> -->
<!-- End of List -->