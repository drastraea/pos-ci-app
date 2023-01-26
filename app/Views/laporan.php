<!-- DIRECT CHAT PRIMARY -->
<div class="card card-primary card-outline direct-chat direct-chat-primary">
    <div class="card-header">
        <h3 class="card-title">Mohon Maaf</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <!-- Conversations are loaded here -->
        <div class="direct-chat-messages">
            <!-- Message. Default to the left -->
            <div class="direct-chat-msg">
                <div class="direct-chat-infos clearfix">
                    <span class="direct-chat-name float-left">Suna</span>
                    <span class="direct-chat-timestamp float-right"><?= date('h:m d/m/Y')?></span>
                </div>
                <!-- /.direct-chat-infos -->
                <img class="direct-chat-img" src="<?= base_url('AdminLTE')?>/dist/img/user1-128x128.jpg"
                    alt="Message User Image">
                <!-- /.direct-chat-img -->
                <div class="direct-chat-text">
                    Laporan harian kini bisa dicek di menu Laporan, lho!
                </div>
                <!-- /.direct-chat-text -->
            </div>
            <!-- /.direct-chat-msg -->

            <!-- Message to the right -->
            <div class="direct-chat-msg right">
                <div class="direct-chat-infos clearfix">
                    <span class="direct-chat-name float-right">Ana</span>
                    <span class="direct-chat-timestamp float-left"><?= date('h:m d/m/Y')?></span>
                </div>
                <!-- /.direct-chat-infos -->
                <img class="direct-chat-img" src="<?= base_url('AdminLTE')?>/dist/img/user3-128x128.jpg"
                    alt="Message User Image">
                <!-- /.direct-chat-img -->
                <div class="direct-chat-text">
                    Oh iya, Laporan Penjualan Harian bisa <a href="<?= base_url('laporan/laporanharianjual')?>" class="small-box-footer text-warning">Klik di sini!</a>
                </div>
                <!-- /.direct-chat-text -->
            </div>
            <!-- /.direct-chat-msg -->
            
            <!-- Message. Default to the left -->
            <div class="direct-chat-msg">
                <div class="direct-chat-infos clearfix">
                    <span class="direct-chat-name float-left">Suna</span>
                    <span class="direct-chat-timestamp float-right"><?= date('h:m d/m/Y')?></span>
                </div>
                <!-- /.direct-chat-infos -->
                <img class="direct-chat-img" src="<?= base_url('AdminLTE')?>/dist/img/user1-128x128.jpg"
                    alt="Message User Image">
                <!-- /.direct-chat-img -->
                <div class="direct-chat-text">
                    Dan Laporan Pembelian Harian bisa <a href="<?= base_url('laporan/laporanharianbeli')?>" class="small-box-footer text-success">Klik di sini!</a>
                </div>
                <!-- /.direct-chat-text -->
            </div>
            <!-- /.direct-chat-msg -->
        </div>
        <!--/.direct-chat-messages-->
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <form action="#" method="post">
            <div class="input-group">
                <input type="text" name="message" placeholder="Ditunggu yaaa!" class="form-control" disabled>
                <span class="input-group-append">
                    <a class="btn btn-primary">Ok</a>
                </span>
            </div>
        </form>
    </div>
    <!-- /.card-footer-->
</div>
<!--/.direct-chat -->
</div>
<!-- /.col -->