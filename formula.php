<?php
	$jumlah_bulan = 120;
	$jumlah_pinjaman = 49000000 ;
	$bunga = 1.2;
	$rate = 24.27;

	echo "BUNGA";
	echo "<br>";
	$tempBunga = $rate / 12;
	$hasilBunga = ($tempBunga * $jumlah_pinjaman) / 100;
	echo "Bunga: ".$hasilBunga;
	echo "<br>";
	echo "ANGSURAN";
	echo "<br>";
	$tempHasil1 = ($jumlah_pinjaman * $bunga) / 100;
	$tempHasil2 = $tempHasil1 * $jumlah_bulan + $jumlah_pinjaman;
	$angsuran = $tempHasil2/$jumlah_bulan;
	echo "Angsuran: " . $angsuran;
	echo "<br>";
	$pokok = $angsuran - $hasilBunga;
	echo "Pokok: " . $pokok;
	echo "<br>";
	echo "SISA POKOK";
	echo "<br>";
	$sisa_pokok = $jumlah_pinjaman - $pokok;
	echo "Sisa Pokok: " . $sisa_pokok;
?>

<table>
	<thead>
		<tr>
			<th>asdf</th>
		</tr>		
	</thead>
	<tbody>
		<tr>
			<td>asdf</td>
		</tr>		
	</tbody>
</table>