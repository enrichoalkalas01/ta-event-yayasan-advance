<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\helpers\FileHelper;

/**
 * This is the model class for table "event".
 *
 * @property int $id
 * @property string $event_name
 * @property string $date_start
 * @property string $date_end
 * @property string|null $description
 * @property string|null $image
 * @property int|null $fee
 * @property int|null $created_at
 * @property int|null $updated_at
 *
 * @property Order[] $orders
 * @property UserEvent[] $userEvents
 */
class Event extends \yii\db\ActiveRecord
{
    /**
     * @var \yii\web\UploadedFile
     */
    public $imageFile;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'event';
    }

    public function behaviors(){
        return [
            TimestampBehavior::class
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['event_name', 'date_start', 'date_end'], 'required'],
            [['date_start', 'date_end'], 'safe'],
            [['description'], 'string'],
            [['imageFile'], 'image', 'extensions' => 'png, jpg, jpeg, webp',
                'maxSize' => 10 * 1024 * 1024,
                //'minWidth' => 100, 'maxWidth' => 1000,
                //'minHeight' => 100, 'maxHeight' => 1000
            ],
            [['fee','created_at','updated_at'], 'integer'],
            [['event_name'], 'string', 'max' => 255],
            [['image'], 'string', 'max' => 2000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'event_name' => 'Event Name',
            'date_start' => 'Date Start',
            'date_end' => 'Date End',
            'description' => 'Description',
            'image' => 'Event Image',
            'imageFile' => 'Event Image',
            'fee' => 'Fee',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Orders]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\OrderQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['event_id' => 'id']);
    }

    /**
     * Gets query for [[UserEvents]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\UserEventQuery
     */
    public function getUserEvents()
    {
        return $this->hasMany(UserEvent::className(), ['event_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\EventQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\EventQuery(get_called_class());
    }

    public function save($runValidation = true, $attributeNames = null){
        if ($this->imageFile) {
            $this->image = '/events/' . Yii::$app->security->generateRandomString() . '/' . $this->imageFile->name;
        }

        $transaction = Yii::$app->db->beginTransaction();
        $ok = parent::save($runValidation, $attributeNames);

        if ($ok && $this->imageFile) {
            $fullPath = Yii::getAlias('@frontend/web/storage' . $this->image);
            $dir = dirname($fullPath);
            if (!FileHelper::createDirectory($dir) | !$this->imageFile->saveAs($fullPath)) {
                $transaction->rollBack();

                return false;
            }
        }

        $transaction->commit();

        return $ok;
    }

    public function getImageUrl(){
        if($this->image){
            return Yii::$app->params['frontendUrl'] . 'storage' . $this->image;
        }

        //return Yii::$app->params
    }

    public function getShortDescription(){
        return \yii\helpers\StringHelper::truncateWords(strip_tags($this->description), 10);
    } 
}
