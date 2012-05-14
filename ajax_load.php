<?php 

$data = file_get_contents('data.html');

if ($data === FALSE){
	echo "error abriendo el archivo";
}
else{
	echo $data;
}
?>