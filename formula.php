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
	echo "<br>";

	$nilai1 = $jumlah_pinjaman * (($rate / 12) / 100);
	$nilai2 = pow(( 1 + ( $rate / 12 ) / 100), $jumlah_bulan);
	//$nilai2 = pow( 1 + ( $rate / 12 ), $jumlah_bulan);
	$hasil_angsurann = $nilai1 / (1-1 / $nilai2);
	echo $hasil_angsurann;
	echo "<br>";
	echo "Jumlah yang harus dibayar sebesar: Rp." . number_format($hasil_angsurann * $jumlah_bulan);

?>

<table>
	<thead>
		<?php $bulan = 1?>
		<?php for ($i=0; $i <$jumlah_bulan ; $i++) { ?>
			<tr>
				<th>Bulan ke - <?php echo $bulan++ ?></th>
				<td>Rp. <?php echo number_format($hasil_angsurann) ?></td>
			</tr>
		<?php } ?>				
	</thead>
</table>