<?php
session_start();
if ($_SESSION["user_session"]["login"] != true) {
  header('location: ../index.php');
}

require 'Siswa.php';

$siswa = new Siswa;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../assets/css/bootstrap.css" />
  <link rel="stylesheet" href="../assets/css/style.css">
  <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">

  <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <title>SISWA</title>
  <link rel="icon" href="../assets/img/skensa.png">
</head>

<body id="home">
  <?php include 'header.php'; ?>
  <?php include 'konten.php'; ?>
  <?php include 'footer.php'; ?>