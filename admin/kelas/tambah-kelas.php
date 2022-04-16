<?php
if (isset($_POST['tambah'])) {
  if ($admin->tambahDataKelas($_POST) > 0) {
    echo
    "<script>
      alert('Data BERHASIL Ditambah!');
      window.location.href='?p=data-kelas'
    </script>";
  } else {
    echo
    "<script>
      alert('Data GAGAL Ditambah!');
      window.location.href='?p=data-kelas'
    </script>";
  }
}
?>

<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Form Tambah Data Kelas</h1>
  <hr>

  <div class="card mb-4 py-3 border-left-primary">
    <div class="card-body">
      <form action="" method="post" enctype="multipart/form-data">

        <div class="form-group">
          <label for="id_kelas">
            ID Kelas :
          </label>
          <input class="form-control" type="text" name="id_kelas" id="id_kelas" required autocomplete="off">

        </div>

        <div class="form-group">
          <label for="nama_kelas">
            Nama Kelas :
          </label>
          <input class="form-control" type="text" name="nama_kelas" id="nama_kelas" required autocomplete="off">

        </div>

        <div class="form-group">
          <label for="kompetensi_keahlian">
            Kompetensi Keahlian :
          </label>
          <input class="form-control" type="text" name="kompetensi_keahlian" id="kompetensi_keahlian" required>

        </div>

        <hr>
        <button class="btn btn-primary" type="submit" name="tambah">Tambah Data!</button>
      </form>
    </div>
  </div>
</div>