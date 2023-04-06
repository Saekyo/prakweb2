<!-- /.content-header -->
<?php 

$purchase = new Purchase();
$data = $purchase->getAll();

?>
<!-- Main content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?page=home.php">Home</a></li>
              <li class="breadcrumb-item active">Pembelian</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
<section class="content">
<h2>ini adalah halaman Pembelian</h2>

<div class="row">
  <div class="col-12">
    <table class="table table-striped table-responsive">
      <thead>
        <tr>
          <th>No</th>
          <th>Kode</th>
          <th>Nama Produk</th>
          <th>Jumlah</th>
          <th>Harga</th>          
          <th>Nama Vendor</th>          
          <th>Tanggal</th>          
        </tr>
      </thead>
      <tbody>
        <?php 
        $no=1;
        foreach ($data as $value) {
        ?>
        <tr>
          <td><?= $no ?></td>
          <td><?= $value ['nomor'] ?></td>
          <td><?= $value ['nama_produk'] ?></td>
          <td><?= $value ['jumlah'] ?></td>
          <td><?= $value ['harga'] ?></td>
          <td><?= $value ['nama_vendor'] ?></td>
          <td><?= $value ['tanggal_pesanan'] ?></td>
        </tr>

        <?php
         $no++;
        }
         ?>
        
      </tbody>
    </table>
  </div>
</div>

</section>
<!-- /.content -->
</div>

