<!-- Kasir : Catat Jual -->
<div class="card card-success card-outline container">
    <div class="col-12">
        <div class="card-header text-center">
            <span><b>Transaksi Hari Ini</b></span>
        </div>
        <div class="card-body">
            <table class="table table-bordered text-center">
                <thead>
                    <th width="50px">Tanggal</th>
                    <th width="150px">Nama Barang</th>
                    <th width="150px">Tipe Barang</th>
                    <th width="100px">Kadar</th>
                    <th width="100px">Berat</th>
                    <th width="150px">Harga</th>
                    <!-- <th width="100px">Foto</th> -->
                </thead>
                <?php
                echo form_open_multipart('Kasir/Beli') ?>
                <tbody id="tb">
                    <tr class="text-center">
                        <td>
                            <input name="tanggal_beli[]" type="date" class="form-control"
                                placeholder="Tanggal Pembelian" required>
                        </td>
                        <td>
                            <input name="nama_beli[]" id="nama_beli" autocomplete="off" class="form-control"
                                placeholder="Nama Produk" required>
                        </td>
                        <td>
                            <select name="tipe_beli[]" id="tipe_beli" class="form-control " aria-label=".form-control">
                                <option selected disabled>Emas/Hancuran</option>
                                <option value ="99 %">99 %</option>
                                <option value="emas">Emas</option>
                                <option value="hancuran">Hancuran</option>
                            </select>
                        </td>
                        <td><input name="kadar_beli[]" type="decimal" class="form-control" placeholder="%" required></td>
                        <td><input name="berat_beli[]" class="form-control" autocomplete="off" placeholder="gram" required></td>
                        <td><input name="harga_beli[]" type="number" class="form-control" autocomplete="off"
                                placeholder="Rp." required></td>
                        <!-- <td><input type="file" name="foto_beli" id="foto_beli" class="form-control form-control-lg"
                                accept="image/*">
                        </td> -->
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
<?= view('/kasir/listbeliharian.php') ?>
<!-- End of List -->

<!-- List Transaksi Hari ini -->
<!-- </?= view('/kasir/listfaktur.php') ?> -->
<!-- End of List -->