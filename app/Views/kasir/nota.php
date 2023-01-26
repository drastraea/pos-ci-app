<div class="card card-outline container">
    <div class="col-12">
        <div class="card-header text-center">
            <div>
            <b style="float:right">NOTA KONTAN</b>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered text-center z-2">
                <thead  class="outlined">
                    <!--Tanggal : </?= date('d M Y') ?>-->
                    <th width="75px" class="outlined">No.</th>
                    <th class="outlined">Nama Barang</th>
                    <th width="150px" class="outlined">Kadar</th>
                    <th width="150px" class="outlined">Berat</th>
                    <th width="150px" class="outlined">Harga</th>
                    <th width="150px" class="outlined">Ongkos</th>
                </thead>
                <tbody  class="outlined">
                    <img class="logowm" src="<?= base_url('logo.png')?>"></img> 
                    <img class="logowm2" src="<?= base_url('logo.png')?>"></img>
                    <img class="logowm3" src="<?= base_url('logo.png')?>"></img>
                    <img class="logowm4" src="<?= base_url('logo.png')?>"></img>
                    <?php
                    $no = 1;
                    foreach ($data as $key => $value)
                    {
                        $total[] = $value['harga_penjualan'];
                    ?>
                    <tr id="print-data<?= $value['id_penjualan']?>" class="text-center">
                        <td width="75px" class="outlined"><?=  $no++ ?></td>
                        <td><?= $value['nama_penjualan'] ?></td>
                        <td width="150px" class="outlined"><?= $value['kadar_penjualan']." %" ?></td>
                        <td width="150px" class="outlined"><?= $value['berat_penjualan']." gram" ?></td>
                        <td width="150px" class="outlined"><?php 
                            $nominal = $value['harga_penjualan'];
                            $rp = "Rp ".number_format($nominal,0);
                            echo $rp?></td>
                        <td width="150px" class="outlined">
                        </td>
                    </tr>
                    <?php } ?>
                    <?php
                    for($no; $no<=5;){
                        ?>
                    <tr class="text-center">
                        <td width="75px">
                            <?= $no++ ?>
                        </td>
                        <td></td>
                        <td width="150px"></td>
                        <td width="150px"></td>
                        <td width="150px"></td>
                        <td width="150px"></td>
                    </tr>
                    <?php } ?>
                </tbody>
                <tfoot>
                        <?php 
                        {
                        $rp = "Rp ".number_format(array_sum($total),0);
                        $tex = array_sum($total);
                        //$terbilang = terbilang($texx);
                        ?>
                        <td colspan="6" class="text-left" >
                        <b>Terbilang : <?php echo ucwords(terbilang($tex))." Rupiah" ?></b>
                        </td>
                        <?php } ?>
                </tfoot>
            </table>
        </div>
    </div>
</div>

<div style="margin-left: 3%;" class=" row col-12 shadow-none container">
    <div class="col-md-8">
        <div class="color-palette-set">
            <div class="pudar color-palette">
                <h4>Perhatian :</h4>
                <table class="text-sm noborder">
                    <td class="noborder">
                        <li>Barang yang sudah dibeli tidak dapat ditukar/dikembalikan kecuali ada perjanjian lebih
                            dahulu
                        </li>
                        <li>Harga emas polish 700/750 harga bervariasi kalau barang dijual kembali kami potong
                            sesuai harga
                            nota
                            per gr jika tidak rusak/putus</li>
                        <li>Permata Berlian atau batu jika ada cacat/pecah dijual lain harga/ada potongan</li>
                        <li><b>Barang pesanan jika dijual kembali harga lebih.</b></li>
                        <li><b>Jika jual emas barang rusak lain harga</b></li>
                        <li>Emas 750 putih, pesanan dikenakan ongkos. Kalau dijual ongkos hilang</li>
                    </td>
                    <td class="noborder">
                        <li><b>Barang pesanan tidak diambil selama 2 bulan persekot hilang</b></li>
                        <li>Timbangan sudah disaksikan pembeli serta barang yang dijual telah diperiksa pembeli</li>
                        <li>Warna emas bisa berubah jika terkena air raksa/asin, kemudian dapat dibersihkan kembali
                            di
                            setiap
                            toko emas</li>
                        <li>Toko kami tidak menerima barang-barang emas yang tidak ada kwitansi penjualan</li>
                        <li>Barangsiapa merubah tulisan bon ini dianggap tidak berlaku lagi</li>
                    </td>
                </table>
            </div>
        </div>
    </div>
    <!-- /.col -->
    <div class="col-3">
        <div class="table-responsive">
            <table class="table table-bordered">
                <th width="50px">TOTAL</th>
                <td><b><?php 
                    {
                        $rp = "Rp ".number_format(array_sum($total),0);
                        echo $rp?></b></td>
                </tr>
                <?php } ?>
            </table>
            <br />
            <span style="margin:auto; display:table">Balikpapan, <?= date('d/m/Y')?></span>
            <br />
            <br />
            <br />
            <strong style="margin:auto; display:table">Hormat Kami</strong>
        </div>
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
</section>
<!-- /.content -->
</div>
<!-- ./wrapper -->
<!-- Page specific script -->
<script>
window.addEventListener(" load", window.print());

var qrcode = new QRCode(document.getElementById("qrcode"), {
            text: "<?= base_url('Kasir/Nota/')."/".$value['no_faktur']?>" ,
        	width: 185,
        	height: 185,
        	colorDark : "#000000",
        	colorLight : "#ffffff",
        	correctLevel : QRCode.CorrectLevel.H
        });
</script>