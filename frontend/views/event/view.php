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

<section id="app" class="container-fluid">
    
    <!-- Banner Homepages -->
    <div class="row banner-box">
        <div class="col-md-12 content">
            <div class="image-box" style="height: 350px; background-image: url('https://cdn1-production-images-kly.akamaized.net/CTp92DhnXYO7tlLuIYR95eA416A=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3343581/original/095226300_1610083522-plastic-building-blocks-background-3d-render_68747-136.jpg');">
                <div class="backdrop">
                    <div class="box-text"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 1 -->
    <div class="row event-box" id="events-detail">
            <div class="col-lg-8 col-md-7 col-sm-12 wrapper-left">
                <div class="row wrapper-box">
                    <div class="col-md-12 title-box">
                        <h1><?php echo $model->event_name ?></h1>
                    </div>
                    <div class="col-md-12 description-box">
                        <?php echo $model->description ?>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-5 col-sm-12 wrapper-right">
                <div class="row wrapper-box">
                    <div class="col-md-12 card">
                        <div class="wrapper-top btn-primary">
                            <h5>Buy Tickets Here..</h5>
                        </div>
                        <!-- <div class="wrapper-middle">
                            <span class="bold">Date Register : </span>
                            <span class="thin">1 November 2021 - 1 December 2021</span>
                        </div> -->
                        <div class="wrapper-middle">
                            <span class="bold">Date Event : </span>
                            <span class="thin"><?php echo $model->date_start ?> - <?php echo $model->date_end ?></span>
                        </div>
                        <div class="wrapper-middle">
                            <span class="bold">Ticket Price : </span>
                            <span>Rp.</span>
                            <span><?php echo $model->fee ?></span>
                        </div>
                        <form class="ticket-box" action="/user-event/create" method="post">
                            <!-- <input name="user_id" value="1" id="user_id" hidden /> -->
                            <input type="hidden" name="user_id" value="<?php echo Yii::$app->user->id ?>" id="user_id" />
                            <input type="hidden" name="event_id" value="<?php echo $model->id ?>" id="event_id" />
                            <input type="hidden" name="fee" value="<?php echo $model->fee ?>" id="fee" />
                            <button type="submit" class="btn btn-primary">Join Event</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</section>

