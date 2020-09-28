<?php

    require "../model/usuarioModel.php";
    require_once "../banco/conexao/conexao.php";
    require_once "../banco/dao/usuarioDAO.php";

    $usuario = new Usuario();
    if(isset($_POST['cpf']) && isset($_POST['nome'])&& isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['end']) && isset($_POST['cep']) ){
        $usuario->cpf = $_POST['cpf'];
        $usuario->nome = $_POST['nome'];
        $usuario->fone = $_POST['fone'];
        $usuario->sexo = $_POST['sexo'];
        $usuario->datanasc = $_POST['data'];
        $usuario->endereco = $_POST['end'];
        $usuario->cep = $_POST['cep'];
        $usuario->email = $_POST['email'];
        $usuario->senha = $_POST['senha'];
    }
    $usuDAO = new UsuarioDAO();
    $usuDAO->cadastrar($usuario);

?>