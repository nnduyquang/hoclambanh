var plugins = {
    menuSideBar: $('.sidebar'),
    slider: $('#slider'),
    owlCarouselProduct: $('.p-relative-owl'),
    gridAlbum: $('.grid-album'),
};
$(document).ready(function () {
    function sidebar() {
        var trigger = $('#trigger,#close');
        trigger.on('click', function () {
            $(this).toggleClass('active');
            plugins.menuSideBar.toggleClass('closed');
            $('#blurrMe').toggleClass('blurred')
        })
        $('#wrap-container').on('click', function () {
            if ($('#blurrMe').hasClass('blurred')) {
                $('#blurrMe').toggleClass('blurred')
                plugins.menuSideBar.toggleClass('closed');
            }
        })
    }
    sidebar();
    function runSlider() {
        plugins.slider.nivoSlider({
            effect: 'fade',
            animSpeed: 500,
            pauseTime: 3000,
            pauseOnHover: true,
            controlNav: false,
        });
    }
    function runOwlCarouselProduct() {
        plugins.owlCarouselProduct.owlCarousel({
            dots: false,
            nav: true,
            autoplay: true,
            navContainer: '.nav-arrow',
            loop: true,
            navText: ["<i class='fas fa-angle-left'></i>", "<i class='fas fa-angle-right'></i>"],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 4
                },
                1000: {
                    items: 4
                }
            }
        });
    }
    function runGridAlbum() {
        var $grid = plugins.gridAlbum.masonry({
            itemSelector: '.grid-item',
            percentPosition: true,
            columnWidth: '.grid-sizer'
        });
        $grid.imagesLoaded().progress(function () {
            $grid.masonry();
        });
        var isOpen = true;
        $('.choose-dd').click(function () {
            if (isOpen) {
                $('ul.ul-dd').addClass('open-dd');
                $('.fa-plus').css('display','none');
                $('.fa-minus').css('display','block');
                isOpen = false;
            } else {
                $('ul.ul-dd').removeClass('open-dd');
                $('.fa-plus').css('display','block');
                $('.fa-minus').css('display','none');
                isOpen = true;
            }
        });


    }
    if (plugins.slider.length) {
        runSlider();
    }
    if (plugins.owlCarouselProduct.length) {
        runOwlCarouselProduct();
    }
    if (plugins.gridAlbum.length) {
        runGridAlbum();
    }
});