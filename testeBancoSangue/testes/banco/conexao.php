<?php

    $hostname = "localhost";
    $dbname = "banco-sangue";
    $usuario = "root";
    $senha = "";

    $mysqli = new mysqli($hostname, $usuario, $senha, $dbname);

    if($mysqli->connect_errno){

        echo "Desconectado! Erro: " . $mysqli->connect_errno;
    
    } else {

        echo "Conectado!";

    }