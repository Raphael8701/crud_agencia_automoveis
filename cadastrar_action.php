<?php

require 'config.php';

$marca = filter_input(INPUT_POST,'marca');
$modelo = filter_input(INPUT_POST,'modelo');
$cor = filter_input(INPUT_POST,'cor');

$sql = $pdo->prepare("INSERT INTO veiculos (marca, modelo, cor) VALUES (:marca, :modelo, :cor)");
$sql->bindValue(':marca', $marca);
$sql->bindValue(':modelo', $modelo);
$sql->bindValue(':cor', $cor);
$sql->execute();

header("Location: index.php");