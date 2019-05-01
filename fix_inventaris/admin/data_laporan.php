<?php
include_once 'desain/kepala.php';
$awal = isset($_POST['awal'])? $_POST['awal']:'';
$akhir = isset($_POST['akhir'])? $_POST['akhir']:'';
$status = isset($_POST['status'])? $_POST['status']:'';
?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data Laporan</h4>
        <p>
        <a href="laporan.php" class="btn btn-inverse-danger">Kembali</a>
        </p>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table">
                <thead class="text-center">
                  <tr>
                      <th>No</th>
                      <th>No.Detail</th>
                      <th>No.Pinjaman</th>
                      <th>NIP/NIS</th>
                      <th>Nama Peminjam</th>
                      <th>Nama Barang</th>
                      <th>Tanggal Pinjam</th>
                      <th>Tanggal Kembali</th>
                      <th>Jumlah Pinjam</th>
                  </tr>
                </thead>

                <?php 
                if ($status=='dipinjam') {
                  $query2 = mysqli_query($koneksi, "SELECT * FROM pinjam_detail WHERE status='dipinjam' AND tgl_pinjam BETWEEN '$awal' AND '$akhir'");
                  while ($data2 = mysqli_fetch_array($query2))
                  {
                ?>

                <tbody class="text-center">
                  <tr>

                    <form action="proses_pengembalian.php" method="post">

                      <td><?php echo $no; ?></td>
                      
                      <td><?php echo $data2['no_detail']; ?></td>
                      <td><?php echo $data2['no_pinjam']; ?></td>
                      <?php
                      $query3 = mysqli_query($koneksi, "SELECT * FROM pinjam WHERE no_pinjam='".$data2['no_pinjam']."'");
                      $data3 = mysqli_fetch_array($query3);
                      $nip = $data3['nip'];
                      ?>

                      <td><?php echo $nip; ?></td>
                      <?php
                      $query4 = mysqli_query($koneksi, "SELECT * FROM peminjam WHERE nip='$nip'");
                      $data4 = mysqli_fetch_array($query4);
                      ?>
                      <td><?php echo $data4['nama_peminjam']; ?></td>

                      <?php
                      $query5 = mysqli_query($koneksi, "SELECT * FROM inventaris WHERE no_inventaris='".$data2['        no_inventaris']."'");
                      $data5 = mysqli_fetch_array($query5);
                      ?>
                     <td><?php echo $data1['nama_barang']; ?>
                     <input type="hidden" name="no_inventaris" value="<?php echo $data1['no_inventaris']; ?>">
                      </td>

                      <td><?php echo $data5['nama_barang']; ?></td>
                      <td><?php echo $data2['tgl_pinjam']; ?></td>
                      <td>-</td>
                      <td><?php echo $data2['jml']; ?>
                      <input type="hidden" name="jml" value="<?php echo $data['jml']; ?>">
                      </td>

                      <td><button name="input" class="btn btn-primary">Kembalikan</button></td>
                      <td><a href="hapus_peminjaman.php?no_detail=<?php echo $data['no_detail']; ?>" class="btn btn-danger">Hapus</a></td>

                    </form>
                  </tr>
                </tbody>
                <?php
                $no++;
              }
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
