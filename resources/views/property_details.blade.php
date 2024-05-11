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
        height: 25rem;
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
        height: 18rem;
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
<!-- @if($projects->bannar_image == "")
        <section class="bg-no-repeat bg-center bg-cover bg-[#FFF6F0] lg:h-[350px] flex flex-wrap items-center relative before:absolute before:inset-0 before:content-[''] before:bg-[#000000] before:opacity-[50%]" style="background-image: url('{{url('')}}/assets/images/breadcrumb/sale.png');" id="bannerimages">
            <div class="container">
                <div class="grid grid-cols-1 ">
                    <div class="col-span-12 ">
                        <div class="max-w-[700px]  mx-auto text-center text-white relative z-[1]">

                            <h1 class="font-lora text-[25px] sm:text-[25px] md:text-[25px] lg:text-[25px] leading-tight font-medium md:mt-[-0rem]">
                               {!! $projects->title !!} 
                            </h1>


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

                            <h1 class="font-lora text-[25px] sm:text-[25px] md:text-[25px] lg:text-[25px] leading-tight font-medium md:mt-[-0rem]">
                               {!! $projects->title !!} 
                            </h1>

                        
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
    @endif -->
        
    @if(session()->has('message'))
    <div class="container w-[50rem] mt-[2rem] text-center" id="aler">
        <div class="bg-[#294159] border border-[#294159] text-[white] px-4 py-3 rounded relative" role="alert">
          <strong class="font-bold">THANK YOU!</strong>
          <span class="block sm:inline">{{ session()->get('message') }}</span>
        </div>
    </div>
    @endif



