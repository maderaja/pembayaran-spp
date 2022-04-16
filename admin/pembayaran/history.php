<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-2 text-gray-800">History Pembayaran SPP</h1>
    <a href="/pembayaran-spp/admin/cetakLaporan.php" target="blank" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

  <hr>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-body">
      <div class="table-responsive mt-3">

        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th width="3%">No.</th>
              <th>ID Pembayaran</th>
              <th>ID Petugas</th>
              <th>NISN</th>
              <th>Tanggal</th>
              <th>Bulan</th>
              <th>Tahun</th>
              <th>ID SPP</th>
              <th>Jumlah Bayar</th>
              <th width="8%">Aksi</th>
            </tr>
          </thead>
          <?php
          $history = $admin->getHistory();
          if (empty($history)) :
          ?>
            <tr>
              <td colspan="9" align="center">BELUM ADA DATA PEMBAYARAN</td>
            </tr>
          <?php endif; ?>

          <?php $i = 1; ?>
          <?php foreach ($history as $history) : ?>
            <tr>

              <td><?= $i ?></td>
              <td><?= $history['id_pembayaran']; ?></td>
              <td><?= $history['id_petugas']; ?></td>
              <td><?= $history['nisn']; ?></td>
              <td><?= $history['tgl_bayar']; ?></td>
              <td><?= $history['bulan_dibayar']; ?></td>
              <td><?= $history['tahun_dibayar']; ?></td>
              <td><?= $history['id_spp']; ?></td>
              <td><?= $history['jumlah_bayar']; ?></td>
              <td>
                <a href="?p=hps-pembayaran&id_pembayaran=<?= $history['id_pembayaran']; ?>" class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini?');">hapus</a>
              </td>
            </tr>
            <?php $i++; ?>
          <?php endforeach; ?>
        </table>
      </div>
    </div>
  </div>

</div>