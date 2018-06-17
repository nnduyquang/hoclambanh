<div id="h_product">
    <div class="container p-0">
        <div class="row">
            <div class="col-md-12 text-center mb-5 mt-5 header-top">
                <p>NHỮNG KHÓA HỌC LÀM BÁNH MỚI NHẤT</p>
                <hr>
                <span>Chúng tôi cập nhật những khóa học làm bánh mới nhất phù hợp với nhu cầu các bạn</span>
            </div>

            <div class="col-md-12">
                <div class="container">
                    <div class="row">

                        {{--saan pham on lates product--}}
                        @foreach($data['products'] as $key=>$item)
                            <div class="col-md-3 col-sm-6 mb-4 border-brown">
                                <div class="card one-product h-100">
                                    <div class="wrap_product">
                                        <a href="{{URL::to('khoa-hoc/'.$item->path)}}">
                                            {{ Html::image($item->image,'',array('class'=>'')) }}
                                        </a>
                                        <div class="pro-hover-info">
                                            <a href="{{URL::to('khoa-hoc/'.$item->path)}}">
                                                <div class="btn-view-course">
                                                    <i class="fas fa-search"></i>
                                                </div>
                                            </a>

                                            <p style="font-size: 15px;color: white">{{$item->title}}</p>
                                                <span style="color: white;margin-top: 15px;">Xem thông tin khóa học</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="col-md-12 text-center mb-5 mt-5">
                            <a href="{{URL::to('danh-muc/hoc-lam-banh-mi')}}" class="btn-view-all-course">Xem Tất Cả Khóa Học</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>