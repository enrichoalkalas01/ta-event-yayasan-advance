<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Event */

$this->title = $model->event_name;
$this->params['breadcrumbs'][] = ['label' => 'Events', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="event-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'event_name',
            'date_start',
            'date_end',
            'description:ntext',
            // 'image',
            'fee',
            'created_at:datetime',
            'updated_at:datetime',
        ],
    ]) ?>

<h3>List Peserta</h3>

<table class="table table-sm">
    <thead>
        <tr>
            <th>#</th>
            <th>Nama Peserta</th>
            <th>Kontak</th>
        </tr>
    </thead>
    <!-- / -->
    <tbody>
    <?php foreach ($model->userEvents as $user): ?>
        <tr>
            <td>1</td>
            <td>
                <?php
                    $userId = $user->user;
                    echo $userId->name;
                ?>
            </td>
            <td>
                <?php
                    $userId = $user->user;
                    echo $userId->email;
                ?>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

</div>
