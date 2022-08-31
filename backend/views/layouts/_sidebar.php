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
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span style="text-transform: capitalize; font-weight: bold" class="block pt-3"><?php echo Yii::$app->user->identity->username ?><b class="caret"></b></span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                                <li><a class="dropdown-item" href="contacts.html">Contacts</a></li>
                                <li><a class="dropdown-item" href="mailbox.html">Mailbox</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="login.html">Logout</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            IN+
                        </div>
                    </li> 
                    <li>
                        <a href="mailbox.html"><i class="fa fa-envelope"></i> <span class="nav-label">Mailbox
                            </span><span class="label label-warning float-right">16/24</span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="<?php echo Url::to('/web/mailbox') ?>">Inbox</a></li>
                            <li><a href="<?php echo Url::to('/web/mail-detail') ?>">Email view</a></li>
                            <li><a href="<?php echo Url::to('/web/mail-compose') ?>">Compose email</a></li>
                        </ul>
                    </li>
                    
                </ul>

            </div>
        </nav>