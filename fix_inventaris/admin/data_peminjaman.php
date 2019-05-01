<?php
include_once 'desain/kepala.php';
?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data Peminjaman</h4>
        <p>
        <a href="data_pengembalian.php" class="btn btn-inverse-danger">Dikembalikan</a>
        <a href="data_barang.php" class="btn btn-inverse-info">Pinjam</a>
        </p>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table">
                <thead class="text-center">
                  <tr>
                      <th>No</th>
                      <th>NIP</th>
                      <th>Peminjam</th>
                      <th>Barang</th>
                      <th>Tanggal Pinjam</th>
                      <th>Jumlah</th>
                      <th>Aksi</th>
                  </tr>
                </thead>

                <?php
  							$query = "SELECT * FROM pinjam_detail WHERE status='dipinjam'";
  							$sql = mysqli_query($koneksi, $query);
                $no=1;
  							while ($data = mysqli_fetch_array($sql)) {
  							$no_inventaris = $data['no_inventaris'];
  							$no_pinjam = $data['no_pinjam'];
  							?>

                <tbody class="text-center">
                  <tr>

                    <form action="proses_pengembalian.php" method="post">

                      <td><?php echo $no; ?>
                        <input type="hidden" name="no_pinjam" value="<?php echo $data['no_pinjam']; ?>">
                      </td>
      								<?php
      								$query2 = mysqli_query($koneksi, "SELECT * FROM pinjam WHERE no_pinjam='$no_pinjam'");
      								$data2 = mysqli_fetch_array($query2);
      								$nip = $data2['nip'];
      								?>

      								<td><?php echo $nip; ?></td>
      								<?php
      								$query3 = mysqli_query($koneksi, "SELECT * FROM peminjam WHERE nip='$nip'");
      								$data3 = mysqli_fetch_array($query3);
      								?>

      								<td><?php echo $data3['nama_peminjam']; ?></td>
      								<?php
      								$query1 = mysqli_query($koneksi, "SELECT * FROM inventaris WHERE no_inventaris='$no_inventaris'");
      								$data1 = mysqli_fetch_array($query1);
      								?>

      								<td><?php echo $data1['nama_barang']; ?><input type="hidden" name="no_inventaris" value="<?php echo $data1['no_inventaris']; ?>"></td>
      								<td><?php echo $data['tgl_pinjam']; ?></td>
      								<td><?php echo $data['jml']; ?><input type="hidden" name="jml" value="<?php echo $data['jml']; ?>"></td>
      								<td><button name="input" class="btn btn-primary">Kembalikan</button></td>
                      <td><a href="hapus_peminjaman.php?no_detail=<?php echo $data['no_detail']; ?>" class="btn btn-danger">Hapus</a></td>

                    </form>
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
