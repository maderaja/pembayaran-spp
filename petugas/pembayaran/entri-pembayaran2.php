<?php
$nisn = $_GET["nisn"];

$siswa = $petugas->getSiswaById($nisn);

$petugas_login = $petugas->getPetugasById($_SESSION["id"]);

if (isset($_POST['bayar'])) {
  if ($petugas->entriPembayaran($_POST) > 0) {
    echo
    "<script>
      alert('Pembayaran BERHASIL!');
      window.location.href='?p=history'
    </script>";
  } else {
    echo
    "<script>
      alert('Pembayaran GAGAL!');
      window.location.href='?p=history'
    </script>";
  }
}

if (!empty($siswa)) {
  $pembayaran =  $petugas->getPembayaranByNisn($siswa["nisn"]);

  $bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Okober", "November", "Desember"];
  $bulan_dibayar = array_column($pembayaran, "bulan_dibayar");
  $jumlah_bayar = $petugas->getSppById($siswa["id_spp"]);
} else {
  $bulan = [];
}
?>

<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Form Entri Pembayaran SPP</h1>
  <hr>

  <div class="card mb-4 py-3 border-left-success">
    <div class="card-body">
      <?php foreach ($bulan as $bln) : ?>
        <label class="btn btn-<?= (in_array($bln, $bulan_dibayar) ? "success" : "danger") ?>"><?= $bln ?></label>
      <?php endforeach; ?>
      <?php
      if (empty($siswa)) :
      ?>
        <h1 class="text-danger text-center">❗⚠ DATA SISWA TIDAK DITEMUKAN ⚠ ❗</h1>
        <a href="?p=entri-bayar1" class="btn btn-primary ml-6 mt-3" style="width: 65%;">Isi Data Ulang</a>
      <?php else : ?>
        <form action="" method="post" class="form mt-5">
          <input type="hidden" name="id_petugas" id="id_petugas" autocomplete="off" value="<?= $petugas_login["id_petugas"] ?>">
          <input type="hidden" name="nisn" id="nisn" autocomplete="off" value="<?= $siswa["nisn"] ?>">

          <div class="form-group">
            <label for="petugas">Petugas</label>
            <input type="text" name="petugas" id="petugas" class="form-control" required autocomplete="off" readonly value="<?= $petugas_login["nama_petugas"] ?>">
          </div>
          <div class="form-group">
            <label for="nama">NISN</label>
            <input type="text" name="nama" id="nama" class="form-control" required autocomplete="off" readonly value="<?= $siswa["nisn"] ?> - <?= $siswa["nama"] ?>">
          </div>
          <div class="form-group">
            <label for="start">Tanggal Dibayar</label>
            <input type="date" id="start" name="tgl_bayar" readonly value="<?php echo date("Y-m-d"); ?>" max="2024-12-31" class="form-control">
          </div>
          <div class="form-group">
            <label for="bulan_dibayar">Bulan Dibayar</label>
            <select name="bulan_dibayar" id="bulan_dibayar" class="form-control">
              <option value="">=== Bulan ===</option>
              <?php foreach ($bulan as $bln) : ?>
                <option value="<?= $bln ?>" class="<?= (in_array($bln, $bulan_dibayar) ? "d-none" : "") ?>"><?= $bln ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <label for="tahun_dibayar">Tahun Dibayar</label>
            <input type="text" name="tahun_dibayar" id="tahun_dibayar" value="<?php echo date("Y"); ?>" class="form-control" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="id_spp">ID SPP</label>
            <input type="text" name="id_spp" id="id_spp" class="form-control" autocomplete="off" readonly value="<?= $siswa["id_spp"] ?>">
          </div>
          <div class="form-group">
            <label for="jumlah_dibayar">Jumlah Dibayar</label>
            <input type="text" name="jumlah_dibayar" id="jumlah_dibayar" readonly value="<?= $jumlah_bayar["nominal"] ?>" class="form-control" autocomplete="off">
          </div>

          <button type="submit" name="bayar" class="btn btn-success mt-3">Bayar</button>
        </form>
      <?php endif; ?>
    </div>
  </div>
</div>