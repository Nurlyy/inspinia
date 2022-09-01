<?php

use yii\bootstrap4\Html;
use yii\helpers\Url;

?>


<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Posts list</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?php echo Url::to('/site/index') ?>">Home</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Post list</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight ecommerce">


    <div class="row">
        <div class="col-lg-12">
            <h1>Posts List</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-content">

                    <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="5">
                        <thead>
                            <tr>

                                <th data-toggle="true">Post Id</th>
                                <th>Image</th>
                                <th data-hide="phone">Title</th>
                                <th data-hide="all">Description</th>
                                <th data-hide="phone">Created</th>
                                <th data-hide="phone,tablet">Updated</th>
                                <th data-hide="phone">Status</th>
                                
                                <th class="text-right" data-sort-ignore="true">Action</th>
                                

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($posts as $post) : ?>
                                <tr>
                                    <td>
                                        <?= $post->id ?>
                                    </td>
                                    <td>
                                        <?= Html::img('@web/uploads/'.$post->image_url, ['width' => '125']); ?>
                                    </td>
                                    <td>
                                        <?= $post->title ?>
                                    </td>
                                    <td>
                                        <?= $post->body ?>
                                    </td>
                                    <td>
                                        <?= Yii::$app->formatter->asRelativeTime($post->created_at) ?>
                                    </td>
                                    <td>
                                        <?= Yii::$app->formatter->asRelativeTime($post->updated_at) ?>
                                    </td>
                                    <td>
                                        <?php if ($post->status === 1) : ?>
                                            <span class="label label-primary">Published</span>
                                        <?php else : ?>
                                            <span class="label label-danger">Draft</span>
                                        <?php endif ?>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            <a href="<?php echo Url::to(['/web/post-update', 'post_id' => $post->id]) ?>"><button class="btn-white btn btn-xs">Edit  <i class="fa fa-edit"></i></button></a>
                                            <a class="pl-2" href="<?php echo Url::to(['/web/post-delete/', 'postId' => $post->id]) ?>"><button class="btn-white btn btn-xs">Delete <i class="fa fa-trash"></i></button></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                            


                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="6">
                                    <ul class="pagination float-right"></ul>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                    <h3>Total: <?php echo count($posts) ?> posts</h3>
                </div>
            </div>
        </div>
    </div>


</div>

<?php $this->registerJs("$(document).ready(function() {

$('.footable').footable();

});") ?>