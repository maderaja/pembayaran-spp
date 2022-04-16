<!-- Hero Section -->
<section class="hero history" id="hero">
  <div class="heroText">
    <h1 class="text-white mb-lg-4 mt-3" data-aos="zoom-in" data-aos-delay="800">
      HISTORY PEMBAYARAN SPP
    </h1>
  </div>

  <div class="videoWrapper">
    <video autoplay="" loop="" muted="" class="custom-video" poster="../assets/videos/videouk.png">
      <source src="../assets/videos/videouk.mp4" type="video/mp4">

      Your browser does not support the video tag.
    </video>
  </div>

  <div class="overlay"></div>
</section>

<!-- History -->

<section id="menu">
  <div class="container">
    <div class="row text-center mb-3">
      <div class="col" data-aos="fade-down" data-aos-offset="150" data-aos-delay="70" data-aos-duration="1000">
        <h2 class="text-dark">HISTORY</h2>
        <hr>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-12 mb-3" data-aos="flip-right" data-aos-offset="200" data-aos-delay="150" data-aos-duration="1000">
        <div class="card shadow mb-4">
          <div class="card-body">
            <div class="table-responsive mt-3">

              <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th width="5%">No.</th>
                    <th>ID Petugas</th>
                    <th>NISN</th>
                    <th>Tanggal</th>
                    <th>Bulan</th>
                    <th>Tahun</th>
                    <th>ID SPP</th>
                    <th>Jumlah</th>
                  </tr>
                </thead>
                <?php
                $history = $siswa->getHistory($_SESSION["nisn"]);
                if (empty($history)) :
                ?>
                  <tr>
                    <td colspan="9" align="center">BELUM ADA DATA PEMBAYARAN</td>
                  </tr>
                <?php endif; ?>
                <?php $i = 1; ?>
                <?php foreach ($history as $history) : ?>
                  <tr>

                    <td><?= $i ?></td>
                    <td><?= $history['id_petugas']; ?></td>
                    <td><?= $history['nisn']; ?></td>
                    <td><?= $history['tgl_bayar']; ?></td>
                    <td><?= $history['bulan_dibayar']; ?></td>
                    <td><?= $history['tahun_dibayar']; ?></td>
                    <td><?= $history['id_spp']; ?></td>
                    <td><?= $history['jumlah_bayar']; ?></td>
                  </tr>
                  <?php $i++; ?>
                <?php endforeach; ?>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Akhir Menu -->