<?php
include_once 'desain/kepala.php';
?>

<div class="main-panel">
  <div class="content-wrapper">
    <center>
      <div class="template-demo text-white">
        <a class="btn btn-primary btn-icon-text" href="tambah_operator.php">
          <i class="mdi mdi-file-check btn-icon-prepend"></i>
          + Operator
        </a>
      </div>
  </center><br>
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data Operator</h4>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table">
                <thead class="text-center">
                  <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th>Aksi</th>
                  </tr>
                </thead>

                <?php
  							$query = "SELECT * FROM petugas WHERE level='operator'";
  							$sql = mysqli_query($koneksi, $query);
                $no=1;
  							while ($data=mysqli_fetch_array($sql))
  							{
  							?>

                <tbody class="text-center">
                  <tr>

                    <td><?php echo $no; ?></td>
    								<td><?php echo $data['nama_petugas']; ?></td>
    								<td><?php echo $data['username']; ?></td>
    								<td><?php echo $data['password']; ?></td>
    								<td><a href="edit_operator.php?id_petugas=<?php echo $data['id_petugas']; ?>" class="btn btn-success">Edit</a></td>
                    <td><a href="hapus_operator.php?id_petugas=<?php echo $data['id_petugas']; ?>" class="btn btn-danger">Hapus</a></td>
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
