<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-2 text-gray-800">Tabel Data Petugas</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

  <hr>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">

    <div class="card-header py-3">
      <a href="?p=tmb-petugas" style="text-decoration:none;" class="btn btn-primary">Tambah Data Petugas [+]</a>
    </div>
    <div class="card-body">

      <div class="table-responsive">

        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th width="5%">No.</th>
              <th>ID Petugas</th>
              <th>Username</th>
              <th>Nama Petugas</th>
              <th>Level</th>
              <th width="20%">Aksi</th>
            </tr>
          </thead>
          <?php
          $petugas = $admin->getAllPetugas();

          if (empty($petugas)) : ?>
            <tr>
              <td colspan="7" align="center">Data Petugas tidak ditemukan</td>
            </tr>
          <?php endif; ?>

          <?php $i = 1; ?>
          <?php foreach ($petugas as $ptgs) : ?>
            <tr>
              <td><?= $i ?></td>
              <td><?= $ptgs['id_petugas']; ?></td>
              <td><?= $ptgs['username']; ?></td>
              <td><?= $ptgs['nama_petugas']; ?></td>
              <td><?= $ptgs['level']; ?></td>
              <td>
                <a href="?p=hps-petugas&id_petugas=<?= $ptgs['id_petugas']; ?>" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini?');" class="btn btn-danger">hapus</a>
                <a href="?p=ubh-petugas&id_petugas=<?= $ptgs['id_petugas']; ?>" class="btn btn-warning text-dark">ubah</a>
              </td>
            </tr>
            <?php $i++; ?>
          <?php endforeach; ?>
        </table>
      </div>
    </div>
  </div>

</div>