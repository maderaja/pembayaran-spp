<?php
if (isset($_POST['tambah'])) {
  if ($admin->tambahDataPetugas($_POST) > 0) {
    echo
    "<script>
      alert('Data BERHASIL Ditambah!');
      window.location.href='?p=data-petugas'
    </script>";
  } else {
    echo
    "<script>
      alert('Data GAGAL Ditambah!');
      window.location.href='?p=data-petugas'
    </script>";
  }
}
?>


<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Form Tambah Data Petugas</h1>
  <hr>

  <div class="card mb-4 py-3 border-left-primary">
    <div class="card-body">
      <form action="" method="post" enctype="multipart/form-data">

        <div class="form-group">
          <label for="id_petugas">
            ID Petugas :
          </label>
          <input class="form-control" type="text" name="id_petugas" id="id_petugas" required autocomplete="off">
        </div>

        <div class="form-group">
          <label for="username">
            Username :
          </label>
          <input class="form-control" type="username" name="username" id="username" required autocomplete="off">
        </div>

        <div class="form-group">
          <label for="password">
            Password :
          </label>
          <input class="form-control" type="password" name="password" id="password" required>
        </div>

        <div class="form-group">
          <label for="nama_petugas">
            Nama Petugas :
          </label>
          <input class="form-control" type="text" name="nama_petugas" id="nama_petugas" required autocomplete="off">
        </div>

        <div class="form-group">
          <label for="level">
            Level :
          </label>
          <input class="form-control" type="text" name="level" id="level" readonly value="petugas" required>
        </div>

        <hr>
        <button class="btn btn-primary" type="submit" name="tambah">Tambah Data!</button>
      </form>
    </div>
  </div>
</div>