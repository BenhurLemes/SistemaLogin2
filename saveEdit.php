<?php 

    include_once('config.php');

    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome =  $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $gender = $_POST['gender'];
        $data_nasc = $_POST['data_nasc'];
        $estado = $_POST['estado'];
        $cidade = $_POST['cidade'];
        $endereco = $_POST['endereco'];
        $senha = $_POST['senha'];

        $sqlUpdate = "UPDATE usuarios SET nome='$nome', email='$email', telefone='$telefone', gender='$gender', data_nasc='$data_nasc', estado='$estado', cidade='$cidade', endereco='$endereco', senha='$senha'
        WHERE id='$id'";

        $result = $conexao->query($sqlUpdate);

    }
    header('Location: sistema.php'); 

?>