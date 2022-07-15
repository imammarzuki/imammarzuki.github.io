<!doctype html>
<html>
<head>
<title>Belajar IF ELSE</title>
</head>
<body>
<?php
$nilai="75";
if($nilai>=80){
	$nilaihuruf="A";
}
else if($nilai>=70){
	$nilaihuruf="B";
}
else if($nilai>=50){
	$nilaihuruf="C";
}
else if($nilai>=30){
	$nilaihuruf="D";
}
else{
	$nilaihuruf="E";
}
//Menampilkan
echo "Nilai ujian matematika ($nilai) mendapat $nilaihuruf"; 
?>
</body>
</html>