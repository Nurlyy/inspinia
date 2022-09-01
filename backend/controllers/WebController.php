<?php

namespace backend\controllers;

use app\models\Post;
use Yii;
use yii\data\Pagination;
use yii\web\Controller;
use yii\web\UploadedFile;

use function PHPUnit\Framework\isEmpty;

class WebController extends Controller
{

    public function actionPostEdit()
    {
        $post = new Post();
        if ($this->request->isPost) {
            $post->load($this->request->post());
            $uploaded_file = UploadedFile::getInstance($post, 'image_url');
            $post->image_url = $uploaded_file;
            if ($post->save()) {
                $uploaded_file->saveAs(Yii::getAlias('@backend/web/uploads/' . $uploaded_file->basename . '.' . $uploaded_file->extension));
                return $this->redirect('/web/all-posts');
            }
        }
        return $this->render('post_edit', [
            'post' => $post
        ]);
    }

    public function actionPostUpdate($post_id)
    {
        $post = Post::find()->where(['id' => $post_id])->one();
        $old_image = $post->image_url;
        if ($this->request->isPost) {
            $post->load($this->request->post());
            $uploaded_file = UploadedFile::getInstance($post, 'image_url');
            if(empty($uploaded_file)) 
                $post->image_url = $old_image;
            else
                $post->image_url = $uploaded_file;
            if ($post->save()) {
                if (!empty($uploaded_file)) {
                    $uploaded_file->saveAs(Yii::getAlias('@backend/web/uploads/' . $uploaded_file->basename . '.' . $uploaded_file->extension));
                    unlink(Yii::getAlias('@backend/web/uploads/' . $old_image));
                }
                return $this->redirect('/web/all-posts');
            }
        }
        return $this->render('post_update', ['post' => $post]);
    }

    public function actionPostDelete($postId)
    {
        $post = Post::findOne($postId);
        $post->delete();
        return $this->redirect('/web/all-posts');
    }

    public function actionAllPosts()
    {
        $user = Yii::$app->user->id;
        $posts = Post::find()->where(['created_by' => $user])->all();
        // $query = Post::find()->where(['created_by' => $user]);
        // $pages = new Pagination(['totalCount' => $query->count()]);
        // $posts = $query->offset($pages->offset)->limit(5)->all();
        return $this->render('all_posts', [
            'posts' => $posts,
            // 'pages' => $pages
        ]);
    }
}
