  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1>Halaman Tambah Data Makanan</h1>
                  </div>
              </div>
          </div>
      </section>

      <div class="container-fluid">
          <div class="row justify-content-center">
              <div class="col-md-8 ">
                  <div class="card">
                      <div class="card card-primary">
                          <div class="card-header">
                              <h3 class="card-title">Form Tambah Data Makanan</h3>
                          </div>
                      </div>
                      <div class="card-body">
                          <form action="" method="POST" enctype="multipart/form-data" id="formTambah" >
                              <div class="form-group">
                                  <label for="nama">Nama Makanan</label>
                                  <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Makanan">
                              </div>
                              <div class="form-group">
                                  <label for="deskripsi">Deskripsi</label>
                                  <textarea name="deskripsi" class="form-control" id="deskripsi" placeholder="Deskripsi"></textarea>
                              </div>
                              <div class="form-group">
                                  <label for="bahan">Bahan</label>
                                  <textarea name="bahan" class="form-control" id="bahan" placeholder="Bahan"></textarea>
                              </div>
                              <div class="form-group">
                                  <label for="cara_membuat">Cara Membuat</label>
                                  <textarea name="cara_membuat" class="form-control" id="cara_membuat" placeholder="Cara Membuat"></textarea>
                              </div>
                              <div class="form-group">
                                  <label for="gambar">Gambar</label>
                                  <div class="custom-file">
                                      <input type="file" class="custom-file-input" name="gambar" id="gambar">
                                      <label for="gambar" class="custom-file-label">Choose File</label>
                                  </div>
                              </div>
                              <a href="<?= base_url('Makanan') ?>" class="btn btn-danger">Tutup</a>
                              <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Makanan</button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>