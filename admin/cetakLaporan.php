<?php
session_start();
if (!isset($_SESSION['id'])) {
  header('location: ../index.php');
}
require 'Admin.php';

$admin = new Admin;

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laporan Data Pembayaran</title>
  <link rel="icon" href="../assets/img/skensa.png">

  <!-- Custom fonts for this template-->
  <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->

  <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="../assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body>
  <!-- Begin Page Content -->
  <div class="container-fluid mt-5">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-center mb-4">
      <h1 class="h3 mb-2 text-gray-800">Data Pembayaran SPP</h1>
    </div>

    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4 mx-4">
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
              </tr>
              <?php $i++; ?>
            <?php endforeach; ?>
          </table>
        </div>
      </div>
    </div>

  </div>

  <script>
    window.print();
  </script>
</body>

</html>