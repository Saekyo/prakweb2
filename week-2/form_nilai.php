<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Document</title>
</head>
<body>
    <div class="container">
        <h3 class="text-center">Form Nilai Mahasiswa</h3>
        <hr>

        <form method="POST" action="nilai_siswa.php">
          <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama</label> 
            <div class="col-8">
              <input id="nama" name="nama" placeholder="Masukan Nama Anda" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
            <div class="col-8">
              <select id="matkul" name="matkul" class="custom-select">
                <option value="DDP">Dasar - Dasar Pemrograman</option>
                <option value="WEB">Pemrograman Web</option>
                <option value="BASDAT">Basis Data</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="nilai_uts" class="col-4 col-form-label">UTS</label> 
            <div class="col-8">
              <input id="nilai_uts" name="nilai_uts" placeholder="Masukan Nilai UTS" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="nilai_uas" class="col-4 col-form-label">UAS</label> 
            <div class="col-8">
              <input id="nilai_uas" name="nilai_uas" placeholder="Masukan Nilai UAS" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="nilai_tugas" class="col-4 col-form-label">Tugas</label> 
            <div class="col-8">
              <input id="nilai_tugas" name="nilai_tugas" placeholder="Masukan Nilai Tugas" type="text" class="form-control">
            </div>
          </div> 
          <div class="form-group row">
            <div class="offset-4 col-8">
              <!-- <button name="submit" type="submit" class="btn btn-primary">Submit</button> -->
              <input type="submit" name="proses" value="Simpan" class="btn btn-primary">
            </div>
          </div>
        </form>
        <!-- <?php
            $nama = $_GET['nama'];
            $matkul = $_GET['matkul'];
            $nilai_uts = $_GET['nilai_uts'];
            $nilai_uas = $_GET['nilai_uas'];
            $nilai_tugas = $_GET['nilai_tugas'];
            
            echo ("Nama: $nama <br>");
            echo ("Mata Kuliah: $matkul <br>");
            echo ("Nilai UTS: $nilai_uts <br>");
            echo ("Nilai UAS: $nilai_uas <br>");
            echo ("Nilai Tugas: $nilai_tugas <br>");

        ?>
        <br>
        <table border="1" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Mata Kuliah</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Tugas</th>
                <th>Nilai Akhir</th>
            </tr>
        </thead>
        <tbody>
            <?php
             $no = 1;
             echo '<tr>';
             echo '<td>'.$no.'</td>';
             echo '<td>'.$nama.'</td>';
             echo '<td>'.$matkul.'</td>';
             echo '<td>'.$nilai_uts.'</td>';
             echo '<td>'.$nilai_uas.'</td>';
             echo '<td>'.$nilai_tugas.'</td>';
             //Tugas rata - rata
             $nilaiAkhir = ($nilai_uts + $nilai_uas + $nilai_tugas)/3;
             echo '<td>'.number_format($nilaiAkhir,2,',','.').'</td>';
             echo '<tr/>';
             
            ?>
        </tbody>
    </table> -->
        
    </div>
</body>
</html>