<!-- Popular Properties start -->
        <section class="popular-properties py-[80px] lg:py-[120px] md:mb-[-10rem] lg:mt-[-6rem] mt-[-4rem]">
            <div class="container">

                <div class="grid grid-cols-12 mb-[-30px] gap-[30px] xl:gap-[50px]">
                    <div class="col-span-12 md:col-span-6 lg:col-span-8 mb-[30px]">
                        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                          <div class="swiper-wrapper">
                            <div class="swiper-slide md:h-[30rem]">
                              <img src="{{config('fgproperties.file_path').$projects->bannar_image}}" class="h-[30rem] rounded-[8px]" style="width:100%;" />
                              <!-- <img src="{{URL('')}}/{{config('fgproperties.file_path').$projects->bannar_image}}" class="h-[30rem]" style="width:100%;" /> -->
                            </div>
                            @php
                                if ($projects->images !="") {
                                $images = $projects->images;
                                $img3 = explode(',', $images);
                                foreach($img3 as $images){
                                    if($images != '')
                                    {
                                @endphp
                          
                            <div class="swiper-slide md:h-[30rem]">
                              <img src="{{config('fgproperties.file_path').$images}}" class="h-[30rem] rounded-[8px]" style="width:100%;" />
                              <!-- <img src="{{URL('')}}/{{config('fgproperties.file_path').$images}}" class="h-[30rem]" style="width:100%;" /> -->
                            </div>
                          @php }
                                }
                            } 
                                @endphp
                          </div>
                          <div class="swiper-button-next"></div>
                          <div class="swiper-button-prev"></div>
                        </div>
                        <div thumbsSlider="" class="swiper mySwiper mt-[0.5rem] lg:mt-[1rem] rounded-[8px]">
                          <div class="swiper-wrapper">
                            <div class="swiper-slide mt-[0.5rem] lg:mt-[-2rem]">
                              <img src="{{config('fgproperties.file_path').$projects->bannar_image}}" class="h-[4rem] md:h-[6rem]" style="width:100%;min-height: 10rem;" />
                              <!-- <img src="{{URL('')}}/{{config('fgproperties.file_path').$projects->bannar_image}}" class="h-[4rem] md:h-[6rem]" style="width:100%;min-height: 10rem;" /> -->
                            </div>
                             @php
                                if ($projects->images !="") {
                                $images = $projects->images;
                                $img3 = explode(',', $images);
                                foreach($img3 as $images){
                                    if($images != '')
                                    {
                                @endphp
                          
                            <div class="swiper-slide mt-[0.5rem] lg:mt-[-2rem]">
                              <img src="{{config('fgproperties.file_path').$images}}" class="h-[4rem] md:h-[6rem]" style="width:100%;min-height: 10rem;" />
                              <!-- <img src="{{URL('')}}/{{config('fgproperties.file_path').$images}}" class="h-[4rem] md:h-[6rem]" style="width:100%;min-height: 10rem;" /> -->
                            </div>
                          @php }
                                }
                            } 
                                @endphp
                          </div>
                        </div>
                        <div class="mt-[45px] mb-[35px]">
                                <div class="grid md:grid-cols-2 grid-cols-1">
                                    <h2 class="font-lora leading-tight text-[22px] md:text-[22px] lg:text-[22px] text-primary mb-[5px] font-medium"><b>{!! $projects->title !!}</b></h2>
                                    <div class="float-right">
                                        <a href="" class="float-right "><p class="font-lora leading-tight text-[14px] md:text-[14px] lg:text-[14px] text-primary mb-[5px] font-medium">
                                            @foreach($developers as $developer)
                                            @if($developer->id == $projects->developer_id)
                                            By {{$developer->developer_name}}                                                                               
                                            <i class="fa-regular fa-building"></i></p>
                                            @endif
                                            @endforeach 
                                        </a>
                                    </div>
                                    <div class="float-right">
                                        <a href="" class="">
                                            <p class="font-lora leading-tight text-[14px] md:text-[14px] lg:text-[14px] text-primary mb-[5px] font-medium">
                                             Ref No.  {{ $projects->ref_id }}
                                            </p>
                                            @if($projects->ext_ref_num)
                                            <p class="font-lora leading-tight text-[14px] md:text-[14px] lg:text-[14px] text-primary mb-[5px] font-medium">
                                             {{ $projects->ext_ref_num }}
                                            </p>
                                            @endif
                                        </a>
                                    </div>
                                </div>
                                @if($projects->url != "")
                                   <h3 class="font-light text-[14px] text-secondary underline mb-[20px]"><a href="#" style="border:none !important"><i class="fas fa-map-marker-alt"></i> {{$projects->url}}</a></h3>
                                @else
                                   <h3 class="font-light text-[14px] text-secondary underline mb-[20px]"><a href="#" style="border:none !important"><i class="fas fa-map-marker-alt"></i> UAE</a></h3>       
                                @endif
                                @if($projects->price != "")
                                <hr>
                                <h4 class="font-lora leading-tight text-[35px] md:text-[35px] lg:text-[35px] text-primary mb-[1rem] mt-[1rem] font-bold">
                                    @if($projects->status == 'Rent')
                                    Starting Price Rent: 
                                    @else
                                    Starting Price Buy: 
                                    @endif                                
                                  <span class="font-lora leading-tight text-[35px] md:text-[35px] lg:text-[35px] text-primary mb-[5px] font-bold"><b>AED {{ number_format($projects->price) }}</b></span>
                                @else
                                
                                </h4>
                                @endif

                            <hr>
                            
                            <h4 class="font-lora leading-tight text-[20px] md:text-[20px] lg:text-[20px] text-primary mb-[5px] mt-[1rem] font-medium">About This Listing</h4>
                            <p class="mt-[1rem] text-[20px] font-semibold">
                                {{ $projects->permit_no ? 'Permit Number: '.$projects->permit_no : Null}}
                          </p>
                            <div class="mt-[1rem] flex flex-wrap" style=" word-wrap: break-word;      ">
                                {!! $projects->description !!}
                           </div>
                        </div>                        

                        <h4 class="font-lora text-primary text-[20px] leading-[1.277] sm:text-[20px] capitalize mt-[50px] mb-[40px] font-medium  mt-[-1rem]">
                            Amenities and Advantages<span class="text-secondary">.</span>
                        </h4>

                        <ul class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 px-[15px] mx-[-15px] mt-[40px] text-[15px]">
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
                            @php
                                if ($projects->amenities !="") {
                                $images = $projects->amenities;
                                $img3 = explode(',', $images);
                                foreach($img3 as $images){
                                    if($images != '')
                                    {
                                @endphp

                                        <li class="flex flex-wrap items-center mb-[25px]">
                                <img class="mr-[15px]" src="{{url('')}}/assets/images/about/check.png" loading="lazy" alt="icon" width="20" height="20">
                                <span>{{ucwords($images)}}</span>
                            </li>

                                       
                                         @php 
                                        }
                                    }
                                } 
                                @endphp
                        </ul>

                        

                        <div class="grid grid-cols-1 py-[0px]">
                            <div class="h-[305px] min-w-full  rounded-[20px] overflow-hidden xl:ml-[40px] my-[0px] rounded-[20px]" style="margin-left:0px ;">

                                @if($projects->url != "")
                                   <iframe class="w-full h-full" src="https://www.google.com/maps?q= {!! $projects->url !!}* &output=embed" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                @else
                                   <iframe class="w-full h-full" src="https://www.google.com/maps?q= Uae* &output=embed" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                @endif
                            </div>
                        </div>

                        @if($projects->nearest_hospitals != "" || $projects->nearest_shopping_malls !="" || $projects->nearest_schools !="" || $projects->nearest_gyms !="")
                    <div class="rounded-[20px] bg-[#F5F9F8] border-solid border-[1px] pt-[1rem] pb-[1rem] pl-[1rem] pr-[1rem] mt-4">
                        <div class="grid grid-cols-12">
                            <div class="col-span-12 flex flex-wrap flex-col md:flex-row md:items-center justify-between mb-[50px] lg:mb-[70px]">
                                <div class="mb-5 xl:mb-0">
                                    <h2 class="font-lora text-primary text-[22px] sm:text-[22px] capitalize font-medium">
                                        Nearby Places<span class="text-secondary">.</span></h2>
                                </div>
                                <ul class="all-properties flex flex-wrap lg:pt-[10px]">
                                    @if($projects->nearest_hospitals != "")
                                    <li data-tab="ForBuy" class="mr-[30px] md:mr-[35px] mb-4 lg:mb-0 leading-none active">
                                        <button class="leading-none capitalize text-primary hover:text-secondary transition-all text-[14px] ease-out">
                                        Health & Medical</button>
                                    </li>
                                    @endif
                                    @if($projects->nearest_shopping_malls != "")

                                    <li data-tab="ForSale" class="mr-[30px] md:mr-[35px] mb-4 lg:mb-0 leading-none">
                                        <button class="leading-none capitalize text-primary hover:text-secondary transition-all text-[14px] ease-out">
                                            Shopping mall</button>
                                    </li>
                                    @endif
                                    @if($projects->nearest_schools != "")

                                    <li data-tab="ForRent" class="mr-[30px] md:mr-[35px] mb-4 lg:mb-0 leading-none">
                                        <button class="leading-none capitalize text-primary hover:text-secondary transition-all text-[14px] ease-out">
                                            School & College</button>
                                    </li>
                                    @endif
                                    @if($projects->nearest_gyms != "")
                                    
                                    <li data-tab="co-living" class="md:mr-[0px] mb-4 lg:mb-0 leading-none">
                                        <button class="leading-none capitalize text-primary hover:text-secondary transition-all text-[14px] ease-out">
                                            Gym
                                        </button>
                                    </li>
                                    @endif
                                </ul>
                            </div>

                            <div class="col-span-12 mb-[80px]">

                                <div id="ForBuy" class="properties-tab-content active">
                                    <div class="flex flex-row flex-wrap">
                                        @php
                                if ($projects->nearest_hospitals !="") {
                                $images = $projects->nearest_hospitals;
                                $img3 = explode(',', $images);
                                foreach($img3 as $images){
                                    if($images != '')
                                    {
                                @endphp


                                <div class="rounded-lg backdrop-opacity-10 bg-[#354049]/25  py-4 px-4 my-4 mx-4">
                                    <span class="text-lg">{{ $images }}</span>
                                </div>
                              
                                @php 
                                        }
                                    }
                                } 
                                @endphp
                                      
                                    </div>
                                </div>
                                <div id="ForSale" class="properties-tab-content">
                                    <div class="flex flex-row flex-wrap">
                                                @php
                                if ($projects->nearest_shopping_malls !="") {
                                $images = $projects->nearest_shopping_malls;
                                $img3 = explode(',', $images);
                                foreach($img3 as $images){
                                    if($images != '')
                                    {
                                @endphp

                                        <div class="rounded-lg backdrop-opacity-10 bg-[#354049]/25  py-4 px-4 my-4 mx-4">
                                            <span class="text-lg">{{ $images }}</span>
                                        </div>

                                       
                                         @php 
                                        }
                                    }
                                } 
                                @endphp

                                        
                                    </div>

                                </div>
                                <div id="ForRent" class="properties-tab-content">
                                    <div class="flex flex-row flex-wrap">
                                                    @php
                                if ($projects->nearest_schools !="") {
                                $images = $projects->nearest_schools;
                                $img3 = explode(',', $images);
                                foreach($img3 as $images){
                                    if($images != '')
                                    {
                                @endphp

                                        <div class="rounded-lg backdrop-opacity-10 bg-[#354049]/25  py-4 px-4 my-4 mx-4">
                                            <span class="text-lg">{{ $images }}</span>
                                        </div>                                
                                        
                                        @php 
                                        }
                                    }
                                } 
                                @endphp

                                        
                                    </div>
                                </div>
                                <div id="co-living" class="properties-tab-content">
                                    <div class="flex flex-row flex-wrap">
                                        
                                                        @php
                                if ($projects->nearest_gyms !="") {
                                $images = $projects->nearest_gyms;
                                $img3 = explode(',', $images);
                                foreach($img3 as $images){
                                    if($images != '')
                                    {
                                @endphp

                                        <div class="rounded-lg backdrop-opacity-10 bg-[#354049]/25  py-4 px-4 my-4 mx-4">
                                            <span class="text-lg">{{ $images }}</span>
                                        </div>                                
                                        
                                         @php 
                                        }
                                    }
                                } 
                                @endphp

                                        
                                     </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endif
                    </div>
                    
                    <div class="col-span-12 md:col-span-6 lg:col-span-4 mb-[30px]">
                        <aside class="mb-[-40px] asidebar" >
                            
                            <div class="bg-[#F5F9F8] px-[20px] lg:px-[15px] xl:px-[35px] py-[50px] rounded-[8px] mb-[40px]" >
                                <form method="post"  action="{{ route('send.message') }}" class="relative" >
                                     @csrf
                                <div class="cities-slider" id="cities-slider">
                                    <div class="swiper -mx-[10px] -my-[30px] px-[10px] py-[30px] " id="swiper">

                                        <h3 class="text-primary leading-none text-[20px] font-lora mb-[30px] font-medium"><b>Book Your Viewing</b></h3>

                                        <div class="swiper-wrapper sm:rid-rows-none sm:grid-cols-none">

                                            @foreach($dates as $date)
                                                @if($date->format('l') != 'Sunday')

                                            <div class="swiper-slide text-center calendar{{$loop->iteration}} focus:border-blue-600">
                                                <div class="overflow-hidden rounded-md bg-[#F0F0F0] text-center transition-all duration-300 hover:-translate-y-[5px] w-[100%] calendar1{{$loop->iteration}}">

                                                    <div class="py-[10px] px-[5px]">
                                                        <h4><a href="javascript:" class="font-light text-[13px] xl:text-[13px] calendar">
                                                            <b>{{$date->format('F')}}</b>
                                                        </a></h4>
                                                        <h3><a href="javascript:" class="font-lora leading-tight text-[20px] xl:text-[20px] text-primary font-medium calendar">{{$date->format('d')}}</a></h3>
                                                        <h4><a href="javascript:" class="font-light text-[13px] xl:text-[13px] calendar">
                                                            <b>{{$date->format('l')}}</b>
                                            <input class="datee{{$loop->iteration}}" type="text" name="" value=" {{ $date->format('d-m-y') }} " hidden>

                                                        </a></h4>
                                                   
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                                <br>
                                <h3 class="text-primary leading-none text-[20px] font-lora mb-[15px] mt-[15px] font-medium"><b>Inquiry Form</b> </h3>
                                <h3 class="text-primary leading-none text-[18px] font-lora mb-[30px] font-medium">Fill the form below </h3>

                                

                                     <div class="relative mb-[25px] bg-white">
                                        <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] pl-[40px] pr-[20px] py-[10px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] bg-white text-sm dated" type="text" name="date" placeholder="Visit Date" value=""   required readonly>
                                        
                                    </div>

                                     <div class="relative mb-[25px] bg-white">
                                        <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] pl-[40px] pr-[20px] py-[10px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] bg-white text-sm" type="text" name="ad_id" placeholder="Your Name" value="{!! $projects->id !!}" hidden  required>
                                        
                                    </div>

                                    <div class="relative mb-[25px] bg-white">
                                        <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] pl-[40px] pr-[20px] py-[10px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] bg-white text-sm" type="text" name="ad_name" placeholder="Your Name" value="{!! $projects->title !!}" hidden required>
                                        
                                    </div>
                                @if($projects->status == 'Rent')
                                                              
                                    <div class="relative mb-[25px] bg-white">
                                        <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] pl-[40px] pr-[20px] py-[10px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] bg-white text-sm" type="text" name="ad_type" placeholder="Your Name" value="Rent"  hidden required>
                                        
                                    </div>
                                @else
                                    <div class="relative mb-[25px] bg-white">
                                        <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] pl-[40px] pr-[20px] py-[10px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] bg-white text-sm" type="text" name="ad_type" placeholder="Your Nasdsadme" value="Buy" hidden required>
                                        
                                    </div>
                                @endif

                                    <div class="relative mb-[25px] bg-white">
                                        <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] pl-[40px] pr-[20px] py-[10px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] bg-white text-sm" type="text" name="name" placeholder="Your Name" required>
                                        
                                    </div>

                                    <div class="relative mb-[25px] bg-white">
                                        <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] pl-[40px] pr-[20px] py-[10px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] bg-white text-sm" type="text" name="phone" placeholder="Your Phone" required>
                                        
                                    </div>

                                    <div class="relative mb-[25px] bg-white">
                                        <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] pl-[40px] pr-[20px] py-[10px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] bg-white text-sm" type="text" name="email" placeholder="Your Email" required>
                                        
                                    </div>

                                    <div class="relative mb-[25px] bg-white">
                                        <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] pl-[40px] pr-[20px] py-[10px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] bg-white text-sm" type="text" name="message" placeholder="Your Message" required>
                                        
                                    </div>

                                    <div class="relative mb-[25px] bg-white text-sm">
                                        
                                        <select class="nice-select font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] pl-[0px] pr-[0px] py-[10px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] bg-white appearance-none cursor-pointer" name="type" selected required>
                                            <option value="" selected disabled="true">Types</option>
                                            <option value="customer">Customer</option>
                                            <option value="agent">Agent</option>
                                        </select>
                                    </div>

                                    <button type="submit" class="block z-[1] before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:z-[-1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[30px] py-[12px] capitalize font-medium text-white text-[13px] xl:text-[13px] relative after:block after:absolute after:inset-0 after:z-[-2] after:bg-primary after:rounded-md after:transition-all w-[100%]">Send</button>

                                </form>
                            </div>

                            <div class="bg-[#F5F9F8] px-[20px] lg:px-[15px] xl:px-[35px] py-[50px] rounded-[8px] mb-[40px]" >
                                <!-- <div> -->
                                    
                                        @if($projects->agent_image == '')
                                        <img src="{{url('')}}/assets/images/team/images.jpg" class="" style="border-radius: 50%; width:100px; border-color: rgb(11,44,61); border: 2px solid;" alt="Avatar">
                                        @else
                                        <img src="{{config('fgproperties.file_path').$projects->agent_image}}" class="" style="border-radius: 50%; width:100px; height: 100px; border-color: rgb(11,44,61); border: 2px solid;" alt="Avatar">
                                        @endif
                                        <h3 class="text-primary leading-none text-[20px] font-lora my-5 font-medium"><b>{{$projects->agent_name}}</b></h3>                             
                                    
                                <!-- </div> -->

                                

                                <h3 class="text-primary leading-none text-[20px] font-lora mb-[15px] font-medium"><b>Contact Details</b> </h3>
                                <h3 class="text-primary leading-none text-[18px] font-lora mb-[15px] font-medium">{!! $projects->phone != '' ? "Phone No. : <a href='tel:$projects->phone' title=''>".$projects->phone.'</a>' : null !!}</h3>
                                <h3 class="text-primary leading-none text-[18px] font-lora mb-[15px] font-medium">{!! $projects->email != '' ? "email : <a href='mailto:$projects->email' title=''>".$projects->email.'</a>' : null !!}</h3>
                                <a href="tel:{{$projects->phone}}" class="mt-5">
                                    <button type="button" class="block z-[1] before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:z-[-1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[30px] py-[12px] capitalize font-medium text-white text-[13px] xl:text-[13px] relative after:block after:absolute after:inset-0 after:z-[-2] after:bg-primary after:rounded-md after:transition-all w-[100%] mt-5">Call</button>
                                </a>
                                <a href="https://wa.me/{{$projects->phone}}" class="mt-5">
                                    <button type="button" class="block z-[1] before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:z-[-1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[30px] py-[12px] capitalize font-medium text-white text-[13px] xl:text-[13px] relative after:block after:absolute after:inset-0 after:z-[-2] after:bg-primary after:rounded-md after:transition-all w-[100%] mt-5">Connect on Whatsapp</button>
                                </a>
                                <a  class="mt-5 but">
                                    <button type="button" class="block z-[1] before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:z-[-1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[30px] py-[12px] capitalize font-medium text-white text-[13px] xl:text-[13px] relative after:block after:absolute after:inset-0 after:z-[-2] after:bg-primary after:rounded-md after:transition-all w-[100%] mt-5">Email</button>
                                </a>
                            </div>
                        </aside>
                    </div>
                </div>

            </div>
        </section>
        <!-- Popular Properties end -->
        <!-- <div class="absolute flex w-full z-100 h-full bg-white">
            
        </div> -->
        <!-- Explore Cities Start-->

        <section class="explore-cities-section pt-[10px] pb-[120px] lg:py-[120px] mb-[-5rem]">
            <div class="container">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="mb-[30px] lg:mb-[20px] text-center">
                            <h2 class="font-lora text-primary text-[22px] sm:text-[22px] capitalize font-medium"><b>Similar Properties</b></h2>
                        </div>
                        <div class="cities-slider">
                            <div class="swiper -mx-[5px] -my-[30px] px-[5px] py-[30px]" style="padding-top: 1rem; padding-bottom: 1rem;">
                                <div class="swiper-wrapper">
                                    <!-- swiper-slide start -->
                @foreach($similar_proj as $sim_proj)
                                    <div class="swiper-slide text-center">
                                        <div class="overflow-hidden rounded-[15px] drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] bg-[#FFFDFC] text-center transition-all duration-300 hover:-translate-y-[10px] w-[100%] min-h-[30rem]">
                                            <div class="relative">
                                                <!-- <img src="{{url('')}}/assets/images/team/images.jpg" class="flex flex-wrap flex-col absolute top-1 left-1" style="border-radius: 50%; width:60px; border-color: rgb(11,44,61); border: 2px solid;" alt="Avatar"> -->
                                                <a href="{{ route('project_details',$sim_proj->id) }}" class="block">
                                                    <img src="{{config('fgproperties.file_path').$sim_proj->featured_image}}" class="w-full h-[15rem]" loading="lazy" width="370" height="266" alt="{{$sim_proj->title}}">
                                                     <!-- <img src="{{url('')}}/{{config('fgproperties.file_path').$sim_proj->featured_image}}" class="w-full h-[15rem]" loading="lazy" width="370" height="266" alt="{{$sim_proj->title}}">  -->
                                                </a>
                                                <div class="flex flex-wrap flex-col absolute top-5 right-5">
                                                    <button class="flex flex-wrap items-center bg-[rgb(11,44,61,0.8)] p-[5px] rounded-[2px] text-white mb-[5px] text-xs"><img class="mr-1" src="{{url('')}}/assets/images/icon/camera.png" loading="lazy" width="13" height="10" alt="camera icon">
                                                         @php                        
                                                            if ($sim_proj->images !="") {
                                                                $images = $sim_proj->images;
                                                                $img1 = explode(',', $images);
                                                                $real_image = reset($img1);
                                                            }
                                                        @endphp
                                                        {{ !Empty($img1) ? count($img1) : 1 }}
                                                    </button>
                                                </div><!-- 
                                                <span class="absolute bottom-5 left-5 bg-[#FFFDFC] p-[5px] rounded-[2px] text-primary leading-none text-[14px] font-normal capitalize">New Project</span> -->
                                                <span class="absolute bottom-5 left-5 bg-[#FFFDFC] p-[5px] rounded-[2px] text-primary leading-none text-[14px] font-normal capitalize">
                                                    {{($sim_proj->status=='Sell' ? 'For Sale' : ($sim_proj->status == 'Rent' ? 'For Rent':$sim_proj->status))}}</span>                                                
                                                <span class="absolute bottom-5 right-5 bg-[#FFFDFC] p-[5px] rounded-[2px] text-primary leading-none text-[14px] font-normal capitalize"> 
                                                    @foreach($developers as $developer)
                                                        @if($developer->id == $sim_proj->developer_id)
                                                            By {{$developer->developer_name}}
                                                        @endif
                                                    @endforeach
                                                </span> 
                                            </div>

                                            <div class="py-[20px] px-[20px] text-left">
                                                <h3><a href="{{ route('project_details',$sim_proj->id) }}" class="font-lora leading-tight text-[18px] xl:text-[18px] text-primary font-medium"> {{$sim_proj->title}}</a></h3>
                                                <h4 class="truncate"><a href="{{ route('project_details',$sim_proj->id) }}" class="font-light text-tiny underline" style=" margin-top: 20px">
                                                    @if($sim_proj->url != "")
                                                        {{$sim_proj->url}}
                                                    @else
                                                       UAE
                                                    @endif
                                                </a></h4>
                                                <span class="font-light text-sm">Added {{ Carbon\Carbon::parse($sim_proj->created_at)->diffForHumans() }}</span>
                            <ul class="absolute  min-w-full my-auto flex flex-wrap items-center justify-between text-[12px] mt-[10px] mb-[15px]  border-b border-[#E0E0E0] my-auto">
                                
                                <li class="flex flex-wrap items-center pr-[25px] sm:pr-[5px] md:pr-[25px] border-r border-[#E0DEDE]">
                                    <svg class="mr-[5px]" width="14" height="14" viewBox="0 0 14 14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.8125 9.68709V4.31285C12.111 4.23634 12.384 4.0822 12.6037 3.86607C12.8234 3.64994 12.982 3.37951 13.0634 3.08226C13.1448 2.78501 13.1461 2.47151 13.0671 2.1736C12.9882 1.87569 12.8318 1.60398 12.6139 1.38605C12.396 1.16812 12.1243 1.01174 11.8263 0.932792C11.5284 0.85384 11.2149 0.855126 10.9177 0.936521C10.6204 1.01792 10.35 1.17652 10.1339 1.39623C9.91774 1.61593 9.7636 1.88892 9.68709 2.18747H4.31285C4.23634 1.88892 4.0822 1.61593 3.86607 1.39623C3.64994 1.17652 3.37951 1.01792 3.08226 0.936521C2.78501 0.855126 2.47151 0.85384 2.1736 0.932792C1.87569 1.01174 1.60398 1.16812 1.38605 1.38605C1.16812 1.60398 1.01174 1.87569 0.932792 2.1736C0.85384 2.47151 0.855126 2.78501 0.936521 3.08226C1.01792 3.37951 1.17652 3.64994 1.39623 3.86607C1.61593 4.0822 1.88892 4.23634 2.18747 4.31285V9.68709C1.88892 9.7636 1.61593 9.91774 1.39623 10.1339C1.17652 10.35 1.01792 10.6204 0.936521 10.9177C0.855126 11.2149 0.85384 11.5284 0.932792 11.8263C1.01174 12.1243 1.16812 12.396 1.38605 12.6139C1.60398 12.8318 1.87569 12.9882 2.1736 13.0671C2.47151 13.1461 2.78501 13.1448 3.08226 13.0634C3.37951 12.982 3.64994 12.8234 3.86607 12.6037C4.0822 12.384 4.23634 12.111 4.31285 11.8125H9.68709C9.7636 12.111 9.91774 12.384 10.1339 12.6037C10.35 12.8234 10.6204 12.982 10.9177 13.0634C11.2149 13.1448 11.5284 13.1461 11.8263 13.0671C12.1243 12.9882 12.396 12.8318 12.6139 12.6139C12.8318 12.396 12.9882 12.1243 13.0671 11.8263C13.1461 11.5284 13.1448 11.2149 13.0634 10.9177C12.982 10.6204 12.8234 10.35 12.6037 10.1339C12.384 9.91774 12.111 9.7636 11.8125 9.68709ZM11.375 1.74997C11.548 1.74997 11.7172 1.80129 11.8611 1.89744C12.005 1.99358 12.1171 2.13024 12.1834 2.29012C12.2496 2.45001 12.2669 2.62594 12.2332 2.79568C12.1994 2.96541 12.1161 3.12132 11.9937 3.24369C11.8713 3.36606 11.7154 3.4494 11.5457 3.48316C11.3759 3.51692 11.2 3.49959 11.0401 3.43337C10.8802 3.36714 10.7436 3.25499 10.6474 3.11109C10.5513 2.9672 10.5 2.79803 10.5 2.62497C10.5002 2.39298 10.5925 2.17055 10.7565 2.00651C10.9206 1.84246 11.143 1.7502 11.375 1.74997ZM1.74997 2.62497C1.74997 2.45191 1.80129 2.28274 1.89744 2.13885C1.99358 1.99495 2.13024 1.8828 2.29012 1.81658C2.45001 1.75035 2.62594 1.73302 2.79568 1.76678C2.96541 1.80055 3.12132 1.88388 3.24369 2.00625C3.36606 2.12862 3.4494 2.28453 3.48316 2.45427C3.51692 2.624 3.49959 2.79993 3.43337 2.95982C3.36714 3.1197 3.25499 3.25636 3.11109 3.35251C2.9672 3.44865 2.79803 3.49997 2.62497 3.49997C2.39298 3.49974 2.17055 3.40748 2.00651 3.24343C1.84246 3.07939 1.7502 2.85696 1.74997 2.62497ZM2.62497 12.25C2.45191 12.25 2.28274 12.1987 2.13885 12.1025C1.99495 12.0064 1.8828 11.8697 1.81658 11.7098C1.75035 11.5499 1.73302 11.374 1.76678 11.2043C1.80055 11.0345 1.88388 10.8786 2.00625 10.7563C2.12862 10.6339 2.28453 10.5505 2.45427 10.5168C2.624 10.483 2.79993 10.5003 2.95982 10.5666C3.1197 10.6328 3.25636 10.745 3.35251 10.8888C3.44865 11.0327 3.49997 11.2019 3.49997 11.375C3.49974 11.607 3.40748 11.8294 3.24343 11.9934C3.07939 12.1575 2.85696 12.2497 2.62497 12.25ZM9.68709 10.9375H4.31285C4.23448 10.6367 4.07729 10.3622 3.8575 10.1424C3.63771 9.92265 3.36326 9.76546 3.06247 9.68709V4.31285C3.36324 4.23444 3.63766 4.07724 3.85745 3.85745C4.07724 3.63766 4.23444 3.36324 4.31285 3.06247H9.68709C9.76546 3.36326 9.92265 3.63771 10.1424 3.8575C10.3622 4.07729 10.6367 4.23448 10.9375 4.31285V9.68709C10.6367 9.76542 10.3622 9.92259 10.1424 10.1424C9.92259 10.3622 9.76542 10.6367 9.68709 10.9375ZM11.375 12.25C11.2019 12.25 11.0327 12.1987 10.8888 12.1025C10.745 12.0064 10.6328 11.8697 10.5666 11.7098C10.5003 11.5499 10.483 11.374 10.5168 11.2043C10.5505 11.0345 10.6339 10.8786 10.7563 10.7563C10.8786 10.6339 11.0345 10.5505 11.2043 10.5168C11.374 10.483 11.5499 10.5003 11.7098 10.5666C11.8697 10.6328 12.0064 10.745 12.1025 10.8888C12.1987 11.0327 12.25 11.2019 12.25 11.375C12.2496 11.6069 12.1573 11.8293 11.9933 11.9933C11.8293 12.1573 11.6069 12.2496 11.375 12.25Z"/>
                                    </svg>
                                    <span> 
                                        @if($sim_proj->area != "")
                                            {{$sim_proj->area}} Sq.fit
                                        @else
                                            N/A Sq.fit 

                                        @endif
                                    </span>
                                </li>

                                <li class="flex flex-wrap items-center pr-[25px] sm:pr-[5px] md:pr-[25px] border-r border-[#E0DEDE]">
                                    <svg class="mr-[5px]" width="14" height="10" viewBox="0 0 14 10" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.0002 4.18665V2.33331C13.0002 1.23331 12.1002 0.333313 11.0002 0.333313H8.3335C7.82016 0.333313 7.3535 0.533313 7.00016 0.853313C6.64683 0.533313 6.18016 0.333313 5.66683 0.333313H3.00016C1.90016 0.333313 1.00016 1.23331 1.00016 2.33331V4.18665C0.593496 4.55331 0.333496 5.07998 0.333496 5.66665V9.66665H1.66683V8.33331H12.3335V9.66665H13.6668V5.66665C13.6668 5.07998 13.4068 4.55331 13.0002 4.18665ZM8.3335 1.66665H11.0002C11.3668 1.66665 11.6668 1.96665 11.6668 2.33331V3.66665H7.66683V2.33331C7.66683 1.96665 7.96683 1.66665 8.3335 1.66665ZM2.3335 2.33331C2.3335 1.96665 2.6335 1.66665 3.00016 1.66665H5.66683C6.0335 1.66665 6.3335 1.96665 6.3335 2.33331V3.66665H2.3335V2.33331ZM1.66683 6.99998V5.66665C1.66683 5.29998 1.96683 4.99998 2.3335 4.99998H11.6668C12.0335 4.99998 12.3335 5.29998 12.3335 5.66665V6.99998H1.66683Z" />
                                    </svg>
                                    <span>
                                        @if($sim_proj->bedrooms != "")
                                            {{$sim_proj->bedrooms}}
                                        @else
                                            N/A 
                                        @endif
                                    </span>
                                </li>

                                <li class="flex flex-wrap items-center pr-[25px] sm:pr-[5px] md:pr-[25px] border-r border-[#E0DEDE]">
                                    <svg class="mr-[5px]" width="14" height="14" viewBox="0 0 14 14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.6875 7.65627H2.1875V2.7344C2.18699 2.54904 2.22326 2.36543 2.29419 2.19418C2.36512 2.02294 2.46932 1.86746 2.60075 1.73676L2.61168 1.72582C2.81765 1.52015 3.0821 1.38309 3.36889 1.33336C3.65568 1.28362 3.95083 1.32364 4.21403 1.44795C3.96546 1.86122 3.86215 2.34571 3.9205 2.82443C3.97885 3.30315 4.19552 3.74864 4.53608 4.0901L4.83552 4.38954L4.28436 4.94073L4.90304 5.55941L5.4542 5.00825L8.5082 1.95431L9.05937 1.40314L8.44066 0.78443L7.88946 1.3356L7.59002 1.03616C7.23151 0.678646 6.75892 0.458263 6.2546 0.413412C5.75029 0.368561 5.24622 0.502086 4.83025 0.790719C4.3916 0.513704 3.87178 0.394114 3.35619 0.451596C2.84059 0.509078 2.35987 0.740213 1.993 1.10703L1.98207 1.11797C1.76912 1.32975 1.6003 1.58165 1.48537 1.85911C1.37044 2.13657 1.31168 2.43407 1.3125 2.7344V7.65627H0.4375V8.53127H1.3125V9.37072C1.31248 9.44126 1.32386 9.51133 1.34619 9.57823L2.16016 12.02C2.20359 12.1508 2.28712 12.2645 2.39887 12.345C2.51062 12.4256 2.64491 12.4689 2.78266 12.4688H3.1354L2.81641 13.5625H3.72786L4.04688 12.4688H9.73711L10.0652 13.5625H10.9785L10.6504 12.4688H11.2172C11.355 12.4689 11.4893 12.4256 11.6011 12.3451C11.7129 12.2645 11.7964 12.1508 11.8398 12.02L12.6538 9.57823C12.6761 9.51133 12.6875 9.44126 12.6875 9.37072V8.53127H13.5625V7.65627H12.6875ZM5.15484 1.65486C5.3959 1.41433 5.72254 1.27924 6.06308 1.27924C6.40362 1.27924 6.73026 1.41433 6.97132 1.65486L7.2707 1.95431L5.45429 3.77072L5.15484 3.47134C4.91432 3.23027 4.77924 2.90364 4.77924 2.5631C4.77924 2.22256 4.91432 1.89593 5.15484 1.65486ZM11.8125 9.33518L11.0597 11.5938H2.94033L2.1875 9.33518V8.53127H11.8125V9.33518Z" />
                                    </svg>
                                    <span>
                                        @if($sim_proj->bathrooms != "")
                                            {{$sim_proj->bathrooms}}
                                        @else
                                            N/A 
                                        @endif
                                    </span>
                                </li>

                            </ul>

                            <ul class="absolute bottom-[3.7rem] min-w-full my-auto border-b border-solid" style="">
                                <li class="flex flex-wrap items-center justify-between">
                                    <span class="font-lora text-base text-primary leading-none font-bold" style="font-size:18px; margin-bottom: 0.3rem;">
                                        @if($sim_proj->price != "")
                                            Price: {{ number_format($sim_proj->price) }} AED
                                        @else
                                          Price: N/A
                                        @endif
                                    </span>

                                   <span class="absolute right-0 flex flex-wrap items-center">
                                        <button class="mr-[15px] hover:text-secondary" aria-label="svg" style="color:red; font-size:18px">
                                            <a href="tel:{{ $sim_proj->phone != '' ? $sim_proj->phone : getSettings('agent_number') }}"><i class="fa-solid fa-phone"></i></a>
                                        </button>
                                        <button class="mr-[15px] hover:text-secondary" aria-label="svg"  style="color:rgb(37, 211, 102); font-size:18px">
                                            <a href="{{ $sim_proj->phone != '' ? 'https://wa.me/'. $sim_proj->phone : 'https://wa.me/'.getSettings('agent_number') }}"><i class="fa-brands fa-whatsapp"></i></a>
                                        </button>
                                        <button class="mr-[15px] hover:text-secondary" aria-label="svg"  style="color:rgb(11, 44, 61); font-size:18px">
                                            <a href="mailto:{{ $sim_proj->email != '' ? $sim_proj->email : getSettings('website_email_1') }}"><i class="fa-solid fa-envelope"></i></a>
                                        </button>
                                        <button class="mr-[25px] hover:text-secondary" aria-label="svg"  style="color:black; font-size:18px">
                                            <a href="{{ $sim_proj->phone != '' ? 'https://wa.me/'. $sim_proj->phone : 'https://wa.me/'.getSettings('agent_number') }}"><i class="fas fa-share"></i></a>
                                        </button>
                                    </span>
                                </li>
                            </ul>
                            <div class="flex flex-1 flex-wrap absolute bottom-1 left-1">
                               @if($sim_proj->agent_image == '')
                            <img src="{{url('')}}/assets/images/team/images.jpg" class="flex flex-wrap flex-col " style="border-radius: 50%; width:50px; border-color: rgb(11,44,61); border: 2px solid;" alt="Avatar">
                            <p class="font-lora text-base text-primary leading-none font-bold place-self-center mx-1">
                                Fg Properties
                            </p>
                                @else
                            <img src="{{url('')}}/{{config('fgproperties.file_path').$sim_proj->agent_image}}" class="flex flex-wrap flex-col " style="border-radius: 50%; width:50px; height: 50px; border-color: rgb(11,44,61); border: 2px solid;" alt="Avatar">
                            <p class="font-lora text-base text-primary leading-none font-bold place-self-center mx-1">
                                {{ $sim_proj->agent_name }}
                            </p>
                            @endif
                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach    


                                    <!-- swiper-slide end-->
                                </div>
                                <!-- Add Pagination -->
                                <!-- <div class="swiper-pagination" style="margin-bottom: -12px;"></div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <div id="modal-email" class="relative z-10 hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
  <!--
    Background backdrop, show/hide based on modal state.

    Entering: "ease-out duration-300"
      From: "opacity-0"
      To: "opacity-100"
    Leaving: "ease-in duration-200"
      From: "opacity-100"
      To: "opacity-0"
  -->
  <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

  <div class="fixed inset-0 z-10 overflow-y-auto">
    <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
      <!--
        Modal panel, show/hide based on modal state.

        Entering: "ease-out duration-300"
          From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
          To: "opacity-100 translate-y-0 sm:scale-100"
        Leaving: "ease-in duration-200"
          From: "opacity-100 translate-y-0 sm:scale-100"
          To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
      -->
      <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                <form method="post" action="{{ route('contactagent.message') }}" >
         @csrf
        <div class="bg-[#F5F9F8] px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
          <div class="sm:flex sm:items-start">
            <div class="mx-auto flex h-50 w-50 flex-shrink-0 items-center justify-center rounded-full  sm:mx-0 sm:h-50 sm:w-50">
              <!-- Heroicon name: outline/exclamation-triangle -->
              <!-- <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 10.5v3.75m-9.303 3.376C1.83 19.126 2.914 21 4.645 21h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 4.88c-.866-1.501-3.032-1.501-3.898 0L2.697 17.626zM12 17.25h.007v.008H12v-.008z" />
              </svg> -->
              <div class=" border border-primary border-opacity-60 p-1 rounded-md">
                <img class="h-50 w-50 max-h-50 max-w-50 rounded-md" src="{{config('fgproperties.file_path').$projects->featured_image}}" width="150" />
                  <ul class="min-w-full my-auto  items-center justify-between text-[12px] mt-[10px] my-auto">
                                
                    <li class="flex flex-wrap items-center pr-[25px] sm:pr-[5px] md:pr-[25px] ">
                      <svg class="mr-[5px]" width="14" height="14" viewBox="0 0 14 14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.8125 9.68709V4.31285C12.111 4.23634 12.384 4.0822 12.6037 3.86607C12.8234 3.64994 12.982 3.37951 13.0634 3.08226C13.1448 2.78501 13.1461 2.47151 13.0671 2.1736C12.9882 1.87569 12.8318 1.60398 12.6139 1.38605C12.396 1.16812 12.1243 1.01174 11.8263 0.932792C11.5284 0.85384 11.2149 0.855126 10.9177 0.936521C10.6204 1.01792 10.35 1.17652 10.1339 1.39623C9.91774 1.61593 9.7636 1.88892 9.68709 2.18747H4.31285C4.23634 1.88892 4.0822 1.61593 3.86607 1.39623C3.64994 1.17652 3.37951 1.01792 3.08226 0.936521C2.78501 0.855126 2.47151 0.85384 2.1736 0.932792C1.87569 1.01174 1.60398 1.16812 1.38605 1.38605C1.16812 1.60398 1.01174 1.87569 0.932792 2.1736C0.85384 2.47151 0.855126 2.78501 0.936521 3.08226C1.01792 3.37951 1.17652 3.64994 1.39623 3.86607C1.61593 4.0822 1.88892 4.23634 2.18747 4.31285V9.68709C1.88892 9.7636 1.61593 9.91774 1.39623 10.1339C1.17652 10.35 1.01792 10.6204 0.936521 10.9177C0.855126 11.2149 0.85384 11.5284 0.932792 11.8263C1.01174 12.1243 1.16812 12.396 1.38605 12.6139C1.60398 12.8318 1.87569 12.9882 2.1736 13.0671C2.47151 13.1461 2.78501 13.1448 3.08226 13.0634C3.37951 12.982 3.64994 12.8234 3.86607 12.6037C4.0822 12.384 4.23634 12.111 4.31285 11.8125H9.68709C9.7636 12.111 9.91774 12.384 10.1339 12.6037C10.35 12.8234 10.6204 12.982 10.9177 13.0634C11.2149 13.1448 11.5284 13.1461 11.8263 13.0671C12.1243 12.9882 12.396 12.8318 12.6139 12.6139C12.8318 12.396 12.9882 12.1243 13.0671 11.8263C13.1461 11.5284 13.1448 11.2149 13.0634 10.9177C12.982 10.6204 12.8234 10.35 12.6037 10.1339C12.384 9.91774 12.111 9.7636 11.8125 9.68709ZM11.375 1.74997C11.548 1.74997 11.7172 1.80129 11.8611 1.89744C12.005 1.99358 12.1171 2.13024 12.1834 2.29012C12.2496 2.45001 12.2669 2.62594 12.2332 2.79568C12.1994 2.96541 12.1161 3.12132 11.9937 3.24369C11.8713 3.36606 11.7154 3.4494 11.5457 3.48316C11.3759 3.51692 11.2 3.49959 11.0401 3.43337C10.8802 3.36714 10.7436 3.25499 10.6474 3.11109C10.5513 2.9672 10.5 2.79803 10.5 2.62497C10.5002 2.39298 10.5925 2.17055 10.7565 2.00651C10.9206 1.84246 11.143 1.7502 11.375 1.74997ZM1.74997 2.62497C1.74997 2.45191 1.80129 2.28274 1.89744 2.13885C1.99358 1.99495 2.13024 1.8828 2.29012 1.81658C2.45001 1.75035 2.62594 1.73302 2.79568 1.76678C2.96541 1.80055 3.12132 1.88388 3.24369 2.00625C3.36606 2.12862 3.4494 2.28453 3.48316 2.45427C3.51692 2.624 3.49959 2.79993 3.43337 2.95982C3.36714 3.1197 3.25499 3.25636 3.11109 3.35251C2.9672 3.44865 2.79803 3.49997 2.62497 3.49997C2.39298 3.49974 2.17055 3.40748 2.00651 3.24343C1.84246 3.07939 1.7502 2.85696 1.74997 2.62497ZM2.62497 12.25C2.45191 12.25 2.28274 12.1987 2.13885 12.1025C1.99495 12.0064 1.8828 11.8697 1.81658 11.7098C1.75035 11.5499 1.73302 11.374 1.76678 11.2043C1.80055 11.0345 1.88388 10.8786 2.00625 10.7563C2.12862 10.6339 2.28453 10.5505 2.45427 10.5168C2.624 10.483 2.79993 10.5003 2.95982 10.5666C3.1197 10.6328 3.25636 10.745 3.35251 10.8888C3.44865 11.0327 3.49997 11.2019 3.49997 11.375C3.49974 11.607 3.40748 11.8294 3.24343 11.9934C3.07939 12.1575 2.85696 12.2497 2.62497 12.25ZM9.68709 10.9375H4.31285C4.23448 10.6367 4.07729 10.3622 3.8575 10.1424C3.63771 9.92265 3.36326 9.76546 3.06247 9.68709V4.31285C3.36324 4.23444 3.63766 4.07724 3.85745 3.85745C4.07724 3.63766 4.23444 3.36324 4.31285 3.06247H9.68709C9.76546 3.36326 9.92265 3.63771 10.1424 3.8575C10.3622 4.07729 10.6367 4.23448 10.9375 4.31285V9.68709C10.6367 9.76542 10.3622 9.92259 10.1424 10.1424C9.92259 10.3622 9.76542 10.6367 9.68709 10.9375ZM11.375 12.25C11.2019 12.25 11.0327 12.1987 10.8888 12.1025C10.745 12.0064 10.6328 11.8697 10.5666 11.7098C10.5003 11.5499 10.483 11.374 10.5168 11.2043C10.5505 11.0345 10.6339 10.8786 10.7563 10.7563C10.8786 10.6339 11.0345 10.5505 11.2043 10.5168C11.374 10.483 11.5499 10.5003 11.7098 10.5666C11.8697 10.6328 12.0064 10.745 12.1025 10.8888C12.1987 11.0327 12.25 11.2019 12.25 11.375C12.2496 11.6069 12.1573 11.8293 11.9933 11.9933C11.8293 12.1573 11.6069 12.2496 11.375 12.25Z"/>
                      </svg>
                        <span> 
                        @if($projects->area != "")
                            {{$projects->area}} Sq.fit
                        @else
                            N/A Sq.fit 
                        @endif
                        </span>
                      </li>

                      <li class="flex flex-wrap items-center  ">
                        <svg class="mr-[5px]" width="14" height="10" viewBox="0 0 14 10" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path d="M13.0002 4.18665V2.33331C13.0002 1.23331 12.1002 0.333313 11.0002 0.333313H8.3335C7.82016 0.333313 7.3535 0.533313 7.00016 0.853313C6.64683 0.533313 6.18016 0.333313 5.66683 0.333313H3.00016C1.90016 0.333313 1.00016 1.23331 1.00016 2.33331V4.18665C0.593496 4.55331 0.333496 5.07998 0.333496 5.66665V9.66665H1.66683V8.33331H12.3335V9.66665H13.6668V5.66665C13.6668 5.07998 13.4068 4.55331 13.0002 4.18665ZM8.3335 1.66665H11.0002C11.3668 1.66665 11.6668 1.96665 11.6668 2.33331V3.66665H7.66683V2.33331C7.66683 1.96665 7.96683 1.66665 8.3335 1.66665ZM2.3335 2.33331C2.3335 1.96665 2.6335 1.66665 3.00016 1.66665H5.66683C6.0335 1.66665 6.3335 1.96665 6.3335 2.33331V3.66665H2.3335V2.33331ZM1.66683 6.99998V5.66665C1.66683 5.29998 1.96683 4.99998 2.3335 4.99998H11.6668C12.0335 4.99998 12.3335 5.29998 12.3335 5.66665V6.99998H1.66683Z" />
                        </svg>
                        <span>
                        @if($projects->bedrooms != "")
                          {{$projects->bedrooms}}
                        @else
                          N/A 
                        @endif
                        </span>
                      </li>

                      <li class="flex flex-wrap items-center ">
                        <svg class="mr-[5px]" width="14" height="14" viewBox="0 0 14 14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path d="M12.6875 7.65627H2.1875V2.7344C2.18699 2.54904 2.22326 2.36543 2.29419 2.19418C2.36512 2.02294 2.46932 1.86746 2.60075 1.73676L2.61168 1.72582C2.81765 1.52015 3.0821 1.38309 3.36889 1.33336C3.65568 1.28362 3.95083 1.32364 4.21403 1.44795C3.96546 1.86122 3.86215 2.34571 3.9205 2.82443C3.97885 3.30315 4.19552 3.74864 4.53608 4.0901L4.83552 4.38954L4.28436 4.94073L4.90304 5.55941L5.4542 5.00825L8.5082 1.95431L9.05937 1.40314L8.44066 0.78443L7.88946 1.3356L7.59002 1.03616C7.23151 0.678646 6.75892 0.458263 6.2546 0.413412C5.75029 0.368561 5.24622 0.502086 4.83025 0.790719C4.3916 0.513704 3.87178 0.394114 3.35619 0.451596C2.84059 0.509078 2.35987 0.740213 1.993 1.10703L1.98207 1.11797C1.76912 1.32975 1.6003 1.58165 1.48537 1.85911C1.37044 2.13657 1.31168 2.43407 1.3125 2.7344V7.65627H0.4375V8.53127H1.3125V9.37072C1.31248 9.44126 1.32386 9.51133 1.34619 9.57823L2.16016 12.02C2.20359 12.1508 2.28712 12.2645 2.39887 12.345C2.51062 12.4256 2.64491 12.4689 2.78266 12.4688H3.1354L2.81641 13.5625H3.72786L4.04688 12.4688H9.73711L10.0652 13.5625H10.9785L10.6504 12.4688H11.2172C11.355 12.4689 11.4893 12.4256 11.6011 12.3451C11.7129 12.2645 11.7964 12.1508 11.8398 12.02L12.6538 9.57823C12.6761 9.51133 12.6875 9.44126 12.6875 9.37072V8.53127H13.5625V7.65627H12.6875ZM5.15484 1.65486C5.3959 1.41433 5.72254 1.27924 6.06308 1.27924C6.40362 1.27924 6.73026 1.41433 6.97132 1.65486L7.2707 1.95431L5.45429 3.77072L5.15484 3.47134C4.91432 3.23027 4.77924 2.90364 4.77924 2.5631C4.77924 2.22256 4.91432 1.89593 5.15484 1.65486ZM11.8125 9.33518L11.0597 11.5938H2.94033L2.1875 9.33518V8.53127H11.8125V9.33518Z" />
                        </svg>
                      <span>
                      @if($projects->bathrooms != "")
                        {{$projects->bathrooms}}
                      @else
                        N/A 
                      @endif
                      </span>
                    </li>

                </ul>
              </div>
            </div>
            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
              <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-title">{!! $projects->title !!}</h3>
              <div class="mt-2">
                    <input type="text" placeholder="Title" name="ad_name" value="{!! $projects->title !!}" hidden required>
                    <input type="text" placeholder="Project Type" name="ad_type" value="Rent" hidden  required>

                    <input class="font-light w-full leading-[1.15] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] my-1" type="text" placeholder="Full Name" name="name" required>
                    <input class="font-light w-full leading-[1.15] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] my-1" type="text" placeholder="Email" name="email" required>
                    <input class="font-light w-full leading-[1.15] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] my-1" type="text" placeholder="Phone No." name="phone" required>
                    <textarea class="font-light w-full leading-[1.15] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] my-1 resize-none" type="text" placeholder="Message" name="message" required></textarea>   

                    <input class="font-light w-full leading-[1.15] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] my-1" type="text" name="ad_id" placeholder="Your Name" value="{!! $projects->id !!}" hidden  required>             
                    
              </div>
            </div>
          </div>
        </div>
        <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
          <button class="inline-flex w-full justify-center rounded-md border border-transparent bg-[#405463] px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-white hover:text-[#405463] hover:drop-shadow-md hover:border-[#405463] sm:ml-3 sm:w-auto sm:text-sm send">Send Email</button>
          <button type="button" class="mt-3 inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-base font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm cancel">Cancel</button>
        </div>
                </form>
      </div>
    </div>
  </div>
</div>
        <!-- Explore Cities End-->
    
@endsection

@section('bottom-mid-scripts')

@endsection

@section('bottom-bot-scripts')

    <script src="{{url('')}}/assets/js/plugins/jquery.waypoints.js"></script>
    <script src="{{url('')}}/assets/js/plugins/jquery.counterup.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript">
        $('.but').on('click', function(){
            $('#modal-email').css('display', 'block')
        })

        $('.cancel').on('click', function(){
            $('#modal-email').css('display', 'none')
        })

    </script>
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
  <script type="text/javascript">
    @foreach($dates as $date)
    $('.calendar{{$loop->iteration}}').on('click', function() {
        // $('.calendar{{$loop->iteration}}').addClass('-translate-y-[5px]');
        // $('.calendar1{{$loop->iteration}}').css();
        // $('.dated').val($('.datee{{$loop->iteration}}').val());
        $('.dated').val('{{$date->format('d-m-y')}}');

        })
    @endforeach

    
                                                
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
@endsection
