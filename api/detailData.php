<?php
echo json_encode([
    'goods_name' => "测试商品",
    'shop_price' => 1290,
    'market_price' => 1590,
    'goods_thumb' => ['https://img11.360buyimg.com/n8/jfs/t12208/65/1897230867/161697/34fc3203/5a2b5ca0N63592bb4.jpg',
        'https://img11.360buyimg.com/n8/jfs/t16447/236/125948710/179449/834dc232/5a2b5c8dN83627e05.jpg',
        'https://img13.360buyimg.com/n8/jfs/t17197/154/743425419/159589/8fad2849/5aa206bdNb65f6d7d.jpg'],
    'color'=>['黑色','红色','蓝色'],
    'size'=>['M','S','L',"XL"]
]);