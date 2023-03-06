<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Belanja Online</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <h3 class="">Belanja Online</h3>
        <hr>

        <form class="ml-5" method="POST" action="form_belanja.php">
          <div class="form-group row">
            <label for="customer" class="col-4 col-form-label">Customer</label> 
            <div class="col-8">
              <input required id="customer" name="customer" placeholder="Masukan Nama Customer" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-4">Pilih Produk</label> 
            <div class="col-8">
              <div class="custom-control custom-radio custom-control-inline">
                <input required name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
                <label for="produk_0" class="custom-control-label">TV</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input required name="produk" id="produk_1" type="radio" class="custom-control-input" value="KULKAS"> 
                <label for="produk_1" class="custom-control-label">KULKAS</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input required name="produk" id="produk_2" type="radio" class="custom-control-input" value="MESIN CUCI"> 
                <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
            <div class="col-8">
              <input required id="jumlah" name="jumlah" placeholder="Masukan Jumlah Produk" type="number" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <div class="offset-4 col-8">
              <input type="submit" name="proses" value="Kirim" class="btn btn-success">
            </div>
          </div>
        </form>
        <?php
          if ($_SERVER['REQUEST_METHOD'] === 'POST') {
              $nama_customer = $_POST['customer'];
              $nama_produk = $_POST['produk'];
              $jumlah_beli = $_POST['jumlah'];
            } else  {
              $nama_customer = "Data Belum Dimasukan";
              $nama_produk = "Data Belum Dimasukan";
              $jumlah_beli = "Data Belum Dimasukan";
              $total_belanja = "Data Belum Dimasukan";
            }

          if ( $nama_produk == "TV" ) {
            $total_belanja = "Rp " . number_format(4200000 * $jumlah_beli, 0,',','.') . ",-";

          } else if ( $nama_produk == "KULKAS") {
            $total_belanja = "Rp " . number_format(3100000 * $jumlah_beli, 0,',','.') . ",-";
          } else if ( $nama_produk == "MESIN CUCI") {
            $total_belanja = "Rp " . number_format(3800000 * $jumlah_beli, 0,',','.') . ",-";
          } else {
            $total_Belanja = "Produk Tidak Diketahui";
          }

            

        ?>
        <br>
        <table class="text-center" border="1" width="100%">
        <thead>
            <tr>
                <th>Nama Customer</th>
                <th>Produk</th>
                <th>Jumlah Beli</th>
                <th>Total Belanja</th>
            </tr>
        </thead>
        <tbody>
            <?php
             echo '<tr>';
             echo '<td>'.$nama_customer.'</td>';
             echo '<td>'.$nama_produk.'</td>';
             echo '<td>'.$jumlah_beli.'</td>';
             echo '<td>'.$total_belanja.'</td>';
             echo '<tr/>';
            ?>
        </tbody>
    </table>
    </div>
      <div class="col-lg-5">
        <table class="text-center" border="1" width="100%">
          <thead>
              <tr class="bg-primary text-white">
                  <th>Daftar Harga</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                <td>TV : 4.200.000</td>
              <tr/>

              <tr>
                <td>Kulkas : 3.100.000</td>
              <tr/>
              <tr>
                <td>Mesin Cuci : 3.800.000</td>
              <tr/>
          </tbody>
          <tfoot>
              <tr class="bg-primary text-white">
                <td>Harga Dapat Berubah Setiap Saat</td>
              <tr/>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
</html>