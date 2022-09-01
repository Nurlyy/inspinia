<?php

/** @var yii\web\View $this */

use yii\bootstrap4\Html;

?>


<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Dashboard</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">
                <strong>Home</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row ">

            <?php foreach ($posts as $post) : ?>


                <div class="col-md-3">
                    <div class="ibox">
                        <div class="ibox-content product-box">

                            <div class="product-imitation">
                                <?php echo Html::img('@web/uploads/'.$post->image_url, ['width' => '250']); ?>
                            </div>
                            <div class="product-desc">

                                <small class="text-muted"><?php echo $post->created_by ?></small>
                                <a href="#" class="product-name"> <?php echo $post->title ?></a>



                                <div class="small m-t-xs">
                                    <?php echo substr($post->body, 0) ?>
                                </div>
                                <div class="m-t text-righ">

                                    <a href="#" class="btn btn-xs btn-outline btn-primary">Info <i class="fa fa-long-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            <?php endforeach ?>

    </div>
</div>