<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <!-- headerlink start -->

    @include("layouts.headerlink")

    <!--headerlink end -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- header-start -->

    @include("layouts.headermenu")

    <!-- header-end -->

    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg overlay2">
        <h3>contact us</h3>
    </div>
    <!-- bradcam_area_end -->

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
        <div class="container">
            <div class="d-none d-sm-block mb-5 pb-4">
                <iframe class="map"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3597.5715876863883!2d82.09206361433648!3d25.619148420740288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399aaf9089e0c615%3A0xe75820aa07cf2d7a!2sMahtab%20Mens%20Parlour!5e0!3m2!1sen!2sin!4v1669565189969!5m2!1sen!2sin"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                <script>
                function initMap() {
                    var uluru = {
                        lat: -25.363,
                        lng: 131.044
                    };
                    var grayStyles = [{
                            featureType: "all",
                            stylers: [{
                                    saturation: -90
                                },
                                {
                                    lightness: 50
                                }
                            ]
                        },
                        {
                            elementType: 'labels.text.fill',
                            stylers: [{
                                color: '#ccdee9'
                            }]
                        }
                    ];
                    var map = new google.maps.Map(document.getElementById('map'), {
                        center: {
                            lat: -31.197,
                            lng: 150.744
                        },
                        zoom: 9,
                        styles: grayStyles,
                        scrollwheel: false
                    });
                }
                </script>
                <script
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&amp;callback=initMap">
                </script>

            </div>


            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Get in Touch</h2>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="{{ route('contact_form') }}" method="POST"
                        id="contactForm">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" cols="30" rows="9"
                                        placeholder="Message" required></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="name" type="text"
                                        placeholder="Enter your name" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="email" type="email" placeholder="Email"
                                        required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" type="text" placeholder="Enter Subject"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" id="submit" class="boxed-btn3">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>Phulpur Allahabad</h3>
                            <p>Mailhan, 212402</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>+91 9918707239</h3>
                            <p>Mon to Sun 7am to 8pm</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>mahtabmensparlour@gmail.com</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end =================-->

    <!--footer start-->

    @include("layouts.footer")

    <!-- footer end -->

    <!-- link that opens popup -->

    <!-- book appointment start-->

    @include("layouts.appointment")

    <!-- book appointment end -->

    <!-- footerlink start -->

    @include("layouts.footerlink")

    <!-- footerlink end -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if(Session::has('message'))
    <script>
    swal("success", "{{ Session::get('message') }}", "success", {
        button: true,
        button: "OK",
        dangerMode: true,
    });
    </script>
    @endif
</body>

</html>