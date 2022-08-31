<?php 

namespace backend\controllers;

use yii\web\Controller;

class WebController extends Controller{

    public function actionMailbox(){
        return $this->render('mailbox');
    }

    public function actionMailDetail(){
        return $this->render('mail_detail');
    }

    public function actionMailCompose(){
        return $this->render('mail_compose');
    }
    
}