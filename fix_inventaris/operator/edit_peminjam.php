<?php
include_once 'desain/kepala.php';
$nip = isset($_GET['nip'])? $_GET['nip']:'';
$query3 = "SELECT * FROM peminjam WHERE nip='$nip'";
$sql3 = mysqli_query($koneksi, $query3);
$data3 = mysqli_fetch_array($sql3);
?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Edit Peminjam</h4>
            <p class="card-description">
              <a href="data_peminjam.php" class="btn btn-lg btn-inverse-danger">Kembali</a>
            </p>

            <form class="forms-sample" method="post" action="proses_editpeminjam.php">

              <div class="form-group">
                <label>NIP/NIS</label>
                <input value="<?php echo $data3['nip'];?>" name="nip" type="text" class="form-control" required>
              </div>

              <div class="form-group">
                <label>Nama Peminjam</label>
                <input value="<?php echo $data3['nama_peminjam'];?>" name="nama_peminjam" type="text" class="form-control" required>
              </div>

              <div class="form-group">
                <label>Kelas Peminjam</label>
                <input value="<?php echo $data3['kelas'];?>" name="kelas" type="text" class="form-control" required>
              </div>

              <div class="form-group">
                <label>Telepon</label>
                <input value="<?php echo $data3['no_telp'];?>" name="no_telp" type="text" class="form-control" required>
              </div>


              <div class="form-check form-check-flat form-check-primary">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" required>
                  Setuju?
                </label>
              </div>

              <button name="edit" type="submit" class="btn btn-primary mr-2">Edit</button>
              <a href="data_barang.php" class="btn btn-inverse-danger">Kembali</a>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>

<?php
include_once 'desain/kaki.php';
?>
