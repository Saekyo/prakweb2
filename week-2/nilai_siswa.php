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

        
        <?php
            $nama = $_POST['nama'];
            $matkul = $_POST['matkul'];
            $nilai_uts = $_POST['nilai_uts'];
            $nilai_uas = $_POST['nilai_uas'];
            $nilai_tugas = $_POST['nilai_tugas'];
                        
            $nilai_akhir = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;
            
            

            require __DIR__ . '/function.php';

            $keterangan = kelulusan($nilai_akhir);
            $grade = grade($nilai_akhir);
            $predikat = predikat($grade);


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
                <th>Status</th>
                <th>Keterangan</th>
                <th>Predikat</th>
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
             echo '<td>'.$grade.'</td>';
             echo '<td>'.$keterangan.'</td>';
             echo '<td>'.$predikat.'</td>';
             echo '<tr/>';
             
            ?>
        </tbody>
    </table>
        
    </div>
</body>
</html>