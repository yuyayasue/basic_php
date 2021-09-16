<?php
    $product_name = ['人気のジーパン' , 'タイトなTシャツ', 'スカート' , 'ユニフォーム'];

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php 
    foreach($product_name as $product):?>

    <div>
        <h1>商品名</h1>
        <span><?php echo $product;?></span>

    </div>
    <?php endforeach;?>
    
    
</body>
</html>