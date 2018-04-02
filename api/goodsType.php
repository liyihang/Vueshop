<?php
include_once 'config.php';
$sql = "select cat_id,cat_name,parent_id,cat_index_rightad from ecs_category where cat_index_rightad !=''";
$stmt = $pdo->query($sql);
$data = $stmt->fetchAll();
if($data){

   echo json_encode($data);
}else{
    echo json_encode([
        'status'=>400,
        'msg'=>'请求错误'
    ]);
}