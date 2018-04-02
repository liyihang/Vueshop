<?php
try{
    //$dsn是数据源
    $dsn='mysql:host=localhost;dbname=shop';
    $username='root';
    $passwd='123456';
    $pdo=new PDO($dsn,$username,$passwd);
    //如果连接成功的话，得到的是pdo的对象
    $pdo->exec('set names utf8');

}catch(PDOException $e){
    echo $e->getMessage();
}