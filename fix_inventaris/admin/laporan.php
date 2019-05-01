<?php
include_once 'desain/kepala.php';
?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12">

        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Data Laporan</h4>

            <form class="forms-sample" method="post" action="data_laporan.php">

                <input name="id_petugas" type="hidden" class="form-control" required>

              <div class="form-group">
                <label>Tanggal Awal</label>
                <input name="awal" type="date" class="form-control" placeholder="Klik"> 
              </div>

              <div class="form-group">
                <label>Tanggal Akhir</label>
                  <input name="akhir" type="date" class="form-control" placeholder="Klik">                
              </div>

              <div class="form-group">
                <label>Status</label>
                <select name="status" class="js-example-basic-single" style="width:100%">
                    <option value="Dipinjam">Dipinjam</option>
                    <option value="Diberikan">Diberikan</option>
                </select>
              </div>

              <input type="hidden" name="level">

              <div class="form-check form-check-flat form-check-primary">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" required>
                  Setuju?
                </label>
              </div>

              <button name="input" type="submit" class="btn btn-primary mr-2">Submit</button>
              <a href="data_admin.php" class="btn btn-inverse-danger">Kembali</a>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>

  <?php
  include_once 'desain/kaki.php';
  ?>
