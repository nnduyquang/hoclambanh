<div id="p_detail">
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-md-5">
                {{ Html::image($data['product']->image,'',array('class'=>'')) }}
            </div>
            <div class="col-md-7">
                <div class="row" id="fe_pro_detail_spec">
                    <div class="col-12 border-top border-bottom p-3">
                        <p>{{$data['product']->title}}</p>
                    </div>
                    <div class="col-12 pt-3 pb-3">
                        {{--<p>$12.95</p>--}}
                        <span>
                             {!! $data['product']->description !!}
                        </span>

                        <br>
                        <a href="">
                            <button>
                                <i class="far fa-edit"></i> GỌI NGAY: 0989.480.048
                            </button>
                        </a>
                    </div>

                    <div class="col-12 pt-3 pb-3 border-bottom border-top">
                        <p>Danh Mục: <span>{{$data['product']->categoryitem->name}}</span></p>

                    </div>

                    <div class="col-12 pt-3 pb-3">

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


            <div class="col-md-12 mt-5" id="tab_detail_pro">
                <div class="tab2">
                    <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">MÔ TẢ KHÓA HỌC</button>
                    {{--<button class="tablinks" onclick="openCity(event, 'Paris')">ADDITIONAL INFORMATION</button>--}}
                    {{--<button class="tablinks" onclick="openCity(event, 'Tokyo')">REVIEW(0)</button>--}}
                </div>

                <div id="London" class="tabcontent2">
                    {!!  $data['product']->content!!}
                </div>

                {{--<div id="Paris" class="tabcontent2">--}}
                   {{--<span> Channeling the old-world techniques of our Grandma Grace and her unwavering ability to produce--}}
                        {{--hand-crafted cookies consistently both delicious and ornate, her much beloved amaretti cookie--}}
                        {{--recipe will take you to straight into the doors of the authentic bakeries of Lipari, Italy and--}}
                        {{--their intoxicating aromas. Created carefully with the same love, attention and high-quality, real--}}
                        {{--ingredients we know our nonna would only approve of, our fresh amaretto cookie dough is hand-dipped--}}
                        {{--with care in crystallized sugar and adorned with a whole almond just before it’s placed into our--}}
                        {{--oven to gently bake to perfection. The final result is a rich, bold, dense cookie adored by the--}}
                        {{--whole famiglia.--}}
                    {{--<br>--}}
                       {{--<br>--}}
                    {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore--}}
                        {{--et dolore magna aliqua. Faucibus vitae aliquet nec ullamcorper sit amet risus nullam. Mi tempus--}}
                        {{--imperdiet nulla malesuada pellentesque elit eget gravida. Sit amet commodo nulla facilisi nullam--}}
                        {{--vehicula ipsum. Sagittis eu volutpat odio facilisis. Leo a diam sollicitudin tempor id eu nisl nunc.--}}
                        {{--Habitasse platea dictumst quisque sagittis purus sit amet. Diam quam nulla porttitor massa id neque.--}}
                        {{--Risus in hendrerit gravida rutrum quisque. Orci sagittis eu volutpat odio facilisis mauris sit amet--}}
                        {{--massa. Condimentum id venenatis a condimentum vitae. Diam ut venenatis tellus in metus vulputate eu.--}}
                        {{--Nisi porta lorem mollis aliquam ut. Ut etiam sit amet nisl purus in mollis nunc sed.--}}
                        {{--</span>--}}
                {{--</div>--}}

                {{--<div id="Tokyo" class="tabcontent2">--}}
                    {{--<span> Channeling the old-world techniques of our Grandma Grace and her unwavering ability to produce--}}
                        {{--hand-crafted cookies consistently both delicious and ornate, her much beloved amaretti cookie--}}
                        {{--recipe will take you to straight into the doors of the authentic bakeries of Lipari, Italy and--}}
                        {{--their intoxicating aromas. Created carefully with the same love, attention and high-quality, real--}}
                        {{--ingredients we know our nonna would only approve of, our fresh amaretto cookie dough is hand-dipped--}}
                        {{--with care in crystallized sugar and adorned with a whole almond just before it’s placed into our--}}
                        {{--oven to gently bake to perfection. The final result is a rich, bold, dense cookie adored by the--}}
                        {{--whole famiglia.--}}
                    {{--<br>--}}
                        {{--<br>--}}
                    {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore--}}
                        {{--et dolore magna aliqua. Faucibus vitae aliquet nec ullamcorper sit amet risus nullam. Mi tempus--}}
                        {{--imperdiet nulla malesuada pellentesque elit eget gravida. Sit amet commodo nulla facilisi nullam--}}
                        {{--vehicula ipsum. Sagittis eu volutpat odio facilisis. Leo a diam sollicitudin tempor id eu nisl nunc.--}}
                        {{--Habitasse platea dictumst quisque sagittis purus sit amet. Diam quam nulla porttitor massa id neque.--}}
                        {{--Risus in hendrerit gravida rutrum quisque. Orci sagittis eu volutpat odio facilisis mauris sit amet--}}
                        {{--massa. Condimentum id venenatis a condimentum vitae. Diam ut venenatis tellus in metus vulputate eu.--}}
                        {{--Nisi porta lorem mollis aliquam ut. Ut etiam sit amet nisl purus in mollis nunc sed.--}}
                        {{--</span>--}}
                {{--</div>--}}

            </div>
        </div>
    </div>
</div>


<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent2");
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

{{--test--}}