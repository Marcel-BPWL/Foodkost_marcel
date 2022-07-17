  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1>Edit Profil</h1>
                  </div>
              </div>
          </div>
      </section>

      <!-- Begin Page Content -->
      <div class="container-fluid">
          <div class="row">
              <div class="col-xl-12 col-md-12 mb-6">
                  <div class="card border-left-primary shadow h-100 py-2">
                      <div class="card-body">
                          <div class="row no-gutters align-items-center">
                              <div class="col-auto">
                                  <img src="<?= base_url('assets/img/profile/') . $user['gambar']; ?>" style="width:400px" class="img-thumbnail">
                              </div>
                              <div class="col mr-2">
                                  <div class="card-body">
                                      <form action="" method="POST">
                                          <input type="hidden" name="id" value="<?= $user['id']; ?>">
                                          <div class="form-group">
                                              <label for="nama">Nama</label>
                                              <input type="text" name="nama" value="<?= $user['nama']; ?>" class="form-control" placeholder="Full name">
                                          </div>
                                          <div class="form-group">
                                              <label for="deskripsi">Email</label>
                                              <input type="text" name="email" value="<?= $user['email']; ?>" class="form-control" readonly class="form-control" placeholder="Full name">
                                          </div>
                                          <div class="form-group">
                                              <label for="bahan">Password</label>
                                              <input type="password" name="password1" value="<?= set_value('password1'); ?>" class="form-control" id="password1" placeholder="Password">
                                              <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                          </div>
                                          <div class="form-group">
                                              <label for="bahan">Password</label>
                                              <input type="password" name="password2" value="<?= set_value('password2'); ?>" class="form-control" id="password2" placeholder="Retype password">
                                              <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                                          </div>
                                          <div>
                                              <label for="gambar">Gambar</label>
                                          </div>
                                          <div class="custom-file">
                                              <input type="file" style="width:1px" class="custom-file-input" name="gambar" id="gambar">
                                              <label for="gambar" style="width:400px" class="custom-file-label"><?= $user['gambar']; ?></label>
                                              <?= form_error('gambar', '<small class="text-danger p1-3">', '</small>'); ?>
                                          </div>
                                          <div class="form-group">
                                              <label for="role">Role</label>
                                              <input type="text" name="role" type="text" value="<?= $user['role']; ?>" readonly class="form-control" id="role">
                                          </div>
                                          <div class="form-group">
                                              <label for="date_created">Anggota Sejak : </label>
                                              <input type="text" name="date_created" type="text" value="<?= date('d F Y', $user['date_created']); ?>" readonly class="form-control" id="date_created">
                                          </div>
                                          <button type="submit" id="tambah" name="tambah" class="btn btn-primary float-right">Ubah Profil</button>
                                      </form>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>