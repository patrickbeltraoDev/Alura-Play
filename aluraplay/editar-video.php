<?php

require "conexao.php";

$id = $_GET["id"];



$sql = "DELETE FROM aluraplay.videos WHERE id = ?";
$stmt = $pdo->prepare($sql);   
$stmt->bindValue(1, $id , PDO::PARAM_INT);
$stmt->execute();

header("location: index.php");