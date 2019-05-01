<?php
include_once 'desain/kepala.php';
?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12">

        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tambah Operator</h4>
            <p class="card-description">
              <a href="data_operator.php" class="btn btn-lg btn-inverse-danger">Kembali</a>
            </p>

            <form class="forms-sample" method="post" action="proses_tambahoperator.php">

                <input name="id_petugas" type="hidden" class="form-control" required>

              <div class="form-group">
                <label>Nama Operator</label>
                <input name="nama_petugas" type="text" class="form-control" placeholder="Misal: OPERATORKU" required>
              </div>

              <div class="form-group">
                <label>Username Operator</label>
                <input name="username" type="text" class="form-control" placeholder="Misal: OP2" required>
              </div>

              <div class="form-group">
                <label>Password Operator</label>
                <input name="password" type="password" class="form-control" placeholder="Misal: OPOPOOP" required>
              </div>

              <input type="hidden" name="level">

              <div class="form-check form-check-flat form-check-primary">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" required>
                  Setuju?
                </label>
              </div>

              <button name="input" type="submit" class="btn btn-primary mr-2">Submit</button>
              <a href="data_operator.php" class="btn btn-inverse-danger">Kembali</a>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>

  <?php
  include_once 'desain/kaki.php';
  ?>
