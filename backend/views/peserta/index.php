<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\grid\ActionColumn;


/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Peserta';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            [
                'label' => 'Nama Lengkap',
                'attribute'=> 'name',
            ],
            //'username',
            //'auth_key',
            //'password_hash',
            //'password_reset_token',
            'email:email',
            //'role',
            //'status',
            //'created_at',
            //'updated_at',
            //'verification_token',

            ['class' => ActionColumn::className(),'template'=>'{view}' ],
        ],
    ]); ?>


</div>
