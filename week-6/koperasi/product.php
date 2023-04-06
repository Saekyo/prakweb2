<!-- /.content-header -->
<?php 

$product = new Product();
$data = $product->getAll();

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
              <li class="breadcrumb-item active">Produk</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
<section class="content">
<h2>ini adalah halaman produk</h2>

<div class="row">
  <div class="col-12">
    <table class="table table-striped table-responsive">
      <thead>
        <tr>
          <th>No</th>
          <th>Kode</th>
          <th>Nama</th>
          <th>Harga Beli</th>
          <th>Harga Jual</th>
          <th>Stok</th>
          <th>Min Stok</th>
          <th>Jenis Produk</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $no=1;
        foreach ($data as $value) {
        ?>
        <tr>
          <td><?= $no ?></td>
          <td><?= $value ['kode'] ?></td>
          <td><?= $value ['nama'] ?></td>
          <td><?= $value ['harga_beli'] ?></td>
          <td><?= $value ['harga_jual'] ?></td>
          <td><?= $value ['stok'] ?></td>
          <td><?= $value ['min_stok'] ?></td>
          <td><?= $value ['nama_jenis_produk'] ?></td>
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

