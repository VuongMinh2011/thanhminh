<?php
$s = '52.6.114.59';
$u = 'minh';
$p = 'minh';
$d = 'toys';
$connect = mysqli_connect($s, $u, $p, $d); 
if (!$connect) {
	die("Connect Failed:".mysqli_connect_error());
	# code...
}
?>