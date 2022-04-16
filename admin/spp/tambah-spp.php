<?php
if (isset($_POST['tambah'])) {
  if ($admin->tambahDataSpp($_POST) > 0) {
    echo
    "<script>
      alert('Data BERHASIL Ditambah!');
      window.location.href='?p=data-spp'
    </script>";
  } else {
    echo
    "<script>
      alert('Data GAGAL Ditambah!');
      window.location.href='?p=data-spp'
    </script>";
  }
}
?>

<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Form Tambah Data SPP</h1>
  <hr>

  <div class="card mb-4 py-3 border-left-primary">
    <div class="card-body">
      <form action="" method="post" enctype="multipart/form-data">

        <div class="form-group">
          <label for="id_spp">
            ID SPP :
          </label>
          <input class="form-control" type="text" name="id_spp" id="id_spp" required autocomplete="off">

        </div>

        <div class="form-group">
          <label for="tahun">
            Tahun :
          </label>
          <input class="form-control" type="text" name="tahun" id="tahun" required>

        </div>

        <div class="form-group">
          <label for="nominal">
            Nominal :
          </label>
          <input class="form-control" type="text" name="nominal" id="nominal" required autocomplete="off">

        </div>

        <hr>
        <button class="btn btn-primary" type="submit" name="tambah">Tambah Data!</button>
      </form>
    </div>
  </div>
</div>