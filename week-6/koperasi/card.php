<!-- /.content-header -->
<?php 

$card = new Card();
$data = $card->getAll();

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
              <li class="breadcrumb-item active">Kartu</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
<section class="content">
<h2>ini adalah halaman kartu</h2>

<div class="row">
  <div class="col-12">
    <table class="table table-striped table-responsive">
      <thead>
        <tr>
          <th>No</th>
          <th>Kode</th>
          <th>Nama</th>
          <th>Diskon</th>
          <th>Iuran</th>
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
          <td><?= $value ['diskon'] ?></td>
          <td><?= $value ['iuran'] ?></td>
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

