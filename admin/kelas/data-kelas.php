<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-2 text-gray-800">Tabel Data Kelas</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

  <hr>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">

    <div class="card-header py-3">
      <a href="?p=tmb-kelas" style="text-decoration:none;" class="btn btn-primary">Tambah Data Kelas [+]</a>
    </div>
    <div class="card-body">

      <div class="table-responsive">

        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th width="5%">No.</th>
              <th>ID Kelas</th>
              <th>Nama Kelas</th>
              <th>Kompetensi Keahlian</th>
              <th width="20%">Aksi</th>
            </tr>
          </thead>
          <?php
          $kelas = $admin->getAllKelas();
          if (empty($kelas)) : ?>
            <tr>
              <td colspan="7" align="center">Data Kelas tidak ditemukan</td>
            </tr>
          <?php endif; ?>

          <?php $i = 1; ?>
          <?php foreach ($kelas as $kelas) : ?>
            <tr>
              <td><?= $i ?></td>
              <td><?= $kelas['id_kelas']; ?></td>
              <td><?= $kelas['nama_kelas']; ?></td>
              <td><?= $kelas['kompetensi_keahlian']; ?></td>
              <td>
                <a href="?p=hps-kelas&id_kelas=<?= $kelas['id_kelas']; ?>" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini?');" class="btn btn-danger">hapus</a>
                <a href="?p=ubh-kelas&id_kelas=<?= $kelas['id_kelas']; ?>" class="btn btn-warning text-dark">ubah</a>
              </td>
            </tr>
            <?php $i++; ?>
          <?php endforeach; ?>
        </table>
      </div>
    </div>
  </div>

</div>