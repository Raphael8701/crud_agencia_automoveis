<?php
require 'config.php';

$veiculos = [];
$id = filter_input(INPUT_POST, 'id');
$marca = filter_input(INPUT_POST, 'marca');
$modelo = filter_input(INPUT_POST, 'modelo');
$cor = filter_input(INPUT_POST, 'cor');

if($id && $marca && $modelo && $cor) {
    $sql = $pdo->prepare("UPDATE veiculos SET marca =:marca, modelo = :modelo, cor=:cor WHERE id=:id");
    $sql->bindValue(':id', $id);
    $sql->bindValue(':marca', $marca);
    $sql->bindValue(':modelo', $modelo);
    $sql->bindValue(':cor', $cor);
    $sql->execute();
    header("Location: index.php");
    exit;
}else{
    header("Location: index.php");
    exit;
}