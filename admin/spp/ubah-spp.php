<?php
$id_spp = $_GET["id_spp"];

if (isset($_POST['ubah'])) {
  if ($admin->ubahDataSpp($_POST) > 0) {
    echo
    "<script>
      alert('Data BERHASIL Diubah!');
      window.location.href='?p=data-spp'
    </script>";
  } else {
    echo
    "<script>
      alert('Data GAGAL Diubah!');
      window.location.href='?p=data-spp'
    </script>";
  }
}

$spp = $admin->getSppById($id_spp);
?>

<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Form Ubah Data Petugas</h1>
  <hr>

  <div class="card mb-4 py-3 border-left-warning">
    <div class="card-body">
      <form action="" method="post" enctype="multipart/form-data">

        <div class="form-group">
          <label for="id_spp">
            ID SPP :
          </label>
          <input class="form-control" type="text" readonly name="id_spp" id="id_spp" required autocomplete="off" value="<?= $spp['id_spp']; ?>">

        </div>

        <div class="form-group">
          <label for="tahun">
            Tahun :
          </label>
          <input class="form-control" type="text" name="tahun" id="tahun" required value="<?= $spp['tahun']; ?>">

        </div>

        <div class="form-group">
          <label for="nominal">
            Nominal :
          </label>
          <input class="form-control" type="text" name="nominal" id="nominal" required autocomplete="off" value="<?= $spp['nominal']; ?>">

        </div>

        <hr>
        <button class="btn btn-warning text-dark" type="submit" name="ubah">Ubah Data!</button>
      </form>
    </div>
  </div>
</div>