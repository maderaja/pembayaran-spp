<?php
if (isset($_POST["kirim"])) {
  echo
  "<script>
    window.location.href='?p=entri-bayar2&nisn=" . $_POST["nisn"] . "'
  </script>";
}

$siswa = $petugas->getAllSiswa();
?>

<div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Form Entri Pembayaran SPP</h1>
  <hr>

  <div class="card mb-4 py-3 border-left-success">
    <div class="card-body">
      <form action="" method="post" class="form">
        <div class="form-group">
          <label for="nisn">NISN Siswa :</label>
          <input type="text" name="nisn" id="nisn" list="nisns" class="form-control" required autocomplete="off">
          <datalist id="nisns">
            <?php foreach ($siswa as $siswa) : ?>
              <option value="<?= $siswa['nisn'] ?>"><?= $siswa['nama'] ?></option>
            <?php endforeach; ?>
          </datalist>
        </div>
        <button type="submit" name="kirim" class="btn btn-success mt-3">Kirim</button>
      </form>
    </div>
  </div>
</div>