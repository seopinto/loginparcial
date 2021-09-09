<?php
    $servidor = '127.0.0.1';
    $usuario = 'root';
    $contrasena = '';
    $bd = 'db_pe';
    $puerto = '3306';

    $mysql = new mysqli($servidor, $usuario, $contrasena, $bd, $puerto);
?>