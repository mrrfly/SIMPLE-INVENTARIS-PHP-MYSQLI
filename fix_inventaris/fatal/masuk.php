<?php
include_once 'desain/kepala.php';
?>

<div class="container-scroller">
  <div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="content-wrapper d-flex align-items-center auth">
      <div class="row w-100">
        <div class="col-lg-4 mx-auto">
          <div class="auth-form-light text-left p-5">
            <h2 align="center">Masuk Dulu Gan</h2><hr>

            <form class="pt-3" method="post" action="proses_masuk.php">
              
              <div class="form-group">
                <input required type="text" name="username" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
              </div>

              <div class="form-group">
                <input required type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Password">
                <button type="button" class="btn btn-sm btn-block" onclick="lihat()">Lihat Password</button>
              </div>

              <hr>

              <div class="mt-3">
                <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">Masuk!</button>
                </div>

              <div class="my-2 d-flex justify-content-between align-items-center">
                <div class="form-check">
                  <label class="form-check-label text-muted">
                    <input type="checkbox" class="form-check-input">
                    Tetap Masuk
                  </label>
                </div>
                <a href="#" class="auth-link text-black">Lupa password?</a>
              </div>

            </form>

          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
  </div>
  <!-- page-body-wrapper ends -->
</div>

<?php
include_once 'desain/kaki.php';
?>
