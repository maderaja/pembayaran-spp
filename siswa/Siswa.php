<?php
require '../config/Database.php';

class Siswa extends Database
{
  public function getHistory($nisn)
  {
    $query = "SELECT * FROM pembayaran WHERE nisn = " . $nisn;
    $history = $this->query($query);

    return $history;
  }
}
