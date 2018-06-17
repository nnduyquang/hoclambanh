<style>
    div#Contact_Us{
        right: 50px;
        width: 300px;
        height: 100%;
        background-color: #684f40;
        opacity: .9;
    }

    @media (min-width: 300px) and (max-width: 999px) {
        div#fe_h_map #Contact_Us{
            display: none;
        }
    }
</style>
<div class="container-fluid position-relative p-0" id="fe_h_map">
<div id="map" style="width:100%;height:450px">
    {{--<div class="position-absolute" id="Contact_Us"></div>--}}
    <iframe
            width="100%"
            height="450"
            frameborder="0" style="border:0"
            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCz9f8H5wjJIac5LrePbowoDN8Vp2FEEZ8
    &q=145%20l%C3%AA%20quang%20%C4%91%E1%BB%8Bnh&zoom=17" allowfullscreen>
    </iframe>
</div>
</div>


<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->
<!--Load the API from the specified URL
* The async attribute allows the browser to render the page while the API loads
* The key parameter will contain your own API key (which is not needed for this tutorial)
* The callback parameter executes the initMap() function
-->
