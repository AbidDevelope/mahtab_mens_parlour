<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <!--headerlink start -->
    @include('layouts.headerlink')
    <!--headerlink end -->
</head>

<body>
    <!--[if lte IE 9]>
                <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
            <![endif]-->

    <!-- headermenu-start -->
    @include('layouts.headermenu')
    <!-- headermenu-end -->

    <!-- slider_area_start -->
    <section>
        <div class="slider_area">
            <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1 overlay2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text text-center">
                                <h3 id='text'></h3>
                                <!-- <h3>Best Barber in <br>
                                    your area</h3>
                                <p>Professional Care</p> -->
                            </div>
                            <div class='console-container'>

                                <div class='console-underscore' id='console'>&#95;</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slider_area_end -->

    <!-- about_area_start -->
    <section>
        <div class="about_area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="about_thumb">
                            <img src="img/ishra/img1.jpg" alt="" class="img-fluid" style="height: 40rem;width: 35rem">
                            <div class="opening_hour text-center">
                                <i class="flaticon-clock"></i>
                                <h3>Opening Hour</h3>
                                <p>Mon-Sun (7am-8pm)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="about_info">
                            <div class="section_title mb-20px">
                                <h3>Experienced and <br>
                                    Traditional Stylish <br>
                                    Barber Shop</h3>
                            </div>
                            <p>Mahtab Mens Parlour is a best barber shop place which is classy as
                                well as cost-effective? The place is known for its great haircuts
                                and all the hair stylists here first do a consultation and understand
                                your requirements. This is also a great place to get your hair coloured
                                and get a hair spa.</p>
                            <a href="#" class="boxed-btn3">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about_area_end -->

    <!-- services_list start -->
    @include('layouts.services_list')
    <!--services_list end -->

    <!-- gallery_area_start -->
    @include('layouts.our_gallery')
    <!-- gallery_area_end -->

    <!-- video_area_start -->
    @include('layouts.video')
    <!-- video_area_end -->

    <!-- testimonial_start -->
    @include('layouts.testimonial')
    <!-- testimonial_end -->

    <!-- find_us_area start -->
    @include('layouts.find_area')
    <!-- find_us_area_end -->

    <!--footer Start-->
    @include('layouts.footer')
    <!--footer end-->

    <!-- link that opens popup -->

    <!-- book appointment start -->
    @include('layouts.appointment')
    <!-- book appointment end -->


    <!--footerlink start -->
    @include('layouts.footerlink')
    <!--footerlink end -->

</body>
<script>
consoleText(['Best Barber in Your Area.', 'Professional Care'], 'text', ['tomato', 'rebeccapurple', 'lightblue']);

function consoleText(words, id, colors) {
    if (colors === undefined) colors = ['#fff'];
    var visible = true;
    var con = document.getElementById('console');
    var letterCount = 1;
    var x = 1;
    var waiting = false;
    var target = document.getElementById(id)
    target.setAttribute('style', 'color:' + colors[0])
    window.setInterval(function() {

        if (letterCount === 0 && waiting === false) {
            waiting = true;
            target.innerHTML = words[0].substring(0, letterCount)
            window.setTimeout(function() {
                var usedColor = colors.shift();
                colors.push(usedColor);
                var usedWord = words.shift();
                words.push(usedWord);
                x = 1;
                target.setAttribute('style', 'color:' + colors[0])
                letterCount += x;
                waiting = false;
            }, 1000)
        } else if (letterCount === words[0].length + 1 && waiting === false) {
            waiting = true;
            window.setTimeout(function() {
                x = -1;
                letterCount += x;
                waiting = false;
            }, 1000)
        } else if (waiting === false) {
            target.innerHTML = words[0].substring(0, letterCount)
            letterCount += x;
        }
    }, 120)
    window.setInterval(function() {
        if (visible === true) {
            con.className = 'console-underscore hidden'
            visible = false;

        } else {
            con.className = 'console-underscore'

            visible = true;
        }
    }, 400)
}
</script>

</html>