<?php  
	
	$arrIndex = ["pisang", "jambu", "pepaya"];
	$arrAsso = ["P" => "Pisang", "J" => "Jambu", "A" => "Pepaya"];
	
	$arrIndex[] = "durian";
	unset($arrIndex[1]);
	$arrIndex[2] = "manggis";


	echo("<ol>");
	foreach ($arrIndex as $key => $value) {
		echo ("<li>$value</li>");
	}
	echo("</ol>");
?>