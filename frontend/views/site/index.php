<?php

/* @var $this yii\web\View */
/** @var \yii\data\ActiveDataProvider $dataProvider */

$this->title = 'My Yii Application';
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
    <div class="row section-1">
        <div class="col-md-12 title-box text-center" style="padding: 20px 0;">
            <h2>Event Kami</h2>
        </div>

        <?php echo \yii\widgets\ListView::widget([
            'dataProvider' => $dataProvider,
            'layout' => '{summary}<div class="row">{items}</div>{pager}',
            'itemView' => '_event_item',
            'itemOptions' => [
                'class' => 'col-sm-12 col-md-6 col-lg-3'
            ]
        ]) ?>
    </div>

    <!-- Section 2 -->
    <div class="row section-2">
        <div class="col-md-12 section-box">
            <div class="row wrapper-section">
                <div class="col-md-6 left-side text-box">
                    <div class="wrapper-text">
                        <h4>Title Here</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                </div>
                <div class="col-md-6 right-side images-box">
                    <div class="image" style="background-image: url('https://cdn1-production-images-kly.akamaized.net/CTp92DhnXYO7tlLuIYR95eA416A=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3343581/original/095226300_1610083522-plastic-building-blocks-background-3d-render_68747-136.jpg');"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 2 -->
    <div class="row section-2">
        <div class="col-md-12 section-box">
            <div class="row wrapper-section">
                <div class="col-md-6 left-side images-box">
                    <div class="image" style="background-image: url('https://cdn1-production-images-kly.akamaized.net/CTp92DhnXYO7tlLuIYR95eA416A=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3343581/original/095226300_1610083522-plastic-building-blocks-background-3d-render_68747-136.jpg');"></div>
                </div>
                <div class="col-md-6 right-side text-box">
                    <div class="wrapper-text">
                        <h4>Title Here</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <script type="text/javascript">
    let ProductSectionOne = document.querySelector('.section-1 .product-box .wrapper-product')
    for ( let i = 0; i < 4; i++ ) {
        ProductSectionOne.innerHTML += `
            <div class="col-sm-12 col-md-6 col-lg-3 products products-${ i }">
                <div class="wrapper-product card">
                    <a href="">
                        <div class="image-box">
                            <div class="images" style="background-image: url('https://cdn1-production-images-kly.akamaized.net/CTp92DhnXYO7tlLuIYR95eA416A=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3343581/original/095226300_1610083522-plastic-building-blocks-background-3d-render_68747-136.jpg');"></div>
                        </div>
                        <div class="text-box">
                            <h4>Title product ${ i + 1 }</h4>
                            <p>description product</p>
                        </div>    
                    </a>
                </div>
            </div>
        `
    }
</script> -->
