<?php 
    require_once '<Classes/usuarios.php';
    $usuario = new Usuario;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <div class="estrutura">
        <h1>Login</h1>
         <form method="POST" >
             
              <input type="text" name="user"placeholder="Usuário" >
              <input type="password" name="senha"placeholder="Senha">
              <input type="submit" value="Entrar"> <br>
        
              <a href="cadastro.php">Ainda não tem cadastro? <strong>Cadastre-se!</strong></a>
         </form>
    </div>
<?php
 if (isset($_POST['user']))
 {

     $user = addslashes($_POST['user']); 
     $senha = addslashes($_POST['senha']);
 
     if(!empty($user) && !empty($senha)  ){

        $usuario ->conectar('cadastro_login','localhost','root','');
        
        if($usuario-> msgError == '' ){ 
        
            if ( $usuario -> logar($user,$senha))
            {
                header('location: suapagina.php') ;
            } else {
                ?>
                <div class="error_msg">  O nome de Usuário e/ou a senha estão incorretos, por favor, tente novamente!</div>
                
                <?php
            }
        }else{
            ?>
            <div class="error_msg">  <?php echo "Erro :" .$usuario -> msgError; ?> </div>    
            <?php
        }
    }else{
        ?>
        <div class="error_msg">  Preencha todos os campos, por favor!</div>      
        <?php
    }
 }

?>
</body> 
</html>