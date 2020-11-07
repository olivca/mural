
    <?php
    
        require_once("../conexoes/conexao.php");

        if(isset($_POST["nome"]) && isset($_POST["nome_usuario"]) && isset($_POST["nascimento"])
        && isset($_POST["genero"]) && isset($_POST["telefone"]) && isset($_POST["email"])
            && isset($_POST["senha"])){
                $nome = $_POST["nome"];
                $nome_usuario = $_POST["nome_usuario"];
                $nascimento = $_POST["nascimento"];
                $genero = $_POST["genero"];
                $telefone = $_POST["telefone"];
                $email = $_POST["email"];
                $senha = $_POST["senha"];

                $sql = "insert into cadastro_usuario (nome, nome_usuario, nascimento, genero, telefone, email, senha)
                values ('$nome', '$nome_usuario', '$nascimento', '$genero', '$telefone', '$email', '$senha')";
                $result = $conexao->query($sql);
                $show = "select * from cadastro_usuario";
                $showResult = $conexao->query($show);


                header('refresh:2;./telaLogin.php');
                echo"Você foi cadastrado com sucesso";
                

            }else{
                $show = "select * from cadastro_usuario";
                $showResult = $conexao->query($show);
            }
    
    mysqli_close($conexao)

    ?>
    