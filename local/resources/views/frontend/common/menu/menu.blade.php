<div id="menu" class="container-fluid p-0 d-none d-md-block">

    <div id="menu-top">
        <div class="container">
            <div class="row p-0 align-self-center pt-2 pb-2">
                <div class="col-md-8 d-none d-lg-block d-md-block text-left align-self-center" id="fe_layout_topinfo">
                    <ul>
                        <li><p><i class="fas fa-phone-square"></i> 0989.480.048</p></li>
                        <li><p><i class="fas fa-clock"></i> Từ thứ hai đến chủ nhật: 7:00 - 22:00</p></li>
                    </ul>

                </div>
                <div class="col-md-4 col-sm-12 text-right align-self-center" id="fe_layout_topinfo_socialnw">
                    <a href="">
                        <div class="circle float-left d-lg-none d-md-none d-sm-block d-block"><i
                                    class="fas fa-bars"></i></div>
                    </a>
                    <a href="">
                        <div class="circle"><i class="fab fa-facebook-f"></i></div>
                    </a>
                    <a href="">
                        <div class="circle"><i class="fab fa-twitter"></i></div>
                    </a>
                    <a href="">
                        <div class="circle"><i class="fab fa-youtube"></i></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="menu-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pt-3 pb-3 text-center">
                    <ul>
                        <li><a href="{{URL::to('/')}}">Trang chủ</a></li>
                        <li><a href="{{URL::to('/gioi-thieu')}}">Giới Thiệu</a></li>
                        <li><a href="{{URL::to('danh-muc/hoc-lam-banh-mi')}}">
                                <div class="drop-hover">Học Làm Bánh Mì</div>
                            </a>
                        </li>
                        <li><a href="{{URL::to('danh-muc/hoc-lam-banh-kem')}}">Học làm bánh kem</a></li>
                        <li>
                            {{ Html::image('images/logo/logo.png','',array('class'=>'logo')) }}
                            <a href=""><span class="logo-slogan">Mr BA BAKERY</span></a>
                        </li>
                        <li><a href="{{URL::to('danh-muc/hoc-lam-heo-quay-vit-quay')}}">Học làm heo quay vịt quay</a></li>
                        <li><a href="{{URL::to('danh-muc/hoc-lam-xoi-che')}}">Học làm xôi chè</a></li>
                        <li><a href="{{URL::to('/album')}}">Hình Ảnh</a></li>
                        <li><a href="{{URL::to('/lien-he')}}">Liên Hệ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
