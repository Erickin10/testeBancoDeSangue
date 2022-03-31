<?php
    Class Usuario{

        private $pdo;
        public $msgError = '';
        public function conectar ($nome,$host,$user,$senha){
            global $pdo; 
            global $msgError;
           try {
                 $pdo = new PDO('mysql:dbname='.$nome. '; host='.$host, $user, $senha);
            } catch (PDOException $th) {
                $msgError = $th -> getMessage();
            }
           
        }


        public function cadastrar($nome,$user,$senha){
            global $pdo; 

            //verifica cadastro
            $sql = $pdo->prepare('SELECT id_usuario FROM usuarios WHERE usuario = :u');
            $sql ->bindValue(':u', $user); // bindValue substitui os valores
            $sql ->execute();   

            if ($sql->rowCount() > 0){  //nesse caso, rowCount vai contar quantas linhas foram retornadas 
                return false; //se já for cadastrada
            } 

            else{ // se a pessoa não for cadastrada

                $sql = $pdo->prepare("INSERT INTO usuarios (nome, usuario, senha) VALUES (:n, :u, :s)"); 
                $sql ->bindValue(':n', $nome);
                $sql ->bindValue(':u', $user);
                $sql ->bindValue(':s', md5($senha));

                $sql ->execute();

                return true; //cadastrado com sucesso
            }

        }


        public function logar($user,$senha){
            global $pdo; 

            $sql = $pdo->prepare("SELECT id_usuario FROM usuarios
            WHERE usuario = :u AND senha = :s "); //verifica se email e senha estao corretos
            
            $sql ->bindValue(":u", $user );
            $sql ->bindValue(":s", $senha );
            $sql ->execute();

            //depois de executado usamos um if para confirmar que foi retornado usuario e senha do bd  
            
            if($sql ->rowCount() > 0 ){

                //se o usuario estiver cadastrado devemos iniciar uma sessão que apenas ele podera acessar
                
                $dado = $sql->fetch();
                session_start();
                $_SESSION['id_usuario'] = $dado ['id_usuario'];
                return true;  //login feito
            }
            else{   
                return false; //login não pode ser feito
            }
        }
    }

?>