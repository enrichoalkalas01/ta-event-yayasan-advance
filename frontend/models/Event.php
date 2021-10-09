<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

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
            [['fee'], 'integer'],
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
            'image' => 'Image',
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
}
