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
                                <form action="" method="POST">
                                    <input type="hidden" name="id" value="<?= $makanan['id']; ?>">
                                    <div class="form-group">
                                        <label for="nama">Nama makanan</label>
                                        <input type="text" name="nama" type="text" value="<?= $makanan['nama']; ?>" readonly class="form-control" id="nama">

                                    </div>
                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea rows="3" name="deskripsi" value="" type="text" readonly class="form-control" id="deskripsi"><?= $makanan['deskripsi']; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="bahan">Bahan</label>
                                        <textarea rows="5" name="bahan" value="" type="text" readonly class="form-control" id="bahan"><?= $makanan['bahan']; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="cara_membuat">Cara Membuat</label>
                                        <textarea rows="5" name="cara_membuat" value="" type="text" readonly class="form-control" id="cara_membuat"><?= $makanan['cara_membuat']; ?></textarea>
                                    </div>
                                    <button type="submit" id="tambah" name="tambah" class="btn btn-primary float-right">Tambah Ke Favorit</button>
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