<?php

if (empty($_GET)) {
  include 'home.php';
}

if (isset($_GET["p"])) {
  if ($_GET["p"] == "home") {
    require 'home.php';
  } elseif ($_GET["p"] == "history") {
    require 'history.php';
  } elseif ($_GET["p"] == "logout") {
    session_destroy();
    echo "<script>window.location.href='../';</script>";
  }
}
