<?php 
$link =mysqli_connect("localhost","root","","seminarup");

if (mysqli_connect_error()){
	echo "Sambungan Gagal!Semak tetapan anda: ".mysqli_connect_error();
}