<?php
require '../config/Database.php';

class Admin extends Database
{

  // === SECTION SISWA ===
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

  public function tambahDataSiswa($data)
  {
    $conn = $this->conn;

    $nisn = htmlspecialchars($data['nisn']);
    $nis = htmlspecialchars($data['nis']);
    $nama = htmlspecialchars($data['nama']);
    $id_kelas = htmlspecialchars($data['id_kelas']);
    $alamat = htmlspecialchars($data['alamat']);
    $no_telp = htmlspecialchars($data['no_telp']);
    $id_spp = htmlspecialchars($data['id_spp']);

    mysqli_query($conn, "INSERT INTO siswa VALUES ('$nisn','$nis','$nama','$id_kelas','$alamat','$no_telp','$id_spp')");

    return mysqli_affected_rows($conn);
  }

  public function ubahDataSiswa($data)
  {
    $conn = $this->conn;

    $nisn = $data["nisn"];
    $nis = htmlspecialchars($data['nis']);
    $nama = htmlspecialchars($data['nama']);
    $id_kelas = htmlspecialchars($data['id_kelas']);
    $alamat = htmlspecialchars($data['alamat']);
    $no_telp = htmlspecialchars($data['no_telp']);
    $id_spp = htmlspecialchars($data['id_spp']);

    mysqli_query($conn, "UPDATE siswa SET
                          nisn = '$nisn',
                          nis = '$nis',
                          nama = '$nama',
                          id_kelas = '$id_kelas',
                          alamat = '$alamat',
                          no_telp = '$no_telp',
                          id_spp = '$id_spp'

                        WHERE nisn = $nisn
    ");

    return mysqli_affected_rows($conn);
  }

  public function hapusSiswa($nisn)
  {
    $conn = $this->conn;
    mysqli_query($conn, "DELETE FROM siswa WHERE nisn = $nisn");

    return mysqli_affected_rows($conn);
  }
  // === END SECTION SISWA ==



  // === SECTION PETUGAS ===
  public function getAllPetugas()
  {
    $query = "SELECT * FROM petugas";
    $petugas = $this->query($query);

    return $petugas;
  }

  public function getPetugasById($id_petugas)
  {
    $query = "SELECT * FROM petugas WHERE id_petugas = " . $id_petugas;
    $petugas = $this->query($query);

    return $petugas[0];
  }

  public function tambahDataPetugas($data)
  {
    $conn = $this->conn;

    $id_petugas = htmlspecialchars($data['id_petugas']);
    $nama_petugas = htmlspecialchars($data['nama_petugas']);
    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);
    $level = htmlspecialchars($data['level']);

    $query = "SELECT * FROM petugas WHERE username = '$username'";
    $cek = $this->query($query);
    if ($cek) {
      echo
      "<script>
        alert('Data UDAH ADA SATT!');
        window.location.href='?p=data-petugas'
      </script>";
      exit;
    } else {

      mysqli_query($conn, "INSERT INTO petugas VALUES ('$id_petugas','$username','$password','$nama_petugas','$level')");

      return mysqli_affected_rows($conn);
    }
  }

  public function ubahDataPetugas($data)
  {
    $conn = $this->conn;

    $id_petugas = $data["id_petugas"];
    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);
    $nama_petugas = htmlspecialchars($data['nama_petugas']);
    $level = htmlspecialchars($data['level']);

    mysqli_query($conn, "UPDATE petugas SET
                          id_petugas = '$id_petugas',
                          username = '$username',
                          password = '$password',
                          nama_petugas = '$nama_petugas',
                          level = '$level'

                        WHERE id_petugas = $id_petugas
    ");

    return mysqli_affected_rows($conn);
  }

  public function hapusPetugas($id_petugas)
  {
    $conn = $this->conn;
    mysqli_query($conn, "DELETE FROM petugas WHERE id_petugas = $id_petugas");

    return mysqli_affected_rows($conn);
  }
  // === END SECTION PETUGAS ==



  // === SECTION KELAS ===
  public function getAllKelas()
  {
    $query = "SELECT * FROM kelas";
    $kelas = $this->query($query);

    return $kelas;
  }

  public function getKelasById($id_kelas)
  {
    $query = "CALL getKelasById($id_kelas)";
    $kelas = $this->query($query);

    return $kelas[0];
  }

  public function tambahDataKelas($data)
  {
    $conn = $this->conn;

    $id_kelas = htmlspecialchars($data['id_kelas']);
    $nama_kelas = htmlspecialchars($data['nama_kelas']);
    $kompetensi_keahlian = htmlspecialchars($data['kompetensi_keahlian']);

    mysqli_query($conn, "INSERT INTO kelas VALUES ('$id_kelas','$nama_kelas','$kompetensi_keahlian')");

    return mysqli_affected_rows($conn);
  }

  public function ubahDataKelas($data)
  {
    $conn = $this->conn;

    $id_kelas = $data["id_kelas"];
    $nama_kelas = htmlspecialchars($data['nama_kelas']);
    $kompetensi_keahlian = htmlspecialchars($data['kompetensi_keahlian']);

    mysqli_query($conn, "UPDATE kelas SET
                          id_kelas = '$id_kelas',
                          nama_kelas = '$nama_kelas',
                          kompetensi_keahlian = '$kompetensi_keahlian'

                        WHERE id_kelas = $id_kelas
    ");

    return mysqli_affected_rows($conn);
  }

  public function hapusKelas($id_kelas)
  {
    $conn = $this->conn;
    mysqli_query($conn, "DELETE FROM kelas WHERE id_kelas = $id_kelas");

    return mysqli_affected_rows($conn);
  }
  // === END SECTION KELAS ==



  // === SECTION SPP ===
  public function getAllSpp()
  {
    $query = "SELECT * FROM spp";
    $spp = $this->query($query);

    return $spp;
  }

  public function getSppById($id_spp)
  {
    $query = "SELECT * FROM spp WHERE id_spp = " . $id_spp;
    $spp = $this->query($query);

    return $spp[0];
  }

  public function tambahDataSpp($data)
  {
    $conn = $this->conn;

    $id_spp = htmlspecialchars($data['id_spp']);
    $tahun = htmlspecialchars($data['tahun']);
    $nominal = htmlspecialchars($data['nominal']);

    mysqli_query($conn, "INSERT INTO spp VALUES ('$id_spp','$tahun','$nominal')");

    return mysqli_affected_rows($conn);
  }

  public function ubahDataSpp($data)
  {
    $conn = $this->conn;

    $id_spp = $data["id_spp"];
    $tahun = htmlspecialchars($data['tahun']);
    $nominal = htmlspecialchars($data['nominal']);

    mysqli_query($conn, "UPDATE spp SET
                          id_spp = '$id_spp',
                          tahun = '$tahun',
                          nominal = '$nominal'

                        WHERE id_spp = $id_spp
    ");

    return mysqli_affected_rows($conn);
  }

  public function hapusSpp($id_spp)
  {
    $conn = $this->conn;
    mysqli_query($conn, "DELETE FROM spp WHERE id_spp = $id_spp");

    return mysqli_affected_rows($conn);
  }
  // === END SECTION SPP ===


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

  public function hapusPembayaran($id_pembayaran)
  {
    $conn = $this->conn;
    mysqli_query($conn, "DELETE FROM pembayaran WHERE id_pembayaran = $id_pembayaran");

    return mysqli_affected_rows($conn);
  }
  // === END SECTION TRANSAKSI ===

}
