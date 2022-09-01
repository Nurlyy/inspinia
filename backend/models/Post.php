<?php

namespace app\models;

use common\models\User;
use PDO;
use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\web\UploadedFile;

/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $body
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $status
 * @property int|null $created_by
 *
 * @property User $createdBy
 */
class Post extends \yii\db\ActiveRecord
{

    public function behaviors()
    {
        return [
            TimestampBehavior::class,
            [
                'class' => BlameableBehavior::class,
                'updatedByAttribute' => false,
            ],
        ];
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['body'], 'string'],
            [['image_url'], 'file', 'skipOnEmpty' => true, 'extensions' => 'jpg, png'],
            [['created_at', 'updated_at', 'status', 'created_by'], 'integer'],
            [['title'], 'string', 'max' => 255],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_by' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'body' => 'Body',
            'image_url' => "Image",
            'created_at' => 'Creaed At',
            'updated_at' => 'Updated At',
            'status' => 'Status',
            'created_by' => 'Created By',
        ];
    }

    /**
     * Gets query for [[CreatedBy]].
     *
     * @return \yii\db\ActiveQuery|\app\models\query\UserQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\query\PostQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\PostQuery(get_called_class());
    }

    public function afterDelete()
    {
        parent::afterDelete();
        $path = Yii::getAlias('@backend/web/uploads/' . $this->image_url);
        if (file_exists($path)) {
            unlink($path);
        }
    }

    
}
