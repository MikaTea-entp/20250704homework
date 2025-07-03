<?php
// XSSサニタイズ
function h($str){
    return htmlspecialchars($str, ENT_QUOTES);
}

// DB接続関数
function db_conn(){
    try {
        // 必要に応じてDB名やユーザー/パス修正
        $pdo = new PDO('mysql:dbname=gs_db_class;charset=utf8;host=localhost','root','');
        return $pdo;
    } catch (PDOException $e) {
        exit('DBConnectError:'.$e->getMessage());
    }
}
?>
