<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width" />

    
    <title>lol</title>


  <meta name="description" content="@yield('description'){{$currentMenu->meta_description ?? $currentService->meta_description ?? $currentBlog->meta_description ?? null}}">
  <meta name="keywords" content="@yield('keywords'){{$currentMenu->keywords ?? $currentService->keywords ?? $currentBlog->keywords ?? null}}">
  <!-- 
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
   -->  
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('')}}/assets/images/icon.png" />

    <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->

    <!-- Font CSS -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=karla:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet"> -->


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS (Bootstrap & Icon Font) -->

    <!-- Plugins CSS (All Plugins Files) -->

    <link rel="stylesheet" href="{{url('')}}/assets/css/plugins/swiper-bundle.min.css" />

    <link rel="stylesheet" href="{{url('')}}/assets/css/plugins/magnific-popup.css" />

    <link rel="stylesheet" href="{{url('')}}/assets/css/plugins/nice-select.css" />

<!-- 
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}?_={{rand(1000,2000)}}" /> -->

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{url('')}}/assets/css/style.css" />
    <link rel="stylesheet" href="{{url('')}}/css/app.css" />

     <!-- <script src="https://cdn.tailwindcss.com"></script> -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
     <!-- <link rel="stylesheet" href="{{url('')}}/assets/trsanslateelement.css" /> -->

  <style>
    .goog-te-banner-frame.skiptranslate {
        display: none !important;
        } 
    body {
        top: 0px !important; 
        }
    #google_translate_element .skiptranslate .goog-te-gadget-simple{
      
      border: none;
      border-bottom: 1px solid;
      border-color: white;
      font-size: 18px;
      background-color: transparent;
      padding: 0px;
      margin: 0px;
      margin-bottom: 10px;
      margin-top: 0px;
      font-family: Karla, sans-serif;
    }

    #google_translate_element .skiptranslate .goog-te-gadget-simple img{
      background-image: none !important;
    }
    #google_translate_element .skiptranslate .goog-te-gadget-simple .goog-te-menu-value{

      padding: 0px;
      margin: 0px;
      display: flex !important;
    }

    #google_translate_element .skiptranslate .goog-te-gadget-simple .goog-te-menu-value span{
      color: white;
      border-left: none !important;
      font-size: 18px;

    }
     .goog-te-menu-frame .skiptranslate {
      width: none !important;
    }

    #ab {
      
      border: none;
      border-bottom: 1px solid;
      border-color: white;
      font-size: 18px;
      background-color: transparent;
      padding: 0px;
      margin: 0px;
      margin-bottom: 10px;
      margin-top: 0px;
      font-family: Karla, sans-serif;
    }

    #ab option{
      background-image: none !important;
    }
    #ab option{

      padding: 0px;
      margin: 0px;
      display: flex !important;
    }

    #ab option{
      color: black;
      border-left: none !important;
      font-size: 14px;

    }
     .goog-te-menu-frame .skiptranslate {
      width: none !important;
    }
    @media (max-width: 800px) {
    #iconfa {
        visibility: hidden;
    }
    #phone{
        background-color: rgb(11, 44, 61); 
        padding: 0.5rem; 
        border-radius:0.5rem;
        margin-bottom: 0.5rem;
        color: white;
        padding-left:0rem;
    }

    #email{
        background-color: rgb(11, 44, 61); 
        padding: 0.5rem; 
        border-radius:0.5rem;
        margin-bottom: 0.5rem;
        color: white;
        padding-left:0rem;
    }

    #whatsapp{
        background-color: rgb(11, 44, 61); 
        padding: 0.5rem; 
        border-radius:0.5rem;
        margin-bottom: 0.5rem;
        color: white;
    }
    #arabic{
        margin-top: 0.5rem;

    }
     #emimage{
        color: white;
        background-color: white;

    }
    #hid{
        visibility: hidden;
        margin-top: -13.5rem;
    }
}

@media (min-width: 1600px) {
    #email{
        padding-left: 2rem;
    }
    #phone{
        padding-left: 5rem;
    }
}

