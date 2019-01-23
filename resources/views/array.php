<?php  
	//Pembelajaran Array dan Looping
	$makanan_array = ['nasi padang', 'nasi uduk', 'nasi goreng', 'nasi kuning'];
	echo "Ini Yang Pertama";
	echo "<br>$makanan_array[0], $makanan_array[1], $makanan_array[2], $makanan_array[3]";
	
	echo "<br><br>Ini Yang Kedua";
	echo "<br>$makanan_array[1]";

	echo "<br><br>";
	echo "Ini Looping For<br><br>";
	for ($i=0; $i<=10 ; $i++) { 
		echo "Pesanan Nomor : $i <br>";
	}	
	echo "<br>Ini Looping Foreach<br><br>";
	foreach ($makanan_array as $pesanan) {
		echo "$pesanan<br>";
	}
	$i = 1;
	echo "<br>Yang ini Pake While (Increament)<br><br>";
	while ( $i <= 10) {
		echo "Looping angka dimulai dari : $i<br>";
		++$i;
	}

	$x = 20;
	echo "<br>Yang ini Pake While (Decreament)<br><br>";
	while ( $x > 10) {
		echo "Looping angka dimulai dari : $x<br>";
		$x--;
	}
?>