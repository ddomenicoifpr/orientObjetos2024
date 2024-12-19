<?php

$nomeBase = "cancelaDB";
$usuario = "root";
$senha = "root";

$conn = new PDO(
    "mysql:host=localhost:3306;dbname=" . $nomeBase,
    $usuario,
    $senha
);
print_r($conn);