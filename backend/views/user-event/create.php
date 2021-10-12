<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\UserEvent */

$this->title = 'Tambah Peserta';
$this->params['breadcrumbs'][] = ['label' => 'User Events', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-event-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'user_id' => $user_id,
        'event_id' => $event_id,
    ]) ?>

</div>
