<?php
require_once 'config/database.php';

class Login extends Database
{
  // MENGAMBIL DATA PETUGAS SESUAI USERNAME DAN PASSWORD
  public function getPetugas($username, $password)
  {
    $username = mysqli_real_escape_string($this->conn, $username);
    $password = mysqli_real_escape_string($this->conn, $password);

    $query = "SELECT * FROM petugas WHERE username = '" . $username . "' AND password = '" . $password . "'";
    $result = $this->query($query);

    return $result;
  }

  // MENGAMBIL DATA SISWA SESUAI NISN DAN NIS
  public function getSiswa($username, $password)
  {
    $username = mysqli_real_escape_string($this->conn, $username);
    $password = mysqli_real_escape_string($this->conn, $password);

    $query = "SELECT * FROM siswa WHERE nisn = '" . $username . "' AND nis = '" . $password . "'";
    $result = $this->query($query);

    return $result;
  }
}
