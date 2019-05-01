<?php
include_once 'desain/kepala.php';
?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12">

        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tambah Peminjam</h4>
            <p class="card-description">
              <a href="data_peminjam.php" class="btn btn-lg btn-inverse-danger">Kembali</a>
            </p>

            <form class="forms-sample" method="post" action="proses_tambahpeminjam.php">

              <div class="form-group">
                <label>NIP/NIS</label>
                <input name="nip" type="number" class="form-control" placeholder="Misal: 1016006970" required>
              </div>

              <div class="form-group">
                <label>Nama Peminjam</label>
                <input name="nama_peminjam" type="text" class="form-control" placeholder="Misal: OPERATORKU" required>
              </div>

              <div class="form-group">
                <label>Kelas</label>
                <input name="kelas" type="text" class="form-control" placeholder="Misal: 12 TKR 9" required>
              </div>

              <div class="form-group">
                <label>Telepon</label>
                <input name="no_telp" type="number" class="form-control" placeholder="Misal: 8978789" required>
              </div>

              <div class="form-check form-check-flat form-check-primary">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" required>
                  Setuju?
                </label>
              </div>

              <button name="input" type="submit" class="btn btn-primary mr-2">Submit</button>
              <a href="data_peminjam.php" class="btn btn-inverse-danger">Kembali</a>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>

  <?php
  include_once 'desain/kaki.php';
  ?>
