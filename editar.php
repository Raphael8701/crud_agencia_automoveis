<?php
require 'config.php';

$veiculos = [];
$id = filter_input(INPUT_GET, 'id');
if($id){
    $sql = $pdo->prepare("SELECT * FROM veiculos WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql-> execute();

    if($sql->rowCount() > 0) {
        $veiculos = $sql->fetch(PDO::FETCH_ASSOC);
    } else{
        header("Location: index.php");
        exit;
    }
}else{
     header("Location: index.php");
}
?>

<h1>Editar Veiculo</h1>
<form method="POST" action="editar_action.php">
<input type="hidden" name="id" value="<?=$veiculos['id']; ?>"/> 
<label>
    Marca: <input type="text" name="marca" value="<?=$veiculos['marca']; ?>"/>
 </label>
 <label>
    Modelo: <input type="text" name="modelo" value="<?=$veiculos['modelo']; ?>"/>
 </label>
 <label>
    Cor: <input type="text" name="cor" value="<?=$veiculos['cor']; ?>"/>
 </label>
 <input type="submit" value="Atualizar"/>


</form>