<?php 
    session_start();
    if(!isset($_SESSION['id_usuario'])){
        header('location: index.php '); 
        exit;
    }    
?>


    <h1> Login feito com sucesso!</h1>