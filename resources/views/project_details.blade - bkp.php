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
    #picarrow{
        visibility: hidden;
        width: 0px;
        height: 0px;
    }
    .n1{
        border-radius: 8px ;
    }
    .n2{
        border-radius: 8px ;
    }
    .n3{
        border-radius: 8px ;
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
                            @php
                                if ($projects->images !="") {
                                $images = $projects->images;
                                $img3 = explode(',', $images);
                                foreach($img3 as $images){
                                    if($images != '')
                                    {
                                @endphp
                          
                            <div class="swiper-slide md:h-[30rem]">
                              <img src="{{config('fgproperties.file_path').$images}}" class="h-[30rem]" style="width:100%;" />
                            </div>
                          @php 
                          }
                                }
                            } 
                                @endphp
                          </div>
                          <div class="swiper-button-next"></div>
                          <div class="swiper-button-prev"></div>
                        </div>
                        <div thumbsSlider="" class="swiper mySwiper mt-[0.5rem] lg:mt-[1rem]">
                          <div class="swiper-wrapper">

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
                                          @endif
                                         @endforeach

 
                                         <i class="fa-regular fa-building"></i></p></a>

                                    </div>
                                    <div class="float-right">
                                        <a href="" class="">
                                            <p class="font-lora leading-tight text-[14px] md:text-[14px] lg:text-[14px] text-primary mb-[5px] font-medium">
                                             Ref No.  {{ $projects->ref_id }}
                                            </p>
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
                                
                                   Starting Price: <span class="font-lora leading-tight text-[35px] md:text-[35px] lg:text-[35px] text-primary mb-[5px] font-bold "><b>AED {{ number_format($projects->price) }}</b></span>
                                @else
                                          
                                
                                
                            </h4>
                            @endif
                            <hr>

                            
                            <h4 class="font-lora leading-tight text-[20px] md:text-[20px] lg:text-[20px] text-primary mb-[5px] mt-[1rem] font-medium">About This Listing</h4>
                            <p class="mt-[1rem]">
                                {!! $projects->description !!}
                          </p>
                        </div>                        

                        <h4 class="font-lora text-primary text-[20px] leading-[1.277] sm:text-[20px] capitalize mt-[50px] mb-[40px] font-medium mt-[-1rem]">
                            Amenities and Advantages<span class="text-secondary">.</span>
                        </h4>

                        <ul class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 px-[15px] mx-[-15px] mt-[40px] text-[13px]">
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

                        <div class="grid grid-cols-1 py-[0px]">
                            <div class="h-[305px] min-w-full  rounded-[6px] overflow-hidden xl:ml-[40px] my-[0px]" style="margin-left:0px ;">

                                @if($projects->url != "")
                                   <iframe class="w-full h-full" src="https://www.google.com/maps?q= {!! $projects->url !!}* &output=embed" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                @else
                                   <iframe class="w-full h-full" src="https://www.google.com/maps?q= Uae* &output=embed" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                @endif
                            </div>
                        </div>
                        @if( $projects->status != "Rent" )
                    <div class="rounded-[20px] bg-[#F5F9F8] border-solid border-[1px] pt-[1rem] pb-[1rem] pl-[1rem] pr-[1rem] mt-4">
                        <div class="grid grid-cols-12 ">
                            <div class="col-span-12 flex flex-wrap flex-col md:flex-row md:items-center justify-between ">
                                <div class="mb-0 xl:mb-0">
                                    <h2 class="font-lora text-primary text-[22px] sm:text-[22px] capitalize font-medium">
                                        <b>Mortgage Calculator</b><span class="text-secondary"></span>
                                    </h2>

                                </div>
                            </div>
                        </div>
                        <hr>
                        <br>
                            
                            <div class="flex flex-wrap grid grid-cols-2 transition-all pt-[20px] pl-[1rem] pr-[1rem] rounded-[8px]  min-w-full mt-[-1rem]">
                                <div class="flex-1 grid grid-cols-1 content-evenly big-screens">
                                    <div class="flex-1 min-w-fit mr-6">
                                        <label><b>Property Price</b></label>
                                        <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md border border-[2px] leading-[1.75] pl-[20px] pr-[20px] py-[10px]" value="{{ $projects->price }}" required readonly>
                                        <!-- <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-r-0 border-primary border-opacity-60 rounded-l-[8px] pl-[20px]  py-[10px]  bg-white" type="text" name="name" placeholder="Proprty Value" value="{{ $projects->price }}" required readonly> -->
                                    </div>
                                    @php
                                        $ab= $projects->price;
                                        $divide= ($ab / 4);
                                     @endphp
                                    <div class="flex-1 min-w-fit mr-6">
                                        <label><b>Down Payment</b></label>
                                        <div style="display: -ms-flexbox; display: flex; ">
                                            <!-- <img src="{{url('')}}/assets/images/icon/arrow.jpg" class="w-[50px] h-[50px]" alt="search icon"> -->
                                            <!-- <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-r-0 border-l-0 border-primary border-opacity-60  pl-[20px] pr-[20px] py-[10px]  bg-white" type="text" name="name" placeholder="Down payment" value="{{ $divide }}"  required readonly> -->
                                            <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md border border-[2px] leading-[1.75] pl-[20px] pr-[20px] py-[10px]" value="{{ $divide }}"  required readonly>
                                        </div>
                                    </div>
                                        
                                    <div class="flex-1 min-w-fit mr-6">
                                        <label><b>Loan Period</b></label>
                                        <div style="display: -ms-flexbox; display: flex; ">
                                            <!-- <img src="{{url('')}}/assets/images/icon/arrow.jpg" class="w-[50px] h-[50px]" alt="search icon"> -->
                                            <!-- <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-r-0 border-l-0 border-primary border-opacity-60  pl-[20px] pr-[20px] py-[10px]  bg-white loan-period-input" type="number" name="period" placeholder="Loan Period" value="16" min="1" required> -->
                                            <input type="number" name="first_name" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md border border-[2px] leading-[1.75] pl-[20px] pr-[20px] py-[10px] loan-period-input" min="1" max="30" value="16">
                                        </div>
                                    </div>                                        

                                    <div class="flex-1 min-w-fit mr-6">
                                        <label><b>Interest Rate%</b></label>
                                        <div style="display: -ms-flexbox; display: flex; ">
                                            <!-- <img src="{{url('')}}/assets/images/icon/arrow.jpg" class="w-[50px] h-[50px]" alt="search icon"> -->
                                            <!-- <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-l-0 border-primary border-opacity-60 rounded-r-[8px] pl-[20px] pr-[20px] py-[10px]  bg-white interest-rate-input" type="number" name="name" placeholder="Interest Rate%" value="4" min="1" required> -->
                                            <input type="number" name="first_name" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md border border-[2px] leading-[1.75] pl-[20px] pr-[20px] py-[10px] interest-rate-input" min="2" max="15" value="4">
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="flex-1 grid grid-rows-4 content-evenly small-screens">
                                    <div class="flex-1 min-w-fit mr-6">
                                        <label><b>Property Price</b></label>
                                        <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md border border-[2px] leading-[1.75] pl-[20px] pr-[20px] py-[10px]" value="{{ $projects->price }}" required readonly>
                                        
                                    </div>
                                    @php
                                        $ab= $projects->price;
                                        $divide= ($ab / 4);
                                     @endphp
                                    <div class="flex-1 min-w-fit mr-6">
                                        <label><b>Down Payment</b></label>
                                        <div style="display: -ms-flexbox; display: flex; ">
                                        
                                        
                                            <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md border border-[2px] leading-[1.75] pl-[20px] pr-[20px] py-[10px]" value="{{ $divide }}"  required readonly>
                                        </div>
                                    </div>
                                        
                                    <div class="flex-1 min-w-fit mr-6">
                                        <label><b>Loan Period</b></label>
                                        <div style="display: -ms-flexbox; display: flex; ">
                                        
                                        
                                            <input type="number" name="first_name" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md border border-[2px] leading-[1.75] pl-[20px] pr-[20px] py-[10px] loan-period-input" min="1" value="16">
                                        </div>
                                    </div>                                        

                                    <div class="flex-1 min-w-fit mr-6">
                                        <label><b>Interest Rate%</b></label>
                                        <div style="display: -ms-flexbox; display: flex; ">
                                        
                                        
                                            <input type="number" name="first_name" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md border border-[2px] leading-[1.75] pl-[20px] pr-[20px] py-[10px] interest-rate-input" min="1" value="4">
                                        </div>
                                    </div>
                                </div> -->
                                <div class="w-full p-3">
                                    <div class="flex inline-grid grid-cols-1   mb-[25px]">    
                                        <span class="font-lora leading-none text-[24px] sm:text-[24px] text-primary mb-[10px] mt-[1rem]  ">Monthly Installments : </span>
                                        <!-- <span class="text-secondary ml-5 text-[#405463] text-[24px] sm:text-[24px] place-self-end"><b class="monthly-installment"> <b>AED {{ number_format($projects->price) }}</b></span> -->
                                        <span class="text-secondary text-[#405463] text-[44px] sm:text-[44px] place-self-start"><b class="monthly-installment">AED {{ number_format($projects->price) }}</b></span>
                                        
                                    </div>
                                    <div class="inline-grid grid-cols-2 w-full border-b">
                                        <span class="font-lora leading-none text-[18px] sm:text-[18px] text-primary mb-[10px] mt-[1rem] place-self-start">Total Loan Amount 
                                            <!-- <p class="font-lora text-primary text-[18px] mt-2">per Month Based on <b class="loan-period">16</b> Year Fixed</p> -->
                                        </span>
                                        <span class="text-secondary mt-2 text-[18px] sm:text-[18px]  text-[#405463] place-self-end"><b class="loan-amount">{{ $projects->price - $divide}} AED </b></span>
                                    </div>

                                    <div class="inline-grid grid-cols-2 w-full border-b">

                                        <span class="font-lora leading-none text-[18px] sm:text-[18px] text-primary mb-[10px] mt-[1rem] place-self-start">Loan Period </span>
                                        <span class="text-secondary mt-2 text-[18px] sm:text-[18px] text-[#405463] place-self-end"><b class="loan-period">16 Years</b></span>
                                    </div>

                                    <div class="inline-grid grid-cols-2 w-full border-b">

                                        <span class="font-lora leading-none text-[18px] sm:text-[18px] text-primary mb-[10px] mt-[1rem] place-self-start">Property Price </span>
                                        <span class="text-secondary mt-2 text-[18px] sm:text-[18px] text-[#405463] place-self-end"><b>AED {{ number_format($projects->price) }}</b></span>
                                    </div>

                                    <div class="inline-grid grid-cols-1 w-full">

                                        <button type="button" class="text-secondary px-3 py-2 mt-6 text-[18px] sm:text-[18px] text-white bg-[#405463] rounded rounded-md place-self-stretch hover:bg-white hover:text-[#405463] hover:drop-shadow-md hover:border-[#405463]" onclick="openModalapply()"><b>Get Approved</b></button>
                                    </div>

                                </div>
                            </div>

                            


                           <!--  <div class="grid grid-cols-2 grid-rows-8 gap-x-3 mt-4">
                                    
                                <div class="flex flex-wrap bg-[#F5F9F8] transition-all pt-[1rem] pl-[4rem] pr-[4rem] col-start-1  max-w-[20rem] text-center ml-10 border-r-[2px]">

                                        <h4 class="font-lora leading-none text-[18px] sm:text-[18px] text-primary mb-[10px] mt-[1rem] font-semibold">Estimated Payment 
                                                <p class="text-secondary mt-2 text-[22px] sm:text-[22px] monthly-installment"><b>AED </b></p>
                                                <p class="font-lora text-primary text-[18px] mt-2 mb-[3.5rem] font-semibold">per Month Based on <b class="loan-period">16</b> Year Fixed</p>
                                            </h4>
                                </div>

                                <div class="flex flex-wrap  bg-[#F5F9F8] transition-all pt-[2rem] pl-[1rem] pr-[1rem] rounded-[8px] rounded-tr-[0px] rounded-br-[0px] row-start-1 row-end-5 min-w-[200px]  col-start-2">
                                    <div class="flex-1">
                                        <h4 class="font-lora leading-none text-[18px] sm:text-[18px] text-primary mb-[10px] ">No of Payments :
                                            <span class="text-secondary ml-5 "><b class="no-of-payment">192<hr></b></span>
                                        </h4>


                                        <h4 class="font-lora leading-none text-[18px] sm:text-[18px] text-primary mb-[10px] mt-8">Monthly Installments :
                                            <span class="text-secondary ml-5 "><b class="monthly-installment">AED <hr></b></span>
                                        </h4>


                                        <h4 class="font-lora leading-none text-[18px] sm:text-[18px] text-primary mb-[10px] mt-8">Property Price :
                                            <span class="text-secondary ml-5"><b>AED {{ number_format($projects->price) }}<hr></b></span>
                                        </h4>

                                    </div>
                                </div>
                            </div> -->
                    </div>
                        @endif

                        <div class="grid grid-cols-12 mt-[70px]">
                            <div class="col-span-12 flex flex-wrap flex-col md:flex-row md:items-center justify-between mb-[50px] lg:mb-[70px]">
                                <div class="mb-5 xl:mb-0">
                                    <h2 class="font-lora text-primary text-[22px] sm:text-[22px] capitalize font-medium">
                                        Nearby Places<span class="text-secondary">.</span></h2>
                                </div>
                                <ul class="all-properties flex flex-wrap lg:pt-[10px]">
                                    <li data-tab="ForBuy" class="mr-[30px] md:mr-[35px] mb-4 lg:mb-0 leading-none active"><button class="leading-none capitalize text-primary hover:text-secondary transition-all text-[14px] ease-out">Health
                                            & Medical</button></li>
                                    <li data-tab="ForSale" class="mr-[30px] md:mr-[35px] mb-4 lg:mb-0 leading-none">
                                        <button class="leading-none capitalize text-primary hover:text-secondary transition-all text-[14px] ease-out">Shopping
                                            mall</button>
                                    </li>
                                    <li data-tab="ForRent" class="mr-[30px] md:mr-[35px] mb-4 lg:mb-0 leading-none">
                                        <button class="leading-none capitalize text-primary hover:text-secondary transition-all text-[14px] ease-out">School
                                            & College</button>
                                    </li>
                                    <li data-tab="co-living" class="md:mr-[0px] mb-4 lg:mb-0 leading-none"><button class="leading-none capitalize text-primary hover:text-secondary transition-all text-[14px] ease-out">Gym</button>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-span-12 mb-[80px]">

                                <div id="ForBuy" class="properties-tab-content active">
                                    <ul>

                                        <li class="flex flex-wrap items-center justify-between pb-[25px] mb-[25px] border-b border-[#016450]">
                                            <div class="flex flex-wrap mb-[20px] sm:mb-[0px] md:mb-[20px]">
                                                <img class="self-start mr-[40px]" src="{{url('')}}/assets/images/icon/medist.png" loading="lazy" width="54" height="68" alt="logo">
                                                <div class="flex-1">
                                                    <h4 class="text-primary font-lora text-[16px] leading-none mb-[5px]">
                                                        Mediset Hospital Ltd.</h4>
                                                    <span class="text-[13px] leading-none">(0.5 km distance)</span>
                                                </div>
                                            </div>


                                            <div class="flex flex-wrap items-center">
                                                <span class="mr-[4px]"><svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.1887 4.51714L9.22154 3.94058L7.4481 0.345269C7.39966 0.246832 7.31997 0.167144 7.22154 0.118707C6.97466 -0.00316805 6.67466 0.0983945 6.55122 0.345269L4.77779 3.94058L0.810601 4.51714C0.701226 4.53277 0.601226 4.58433 0.524663 4.66246C0.432103 4.75759 0.381099 4.88558 0.382856 5.0183C0.384614 5.15103 0.438991 5.27762 0.534038 5.37027L3.40435 8.16871L2.72623 12.1203C2.71032 12.2122 2.72049 12.3067 2.75559 12.3932C2.79068 12.4796 2.84929 12.5545 2.92477 12.6093C3.00025 12.6641 3.08958 12.6967 3.18263 12.7033C3.27568 12.71 3.36873 12.6904 3.45123 12.6468L6.99966 10.7812L10.5481 12.6468C10.645 12.6984 10.7575 12.7156 10.8653 12.6968C11.1372 12.65 11.32 12.3921 11.2731 12.1203L10.595 8.16871L13.4653 5.37027C13.5434 5.29371 13.595 5.19371 13.6106 5.08433C13.6528 4.81089 13.4622 4.55777 13.1887 4.51714Z"
                                                            fill="#FF6500" />
                                                    </svg></span>
                                                <span class="mr-[4px]"><svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.1887 4.51714L9.22154 3.94058L7.4481 0.345269C7.39966 0.246832 7.31997 0.167144 7.22154 0.118707C6.97466 -0.00316805 6.67466 0.0983945 6.55122 0.345269L4.77779 3.94058L0.810601 4.51714C0.701226 4.53277 0.601226 4.58433 0.524663 4.66246C0.432103 4.75759 0.381099 4.88558 0.382856 5.0183C0.384614 5.15103 0.438991 5.27762 0.534038 5.37027L3.40435 8.16871L2.72623 12.1203C2.71032 12.2122 2.72049 12.3067 2.75559 12.3932C2.79068 12.4796 2.84929 12.5545 2.92477 12.6093C3.00025 12.6641 3.08958 12.6967 3.18263 12.7033C3.27568 12.71 3.36873 12.6904 3.45123 12.6468L6.99966 10.7812L10.5481 12.6468C10.645 12.6984 10.7575 12.7156 10.8653 12.6968C11.1372 12.65 11.32 12.3921 11.2731 12.1203L10.595 8.16871L13.4653 5.37027C13.5434 5.29371 13.595 5.19371 13.6106 5.08433C13.6528 4.81089 13.4622 4.55777 13.1887 4.51714Z"
                                                            fill="#FF6500" />
                                                    </svg></span>
                                                <span class="mr-[4px]"><svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.1887 4.51714L9.22154 3.94058L7.4481 0.345269C7.39966 0.246832 7.31997 0.167144 7.22154 0.118707C6.97466 -0.00316805 6.67466 0.0983945 6.55122 0.345269L4.77779 3.94058L0.810601 4.51714C0.701226 4.53277 0.601226 4.58433 0.524663 4.66246C0.432103 4.75759 0.381099 4.88558 0.382856 5.0183C0.384614 5.15103 0.438991 5.27762 0.534038 5.37027L3.40435 8.16871L2.72623 12.1203C2.71032 12.2122 2.72049 12.3067 2.75559 12.3932C2.79068 12.4796 2.84929 12.5545 2.92477 12.6093C3.00025 12.6641 3.08958 12.6967 3.18263 12.7033C3.27568 12.71 3.36873 12.6904 3.45123 12.6468L6.99966 10.7812L10.5481 12.6468C10.645 12.6984 10.7575 12.7156 10.8653 12.6968C11.1372 12.65 11.32 12.3921 11.2731 12.1203L10.595 8.16871L13.4653 5.37027C13.5434 5.29371 13.595 5.19371 13.6106 5.08433C13.6528 4.81089 13.4622 4.55777 13.1887 4.51714Z"
                                                            fill="#FF6500" />
                                                    </svg></span>
                                                <span class="mr-[4px]"><svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.1887 4.51714L9.22154 3.94058L7.4481 0.345269C7.39966 0.246832 7.31997 0.167144 7.22154 0.118707C6.97466 -0.00316805 6.67466 0.0983945 6.55122 0.345269L4.77779 3.94058L0.810601 4.51714C0.701226 4.53277 0.601226 4.58433 0.524663 4.66246C0.432103 4.75759 0.381099 4.88558 0.382856 5.0183C0.384614 5.15103 0.438991 5.27762 0.534038 5.37027L3.40435 8.16871L2.72623 12.1203C2.71032 12.2122 2.72049 12.3067 2.75559 12.3932C2.79068 12.4796 2.84929 12.5545 2.92477 12.6093C3.00025 12.6641 3.08958 12.6967 3.18263 12.7033C3.27568 12.71 3.36873 12.6904 3.45123 12.6468L6.99966 10.7812L10.5481 12.6468C10.645 12.6984 10.7575 12.7156 10.8653 12.6968C11.1372 12.65 11.32 12.3921 11.2731 12.1203L10.595 8.16871L13.4653 5.37027C13.5434 5.29371 13.595 5.19371 13.6106 5.08433C13.6528 4.81089 13.4622 4.55777 13.1887 4.51714Z"
                                                            fill="#FF6500" />
                                                    </svg></span>
                                                <span class="mr-[4px]"><svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.1887 4.51714L9.22154 3.94058L7.4481 0.345269C7.39966 0.246832 7.31997 0.167144 7.22154 0.118707C6.97466 -0.00316805 6.67466 0.0983945 6.55122 0.345269L4.77779 3.94058L0.810601 4.51714C0.701226 4.53277 0.601226 4.58433 0.524663 4.66246C0.432103 4.75759 0.381099 4.88558 0.382856 5.0183C0.384614 5.15103 0.438991 5.27762 0.534038 5.37027L3.40435 8.16871L2.72623 12.1203C2.71032 12.2122 2.72049 12.3067 2.75559 12.3932C2.79068 12.4796 2.84929 12.5545 2.92477 12.6093C3.00025 12.6641 3.08958 12.6967 3.18263 12.7033C3.27568 12.71 3.36873 12.6904 3.45123 12.6468L6.99966 10.7812L10.5481 12.6468C10.645 12.6984 10.7575 12.7156 10.8653 12.6968C11.1372 12.65 11.32 12.3921 11.2731 12.1203L10.595 8.16871L13.4653 5.37027C13.5434 5.29371 13.595 5.19371 13.6106 5.08433C13.6528 4.81089 13.4622 4.55777 13.1887 4.51714Z"
                                                            fill="#FF6500" />
                                                    </svg></span>
                                                <span class="ml-[20px] text-sm">(320 Reviews)</span>
                                            </div>
                                        </li>

                                        <li class="flex flex-wrap items-center justify-between pb-[25px] mb-[25px] border-b border-[#016450]">
                                            <div class="flex flex-wrap mb-[20px] sm:mb-[0px] md:mb-[20px] lg:mb-[0px]">
                                                <img class="self-start mr-[40px]" src="{{url('')}}/assets/images/icon/healthcare.png" loading="lazy" width="63" height="68" alt="logo">
                                                <div class="flex-1">
                                                    <h4 class="text-primary font-lora text-[16px] leading-none mb-[5px]">
                                                        Mediset Hospital Ltd.</h4>
                                                    <span class="text-[13px] leading-none">(0.5 km distance)</span>
                                                </div>
                                            </div>


                                            <div class="flex flex-wrap items-center">
                                                <span class="mr-[4px]"><svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.1887 4.51714L9.22154 3.94058L7.4481 0.345269C7.39966 0.246832 7.31997 0.167144 7.22154 0.118707C6.97466 -0.00316805 6.67466 0.0983945 6.55122 0.345269L4.77779 3.94058L0.810601 4.51714C0.701226 4.53277 0.601226 4.58433 0.524663 4.66246C0.432103 4.75759 0.381099 4.88558 0.382856 5.0183C0.384614 5.15103 0.438991 5.27762 0.534038 5.37027L3.40435 8.16871L2.72623 12.1203C2.71032 12.2122 2.72049 12.3067 2.75559 12.3932C2.79068 12.4796 2.84929 12.5545 2.92477 12.6093C3.00025 12.6641 3.08958 12.6967 3.18263 12.7033C3.27568 12.71 3.36873 12.6904 3.45123 12.6468L6.99966 10.7812L10.5481 12.6468C10.645 12.6984 10.7575 12.7156 10.8653 12.6968C11.1372 12.65 11.32 12.3921 11.2731 12.1203L10.595 8.16871L13.4653 5.37027C13.5434 5.29371 13.595 5.19371 13.6106 5.08433C13.6528 4.81089 13.4622 4.55777 13.1887 4.51714Z"
                                                            fill="#FF6500" />
                                                    </svg></span>
                                                <span class="mr-[4px]"><svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.1887 4.51714L9.22154 3.94058L7.4481 0.345269C7.39966 0.246832 7.31997 0.167144 7.22154 0.118707C6.97466 -0.00316805 6.67466 0.0983945 6.55122 0.345269L4.77779 3.94058L0.810601 4.51714C0.701226 4.53277 0.601226 4.58433 0.524663 4.66246C0.432103 4.75759 0.381099 4.88558 0.382856 5.0183C0.384614 5.15103 0.438991 5.27762 0.534038 5.37027L3.40435 8.16871L2.72623 12.1203C2.71032 12.2122 2.72049 12.3067 2.75559 12.3932C2.79068 12.4796 2.84929 12.5545 2.92477 12.6093C3.00025 12.6641 3.08958 12.6967 3.18263 12.7033C3.27568 12.71 3.36873 12.6904 3.45123 12.6468L6.99966 10.7812L10.5481 12.6468C10.645 12.6984 10.7575 12.7156 10.8653 12.6968C11.1372 12.65 11.32 12.3921 11.2731 12.1203L10.595 8.16871L13.4653 5.37027C13.5434 5.29371 13.595 5.19371 13.6106 5.08433C13.6528 4.81089 13.4622 4.55777 13.1887 4.51714Z"
                                                            fill="#FF6500" />
                                                    </svg></span>
                                                <span class="mr-[4px]"><svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.1887 4.51714L9.22154 3.94058L7.4481 0.345269C7.39966 0.246832 7.31997 0.167144 7.22154 0.118707C6.97466 -0.00316805 6.67466 0.0983945 6.55122 0.345269L4.77779 3.94058L0.810601 4.51714C0.701226 4.53277 0.601226 4.58433 0.524663 4.66246C0.432103 4.75759 0.381099 4.88558 0.382856 5.0183C0.384614 5.15103 0.438991 5.27762 0.534038 5.37027L3.40435 8.16871L2.72623 12.1203C2.71032 12.2122 2.72049 12.3067 2.75559 12.3932C2.79068 12.4796 2.84929 12.5545 2.92477 12.6093C3.00025 12.6641 3.08958 12.6967 3.18263 12.7033C3.27568 12.71 3.36873 12.6904 3.45123 12.6468L6.99966 10.7812L10.5481 12.6468C10.645 12.6984 10.7575 12.7156 10.8653 12.6968C11.1372 12.65 11.32 12.3921 11.2731 12.1203L10.595 8.16871L13.4653 5.37027C13.5434 5.29371 13.595 5.19371 13.6106 5.08433C13.6528 4.81089 13.4622 4.55777 13.1887 4.51714Z"
                                                            fill="#FF6500" />
                                                    </svg></span>
                                                <span class="mr-[4px]"><svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.1887 4.51714L9.22154 3.94058L7.4481 0.345269C7.39966 0.246832 7.31997 0.167144 7.22154 0.118707C6.97466 -0.00316805 6.67466 0.0983945 6.55122 0.345269L4.77779 3.94058L0.810601 4.51714C0.701226 4.53277 0.601226 4.58433 0.524663 4.66246C0.432103 4.75759 0.381099 4.88558 0.382856 5.0183C0.384614 5.15103 0.438991 5.27762 0.534038 5.37027L3.40435 8.16871L2.72623 12.1203C2.71032 12.2122 2.72049 12.3067 2.75559 12.3932C2.79068 12.4796 2.84929 12.5545 2.92477 12.6093C3.00025 12.6641 3.08958 12.6967 3.18263 12.7033C3.27568 12.71 3.36873 12.6904 3.45123 12.6468L6.99966 10.7812L10.5481 12.6468C10.645 12.6984 10.7575 12.7156 10.8653 12.6968C11.1372 12.65 11.32 12.3921 11.2731 12.1203L10.595 8.16871L13.4653 5.37027C13.5434 5.29371 13.595 5.19371 13.6106 5.08433C13.6528 4.81089 13.4622 4.55777 13.1887 4.51714Z"
                                                            fill="#FF6500" />
                                                    </svg></span>
                                                <span class="mr-[4px]">
                                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M2.35262 12.85C2.32978 12.9478 2.32937 13.0495 2.35142 13.1474C2.37347 13.2454 2.41741 13.3371 2.47994 13.4157C2.54248 13.4942 2.62198 13.5576 2.7125 13.6011C2.80302 13.6446 2.90221 13.667 3.00262 13.6667C3.13431 13.6667 3.26306 13.6277 3.37262 13.5547L7.00262 11.1347L10.6326 13.5547C10.7462 13.6301 10.8801 13.6689 11.0164 13.6659C11.1527 13.6629 11.2847 13.6183 11.3949 13.538C11.505 13.4577 11.5879 13.3456 11.6325 13.2167C11.677 13.0879 11.681 12.9485 11.644 12.8173L10.4246 8.55068L13.4486 5.82934C13.5455 5.74214 13.6146 5.62845 13.6476 5.50235C13.6805 5.37625 13.6757 5.24326 13.6339 5.11984C13.592 4.99641 13.5149 4.88796 13.4121 4.80789C13.3093 4.72783 13.1852 4.67966 13.0553 4.66934L9.25462 4.36668L7.60995 0.72601C7.55758 0.608751 7.47238 0.509157 7.36465 0.439248C7.25692 0.369339 7.13126 0.332102 7.00284 0.332031C6.87441 0.331961 6.74871 0.36906 6.6409 0.438851C6.5331 0.508642 6.44779 0.608142 6.39529 0.725343L4.75062 4.36668L0.949955 4.66868C0.822259 4.67879 0.70018 4.72548 0.598325 4.80316C0.49647 4.88084 0.41915 4.98622 0.375617 5.1067C0.332084 5.22717 0.32418 5.35763 0.352852 5.48248C0.381523 5.60733 0.445556 5.72127 0.537288 5.81068L3.34662 8.54868L2.35262 12.85ZM7.00262 2.61934L8.36395 5.63334L8.75595 5.66468H8.75662L11.4046 5.87468L9.22395 7.83734L9.22329 7.83868L8.91462 8.11601L9.02862 8.51401V8.51601L9.86395 11.4393L7.00262 9.53201V2.61934Z"
                                                            fill="#FF6500" />
                                                    </svg>
                                                </span>
                                                <span class="ml-[20px] text-sm">(320 Reviews)</span>
                                            </div>
                                        </li>
                                        <li class="flex flex-wrap items-center justify-between">
                                            <div class="flex flex-wrap mb-[20px] sm:mb-[0px] md:mb-[20px]">
                                                <img class="self-start mr-[40px]" src="{{url('')}}/assets/images/icon/medihealth.png" loading="lazy" width="56" height="66" alt="logo">
                                                <div class="flex-1">
                                                    <h4 class="text-primary font-lora text-[16px] leading-none mb-[5px]">
                                                        Mediset Hospital Ltd.</h4>
                                                    <span class="text-[13px] leading-none">(0.5 km distance)</span>
                                                </div>
                                            </div>


                                            <div class="flex flex-wrap items-center">
                                                <span class="mr-[4px]"><svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.1887 4.51714L9.22154 3.94058L7.4481 0.345269C7.39966 0.246832 7.31997 0.167144 7.22154 0.118707C6.97466 -0.00316805 6.67466 0.0983945 6.55122 0.345269L4.77779 3.94058L0.810601 4.51714C0.701226 4.53277 0.601226 4.58433 0.524663 4.66246C0.432103 4.75759 0.381099 4.88558 0.382856 5.0183C0.384614 5.15103 0.438991 5.27762 0.534038 5.37027L3.40435 8.16871L2.72623 12.1203C2.71032 12.2122 2.72049 12.3067 2.75559 12.3932C2.79068 12.4796 2.84929 12.5545 2.92477 12.6093C3.00025 12.6641 3.08958 12.6967 3.18263 12.7033C3.27568 12.71 3.36873 12.6904 3.45123 12.6468L6.99966 10.7812L10.5481 12.6468C10.645 12.6984 10.7575 12.7156 10.8653 12.6968C11.1372 12.65 11.32 12.3921 11.2731 12.1203L10.595 8.16871L13.4653 5.37027C13.5434 5.29371 13.595 5.19371 13.6106 5.08433C13.6528 4.81089 13.4622 4.55777 13.1887 4.51714Z"
                                                            fill="#FF6500" />
                                                    </svg></span>
                                                <span class="mr-[4px]"><svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.1887 4.51714L9.22154 3.94058L7.4481 0.345269C7.39966 0.246832 7.31997 0.167144 7.22154 0.118707C6.97466 -0.00316805 6.67466 0.0983945 6.55122 0.345269L4.77779 3.94058L0.810601 4.51714C0.701226 4.53277 0.601226 4.58433 0.524663 4.66246C0.432103 4.75759 0.381099 4.88558 0.382856 5.0183C0.384614 5.15103 0.438991 5.27762 0.534038 5.37027L3.40435 8.16871L2.72623 12.1203C2.71032 12.2122 2.72049 12.3067 2.75559 12.3932C2.79068 12.4796 2.84929 12.5545 2.92477 12.6093C3.00025 12.6641 3.08958 12.6967 3.18263 12.7033C3.27568 12.71 3.36873 12.6904 3.45123 12.6468L6.99966 10.7812L10.5481 12.6468C10.645 12.6984 10.7575 12.7156 10.8653 12.6968C11.1372 12.65 11.32 12.3921 11.2731 12.1203L10.595 8.16871L13.4653 5.37027C13.5434 5.29371 13.595 5.19371 13.6106 5.08433C13.6528 4.81089 13.4622 4.55777 13.1887 4.51714Z"
                                                            fill="#FF6500" />
                                                    </svg></span>
                                                <span class="mr-[4px]"><svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.1887 4.51714L9.22154 3.94058L7.4481 0.345269C7.39966 0.246832 7.31997 0.167144 7.22154 0.118707C6.97466 -0.00316805 6.67466 0.0983945 6.55122 0.345269L4.77779 3.94058L0.810601 4.51714C0.701226 4.53277 0.601226 4.58433 0.524663 4.66246C0.432103 4.75759 0.381099 4.88558 0.382856 5.0183C0.384614 5.15103 0.438991 5.27762 0.534038 5.37027L3.40435 8.16871L2.72623 12.1203C2.71032 12.2122 2.72049 12.3067 2.75559 12.3932C2.79068 12.4796 2.84929 12.5545 2.92477 12.6093C3.00025 12.6641 3.08958 12.6967 3.18263 12.7033C3.27568 12.71 3.36873 12.6904 3.45123 12.6468L6.99966 10.7812L10.5481 12.6468C10.645 12.6984 10.7575 12.7156 10.8653 12.6968C11.1372 12.65 11.32 12.3921 11.2731 12.1203L10.595 8.16871L13.4653 5.37027C13.5434 5.29371 13.595 5.19371 13.6106 5.08433C13.6528 4.81089 13.4622 4.55777 13.1887 4.51714Z"
                                                            fill="#FF6500" />
                                                    </svg></span>
                                                <span class="mr-[4px]"><svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.1887 4.51714L9.22154 3.94058L7.4481 0.345269C7.39966 0.246832 7.31997 0.167144 7.22154 0.118707C6.97466 -0.00316805 6.67466 0.0983945 6.55122 0.345269L4.77779 3.94058L0.810601 4.51714C0.701226 4.53277 0.601226 4.58433 0.524663 4.66246C0.432103 4.75759 0.381099 4.88558 0.382856 5.0183C0.384614 5.15103 0.438991 5.27762 0.534038 5.37027L3.40435 8.16871L2.72623 12.1203C2.71032 12.2122 2.72049 12.3067 2.75559 12.3932C2.79068 12.4796 2.84929 12.5545 2.92477 12.6093C3.00025 12.6641 3.08958 12.6967 3.18263 12.7033C3.27568 12.71 3.36873 12.6904 3.45123 12.6468L6.99966 10.7812L10.5481 12.6468C10.645 12.6984 10.7575 12.7156 10.8653 12.6968C11.1372 12.65 11.32 12.3921 11.2731 12.1203L10.595 8.16871L13.4653 5.37027C13.5434 5.29371 13.595 5.19371 13.6106 5.08433C13.6528 4.81089 13.4622 4.55777 13.1887 4.51714Z"
                                                            fill="#FF6500" />
                                                    </svg></span>
                                                <span class="mr-[4px]">
                                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M2.35262 12.85C2.32978 12.9478 2.32937 13.0495 2.35142 13.1474C2.37347 13.2454 2.41741 13.3371 2.47994 13.4157C2.54248 13.4942 2.62198 13.5576 2.7125 13.6011C2.80302 13.6446 2.90221 13.667 3.00262 13.6667C3.13431 13.6667 3.26306 13.6277 3.37262 13.5547L7.00262 11.1347L10.6326 13.5547C10.7462 13.6301 10.8801 13.6689 11.0164 13.6659C11.1527 13.6629 11.2847 13.6183 11.3949 13.538C11.505 13.4577 11.5879 13.3456 11.6325 13.2167C11.677 13.0879 11.681 12.9485 11.644 12.8173L10.4246 8.55068L13.4486 5.82934C13.5455 5.74214 13.6146 5.62845 13.6476 5.50235C13.6805 5.37625 13.6757 5.24326 13.6339 5.11984C13.592 4.99641 13.5149 4.88796 13.4121 4.80789C13.3093 4.72783 13.1852 4.67966 13.0553 4.66934L9.25462 4.36668L7.60995 0.72601C7.55758 0.608751 7.47238 0.509157 7.36465 0.439248C7.25692 0.369339 7.13126 0.332102 7.00284 0.332031C6.87441 0.331961 6.74871 0.36906 6.6409 0.438851C6.5331 0.508642 6.44779 0.608142 6.39529 0.725343L4.75062 4.36668L0.949955 4.66868C0.822259 4.67879 0.70018 4.72548 0.598325 4.80316C0.49647 4.88084 0.41915 4.98622 0.375617 5.1067C0.332084 5.22717 0.32418 5.35763 0.352852 5.48248C0.381523 5.60733 0.445556 5.72127 0.537288 5.81068L3.34662 8.54868L2.35262 12.85ZM7.00262 2.61934L8.36395 5.63334L8.75595 5.66468H8.75662L11.4046 5.87468L9.22395 7.83734L9.22329 7.83868L8.91462 8.11601L9.02862 8.51401V8.51601L9.86395 11.4393L7.00262 9.53201V2.61934Z"
                                                            fill="#FF6500" />
                                                    </svg>
                                                </span>
                                                <span class="ml-[20px] text-sm">(320 Reviews)</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div id="ForSale" class="properties-tab-content">
                                    <ul>

                                        <li class="flex flex-wrap items-center justify-between pb-[25px] mb-[25px] border-b border-[#016450]">
                                            <div class="flex flex-wrap mb-[20px] sm:mb-[0px] md:mb-[20px]">
                                                <img class="self-start mr-[40px]" src="{{url('')}}/assets/images/icon/healthcare.png" loading="lazy" width="63" height="68" alt="logo">
                                                <div class="flex-1">
                                                    <h4 class="text-primary font-lora text-[16px] leading-none mb-[5px]">
                                                        Mediset Hospital Ltd.</h4>
                                                    <span class="text-[13px] leading-none">(0.5 km distance)</span>
                                                </div>
                                            </div>


                                            <div class="flex flex-wrap items-center">
                                                <span class="mr-[4px]"><svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.1887 4.51714L9.22154 3.94058L7.4481 0.345269C7.39966 0.246832 7.31997 0.167144 7.22154 0.118707C6.97466 -0.00316805 6.67466 0.0983945 6.55122 0.345269L4.77779 3.94058L0.810601 4.51714C0.701226 4.53277 0.601226 4.58433 0.524663 4.66246C0.432103 4.75759 0.381099 4.88558 0.382856 5.0183C0.384614 5.15103 0.438991 5.27762 0.534038 5.37027L3.40435 8.16871L2.72623 12.1203C2.71032 12.2122 2.72049 12.3067 2.75559 12.3932C2.79068 12.4796 2.84929 12.5545 2.92477 12.6093C3.00025 12.6641 3.08958 12.6967 3.18263 12.7033C3.27568 12.71 3.36873 12.6904 3.45123 12.6468L6.99966 10.7812L10.5481 12.6468C10.645 12.6984 10.7575 12.7156 10.8653 12.6968C11.1372 12.65 11.32 12.3921 11.2731 12.1203L10.595 8.16871L13.4653 5.37027C13.5434 5.29371 13.595 5.19371 13.6106 5.08433C13.6528 4.81089 13.4622 4.55777 13.1887 4.51714Z"
                                                            fill="#FF6500" />
                                                    </svg></span>
                                                <span class="mr-[4px]"><svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.1887 4.51714L9.22154 3.94058L7.4481 0.345269C7.39966 0.246832 7.31997 0.167144 7.22154 0.118707C6.97466 -0.00316805 6.67466 0.0983945 6.55122 0.345269L4.77779 3.94058L0.810601 4.51714C0.701226 4.53277 0.601226 4.58433 0.524663 4.66246C0.432103 4.75759 0.381099 4.88558 0.382856 5.0183C0.384614 5.15103 0.438991 5.27762 0.534038 5.37027L3.40435 8.16871L2.72623 12.1203C2.71032 12.2122 2.72049 12.3067 2.75559 12.3932C2.79068 12.4796 2.84929 12.5545 2.92477 12.6093C3.00025 12.6641 3.08958 12.6967 3.18263 12.7033C3.27568 12.71 3.36873 12.6904 3.45123 12.6468L6.99966 10.7812L10.5481 12.6468C10.645 12.6984 10.7575 12.7156 10.8653 12.6968C11.1372 12.65 11.32 12.3921 11.2731 12.1203L10.595 8.16871L13.4653 5.37027C13.5434 5.29371 13.595 5.19371 13.6106 5.08433C13.6528 4.81089 13.4622 4.55777 13.1887 4.51714Z"
                                                            fill="#FF6500" />
                                                    </svg></span>
                                                <span class="mr-[4px]"><svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.1887 4.51714L9.22154 3.94058L7.4481 0.345269C7.39966 0.246832 7.31997 0.167144 7.22154 0.118707C6.97466 -0.00316805 6.67466 0.0983945 6.55122 0.345269L4.77779 3.94058L0.810601 4.51714C0.701226 4.53277 0.601226 4.58433 0.524663 4.66246C0.432103 4.75759 0.381099 4.88558 0.382856 5.0183C0.384614 5.15103 0.438991 5.27762 0.534038 5.37027L3.40435 8.16871L2.72623 12.1203C2.71032 12.2122 2.72049 12.3067 2.75559 12.3932C2.79068 12.4796 2.84929 12.5545 2.92477 12.6093C3.00025 12.6641 3.08958 12.6967 3.18263 12.7033C3.27568 12.71 3.36873 12.6904 3.45123 12.6468L6.99966 10.7812L10.5481 12.6468C10.645 12.6984 10.7575 12.7156 10.8653 12.6968C11.1372 12.65 11.32 12.3921 11.2731 12.1203L10.595 8.16871L13.4653 5.37027C13.5434 5.29371 13.595 5.19371 13.6106 5.08433C13.6528 4.81089 13.4622 4.55777 13.1887 4.51714Z"
                                                            fill="#FF6500" />
                                                    </svg></span>
                                                <span class="mr-[4px]"><svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.1887 4.51714L9.22154 3.94058L7.4481 0.345269C7.39966 0.246832 7.31997 0.167144 7.22154 0.118707C6.97466 -0.00316805 6.67466 0.0983945 6.55122 0.345269L4.77779 3.94058L0.810601 4.51714C0.701226 4.53277 0.601226 4.58433 0.524663 4.66246C0.432103 4.75759 0.381099 4.88558 0.382856 5.0183C0.384614 5.15103 0.438991 5.27762 0.534038 5.37027L3.40435 8.16871L2.72623 12.1203C2.71032 12.2122 2.72049 12.3067 2.75559 12.3932C2.79068 12.4796 2.84929 12.5545 2.92477 12.6093C3.00025 12.6641 3.08958 12.6967 3.18263 12.7033C3.27568 12.71 3.36873 12.6904 3.45123 12.6468L6.99966 10.7812L10.5481 12.6468C10.645 12.6984 10.7575 12.7156 10.8653 12.6968C11.1372 12.65 11.32 12.3921 11.2731 12.1203L10.595 8.16871L13.4653 5.37027C13.5434 5.29371 13.595 5.19371 13.6106 5.08433C13.6528 4.81089 13.4622 4.55777 13.1887 4.51714Z"
                                                            fill="#FF6500" />
                                                    </svg></span>
                                                <span class="mr-[4px]">
                                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M2.35262 12.85C2.32978 12.9478 2.32937 13.0495 2.35142 13.1474C2.37347 13.2454 2.41741 13.3371 2.47994 13.4157C2.54248 13.4942 2.62198 13.5576 2.7125 13.6011C2.80302 13.6446 2.90221 13.667 3.00262 13.6667C3.13431 13.6667 3.26306 13.6277 3.37262 13.5547L7.00262 11.1347L10.6326 13.5547C10.7462 13.6301 10.8801 13.6689 11.0164 13.6659C11.1527 13.6629 11.2847 13.6183 11.3949 13.538C11.505 13.4577 11.5879 13.3456 11.6325 13.2167C11.677 13.0879 11.681 12.9485 11.644 12.8173L10.4246 8.55068L13.4486 5.82934C13.5455 5.74214 13.6146 5.62845 13.6476 5.50235C13.6805 5.37625 13.6757 5.24326 13.6339 5.11984C13.592 4.99641 13.5149 4.88796 13.4121 4.80789C13.3093 4.72783 13.1852 4.67966 13.0553 4.66934L9.25462 4.36668L7.60995 0.72601C7.55758 0.608751 7.47238 0.509157 7.36465 0.439248C7.25692 0.369339 7.13126 0.332102 7.00284 0.332031C6.87441 0.331961 6.74871 0.36906 6.6409 0.438851C6.5331 0.508642 6.44779 0.608142 6.39529 0.725343L4.75062 4.36668L0.949955 4.66868C0.822259 4.67879 0.70018 4.72548 0.598325 4.80316C0.49647 4.88084 0.41915 4.98622 0.375617 5.1067C0.332084 5.22717 0.32418 5.35763 0.352852 5.48248C0.381523 5.60733 0.445556 5.72127 0.537288 5.81068L3.34662 8.54868L2.35262 12.85ZM7.00262 2.61934L8.36395 5.63334L8.75595 5.66468H8.75662L11.4046 5.87468L9.22395 7.83734L9.22329 7.83868L8.91462 8.11601L9.02862 8.51401V8.51601L9.86395 11.4393L7.00262 9.53201V2.61934Z"
                                                            fill="#FF6500" />
                                                    </svg>
                                                </span>
                                                <span class="ml-[20px] text-sm">(320 Reviews)</span>
                                            </div>
                                        </li>
                                        <li class="flex flex-wrap items-center justify-between pb-[25px] mb-[25px] border-b border-[#016450]">
                                            <div class="flex flex-wrap mb-[20px] sm:mb-[0px] md:mb-[20px]">
                                                <img class="self-start mr-[40px]" src="{{url('')}}/assets/images/icon/medist.png" loading="lazy" width="54" height="68" alt="logo">
                                                <div class="flex-1">
                                                    <h4 class="text-primary font-lora text-[16px] leading-none mb-[5px]">
                                                        Mediset Hospital Ltd.</h4>
                                                    <span class="text-[13px] leading-none">(0.5 km distance)</span>
                                                </div>
                                            </div>


                                            <div class="flex flex-wrap items-center">
                                                <span class="mr-[4px]"><svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.1887 4.51714L9.22154 3.94058L7.4481 0.345269C7.39966 0.246832 7.31997 0.167144 7.22154 0.118707C6.97466 -0.00316805 6.67466 0.0983945 6.55122 0.345269L4.77779 3.94058L0.810601 4.51714C0.701226 4.53277 0.601226 4.58433 0.524663 4.66246C0.432103 4.75759 0.381099 4.88558 0.382856 5.0183C0.384614 5.15103 0.438991 5.27762 0.534038 5.37027L3.40435 8.16871L2.72623 12.1203C2.71032 12.2122 2.72049 12.3067 2.75559 12.3932C2.79068 12.4796 2.84929 12.5545 2.92477 12.6093C3.00025 12.6641 3.08958 12.6967 3.18263 12.7033C3.27568 12.71 3.36873 12.6904 3.45123 12.6468L6.99966 10.7812L10.5481 12.6468C10.645 12.6984 10.7575 12.7156 10.8653 12.6968C11.1372 12.65 11.32 12.3921 11.2731 12.1203L10.595 8.16871L13.4653 5.37027C13.5434 5.29371 13.595 5.19371 13.6106 5.08433C13.6528 4.81089 13.4622 4.55777 13.1887 4.51714Z"
                                                            fill="#FF6500" />
                                                    </svg></span>
                                                <span class="mr-[4px]"><svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.1887 4.51714L9.22154 3.94058L7.4481 0.345269C7.39966 0.246832 7.31997 0.167144 7.22154 0.118707C6.97466 -0.00316805 6.67466 0.0983945 6.55122 0.345269L4.77779 3.94058L0.810601 4.51714C0.701226 4.53277 0.601226 4.58433 0.524663 4.66246C0.432103 4.75759 0.381099 4.88558 0.382856 5.0183C0.384614 5.15103 0.438991 5.27762 0.534038 5.37027L3.40435 8.16871L2.72623 12.1203C2.71032 12.2122 2.72049 12.3067 2.75559 12.3932C2.79068 12.4796 2.84929 12.5545 2.92477 12.6093C3.00025 12.6641 3.08958 12.6967 3.18263 12.7033C3.27568 12.71 3.36873 12.6904 3.45123 12.6468L6.99966 10.7812L10.5481 12.6468C10.645 12.6984 10.7575 12.7156 10.8653 12.6968C11.1372 12.65 11.32 12.3921 11.2731 12.1203L10.595 8.16871L13.4653 5.37027C13.5434 5.29371 13.595 5.19371 13.6106 5.08433C13.6528 4.81089 13.4622 4.55777 13.1887 4.51714Z"
                                                            fill="#FF6500" />
                                                    </svg></span>
                                                <span class="mr-[4px]"><svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.1887 4.51714L9.22154 3.94058L7.4481 0.345269C7.39966 0.246832 7.31997 0.167144 7.22154 0.118707C6.97466 -0.00316805 6.67466 0.0983945 6.55122 0.345269L4.77779 3.94058L0.810601 4.51714C0.701226 4.53277 0.601226 4.58433 0.524663 4.66246C0.432103 4.75759 0.381099 4.88558 0.382856 5.0183C0.384614 5.15103 0.438991 5.27762 0.534038 5.37027L3.40435 8.16871L2.72623 12.1203C2.71032 12.2122 2.72049 12.3067 2.75559 12.3932C2.79068 12.4796 2.84929 12.5545 2.92477 12.6093C3.00025 12.6641 3.08958 12.6967 3.18263 12.7033C3.27568 12.71 3.36873 12.6904 3.45123 12.6468L6.99966 10.7812L10.5481 12.6468C10.645 12.6984 10.7575 12.7156 10.8653 12.6968C11.1372 12.65 11.32 12.3921 11.2731 12.1203L10.595 8.16871L13.4653 5.37027C13.5434 5.29371 13.595 5.19371 13.6106 5.08433C13.6528 4.81089 13.4622 4.55777 13.1887 4.51714Z"
                                                            fill="#FF6500" />
                                                    </svg></span>
                                                <span class="mr-[4px]"><svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.1887 4.51714L9.22154 3.94058L7.4481 0.345269C7.39966 0.246832 7.31997 0.167144 7.22154 0.118707C6.97466 -0.00316805 6.67466 0.0983945 6.55122 0.345269L4.77779 3.94058L0.810601 4.51714C0.701226 4.53277 0.601226 4.58433 0.524663 4.66246C0.432103 4.75759 0.381099 4.88558 0.382856 5.0183C0.384614 5.15103 0.438991 5.27762 0.534038 5.37027L3.40435 8.16871L2.72623 12.1203C2.71032 12.2122 2.72049 12.3067 2.75559 12.3932C2.79068 12.4796 2.84929 12.5545 2.92477 12.6093C3.00025 12.6641 3.08958 12.6967 3.18263 12.7033C3.27568 12.71 3.36873 12.6904 3.45123 12.6468L6.99966 10.7812L10.5481 12.6468C10.645 12.6984 10.7575 12.7156 10.8653 12.6968C11.1372 12.65 11.32 12.3921 11.2731 12.1203L10.595 8.16871L13.4653 5.37027C13.5434 5.29371 13.595 5.19371 13.6106 5.08433C13.6528 4.81089 13.4622 4.55777 13.1887 4.51714Z"
                                                            fill="#FF6500" />
                                                    </svg></span>
                                                <span class="mr-[4px]"><svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.1887 4.51714L9.22154 3.94058L7.4481 0.345269C7.39966 0.246832 7.31997 0.167144 7.22154 0.118707C6.97466 -0.00316805 6.67466 0.0983945 6.55122 0.345269L4.77779 3.94058L0.810601 4.51714C0.701226 4.53277 0.601226 4.58433 0.524663 4.66246C0.432103 4.75759 0.381099 4.88558 0.382856 5.0183C0.384614 5.15103 0.438991 5.27762 0.534038 5.37027L3.40435 8.16871L2.72623 12.1203C2.71032 12.2122 2.72049 12.3067 2.75559 12.3932C2.79068 12.4796 2.84929 12.5545 2.92477 12.6093C3.00025 12.6641 3.08958 12.6967 3.18263 12.7033C3.27568 12.71 3.36873 12.6904 3.45123 12.6468L6.99966 10.7812L10.5481 12.6468C10.645 12.6984 10.7575 12.7156 10.8653 12.6968C11.1372 12.65 11.32 12.3921 11.2731 12.1203L10.595 8.16871L13.4653 5.37027C13.5434 5.29371 13.595 5.19371 13.6106 5.08433C13.6528 4.81089 13.4622 4.55777 13.1887 4.51714Z"
                                                            fill="#FF6500" />
                                                    </svg></span>
                                                <span class="ml-[20px]">(320 Reviews)</span>
                                            </div>
                                        </li>
                                        <li class="flex flex-wrap items-center justify-between">
                                            <div class="flex flex-wrap mb-[20px] sm:mb-[0px] md:mb-[20px]">
                                                <img class="self-start mr-[40px]" src="{{url('')}}/assets/images/icon/medihealth.png" loading="lazy" width="56" height="66" alt="logo">
                                                <div class="flex-1">
                                                    <h4 class="text-primary font-lora text-[18px] leading-none mb-[5px]">
                                                        Mediset Hospital Ltd.</h4>
                                                    <span class="text-[13px] leading-none">(0.5 km distance)</span>
                                                </div>
                                            </div>


                                            <div class="flex flex-wrap items-center">
                                                <span class="mr-[4px]"><svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.1887 4.51714L9.22154 3.94058L7.4481 0.345269C7.39966 0.246832 7.31997 0.167144 7.22154 0.118707C6.97466 -0.00316805 6.67466 0.0983945 6.55122 0.345269L4.77779 3.94058L0.810601 4.51714C0.701226 4.53277 0.601226 4.58433 0.524663 4.66246C0.432103 4.75759 0.381099 4.88558 0.382856 5.0183C0.384614 5.15103 0.438991 5.27762 0.534038 5.37027L3.40435 8.16871L2.72623 12.1203C2.71032 12.2122 2.72049 12.3067 2.75559 12.3932C2.79068 12.4796 2.84929 12.5545 2.92477 12.6093C3.00025 12.6641 3.08958 12.6967 3.18263 12.7033C3.27568 12.71 3.36873 12.6904 3.45123 12.6468L6.99966 10.7812L10.5481 12.6468C10.645 12.6984 10.7575 12.7156 10.8653 12.6968C11.1372 12.65 11.32 12.3921 11.2731 12.1203L10.595 8.16871L13.4653 5.37027C13.5434 5.29371 13.595 5.19371 13.6106 5.08433C13.6528 4.81089 13.4622 4.55777 13.1887 4.51714Z"
                                                            fill="#FF6500" />
                                                    </svg></span>
                                                <span class="mr-[4px]"><svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.1887 4.51714L9.22154 3.94058L7.4481 0.345269C7.39966 0.246832 7.31997 0.167144 7.22154 0.118707C6.97466 -0.00316805 6.67466 0.0983945 6.55122 0.345269L4.77779 3.94058L0.810601 4.51714C0.701226 4.53277 0.601226 4.58433 0.524663 4.66246C0.432103 4.75759 0.381099 4.88558 0.382856 5.0183C0.384614 5.15103 0.438991 5.27762 0.534038 5.37027L3.40435 8.16871L2.72623 12.1203C2.71032 12.2122 2.72049 12.3067 2.75559 12.3932C2.79068 12.4796 2.84929 12.5545 2.92477 12.6093C3.00025 12.6641 3.08958 12.6967 3.18263 12.7033C3.27568 12.71 3.36873 12.6904 3.45123 12.6468L6.99966 10.7812L10.5481 12.6468C10.645 12.6984 10.7575 12.7156 10.8653 12.6968C11.1372 12.65 11.32 12.3921 11.2731 12.1203L10.595 8.16871L13.4653 5.37027C13.5434 5.29371 13.595 5.19371 13.6106 5.08433C13.6528 4.81089 13.4622 4.55777 13.1887 4.51714Z"
                                                            fill="#FF6500" />
                                                    </svg></span>
                                                <span class="mr-[4px]"><svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.1887 4.51714L9.22154 3.94058L7.4481 0.345269C7.39966 0.246832 7.31997 0.167144 7.22154 0.118707C6.97466 -0.00316805 6.67466 0.0983945 6.55122 0.345269L4.77779 3.94058L0.810601 4.51714C0.701226 4.53277 0.601226 4.58433 0.524663 4.66246C0.432103 4.75759 0.381099 4.88558 0.382856 5.0183C0.384614 5.15103 0.438991 5.27762 0.534038 5.37027L3.40435 8.16871L2.72623 12.1203C2.71032 12.2122 2.72049 12.3067 2.75559 12.3932C2.79068 12.4796 2.84929 12.5545 2.92477 12.6093C3.00025 12.6641 3.08958 12.6967 3.18263 12.7033C3.27568 12.71 3.36873 12.6904 3.45123 12.6468L6.99966 10.7812L10.5481 12.6468C10.645 12.6984 10.7575 12.7156 10.8653 12.6968C11.1372 12.65 11.32 12.3921 11.2731 12.1203L10.595 8.16871L13.4653 5.37027C13.5434 5.29371 13.595 5.19371 13.6106 5.08433C13.6528 4.81089 13.4622 4.55777 13.1887 4.51714Z"
                                                            fill="#FF6500" />
                                                    </svg></span>
                                                <span class="mr-[4px]"><svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.1887 4.51714L9.22154 3.94058L7.4481 0.345269C7.39966 0.246832 7.31997 0.167144 7.22154 0.118707C6.97466 -0.00316805 6.67466 0.0983945 6.55122 0.345269L4.77779 3.94058L0.810601 4.51714C0.701226 4.53277 0.601226 4.58433 0.524663 4.66246C0.432103 4.75759 0.381099 4.88558 0.382856 5.0183C0.384614 5.15103 0.438991 5.27762 0.534038 5.37027L3.40435 8.16871L2.72623 12.1203C2.71032 12.2122 2.72049 12.3067 2.75559 12.3932C2.79068 12.4796 2.84929 12.5545 2.92477 12.6093C3.00025 12.6641 3.08958 12.6967 3.18263 12.7033C3.27568 12.71 3.36873 12.6904 3.45123 12.6468L6.99966 10.7812L10.5481 12.6468C10.645 12.6984 10.7575 12.7156 10.8653 12.6968C11.1372 12.65 11.32 12.3921 11.2731 12.1203L10.595 8.16871L13.4653 5.37027C13.5434 5.29371 13.595 5.19371 13.6106 5.08433C13.6528 4.81089 13.4622 4.55777 13.1887 4.51714Z"
                                                            fill="#FF6500" />
                                                    </svg></span>
                                                <span class="mr-[4px]">
                                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M2.35262 12.85C2.32978 12.9478 2.32937 13.0495 2.35142 13.1474C2.37347 13.2454 2.41741 13.3371 2.47994 13.4157C2.54248 13.4942 2.62198 13.5576 2.7125 13.6011C2.80302 13.6446 2.90221 13.667 3.00262 13.6667C3.13431 13.6667 3.26306 13.6277 3.37262 13.5547L7.00262 11.1347L10.6326 13.5547C10.7462 13.6301 10.8801 13.6689 11.0164 13.6659C11.1527 13.6629 11.2847 13.6183 11.3949 13.538C11.505 13.4577 11.5879 13.3456 11.6325 13.2167C11.677 13.0879 11.681 12.9485 11.644 12.8173L10.4246 8.55068L13.4486 5.82934C13.5455 5.74214 13.6146 5.62845 13.6476 5.50235C13.6805 5.37625 13.6757 5.24326 13.6339 5.11984C13.592 4.99641 13.5149 4.88796 13.4121 4.80789C13.3093 4.72783 13.1852 4.67966 13.0553 4.66934L9.25462 4.36668L7.60995 0.72601C7.55758 0.608751 7.47238 0.509157 7.36465 0.439248C7.25692 0.369339 7.13126 0.332102 7.00284 0.332031C6.87441 0.331961 6.74871 0.36906 6.6409 0.438851C6.5331 0.508642 6.44779 0.608142 6.39529 0.725343L4.75062 4.36668L0.949955 4.66868C0.822259 4.67879 0.70018 4.72548 0.598325 4.80316C0.49647 4.88084 0.41915 4.98622 0.375617 5.1067C0.332084 5.22717 0.32418 5.35763 0.352852 5.48248C0.381523 5.60733 0.445556 5.72127 0.537288 5.81068L3.34662 8.54868L2.35262 12.85ZM7.00262 2.61934L8.36395 5.63334L8.75595 5.66468H8.75662L11.4046 5.87468L9.22395 7.83734L9.22329 7.83868L8.91462 8.11601L9.02862 8.51401V8.51601L9.86395 11.4393L7.00262 9.53201V2.61934Z"
                                                            fill="#FF6500" />
                                                    </svg>
                                                </span>
                                                <span class="ml-[20px] text-sm">(320 Reviews)</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div id="ForRent" class="properties-tab-content">
                                    <ul>
                                        <li class="flex flex-wrap items-center justify-between pb-[25px] mb-[25px] border-b border-[#016450]">
                                            <div class="flex flex-wrap mb-[20px] sm:mb-[0px] md:mb-[20px]">
                                                <img class="self-start mr-[40px]" src="{{url('')}}/assets/images/icon/healthcare.png" loading="lazy" width="63" height="68" alt="logo">
                                                <div class="flex-1">
                                                    <h4 class="text-primary font-lora text-[16px] leading-none mb-[5px]">
                                                        Mediset Hospital Ltd.</h4>
                                                    <span class="text-[13px] leading-none">(0.5 km distance)</span>
                                                </div>
                                            </div>


                                            <div class="flex flex-wrap items-center">
                                                <span class="mr-[4px]"><svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.1887 4.51714L9.22154 3.94058L7.4481 0.345269C7.39966 0.246832 7.31997 0.167144 7.22154 0.118707C6.97466 -0.00316805 6.67466 0.0983945 6.55122 0.345269L4.77779 3.94058L0.810601 4.51714C0.701226 4.53277 0.601226 4.58433 0.524663 4.66246C0.432103 4.75759 0.381099 4.88558 0.382856 5.0183C0.384614 5.15103 0.438991 5.27762 0.534038 5.37027L3.40435 8.16871L2.72623 12.1203C2.71032 12.2122 2.72049 12.3067 2.75559 12.3932C2.79068 12.4796 2.84929 12.5545 2.92477 12.6093C3.00025 12.6641 3.08958 12.6967 3.18263 12.7033C3.27568 12.71 3.36873 12.6904 3.45123 12.6468L6.99966 10.7812L10.5481 12.6468C10.645 12.6984 10.7575 12.7156 10.8653 12.6968C11.1372 12.65 11.32 12.3921 11.2731 12.1203L10.595 8.16871L13.4653 5.37027C13.5434 5.29371 13.595 5.19371 13.6106 5.08433C13.6528 4.81089 13.4622 4.55777 13.1887 4.51714Z"
                                                            fill="#FF6500" />
                                                    </svg></span>
                                                <span class="mr-[4px]"><svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.1887 4.51714L9.22154 3.94058L7.4481 0.345269C7.39966 0.246832 7.31997 0.167144 7.22154 0.118707C6.97466 -0.00316805 6.67466 0.0983945 6.55122 0.345269L4.77779 3.94058L0.810601 4.51714C0.701226 4.53277 0.601226 4.58433 0.524663 4.66246C0.432103 4.75759 0.381099 4.88558 0.382856 5.0183C0.384614 5.15103 0.438991 5.27762 0.534038 5.37027L3.40435 8.16871L2.72623 12.1203C2.71032 12.2122 2.72049 12.3067 2.75559 12.3932C2.79068 12.4796 2.84929 12.5545 2.92477 12.6093C3.00025 12.6641 3.08958 12.6967 3.18263 12.7033C3.27568 12.71 3.36873 12.6904 3.45123 12.6468L6.99966 10.7812L10.5481 12.6468C10.645 12.6984 10.7575 12.7156 10.8653 12.6968C11.1372 12.65 11.32 12.3921 11.2731 12.1203L10.595 8.16871L13.4653 5.37027C13.5434 5.29371 13.595 5.19371 13.6106 5.08433C13.6528 4.81089 13.4622 4.55777 13.1887 4.51714Z"
                                                            fill="#FF6500" />
                                                    </svg></span>
                                                <span class="mr-[4px]"><svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.1887 4.51714L9.22154 3.94058L7.4481 0.345269C7.39966 0.246832 7.31997 0.167144 7.22154 0.118707C6.97466 -0.00316805 6.67466 0.0983945 6.55122 0.345269L4.77779 3.94058L0.810601 4.51714C0.701226 4.53277 0.601226 4.58433 0.524663 4.66246C0.432103 4.75759 0.381099 4.88558 0.382856 5.0183C0.384614 5.15103 0.438991 5.27762 0.534038 5.37027L3.40435 8.16871L2.72623 12.1203C2.71032 12.2122 2.72049 12.3067 2.75559 12.3932C2.79068 12.4796 2.84929 12.5545 2.92477 12.6093C3.00025 12.6641 3.08958 12.6967 3.18263 12.7033C3.27568 12.71 3.36873 12.6904 3.45123 12.6468L6.99966 10.7812L10.5481 12.6468C10.645 12.6984 10.7575 12.7156 10.8653 12.6968C11.1372 12.65 11.32 12.3921 11.2731 12.1203L10.595 8.16871L13.4653 5.37027C13.5434 5.29371 13.595 5.19371 13.6106 5.08433C13.6528 4.81089 13.4622 4.55777 13.1887 4.51714Z"
                                                            fill="#FF6500" />
                                                    </svg></span>
                                                <span class="mr-[4px]"><svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.1887 4.51714L9.22154 3.94058L7.4481 0.345269C7.39966 0.246832 7.31997 0.167144 7.22154 0.118707C6.97466 -0.00316805 6.67466 0.0983945 6.55122 0.345269L4.77779 3.94058L0.810601 4.51714C0.701226 4.53277 0.601226 4.58433 0.524663 4.66246C0.432103 4.75759 0.381099 4.88558 0.382856 5.0183C0.384614 5.15103 0.438991 5.27762 0.534038 5.37027L3.40435 8.16871L2.72623 12.1203C2.71032 12.2122 2.72049 12.3067 2.75559 12.3932C2.79068 12.4796 2.84929 12.5545 2.92477 12.6093C3.00025 12.6641 3.08958 12.6967 3.18263 12.7033C3.27568 12.71 3.36873 12.6904 3.45123 12.6468L6.99966 10.7812L10.5481 12.6468C10.645 12.6984 10.7575 12.7156 10.8653 12.6968C11.1372 12.65 11.32 12.3921 11.2731 12.1203L10.595 8.16871L13.4653 5.37027C13.5434 5.29371 13.595 5.19371 13.6106 5.08433C13.6528 4.81089 13.4622 4.55777 13.1887 4.51714Z"
                                                            fill="#FF6500" />
                                                    </svg></span>
                                                <span class="mr-[4px]">
                                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M2.35262 12.85C2.32978 12.9478 2.32937 13.0495 2.35142 13.1474C2.37347 13.2454 2.41741 13.3371 2.47994 13.4157C2.54248 13.4942 2.62198 13.5576 2.7125 13.6011C2.80302 13.6446 2.90221 13.667 3.00262 13.6667C3.13431 13.6667 3.26306 13.6277 3.37262 13.5547L7.00262 11.1347L10.6326 13.5547C10.7462 13.6301 10.8801 13.6689 11.0164 13.6659C11.1527 13.6629 11.2847 13.6183 11.3949 13.538C11.505 13.4577 11.5879 13.3456 11.6325 13.2167C11.677 13.0879 11.681 12.9485 11.644 12.8173L10.4246 8.55068L13.4486 5.82934C13.5455 5.74214 13.6146 5.62845 13.6476 5.50235C13.6805 5.37625 13.6757 5.24326 13.6339 5.11984C13.592 4.99641 13.5149 4.88796 13.4121 4.80789C13.3093 4.72783 13.1852 4.67966 13.0553 4.66934L9.25462 4.36668L7.60995 0.72601C7.55758 0.608751 7.47238 0.509157 7.36465 0.439248C7.25692 0.369339 7.13126 0.332102 7.00284 0.332031C6.87441 0.331961 6.74871 0.36906 6.6409 0.438851C6.5331 0.508642 6.44779 0.608142 6.39529 0.725343L4.75062 4.36668L0.949955 4.66868C0.822259 4.67879 0.70018 4.72548 0.598325 4.80316C0.49647 4.88084 0.41915 4.98622 0.375617 5.1067C0.332084 5.22717 0.32418 5.35763 0.352852 5.48248C0.381523 5.60733 0.445556 5.72127 0.537288 5.81068L3.34662 8.54868L2.35262 12.85ZM7.00262 2.61934L8.36395 5.63334L8.75595 5.66468H8.75662L11.4046 5.87468L9.22395 7.83734L9.22329 7.83868L8.91462 8.11601L9.02862 8.51401V8.51601L9.86395 11.4393L7.00262 9.53201V2.61934Z"
                                                            fill="#FF6500" />
                                                    </svg>
                                                </span>
                                                <span class="ml-[20px] text-sm">(320 Reviews)</span>
                                            </div>
                                        </li>
                                        <li class="flex flex-wrap items-center justify-between pb-[25px] mb-[25px] border-b border-[#016450]">
                                            <div class="flex flex-wrap mb-[20px] sm:mb-[0px] md:mb-[20px]">
                                                <img class="self-start mr-[40px]" src="{{url('')}}/assets/images/icon/medist.png" loading="lazy" width="54" height="68" alt="logo">
                                                <div class="flex-1">
                                                    <h4 class="text-primary font-lora text-[16px] leading-none mb-[5px]">
                                                        Mediset Hospital Ltd.</h4>
                                                    <span class="text-[13px] leading-none">(0.5 km distance)</span>
                                                </div>
                                            </div>


                                            <div class="flex flex-wrap items-center">
                                                <span class="mr-[4px]"><svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.1887 4.51714L9.22154 3.94058L7.4481 0.345269C7.39966 0.246832 7.31997 0.167144 7.22154 0.118707C6.97466 -0.00316805 6.67466 0.0983945 6.55122 0.345269L4.77779 3.94058L0.810601 4.51714C0.701226 4.53277 0.601226 4.58433 0.524663 4.66246C0.432103 4.75759 0.381099 4.88558 0.382856 5.0183C0.384614 5.15103 0.438991 5.27762 0.534038 5.37027L3.40435 8.16871L2.72623 12.1203C2.71032 12.2122 2.72049 12.3067 2.75559 12.3932C2.79068 12.4796 2.84929 12.5545 2.92477 12.6093C3.00025 12.6641 3.08958 12.6967 3.18263 12.7033C3.27568 12.71 3.36873 12.6904 3.45123 12.6468L6.99966 10.7812L10.5481 12.6468C10.645 12.6984 10.7575 12.7156 10.8653 12.6968C11.1372 12.65 11.32 12.3921 11.2731 12.1203L10.595 8.16871L13.4653 5.37027C13.5434 5.29371 13.595 5.19371 13.6106 5.08433C13.6528 4.81089 13.4622 4.55777 13.1887 4.51714Z"
                                                            fill="#FF6500" />
                                                    </svg></span>
                                                <span class="mr-[4px]"><svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.1887 4.51714L9.22154 3.94058L7.4481 0.345269C7.39966 0.246832 7.31997 0.167144 7.22154 0.118707C6.97466 -0.00316805 6.67466 0.0983945 6.55122 0.345269L4.77779 3.94058L0.810601 4.51714C0.701226 4.53277 0.601226 4.58433 0.524663 4.66246C0.432103 4.75759 0.381099 4.88558 0.382856 5.0183C0.384614 5.15103 0.438991 5.27762 0.534038 5.37027L3.40435 8.16871L2.72623 12.1203C2.71032 12.2122 2.72049 12.3067 2.75559 12.3932C2.79068 12.4796 2.84929 12.5545 2.92477 12.6093C3.00025 12.6641 3.08958 12.6967 3.18263 12.7033C3.27568 12.71 3.36873 12.6904 3.45123 12.6468L6.99966 10.7812L10.5481 12.6468C10.645 12.6984 10.7575 12.7156 10.8653 12.6968C11.1372 12.65 11.32 12.3921 11.2731 12.1203L10.595 8.16871L13.4653 5.37027C13.5434 5.29371 13.595 5.19371 13.6106 5.08433C13.6528 4.81089 13.4622 4.55777 13.1887 4.51714Z"
                                                            fill="#FF6500" />
                                                    </svg></span>
                                                <span class="mr-[4px]"><svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.1887 4.51714L9.22154 3.94058L7.4481 0.345269C7.39966 0.246832 7.31997 0.167144 7.22154 0.118707C6.97466 -0.00316805 6.67466 0.0983945 6.55122 0.345269L4.77779 3.94058L0.810601 4.51714C0.701226 4.53277 0.601226 4.58433 0.524663 4.66246C0.432103 4.75759 0.381099 4.88558 0.382856 5.0183C0.384614 5.15103 0.438991 5.27762 0.534038 5.37027L3.40435 8.16871L2.72623 12.1203C2.71032 12.2122 2.72049 12.3067 2.75559 12.3932C2.79068 12.4796 2.84929 12.5545 2.92477 12.6093C3.00025 12.6641 3.08958 12.6967 3.18263 12.7033C3.27568 12.71 3.36873 12.6904 3.45123 12.6468L6.99966 10.7812L10.5481 12.6468C10.645 12.6984 10.7575 12.7156 10.8653 12.6968C11.1372 12.65 11.32 12.3921 11.2731 12.1203L10.595 8.16871L13.4653 5.37027C13.5434 5.29371 13.595 5.19371 13.6106 5.08433C13.6528 4.81089 13.4622 4.55777 13.1887 4.51714Z"
                                                            fill="#FF6500" />
                                                    </svg></span>
                                                <span class="mr-[4px]"><svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.1887 4.51714L9.22154 3.94058L7.4481 0.345269C7.39966 0.246832 7.31997 0.167144 7.22154 0.118707C6.97466 -0.00316805 6.67466 0.0983945 6.55122 0.345269L4.77779 3.94058L0.810601 4.51714C0.701226 4.53277 0.601226 4.58433 0.524663 4.66246C0.432103 4.75759 0.381099 4.88558 0.382856 5.0183C0.384614 5.15103 0.438991 5.27762 0.534038 5.37027L3.40435 8.16871L2.72623 12.1203C2.71032 12.2122 2.72049 12.3067 2.75559 12.3932C2.79068 12.4796 2.84929 12.5545 2.92477 12.6093C3.00025 12.6641 3.08958 12.6967 3.18263 12.7033C3.27568 12.71 3.36873 12.6904 3.45123 12.6468L6.99966 10.7812L10.5481 12.6468C10.645 12.6984 10.7575 12.7156 10.8653 12.6968C11.1372 12.65 11.32 12.3921 11.2731 12.1203L10.595 8.16871L13.4653 5.37027C13.5434 5.29371 13.595 5.19371 13.6106 5.08433C13.6528 4.81089 13.4622 4.55777 13.1887 4.51714Z"
                                                            fill="#FF6500" />
                                                    </svg></span>
                                                <span class="mr-[4px]"><svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.1887 4.51714L9.22154 3.94058L7.4481 0.345269C7.39966 0.246832 7.31997 0.167144 7.22154 0.118707C6.97466 -0.00316805 6.67466 0.0983945 6.55122 0.345269L4.77779 3.94058L0.810601 4.51714C0.701226 4.53277 0.601226 4.58433 0.524663 4.66246C0.432103 4.75759 0.381099 4.88558 0.382856 5.0183C0.384614 5.15103 0.438991 5.27762 0.534038 5.37027L3.40435 8.16871L2.72623 12.1203C2.71032 12.2122 2.72049 12.3067 2.75559 12.3932C2.79068 12.4796 2.84929 12.5545 2.92477 12.6093C3.00025 12.6641 3.08958 12.6967 3.18263 12.7033C3.27568 12.71 3.36873 12.6904 3.45123 12.6468L6.99966 10.7812L10.5481 12.6468C10.645 12.6984 10.7575 12.7156 10.8653 12.6968C11.1372 12.65 11.32 12.3921 11.2731 12.1203L10.595 8.16871L13.4653 5.37027C13.5434 5.29371 13.595 5.19371 13.6106 5.08433C13.6528 4.81089 13.4622 4.55777 13.1887 4.51714Z"
                                                            fill="#FF6500" />
                                                    </svg></span>
                                                <span class="ml-[20px] text-sm">(320 Reviews)</span>
                                            </div>
                                        </li>

                                        <li class="flex flex-wrap items-center justify-between">
                                            <div class="flex flex-wrap mb-[20px] sm:mb-[0px] md:mb-[20px]">
                                                <img class="self-start mr-[40px]" src="{{url('')}}/assets/images/icon/medihealth.png" loading="lazy" width="56" height="66" alt="logo">
                                                <div class="flex-1">
                                                    <h4 class="text-primary font-lora text-[16px] leading-none mb-[5px]">
                                                        Mediset Hospital Ltd.</h4>
                                                    <span class="text-[13px] leading-none">(0.5 km distance)</span>
                                                </div>
                                            </div>


                                            <div class="flex flex-wrap items-center">
                                                <span class="mr-[4px]"><svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.1887 4.51714L9.22154 3.94058L7.4481 0.345269C7.39966 0.246832 7.31997 0.167144 7.22154 0.118707C6.97466 -0.00316805 6.67466 0.0983945 6.55122 0.345269L4.77779 3.94058L0.810601 4.51714C0.701226 4.53277 0.601226 4.58433 0.524663 4.66246C0.432103 4.75759 0.381099 4.88558 0.382856 5.0183C0.384614 5.15103 0.438991 5.27762 0.534038 5.37027L3.40435 8.16871L2.72623 12.1203C2.71032 12.2122 2.72049 12.3067 2.75559 12.3932C2.79068 12.4796 2.84929 12.5545 2.92477 12.6093C3.00025 12.6641 3.08958 12.6967 3.18263 12.7033C3.27568 12.71 3.36873 12.6904 3.45123 12.6468L6.99966 10.7812L10.5481 12.6468C10.645 12.6984 10.7575 12.7156 10.8653 12.6968C11.1372 12.65 11.32 12.3921 11.2731 12.1203L10.595 8.16871L13.4653 5.37027C13.5434 5.29371 13.595 5.19371 13.6106 5.08433C13.6528 4.81089 13.4622 4.55777 13.1887 4.51714Z"
                                                            fill="#FF6500" />
                                                    </svg></span>
                                                <span class="mr-[4px]"><svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.1887 4.51714L9.22154 3.94058L7.4481 0.345269C7.39966 0.246832 7.31997 0.167144 7.22154 0.118707C6.97466 -0.00316805 6.67466 0.0983945 6.55122 0.345269L4.77779 3.94058L0.810601 4.51714C0.701226 4.53277 0.601226 4.58433 0.524663 4.66246C0.432103 4.75759 0.381099 4.88558 0.382856 5.0183C0.384614 5.15103 0.438991 5.27762 0.534038 5.37027L3.40435 8.16871L2.72623 12.1203C2.71032 12.2122 2.72049 12.3067 2.75559 12.3932C2.79068 12.4796 2.84929 12.5545 2.92477 12.6093C3.00025 12.6641 3.08958 12.6967 3.18263 12.7033C3.27568 12.71 3.36873 12.6904 3.45123 12.6468L6.99966 10.7812L10.5481 12.6468C10.645 12.6984 10.7575 12.7156 10.8653 12.6968C11.1372 12.65 11.32 12.3921 11.2731 12.1203L10.595 8.16871L13.4653 5.37027C13.5434 5.29371 13.595 5.19371 13.6106 5.08433C13.6528 4.81089 13.4622 4.55777 13.1887 4.51714Z"
                                                            fill="#FF6500" />
                                                    </svg></span>
                                                <span class="mr-[4px]"><svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.1887 4.51714L9.22154 3.94058L7.4481 0.345269C7.39966 0.246832 7.31997 0.167144 7.22154 0.118707C6.97466 -0.00316805 6.67466 0.0983945 6.55122 0.345269L4.77779 3.94058L0.810601 4.51714C0.701226 4.53277 0.601226 4.58433 0.524663 4.66246C0.432103 4.75759 0.381099 4.88558 0.382856 5.0183C0.384614 5.15103 0.438991 5.27762 0.534038 5.37027L3.40435 8.16871L2.72623 12.1203C2.71032 12.2122 2.72049 12.3067 2.75559 12.3932C2.79068 12.4796 2.84929 12.5545 2.92477 12.6093C3.00025 12.6641 3.08958 12.6967 3.18263 12.7033C3.27568 12.71 3.36873 12.6904 3.45123 12.6468L6.99966 10.7812L10.5481 12.6468C10.645 12.6984 10.7575 12.7156 10.8653 12.6968C11.1372 12.65 11.32 12.3921 11.2731 12.1203L10.595 8.16871L13.4653 5.37027C13.5434 5.29371 13.595 5.19371 13.6106 5.08433C13.6528 4.81089 13.4622 4.55777 13.1887 4.51714Z"
                                                            fill="#FF6500" />
                                                    </svg></span>
                                                <span class="mr-[4px]"><svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.1887 4.51714L9.22154 3.94058L7.4481 0.345269C7.39966 0.246832 7.31997 0.167144 7.22154 0.118707C6.97466 -0.00316805 6.67466 0.0983945 6.55122 0.345269L4.77779 3.94058L0.810601 4.51714C0.701226 4.53277 0.601226 4.58433 0.524663 4.66246C0.432103 4.75759 0.381099 4.88558 0.382856 5.0183C0.384614 5.15103 0.438991 5.27762 0.534038 5.37027L3.40435 8.16871L2.72623 12.1203C2.71032 12.2122 2.72049 12.3067 2.75559 12.3932C2.79068 12.4796 2.84929 12.5545 2.92477 12.6093C3.00025 12.6641 3.08958 12.6967 3.18263 12.7033C3.27568 12.71 3.36873 12.6904 3.45123 12.6468L6.99966 10.7812L10.5481 12.6468C10.645 12.6984 10.7575 12.7156 10.8653 12.6968C11.1372 12.65 11.32 12.3921 11.2731 12.1203L10.595 8.16871L13.4653 5.37027C13.5434 5.29371 13.595 5.19371 13.6106 5.08433C13.6528 4.81089 13.4622 4.55777 13.1887 4.51714Z"
                                                            fill="#FF6500" />
                                                    </svg></span>
                                                <span class="mr-[4px]">
                                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M2.35262 12.85C2.32978 12.9478 2.32937 13.0495 2.35142 13.1474C2.37347 13.2454 2.41741 13.3371 2.47994 13.4157C2.54248 13.4942 2.62198 13.5576 2.7125 13.6011C2.80302 13.6446 2.90221 13.667 3.00262 13.6667C3.13431 13.6667 3.26306 13.6277 3.37262 13.5547L7.00262 11.1347L10.6326 13.5547C10.7462 13.6301 10.8801 13.6689 11.0164 13.6659C11.1527 13.6629 11.2847 13.6183 11.3949 13.538C11.505 13.4577 11.5879 13.3456 11.6325 13.2167C11.677 13.0879 11.681 12.9485 11.644 12.8173L10.4246 8.55068L13.4486 5.82934C13.5455 5.74214 13.6146 5.62845 13.6476 5.50235C13.6805 5.37625 13.6757 5.24326 13.6339 5.11984C13.592 4.99641 13.5149 4.88796 13.4121 4.80789C13.3093 4.72783 13.1852 4.67966 13.0553 4.66934L9.25462 4.36668L7.60995 0.72601C7.55758 0.608751 7.47238 0.509157 7.36465 0.439248C7.25692 0.369339 7.13126 0.332102 7.00284 0.332031C6.87441 0.331961 6.74871 0.36906 6.6409 0.438851C6.5331 0.508642 6.44779 0.608142 6.39529 0.725343L4.75062 4.36668L0.949955 4.66868C0.822259 4.67879 0.70018 4.72548 0.598325 4.80316C0.49647 4.88084 0.41915 4.98622 0.375617 5.1067C0.332084 5.22717 0.32418 5.35763 0.352852 5.48248C0.381523 5.60733 0.445556 5.72127 0.537288 5.81068L3.34662 8.54868L2.35262 12.85ZM7.00262 2.61934L8.36395 5.63334L8.75595 5.66468H8.75662L11.4046 5.87468L9.22395 7.83734L9.22329 7.83868L8.91462 8.11601L9.02862 8.51401V8.51601L9.86395 11.4393L7.00262 9.53201V2.61934Z"
                                                            fill="#FF6500" />
                                                    </svg>
                                                </span>
                                                <span class="ml-[20px] text-sm">(320 Reviews)</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div id="co-living" class="properties-tab-content">
                                    <ul>
                                        <li class="flex flex-wrap items-center justify-between pb-[25px] mb-[25px] border-b border-[#016450]">
                                            <div class="flex flex-wrap mb-[20px] sm:mb-[0px] md:mb-[20px]">
                                                <img class="self-start mr-[40px]" src="{{url('')}}/assets/images/icon/medist.png" loading="lazy" width="54" height="68" alt="logo">
                                                <div class="flex-1">
                                                    <h4 class="text-primary font-lora text-[16px] leading-none mb-[5px]">
                                                        Mediset Hospital Ltd.</h4>
                                                    <span class="text-[13px] leading-none">(0.5 km distance)</span>
                                                </div>
                                            </div>


                                            <div class="flex flex-wrap items-center">
                                                <span class="mr-[4px]"><svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.1887 4.51714L9.22154 3.94058L7.4481 0.345269C7.39966 0.246832 7.31997 0.167144 7.22154 0.118707C6.97466 -0.00316805 6.67466 0.0983945 6.55122 0.345269L4.77779 3.94058L0.810601 4.51714C0.701226 4.53277 0.601226 4.58433 0.524663 4.66246C0.432103 4.75759 0.381099 4.88558 0.382856 5.0183C0.384614 5.15103 0.438991 5.27762 0.534038 5.37027L3.40435 8.16871L2.72623 12.1203C2.71032 12.2122 2.72049 12.3067 2.75559 12.3932C2.79068 12.4796 2.84929 12.5545 2.92477 12.6093C3.00025 12.6641 3.08958 12.6967 3.18263 12.7033C3.27568 12.71 3.36873 12.6904 3.45123 12.6468L6.99966 10.7812L10.5481 12.6468C10.645 12.6984 10.7575 12.7156 10.8653 12.6968C11.1372 12.65 11.32 12.3921 11.2731 12.1203L10.595 8.16871L13.4653 5.37027C13.5434 5.29371 13.595 5.19371 13.6106 5.08433C13.6528 4.81089 13.4622 4.55777 13.1887 4.51714Z"
                                                            fill="#FF6500" />
                                                    </svg></span>
                                                <span class="mr-[4px]"><svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.1887 4.51714L9.22154 3.94058L7.4481 0.345269C7.39966 0.246832 7.31997 0.167144 7.22154 0.118707C6.97466 -0.00316805 6.67466 0.0983945 6.55122 0.345269L4.77779 3.94058L0.810601 4.51714C0.701226 4.53277 0.601226 4.58433 0.524663 4.66246C0.432103 4.75759 0.381099 4.88558 0.382856 5.0183C0.384614 5.15103 0.438991 5.27762 0.534038 5.37027L3.40435 8.16871L2.72623 12.1203C2.71032 12.2122 2.72049 12.3067 2.75559 12.3932C2.79068 12.4796 2.84929 12.5545 2.92477 12.6093C3.00025 12.6641 3.08958 12.6967 3.18263 12.7033C3.27568 12.71 3.36873 12.6904 3.45123 12.6468L6.99966 10.7812L10.5481 12.6468C10.645 12.6984 10.7575 12.7156 10.8653 12.6968C11.1372 12.65 11.32 12.3921 11.2731 12.1203L10.595 8.16871L13.4653 5.37027C13.5434 5.29371 13.595 5.19371 13.6106 5.08433C13.6528 4.81089 13.4622 4.55777 13.1887 4.51714Z"
                                                            fill="#FF6500" />
                                                    </svg></span>
                                                <span class="mr-[4px]"><svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.1887 4.51714L9.22154 3.94058L7.4481 0.345269C7.39966 0.246832 7.31997 0.167144 7.22154 0.118707C6.97466 -0.00316805 6.67466 0.0983945 6.55122 0.345269L4.77779 3.94058L0.810601 4.51714C0.701226 4.53277 0.601226 4.58433 0.524663 4.66246C0.432103 4.75759 0.381099 4.88558 0.382856 5.0183C0.384614 5.15103 0.438991 5.27762 0.534038 5.37027L3.40435 8.16871L2.72623 12.1203C2.71032 12.2122 2.72049 12.3067 2.75559 12.3932C2.79068 12.4796 2.84929 12.5545 2.92477 12.6093C3.00025 12.6641 3.08958 12.6967 3.18263 12.7033C3.27568 12.71 3.36873 12.6904 3.45123 12.6468L6.99966 10.7812L10.5481 12.6468C10.645 12.6984 10.7575 12.7156 10.8653 12.6968C11.1372 12.65 11.32 12.3921 11.2731 12.1203L10.595 8.16871L13.4653 5.37027C13.5434 5.29371 13.595 5.19371 13.6106 5.08433C13.6528 4.81089 13.4622 4.55777 13.1887 4.51714Z"
                                                            fill="#FF6500" />
                                                    </svg></span>
                                                <span class="mr-[4px]"><svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.1887 4.51714L9.22154 3.94058L7.4481 0.345269C7.39966 0.246832 7.31997 0.167144 7.22154 0.118707C6.97466 -0.00316805 6.67466 0.0983945 6.55122 0.345269L4.77779 3.94058L0.810601 4.51714C0.701226 4.53277 0.601226 4.58433 0.524663 4.66246C0.432103 4.75759 0.381099 4.88558 0.382856 5.0183C0.384614 5.15103 0.438991 5.27762 0.534038 5.37027L3.40435 8.16871L2.72623 12.1203C2.71032 12.2122 2.72049 12.3067 2.75559 12.3932C2.79068 12.4796 2.84929 12.5545 2.92477 12.6093C3.00025 12.6641 3.08958 12.6967 3.18263 12.7033C3.27568 12.71 3.36873 12.6904 3.45123 12.6468L6.99966 10.7812L10.5481 12.6468C10.645 12.6984 10.7575 12.7156 10.8653 12.6968C11.1372 12.65 11.32 12.3921 11.2731 12.1203L10.595 8.16871L13.4653 5.37027C13.5434 5.29371 13.595 5.19371 13.6106 5.08433C13.6528 4.81089 13.4622 4.55777 13.1887 4.51714Z"
                                                            fill="#FF6500" />
                                                    </svg></span>
                                                <span class="mr-[4px]"><svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.1887 4.51714L9.22154 3.94058L7.4481 0.345269C7.39966 0.246832 7.31997 0.167144 7.22154 0.118707C6.97466 -0.00316805 6.67466 0.0983945 6.55122 0.345269L4.77779 3.94058L0.810601 4.51714C0.701226 4.53277 0.601226 4.58433 0.524663 4.66246C0.432103 4.75759 0.381099 4.88558 0.382856 5.0183C0.384614 5.15103 0.438991 5.27762 0.534038 5.37027L3.40435 8.16871L2.72623 12.1203C2.71032 12.2122 2.72049 12.3067 2.75559 12.3932C2.79068 12.4796 2.84929 12.5545 2.92477 12.6093C3.00025 12.6641 3.08958 12.6967 3.18263 12.7033C3.27568 12.71 3.36873 12.6904 3.45123 12.6468L6.99966 10.7812L10.5481 12.6468C10.645 12.6984 10.7575 12.7156 10.8653 12.6968C11.1372 12.65 11.32 12.3921 11.2731 12.1203L10.595 8.16871L13.4653 5.37027C13.5434 5.29371 13.595 5.19371 13.6106 5.08433C13.6528 4.81089 13.4622 4.55777 13.1887 4.51714Z"
                                                            fill="#FF6500" />
                                                    </svg></span>
                                                <span class="ml-[20px] text-sm">(320 Reviews)</span>
                                            </div>
                                        </li>
                                        <li class="flex flex-wrap items-center justify-between pb-[25px] mb-[25px] border-b border-[#016450]">
                                            <div class="flex flex-wrap mb-[20px] sm:mb-[0px] md:mb-[20px]">
                                                <img class="self-start mr-[40px]" src="{{url('')}}/assets/images/icon/healthcare.png" loading="lazy" width="63" height="68" alt="logo">
                                                <div class="flex-1">
                                                    <h4 class="text-primary font-lora text-[16px] leading-none mb-[5px]">
                                                        Mediset Hospital Ltd.</h4>
                                                    <span class="text-[13px] leading-none">(0.5 km distance)</span>
                                                </div>
                                            </div>


                                            <div class="flex flex-wrap items-center">
                                                <span class="mr-[4px]"><svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.1887 4.51714L9.22154 3.94058L7.4481 0.345269C7.39966 0.246832 7.31997 0.167144 7.22154 0.118707C6.97466 -0.00316805 6.67466 0.0983945 6.55122 0.345269L4.77779 3.94058L0.810601 4.51714C0.701226 4.53277 0.601226 4.58433 0.524663 4.66246C0.432103 4.75759 0.381099 4.88558 0.382856 5.0183C0.384614 5.15103 0.438991 5.27762 0.534038 5.37027L3.40435 8.16871L2.72623 12.1203C2.71032 12.2122 2.72049 12.3067 2.75559 12.3932C2.79068 12.4796 2.84929 12.5545 2.92477 12.6093C3.00025 12.6641 3.08958 12.6967 3.18263 12.7033C3.27568 12.71 3.36873 12.6904 3.45123 12.6468L6.99966 10.7812L10.5481 12.6468C10.645 12.6984 10.7575 12.7156 10.8653 12.6968C11.1372 12.65 11.32 12.3921 11.2731 12.1203L10.595 8.16871L13.4653 5.37027C13.5434 5.29371 13.595 5.19371 13.6106 5.08433C13.6528 4.81089 13.4622 4.55777 13.1887 4.51714Z"
                                                            fill="#FF6500" />
                                                    </svg></span>
                                                <span class="mr-[4px]"><svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.1887 4.51714L9.22154 3.94058L7.4481 0.345269C7.39966 0.246832 7.31997 0.167144 7.22154 0.118707C6.97466 -0.00316805 6.67466 0.0983945 6.55122 0.345269L4.77779 3.94058L0.810601 4.51714C0.701226 4.53277 0.601226 4.58433 0.524663 4.66246C0.432103 4.75759 0.381099 4.88558 0.382856 5.0183C0.384614 5.15103 0.438991 5.27762 0.534038 5.37027L3.40435 8.16871L2.72623 12.1203C2.71032 12.2122 2.72049 12.3067 2.75559 12.3932C2.79068 12.4796 2.84929 12.5545 2.92477 12.6093C3.00025 12.6641 3.08958 12.6967 3.18263 12.7033C3.27568 12.71 3.36873 12.6904 3.45123 12.6468L6.99966 10.7812L10.5481 12.6468C10.645 12.6984 10.7575 12.7156 10.8653 12.6968C11.1372 12.65 11.32 12.3921 11.2731 12.1203L10.595 8.16871L13.4653 5.37027C13.5434 5.29371 13.595 5.19371 13.6106 5.08433C13.6528 4.81089 13.4622 4.55777 13.1887 4.51714Z"
                                                            fill="#FF6500" />
                                                    </svg></span>
                                                <span class="mr-[4px]"><svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.1887 4.51714L9.22154 3.94058L7.4481 0.345269C7.39966 0.246832 7.31997 0.167144 7.22154 0.118707C6.97466 -0.00316805 6.67466 0.0983945 6.55122 0.345269L4.77779 3.94058L0.810601 4.51714C0.701226 4.53277 0.601226 4.58433 0.524663 4.66246C0.432103 4.75759 0.381099 4.88558 0.382856 5.0183C0.384614 5.15103 0.438991 5.27762 0.534038 5.37027L3.40435 8.16871L2.72623 12.1203C2.71032 12.2122 2.72049 12.3067 2.75559 12.3932C2.79068 12.4796 2.84929 12.5545 2.92477 12.6093C3.00025 12.6641 3.08958 12.6967 3.18263 12.7033C3.27568 12.71 3.36873 12.6904 3.45123 12.6468L6.99966 10.7812L10.5481 12.6468C10.645 12.6984 10.7575 12.7156 10.8653 12.6968C11.1372 12.65 11.32 12.3921 11.2731 12.1203L10.595 8.16871L13.4653 5.37027C13.5434 5.29371 13.595 5.19371 13.6106 5.08433C13.6528 4.81089 13.4622 4.55777 13.1887 4.51714Z"
                                                            fill="#FF6500" />
                                                    </svg></span>
                                                <span class="mr-[4px]"><svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.1887 4.51714L9.22154 3.94058L7.4481 0.345269C7.39966 0.246832 7.31997 0.167144 7.22154 0.118707C6.97466 -0.00316805 6.67466 0.0983945 6.55122 0.345269L4.77779 3.94058L0.810601 4.51714C0.701226 4.53277 0.601226 4.58433 0.524663 4.66246C0.432103 4.75759 0.381099 4.88558 0.382856 5.0183C0.384614 5.15103 0.438991 5.27762 0.534038 5.37027L3.40435 8.16871L2.72623 12.1203C2.71032 12.2122 2.72049 12.3067 2.75559 12.3932C2.79068 12.4796 2.84929 12.5545 2.92477 12.6093C3.00025 12.6641 3.08958 12.6967 3.18263 12.7033C3.27568 12.71 3.36873 12.6904 3.45123 12.6468L6.99966 10.7812L10.5481 12.6468C10.645 12.6984 10.7575 12.7156 10.8653 12.6968C11.1372 12.65 11.32 12.3921 11.2731 12.1203L10.595 8.16871L13.4653 5.37027C13.5434 5.29371 13.595 5.19371 13.6106 5.08433C13.6528 4.81089 13.4622 4.55777 13.1887 4.51714Z"
                                                            fill="#FF6500" />
                                                    </svg></span>
                                                <span class="mr-[4px]">
                                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M2.35262 12.85C2.32978 12.9478 2.32937 13.0495 2.35142 13.1474C2.37347 13.2454 2.41741 13.3371 2.47994 13.4157C2.54248 13.4942 2.62198 13.5576 2.7125 13.6011C2.80302 13.6446 2.90221 13.667 3.00262 13.6667C3.13431 13.6667 3.26306 13.6277 3.37262 13.5547L7.00262 11.1347L10.6326 13.5547C10.7462 13.6301 10.8801 13.6689 11.0164 13.6659C11.1527 13.6629 11.2847 13.6183 11.3949 13.538C11.505 13.4577 11.5879 13.3456 11.6325 13.2167C11.677 13.0879 11.681 12.9485 11.644 12.8173L10.4246 8.55068L13.4486 5.82934C13.5455 5.74214 13.6146 5.62845 13.6476 5.50235C13.6805 5.37625 13.6757 5.24326 13.6339 5.11984C13.592 4.99641 13.5149 4.88796 13.4121 4.80789C13.3093 4.72783 13.1852 4.67966 13.0553 4.66934L9.25462 4.36668L7.60995 0.72601C7.55758 0.608751 7.47238 0.509157 7.36465 0.439248C7.25692 0.369339 7.13126 0.332102 7.00284 0.332031C6.87441 0.331961 6.74871 0.36906 6.6409 0.438851C6.5331 0.508642 6.44779 0.608142 6.39529 0.725343L4.75062 4.36668L0.949955 4.66868C0.822259 4.67879 0.70018 4.72548 0.598325 4.80316C0.49647 4.88084 0.41915 4.98622 0.375617 5.1067C0.332084 5.22717 0.32418 5.35763 0.352852 5.48248C0.381523 5.60733 0.445556 5.72127 0.537288 5.81068L3.34662 8.54868L2.35262 12.85ZM7.00262 2.61934L8.36395 5.63334L8.75595 5.66468H8.75662L11.4046 5.87468L9.22395 7.83734L9.22329 7.83868L8.91462 8.11601L9.02862 8.51401V8.51601L9.86395 11.4393L7.00262 9.53201V2.61934Z"
                                                            fill="#FF6500" />
                                                    </svg>
                                                </span>
                                                <span class="ml-[20px] text-sm">(320 Reviews)</span>
                                            </div>
                                        </li>
                                        <li class="flex flex-wrap items-center justify-between">
                                            <div class="flex flex-wrap mb-[20px] sm:mb-[0px] md:mb-[20px]">
                                                <img class="self-start mr-[40px]" src="{{url('')}}/assets/images/icon/medihealth.png" loading="lazy" width="56" height="66" alt="logo">
                                                <div class="flex-1">
                                                    <h4 class="text-primary font-lora text-[16px] leading-none mb-[5px]">
                                                        Mediset Hospital Ltd.</h4>
                                                    <span class="text-[13px] leading-none">(0.5 km distance)</span>
                                                </div>
                                            </div>


                                            <div class="flex flex-wrap items-center">
                                                <span class="mr-[4px]"><svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.1887 4.51714L9.22154 3.94058L7.4481 0.345269C7.39966 0.246832 7.31997 0.167144 7.22154 0.118707C6.97466 -0.00316805 6.67466 0.0983945 6.55122 0.345269L4.77779 3.94058L0.810601 4.51714C0.701226 4.53277 0.601226 4.58433 0.524663 4.66246C0.432103 4.75759 0.381099 4.88558 0.382856 5.0183C0.384614 5.15103 0.438991 5.27762 0.534038 5.37027L3.40435 8.16871L2.72623 12.1203C2.71032 12.2122 2.72049 12.3067 2.75559 12.3932C2.79068 12.4796 2.84929 12.5545 2.92477 12.6093C3.00025 12.6641 3.08958 12.6967 3.18263 12.7033C3.27568 12.71 3.36873 12.6904 3.45123 12.6468L6.99966 10.7812L10.5481 12.6468C10.645 12.6984 10.7575 12.7156 10.8653 12.6968C11.1372 12.65 11.32 12.3921 11.2731 12.1203L10.595 8.16871L13.4653 5.37027C13.5434 5.29371 13.595 5.19371 13.6106 5.08433C13.6528 4.81089 13.4622 4.55777 13.1887 4.51714Z"
                                                            fill="#FF6500" />
                                                    </svg></span>
                                                <span class="mr-[4px]"><svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.1887 4.51714L9.22154 3.94058L7.4481 0.345269C7.39966 0.246832 7.31997 0.167144 7.22154 0.118707C6.97466 -0.00316805 6.67466 0.0983945 6.55122 0.345269L4.77779 3.94058L0.810601 4.51714C0.701226 4.53277 0.601226 4.58433 0.524663 4.66246C0.432103 4.75759 0.381099 4.88558 0.382856 5.0183C0.384614 5.15103 0.438991 5.27762 0.534038 5.37027L3.40435 8.16871L2.72623 12.1203C2.71032 12.2122 2.72049 12.3067 2.75559 12.3932C2.79068 12.4796 2.84929 12.5545 2.92477 12.6093C3.00025 12.6641 3.08958 12.6967 3.18263 12.7033C3.27568 12.71 3.36873 12.6904 3.45123 12.6468L6.99966 10.7812L10.5481 12.6468C10.645 12.6984 10.7575 12.7156 10.8653 12.6968C11.1372 12.65 11.32 12.3921 11.2731 12.1203L10.595 8.16871L13.4653 5.37027C13.5434 5.29371 13.595 5.19371 13.6106 5.08433C13.6528 4.81089 13.4622 4.55777 13.1887 4.51714Z"
                                                            fill="#FF6500" />
                                                    </svg></span>
                                                <span class="mr-[4px]"><svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.1887 4.51714L9.22154 3.94058L7.4481 0.345269C7.39966 0.246832 7.31997 0.167144 7.22154 0.118707C6.97466 -0.00316805 6.67466 0.0983945 6.55122 0.345269L4.77779 3.94058L0.810601 4.51714C0.701226 4.53277 0.601226 4.58433 0.524663 4.66246C0.432103 4.75759 0.381099 4.88558 0.382856 5.0183C0.384614 5.15103 0.438991 5.27762 0.534038 5.37027L3.40435 8.16871L2.72623 12.1203C2.71032 12.2122 2.72049 12.3067 2.75559 12.3932C2.79068 12.4796 2.84929 12.5545 2.92477 12.6093C3.00025 12.6641 3.08958 12.6967 3.18263 12.7033C3.27568 12.71 3.36873 12.6904 3.45123 12.6468L6.99966 10.7812L10.5481 12.6468C10.645 12.6984 10.7575 12.7156 10.8653 12.6968C11.1372 12.65 11.32 12.3921 11.2731 12.1203L10.595 8.16871L13.4653 5.37027C13.5434 5.29371 13.595 5.19371 13.6106 5.08433C13.6528 4.81089 13.4622 4.55777 13.1887 4.51714Z"
                                                            fill="#FF6500" />
                                                    </svg></span>
                                                <span class="mr-[4px]"><svg width="14" height="13" viewBox="0 0 14 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.1887 4.51714L9.22154 3.94058L7.4481 0.345269C7.39966 0.246832 7.31997 0.167144 7.22154 0.118707C6.97466 -0.00316805 6.67466 0.0983945 6.55122 0.345269L4.77779 3.94058L0.810601 4.51714C0.701226 4.53277 0.601226 4.58433 0.524663 4.66246C0.432103 4.75759 0.381099 4.88558 0.382856 5.0183C0.384614 5.15103 0.438991 5.27762 0.534038 5.37027L3.40435 8.16871L2.72623 12.1203C2.71032 12.2122 2.72049 12.3067 2.75559 12.3932C2.79068 12.4796 2.84929 12.5545 2.92477 12.6093C3.00025 12.6641 3.08958 12.6967 3.18263 12.7033C3.27568 12.71 3.36873 12.6904 3.45123 12.6468L6.99966 10.7812L10.5481 12.6468C10.645 12.6984 10.7575 12.7156 10.8653 12.6968C11.1372 12.65 11.32 12.3921 11.2731 12.1203L10.595 8.16871L13.4653 5.37027C13.5434 5.29371 13.595 5.19371 13.6106 5.08433C13.6528 4.81089 13.4622 4.55777 13.1887 4.51714Z"
                                                            fill="#FF6500" />
                                                    </svg></span>
                                                <span class="mr-[4px]">
                                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M2.35262 12.85C2.32978 12.9478 2.32937 13.0495 2.35142 13.1474C2.37347 13.2454 2.41741 13.3371 2.47994 13.4157C2.54248 13.4942 2.62198 13.5576 2.7125 13.6011C2.80302 13.6446 2.90221 13.667 3.00262 13.6667C3.13431 13.6667 3.26306 13.6277 3.37262 13.5547L7.00262 11.1347L10.6326 13.5547C10.7462 13.6301 10.8801 13.6689 11.0164 13.6659C11.1527 13.6629 11.2847 13.6183 11.3949 13.538C11.505 13.4577 11.5879 13.3456 11.6325 13.2167C11.677 13.0879 11.681 12.9485 11.644 12.8173L10.4246 8.55068L13.4486 5.82934C13.5455 5.74214 13.6146 5.62845 13.6476 5.50235C13.6805 5.37625 13.6757 5.24326 13.6339 5.11984C13.592 4.99641 13.5149 4.88796 13.4121 4.80789C13.3093 4.72783 13.1852 4.67966 13.0553 4.66934L9.25462 4.36668L7.60995 0.72601C7.55758 0.608751 7.47238 0.509157 7.36465 0.439248C7.25692 0.369339 7.13126 0.332102 7.00284 0.332031C6.87441 0.331961 6.74871 0.36906 6.6409 0.438851C6.5331 0.508642 6.44779 0.608142 6.39529 0.725343L4.75062 4.36668L0.949955 4.66868C0.822259 4.67879 0.70018 4.72548 0.598325 4.80316C0.49647 4.88084 0.41915 4.98622 0.375617 5.1067C0.332084 5.22717 0.32418 5.35763 0.352852 5.48248C0.381523 5.60733 0.445556 5.72127 0.537288 5.81068L3.34662 8.54868L2.35262 12.85ZM7.00262 2.61934L8.36395 5.63334L8.75595 5.66468H8.75662L11.4046 5.87468L9.22395 7.83734L9.22329 7.83868L8.91462 8.11601L9.02862 8.51401V8.51601L9.86395 11.4393L7.00262 9.53201V2.61934Z"
                                                            fill="#FF6500" />
                                                    </svg>
                                                </span>
                                                <span class="ml-[20px] text-sm">(320 Reviews)</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
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

                                            <div class="swiper-slide text-center calendar{{$loop->iteration}} focus:border-blue-600 border " id="div-{{$loop->iteration}} lmao">
                                                <div class="overflow-hidden rounded-md bg-[#F0F0F0] text-center transition-all duration-300 hover:-translate-y-[5px] w-[100%] calendar1{{$loop->iteration}} he " >

                                                    <div class="py-[10px] px-[5px] ">
                                                        <h4><a href="javascript:" class="font-light text-[13px] xl:text-[13px] calendar ">
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
                                            <!--
                                            <div class="swiper-slide text-center ">
                                                <div class="overflow-hidden rounded-md bg-[#F0F0F0] text-center transition-all duration-300 hover:-translate-y-[5px] w-[100%]">

                                                    <div class="py-[10px] px-[5px]">
                                                        <h4><a href="#" class="font-light text-[14px] xl:text-[14px]">
                                                            <b>July</b>
                                                        </a></h4>
                                                        <h3><a href="#" class="font-lora leading-tight text-[25px] xl:text-[25px] text-primary font-medium">13</a></h3>
                                                        <h4><a href="#" class="font-light text-[14px] xl:text-[14px]">
                                                            <b>Wednesday</b>
                                                        </a></h4>
                                                   
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="swiper-slide text-center ">
                                                <div class="overflow-hidden rounded-md bg-[#F0F0F0] text-center transition-all duration-300 hover:-translate-y-[5px] w-[100%]">

                                                    <div class="py-[10px] px-[5px] ">
                                                        <h4><a href="#" class="font-light text-[14px] xl:text-[14px]">
                                                            <b>July</b>
                                                        </a></h4>
                                                        <h3><a href="#" class="font-lora leading-tight text-[25px] xl:text-[25px] text-primary font-medium">14</a></h3>
                                                        <h4><a href="#" class="font-light text-[14px] xl:text-[14px]">
                                                            <b>Thursday</b>
                                                        </a></h4>
                                                   
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="swiper-slide text-center ">
                                                <div class="overflow-hidden rounded-md bg-[#F0F0F0] text-center transition-all duration-300 hover:-translate-y-[5px] w-[100%]">

                                                    <div class="py-[10px] px-[5px] ">
                                                        <h4><a href="#" class="font-light text-[14px] xl:text-[14px]">
                                                            <b>July</b>
                                                        </a></h4>
                                                        <h3><a href="#" class="font-lora leading-tight text-[25px] xl:text-[25px] text-primary font-medium">15</a></h3>
                                                        <h4><a href="#" class="font-light text-[14px] xl:text-[14px]">
                                                            <b>Friday</b>
                                                        </a></h4>
                                                      
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="swiper-slide text-center ">
                                                <div class="overflow-hidden rounded-md bg-[#F0F0F0] text-center transition-all duration-300 hover:-translate-y-[5px] w-[100%]">

                                                    <div class="py-[10px] px-[5px] ">
                                                        <h4><a href="#" class="font-light text-[14px] xl:text-[14px]">
                                                            <b>July</b>
                                                        </a></h4>
                                                        <h3><a href="#" class="font-lora leading-tight text-[25px] xl:text-[25px] text-primary font-medium">16</a></h3>
                                                        <h4><a href="#" class="font-light text-[14px] xl:text-[14px]">
                                                            <b>Saturday</b>
                                                        </a></h4>
                                                  
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="swiper-slide text-center ">
                                                <div class="overflow-hidden rounded-md bg-[#F0F0F0] text-center transition-all duration-300 hover:-translate-y-[5px] w-[100%]">

                                                    <div class="py-[10px] px-[5px] ">
                                                        <h4><a href="#" class="font-light text-[14px] xl:text-[14px]">
                                                            <b>July</b>
                                                        </a></h4>
                                                        <h3><a href="#" class="font-lora leading-tight text-[25px] xl:text-[25px] text-primary font-medium">17</a></h3>
                                                        <h4><a href="#" class="font-light text-[14px] xl:text-[14px]">
                                                            <b>Sunday</b>
                                                        </a></h4>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="swiper-slide text-center ">
                                                <div class="overflow-hidden rounded-md bg-[#F0F0F0] text-center transition-all duration-300 hover:-translate-y-[5px] w-[100%]">

                                                    <div class="py-[10px] px-[5px] ">
                                                        <h4><a href="#" class="font-light text-[14px] xl:text-[14px]">
                                                            <b>July</b>
                                                        </a></h4>
                                                        <h3><a href="#" class="font-lora leading-tight text-[25px] xl:text-[25px] text-primary font-medium">18</a></h3>
                                                        <h4><a href="#" class="font-light text-[14px] xl:text-[14px]">
                                                            <b>Monday</b>
                                                        </a></h4>
                                                      
                                                    </div>
                                                </div>
                                            </div> -->

                                        </div><!-- 
                                        <div class="swiper-button-next" style="left: auto; color: grey; padding: 30px;"></div>
                                        <div class="swiper-button-prev" style="right: auto; color: grey; padding: 30px;"></div> -->
                                    </div>
                                </div>
                                <br>
                                

                                <h3 class="text-primary leading-none text-[20px] font-lora mb-[15px] font-medium"><b>Inquiry Form</b> </h3>
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

                                    <div class="relative mb-[25px] bg-white">
                                        <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] pl-[40px] pr-[20px] py-[10px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] bg-white text-sm" type="text" name="ad_type" placeholder="Your Name" value="New Project"  hidden required>
                                        
                                    </div>

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
                                    <!-- 
                                    <div class="relative mb-[25px] bg-white">
                                        <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] pl-[40px] pr-[20px] py-[10px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] bg-white" type="text" name="date" placeholder="Book your viewing" datepicker-format="dd" onfocus="(this.type='date')" onblur="(this.type='text')" id="txtDate" required>
                                        
                                    </div> -->

                                    <div class="relative mb-[25px] bg-white text-[13px]">
                                        
                                        <select class=" nice-select font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] pl-[0px] pr-[0px] py-[10px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] bg-white appearance-none cursor-pointer " name="type" selected required>
                                            <option class="text-sm" value="" selected disabled="true">Types</option>
                                            <option class="text-sm" value="customer">Customer</option>
                                            <option class="text-sm" value="agent">Agent</option>
                                        </select>
                                    </div>

                                    <button type="submit" class="block z-[1] before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:z-[-1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[30px] py-[12px] capitalize font-medium text-white text-[13px] xl:text-[13px] relative after:block after:absolute after:inset-0 after:z-[-2] after:bg-primary after:rounded-md after:transition-all w-[100%]">Send</button>

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
                            <h2 class="font-lora text-primary text-[22px] sm:text-[22px] capitalize font-medium"><b>Similar Projects</b></h2>
                        </div>
                        <div class="cities-slider">
                            <div class="swiper -mx-[5px] -my-[30px] px-[5px] py-[30px]">
                                <div class="swiper-wrapper">
                                    <!-- swiper-slide start -->
                                    @foreach($similar_proj as $sim_proj)
                                    <div class="swiper-slide text-center">
                                        <div class="overflow-hidden rounded-md drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] bg-[#FFFDFC] text-center transition-all duration-300 hover:-translate-y-[10px] w-[100%] min-h-[30rem]">
                                            <div class="relative">
                                                <img src="{{url('')}}/assets/images/team/images.jpg" class="flex flex-wrap flex-col absolute top-1 left-1" style="border-radius: 50%; width:60px; border-color: rgb(11,44,61); border: 2px solid;" alt="Avatar">
                                                <a href="{{ route('project_details',$sim_proj->id) }}" class="block">
                                                    <img src="{{config('fgproperties.file_path').$sim_proj->featured_image}}" class="w-full h-[15rem]" loading="lazy" width="370" height="266" alt="{{$sim_proj->title}}">
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
                                                        {{ count($img1) }}
                                                    </button>
                                                </div><!-- 
                                                <span class="absolute bottom-5 left-5 bg-[#FFFDFC] p-[5px] rounded-[2px] text-primary leading-none text-[14px] font-normal capitalize">New Project</span> -->
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
                                                <h4><a href="{{ route('project_details',$sim_proj->id) }}" class="font-light text-tiny underline" style=" margin-top: 20px">
                                                    @if($sim_proj->url != "")
                                                        {{$sim_proj->url}}
                                                    @else
                                                       UAE
                                                    @endif
                                                </a></h4>
                                                <span class="font-light text-sm">Added: {{ Carbon\Carbon::parse($sim_proj->created_at)->format('d-M-Y') }}</span>
                                                <ul class="absolute bottom-8 min-w-full my-auto flex flex-wrap items-center justify-between text-[12px] mt-[10px] mb-[15px] pb-[10px] border-b border-[#E0E0E0]">
                                                    <li class="flex flex-wrap items-center pr-[25px] sm:pr-[5px] md:pr-[25px] border-r border-[#E0DEDE]">
                                                        <svg class="mr-[5px]" width="14" height="14" viewBox="0 0 14 14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M11.8125 9.68709V4.31285C12.111 4.23634 12.384 4.0822 12.6037 3.86607C12.8234 3.64994 12.982 3.37951 13.0634 3.08226C13.1448 2.78501 13.1461 2.47151 13.0671 2.1736C12.9882 1.87569 12.8318 1.60398 12.6139 1.38605C12.396 1.16812 12.1243 1.01174 11.8263 0.932792C11.5284 0.85384 11.2149 0.855126 10.9177 0.936521C10.6204 1.01792 10.35 1.17652 10.1339 1.39623C9.91774 1.61593 9.7636 1.88892 9.68709 2.18747H4.31285C4.23634 1.88892 4.0822 1.61593 3.86607 1.39623C3.64994 1.17652 3.37951 1.01792 3.08226 0.936521C2.78501 0.855126 2.47151 0.85384 2.1736 0.932792C1.87569 1.01174 1.60398 1.16812 1.38605 1.38605C1.16812 1.60398 1.01174 1.87569 0.932792 2.1736C0.85384 2.47151 0.855126 2.78501 0.936521 3.08226C1.01792 3.37951 1.17652 3.64994 1.39623 3.86607C1.61593 4.0822 1.88892 4.23634 2.18747 4.31285V9.68709C1.88892 9.7636 1.61593 9.91774 1.39623 10.1339C1.17652 10.35 1.01792 10.6204 0.936521 10.9177C0.855126 11.2149 0.85384 11.5284 0.932792 11.8263C1.01174 12.1243 1.16812 12.396 1.38605 12.6139C1.60398 12.8318 1.87569 12.9882 2.1736 13.0671C2.47151 13.1461 2.78501 13.1448 3.08226 13.0634C3.37951 12.982 3.64994 12.8234 3.86607 12.6037C4.0822 12.384 4.23634 12.111 4.31285 11.8125H9.68709C9.7636 12.111 9.91774 12.384 10.1339 12.6037C10.35 12.8234 10.6204 12.982 10.9177 13.0634C11.2149 13.1448 11.5284 13.1461 11.8263 13.0671C12.1243 12.9882 12.396 12.8318 12.6139 12.6139C12.8318 12.396 12.9882 12.1243 13.0671 11.8263C13.1461 11.5284 13.1448 11.2149 13.0634 10.9177C12.982 10.6204 12.8234 10.35 12.6037 10.1339C12.384 9.91774 12.111 9.7636 11.8125 9.68709ZM11.375 1.74997C11.548 1.74997 11.7172 1.80129 11.8611 1.89744C12.005 1.99358 12.1171 2.13024 12.1834 2.29012C12.2496 2.45001 12.2669 2.62594 12.2332 2.79568C12.1994 2.96541 12.1161 3.12132 11.9937 3.24369C11.8713 3.36606 11.7154 3.4494 11.5457 3.48316C11.3759 3.51692 11.2 3.49959 11.0401 3.43337C10.8802 3.36714 10.7436 3.25499 10.6474 3.11109C10.5513 2.9672 10.5 2.79803 10.5 2.62497C10.5002 2.39298 10.5925 2.17055 10.7565 2.00651C10.9206 1.84246 11.143 1.7502 11.375 1.74997ZM1.74997 2.62497C1.74997 2.45191 1.80129 2.28274 1.89744 2.13885C1.99358 1.99495 2.13024 1.8828 2.29012 1.81658C2.45001 1.75035 2.62594 1.73302 2.79568 1.76678C2.96541 1.80055 3.12132 1.88388 3.24369 2.00625C3.36606 2.12862 3.4494 2.28453 3.48316 2.45427C3.51692 2.624 3.49959 2.79993 3.43337 2.95982C3.36714 3.1197 3.25499 3.25636 3.11109 3.35251C2.9672 3.44865 2.79803 3.49997 2.62497 3.49997C2.39298 3.49974 2.17055 3.40748 2.00651 3.24343C1.84246 3.07939 1.7502 2.85696 1.74997 2.62497ZM2.62497 12.25C2.45191 12.25 2.28274 12.1987 2.13885 12.1025C1.99495 12.0064 1.8828 11.8697 1.81658 11.7098C1.75035 11.5499 1.73302 11.374 1.76678 11.2043C1.80055 11.0345 1.88388 10.8786 2.00625 10.7563C2.12862 10.6339 2.28453 10.5505 2.45427 10.5168C2.624 10.483 2.79993 10.5003 2.95982 10.5666C3.1197 10.6328 3.25636 10.745 3.35251 10.8888C3.44865 11.0327 3.49997 11.2019 3.49997 11.375C3.49974 11.607 3.40748 11.8294 3.24343 11.9934C3.07939 12.1575 2.85696 12.2497 2.62497 12.25ZM9.68709 10.9375H4.31285C4.23448 10.6367 4.07729 10.3622 3.8575 10.1424C3.63771 9.92265 3.36326 9.76546 3.06247 9.68709V4.31285C3.36324 4.23444 3.63766 4.07724 3.85745 3.85745C4.07724 3.63766 4.23444 3.36324 4.31285 3.06247H9.68709C9.76546 3.36326 9.92265 3.63771 10.1424 3.8575C10.3622 4.07729 10.6367 4.23448 10.9375 4.31285V9.68709C10.6367 9.76542 10.3622 9.92259 10.1424 10.1424C9.92259 10.3622 9.76542 10.6367 9.68709 10.9375ZM11.375 12.25C11.2019 12.25 11.0327 12.1987 10.8888 12.1025C10.745 12.0064 10.6328 11.8697 10.5666 11.7098C10.5003 11.5499 10.483 11.374 10.5168 11.2043C10.5505 11.0345 10.6339 10.8786 10.7563 10.7563C10.8786 10.6339 11.0345 10.5505 11.2043 10.5168C11.374 10.483 11.5499 10.5003 11.7098 10.5666C11.8697 10.6328 12.0064 10.745 12.1025 10.8888C12.1987 11.0327 12.25 11.2019 12.25 11.375C12.2496 11.6069 12.1573 11.8293 11.9933 11.9933C11.8293 12.1573 11.6069 12.2496 11.375 12.25Z" />
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

                                                <ul class="absolute bottom-5 min-w-full my-auto">
                                                    <li class="flex flex-wrap items-center justify-between">
                                                        <span class="font-lora text-base text-primary leading-none font-bold" style="font-size:18px">
                                                            @if($sim_proj->price != "")
                                                                Price: {{ number_format($sim_proj->price) }} AED
                                                            @else
                                                              Price: N/A
                                                            @endif
                                                        </span>

                                                        <span class="absolute right-0 flex flex-wrap items-center">
                                                            <button class="mr-[15px] hover:text-secondary" aria-label="svg" style="color:red; font-size:18px">
                                                                <i class="fa-solid fa-phone"></i>
                                                            </button>
                                                            <button class="mr-[15px] hover:text-secondary" aria-label="svg"  style="color:rgb(37, 211, 102); font-size:18px">
                                                                <i class="fa-brands fa-whatsapp"></i>
                                                            </button>
                                                            <button class="mr-[15px] hover:text-secondary" aria-label="svg"  style="color:rgb(11, 44, 61); font-size:18px">
                                                                <i class="fa-solid fa-envelope"></i>
                                                            </button>
                                                            <button class="hover:text-secondary" aria-label="svg"  style="color:black; font-size:18px">
                                                                <i class="fas fa-share"></i>
                                                            </button>
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- swiper-slide end-->
                                </div>
                                <!-- Add Pagination -->
                                <div class="swiper-pagination" style="margin-bottom: -12px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Explore Cities End-->
       <!--  <div class="  fixed container">
            <div class="flex absolute top-auto bottom-auto z-[9999] left-auto right-auto bg-white drop-shadow-2xl px-4 rounded-md py-4">
                <div class="grid grid-cols-2 gap-x-10" >
                    <div class="grid grid-cols-1">
                        <div class="inline-grid grid-cols-2 w-full border-b">    
                            <span class="font-lora leading-none text-[18px] sm:text-[18px] text-primary mb-[10px] mt-[1rem]  ">Monthly Installments : </span>
                            
                            <span class="text-secondary text-[#405463] text-[18px] sm:text-[18px] place-self-end"><b class="monthly-installment">AED {{ number_format($projects->price) }}</b></span>
                        </div>
                        <div class="inline-grid grid-cols-2 w-full border-b">
                            <span class="font-lora leading-none text-[18px] sm:text-[18px] text-primary mb-[10px] mt-[1rem] place-self-start">Total Loan Amount </span>
                            <span class="text-secondary mt-2 text-[18px] sm:text-[18px]  text-[#405463] place-self-end"><b class="loan-amount">{{ $projects->price - $divide}} AED </b></span>
                        </div>
                        <div class="inline-grid grid-cols-2 w-full border-b">
                            <span class="font-lora leading-none text-[18px] sm:text-[18px] text-primary mb-[10px] mt-[1rem] place-self-start">Loan Period </span>
                            <span class="text-secondary mt-2 text-[18px] sm:text-[18px] text-[#405463] place-self-end"><b class="loan-period">16 Years</b></span>
                        </div>
                        <div class="inline-grid grid-cols-2 w-full border-b">
                            <span class="font-lora leading-none text-[18px] sm:text-[18px] text-primary mb-[10px] mt-[1rem] place-self-start">Property Price </span>
                            <span class="text-secondary mt-2 text-[18px] sm:text-[18px] text-[#405463] place-self-end"><b>AED {{ number_format($projects->price) }}</b></span>
                        </div>                        
                    </div>
                    <div class="grid grid-cols-1">
                        <div class="block mt-6">
                        <input type="text" placeholder="name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm border-gray-300 rounded-md border border-[2px] px-4 ">
                        </div>
                        <div class="block mt-1">
                        <input type="number" placeholder="Phone" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm border-gray-300 rounded-md border border-[2px] px-4 ">
                        </div>
                        <div class="block mt-1">
                        <input type="Email" placeholder="Email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm border-gray-300 rounded-md border border-[2px] px-4 ">
                        </div>

                        <div class="block mt-1">
                        <button type="button" class="text-secondary px-3 py-2 mt-6 text-[18px] sm:text-[18px] text-white bg-[#405463] rounded rounded-md place-self-stretch hover:bg-white hover:text-[#405463] hover:drop-shadow-md hover:border-[#405463]"><b>Send Application</b></button>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

    <div class="application-modal fixed w-4/2 h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster" style="background: rgba(0,0,0,.7); display: none !important;">
        <div class="border shadow-lg modal-container bg-white w-4/2 mx-auto rounded-lg shadow-lg z-50 overflow-y-auto">
            <div class="modal-content py-4 text-left px-6">
                <!--Title-->
                <div class="flex justify-between items-center pb-1 mb-3">
                    <p class="text-2xl font-bold">Send Application</p>
                    <div class="application-close cursor-pointer z-50">
                        <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"><path d="m14.53 4.53-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"/></svg>
                    </div>
                </div>
                <hr>
                <div class="grid grid-cols-2 gap-x-10" >
                    <div class="grid grid-cols-1 border-r pl-4 pr-[3rem]">
                        <div class="inline-grid grid-cols-2 w-full border-b">    
                            <span class="font-lora leading-[2] text-[18px] sm:text-[18px] text-primary mb-[10px] mt-[1rem]  place-self-auto">Monthly Installments  </span>
                            <!-- <span class="text-secondary ml-5 text-[#405463] text-[24px] sm:text-[24px] place-self-end"><b class="monthly-installment"> <b>AED {{ number_format($projects->price) }}</b></span> -->
                            <span class="text-secondary text-[#405463] text-[18px] sm:text-[18px] place-self-center"><b class="monthly-installment">AED {{ number_format($projects->price) }}</b></span>
                        </div>
                        <div class="inline-grid grid-cols-2 w-full border-b">
                            <span class="font-lora leading-[2] text-[18px] sm:text-[18px] text-primary mb-[10px] mt-[1rem] place-self-auto">Total Loan Amount
                                <!-- <p class="font-lora text-primary text-[18px] mt-2">per Month Based on <b class="loan-period">16</b> Year Fixed</p> -->        
                            </span>
                            <span class="text-secondary text-[18px] sm:text-[18px]  text-[#405463] place-self-center"><b class="loan-amount">AED {{ $projects->price - $divide}}  </b></span>
                        </div>
                        <div class="inline-grid grid-cols-2 w-full border-b">
                            <span class="font-lora leading-[2] text-[18px] sm:text-[18px] text-primary mb-[10px] mt-[1rem] place-self-auto">Loan Period </span>
                            <span class="text-secondary text-[18px] sm:text-[18px]  text-[#405463] place-self-center"><b class="loan-period">16 Years</b></span>
                        </div>
                        <div class="inline-grid grid-cols-2 w-full border-b">
                            <span class="font-lora leading-[2] text-[18px] sm:text-[18px] text-primary mb-[10px] mt-[1rem] place-self-auto">Property Price </span>
                            <span class="text-secondary text-[18px] sm:text-[18px]  text-[#405463] place-self-center"><b>AED {{ number_format($projects->price) }}</b></span>
                        </div>                        
                    </div>
                    <div class="grid grid-cols-1">
                        <form method="post"  action="{{ route('mortgageLoan') }}">
                            @csrf
                            <div class="col-span-12 md:col-span-6 mt-2">
                                <input class="font-light w-full leading-[1.15] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " type="text" placeholder="Full Name" name="name" required>
                            </div>
                            <div class="col-span-12 md:col-span-6 mt-2">
                                <input class="font-light w-full leading-[1.15] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " type="tel" placeholder="Phone Number" name="phone" required>
                            </div>
                           <div class="col-span-12 md:col-span-6 mt-2">
                                <input class="font-light w-full leading-[1.15] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " type="email" placeholder="Email Address" name="email" required>
                            </div>

                            <div class="block mt-1">
                                <button type="submit" class="text-secondary px-3 py-2 mt-6 text-[18px] sm:text-[18px] text-white bg-[#405463] rounded rounded-md place-self-stretch hover:bg-white hover:text-[#405463] hover:drop-shadow-md hover:border-[#405463] w-full"><b>Send Application</b></button>
                            </div>
                            <input class="font-light w-full leading-[1.15] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] monthly-installment-sub" type="number" placeholder="Full Name" name="monthly_installment_sub" hidden >
                            
                            <input class="font-light w-full leading-[1.15] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] loan-amoun-sub" type="number" placeholder="Full Name" name="loan_amoun_sub"  value="{{ $projects->price - $divide}}" hidden>
                            
                            <input class="font-light w-full leading-[1.15] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] property-price-sub" type="number" placeholder="Full Name" name="property_price_sub"  value="{{ $projects->price }}" hidden>
                            
                            <input class="font-light w-full leading-[1.15] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] down-payment-sub" type="number" placeholder="Full Name" name="down_payment_sub"  value="{{ $divide }}" hidden>
                            
                            <input class="font-light w-full leading-[1.15] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] interest-rate-sub" type="number" placeholder="Full Name" name="interest_rate_sub" hidden>
                            
                            <input class="font-light w-full leading-[1.15] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] loan-period-sub" type="number" placeholder="Full Name" name="loan_period_sub" hidden>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
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

