<?php 
$data = '';
if(isset($_POST['canvas'])){
	$data = $_POST['canvas'];
}
if (file_put_contents('data.html', $data) === FALSE){
	echo "error abriendo el archivo";
}
else{
	echo "archivo guardado exitosamente";
}
?>