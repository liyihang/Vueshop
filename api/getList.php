<?php
include_once 'config.php';
$id = isset($_GET['cat_id']) ? $_GET['cat_id'] : '';


if (is_numeric($id)) {
    $sql = "select goods_id,goods_name,goods_thumb,shop_price,market_price from ecs_goods where cat_id=$id";
} else {
    $sql = "select goods_id,goods_name,goods_thumb,shop_price,market_price from ecs_goods";

}
$stmt = $pdo->query($sql);
$data = $stmt->fetchAll();
if ($data) {
    echo json_encode($data);
} else {
    echo json_encode([
        'status' => 400,
        'msg' => '参数传递错误'
    ]);
}



