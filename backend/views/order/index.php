<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\grid\ActionColumn;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\OrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute'=> 'user_id',
                'value'=> 'user.name',
            ],
            [
                'attribute'=> 'event_id',
                'value'=> 'event.event_name',
            ],
            [
                'label' => 'Fee',
                'attribute'=> 'event_id',
                'value'=> 'event.fee',
            ],
            'status',
            [
                'label' => 'Bukti Pembayaran',
                'attribute' => 'bukti_pembayaran',
                'content' => function ($model) {
                    /** @var \common\models\Order $model */
                    return Html::img($model->getImageUrl(), ['style' => 'width: 50px']);
                }
            ],
            // 'bukti_pembayaran',
            //'created_at',
            //'updated_at',

            // ['class' => 'yii\grid\ActionColumn'],
            //['class' => ActionColumn::className(),'template'=>'{view} {update}' ]
        ],
    ]); ?>


</div>
