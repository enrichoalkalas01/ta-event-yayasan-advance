<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\helpers\FileHelper;

/**
 * This is the model class for table "order".
 *
 * @property int $id
 * @property int $user_id
 * @property int $event_id
 * @property int|null $status
 * @property string|null $bukti_pembayaran
 * @property int|null $created_at
 * @property int|null $updated_at
 *
 * @property Event $event
 * @property User $user
 */
class Order extends \yii\db\ActiveRecord
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
        return 'order';
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
            [['user_id', 'event_id'], 'required'],
            [['user_id', 'event_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['imageFile'], 'image', 'extensions' => 'png, jpg, jpeg, webp',
                'maxSize' => 10 * 1024 * 1024,
                //'minWidth' => 100, 'maxWidth' => 1000,
                //'minHeight' => 100, 'maxHeight' => 1000
            ],
            [['bukti_pembayaran'], 'string', 'max' => 2000],
            [['event_id'], 'exist', 'skipOnError' => true, 'targetClass' => Event::className(), 'targetAttribute' => ['event_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID Order',
            'user_id' => 'Name',
            'event_id' => 'Event',
            'status' => 'Status',
            'bukti_pembayaran' => 'Bukti Pembayaran',
            'imageFile' => 'Bukti Pembayaran',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Event]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\EventQuery
     */
    public function getEvent()
    {
        return $this->hasOne(Event::className(), ['id' => 'event_id']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\UserQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\OrderQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\OrderQuery(get_called_class());
    }

    public function save($runValidation = true, $attributeNames = null){
        if ($this->imageFile) {
            $this->bukti_pembayaran = '/orders/' . Yii::$app->security->generateRandomString() . '/' . $this->imageFile->name;
        }

        $transaction = Yii::$app->db->beginTransaction();
        $ok = parent::save($runValidation, $attributeNames);

        if ($ok && $this->imageFile) {
            $fullPath = Yii::getAlias('@frontend/web/storage' . $this->bukti_pembayaran);
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
        return Yii::$app->params['frontendUrl'] . '/storage/' . $this->bukti_pembayaran;
        
        // if($this->image){
        //     return Yii::$app->params['frontendUrl'] . 'storage' . $this->image;
        // }

        //return Yii::$app->params
    }
}
