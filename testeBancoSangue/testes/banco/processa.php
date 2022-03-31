<?php

    session_start();

    include_once('conexao.php');

    $tipoSangueR = filter_input(INPUT_POST, 'tipoSangueR', FILTER_SANITIZE_STRING);

    $result_dadosReceptor = "INSERT INTO 'dados-receptor' (tipoSangueR) VALUES ('$tipoSangueR')";
    $resultado_usuario = mysqli_query($conn, $result_usuario);

    
   