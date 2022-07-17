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
              <h1 class="h3 mb--4 ">Data Makanan</h1>
              <div class="col-md-6"><a href="<?= base_url() ?>Makanan/tambah" class="btn btn-info mb-2">Tambah Makanan</a></div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <td>No</td>
                    <td>Makanan</td>
                    <td>Nama Makanan</td>
                    <td>Deskripsi</td>
                    <td>Aksi</td>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($makanan as $us) : ?>
                    <tr>
                      <td><?= $i; ?></td>
                      <td><img src="<?= base_url('assets/img/makanan/') . $us['gambar']; ?>" style="width: 250px;" class="img-thumbnail"></td>
                      <td><?= $us['nama']; ?></td>
                      <td><?= $us['deskripsi']; ?></td>
                      <td>
                        <a href="<?= base_url('Makanan/edit/') . $us['id']; ?>" class="badge badge-info">Edit</a>
                        <a href="<?= base_url('Makanan/hapus/') . $us['id']; ?>" class="badge badge-danger">Hapus</a>
                      </td>
                    </tr>
                    <?php $i++; ?>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>