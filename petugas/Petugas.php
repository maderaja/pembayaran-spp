<?php
require '../config/Database.php';

class Petugas extends Database
{
  public function getAllSiswa()
  {
    $query = "SELECT * FROM siswa";
    $siswa = $this->query($query);

    return $siswa;
  }

  public function getSiswaById($nisn)
  {
    $query = "SELECT * FROM siswa WHERE nisn = " . $nisn;
    $siswa = $this->query($query);

    if (empty($siswa)) {
      return $siswa;
    } else {
      return $siswa[0];
    }
  }

  public function getPetugasById($id_petugas)
  {
    $query = "SELECT * FROM petugas WHERE id_petugas = " . $id_petugas;
    $petugas = $this->query($query);

    return $petugas[0];
  }

  public function getSppById($id_spp)
  {
    $query = "SELECT * FROM spp WHERE id_spp = " . $id_spp;
    $spp = $this->query($query);

    return $spp[0];
  }

  // === SECTION TRANSAKSI ===
  public function entriPembayaran($data)
  {
    $conn = $this->conn;

    $id_petugas = htmlspecialchars($data['id_petugas']);
    $nisn = htmlspecialchars($data['nisn']);
    $tgl_bayar = htmlspecialchars($data['tgl_bayar']);
    $bulan_dibayar = htmlspecialchars($data['bulan_dibayar']);
    $tahun_dibayar = htmlspecialchars($data['tahun_dibayar']);
    $id_spp = htmlspecialchars($data['id_spp']);
    $jumlah_dibayar = htmlspecialchars($data['jumlah_dibayar']);

    mysqli_query($conn, "INSERT INTO pembayaran VALUES ('', '$id_petugas','$nisn','$tgl_bayar','$bulan_dibayar','$tahun_dibayar', '$id_spp', '$jumlah_dibayar')");

    return mysqli_affected_rows($conn);
  }

  public function getPembayaranByNisn($nisn)
  {
    $query = "SELECT * FROM pembayaran WHERE nisn = " . $nisn;
    $pembayaran = $this->query($query);

    return $pembayaran;
  }

  public function getHistory()
  {
    $query = "SELECT * FROM pembayaran";
    $history = $this->query($query);

    return $history;
  }

  // === END SECTION TRANSAKSI ===
}
