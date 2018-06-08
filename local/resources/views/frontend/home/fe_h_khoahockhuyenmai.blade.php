<style>


</style>

<div class="container-fluid mb-5" id="fe_h_khoahockhuyenmai">
    <div class="container">
        <div class="row special-course-cooking">

            <div class="col-md-12 text-center mb-5 mt-5">
                <p>KHÓA HỌC LÀM BÁNH NHANH</p>
                <hr>
                <span>We offer something different to local and foreign patrons <br>
                    and ensure you enjoy a memorable food experience every time.</span>
            </div>

            <div class="col-md-12 position-relative">

                <div class="tab">
                    <a class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">
                        <img src="http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/11/muffin-3-300x300.jpg" alt="">
                    </a>
                    <a class="tablinks" onclick="openCity(event, 'Paris')">
                        <img src="http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/11/bread-3-600x600.jpg" alt="">
                    </a>
                    <a class="tablinks" onclick="openCity(event, 'Tokyo')">
                        <img src="http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/11/danish-1-600x600.jpg" alt="">
                    </a>
                </div>

                <div id="London" class="tabcontent p-1 position-relative">
                    <div class="row p-1 pos">
                        <div class="col-md-6 p-3 text-center">
                            <p>MAPLE OAT MUFFIN </p><br>
                            <br>
                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                            Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero
                            sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
                            <br>
                            <br>
                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                            Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper
                            . Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
                        </div>
                        <div class="col-md-6 text-right">
                            <img src="http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/11/muffin-3-300x300.jpg" alt=""
                            style="width: 100%;height: auto;margin: auto">
                        </div>
                    </div>
                </div>

                <div id="Paris" class="tabcontent position-relative">
                    <div class="row p-1 pos">
                        <div class="col-md-6 p-3 text-center">
                            <p>CIABATTA </p><br>
                            <br>
                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                            Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero
                            sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
                            <br>
                            <br>
                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                            Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper
                            . Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
                        </div>
                        <div class="col-md-6 text-right">
                            <img src="http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/11/bread-3.jpg" alt=""
                                 style="width: 100%;height: auto;margin: auto">
                        </div>
                    </div>
                </div>

                <div id="Tokyo" class="tabcontent position-relative">
                    <div class="row p-1 pos">
                        <div class="col-md-6 p-3 text-center">
                            <p>CROISSANT </p><br>
                            <br>
                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                            Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero
                            sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
                            <br>
                            <br>
                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                            Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper
                            . Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
                        </div>
                        <div class="col-md-6 text-right">
                            <img src="http://preview.milingona.co/themes/bakery/main/wp-content/uploads/2017/11/danish-1-600x600.jpg" alt=""
                                 style="width: 100%;height: auto;margin: auto">
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