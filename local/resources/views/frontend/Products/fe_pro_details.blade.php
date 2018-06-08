<style>

    /* Style the tab */
    div#tab_detail_pro .tab2 {
        overflow: hidden;
    }

    /* Style the buttons inside the tab */
    div#tab_detail_pro .tab2 button {
        color: white;
        font-family: 'Nunito Sans', sans-serif;
        background-color: #ddd;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
        font-size: 16px;
        margin-right: 3px;
    }

    /* Change background color of buttons on hover */
    div#tab_detail_pro .tab2 button:hover {
        background-color: #ddd;
    }

    /* Create an active/current tablink class */
    div#tab_detail_pro .tab2 button.active {
        background-color: #fdb822;
    }

    /* Style the tab content */
    .tabcontent2 {
        display: none;
        padding: 26px 22px;
        border: 1px solid #ccc;
    }

    .tabcontent2 span {
        padding: 10px;
    }

    div#fe_pro_detail {
        border-top: 3px solid #684f40;
        margin-top: 3px;
    }

    div#fe_pro_detail p {
        font-family: 'Nunito Sans', sans-serif;
        color: #684f40;
        font-weight: 600;
        font-size: 22px;
    }

    div#fe_pro_detail span {
        font-family: 'Nunito Sans', sans-serif;
        color: #a8a8a8;
    }

    div#fe_pro_detail_spec .col-12:nth-child(2) p {
        font-size: 26px;
        color: #fdb822;
        font-weight: normal;
    }

    div#fe_pro_detail_spec .col-12:nth-last-child(2) p {
        font-size: 16px;
        color: #a8a8a8;
        font-weight: normal;
    }

    div#fe_pro_detail_spec .col-12:nth-last-child(2) p span {
        font-size: 16px;
        color: #fdb822;
        font-weight: normal;
    }

    div#fe_pro_detail_spec .col-12:nth-last-child(1) a {
        display: inline-block;
        line-height: 36px;
        color: white;
    }

    div#fe_pro_detail_spec .col-12:nth-last-child(1) a .circle {
        text-align: center;
        width: 38px;
        height: 38px;
        border-radius: 50%;
        background-color: #684f40;
        transition: .3s;
    }

    div#fe_pro_detail_spec .col-12:nth-last-child(1) a .circle:hover {
        background-color: #fdb822;
    }

    div#fe_pro_detail_spec button{

        margin-top: 30px;
        padding: 18px 10px;
        border: none;
        color: white;
        background-color: #fdb822;
        transition: .3s;
        font-weight: 600;

    }

    div#fe_pro_detail_spec button:hover{

        background-color: #684f40;


    }

    @media (min-width: 300px) and (max-width: 599px) {

        .tab{
            width: 100%;
        }
        .tab button{
            display: block;
            width: 100%;
            margin-bottom: 5px;
        }

    }

</style>