<script type="text/javascript">
    const modal_apply = document.querySelector('.application-modal');
    const closeButton_apply = document.querySelectorAll('.application-close');

    const modalCloseApply = () => {

        modal_apply.classList.remove('fadeIn');
        modal_apply.classList.add('fadeOut');
        setTimeout(() => {
            modal.style.display = 'none';
        });
    }

    const openModalapply = () => {
        modal_apply.classList.remove('fadeOut');
        modal_apply.classList.add('fadeIn');
        modal_apply.style.display = 'flex';
    }

    $('.application-close').on('mousedown', function(){
        $('.application-modal').css('display', 'none');
        // modalCloseApply();
    })
        // for (let i = 0; i < closeButton_apply.length; i++) {

        //     const elements = closeButton_apply[i];

        //     elements.onclick = (e) => modalCloseApply();

        //     modal.style.display = 'none';

        //     window.onclick = function (event) {
        //         if (event.target == modal) modalCloseApply();
        //         else if (event.target == modal1) modalCloseApply1();
        //     }
        // }
</script>

<script type="text/javascript">
    $(function(){
        var dtToday = new Date();
        
        var month = dtToday.getMonth() + 1;
        var day = dtToday.getDate();
        var year = dtToday.getFullYear();
        if(month < 10)
            month = '0' + month.toString();
        if(day < 10)
            day = '0' + day.toString();
        
        var minDate= year + '-' + month + '-' + day;
        
        $('#txtDate').attr('min', minDate);
    });
        
    // $('.loan-period-input').on('input', function() {
    //    let y = parseInt($('.loan-period-input').val());
    //    let x = y * 12;
    //     $('.no-of-payment').html(x + ' Years');
    //     $('.loan-period').html($('.loan-period-input').val() + ' Years');
    //     let interest = parseInt($('.interest-rate-input').val())/100;
    //     let totalCost = {{$projects->price}} * interest + {{$projects->price}} - {{$divide}}
    //     let monthlyInstallment = totalCost/parseInt($('.no-of-payment').text());
    //     monthlyInstallment = parseInt(monthlyInstallment);
    //     $('.monthly-installment').html('AED '+monthlyInstallment);
    // });
 @if($projects->status != 'Rent' )
    $('.loan-period-input').on('input', function() {
       let y = parseInt($('.loan-period-input').val());
       let x = y * 12;
        // $('.no-of-payment').html(x + ' Years');
        $('.loan-period').html($('.loan-period-input').val() + ' Years');
        let interest = parseInt($('.interest-rate-input').val())/100;
        let totalCost =  ({{$projects->price}} - {{$divide}}) + interest * ({{$projects->price}} - {{$divide}})
        let monthlyInstallment = totalCost/x;
        $('.monthly-installment-sub').val(monthlyInstallment);
        $('.interest-rate-sub').val($('.interest-rate-input').val());
        $('.loan-period-sub').val($('.loan-period-input').val());
        // let monthlyInstallment = totalCost/parseInt($('.no-of-payment').text());
        // monthlyInstallment = parseInt(monthlyInstallment);
        // $('.monthly-installment').html('AED '+monthlyInstallment);
        $('.monthly-installment').html('AED '+new Intl.NumberFormat('en-US', { maximumSignificantDigits: 3 }).format(monthlyInstallment));
    });

    $('.interest-rate-input').on('input', function() {
        let y = parseInt($('.loan-period-input').val());
        let x = y * 12;
        let interest = parseInt($('.interest-rate-input').val())/100;
        let totalCost = ({{$projects->price}} - {{$divide}}) + interest * ({{$projects->price}} - {{$divide}})
        let monthlyInstallment = totalCost/x;
        $('.monthly-installment-sub').val(monthlyInstallment);
        $('.interest-rate-sub').val($('.interest-rate-input').val());
        $('.loan-period-sub').val($('.loan-period-input').val());
        $('.monthly-installment').html('AED '+new Intl.NumberFormat('en-US', { maximumSignificantDigits: 3 }).format(monthlyInstallment));
    });
    @endif
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

