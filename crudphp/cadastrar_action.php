<?php
require 'config.php';

$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$contato = filter_input(INPUT_POST, 'contato');
$unidade = filter_input(INPUT_POST, 'unidade');

if($nome && $email){

    $sql = $pdo->prepare("SELECT * FROM usuario2 WHERE email = :email");
    $sql->bindValue(':email', $email);
    $sql->execute();

    if($sql->rowCount() === 0){
        
        $sql = $pdo->prepare("INSERT INTO usuario2 (nome, email, contato, unidade) VALUES (:nome, :email, :contato, :unidade)");
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':contato', $contato);
        $sql->bindValue(':unidade', $unidade);
        $sql->execute();
    
        header("Loocation: index.php");
        exit;
    }else{
        header("Location: index.php");
    }

}
