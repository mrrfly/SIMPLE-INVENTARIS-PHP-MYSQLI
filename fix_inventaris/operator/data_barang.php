<?php
include_once 'desain/kepala.php';
?>

<div class="main-panel">
  <div class="content-wrapper">
    <center>
      <div class="template-demo text-white">
        <a class="btn btn-primary btn-icon-text" href="tambah_barang.php">
          <i class="mdi mdi-file-check btn-icon-prepend"></i>
          + Barang
        </a>
        <a class="btn btn-info btn-icon-text" href="tambah_jenis.php">
          <i class="mdi mdi-file-check btn-icon-append"></i>
          + Jenis Barang

        </a>
        <a class="btn btn-success btn-icon-text" href="tambah_ruang.php">
          <i class="mdi mdi-alert btn-icon-prepend"></i>
          + Ruang
        </a>
      </div>
  </center><br>
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data Barang</h4>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table">
                <thead class="text-center">
                  <tr>
                      <th>No</th>
                      <th>Barang</th>
                      <th>Jenis</th>
                      <th>Kondisi</th>
                      <th>Keterangan</th>
                      <th>Ruang</th>
                      <th>Stok</th>
                      <th>Aksi</th>
                  </tr>
                </thead>

                <?php
    							$query = "SELECT * FROM inventaris";
    							$sql = mysqli_query($koneksi, $query);
                  $no=1;
    							while ($data=mysqli_fetch_array($sql)) {
    							$id_jenis = $data['id_jenis'];
    							$id_ruang = $data['id_ruang'];
    							$id_petugas = $data['id_petugas'];
    							$stock = $data['stock'];
    							if ($stock==0) {
    							$s = 'Barang Tidak Tersedia';
    							}else{
    							$s = $stock;
    							}
    							?>

                <tbody class="text-center">
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data['nama_barang']; ?></td>
                    <?php
                    $query1 = "SELECT * FROM jenis_inventaris WHERE id_jenis='$id_jenis'";
                    $sql1 = mysqli_query($koneksi, $query1);
                    $data1 = mysqli_fetch_array($sql1);
                    ?>

                    <td><?php echo $data1['nama_jenis']; ?></td>
                    <td><?php echo $data['kondisi']; ?></td>
                    <td><?php echo $data['ket_barang']; ?></td>

                    <?php
    								$query2 = "SELECT * FROM ruang WHERE id_ruang='$id_ruang'";
    								$sql2 = mysqli_query($koneksi, $query2);
    								$data2 = mysqli_fetch_array($sql2);
    								?>
                    <td><?php echo $data2['nama_ruang']; ?></td>

                    <td><?php echo $s; ?></td>
                    <td><a href="tambah_peminjaman.php?no_inventaris=<?php echo $data['no_inventaris']; ?>" class="btn btn-info">Pinjam</a></td>
                    <td><a href="edit_barang.php?no_inventaris=<?php echo $data['no_inventaris']; ?>" class="btn btn-success">Edit</a></td>
                    <td><a href="hapus_barang.php?no_inventaris=<?php echo $data['no_inventaris']; ?>" class="btn btn-danger">Hapus</a></td>
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
