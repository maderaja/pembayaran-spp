<?php
if (isset($_POST['tambah'])) {
  if ($admin->tambahDataSiswa($_POST) > 0) {
    echo
    "<script>
      alert('Data BERHASIL Ditambah!');
      window.location.href='?p=data-siswa'
    </script>";
  } else {
    echo
    "<script>
      alert('Data GAGAL Ditambah!');
      window.location.href='?p=data-siswa'
    </script>";
  }
}

$kelas = $admin->getAllKelas();
$spp = $admin->getAllSpp();
?>

<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Form Tambah Data Siswa</h1>
  <hr>

  <div class="card mb-4 py-3 border-left-primary">
    <div class="card-body">
      <form action="" method="post" enctype="multipart/form-data">

        <div class="form-group">
          <label for="nisn">NISN :</label>
          <input class="form-control" type="text" name="nisn" id="nisn" required autocomplete="off">
        </div>

        <div class="form-group">
          <label for="nis">NIS :</label>
          <input class="form-control" type="text" name="nis" id="nis" required autocomplete="off">

        </div>

        <div class="form-group">
          <label for="nama"> Nama :</label>
          <input class="form-control" type="nama" name="nama" id="nama" required autocomplete="off">

        </div>

        <div class="form-group">
          <label for="id_kelas">ID Kelas :</label>
          <select class="form-control" id="id_kelas" name="id_kelas">
            <option value="">== Pilih Kelas ==</option>
            <?php foreach ($kelas as $kelas) : ?>
              <option value="<?= $kelas['id_kelas'] ?>"><?= $kelas['nama_kelas'] ?></option>
            <?php endforeach; ?>
          </select>
        </div>

        <div class="form-group">
          <label for="alamat">Alamat : </label>
          <input class="form-control" type="text" name="alamat" id="alamat" required>
        </div>

        <div class="form-group">
          <label for="no_telp">No Telp :</label>
          <input class="form-control" type="text" name="no_telp" id="no_telp" required>
        </div>

        <div class="form-group">
          <label for="id_spp">ID SPP :</label>
          <select class="form-control" id="id_spp" name="id_spp">
            <option value="">== Pilih ID SPP ==</option>
            <?php foreach ($spp as $spp) : ?>
              <option value="<?= $spp['id_spp'] ?>"><?= $spp['tahun'] ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <hr>

        <button class="btn btn-primary" type="submit" name="tambah">Tambah Data!</button>
      </form>
    </div>
  </div>
</div>