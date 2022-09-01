<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <?php echo HTML::img('@web/img/profile_small.jpg', ['alt' => 'image', 'class' => 'rounded-circle']) ?>
                            <a style="text-transform: capitalize; font-weight: bold" class="block pt-3"><?php echo Yii::$app->user->identity->username ?></a>
                        </div>
                        <div class="logo-element">
                            IN
                        </div>
                    </li> 

                    <li><a href="<?php echo Url::to('/site/index') ?>"><i class="fa fa-home"></i> <span class="nav-label">Dashboard</span></a></li>
                    <li><a href="<?php echo Url::to('/web/post-edit') ?>"><i class="fa fa-plus"></i> <span class="nav-label">Create Post</span></a></li>
                    <li><a href="<?php echo Url::to('/web/all-posts') ?>"><i class="fa fa-list"></i> <span class="nav-label">All Posts</span></a></li>
                    
                </ul>

            </div>
        </nav>