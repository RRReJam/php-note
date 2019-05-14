<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        .container{
            width: 1000px;
            height: 350px;
            margin: 200px auto;
            background-color: antiquewhite;
        }
        .container img{
           float: left;
            width: 350px;
            height: 350px;
        }
        .detail h3{
            color: #888888;
        }
        .detail p{
            font-size: 10px;
        }

        .detail button {
            margin-top: 80px;
            margin-left: 100px;
            width: 150px;
            height: 50px;
            background-color: red;
            color: white;
            font-size: 20px;
        }
    </style>
</head>
<body>
<!--<div class="container">-->
<!--    <img src="images/goods1.jpg" />-->
<!--    <div class="detail">-->
<!--        <h3>农家新语 新鲜烟台大樱桃2斤 现摘水果美早车厘子 顺丰空运</h3>-->
<!--        <p>推荐指数：⭐⭐⭐⭐⭐ 推荐购买 【优势】产地直接发货，独特气候和土地孕育了樱桃卓越口感 【新鲜】现摘现发，精选大果，鲜甜可口，自己吃或送人佳品 【包装】保鲜包装发货，锁住新鲜，从枝头到舌尖的新鲜 </p>-->
<!--        <p style="color: hotpink;font-size: 20px;">价格：￥128.00</p>-->
<!--        <p style="color: #888888 ">促　　销-->
<!--             满150元减10元，包邮（限中国内地）</p>-->
<!--         <div >-->
<!--             <button >加入购物车</button>-->
<!--             <button style="margin-left: 100px">立即购买</button>-->
<!--         </div>-->
<!--    </div>-->
<!--</div>-->
<!---->



<?php
header('content-type:text/html;charset=utf-8');
$goodsid = $_GET['id'];
include 'data-goods-detail.php';
$goods = $gooddetailArr[$goodsid];
echo '
<div class="container">
    <img src="'.$goods['good-icon'].' " />
    <div class="detail">
        <h3>'.$goods['good-name'].'</h3>
        <p>'.$goods['good-detail'].' </p>
        <p style="color: hotpink;font-size: 20px;">价格：'.$goods['good-price'].'</p>
        <p style="color: #888888 ">促　　销
             满150元减10元，包邮（限中国内地）</p>
         <div >
             <button >加入购物车</button>
             <button style="margin-left: 100px">立即购买</button>
         </div>
    </div>
</div>
'
?>



</body>
</html>