@media (min-device-width: 1250px) and (max-device-width: 1500px) {
    #email{
        padding-left: 2rem;
    }
    #phone{
        padding-left: 5rem;
    }
}
@media (max-width: 800px) {
}
    .float{
        position:fixed;
        width:50px;
        height:50px;
        bottom:30px;
        left:20px;
        background-color:#25d366;
        color:#FFF;
        border-radius:50px;
        text-align:center;
        font-size:30px;
        box-shadow: 2px 2px 3px #999;
        z-index:100;
    }
    .my-float{
        margin-top:11px;
    }

    .floatphone{
        position:fixed;
        width:50px;
        height:50px;
        bottom:90px;
        left:20px;
        background-color:#E94C3D;
        color:#FFF;
        border-radius:50px;
        text-align:center;
        font-size:30px;
        box-shadow: 2px 2px 3px #999;
        z-index:100;
    }
    .my-floatphone{
        margin-top:11px;
    }

    .floatemail{
        position:fixed;
        width:50px;
        height:50px;
        bottom:150px;
        left:20px;
        /*background-color:rgb(11, 44, 61);*/
        background-color:#405463;
        
        color:#FFF;
        border-radius:50px;
        text-align:center;
        font-size:30px;
        box-shadow: 2px 2px 3px #999;
        z-index:100;
    }
    .my-floatemail{
        margin-top:11px;
    }
    /*@media(min-device-width: 1536px) and (max-device-width: 1540px){
        #body-div{
            padding-left: 8%;
            padding-right: 8%;
        }
    }*/
  </style>
</head>


<body class="font-karla text-body text-tiny">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
     <a href="https://wa.me/{{ getSettings('agent_number') }}" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
    </a>
    <a href="tel:{{ getSettings('contact_no_1') }}" class="floatphone" target="_blank">
    <i class="fa fa-phone my-floatphone"></i>
    </a>
    <a href="#" onclick="openModal()" class="floatemail" target="_blank">
    <i class="fa fa-envelope my-floatemail"></i>
    </a>



        <x-search/>


  <!-- JS Vendor, Plugins & Activation Script Files -->

  <!-- <script type="text/javascript" src="{{ asset('/js/app.js') }}?_={{rand(1000,2000)}}"></script> -->
    <!-- Vendors JS -->
    <script src="{{url('')}}/assets/js/vendor/modernizr-3.11.7.min.js"></script>
    <script src="{{url('')}}/assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="{{url('')}}/assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <!-- Plugins JS -->
    <script src="{{url('')}}/assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="{{url('')}}/assets/js/plugins/popper.min.js"></script>
    <script src="{{url('')}}/assets/js/plugins/jquery.magnific-popup.min.js"></script>
    <script src="{{url('')}}/assets/js/plugins/jquery.ajaxchimp.min.js"></script>
    <script src="{{url('')}}/assets/js/plugins/parallax.min.js"></script>
    <script src="{{url('')}}/assets/js/plugins/jquery.nice-select.min.js"></script>

    <!-- Activation JS -->
    <script src="{{url('')}}/assets/js/main.js"></script>
     <!--  <script type="text/javascript">
      function googleTranslateElementInit() {
        new google.translate.TranslateElement({Language: 'en', includedLanguages: 'en,ar', autoDisplay: false, layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
        }
    </script> -->

  <!-- <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> -->
  <!-- <script type="text/javascript" src="{{url('')}}/assets/js/translate.js"></script> -->
    <!--   <script>
        jQuery(document).ready(function () {
            jQuery("#revolution-slider").revolution({
                sliderType: "standard",
                delay: 7500,
                navigation: {
                    arrows: { enable: true }
                },
                spinner: "off",
                gridwidth: 1170,
                gridheight: 700,
                disableProgressBar: "on",
                responsiveLevels:[1920,1229,991,480],gridwidth:[1170,970,750,450],gridheight:[700,700,700,700]
            });

            
        });
    </script> -->

    <script type="text/javascript">
      function googleTranslateElementInit() {
        new google.translate.TranslateElement({
          pageLanguage: 'en', 
          includedLanguages: 'ar,en', 
          layout: google.translate.TranslateElement.InlineLayout.SIMPLE, 
          multilanguagePage: true, 
          gaTrack: true, 
        }, 'google_translate_element');
      }
    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    
    <script type="text/javascript">
      jQuery(document).ready(function($) {
        $('.menu-traslate-header ul li a').click(function(event) {
            window.location = $(this).attr('href');
            location.reload();
        });
      });
    </script>
</body>

</html>