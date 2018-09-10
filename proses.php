<?php

function rekursif_baris($value){
	rekursif_kolom($value);
	echo "<br>";
	$value--;
	if ($value >=1)
		rekursif_baris($value);
}

function rekursif_kolom($batas, $awal=1){
	echo"*";
	$awal++;
	if ($awal <= $batas)
		rekursif_kolom($batas, $awal);
}
function deret_ganjil_genap($value){
	$arr_genap = array();
	$arr_ganjil = array();
	for ($i=1; $i <= $value; $i++) {
		if($i % 2 == 0)
			array_push($arr_genap, $i);
		else
			array_push($arr_ganjil, $i);
	}
	echo "Genap&emsp; = ";
	for ($i=0; $i < count ($arr_genap), $i++) {
		echo $arr_genap[$i];
		if ($i != count($arr_genap)-1)
			echo ",";
	}
	echo "<br>";
	echo "Ganjil&emsp; = ";
	for ($i=0, $i < count ($arr_ganjil), $i++) {
		echo $arr_ganjil[$i];
		if ($i != count($arr_ganjil)-1)
			echo ",";
	}
}
echo "<br>";
echo "<br>";
echo 'Jumlah deret genap : '. count($arr_genap);
echo "<br>";
echo 'Jumlah deret ganjil : '. count($arr_ganjil);
echo "<br>";
if (isset($_GET['angka'])) {
	$angka = isset($_GET['angka']) ? $_GET['angka'] : 0;
	rekursif_baris($angka);
	deret_ganjil_genap($angka);
}
?>
