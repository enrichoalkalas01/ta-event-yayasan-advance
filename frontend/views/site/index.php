<?php

/* @var $this yii\web\View */
/** @var \yii\data\ActiveDataProvider $dataProvider */

$this->title = 'My Yii Application';
?>

<section id="app2" class="container-fluid">
    <!-- Banner Homepages -->
    <div class="row banner-box">
        <div class="col-md-12 content">
            <div class="image-box" style="background-image: url('images/banner-thumbnail.jpg');">
                <div class="backdrop">
                    <div class="box-text">
                        <h1 class="roboto m-0" style="font-weight: 1000;">We Help, Because We Care</h1>
                        <p class="nunito">We love to help people who need a help</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mission-box">
        <div class="col-12 title-box text-center mb-4">
            <h2 class="roboto font-bold">Visi & Misi</h2>
        </div>
        <div class="col-12 content-box">
            <div class="row wrapper-content-box">
                <div class="col-12 col-lg-4 card-content">
                    <div class="card" style="width: 18rem;">
                        <div class="icon-box text-center">
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title roboto">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 card-content">
                    <div class="card" style="width: 18rem;">
                        <div class="icon-box text-center">
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title roboto">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 card-content">
                    <div class="card" style="width: 18rem;">
                        <div class="icon-box text-center">
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title roboto">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 1 -->
    <!-- <div class="row section-1">
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
    </div> -->

    <!-- Section 2 -->
    <!-- <div class="row section-2">
        <div class="col-md-12 section-box">
            <div class="row wrapper-section">
                <div class="col-md-6 left-side text-box">
                    <div class="wrapper-text">
                        <h4>Profil Yayasan Sosial Yatim Piatu & Duafa Anggi Foundation</h4>
                        <p>
                            Anggi Foundation merupakan organisasi yang bergerak dibidang pendidikan. Anggi Foundation berdiri pada tanggal 13 Mei 1999, sesaat setelah wafatnya putri tercinta, Anggi Ratri Anggorokasih dalam usia 20 tahun. 
                            Almarhumah Anggi meninggal karena kecelakaan saat akan berangkat kuliah di Universitas Indonesia, Depok. Kepergian Anggi ke haribaan Illahi, menggugah kami, orang tua, sanak keluarga dan sahabat-sahabatnya, terpanggil untuk meneruskan cita-cita luhurnya. 
                            Gadis belia yang menyukai tugas-tugas sosial ini, selalu terpacu untuk membantu anak-anak pintar yang tidak mampu. Keinginan itu telah dirintisnya ketika setiap hari minggu, ia meluangkan waktu di pagi hari, datang ke pesantren Nurul Huda untuk mengajar Bahasa Inggris. 
                        </p>
                        <p>
                            Dengan harapan ingin meneruskan cita-cita almarhumah, keluarga sepakat untuk mendirikan yayasan sosial bernama Anggi Foundation. Yayasan Sosial Yatim Piatu dan Duafa Anggi Foundation merupakan lembaga sosial non panti yang telah berbadan hukum dengan Akta Notaris Ibu Masnah Sari, S.H. No. 125 Tahun 1999 dan mempunyai Visi dan Misi yaitu akses pendidikan yang meyeluruh dengan memberikan bantuan di bidang pendidikan kepada masyarakat yang kurang mampu. 
                        </p>
                    </div>
                </div>
                <div class="col-md-6 right-side images-box">
                    <div>
                        <img class="image" src="images/fe1.jpg" alt="gambar">
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Section 2 -->
    <div class="row profile-box">
        <div class="col-12 col-lg-6 left-content">
            <div class="row wrapper-content">
                <div class="col-12">
                    
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 right-content">

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
