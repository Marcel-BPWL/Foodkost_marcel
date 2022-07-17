<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
      </div>
    </div>
  </section>

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Daftar Makanan</h1>
    <div class="row">
        <div class="col-md-12">
            <?= $this->session->flashdata('message');
            ?>
        </div>
        <?php $i = 1; ?>
        <?php foreach ($makanan as $us) : ?>
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-8">
                                <h5>Nama Makanan : </h5>
                                <div class="tetxt-xs font-weight-bold text-gray-800"><?= $us['nama'] ?></div>
                                <a href="<?= base_url('Profil/favorit/') . $us['id'] ?>" class="btn btn-info">Detail</a>
                            </div>
                            <div class="col-auto">
                                <img src="<?= base_url('assets/img/makanan/') . $us['gambar']; ?>" style="width:150px" class="img-thumbnail">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>
</div>