@include('frontend.page.introduce_content')
<div id="p_relate">
    <div class="container p-0">
        <div class="row">
            <div class="col-md-12 text-left mb-5 mt-5" id="fe_home_outlates_products_p">
                <p class="pb-3 mb-3">KHÓA HỌC BẠN CÓ THỂ QUAN TÂM</p>

                <span class="pt-3">Khóa học làm bánh tại trường rất đa dạng, các bạn tham khảo nhé</span>
            </div>
            <div class="col-md-12">
                <div class="product-relative">
                    <div class="owl-carousel owl-theme p-relative-owl">
                        @foreach($data['orderProduct'] as $key=>$item)
                            <div class="fe_pro_detailpro">
                                <a href="{{URL::to('khoa-hoc/'.$item->path)}}">
                                    {{ Html::image($item->image,'',array('class'=>'img-one-product-1')) }}
                                </a>
                                <div class="pro-hover-info">
                                    <a href="">
                                        <div class="btn-view-course">
                                            <i class="fas fa-search"></i>
                                        </div>
                                    </a>

                                    <p style="font-size: 15px;color: white">{{$item->title}}</p>
                                    <span style="color: white;margin-top: 15px;">Xem thông tin khóa học</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="nav-arrow">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>