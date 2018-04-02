<?php
include_once 'config.php';
$action = isset($_GET['action']) ? $_GET['action'] : 'login';
$username = isset($_GET['username'])?$_GET['username']:'123';
$pwd = isset($_GET['pwd'])?$_GET['pwd']:'123';
if ($action == "register") {
    $stmt = $pdo->prepare("insert into ecs_users(user_name,password) VALUES (?,?)");
    $stmt->bindValue(1, $username);
    $stmt->bindValue(2, $pwd);

    $res = $stmt->execute();
    if ($res) {
        echo json_encode([
            'status' => 200,
            'msg' => 'ok'
        ]);
    } else {
        echo json_encode([
            'status' => 400,
            'msg' => 'Nok'
        ]);
    }
}else if ($action=='login'){
    $sql = "select user_name,password from ecs_users where user_name =:username and password =:pwd;";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':username',$username);
    $stmt->bindValue(':pwd',$pwd);
    $stmt->execute();
    $data = $stmt->fetch();
    if($data){
        echo json_encode([
            'status'=>200,
            'msg'=>'登录成功'
        ]);
    }else{
        echo json_encode([
            'status'=>400,
            'msg'=>'用户名或密码错误'
        ]);
    }
}