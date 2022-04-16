<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-2 text-gray-800">Tabel Data SPP</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

  <hr>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">

    <div class="card-header py-3">
      <a href="?p=tmb-spp" style="text-decoration:none;" class="btn btn-primary">Tambah Data SPP [+]</a>
    </div>
    <div class="card-body">

      <div class="table-responsive">

        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th width="5%">No.</th>
              <th>ID SPP</th>
              <th>Tahun</th>
              <th>Nominal</th>
              <th width="20%">Aksi</th>
            </tr>
          </thead>
          <?php
          $spp = $admin->getAllSpp();
          if (empty($spp)) : ?>
            <tr>
              <td colspan="7" class="text-center">Data spp tidak ditemukan</td>
            </tr>
          <?php endif; ?>

          <?php $i = 1; ?>
          <?php foreach ($spp as $spp) : ?>
            <tr>
              <td><?= $i ?></td>
              <td><?= $spp['id_spp']; ?></td>
              <td><?= $spp['tahun']; ?></td>
              <td><?= $spp['nominal']; ?></td>
              <td>
                <a href="?p=hps-spp&id_spp=<?= $spp['id_spp']; ?>" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini?');" class="btn btn-danger">hapus</a>
                <a href="?p=ubh-spp&id_spp=<?= $spp['id_spp']; ?>" class="text-dark btn btn-warning">ubah</a>
              </td>
            </tr>
            <?php $i++; ?>
          <?php endforeach; ?>
        </table>
      </div>
    </div>
  </div>

</div>