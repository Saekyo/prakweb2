<?php
 	function kelulusan( $nilai_akhir ) {
 		if ( $nilai_akhir < 55 ){
 			return "Tidak Lulus";
 		} else {
 			return "Lulus";
 		}
 	}

 	function grade ( $nilai_akhir ) {
 		if ($nilai_akhir <= 35){
              return "E";
            } else if ( $nilai_akhir <= 55) {
              return "D";
            } else if ( $nilai_akhir <= 69) {
              return "C";
            } else if ( $nilai_akhir <= 84) {
              return "B";
            } else if ( $nilai_akhir <= 100) {
              return "A";
            } else {
              return "I (Anda tidak ada nilai)";
            }
 	}

 	function predikat ($grade) {
 		switch ($grade) {
 			case "E":
 				return "Sangat Kurang";
 				break;
 			case "D":
 				return "Kurang";
 				break;
 			case "C":
 				return "Cukup";
 				break;
 			case "B":
 				return "Memuaskan";
 				break;
 			case "A":
 				return "Sangat Memuaskan";
 				break;
 			
 			default:
 				return "Tidak ada";
 				break;
 		}
 	}
?>