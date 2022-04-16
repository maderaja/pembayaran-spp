<?php
$nisn = $_GET["nisn"];

if (isset($_POST['ubah'])) {
  if ($admin->ubahDataSiswa($_POST) > 0) {
    echo
    "<script>
      alert('Data BERHASIL Diubah!');
      window.location.href='?p=data-siswa'
    </script>";
  } else {
    echo
    "<script>
      alert('Data GAGAL Diubah!');
      window.location.href='?p=data-siswa'
    </script>";
  }
}

$siswa = $admin->getSiswaById($nisn);
$kelas = $admin->getAllKelas();
$spp = $admin->getAllSpp();

?>


<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Form Ubah Data Siswa</h1>
  <hr>

  <div class="card mb-4 py-3 border-left-warning">
    <div class="card-body">
      <form action="" method="post" enctype="multipart/form-data">

        <div class="form-group">
          <label for="nisn">NISN :</label>
          <input class="form-control" type="text" readonly name="nisn" id="nisn" required autocomplete="off" value="<?= $siswa['nisn'] ?>">
        </div>

        <div class="form-group">
          <label for="nis">NIS :</label>
          <input class="form-control" type="text" name="nis" id="nis" required autocomplete="off" value="<?= $siswa['nis'] ?>">
        </div>

        <div class="form-group">
          <label for="nama"> Nama :</label>
          <input class="form-control" type="nama" name="nama" id="nama" required autocomplete="off" value="<?= $siswa['nama'] ?>">
        </div>

        <div class="form-group">
          <label for="id_kelas">ID Kelas :</label>
          <select class="form-control" name="id_kelas" required>
            <?php foreach ($kelas as $kelas) : ?>
              <option class="option" value=" <?= $kelas['id_kelas'] ?>" <?php if ($siswa['id_kelas'] == $kelas['id_kelas']) {
                                                                          echo "selected";
                                                                        } ?>>
                <?= $kelas['nama_kelas'] ?>
              </option>

            <?php endforeach; ?>
          </select>
        </div>

        <div class="form-group">
          <label for="alamat">Alamat : </label>
          <input class="form-control" type="text" name="alamat" id="alamat" required value="<?= $siswa['alamat'] ?>">
        </div>

        <div class="form-group">
          <label for="no_telp">No Telp :</label>
          <input class="form-control" type="text" name="no_telp" id="no_telp" required value="<?= $siswa['no_telp'] ?>">
        </div>

        <div class="form-group">
          <label for="id_spp">ID SPP :</label>
          <select class="form-control" name="id_spp" required disabled>
            <?php
            foreach ($spp as $spp) :
            ?>
              <option class="option" value="<?= $spp['id_spp'] ?>" <?php if ($siswa['id_spp'] == $spp['id_spp']) {
                                                                      echo "selected";
                                                                    } ?>>
                <?= $spp['tahun'] ?>
              </option>

            <?php endforeach; ?>
          </select>
        </div>
        <hr>

        <button class="btn btn-warning text-dark" type="submit" name="ubah">Ubah Data!</button>
      </form>
    </div>
  </div>
</div>