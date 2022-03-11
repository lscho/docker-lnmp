<?php
header("Content-type:text/html;charset=utf-8");
//实例化PDO
try{
    $pdo = new PDO(
        "mysql:host=mysql;dbname=mysql",
        "root",
        "123456"
    );
}catch(PDOException $pe){
    die("PDO实例失败！原因：".$pe->getMessage());
}
//定义sql语句
$sql = "select * from test";
//预处理sql
$stmt = $pdo->prepare($sql);
//执行
$stmt->execute();
// 获取多条数据
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
var_dump($res);