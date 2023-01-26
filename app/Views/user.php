<div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><?= $subjudul ?></h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#tambah-data"><i class="fas fa-plus"></i> Tambah Data
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
                <table class="table table-bordered">
                    <thead>
                    <tr class="text-center">
                        <th width="50px">No.</th>
                        <th>Nama User</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Level</th>
                        <th width="100px">Tindakan</th>
                    </tr>
                    </thead>
                    <tbody>
                <?php $no = 1;
                foreach ($user as $key => $value) { ?>
                    <tr class="text-center">
                        <td><?= $no++ ?></td>
                        <td><?= $value['nama_user'] ?></td>
                        <td><?= $value['email'] ?></td>
                        <td><?= $value['password']?></td>
                        <td><?php 
                        if ($value['level'] == 1) { ?>
                            <span class="badge bg-success">Admin</span>
                        <?php } else { ?>
                            <span class="badge bg-primary">Kasir</span>
                            <?php } ?>
                            </td>
                        <td>
                            <button class="btn btn-warning btn-sm btn-flat" data-toggle="modal" data-target="#edit-data<?= $value['id_user']?>"><i class="fas fa-pencil-alt"></i>
                            </button>
                            <button class="btn btn-danger btn-sm btn-flat" data-toggle="modal" data-target="#delete-data<?= $value['id_user']?>"><i class="fas fa-trash-alt"></i>
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
            <?php echo form_open('User/InsertData') ?>
            <!-- //Buka form -->
            <div class="modal-body">
<!-- FORM pembelian -->
  <div class="form-group">
  <label for="" class="text-center">Nama User</label>
    <input name="nama_user" class="form-control" placeholder="Nama" type="text" required>
        </div>
        <div class="form-group">
  <label for="" class="text-center">E-Mail</label>
    <input name="email" class="form-control" placeholder="E-Mail" type="text" required>
        </div>
        <div class="form-group">
  <label for="" class="text-center">Password</label>
    <input name="password" type="password" class="form-control" placeholder="Password" required>
        </div>
        <div class="form-group">
  <label for="" class="text-center">Level</label>
    <select name="level" class="form-control">
      <option value="1">Admin</option>
      <option value="2" selected>Kasir</option>
    </select>
    </div>
<!-- Akhir Form pembelian -->

    </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-warning btn-flat" data-dismiss="modal">Tutup</button>
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
<?php foreach ($user as $key => $value) { ?>
        <div class="modal fade" id="edit-data<?= $value['id_user']?>">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Edit Data <?= $subjudul ?></h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <!-- Buka Form User -->
                    <?php echo form_open('User/UpdateData/'.$value['id_user'])?>
                    <!-- //Buka form -->
                    <div class="modal-body">
<!-- FORM pembelian -->
<div class="form-group">
  <label for="" class="text-center">Nama User</label>
    <input name="nama_user" value="<?= $value['nama_user'] ?>" class="form-control" placeholder="Nama" type="text" required>
        </div>
        <div class="form-group">
  <label for="" class="text-center">E-Mail</label>
    <input name="email" value="<?= $value['email'] ?>" class="form-control" placeholder="E-Mail" type="text" required>
        </div>
        <div class="form-group">
  <label for="" class="text-center">Password</label>
    <input name="password" type="password" value="" class="form-control" placeholder="Password" required>
        </div>
        <div class="form-group">
  <label for="" class="text-center">Level</label>
    <select name="level" class="form-control">
      <option value="1">Admin</option>
      <option value="2" selected>Kasir</option>
    </select>
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
                <?php foreach ($user as $key => $value) { ?>
        <div class="modal fade" id="delete-data<?= $value['id_user']?>">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Hapus Data <?= $subjudul ?></h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                <h5>Yakin untuk hapus data <b><?= $value['nama_user']?></b> ?</h5>
                    </div>
                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Tutup</button>
                      <a href="<?= base_url('User/DeleteData/' . $value['id_user']) ?>" class="btn btn-danger btn-flat">Hapus</a>
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