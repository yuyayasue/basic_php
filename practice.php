<?php
    //  練習問題１１まで解く
    // 練習問題１
    echo 'Hello'  . 'world' ;

    // 練習問題２
    echo  5 * 3 . '<br>' ;
    echo  8 / 2 . '<br>' ;
    echo 3 + 6 . '<br>' ;
    echo 5 - 2 . '<br>' ;
    echo  7 % 3 . '<br>' ;

    // 練習問題３

    $var = '変数の値を出力します' ;
    echo $var ;

    // 練習問題４
    $var = 'この文字列と' ;
    $var .= 'この文字列を' ;
    $var .= '繋げます' ;
    echo $var ;

    // 練習問題５
    $var = 5 ;
    echo $var . '<br>' ;
    $var = '文字に上書き' ;
    echo $var ;

    // 練習問題６
    $colorName ='red' ;
    echo "frame is ${colorName} color" ;

    // 練習問題８
    $var = 11 ;
    if ( $var > 10) {
        echo '10より大きい数値です' ;
    }

    // 練習問題9
    $var = 23 ;
    if ($var >= 20 && $var < 30) {
        echo '20代です' ;
        }

    // 練習問題10
    $var = 32 ;
    if ($var >= 20 && $var < 30) {
        echo '20代です' ;
    } else {
        echo '20代ではありません' ;
        }

    // 練習問題11
    $var = 19 ;
    if ($var >= 20 && $var < 30) {
        echo '20代です' ;
    } elseif ($var >= 30 && $var < 40){
        echo '30代です' ;
    }else {
        echo '20代または30代ではありません' ;
    }


    // 練習問題16まで解く
    // 演習問題５まで解く


    // 練習問題12
    $var = 'male' ;

    switch ($var){
        case 'male':
            # code...
            echo '男性です' ;
            break;
        case 'female':
            # code...
            echo '女性です';
            break;
        
        default :
            echo '?';
            break ;
    }
    //   練習問題13
    $var = 0 ;
    while ($var < 10) {
        echo $var . '<br>';
        $var++ ;
    }
// 練習問題14
    for ($i = 0 ; $i < 10 ; $i++){
        echo $i . '<br>' ;
    }
// 練習問題15
    $fruits = array('りんご' , 'みかん' , 'バナナ') ;
    foreach($fruits as $fruit) {
        echo $fruit . '<br>' ;
    }
    // 練習問題16
    $fruits = array('apple'=> 'りんご', 'orange'=> 'みかん', 'banana'=> 'バナナ') ;
    foreach($fruits as $key => $value) {
        echo $key . ' = ' . $value . '<br>' ;
    }


// 演習問題
// 問題１
    $i = 100 ;
    for ($i = 100 ; $i>0 ; $i--){
        echo $i . '<br>' ;
    }

    // 問題２
    $i = 1 ;
    for ($i = 1 ; $i<=9 ; $i++){
        echo $i*3 . ' ' ;
    }

    // 問題３
    $i= 1 ;
    for ($i = 1 ; $i <=100 ; $i++){
        if($i % 15 ===0){
            echo "FizzBuzz" . '<br>' ;
        } elseif ($i % 3 ===0){
            echo "Fizz" . '<br>' ;
        } elseif($i % 5 ===0){
            echo "Buzz" . '<br>' ;
        } else {
            echo $i . '<br>' ;
        }
    }


    // 問題４
    $i = 1 ;
    for ($i = 1 ; $i <=100 ; $i++){
        // if($i>0 && $i<=10 ){
        //     echo $i ;
        // } elseif( $i > 10 && $i <=20){
        //     echo $i ;
        // }elseif( $i > 20 && $i <=30){
        //     echo $i ;
        // }elseif( $i > 30 && $i <=40){
        //     echo $i ;
        // }elseif( $i > 40 && $i <=50){
        //     echo $i ;
        // }elseif( $i > 50 && $i <=60){
        //     echo $i ;
        // }elseif( $i > 60 && $i <=70){
        //     echo $i ;
        // }elseif( $i > 70 && $i <=80){
        //     echo $i ;
        // }elseif( $i > 80 && $i <=90){
        //     echo $i ;
        // }elseif( $i > 90 && $i <=100){
        //     echo $i ;
        // }
        if($i % 10 == 0){
            echo $i . '<br>' ;
        }else {
            echo $i . ' ';
        }
    }


    // 問題5
    $alpha = array('E', 'A', 'D', 'B', 'A', 'C', 'A', 'B', 'E', 'E', 'A', 'A', 'C');
        //    echo count($alpha , 'A') ;
        $counts = array_count_values($alpha) ;
        echo $counts['A'] ;



