<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard Petugas</h1>
    <p>Haii, Selamat Datang <?= $_SESSION["user_session"]["nama"] ?>!</p>
  </div>

  <!-- Content Row -->
  <div class="row">
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-6 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <a href="?p=entri-bayar1">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Transaksi</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">Entri Pembayaran</div>
              </a>
            </div>
            <div class="col-auto">
              <i class="fas fa-chart-area fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-6 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <a href="?p=history">
                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">History</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">History Pembayaran</div>
              </a>
            </div>
            <div class="col-auto">
              <i class="fas fa-history fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>