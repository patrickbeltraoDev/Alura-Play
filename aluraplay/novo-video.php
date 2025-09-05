<?php

require "conexao.php";

$url = filter_input(INPUT_POST,"url", FILTER_SANITIZE_URL);
if ($url == false) {
    header("location index.php");
    exit();
}

$sql = "INSERT INTO aluraplay.videos (url, title) VALUES (?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(1, $_POST["url"]);
$stmt->bindValue(2, $_POST["titulo"]);
$stmt->execute();

header('Location: index.php');