<div class="container-fluid" id="fe_pro_detail">
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-md-5">
                <img src="http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/11/cookie-1.jpg"
                     style="width: 100%;height: auto;" alt="">
            </div>
            <div class="col-md-7">
                <div class="row" id="fe_pro_detail_spec">
                    <div class="col-12 border-top border-bottom p-3">
                        <p>AMARETTI COOKIE</p>
                    </div>
                    <div class="col-12 pt-3 pb-3">
                        <p>$12.95</p>
                        <span>
                             <br>
                            Channeling the old-world techniques of our Grandma Grace and her unwavering
                            ability to produce hand-crafted cookies consistently both delicious and ornate,
                            her much beloved amaretti cookie recipe will take you to straight into the doors of the authentic bakeries of Lipari, Italy and their intoxicating aromas. Created carefully with the same love, attention and high-quality, real ingredients we know our nonna would only approve of, our fresh amaretto cookie dough is hand-dipped with care in crystallized sugar and adorned with a whole almond just before it’s placed into our oven to gently bake to perfection. The final result is a rich,
                            bold, dense cookie adored by the whole famiglia.
                            <br>

                            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Amet consectetur adipiscing elit duis tristique sollicitudin nibh sit amet.
                        </span>

                        <br>
                        <a href=""><button>
                                <i class="far fa-edit"></i> ĐĂNG KÝ KHÓA HỌC</button></a>
                    </div>

                    <div class="col-12 pt-3 pb-3 border-bottom border-top">
                        <p>Category: <span>Cookies</span></p>

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
                    <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">DESCRIPTION</button>
                    <button class="tablinks" onclick="openCity(event, 'Paris')">ADDITIONAL INFORMATION</button>
                    <button class="tablinks" onclick="openCity(event, 'Tokyo')">REVIEW(0)</button>
                </div>

                <div id="London" class="tabcontent2">
                    <span> Channeling the old-world techniques of our Grandma Grace and her unwavering ability to produce
                        hand-crafted cookies consistently both delicious and ornate, her much beloved amaretti cookie
                        recipe will take you to straight into the doors of the authentic bakeries of Lipari, Italy and
                        their intoxicating aromas. Created carefully with the same love, attention and high-quality, real
                        ingredients we know our nonna would only approve of, our fresh amaretto cookie dough is hand-dipped
                        with care in crystallized sugar and adorned with a whole almond just before it’s placed into our
                        oven to gently bake to perfection. The final result is a rich, bold, dense cookie adored by the
                        whole famiglia.
                    <br>
                        <br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Faucibus vitae aliquet nec ullamcorper sit amet risus nullam. Mi tempus
                        imperdiet nulla malesuada pellentesque elit eget gravida. Sit amet commodo nulla facilisi nullam
                        vehicula ipsum. Sagittis eu volutpat odio facilisis. Leo a diam sollicitudin tempor id eu nisl nunc.
                        Habitasse platea dictumst quisque sagittis purus sit amet. Diam quam nulla porttitor massa id neque.
                        Risus in hendrerit gravida rutrum quisque. Orci sagittis eu volutpat odio facilisis mauris sit amet
                        massa. Condimentum id venenatis a condimentum vitae. Diam ut venenatis tellus in metus vulputate eu.
                        Nisi porta lorem mollis aliquam ut. Ut etiam sit amet nisl purus in mollis nunc sed.
                        </span>
                </div>

                <div id="Paris" class="tabcontent2">
                   <span> Channeling the old-world techniques of our Grandma Grace and her unwavering ability to produce
                        hand-crafted cookies consistently both delicious and ornate, her much beloved amaretti cookie
                        recipe will take you to straight into the doors of the authentic bakeries of Lipari, Italy and
                        their intoxicating aromas. Created carefully with the same love, attention and high-quality, real
                        ingredients we know our nonna would only approve of, our fresh amaretto cookie dough is hand-dipped
                        with care in crystallized sugar and adorned with a whole almond just before it’s placed into our
                        oven to gently bake to perfection. The final result is a rich, bold, dense cookie adored by the
                        whole famiglia.
                    <br>
                       <br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Faucibus vitae aliquet nec ullamcorper sit amet risus nullam. Mi tempus
                        imperdiet nulla malesuada pellentesque elit eget gravida. Sit amet commodo nulla facilisi nullam
                        vehicula ipsum. Sagittis eu volutpat odio facilisis. Leo a diam sollicitudin tempor id eu nisl nunc.
                        Habitasse platea dictumst quisque sagittis purus sit amet. Diam quam nulla porttitor massa id neque.
                        Risus in hendrerit gravida rutrum quisque. Orci sagittis eu volutpat odio facilisis mauris sit amet
                        massa. Condimentum id venenatis a condimentum vitae. Diam ut venenatis tellus in metus vulputate eu.
                        Nisi porta lorem mollis aliquam ut. Ut etiam sit amet nisl purus in mollis nunc sed.
                        </span>
                </div>

                <div id="Tokyo" class="tabcontent2">
                    <span> Channeling the old-world techniques of our Grandma Grace and her unwavering ability to produce
                        hand-crafted cookies consistently both delicious and ornate, her much beloved amaretti cookie
                        recipe will take you to straight into the doors of the authentic bakeries of Lipari, Italy and
                        their intoxicating aromas. Created carefully with the same love, attention and high-quality, real
                        ingredients we know our nonna would only approve of, our fresh amaretto cookie dough is hand-dipped
                        with care in crystallized sugar and adorned with a whole almond just before it’s placed into our
                        oven to gently bake to perfection. The final result is a rich, bold, dense cookie adored by the
                        whole famiglia.
                    <br>
                        <br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Faucibus vitae aliquet nec ullamcorper sit amet risus nullam. Mi tempus
                        imperdiet nulla malesuada pellentesque elit eget gravida. Sit amet commodo nulla facilisi nullam
                        vehicula ipsum. Sagittis eu volutpat odio facilisis. Leo a diam sollicitudin tempor id eu nisl nunc.
                        Habitasse platea dictumst quisque sagittis purus sit amet. Diam quam nulla porttitor massa id neque.
                        Risus in hendrerit gravida rutrum quisque. Orci sagittis eu volutpat odio facilisis mauris sit amet
                        massa. Condimentum id venenatis a condimentum vitae. Diam ut venenatis tellus in metus vulputate eu.
                        Nisi porta lorem mollis aliquam ut. Ut etiam sit amet nisl purus in mollis nunc sed.
                        </span>
                </div>

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