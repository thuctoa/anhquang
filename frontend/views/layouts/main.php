<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use kartik\nav\NavX;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<?php $this->beginBody() ?>
    <div class="wrap">
        <div class="top">
            <div class="container">
                <img src="/img/logo-nav.png" alt="Máy thiết bị công nghệ">
            </div>
            <?= 
                NavX::widget([
                    'options'=>['class'=>'nav nav-pills menu'],
                    'items' => [
                        ['label' => 'Trang chủ', 'url' => '/site/index'],
                        ['label' => 'Sản phẩm', 'items' => [
                            ['label' => 'Rượu', 'items' => [
                                ['label' => 'Rượu nghệ', 'url' => '#'],
                                ['label' => 'Rượu ba kích', 'url' => '#'],
                                ['label' => 'Rượu mía ', 'url' => '#'],
                                '<li class="divider"></li>',
                                ['label' => 'Rượu ngũ cốc ', 'url' => '#'],
                                ['label' => 'Rượu hoa quả', 'url' => '#'],
                                ['label' => 'Rượu chất lượng cao ', 'url' => '#'],
                                '<li class="divider"></li>',
                                ['label' => 'Rượu brandy ', 'url' => '#'],
                                ['label' => 'Rượu cognac', 'url' => '#'],
                                ['label' => 'Rượu vải', 'url' => '#'],
                                '<li class="divider"></li>',
                                ['label' => 'Rượu gấc', 'url' => '#'],
                                ['label' => 'Rượu táo mèo', 'url' => '#'],
                                ['label' => 'Rượu thuốc ', 'url' => '#'],
                                '<li class="divider"></li>',
                                ['label' => 'Rượu trắng ', 'url' => '#'],
                                ['label' => 'Rượu sạch ', 'url' => '#'],
                            ]],
                            ['label' => 'Tinh dầu', 'items' => [
                                ['label' => 'Tinh dầu quế', 'url' => '#'],
                                ['label' => 'Tinh dầu xả', 'url' => '#'],
                                ['label' => 'Tinh dầu gừng', 'url' => '#'],
                                '<li class="divider"></li>',
                                ['label' => 'Tinh dầu hồi ', 'url' => '#'],
                                ['label' => 'Tinh dầu rau thơm', 'url' => '#'],
                                ['label' => 'Tinh dầu long não', 'url' => '#'],
                                '<li class="divider"></li>',
                                ['label' => 'Tinh dầu nghệ', 'url' => '#'],
                                ['label' => 'Tinh dầu bạch đàn', 'url' => '#'],
                            ]],
                            ['label' => 'Dược liệu', 'url' => '#'],
                            '<li class="divider"></li>',
                        ]],
                        ['label' => 'Sấy', 'items' => [
                            ['label' => 'Thiết bị sấy', 'items' => [
                                ['label' => 'Thiết bị sấy đối lưu', 'url' => '#'],
                                ['label' => 'Thiết bị sấy chân không', 'url' => '#'],
                                ['label' => 'Thiết bị sấy lạnh', 'url' => '#'],
                                '<li class="divider"></li>',
                                ['label' => 'Thiết bị sấy nông sản', 'url' => '#'],
                                ['label' => 'Thiết bị sấy dược liệu', 'url' => '#'],
                                ['label' => 'Thiết bị sấy hạt giống', 'url' => '#'],
                                '<li class="divider"></li>',
                                ['label' => 'Thiết bị sấy thóc giống', 'url' => '#'],
                                ['label' => 'Thiết bị sấy tiếp xúc', 'url' => '#'],
                                ['label' => 'Thiết bị sấy thăng hoa', 'url' => '#'],
                                '<li class="divider"></li>',
                                ['label' => 'Thiết bị sấy gián tiếp', 'url' => '#'],
                            ]],
                            ['label' => 'Lò sấy', 'items' => [
                                ['label' => 'Lò sấy thủ công', 'url' => '#'],
                                ['label' => 'Lò sấy công nghệ', 'url' => '#'],
                                ['label' => 'Lò sấy dược phẩm', 'url' => '#'],
                                '<li class="divider"></li>',
                                ['label' => 'Lò sấy dược liệu', 'url' => '#'],
                                ['label' => 'Lò sấy thóc giống', 'url' => '#'],
                                
                            ]],
                            ['label' => 'Tủ sấy', 'items' => [
                                ['label' => 'Tủ sấy dối lưu ', 'url' => '#'],
                                ['label' => 'Tủ sấy chân không', 'url' => '#'],
                                ['label' => 'Tủ sấy lạnh', 'url' => '#'],
                            ]],
                            '<li class="divider"></li>',
                        ]],
                        ['label' => 'Chưng cất', 'items' => [
                            ['label' => 'Nồi chưng cất', 'items' => [
                                ['label' => 'Nồi chưng cất rượu ', 'url' => '#'],
                                ['label' => 'Nồi chưng cất tinh dầu', 'url' => '#'],
                            ]],
                            ['label' => 'Tháp chưng cất', 'items' => [
                                ['label' => 'Tháp chưng cất', 'url' => '#'],
                                ['label' => 'Tháp chưng cất rượu', 'url' => '#'],
                                ['label' => 'Tháp chưng cất tinh dầu', 'url' => '#'],
                                '<li class="divider"></li>',
                                ['label' => 'Tháp hấp thụ khí thải', 'url' => '#'],
                                ['label' => 'Tháp hấp thụ', 'url' => '#'],
                                ['label' => 'Tháp hấp phụ', 'url' => '#'],
                                '<li class="divider"></li>',
                                ['label' => 'Tháp hấp phụ khí thải', 'url' => '#'],
                                
                            ]],
                            '<li class="divider"></li>',
                        ]],
                        ['label' => 'Tư vấn', 'items' => [
                            ['label' => 'Tư vấn thiết kế chế tạo và chuyển giao thiết bị công nghệ', 'url' => '#'],
                            ['label' => 'Tư vấn các giải pháp công nghệ', 'url' => '#'],
                            ['label' => 'Tư vấn tối ưu hóa các quá trình công nghệ', 'url' => '#'],
                            '<li class="divider"></li>',
                            ['label' => 'Tư vấn dự án sản xuất các sản phẩm công nghệ', 'url' => '#'],
                            ['label' => 'Tư vấn dự án khoa học công nghệ', 'url' => '#'],
                            ['label' => 'Tư vấn thiết bị công nghệ chế biến thực phẩm', 'url' => '#'],
                            '<li class="divider"></li>',
                            ['label' => 'Tư vấn thiết bị công nghệ sau thu hoạch', 'url' => '#'],
                            ['label' => 'Tư vấn thiết bị công nghệ xử lý môi trường', 'url' => '#'],
                            ['label' => 'Tư vấn lắp đặt thiết bị công nghệ ', 'url' => '#'],
                            '<li class="divider"></li>',
                            ['label' => 'Tư vấn lắp đặt thiết bị công nghệ sản xuất thực phẩm', 'url' => '#'],
                            ['label' => 'Tư vấn lắp đặt thiết bị công nghệ sản xuất dược phẩm', 'url' => '#'],
                            ['label' => 'Tư vấn lắp đặt thiết bị công nghệ sản xuất rượu', 'url' => '#'],
                           
                        ]],
                        '<li class="divider"></li>',
                        ['label' => 'Giới thiệu', 'url' => '/site/about'],
                        ['label' => 'Liên hệ', 'url' => '/site/contact'],
                        
                    ]
                ]) 
            ?>
        </div>
        
        <div class="content" id="content">
<!--            <div class="slide">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                   Indicators 
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                  </ol>

                   Wrapper for slides 
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="/img/banner1.jpg" alt="Chania" width="460" height="345">
                    </div>

                    <div class="item">
                      <img src="/img/banner2.jpg" alt="Chania" width="460" height="345">
                    </div>

                    <div class="item">
                      <img src="/img/banner3.jpg" alt="Flower" width="460" height="345">
                    </div>

                    <div class="item">
                      <img src="/img/banner4.jpg" alt="Flower" width="460" height="345">
                    </div>
                  </div>

                   Left and right controls 
                  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
               </div>-->
            <div >
            <?php 
                Yii::$app->name = "Máy thiết bị công nghệ";
                echo Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]); 
            ?>
            </div>
            <?= $content ?>
        </div>
        
    </div>
    <footer class="footer">
        <div class="container">
            <span id="chuyentoike">
                &copy; <?= \Yii::$app->name.' '.date('Y') ?>
            </span>
        </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>