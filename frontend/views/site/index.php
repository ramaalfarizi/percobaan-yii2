<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = Yii::$app->name;
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Produk TOko Baru!</h1>

        <p class="lead">Daftar produk-produk toko baru</p>
        <p class="lead"><?= $caches ?></p>

        <!-- <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p> -->
    </div>

    <div class="body-content">

        <div class="row">
            <?php
            foreach ($model as $item) {
            ?>
                <div class="col-lg-4">
                    <?= Html::img('@web/uploads/' . $item->img_url, ['class' => 'img-thumbnail rounded mb-3', 'width' => '100%']) ?>
                    <h2><?= $item->name ?></h2>

                    <p>Rp. <?= number_format($item->price) ?></p>

                    <p><a class="btn btn-success" href="site/checkout">Beli Produk</a></p>
                </div>
            <?php
            }
            ?>
        </div>

        <?= LinkPager::widget([
            'pagination' => $pages
        ])
        ?>
    </div>
</div>