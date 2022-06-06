<?php
require 'config.php';

$usuario2 = [];
$id = filter_input(INPUT_GET, 'id');
if($id){
    $sql = $pdo->prepare("SELECT * FROM usuario2 WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if($sql->rowCount() > 0){
        $usuario2 = $sql->fetch(PDO::FETCH_ASSOC);
    }else{
        header("Location: index.php");
        exit;
    }
}
?>

<h1>Editar Cadastro</h1>
<form method="POST" action="editar_action.php">
    <input type="hidden" name="id" value="<?=$usuario2['id'];?>"/>
    <label>
        Nome: <input type="text" name="nome" value="<?=$usuario2['nome'];?>"/>
    </label>
    <label>
        E-mail: <input type="text" name="email" value="<?=$usuario2["email"];?>"/>
    </label>
    <label>
        Contato: <input type="text" name="contato" value="<?=$usuario2["contato"];?>"/>
    </label>
    <label>
        Unidade: <input type="text" name="unidade" value="<?=$usuario2["unidade"];?>"/>
    </label>
    <input type="submit" value="Atualizar"/>
</form>