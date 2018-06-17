<div id="h_slider">
    <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="edit-slide">
                    {{ Html::image('images/sliders/slider1.jpg','',array('class'=>'main-slider')) }}
                </div>
            </div>
            <div class="carousel-item">
                <div class="edit-slide">
                    {{ Html::image('images/sliders/slider2.jpg','',array('class'=>'main-slider')) }}
                </div>
            </div>
            <div class="carousel-item">
                <div class="edit-slide">
                    {{ Html::image('images/sliders/slider3.jpg','',array('class'=>'main-slider')) }}
                </div>
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>