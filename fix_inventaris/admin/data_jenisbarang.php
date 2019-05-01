<?php
include_once 'desain/kepala.php';
?>

<div class="main-panel">
  <div class="content-wrapper">
    <center>
      <div class="template-demo text-white">
        <a class="btn btn-primary btn-icon-text" href="tambah_jenis.php">
          <i class="mdi mdi-file-check btn-icon-prepend"></i>
          + Jenis Barang
        </a>
      </div>
  </center><br>
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Jenis Barang</h4>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table">
                <thead class="text-center">
                  <tr>
                      <th>No</th>
                      <th>ID Jenis</th>
                      <th>Nama Jenis</th>
                      <th>Keterangan</th>
                      <th>Aksi</th>
                  </tr>
                </thead>

                <?php
  							$query = "SELECT * FROM jenis_inventaris";
  							$sql = mysqli_query($koneksi, $query);
                $no=1;
  							while ($data=mysqli_fetch_array($sql))
  							{
  							?>

                <tbody class="text-center">
                  <tr>

                    <td><?php echo $no; ?></td>
    								<td><?php echo $data['id_jenis']; ?></td>
    								<td><?php echo $data['nama_jenis']; ?></td>
    								<td><?php echo $data['ket_jenis']; ?></td>
    								<td><a href="edit_jenis.php?id_jenis=<?php echo $data['id_jenis']; ?>" class="btn btn-success">Edit</a></td>
                    <td><a href="hapus_jenis.php?id_jenis=<?php echo $data['id_jenis']; ?>" class="btn btn-danger">Hapus</a></td>

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
