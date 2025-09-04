<?php

require "conexao.php";

$sql = "INSERT INTO aluraplay.videos (url, title) VALUES (?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(1, $_POST["url"]);
$stmt->bindValue(2, $_POST["titulo"]);
$stmt->execute();

header('Location: index.php');