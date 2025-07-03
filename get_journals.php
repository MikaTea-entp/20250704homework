<?php
header('Content-Type: application/json');
$pdo = new PDO('mysql:dbname=design_thinking;host=localhost;charset=utf8', 'root', '');
$stmt = $pdo->query("SELECT id, title, content, created_at FROM journals ORDER BY created_at DESC");
echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
