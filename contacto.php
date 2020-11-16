<?php

  $nombre = $_POST["nombre"];
  $email = $_POST["email"];
  $mensaje = $_POST["mensaje"];

  $para = "backstageappspaulo@gmail.com";
  $asunto = "Nuevo mensaje de $nombre";

  $mensaje = "
    Nombre del remitente: ".$nombre."
    Correo: ".$email."
    Habilidades: ".$mensaje."
  ";

  mail($para,$asunto,utf8_decode($mensaje));
  header("location:index.html");

 ?>
