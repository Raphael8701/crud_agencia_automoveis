<?php
require 'config.php' ;

$lista = [];
$sql = $pdo->query("SELECT * FROM veiculos");
if( $sql->rowCount() > 0) {
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>

<h1>Listagem de Veiculos</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Cor</th>
        <th>Ações</th>
    </tr>
    <?php foreach($lista as $veiculos):?>         
        <tr>
            <td><?=$veiculos['id'];?></td>
            <td><?=$veiculos['marca'];?></td>
            <td><?=$veiculos['modelo'];?></td>
            <td><?=$veiculos['cor'];?></td>
            <td>
                <a href="editar.php?id=<?=$veiculos['id'];?>">[ Editar ]</a>
                <a href="excluir.php?id=<?=$veiculos['id'];?>">[ Excluir ]</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<a href="cadastrar.php">Cadastrar Veiculos</a>
