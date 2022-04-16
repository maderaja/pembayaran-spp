<?php

if (empty($_GET)) {
  include 'home.php';
}

if (isset($_GET["p"])) {
  if ($_GET["p"] == "home") {
    require 'home.php';
  } elseif ($_GET["p"] == "data-siswa") {
    require 'siswa/data-siswa.php';
  } elseif ($_GET["p"] == "data-petugas") {
    require 'petugas/data-petugas.php';
  } elseif ($_GET["p"] == "data-kelas") {
    require 'kelas/data-kelas.php';
  } elseif ($_GET["p"] == "data-spp") {
    require 'spp/data-spp.php';
  } elseif ($_GET["p"] == "tmb-siswa") {
    require 'siswa/tambah-siswa.php';
  } elseif ($_GET["p"] == "tmb-petugas") {
    require 'petugas/tambah-petugas.php';
  } elseif ($_GET["p"] == "tmb-kelas") {
    require 'kelas/tambah-kelas.php';
  } elseif ($_GET["p"] == "tmb-spp") {
    require 'spp/tambah-spp.php';
  } elseif ($_GET["p"] == "ubh-siswa") {
    require 'siswa/ubah-siswa.php';
  } elseif ($_GET["p"] == "ubh-petugas") {
    require 'petugas/ubah-petugas.php';
  } elseif ($_GET["p"] == "ubh-kelas") {
    require 'kelas/ubah-kelas.php';
  } elseif ($_GET["p"] == "ubh-spp") {
    require 'spp/ubah-spp.php';
  } elseif ($_GET["p"] == "hps-siswa") {
    if ($admin->hapusSiswa($_GET["nisn"]) > 0) {
      echo "
      <script>
        alert('Data BERHASIL Dihapus');
        window.location.href='?p=data-siswa';
      </script>";
    } else {
      echo "
      <script>
        alert('Data GAGAL Dihapus');
        window.location.href='?p=data-siswa';
      </script>";
    }
  } elseif ($_GET["p"] == "hps-petugas") {
    if ($admin->hapusPetugas($_GET["id_petugas"]) > 0) {
      echo "
      <script>
        alert('Data BERHASIL Dihapus');
        window.location.href='?p=data-petugas';
      </script>";
    } else {
      echo "
      <script>
        alert('Data GAGAL Dihapus');
        window.location.href='?p=data-petugas';
      </script>";
    }
  } elseif ($_GET["p"] == "hps-kelas") {
    if ($admin->hapusKelas($_GET["id_kelas"]) > 0) {
      echo "
      <script>
        alert('Data BERHASIL Dihapus');
        window.location.href='?p=data-kelas';
      </script>";
    } else {
      echo "
      <script>
        alert('Data GAGAL Dihapus');
        window.location.href='?p=data-kelas';
      </script>";
    }
  } elseif ($_GET["p"] == "hps-spp") {
    if ($admin->hapusSpp($_GET["id_spp"]) > 0) {
      echo "
      <script>
        alert('Data BERHASIL Dihapus');
        window.location.href='?p=data-spp';
      </script>";
    } else {
      echo "
      <script>
        alert('Data GAGAL Dihapus');
        window.location.href='?p=data-spp';
      </script>";
    }
  } elseif ($_GET["p"] == "hps-pembayaran") {
    if ($admin->hapusPembayaran($_GET["id_pembayaran"]) > 0) {
      echo "
      <script>
        alert('Data BERHASIL Dihapus');
        window.location.href='?p=history';
      </script>";
    } else {
      echo "
      <script>
        alert('Data GAGAL Dihapus');
        window.location.href='?p=history';
      </script>";
    }
  } elseif ($_GET["p"] == "entri-bayar1") {
    require 'pembayaran/entri-pembayaran1.php';
  } elseif ($_GET["p"] == "entri-bayar2") {
    require 'pembayaran/entri-pembayaran2.php';
  } elseif ($_GET["p"] == "history") {
    require 'pembayaran/history.php';
  } elseif ($_GET["p"] == "logout") {
    session_destroy();
    echo "<script>window.location.href='../';</script>";
  }
}
