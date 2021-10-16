<?php

/* @var $this yii\web\View */
/** @var \yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Events';
?>

<section id="app" class="container-fluid">
    <!-- Banner Homepages -->
    <div class="row banner-box">
        <div class="col-md-12 content">
            <div class="image-box" style="background-image: url('https://cdn1-production-images-kly.akamaized.net/CTp92DhnXYO7tlLuIYR95eA416A=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3343581/original/095226300_1610083522-plastic-building-blocks-background-3d-render_68747-136.jpg');">
                <div class="backdrop">
                    <div class="box-text">
                        <h1>Title Banner Here</h1>
                        <p>Description here</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 1 -->
    <div class="row event-box" id="wrapper-events">
        <div class="col-md-12 title-box" style="padding: 25px 0; text-align: center;">
            <!-- <h2>Event List Here..</h2> -->
        </div>
        <div class="col-md-12 event-box">
            <div class="row wrapper-event">
            <?php echo \yii\widgets\ListView::widget([
                'dataProvider' => $dataProvider,
                'layout' => '{summary}<div class="row">{items}</div>{pager}',
                'itemView' => '_event_item',
                'itemOptions' => [
                    'class' => 'col-sm-12 col-md-6 col-lg-3'
                ]
            ]) ?>
            </div>
        </div>
    </div>    
</section>