<!doctype html>
<html class="no-js" lang="zxx">

<head>
    
        @include('layouts.headerlink')
   
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
  
     @include("layouts.headermenu")
  
    <!-- header-end -->

    <!-- service_area_start -->
     
     @include("layouts.services_list")
    
    <!-- service_area_end -->


    <!-- gallery_area_start -->
   
      @include("layouts.our_gallery")
    
    <!-- gallery_area_end -->

    <!-- video_area_start -->
  
    @include("layouts.video");
 
    <!-- video_area_end -->

    <!-- testimonial_start -->
    @include('layouts.testimonial')
    <!-- testimonial_end -->

    <!-- find_us_area start -->
 
    @include("layouts.find_area")
    
    <!-- find_us_area_end -->

    <!-- footer start -->

    @include("layouts.footer")
  
    <!-- footer end -->

    <!-- link that opens popup -->

    <!-- book appointment start-->
    
    @include("layouts.appointment")

    <!-- book appointment end -->

    <!-- JS here -->
    <!--footerlink start -->
    
    @include("layouts.footerlink")
  
    <!-- footerlink end -->

</body>
</html>