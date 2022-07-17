<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
      </div>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h1 class="h3 mb--4 ">Data Makanan Favorit</h1>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <td>No</td>
                    <td>Makanan</td>
                    <td>Nama Makanan</td>
                    <td>Aksi</td>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($favorit as $us) : ?>
                    <tr>
                      <td><?= $i; ?></td>
                      <td><img src="<?= base_url('assets/img/makanan/') . $us['gambar']; ?>" style="width: 100px;" class="img-thumbnail"></td>
                      <td><?= $us['nama']; ?></td>
                      <td>
                        <a href="<?= base_url('Profil/hapus/') . $us['id']; ?>" class="badge badge-danger">Hapus</a>
                      </td> 
                    </tr>
                    <?php $i++; ?>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>