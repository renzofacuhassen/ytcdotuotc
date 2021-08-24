<?php
  $destino= "renzofranchetto91@gmail.com";
  $nombre= $_Post["name"];
  $correo= $_Post["email"];
  $mensaje= $_Post["subject"];
  $contenido = "name: " . $nombre . "\nemail: " . $correo . "\nsubject: " .$mensaje;
mail($destino,"Contacto",$contenido);
header("Location:gracias.html")
?>