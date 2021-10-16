<div class="products products-<?php echo $model->id ?>">
    <div class="wrapper-eve card">
        <a href="/event/view?id=<?php echo $model->id ?>">
            <div class="image-box">
                <div class="images" style="background-image: url('https://cdn1-production-images-kly.akamaized.net/CTp92DhnXYO7tlLuIYR95eA416A=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3343581/original/095226300_1610083522-plastic-building-blocks-background-3d-render_68747-136.jpg');"></div>
            </div>
            <div class="text-box">
                <h6><?php echo $model->event_name ?></h6>
                <?php echo $model->getShortDescription() ?>

                <div class="box-price active">
                    <span>Rp.</span>
                    <span><?php echo $model->fee ?></span>
                </div>
            </div>    
        </a>
    </div>
</div>