<!-- Begin Page Content -->
<div class="container-fluid" style="margin-bottom: 100px;">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-2 text-gray-800">Tabel Data Siswa</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

  <hr>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">

    <div class="card-header py-3">
      <a href="?p=tmb-siswa" style="text-decoration:none;" class="btn btn-primary">Tambah Data Siswa [+]</a>
    </div>
    <div class="card-body">

      <div class="table-responsive">

        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th width="5%">No.</th>
              <th>NISN</th>
              <th>NIS</th>
              <th>Nama</th>
              <th>ID Kelas</th>
              <th>Alamat</th>
              <th>No Telp</th>
              <th>ID SPP</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <?php
          $siswa = $admin->getAllSiswa();
          if (empty($siswa)) : ?>
            <tr>
              <td colspan="7" align="center">Data Siswa tidak ditemukan</td>
            </tr>
          <?php endif; ?>

          <?php $i = 1; ?>
          <?php foreach ($siswa as $swa) : ?>
            <tr>

              <td><?= $i ?></td>
              <td><?= $swa['nisn']; ?></td>
              <td><?= $swa['nis']; ?></td>
              <td><?= $swa['nama']; ?></td>
              <td><?= $swa['id_kelas']; ?></td>
              <td><?= $swa['alamat']; ?></td>
              <td><?= $swa['no_telp']; ?></td>
              <td><?= $swa['id_spp']; ?></td>
              <td>
                <a href="?p=hps-siswa&nisn=<?= $swa['nisn']; ?>" class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini?');">hapus</a>
                <a href="?p=ubh-siswa&nisn=<?= $swa['nisn']; ?>" class="btn btn-warning text-dark">ubah</a>
              </td>
            </tr>
            <?php $i++; ?>
          <?php endforeach; ?>
        </table>
      </div>
    </div>
  </div>

</div>