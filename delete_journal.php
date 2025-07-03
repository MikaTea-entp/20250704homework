<?php
$pdo = new PDO('mysql:dbname=design_thinking;host=localhost;charset=utf8', 'root', '');
$id = $_POST['id'] ?? 0;
if ($id) {
    $stmt = $pdo->prepare("DELETE FROM journals WHERE id=?");
    $stmt->execute([$id]);
    echo 'success';
} else {
    http_response_code(400);
    echo 'error';
}
