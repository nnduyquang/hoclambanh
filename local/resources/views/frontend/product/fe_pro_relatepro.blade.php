<style>

    #fe_home_outlates_products_p > p {
        font-family: 'Nunito Sans', sans-serif;
        font-size: 18px;
        font-weight: 600;
        color: #684f40;
        display: block;
        border-bottom: 2px solid #d4d4d4;
        position: relative;
    }

    #fe_home_outlates_products_p > p:after{
        content: '';
        position: absolute;
        z-index: 1;
        width: 50px;
        height: 2px;
        background-color: #fdb822;
        left: 0;
        bottom: -2px;

    }




    div.fe_pro_detailpro {
        position: relative;
        width: 99%;
        margin: auto;
        text-align: center;
        background-color: #f9f9f9;
        border: 2px solid #684f40;
        vertical-align: middle;
        transition: .3s;
    }

    div.fe_pro_detailpro:hover a img {
        opacity: 0.6;
    }

    div.fe_pro_detailpro:hover .pro-hover-info {
        display: block;
        opacity: 0.9;
    }

    div.fe_pro_detailpro a img {
        padding: 25px 0 25px 0;
        border: 7px solid white;
        box-sizing: border-box;
    }

    .pro-hover-info {
        display: none;
        position: absolute;
        top: 50%;
        opacity: 0.3;
        width: 100%;
        height: 50%;
        background-color: rgba(253, 184, 34, 0.9);
        z-index: 3;
        transition: .3s;
        vertical-align: center;
        text-align: center;
        color: white;
    }

    .pro-hover-info span{
        color: white;
    }

    div.btn-view-course {
        position: absolute;
        z-index: 1;
        width: 43px;
        height: 43px;
        border-radius: 50%;
        border: 3px solid #fdb822;
        top: 0px;
        left: 50%;
        transform: translate(-50%, -50%);
        color: #fdb822;
        background-color: #fff;
        transition: .3s;
        line-height: 36px;
    }

    div.btn-view-course:hover {
        border: 3px solid #1b1e21;
        background-color: #1b1e21;
        color: white;
    }



    div.pro-hover-info > p {
        padding-top: 25px;
    }

</style>

<div class="container-fluid">
    <div class="container p-0">
        <div class="row">
            <div class="col-md-12 text-left mb-5 mt-5" id="fe_home_outlates_products_p">
                <p class="pb-3 mb-3">REALTED COURSE</p>

                <span class="pt-3">Check some of our best products and feel the great passion for food</span>
            </div>

            <div class="col-md-12">
                <div class="container">
                    <div class="row">

                        {{--saan pham on lates product--}}

                        <div class="col-md-3 mb-4 border-brown">
                            <div class="fe_pro_detailpro">
                                <a href="sanpham-chitiet.html">
                                    <img src="http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/11/bread-1-600x600.jpg"
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

                        <div class="col-md-3 mb-4 border-brown">
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
                                    <p class="pro_title" style="font-size: 15px;color: white">BÁNH SỪNG TRÂU</p>
                                    <span style="color: white;margin-top: 15px;">Xem thông tin khóa học</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 mb-4 border-brown">
                            <div class="fe_pro_detailpro">
                                <a href="sanpham-chitiet.html">

                                    <img src="http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/11/muffin-2-600x600.jpg"
                                         alt="" style="width: 98%;height: auto; margin: 3px">

                                </a>

                                <div class="pro-hover-info">
                                    <a href="">
                                        <div class="btn-view-course">
                                            <i class="fas fa-search"></i>
                                        </div>
                                    </a>
                                    <p class="pro_title" style="font-size: 15px;color: white">BÁNH SỪNG TRÂU</p>
                                    <span style="color: white;margin-top: 15px;">Xem thông tin khóa học</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 mb-4 border-brown">
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

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>