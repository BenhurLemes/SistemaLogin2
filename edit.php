<?php  
    if(!empty($_GET['id']))
    {

        include_once('config.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome =  $user_data['nome'];
                $email = $user_data['email'];
                $telefone = $user_data['telefone'];
                $gender = $user_data['gender'];
                $data_nasc = $user_data['data_nasc'];
                $estado = $user_data['estado'];
                $cidade = $user_data['cidade'];
                $endereco = $user_data['endereco'];
                $senha = $user_data['senha'];
            }
        }
        else
        {
            header('Location: sistema.php');
        }

    }
    else
    {
        header('Location: sistema.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
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

        #update{
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
        #update:hover{
            background-color: #217BC7;
        }

    </style>
</head>
<body>
    <a href="sistema.php">Voltar</a>
    <div class="box">
        <form action="saveEdit.php" method="POST">
            <fieldset>
                <legend><b>Editar</b></legend>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome ?>" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>

                <div class="inputBox">
                    <input type="text" name="senha" id="senha" class="inputUser" value="<?php echo $senha ?>" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>

                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" value="<?php echo $email ?>" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>

                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" value="<?php echo $telefone ?>">
                    <label for="telefone" class="labelInput">Telefone</label>
                    <p class="opcional">Opcional*<p>
                </div>

                <p><b>Gênero:</b><p>
                <input type="Radio" name="gender" id="masculino" value="masculino" <?php echo ($gender == 'masculino') ? 'checked' : '' ?> required>
                <label for="masculino">Masculino</label>
                <br>
                
                <input type="Radio" name="gender" id="feminino" value="feminino" <?php echo ($gender == 'feminino') ? 'checked' : '' ?> required>
                <label for="feminino">Feminino</label>
                <br>

                <input type="Radio" name="gender" id="outro" value="outro" <?php echo ($gender == 'outro') ? 'checked' : '' ?>required>
                <label for="outro">Outro</label>
                <br>

                <div class="inputBox">
                    <label for="data_nasc"><b>Data de Nascimento:</b></label>
                    <input type="date" name="data_nasc" id="data_nasc" value="<?php echo $data_nasc ?>" required>
                </div>
                <br><br>

                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" value="<?php echo $estado ?>">
                    <label for="estado" class="labelInput">Estado</label>
                    <p class="opcional">Opcional*<p>
                </div>
                <br><br>

                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" value="<?php echo $cidade ?>">
                    <label for="cidade" class="labelInput">Cidade</label>
                    <p class="opcional">Opcional*<p>
                </div>
                <br><br>

                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" value="<?php echo $endereco ?>">
                    <label for="endereco" class="labelInput">Endereço</label>
                    <p class="opcional">Opcional*<p>
                </div>
                <br><br>
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="submit" name="update" id="update">
            </fieldset>
        </form>
    </div>
</body>
</html>