@extends('layouts.master')

@section('title') {{$projects->seo_title ?? null}} @endsection
@section('description') {{$projects->meta_keywords ?? null}} @endsection
@section('keywords') {{$projects->meta_description ?? null}} @endsection

@section('top-styles')
<style type="text/css">


    .swiper {
        width: 100%;
      }

      .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }

      .swiper-slide img {
        display: block;
        object-fit: cover;
      }

      .swiper {
        width: 100%;
        margin-left: auto;
        margin-right: auto;
      }

      .swiper-slide {
        background-size: cover;
        background-position: center;
      }

      .mySwiper2 {
        width: 100%;
      }

      .mySwiper {
        box-sizing: border-box;
        padding: 10px 0;
      }

      .mySwiper .swiper-slide {
        width: 25%;
        opacity: 0.4;
      }

      .mySwiper .swiper-slide-thumb-active {
        opacity: 1;
      }
@media (min-width: 1600px) {
    .selectricc-border-none{
        margin-left: 10rem;
    } 
    #bannerimages {
        height: 22rem;
    }   
    #bannerimages .absolute{
        top: 30%;
    }  
    #mainhead{
        color: rgb(11, 44, 61);
    }
}

@media (min-device-width: 1250px) and (max-device-width: 1500px) {
    #bannerimages {
        height: 22rem;
    }  
    #bannerimages .absolute{
        top: 30%;
    }   
    
    #mainhead{
        color: rgb(11, 44, 61);
    }
}

@media (max-width: 800px) {
    #bannerimages {
        height: 15rem;
    }
    #bannerimages .absolute{
        top: 70%;
    }
    #mainhead{
        color: rgb(255, 255, 255);
    }
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
@endsection

@section('content')
@if($projects->bannar_image == "")
        <section class="bg-no-repeat bg-center bg-cover bg-[#FFF6F0] lg:h-[350px] flex flex-wrap items-center relative before:absolute before:inset-0 before:content-[''] before:bg-[#000000] before:opacity-[50%]" style="background-image: url('{{url('')}}/assets/images/breadcrumb/sale.png');" id="bannerimages">
            <div class="container">
                <div class="grid grid-cols-1 ">
                    <div class="col-span-12 ">
                        <div class="max-w-[700px]  mx-auto text-center text-white relative z-[1]">
                            <!-- <div class="mb-5"><span class="text-base block sm:text-[35px]">Sale</span></div> -->
                            <h1 class="font-lora text-[32px] sm:text-[50px] md:text-[68px] lg:text-[50px] leading-tight font-medium md:mt-[-0rem]">
                               {!! $projects->title !!} 
                            </h1>

                            <!-- <p class="text-base mt-5 max-w-[500px] mx-auto text-center">
                                Huge number of propreties availabe here for buy and sell
                                also you can find here co-living properties  as you like
                            </p> -->
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
@else
         <section class="bg-no-repeat bg-center bg-cover bg-[#FFF6F0] h-[350px] lg:h-[350px] flex flex-wrap items-center relative before:absolute before:inset-0 before:content-[''] before:bg-[#000000] before:opacity-[50%]" style="background-image: url('{{config("fgproperties.file_path").$projects->bannar_image}}')">
            <div class="container">
                <div class="grid grid-cols-1 ">
                    <div class="col-span-12 ">
                        <div class="max-w-[700px]  mx-auto text-center text-white relative z-[1]">
                            <!-- <div class="mb-5"><span class="text-base block sm:text-[35px]">Sale</span></div> -->
                            <h1 class="font-lora text-[32px] sm:text-[50px] md:text-[68px] lg:text-[50px] leading-tight font-medium md:mt-[-0rem]">
                               {!! $projects->title !!} 
                            </h1>

                            <!-- <p class="text-base mt-5 max-w-[500px] mx-auto text-center">
                                Huge number of propreties availabe here for buy and sell
                                also you can find here co-living properties  as you like
                            </p> -->
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
    @endif
        
    @if(session()->has('message'))
    <div class="container w-[50rem] mt-[2rem] text-center" id="aler">
        <div class="bg-[#294159] border border-[#294159] text-[white] px-4 py-3 rounded relative" role="alert">
          <strong class="font-bold">THANK YOU!</strong>
          <span class="block sm:inline">{{ session()->get('message') }}</span>
        </div>
    </div>
    @endif



