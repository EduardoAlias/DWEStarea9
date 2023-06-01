<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
		<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 </head>
 <header>
        <h3>Tarea 9 DWES - Aplicaciones web híbridas - Eduardo Alias Gómez</h3>
    </header>

    <body>

    <h5 style="color:red;" >Aviso: algunas imágenes fallan al cargar</h5> 
        
<div class="card-header text-center bg-white border-bottom border-warning">
    <h2 style="font-family:montserrat;background: #fff7ba;" 
    class="card-header text-center">Imágenes aleatorias de Perros con curl</h2>

<br>
<?php
/**
 * Ejemplo de solicitud a una API para obtener una imagen de perro aleatoria.
 *
 * Este código utiliza cURL para realizar una solicitud GET a la API "https://random.dog/woof.json",
 * decodifica la respuesta JSON y muestra la imagen del perro en una página web.
 *
 * @package Ejemplo_API
 * @var curl iniciamos curl
 * @var url recogemos los datos de la API
 */
// Inicializar la sesión cURL
$curl = curl_init();
// Establecer la URL de la API
$url = "https://random.dog/woof.json";
/**
 * Configurar las opciones de cURL pasamos las variables anteriores como parametros
 * @param curl
 * @param url
 * @return true
 */
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// Realizar la solicitud GET y obtener la respuesta
$response = curl_exec($curl);
/**
 * Si hay errores en la solicitud
 * @var response 
 * @return curl_error
 * 
 */
if ($response === false) {
    echo "Error en la solicitud: " . curl_error($curl);
} else {
    /**
 * Si todo ha ido bien
 * @var data 
 * @return json_decode
 * @param response
 * @return true
 * devuelve el json de la API de perros aleatorios y la muestra en un tag imagen
 */
    $data = json_decode($response, true);

    // Obtener la URL de la imagen del perro
    $imageUrl = $data['url'];

    // Mostrar la imagen del perro en tu aplicación
    echo "<img src='" . $imageUrl . "' alt='Perro aleatorio' class='imagen'>";
}
 
// Cerrar la sesión cURL
curl_close($curl);
?>

<br><br>
<button class="btn btn-warning" onclick="location.reload()">Ver otro perrito</button>
</div>
<style>
@media (min-width: 1024px) {
.imagen{
    width:550px;
    height:300px;
}
footer, header{
    
    font-weight:bold;
    font-family:arial;
    position:absolute;
    width:100%;
    text-align:center;
 }
 footer{
    bottom:0;
    color:#197482;
    border:solid 2px #197482;
    position: absolute;
    top: 92%;
    left: 0%;
    
 }
 header{
   top:0;
   padding:10px;
   background-color:#197482;
   color:white;
   border-bottom:solid 2px #051824;
   position: absolute;
    top: 0%;
    left: 0%;
 }
 h5{
  margin-top:80px;  
 }
}
@media (min-width: 768px) and (max-width: 1024px) {
    .imagen{
    width:450px;
    height:200px;
}
h3{
    font-size:18.5px;
}
footer, header{
    
    font-weight:bold;
    font-family:arial;
    
    position:absolute;
    width:100%;
    text-align:center;
 }
 footer{
    bottom:0;
    color:#197482;
    border:solid 2px #197482;
    position: absolute;
    top: 92%;
    left: 0%;
    
 }
 header{
   top:0;
   padding:10px;
   background-color:#197482;
   color:white;
   border-bottom:solid 2px #051824;
   position: absolute;
    top: 0%;
    left: 0%;
 }
 h5{
  margin-top:80px;  
 }
}


@media (max-width: 768px) {
    .imagen{
    width:350px;
    height:200px;
}
h3{
    font-size:16.5px;
}
footer, header{
    
    font-weight:bold;
    font-family:arial;
    position:absolute;
    width:100%;
    text-align:center;
 }
 footer{
    bottom:0;
    color:#197482;
    border:solid 2px #197482;
    position: absolute;
    top: 92%;
    left: 0%;
    
 }
 header{
   top:0;
   padding:10px;
   background-color:#197482;
   color:white;
   border-bottom:solid 2px #051824;
   position: absolute;
    top: 0%;
    left: 0%;
 }
 h5{
  margin-top:80px;  
 }
}


</style>
</body>
<footer>
<h3>Tarea 9 DWES. Eduardo Alias Gómez</h3>
</footer>
</html>