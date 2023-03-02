<?php  
    if(isset($_POST['submit']))
    {

        include_once('config.php');

        $nome =  $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $gender = $_POST['gender'];
        $data_nasc = $_POST['data_nasc'];
        $estado = $_POST['estado'];
        $cidade = $_POST['cidade'];
        $endereco = $_POST['endereco'];
        $senha = $_POST['senha'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,gender,data_nasc,estado,cidade,endereco,senha) VALUES ('$nome','$email','$telefone','$gender','$data_nasc','$estado','$cidade','$endereco','$senha')");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <style>
        body{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-image: linear-gradient(to left, rgb(30, 100, 200), rgb(20, 60, 80));
        }

        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.8);
            padding: 40px;
            border-radius: 20px;
            color: white;
            width: 20%;
        }

        fieldset{
            border: 3px solid whitesmoke;
        }

        legend{
            border: 3px dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
        }

        .inputBox{
            position: relative;
        }

        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }

        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }

        .opcional{
            position: absolute;
            top: 10px;
            left: 80%;
            font-size: 15px;
            color: grey;
        }

        .inputUser:focus ~ .labelInput, 
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
        }

        #data_nasc{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }

        .botao{
            background-color: #3993DF;
            border: none;
            padding: 15px;
            width: 100%;
            font-size: 20px;
            color: white;
            cursor: pointer;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight: bold;
        }
        .botao:hover{
            background-color: #217BC7;
        }

        .cas{
            position: fixed;
            left: 50%;
            transform: translate(-50%);
            cursor: pointer;
            color: gray;
            text-decoration: underline;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="cadaster.php" method="POST">
            <fieldset>
                <legend><b>Cadastre-se no Sistema</b></legend>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>

                <div class="inputBox">
                    <input type="text" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>

                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>

                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser">
                    <label for="tel" class="labelInput">Telefone</label>
                    <p class="opcional">Opcional*<p>
                </div>

                <p><b>Gênero:</b><p>
                <input type="Radio" name="gender" id="masculino" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                
                <input type="Radio" name="gender" id="feminino" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>

                <input type="Radio" name="gender" id="outro" value="outro" required>
                <label for="outro">Outro</label>
                <br>

                <div class="inputBox">
                    <label for="data_nasc"><b>Data de Nascimento:</b></label>
                    <input type="date" name="data_nasc" id="data_nasc" required>
                </div>
                <br><br>

                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser">
                    <label for="estado" class="labelInput">Estado</label>
                    <p class="opcional">Opcional*<p>
                </div>
                <br><br>

                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser">
                    <label for="cidade" class="labelInput">Cidade</label>
                    <p class="opcional">Opcional*<p>
                </div>
                <br><br>

                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser">
                    <label for="endereco" class="labelInput">Endereço</label>
                    <p class="opcional">Opcional*<p>
                </div>
                <br><br>

                <input class="botao" type="submit" name="submit" id="submit">
                <br>

                <a href="login.php" class="cas">
                    <p>Login<p>
                </a>
                <br>
            </fieldset>
        </form>
    </div>
</body>
</html>