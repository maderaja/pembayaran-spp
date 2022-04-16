<?php
$id_petugas = $_GET["id_petugas"];

if (isset($_POST['ubah'])) {
  if ($admin->ubahDataPetugas($_POST) > 0) {
    echo
    "<script>
      alert('Data BERHASIL Diubah!');
      window.location.href='?p=data-petugas'
    </script>";
  } else {
    echo
    "<script>
      alert('Data GAGAL Diubah!');
      window.location.href='?p=data-petugas'
    </script>";
  }
}

$petugas = $admin->getPetugasById($id_petugas);
?>

<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Form Ubah Data Petugas</h1>
  <hr>

  <div class="card mb-4 py-3 border-left-warning text-dark">
    <div class="card-body">
      <form action="" method="post" enctype="multipart/form-data">

        <div class="form-group">
          <label for="id_petugas">
            ID Petugas :
          </label>
          <input class="form-control" type="text" readonly name="id_petugas" id="id_petugas" required autocomplete="off" value="<?= $petugas['id_petugas']; ?>">
        </div>

        <div class="form-group">
          <label for="username">
            Username :
          </label>
          <input class="form-control" type="username" name="username" id="username" required autocomplete="off" value="<?= $petugas['username']; ?>">
        </div>

        <div class="form-group">
          <label for="password">
            Password :
          </label>
          <input class="form-control" type="password" name="password" id="password" required value="<?= $petugas['password']; ?>">
        </div>

        <div class="form-group">
          <label for="nama_petugas">
            Nama Petugas :
          </label>
          <input class="form-control" type="text" name="nama_petugas" id="nama_petugas" required autocomplete="off" value="<?= $petugas['nama_petugas']; ?>">
        </div>

        <div class="form-group">
          <label for="level">
            Level :
          </label>
          <input class="form-control" type="text" name="level" id="level" readonly required value="<?= $petugas['level']; ?>">
        </div>

        <hr>
        <button class="btn btn-warning text-dark" type="submit" name="ubah">Ubah Data!</button>
      </form>
    </div>
  </div>
</div>