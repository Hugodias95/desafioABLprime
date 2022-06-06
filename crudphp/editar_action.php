<?php
require 'config.php';

$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$contato = filter_input(INPUT_POST, 'contato');
$unidade = filter_input(INPUT_POST, 'unidade');

if($id && $nome && $email){
    $sql = $pdo->prepare("UPDATE usuario2 SET nome = :nome, email = :email, contato = :contato, unidade = :unidade WHERE id = :id");
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':id', $id);
    $sql->bindValue(':contato', $contato);
    $sql->bindValue(':unidade', $unidade);
    $sql->execute();

    header("Location: index.php");
    exit;
}else{
    header("Location: index.php");
    exit;
}