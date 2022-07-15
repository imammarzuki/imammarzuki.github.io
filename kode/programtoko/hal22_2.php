<!doctype html>
<html>
<head>
<title>Belajar While pada Tanggal</title>
</head>
<body>
TANGGAL :
<select name="tanggal">
<?php
$nomor=0;
while($nomor<=31){
	$nomor++;
	echo "<option>$nomor</option>";
}
?>
</select>
</body>
</html>