<!-- Popular Properties start -->
        <section class="popular-properties py-[80px] lg:py-[120px] md:mb-[-10rem]">
            <div class="container">

                <div class="grid grid-cols-12 mb-[-30px] gap-[30px] xl:gap-[50px]">
                    <div class="col-span-12 md:col-span-6 lg:col-span-8 mb-[30px]">
                        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                          <div class="swiper-wrapper">
                            @php
                                if ($projects->images !="") {
                                $images = $projects->images;
                                $img3 = explode(',', $images);
                                foreach($img3 as $images){
                                    if($images != '')
                                    {
                                @endphp
                          
                            <div class="swiper-slide md:h-[30rem]">
                              <img src="{{config('fgproperties.file_path').$images}}" style="width:100%;" />
                            </div>
                          @php }
                                }
                            } 
                                @endphp
                          </div>
                          <div class="swiper-button-next"></div>
                          <div class="swiper-button-prev"></div>
                        </div>
                        <div thumbsSlider="" class="swiper mySwiper mt-[0.5rem]">
                          <div class="swiper-wrapper">

                             @php
                                if ($projects->images !="") {
                                $images = $projects->images;
                                $img3 = explode(',', $images);
                                foreach($img3 as $images){
                                    if($images != '')
                                    {
                                @endphp
                          
                            <div class="swiper-slide  mt-[0.5rem]">
                              <img src="{{config('fgproperties.file_path').$images}}" class="h-[4rem]" style="width:100%;" />
                            </div>
                          @php }
                                }
                            } 
                                @endphp
                          </div>
                        </div>
                        <div class="mt-[45px] mb-[35px]">
                                <div class="grid md:grid-cols-2 grid-cols-1">
                                    <h2 class="font-lora leading-tight text-[28px] md:text-[28px] lg:text-[36px] text-primary mb-[5px] font-medium"><b>{!! $projects->title !!}</b></h2>
                                    <div class="float-right">
                                        <a href="" class="float-right "><p class="font-lora leading-tight text-[14px] md:text-[16px] lg:text-[16px] text-primary mb-[5px] font-medium">
                                            @foreach($developers as $developer)
                                                                                @if($developer->id == $projects->developer_id)

                                                                                   By {{$developer->developer_name}}

                                                                                @endif
                                                                                @endforeach 
                                            <i class="fa-regular fa-building"></i></p></a>
                                    </div>
                                </div>
                                @if($projects->url != "")
                                   <h3 class="font-light text-[16px] text-secondary underline mb-[20px]"><a href="#" style="border:none !important"><i class="fas fa-map-marker-alt"></i> {{$projects->url}}</a></h3>
                                @else
                                   <h3 class="font-light text-[16px] text-secondary underline mb-[20px]"><a href="#" style="border:none !important"><i class="fas fa-map-marker-alt"></i> UAE</a></h3>       
                                @endif
                                @if($projects->price != "")
                                <hr>
                                <h4 class="font-lora leading-tight text-[16px] md:text-[20px] lg:text-[20px] text-primary mb-[1rem] mt-[1rem] font-medium">
                                    @if($projects->status == 'Rent')
                                    Starting Price Rent: 
                                    @else
                                    Starting Price Buy: 
                                    @endif                                
                                  <span class="font-lora leading-tight text-[18px] md:text-[24px] lg:text-[24px] text-primary mb-[5px] font-medium"><b>AED {{ number_format($projects->price) }}</b></span>
                                @else
                                
                                </h4>
                                @endif

                            <hr>
                            
                            <h4 class="font-lora leading-tight text-[18px] md:text-[24px] lg:text-[24px] text-primary mb-[5px] mt-[1rem] font-medium">About This Listing</h4>
                            <p class="mt-[1rem]">
                                {!! $projects->description !!}
                           </p>
                        </div>

                        <div class="grid grid-cols-1">
                            <div class="h-[305px]  rounded-[6px] overflow-hidden xl:ml-[40px]">
                                @if($projects->url != "")
                                   <iframe class="w-full h-full" src="https://www.google.com/maps?q= {!! $projects->url !!}* &output=embed" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                @else
                                   <iframe class="w-full h-full" src="https://www.google.com/maps?q= Uae* &output=embed" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                @endif
                            </div>
                        </div>

                        <h4 class="font-lora text-primary text-[24px] leading-[1.277] sm:text-[28px] capitalize mt-[50px] mb-[40px] font-medium">
                            Amenities and Advantages<span class="text-secondary">.</span>
                        </h4>

                        <ul class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 px-[15px] mx-[-15px] mt-[40px]">
                            @if($projects->bedrooms != "")
                            <li class="flex flex-wrap items-center mb-[25px]">
                                <img class="mr-[15px]" src="{{url('')}}/assets/images/about/check.png" loading="lazy" alt="icon" width="20" height="20">
                                <span>  
                                    {!! $projects->bedrooms !!} Bedrooms                                    
                                </span>
                            </li>
                            @endif
                            @if($projects->area != "")
                            <li class="flex flex-wrap items-center mb-[25px]">
                                <img class="mr-[15px]" src="{{url('')}}/assets/images/about/check.png" loading="lazy" alt="icon" width="20" height="20">
                                <span>      
                                    {!! $projects->area !!} Sq.fit                                    
                                </span>
                            </li>
                            @endif
                            @if($projects->bathrooms != "")
                            <li class="flex flex-wrap items-center mb-[25px]">
                                <img class="mr-[15px]" src="{{url('')}}/assets/images/about/check.png" loading="lazy" alt="icon" width="20" height="20">
                                <span>
                                    {!! $projects->bathrooms !!} Bathrooms                                    
                                </span>
                            </li>
                            @endif
                            @foreach($amenities_this_proj as $amenity_to_this)
                            @foreach($amenities as $amenity)
                            @if($amenity->id == $amenity_to_this->amenity_id)
                            <li class="flex flex-wrap items-center mb-[25px]">
                                <img class="mr-[15px]" src="{{url('')}}/assets/images/about/check.png" loading="lazy" alt="icon" width="20" height="20">
                                <span>{{ucwords($amenity->name)}}</span>
                            </li>

                            @endif
                            @endforeach
                            @endforeach
                        </ul>
                    </div>
                    
                    <div class="col-span-12 md:col-span-6 lg:col-span-4 mb-[30px]">
                        <aside class="mb-[-40px] asidebar" >
                            <div class="bg-[#F5F9F8] px-[20px] lg:px-[15px] xl:px-[35px] py-[50px] rounded-[8px] mb-[40px]" >
                                <h3 class="text-primary leading-none text-[24px] font-lora mb-[15px] font-medium"><b>Inquiry Form</b> </h3>
                                <h3 class="text-primary leading-none text-[22px] font-lora mb-[30px] font-medium">Fill the form below </h3>

                                <form method="post"  action="{{ route('send.message') }}" class="relative" >
                                     @csrf
                                     <div class="relative mb-[25px] bg-white">
                                        <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] pl-[40px] pr-[20px] py-[10px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] bg-white" type="text" name="ad_id" placeholder="Your Name" value="{!! $projects->id !!}" hidden  required>
                                        
                                    </div>

                                    <div class="relative mb-[25px] bg-white">
                                        <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] pl-[40px] pr-[20px] py-[10px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] bg-white" type="text" name="ad_name" placeholder="Your Name" value="{!! $projects->title !!}" hidden required>
                                        
                                    </div>
                                @if($projects->status == 'Rent')
                                                              
                                    <div class="relative mb-[25px] bg-white">
                                        <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] pl-[40px] pr-[20px] py-[10px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] bg-white" type="text" name="ad_type" placeholder="Your Name" value="Rent"  hidden required>
                                        
                                    </div>
                                @else
                                    <div class="relative mb-[25px] bg-white">
                                        <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] pl-[40px] pr-[20px] py-[10px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] bg-white" type="text" name="ad_type" placeholder="Your Nasdsadme" value="Buy" hidden required>
                                        
                                    </div>
                                @endif

                                    <div class="relative mb-[25px] bg-white">
                                        <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] pl-[40px] pr-[20px] py-[10px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] bg-white" type="text" name="name" placeholder="Your Name" required>
                                        
                                    </div>

                                    <div class="relative mb-[25px] bg-white">
                                        <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] pl-[40px] pr-[20px] py-[10px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] bg-white" type="text" name="phone" placeholder="Your Phone" required>
                                        
                                    </div>

                                    <div class="relative mb-[25px] bg-white">
                                        <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] pl-[40px] pr-[20px] py-[10px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] bg-white" type="text" name="email" placeholder="Your Email" required>
                                        
                                    </div>

                                    <div class="relative mb-[25px] bg-white">
                                        <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] pl-[40px] pr-[20px] py-[10px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] bg-white" type="text" name="message" placeholder="Your Message" required>
                                        
                                    </div>

                                    <div class="relative mb-[25px] bg-white">
                                        
                                        <select class="nice-select font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] pl-[0px] pr-[0px] py-[10px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] bg-white appearance-none cursor-pointer" name="type" selected required>
                                            <option value="" selected disabled="true">Types</option>
                                            <option value="customer">Customer</option>
                                            <option value="agent">Agent</option>
                                        </select>
                                    </div>

                                    <button type="submit" class="block z-[1] before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:z-[-1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[30px] py-[12px] capitalize font-medium text-white text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:z-[-2] after:bg-primary after:rounded-md after:transition-all w-[100%]">Send</button>

                                </form>
                            </div>
                        </aside>
                    </div>
                </div>

            </div>
        </section>
        <!-- Popular Properties end -->

        <!-- Explore Cities Start-->

        <section class="explore-cities-section pt-[10px] pb-[120px] lg:py-[120px] mb-[-5rem]">
            <div class="container">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="mb-[30px] lg:mb-[20px] text-center">
                            <h2 class="font-lora text-primary text-[24px] sm:text-[40px] capitalize font-medium"><b>Similar Properties</b></h2>
                        </div>
                        <div class="cities-slider">
                            <div class="swiper  -mx-[30px] -my-[60px] px-[30px] py-[60px]">
                                <div class="swiper-wrapper">
                                    <!-- swiper-slide start -->
                @foreach($similar_proj as $sim_proj)                    
                    <div class="swiper-slide text-center">
                             <div class="overflow-hidden rounded-md drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] bg-[#FFFDFC] text-center transition-all duration-300 hover:-translate-y-[10px] h-[32rem]">
                            <div class="relative">
                                <a href="{{ route('property_details',$sim_proj->id) }}" class="block">
                                    <img src="{{config('fgproperties.file_path').$sim_proj->featured_image}}" class="w-full h-[15rem]" loading="lazy" width="370" height="266" alt="DAMAC Tower Amman.">
                                </a>
                                <div class="flex flex-wrap flex-col absolute top-5 right-5">
                                    <button class="flex flex-wrap items-center bg-[rgb(11,44,61,0.8)] p-[5px] rounded-[2px] text-white mb-[5px] text-xs"><img class="mr-1" src="{{url('')}}/assets/images/icon/camera.png" loading="lazy" width="13" height="10" alt="camera icon">
                                     @php                        if ($sim_proj->images !="") {
                                                                                $images = $sim_proj->images;
                                                                                $img1 = explode(',', $images);
                                                                                $real_image = reset($img1);
                                                                            }
                                                    @endphp
                                                    {{count($img1)}}

                                    </button>
                                    <!-- <button class="flex flex-wrap items-center bg-[rgb(11,44,61,0.8)] p-[5px] rounded-[2px] text-white text-xs"><img class="mr-1" src="{{url('')}}/assets/images/icon/video.png" loading="lazy" width="14" height="10" alt="camera icon">08</button> -->
                                </div>
                                <span class="absolute bottom-5 left-5 bg-[#FFFDFC] p-[5px] rounded-[2px] text-primary leading-none text-[14px] font-normal capitalize">for {{$sim_proj->status}}</span>
                            </div>

                            <div class="py-[20px] px-[20px]">
                                <h3><a href="{{ route('property_details',$sim_proj->id) }}" class="font-lora leading-tight text-[22px] xl:text-[26px] text-primary font-medium">{{$sim_proj->title}}</a></h3>
                                <h4><a href="{{ route('property_details',$sim_proj->id) }}" class="font-light text-tiny underline">
                                    @if($sim_proj->url != "")
                                        {{$sim_proj->url}}
                                    @else
                                        UAE
                                    @endif
                                </a></h4>
                                <span class="font-light text-sm">Added: {{ Carbon\Carbon::parse($sim_proj->created_at)->format('d-M-Y') }}</span>
                                <div class="before:block before:absolute before:top-1/2 before:-translate-y-1/2 before:h-[1px] before:w-full before:z-[-1] before:bg-[#E0E0E0] relative"><span class="font-lora text-base text-primary px-[15px] bg-white font-medium">
                                    @if($sim_proj->price != "")
                                        Price: {{ number_format($sim_proj->price) }} AED
                                    @else
                                              
                                    @endif
                                </span></div>
                                <p class="font-light">
                                    @if($sim_proj->area != "")
                                        {{$sim_proj->area}} Sq.fit -
                                    @else
                                        N/A Sq.fit - 
                                    @endif

                                    @if($sim_proj->bedrooms != "")
                                        {{$sim_proj->bedrooms}} Bed -
                                    @else
                                        N/A Bed - 
                                    @endif

                                    @if($sim_proj->bathrooms != "")
                                        {{$sim_proj->bathrooms}} Bath 
                                    @else
                                        N/A Bath 
                                    @endif

                                </p>
                            </div>
                            </div>
                        </div>
                @endforeach    


                                    <!-- swiper-slide end-->
                                </div>
                                <!-- Add Pagination -->
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Explore Cities End-->

@endsection

@section('bottom-mid-scripts')

@endsection

@section('bottom-bot-scripts')

    <script src="{{url('')}}/assets/js/plugins/jquery.waypoints.js"></script>
    <script src="{{url('')}}/assets/js/plugins/jquery.counterup.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script type="module">

    var swiper = new Swiper(".mySwiper", {
        loop: true,
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
      });
      var swiper2 = new Swiper(".mySwiper2", {
        loop: true,
        spaceBetween: 10,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        thumbs: {
          swiper: swiper,
        },
      });
  </script>
  <script type="text/javascript">
      $("#aler").show();
        setTimeout(function() { $("#aler").hide(); }, 3000);
  </script>
@endsection
