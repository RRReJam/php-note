<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        *{
            margin: 0;
            padding: 0;
        }
.panel-body{
            background-color: #3a7ead ;
        }
        .thumbnail h3{
            color: hotpink;
        }
    </style>
</head>
<body>

<!---->
<!--<div class="col-sm-6 col-md-4">-->
<!--    <div class="thumbnail">-->
<!--        <img src="images/goods1.jpg" alt="goods1">-->
<!--        <div class="caption">-->
<!--            <h3>￥128.00</h3>-->
<!--            <p>农家新语 新鲜烟台大樱桃2斤 现摘水果美早车厘子 顺丰空运</p>-->
<!--            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">商品详情</h3>
        </div>
        <div class="panel-body">
            <div class="container">
                <div class="row">
                    <?php
            include './goods-list.php';
            for($i=0;$i<count($goodArr);$i++){
            echo ' <div class="col-sm-6 col-md-4">
                    <div class="thumbnail" style="width: 460px;height: 398px">
                        <img src="'.$goodArr[$i]['good-icon'].'" alt="goods1">
                        <div class="caption">
                            <h3>'.$goodArr[$i]['good-price'].'</h3>
                            <p>'.$goodArr[$i]['good-name'].'</p>
                            <p><a href="./goods-detail.php?id='.$goodArr[$i]['id'].'" class="btn btn-primary" role="button">查看详情</a> <a href="#" class="btn btn-default" role="button">加入购物车</a></p>
                        </div>
                    </div>
                
            </div>';
            }
?>

                </div>
                </div>
            </div>
        </div>




    <!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
<script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script>
<!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
</body>
</html>
