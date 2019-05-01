<?php
include_once "desain/kepala.php";

$q1 = mysqli_query($koneksi, "SELECT * FROM pinjam_detail");
$r1 = mysqli_num_rows($q1);
$q2 = mysqli_query($koneksi, "SELECT * FROM inventaris WHERE stock > 0");
$r2 = mysqli_num_rows($q2);
$q3 = mysqli_query($koneksi, "SELECT * FROM pinjam_detail WHERE status='dipinjam'");
$r3 = mysqli_num_rows($q3);
$q4 = mysqli_query($koneksi, "SELECT * FROM peminjam");
$r4 = mysqli_num_rows($q4);
?>

<div class="main-panel">
  <div class="content-wrapper">

    <div class="row">
      <div class="col-md-6 col-lg-3 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title text-center">Total Peminjaman</h4>
            <h1 class="font-weight-light mb-4 text-center"><?php echo $r1; ?></h1>
            <div class="progress progress-md">
              <div class="progress-bar bg-info w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title text-center">Jumlah Barang</h4>
            <h1 class="font-weight-light mb-4 text-center"><?php echo $r2; ?></h1>
            <div class="progress progress-md">
              <div class="progress-bar bg-danger w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title text-center">Peminjam</h4>
            <h1 class="font-weight-light mb-4 text-center"><?php echo $r4; ?></h1>
            <div class="progress progress-md">
              <div class="progress-bar bg-primary w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title text-center">Sedang Dipinjam</h4>
            <h1 class="font-weight-light mb-4 text-center"><?php echo $r3; ?></h1>
            <div class="progress progress-md">
              <div class="progress-bar bg-success w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title text-center">Statistik</h4>
            <div id="grapik"></div>
          </div>
        </div>
      </div>
    </div>
<br>
    <!-- Informasi -->
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Informasi Peminjaman Barang</h4>
            <p class="card-description">Silahkan Ikuti Tata Cara Untuk Peraturannya</p>
            <div class="mt-4">
              <div class="accordion accordion-multi-colored" id="accordion-6" role="tablist">
                <div class="card">
                  <div class="card-header" role="tab" id="heading-16">
                    <h6 class="mb-0">
                      <a data-toggle="collapse" href="#collapse-16" aria-expanded="false" aria-controls="collapse-16">
                        Bagaimana Cara Pinjam Barang?
                      </a>
                    </h6><hr style="background-color: yellow;">
                  </div>

                  <div id="collapse-16" class="collapse" role="tabpanel" aria-labelledby="heading-16" data-parent="#accordion-6">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-12">
                          Bilang Pada Operator Untuk Meminjam Barang Yang Dibutuhkan.
                          Pastikan Identitas Kamu di isi dengan baik dan benar.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="card">
                  <div class="card-header" role="tab" id="heading-17">
                    <h6 class="mb-0">
                      <a class="collapsed" data-toggle="collapse" href="#collapse-17" aria-expanded="false" aria-controls="collapse-17">
                        Bagaimana Cara Mengembalikan Barang?
                      </a>
                    </h6><hr style="background-color: yellow;">
                  </div>

                  <div id="collapse-17" class="collapse" role="tabpanel" aria-labelledby="heading-17" data-parent="#accordion-6">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-12">
                          Kembali ke operator dan bawa barang yang dipinjam.
                          Lalu kembalikan barang yang dipinjam.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="card">
                  <div class="card-header" role="tab" id="heading-18">
                    <h6 class="mb-0">
                      <a class="collapsed" data-toggle="collapse" href="#collapse-18" aria-expanded="true" aria-controls="collapse-18">
                        Bagaimana Bila Barang Hilang?
                      </a>
                    </h6><hr style="background-color: yellow;">
                  </div>

                  <div id="collapse-18" class="collapse show" role="tabpanel" aria-labelledby="heading-18" data-parent="#accordion-6">
                    <div class="card-body">
                      <b> GANTI RUGI LAH. </b>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->

<?php
include_once 'desain/kaki.php';
?>
