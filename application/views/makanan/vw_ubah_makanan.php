  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1>Detail Makanan</h1>
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
                                  <img src="<?= base_url('assets/img/makanan/') . $makanan['gambar']; ?>" style="width:400px" class="img-thumbnail">
                              </div>
                              <div class="col mr-2">
                                  <div class="card-body">
                                      <form action="" method="POST" enctype="multipart/form-data">
                                          <input type="hidden" name="id" value="<?= $makanan['id']; ?>">
                                          <div class="form-group">
                                              <label for="nama">Nama Makanan</label>
                                              <input type="text" name="nama" value="<?= $makanan['nama']; ?>" class="form-control" id="nama" placeholder="Nama Makanan">
                                              <?= form_error('nama', '<small class="text-danger p1-3">', '</small>'); ?>
                                          </div>
                                          <div class="form-group">
                                              <label for="deskripsi">Deskripsi</label>
                                              <textarea rows="3" name="deskripsi" class="form-control" id="deskripsi" placeholder="Deskripsi"><?= $makanan['deskripsi']; ?></textarea>
                                              <?= form_error('deskripsi', '<small class="text-danger p1-3">', '</small>'); ?>
                                          </div>
                                          <div class="form-group">
                                              <label for="bahan">Bahan</label>
                                              <textarea rows="5" name="bahan" class="form-control" id="bahan" placeholder="Bahan"><?= $makanan['bahan']; ?></textarea>
                                              <?= form_error('bahan', '<small class="text-danger p1-3">', '</small>'); ?>
                                          </div>
                                          <div class="form-group">
                                              <label for="cara_membuat">Cara Membuat</label>
                                              <textarea rows="5" name="cara_membuat" class="form-control" id="cara_membuat" placeholder="Cara Membuat"><?= $makanan['cara_membuat']; ?> </textarea>
                                              <?= form_error('cara_membuat', '<small class="text-danger p1-3">', '</small>'); ?>
                                          </div>
                                          <div class="custom-file">
                                              <input type="file" style="width:1px" class="custom-file-input" name="gambar" id="gambar">
                                              <label for="gambar" style="width:400px" class="custom-file-label">Choose File</label>
                                              <?= form_error('gambar', '<small class="text-danger p1-3">', '</small>'); ?>
                                          </div>
                                          <button type="submit" id="tambah" name="tambah" class="btn btn-primary float-right">Ubah Makanan</button>
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