<?php
include_once 'desain/kepala.php';
?>

<div class="main-panel">
  <div class="content-wrapper">
    <center>
      <div class="template-demo text-white">
        <a class="btn btn-primary btn-icon-text" href="tambah_peminjam.php">
          <i class="mdi mdi-file-check btn-icon-prepend"></i>
          + Peminjam
        </a>
      </div>
  </center><br>
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data Peminjam</h4>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table">
                <thead class="text-center">
                  <tr>
                      <th>No</th>
                      <th>NIP/NIS</th>
                      <th>Nama</th>
                      <th>Kelas</th>
                      <th>No Telepon</th>
                      <th>Aksi</th>
                  </tr>
                </thead>

                <?php
  							$query = "SELECT * FROM peminjam";
  							$sql = mysqli_query($koneksi, $query);
                $no=1;
  							while ($data=mysqli_fetch_array($sql))
  							{
  							?>

                <tbody class="text-center">
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data['nip']; ?></td>
    								<td><?php echo $data['nama_peminjam']; ?></td>
    								<td><?php echo $data['kelas']; ?></td>
    								<td><?php echo $data['no_telp']; ?></td>
    								<td><a href="edit_peminjam.php?nip=<?php echo $data['nip']; ?>" class="btn btn-success">Edit</a></td>
                    <td><a href="hapus_peminjam.php?nip=<?php echo $data['nip']; ?>" class="btn btn-danger">Hapus</a></td>
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
