<div class="container-fluid mb-5" id="fe_h_khoahockhuyenmai">
    <div class="container">
        <div class="row special-course-cooking">

            <div class="col-md-12 text-center mb-5 mt-5">
                <p>KHÓA HỌC LÀM BÁNH NHANH</p>
                <hr>
                <span>Học 1 kèm 1, bao làm được, có bảo hành, bao nguyên liệu, dụng cụ, bao mọi thứ</span>
            </div>

            <div class="col-md-12 position-relative">

                <div class="tab">
                    <a class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">
                        {{ Html::image('images/temps/home/banh_mi_tuoi.JPG','',array('class'=>'')) }}
                    </a>
                    <a class="tablinks" onclick="openCity(event, 'Paris')">
                        {{ Html::image('images/temps/home/cake_fresh.jpg','',array('class'=>'')) }}
                    </a>
                    <a class="tablinks" onclick="openCity(event, 'Tokyo')">
                        {{ Html::image('images/temps/home/pho.jpg','',array('class'=>'')) }}
                    </a>
                </div>

                <div id="London" class="tabcontent p-1 position-relative">
                    <div class="row p-1 pos">
                        <div class="col-md-6 p-3 text-center" style="line-height: 1.5">
                            <p>HỌC LÀM BÁNH MÌ </p><br>
                            Nhờ vào nguyên liệu tươi ngon và bàn tay chế biến khéo léo của đội ngũ đầu bếp, các sản phẩm bánh mì được ra lò thơm ngon, chất lượng. Chẳng những ngon miệng, đẹp mắt, giàu chất dinh dưỡng mà còn mang đến sự hứng thú cho người thưởng thức
                        </div>
                        <div class="col-md-6 text-right">
                            {{ Html::image('images/temps/home/banh_mi_tuoi.JPG','',array('style'=>'width: 100%;height: auto;margin: auto')) }}
                        </div>
                    </div>
                </div>

                <div id="Paris" class="tabcontent position-relative">
                    <div class="row p-1 pos">
                        <div class="col-md-6 p-3 text-center" style="line-height: 1.5">
                            <p>HỌC LÀM BÁNH KEM </p><br>
                            <br>
                            Để tạo ra những chiếc bánh kem mang hương vị “nhà nghề”, một người mới bắt đầu cần dành nhiều thời gian hơn cho sự tìm tòi, khám phá và thậm chí là mang vào hương vị bánh cả cái tâm và những trải nghiệm mới mẻ sau mỗi lần thực hiện một loại bánh khác nhau. Vì thế, việc tham gia vào những lớp học làm bánh kem cũng giống như bạn đang bước vào một thế giới ngọt ngào đầy màu sắc, điều cần thiết chính là tự mình lật giở những trang sách mới, tận hưởng thời gian nhàn rỗi trong gian bếp bánh và dần biến đam mê của mình trở thành động lực học tập để thành nghề.
                        </div>
                        <div class="col-md-6 text-right">
                            {{ Html::image('images/temps/home/cake_fresh.jpg','',array('style'=>'width: 100%;height: auto;margin: auto')) }}
                        </div>
                    </div>
                </div>

                <div id="Tokyo" class="tabcontent position-relative">
                    <div class="row p-1 pos">
                        <div class="col-md-6 p-3 text-center" style="line-height: 1.5">
                            <p>CÁC MÓN NGON KHÁC</p><br>
                            <br>
                            món Bún Bò Huế và Phở bò đã không còn xa lạ với hầu hết thực khách. Nó đã trở thành món ăn “khoái khẩu” không chỉ với người dân Việt Nam mà còn tạo ấn tượng trong lòng thực khách thế giới. Hiện nay, rất nhiều mô hình kinh doanh về các món ăn này xuất hiện. Tuy nhiên, để tìm được địa chỉ thưởng thức hương vị thơm ngon, đậm đà đúng nghĩa của món Phở, Bún Bò Huế chuẩn vị không hề dễ dàng.

                            "Mong muốn lớn nhất của tôi là tìm nơi dạy nấu ăn chuyên nghiệp & học được bí quyết nấu Phở, Bún Bò Huế chất lượng để kinh doanh quán thành công và xây dựng thương hiệu ngày càng được mọi người biết đến…"
                        </div>
                        <div class="col-md-6 text-right">
                            {{ Html::image('images/temps/home/pho.jpg','',array('style'=>'width: 100%;height: auto;margin: auto')) }}
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>