<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login</title>
    <style>
        body{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-image: linear-gradient(to left, rgb(30, 100, 200), rgb(20, 60, 80));
        }

        div{
            background-color: rgba(0, 0, 0, 0.8);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 20px;
            color: white;
        }

        .titulo{
            color: white;
            text-decoration: none;
        }

        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 20px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .enviar{
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
        .enviar:hover{
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
    <div>
        <a href="login.php" class="titulo"><h1>Teste de Login</h1></a>
        <form action="index.php" method="POST">
            <input type="text" name="email" id="email" placeholder="E-mail">
            <br><br>
            <input type="password" name="senha" id="senha" placeholder="Senha">
            <br><br>
            <input class="enviar" type="submit" name="submit" value="Enviar">
            <br>
            <a href="cadaster.php" class="cas">
                <p>Cadastrar-se<p>
            </a>
        </form>
    </div>
</body>
</html>