<?php
require 'config.php';

$lista = [];
$sql = $pdo->query("SELECT * FROM usuario2");
if($sql->rowCount() > 0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>

<h1>Lista de moradores</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Contato</th>
        <th>Unidade/Apto</th>
        <th>Ações</th>
    </tr>
    <?php foreach($lista as $usuario2): ?>
        <tr>
            <td><?=$usuario2['id'];?></td>
            <td><?=$usuario2['nome'];?></td>
            <td><?=$usuario2['email'];?></td>
            <td><?=$usuario2['contato'];?></td>
            <td><?=$usuario2['unidade'];?></td>
            <td>
                <a href="editar.php?id=<?=$usuario2['id'];?>">[Editar]</a>
                <a href="excluir.php?id=<?=$usuario2['id'];?>">[Excluir]</a>
            </td>
        </tr>

    <?php endforeach; ?>
</table>
<br>
<a href="cadastrar.php">Cadastrar Novo Morador</a>