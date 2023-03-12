<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Form Registrasi Data Science</title>
</head>
<body>
      <h4 class="text-center">Form Registrasi Data Science</h4>

  <div class="container">
<form method="POST" action="form-registrasi.php">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Masukan nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <input id="nim" name="nim" placeholder="Masukan NIM" type="number" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="laki-laki"> 
        <label for="jk_0" class="custom-control-label">Laki - Laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="perempuan"> 
        <label for="jk_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="email" name="email" placeholder="Masukan Email" type="email" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="program-studi" class="col-4 col-form-label">Program Studi</label> 
    <div class="col-8">
      <select id="program-studi" name="program-studi" class="custom-select">
        <option disabled selected>-- Pilih Program Studi --</option>
        <option value="SI">Sistem Informasi</option>
        <option value="TI">Teknik Informatika</option>
        <option value="BD">Bisnis Digital</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Skills</label> 
    <div class="col-8">
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skills[]" id="skills[]_0" type="checkbox" class="custom-control-input" value="html"> 
        <label for="skills[]_0" class="custom-control-label">HTML</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skills[]" id="skills[]_1" type="checkbox" class="custom-control-input" value="css"> 
        <label for="skills[]_1" class="custom-control-label">CSS</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skills[]" id="skills[]_2" type="checkbox" class="custom-control-input" value="js"> 
        <label for="skills[]_2" class="custom-control-label">JavaScript</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skills[]" id="skills[]_3" type="checkbox" class="custom-control-input" value="bootstrap"> 
        <label for="skills[]_3" class="custom-control-label">Bootstrap</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skills[]" id="skills[]_4" type="checkbox" class="custom-control-input" value="php"> 
        <label for="skills[]_4" class="custom-control-label">PHP</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skills[]" id="skills[]_5" type="checkbox" class="custom-control-input" value="py"> 
        <label for="skills[]_5" class="custom-control-label">Python</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skills[]" id="skills[]_6" type="checkbox" class="custom-control-input" value="java"> 
        <label for="skills[]_6" class="custom-control-label">Java</label>
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form> 

 <?php
          function predikat( $nilai ) {
            if ( $nilai >= 100 && $nilai <= 160){
              return "Sangat Baik";
            } else if ( $nilai >= 60 && $nilai <= 100){
              return "Baik";
            } else if ( $nilai >= 40 && $nilai <= 60){
              return "Cukup";
            } else if ( $nilai >= 0 && $nilai <= 40){
              return "Kurang";
            } else {
              return "Tidak Memadai";
            }
          }

          if (isset($_POST['submit'])) {
              $nama = $_POST['nama'];
              $nim = $_POST['nim'];
              $jk = $_POST['jk'];
              $program_studi = $_POST['program-studi'];
              $skills = $_POST['skills'];
              $email = $_POST['email'];

              $nilai = 0;

              $skills_data = [];
              foreach($skills as $val) {
                array_push($skills_data,$val);
              }

              foreach($skills as $data){
                switch($data){
                  case 'html' :
                    $nilai += 10;
                  break;
                  case 'css' :
                    $nilai += 10;
                  break;
                  case 'js' :
                    $nilai += 20;
                  break;
                  case 'bootstrap' :
                    $nilai += 10;
                  break;
                  case 'php' :
                    $nilai += 30;
                  break;
                  case 'py' :
                    $nilai += 30;
                  break;
                  case 'java' :
                    $nilai += 50;
                  break;
                  default:
                    $nilai += 0;
                  break;
                }
              }

              $predikat = predikat($nilai);

            }

           

            ?>

            <br>
        <table class="text-center" border="1" width="100%">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jenis Kelamin</th>
                <th>Email</th>
                <th>Program Studi</th>
                <th>Skills</th>
                <th>Nilai</th>
                <th>Predikat</th>
            </tr>
        </thead>
        <tbody>
            <?php
             echo '<tr>';
             echo '<td>'.$nama.'</td>';
             echo '<td>'.$nim.'</td>';
             echo '<td>'.$jk.'</td>';
             echo '<td>'.$email.'</td>';
             echo '<td>'.$program_studi.'</td>';
             echo '<td>'.join(', ', $skills_data).'</td>';
             echo '<td>'.$nilai.'</td>';
             echo '<td>'.$predikat.'</td>';

             echo '<tr/>';
            ?>
        </tbody>
    </table>
    </div>
      
</html>