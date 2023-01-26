<div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title"><?= $subjudul ?></h3>
        </div>
        <!-- end of card header -->
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tanggal :</label>
                        <div class="col-9 input-group">
                            <input type="date" name="tgl" id="tgl" class="form-control">
                            <span class="input-group-append">
                                <button onclick="lihattabellaporan()" class="btn btn-primary" href="">
                                    <i class="fas fa-file-alt"></i> Lihat
                                </button>
                                <button onclick="PrintLaporan()" class="btn btn-success">
                                    <i class="fas fa-print"></i> Print
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- end of input tanggal -->
                <div class="col-sm-10" style="float:none;margin:auto">
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
    let tgl = $('#tgl').val();
    if (tgl == "") {
        Swal.fire('Pilih tanggalnya dulu, kak!');
    } else {
        $.ajax({
            type: "POST",
            url: "<?= base_url('laporan/tabelbelihancuran') ?>",
            data: {
                tgl: tgl,
            },
            dataType: "JSON",
            success: function(response) {
                if (response.data) {
                    $('.Tabel').html(response.data)
                }
            }
        })
    }
}

function PrintLaporan() {
    let tgl = $('#tgl').val();
    if (tgl == "") {
        Swal.fire('Pilih tanggalnya dulu, kak!');
    } else {
        NewWin = window.open('<?= base_url('Laporan/PrintLaporanHancuranBeli') ?>/' + tgl, 'NewWin',
            'toolbar=no, width=1500, height=800, scrollbars=yes');
    }
}
</script>