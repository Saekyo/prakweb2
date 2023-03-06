<?php  

	$ns1 = [ "id" => 1, "nim" => "01101", "uts" => 80, "uas" => 90, "tugas" => 95 ];
	$ns2 = [ "id" => 2, "nim" => "02202", "uts" => 85, "uas" => 93, "tugas" => 80 ];
	$ns3 = [ "id" => 3, "nim" => "03303", "uts" => 87, "uas" => 95, "tugas" => 85 ];

	$arNilai = [$ns1, $ns2, $ns3];
?>

	<center><h3>Daftar Nilai Siswa</h3></center>
 	<table border="1" width="100%">
		<thead>
 			<tr>
 				<th>No</th>
 				<th>NIM</th>
 				<th>UTS</th>
 				<th>UAS</th>
 				<th>Tugas</th>
 				<th>Nilai Akhir</th>
 			</tr>
 		</thead>
 		<tbody>
	 		<?php
			 $no = 1;
			 foreach($arNilai as $nilai){
			 echo '<tr>';
			 echo '<td>'.$no.'</td>';
			 echo '<td>'.$nilai['nim'].'</td>';
			 echo '<td>'.$nilai['uts'].'</td>';
			 echo '<td>'.$nilai['uas'].'</td>';
			 echo '<td>'.$nilai['tugas'].'</td>';
			 //Tugas rata - rata
			 $nilaiAkhir = ($nilai['uts'] + $nilai['uas']+$nilai['tugas'])/3;
			 echo '<td>'.number_format($nilaiAkhir,2,',','.').'</td>';
			 echo '<tr/>';
			 $no++;
			 }
			?>
	 	</tbody>
 	</table

