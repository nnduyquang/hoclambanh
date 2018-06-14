<div class="container-fluid" id="fe_home_outlates_products">
    <div class="container p-0">
        <div class="row">
            <div class="col-md-12 text-center mb-5 mt-5">
                <p>OUR LATEST BAKERY PRODUCTS</p>
                <hr>
                <span>Check some of our best products and feel the great passion for food</span>
            </div>

            <div class="col-md-12">
                <div class="container">
                    <div class="row">

                        {{--saan pham on lates product--}}
                        @foreach($data['products'] as $key=>$item)
                            <div class="col-md-3 col-sm-6 mb-4 border-brown">
                                <div class="card one-product h-100">
                                    <div class="fe_pro_detailpro">
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


                        <div class="col-md-3 col-sm-6 mb-4 border-brown">
                            <div class="fe_pro_detailpro">
                                <a href="sanpham-chitiet.html">

                                    <img src="http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/11/danish-1-600x600.jpg"
                                         alt="" style="width: 98%;height: auto; margin: 3px">

                                </a>

                                <div class="pro-hover-info">
                                    <a href="">
                                        <div class="btn-view-course">
                                            <i class="fas fa-search"></i>
                                        </div>
                                    </a>

                                    <p style="font-size: 15px;color: white">BÁNH SỪNG TRÂU</p>
                                    <span style="color: white;margin-top: 15px;">Xem thông tin khóa học</span>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-12 text-center mb-5 mt-5">
                            <a href="" class="btn-view-all-course">VIEW ALL COURSE</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>