<?php

require "/conexao.php";

$sql = "INSERT INTO videos (url, title) VALUES (:url, :titulo)";
$stmt = $pdo->prepare($sql);
$stmt->execute([":url"=> $_POST["name"], ":titulo"=> $_POST["titulo"]]);
