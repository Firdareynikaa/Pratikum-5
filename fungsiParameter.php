<?php  
	function cetak_gaji ($awal, $akhir) {
		for ($i = $awal; $i<$akhir; $i++){
			if ($i % 2 == 1) {
				echo "$i";
			}
		}
	}
	//pemanggilan fungsi
	$a = 10;
	$b = 50;
	echo "<b>Bilangan ganjil dari $a sampai $b : </b> <br>";
	cetak_gaji($a, $b);
?>