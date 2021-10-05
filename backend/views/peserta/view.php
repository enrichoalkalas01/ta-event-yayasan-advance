<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);

//$kelasPeserta = $model->userEvents;
?>
<div class="user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'id',
            [
                'label' => 'Nama Lengkap',
                'attribute'=> 'name',
            ],
            // 'username',
            // 'auth_key',
            // 'password_hash',
            // 'password_reset_token',
            'email:email',
            // 'role',
            // 'status',
            // 'created_at',
            // 'updated_at',
            // 'verification_token',
        ],
    ]) ?>

    <h3>List Event</h3>

    <table class="table table-sm">
        <thead>
            <tr>
                <th>#</th>
                <th>Event</th>
            </tr>
        </thead>
        <!-- / -->
        <tbody>
        <?php foreach ($model->userEvents as $event): ?>
            <tr>
                <td>1</td>
                <td>
                    <?php
                        $eventId = $event->event;
                        echo $eventId->event_name 
                    ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

</div>
