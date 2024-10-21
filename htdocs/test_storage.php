<?php 

use Services\FileStorage;

$store = new FileStorage();
$arrData = [
    [
        'id' => 11, 
        'name' => 'Шашлык-шейха', 
        'description' => 'Шеи свинные',
        'image' => "./img/Shashlyk-shejha.png",
        'weigth' => 800, 
        'price' => 399.00,
    ],
    [
        'id' => 12, 
        'name' => 'Шаурма-Мужская', 
        'description' => 'Лаваш, соус на выбор, филе цыпленка, омлет яичный, маринованный огурец, картофель фри, лук фри.',
        'image' => "./img/Shaurma-muzhskaya.png",
        'weigth' => 250, 
        'price' => 300.00,
    ],
    [
        'id' => 13,
        'name' => 'Шаурма-Царская', 
        'description' => 'Лаваш, филе цыпленка, соус на выбор, морковь по-корейски, капуста, томаты, огурец, картофель фри.',
        'image' => "./img/Shaurma-carskaya.png",
        'weigth' => 300, 
        'price' => 350.00,
    ]
];
    
$store->saveData('data.json', $arrData);
$arrData = $store->loadData('data.json');
var_dump($arrData);