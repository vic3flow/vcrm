<?php 
 
$server = "gator3179.hostgator.com";
$user = "danitod_sk8";
$pass = "1320sk8walker*";
$bd = "danitod_VCRM";
 
//Creamos la conexión
$conexion = mysqli_connect($server, $user, $pass,$bd) 
or die("Ha sucedido un error inexperado en la conexion de la base de datos");
 
//generamos la consulta
$sql = "SELECT * FROM hotel";
mysqli_set_charset($conexion, "utf8"); //formato de datos utf8
 
if(!$result = mysqli_query($conexion, $sql)) die();
 
$clientes = array(); //creamos un array
 
while($row = mysqli_fetch_array($result)) 
{ 
    $id=$row['id'];
    $name_hotel=$row['name_hotel'];
    $city_hotel=$row['city_hotel'];
    $state_hotel=$row['state_hotel'];
    $price_hotel=$row['price_hotel'];
    $tag_hotel=$row['tag_hotel'];
    $content_hotel=$row['content_hotel'];
    
 
    $clientes[] = array('id'=> $id, 'name_hotel'=> $name_hotel, 'city_hotel'=> $city_hotel, 'state_hotel'=> $state_hotel,
                        'price_hotel'=> $price_hotel, 'tag_hotel'=> $tag_hotel, 'content_hotel'=> $content_hotel);
 
}
    
//desconectamos la base de datos
$close = mysqli_close($conexion) 
or die("Ha sucedido un error inexperado en la desconexion de la base de datos");
  
 
//Creamos el JSON
$json_string = json_encode($hotel);
echo $json_string;
 
//Si queremos crear un archivo json, sería de esta forma:
/*
$file = 'clientes.json';
file_put_content_hotels($file, $json_string);
*/
    
 
?>