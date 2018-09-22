<?php
$d = date('H:i');
$h = '';
$d2= date('22:00');

if($d<$d2){
	$h="<div style='color:green;'>otwarte</div>";
}
else{
	$h="<div style='color:red;'>zamkniete</div>";
}
?>