@if($projects->status != 'Rent' )
    $(document).ready(function() {
         let y = parseInt($('.loan-period-input').val());
        let x = y * 12;
        let interest = parseInt($('.interest-rate-input').val())/100;
        let totalCost = ({{$projects->price}} - {{$divide}}) + interest * ({{$projects->price}} - {{$divide}})
        let monthlyInstallment = totalCost/x;
        monthlyInstallment = parseInt(monthlyInstallment);
        $('.monthly-installment').html('AED '+new Intl.NumberFormat('en-US', { maximumSignificantDigits: 3 }).format(monthlyInstallment));
        $('.monthly-installment-sub').val(monthlyInstallment);
        $('.interest-rate-sub').val($('.interest-rate-input').val());
        $('.loan-period-sub').val($('.loan-period-input').val());
    $(".calendar").click(function(e) {
      $('.lmao[id^="div-"] .he').css("background-color", "red"); //change the remaining elements who's id start with div- color to white 
      if ($(e.target).is('.he')) {
        $(e.target).css("background-color", "white"); //change the clicked element color
      }
    });
@endif
    // var winWidth = $(window).width()   
    //     if(winWidth <= 800)
    //     {
    //         $('.big-screens').css('display', 'none')
    //         $('.small-screens').css('display', 'block')
    //     }   
    //     else
    //     {
    //         $('.big-screens').css('display', 'block')
    //         $('.small-screens').css('display', 'none')
    //     }

    }); 


</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
@endsection
