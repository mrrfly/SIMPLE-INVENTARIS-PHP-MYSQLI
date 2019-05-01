<?php
include_once 'desain/kepala.php';
$id_petugas = isset($_GET['id_petugas'])? $_GET['id_petugas']:'';
$query11 = "SELECT * FROM petugas WHERE id_petugas='$id_petugas'";
$sql11 = mysqli_query($koneksi, $query11);
$data11 = mysqli_fetch_array($sql11);
?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Edit Admin</h4>
            <p class="card-description">
              <a href="data_admin.php" class="btn btn-lg btn-inverse-danger">Kembali</a>
            </p>

            <form class="forms-sample" method="post" action="proses_editadmin.php">

              <div class="form-group">
                <input name="id_petugas" type="hidden" class="form-control" required>
              </div>

              <div class="form-group">
                <label>Nama Admin</label>
                <input value="<?php echo $data11['nama_petugas'];?>" name="nama_petugas" type="text" class="form-control" required>
              </div>

              <div class="form-group">
                <label>Username</label>
                <input value="<?php echo $data11['username'];?>" name="username" type="text" class="form-control" required>
              </div>

              <div class="form-group">
                <label>Password</label>
                <input value="<?php echo $data11['password'];?>" name="password" type="text" class="form-control" required>
              </div>


              <div class="form-check form-check-flat form-check-primary">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" required>
                  Setuju?
                </label>
              </div>

              <button name="edit" type="submit" class="btn btn-primary mr-2">Edit</button>
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
