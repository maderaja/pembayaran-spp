<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary shadow-sm fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="../assets/img/skensa.png" width="30" height="30" class="d-inline-block align-top" alt="">
      SPP SKENSA
    </a>
    <!-- <a class="navbar-brand mr-5 font-weight-bold" href="#home">SPP SEKNSA</a> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?p=home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#menu">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?p=history">History</a>
        </li>
        <div class="collapse navbar-collapse" id="topNavBar">
          <ul class="navbar-nav ms-auto">
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle ml-3" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-white small"><?= $_SESSION["user_session"]["nama"] ?></span>
                <img class="img-profile rounded-circle" src="../assets/img/undraw_profile.svg" width="30px">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="?p=logout" onclick="return confirm('Anda Yakin Ingin LOGOUT dan KELUAR ?');">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </div>
      </ul>
    </div>
  </div>
</nav>
<!-- Akhir Navbar -->