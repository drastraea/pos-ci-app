<div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title"><?= $subjudul ?></h3>
        </div>
        <!-- end of card header -->
        <div class="card-body">
            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>Bulan</label>
                        <select name="bulan" id="bulan" class="form-control">
                            <option>--Bulan--</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="col-sm-2">Tahun</label>
                        <div class="col-10 input-group">
                            <select name="tahun" id="tahun" class="form-control">
                                <option>--Tahun--</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                            </select>
                            <span class="input-group-append">
                                <button onclick="lihattabellaporan()" class="btn btn-primary" href="">
                                    <i class="fas fa-file-alt"></i> Lihat
                                </button>
                                <button onclick="PrintLaporan()" class="btn btn-success" href="">
                                    <i class="fas fa-print"></i> Print
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- end of input tanggal -->
                <div class="col-sm-12" style="float:none;margin:auto">
                    <hr>
                    <div class="Tabel">
                    </div>
                </div>
                <!-- end of table -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of card body -->
    </div>
</div>


<script>
    function lihattabellaporan() {
        let bulan = $('#bulan').val();
        let tahun = $('#tahun').val();
        if (bulan == "") {
            Swal.fire('Salah','Pilih bulannya dulu, kak!','error');
        } else if (tahun == "") {
            Swal.fire('Pilih Tahunnya dulu, kak!');
        } else {
            $.ajax({
                type: "POST",
                url: "<?= base_url('laporanbulanan/tabeljual') ?>",
                data: {
                    bulan: bulan,
                    tahun: tahun,
                },
                dataType: "JSON",
                success: function(response) {
                    if (response.data) {
                        $('.Tabel').html(response.data)
                    }
                }
            })
        }
    };

    function PrintLaporan() {
        let bulan = $('#bulan').val();
        let tahun = $('#tahun').val();
        if (bulan == "") {
            Swal.fire('Pilih bulannya dulu, kak!');
        } else if (tahun == "") {
            Swal.fire('Pilih Tahunnya dulu, kak!');
        } else {
            NewWin = window.open('<?= base_url('laporanbulanan/PrintLaporanBulanan') ?>/' + bulan + '/' + tahun, 'NewWin',
                'toolbar=no, width=1500, height=800, scrollbars=yes');
        }
    }
</script>