<?php
// DB接続
$pdo = new PDO('mysql:dbname=design_thinking;host=localhost;charset=utf8', 'root', ''); 
// POST受け取り
$title = $_POST['title'] ?? '';
$content = $_POST['content'] ?? '';

if ($title && $content) {
    $stmt = $pdo->prepare("INSERT INTO journals (title, content, created_at) VALUES (?, ?, NOW())");
    $stmt->execute([$title, $content]);
    echo 'success';
} else {
    http_response_code(400);
    echo 'error';
}
