<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Order */

$this->title = 'Create Order';
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row order-create">
    <div class="col-md-12 wrapper-card">
        <div class="row card">
            <div class="col-12">
                <h1><?= Html::encode($this->title) ?></h1>

                <?= $this->render('_form', [
                    'model' => $model,
                    'user_id' => $user_id,
                    'event_id' => $event_id,
                ]) ?>
            </div>
        </div>
    </div>
</div>
