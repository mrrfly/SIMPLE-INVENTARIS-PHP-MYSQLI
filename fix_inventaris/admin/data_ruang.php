<?php
include_once 'desain/kepala.php';
?>

<div class="main-panel">
  <div class="content-wrapper">
    <center>
      <div class="template-demo text-white">
        <a class="btn btn-primary btn-icon-text" href="tambah_ruang.php">
          <i class="mdi mdi-file-check btn-icon-prepend"></i>
          + Ruang
        </a>
      </div>
  </center><br>
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data Ruang</h4>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table">
                <thead class="text-center">
                  <tr>
                      <th>No</th>
                      <th>Nama Ruang</th>
                      <th>Kode Ruang</th>
                      <th>Aksi</th>
                  </tr>
                </thead>

                <?php
  							$query = "SELECT * FROM ruang";
                $no=1;
  							$sql = mysqli_query($koneksi, $query);
  							while ($data=mysqli_fetch_array($sql))
  							{
  							?>

                <tbody class="text-center">
                  <tr>

                    <td><?php echo $no; ?></td>
    								<td><?php echo $data['nama_ruang']; ?></td>
    								<td><?php echo $data['kode_ruang']; ?></td>
    								<td><a href="edit_ruang.php?id_ruang=<?php echo $data['id_ruang']; ?>" class="btn btn-success">Edit</a></td>
                    <td><a href="hapus_ruang.php?id_ruang=<?php echo $data['id_ruang']; ?>" class="btn btn-danger">Hapus</a></td>

                  </tr>
                </tbody>
                <?php
                $no++;
  								}
  							?>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php
include_once 'desain/kaki.php';
?>
