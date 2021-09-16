<?php
// 文字はシングルコートでかこう
    echo 'こんにちは' . '<br>';
    echo '安江' . '裕也' . '<br>'; 
    echo 'seed tech' . '<br>';

    // 四則演算
    echo 5 * 3 ;
    echo 6 / 3 ;
    echo 6 + 3 ;
    echo 6 - 2 ;
    echo 5 % 3 ;

    // 変数
    $name = '安江'; 
    // ↑クソコード
    $name = '裕也';
    echo $name ; 

    $num1 = 300;
    $num2 = 100;
    $num3 = 1.1;

    
    echo 'みかんは' . $num1 * $num3;
    echo 'ブドウは' . $num2 * $num3;
   
    // 変数展開
    $color ='赤';
    echo "この鉛筆は${color}です";

    // 制御文
    // if文
    
    $var = 1;
    
    if($var>2){
    echo '２より大きいです';
    } else{
        echo '２より小さいです';
    }

    $var= 30 ;

    if ($var>= 20  && $var <30){
    echo '２０代です';
    } elseif($var>= 30 && $var < 40){
    echo '30代です';
    }else {
        echo '対象外です';
    }

    $var = 'male' ;

    switch($var){
        case 'male' :
            echo '男性です';
            break ;
        case 'female' :
            echo '女性です';
            break ;    
    }

    $var = 0 ;
    while($var < 10){
         echo $var . '<br>' ;
         $var++;
    }

    for($i = 0  ; $i < 10; $i++ ) {
        echo $i . '<br>' ;
    } 

    // 配列；タンス
    // 配列：複数データを格納できる
    // 変数：1つのデータを格納できる
    $num =  ['1' , '2' , '3'] ;
    echo $num  [0] ;
    echo $num  [1] ;

    $family = ['父' , '母' ,'自分'];
    echo $family [1] ;

    // 連想配列
    // キーに名前をつけることができる配列

    // ダブルアロー演算子
    $family = ['父'=>'まさお' , '母'=> 'ゆかこ'];
    echo $family ['父'] ;
    