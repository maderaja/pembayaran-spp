<?php
$id_kelas = $_GET["id_kelas"];

if (isset($_POST['ubah'])) {
  if ($admin->ubahDataKelas($_POST) > 0) {
    echo
    "<script>
      alert('Data BERHASIL Diubah!');
      window.location.href='?p=data-kelas'
    </script>";
  } else {
    echo
    "<script>
      alert('Data GAGAL Diubah!');
      window.location.href='?p=data-kelas'
    </script>";
  }
}

$kelas = $admin->getKelasById($id_kelas);
?>

<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Form Ubah Data Kelas</h1>
  <hr>

  <div class="card mb-4 py-3 border-left-warning">
    <div class="card-body">
      <form action="" method="post" enctype="multipart/form-data">

        <div class="form-group">
          <label for="id_kelas">
            ID Kelas :
          </label>
          <input class="form-control" type="text" name="id_kelas" id="id_kelas" required autocomplete="off" readonly value="<?= $kelas['id_kelas']; ?>">

        </div>

        <div class="form-group">
          <label for="nama_kelas">
            Nama Kelas :
          </label>
          <input class="form-control" type="text" name="nama_kelas" id="nama_kelas" required autocomplete="off" value="<?= $kelas['nama_kelas']; ?>">

        </div>

        <div class="form-group">
          <label for="kompetensi_keahlian">
            Kompetensi Keahlian :
          </label>
          <input class="form-control" type="text" name="kompetensi_keahlian" id="kompetensi_keahlian" required value="<?= $kelas['kompetensi_keahlian']; ?>">

        </div>

        <hr>
        <button class="btn btn-warning text-dark" type="submit" name="ubah">Ubah Data!</button>
      </form>
    </div>
  </div>
</div>