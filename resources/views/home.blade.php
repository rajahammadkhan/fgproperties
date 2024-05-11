@extends('layouts.master')



@section('top-styles')
<style type="text/css">

    #text-block {
}

.area{
    margin-top: 20px;
}
.area img{
  height: 280px;
  width: 100%;
  object-fit: cover;
  -webkit-transform: scale(1);
    transform: scale(1);
    -webkit-transition: .3s ease-in-out;
    transition: .3s ease-in-out;
}
.area img:hover{
    -webkit-transform: scale(1.3);
    transform: scale(1.3);
}
figure {
    margin: 0;
    padding: 0;
    background: #fff;
    overflow: hidden;
     border-radius: 15px;
}

    .list-group-item:hover{
        background-color: grey;        
    }

@media (min-device-width: 501px) and (max-device-width: 639px) {
    #b1view{
        right: 22px !important;
        top: 70px !important;
    }
}

@media (min-device-width: 640px) and (max-device-width: 700px) {
    #b1view{
        right: 35px !important;
        top: 70px !important;
    }
}

@media (max-width: 800px) {
    #bannerimages img{
        height: 18rem;
    }
    #bannerimages .absolute{
        top: 80%;
    }
    #filterz{
        padding-left: 15px;
        margin-top: 20px;
    }
    #locationbuy, #locationrent, #locationnew{
        width: 50%;
    }
    #b1view{
        right: 22px;
        top: 70px;
    }
    #ul1{
        width: 100%;
        place-content: space-evenly;
    }
    #mainhead{
        color: rgb(255, 255, 255);
        font-size: 25px;

    }
}

@media (min-device-width: 801px) and (max-device-width: 1249px) {
    #filterz{
        position: absolute;
        /*justify-self: center;*/
        margin-left: 2.5%;
        margin-right: 2.5%;
        margin-top: -25%;
        max-width: 90%;
        /*top: 50%;*/
    }
    #b1view{
        bottom: 6%;
        right: 3%;
    }
}

@media (min-device-width: 1250px) and (max-device-width: 1379px) {
    #buy{
        width: 60%;
        margin-left: 15rem;
    }

    #b1view{
        bottom: 6%;
        right: 22%;
    }

    #rent{
        width: 60%;
        margin-left: 15rem;
    }

    #co-living{
        width: 60%;
        margin-left: 15rem;
    } 
    .selectricc-border-none{
        margin-left: 8rem;
    } 
    #bannerimages img{
        height: 50rem;
    }  
    #bannerimages .absolute{
        /*top: 57%;*/
    }   
    #filterz{
        position: absolute;
        /*justify-self: center;*/
        margin-top: -25%;
        max-width: 100%;
        /*top: 50%;*/
    }
    #mainhead{
        /*color: rgb(11, 44, 61);*/
        color: rgb(255, 255, 255);
    }
    .swiper-button-next:after,
    .swiper-button-prev:after {
     font-family:swiper-icons;
     font-size:20px;
     text-transform:none!important;
     letter-spacing:0;
     font-variant:initial;
     line-height:1;
    }

    #swiper-paginationa{
        float: right;
    }
}

@media (min-device-width: 1380px) and (max-device-width: 1500px) {
    #filterz{
        position: absolute;
        /*justify-self: center;*/
        margin-top: -25%;
        max-width: 60%;
        /*top: 50%;*/
    }
    #b1view{
        bottom: 6%;
        right: 3%;
    }
}

@media (min-device-width: 1501px) and (max-device-width: 1599px) {
    #filterz{
        position: absolute;
        /*justify-self: center;*/
        margin-top: -25%;
        max-width: 60%;
        /*top: 50%;*/
    }
    #b1view{
        bottom: 6%;
        right: 3%;
    }
}

@media (min-width: 1600px) {
    #filterz{
        position: absolute;
        /*justify-self: center;*/
        margin-top: -25%;
        max-width: 60%;
        /*top: 50%;*/
    }
    #b1view{
        bottom: 6%;
        right: 3%;
    }
}

/*@media (max-width: 800px) {
    #bannerimages img{
        height: 54rem;
    }
    #bannerimages .absolute{
        top: 80%;
    }
    #filterz{
        margin-top: -38rem;
    }
    #mainhead{
        color: rgb(255, 255, 255);
        margin-top: -32rem;
        font-size: 26px;
    }
}*/
/*@media (min-device-width : 1024px) {
     #filterz{
        top: 50%;
    }
}
*/




</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
@endsection

@section('content')        
    <div class="relative">

            <!-- Hero section start -->
            
            <div class="swiper mySwiper mt-[-9.5rem] swi" id="swi">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <section class="relative before:absolute before:inset-0 before:content-[''] ">
                        <div class="" id="bannerimages">
                            <img class="w-full min-h-[60px] md:min-h-[60px] object-cover" src="{{url('')}}/assets/images/hero/01.jpg" alt="hero image">
                            <div class="absolute right-0 left-0 lg:top-[110px] xl:top-[155px] -translate-y-1/2 lg:translate-y-0">
                                <div class="container">
                                    <div class="grid grid-cols-12">
                                        <div class="col-span-12">
                                            <div class="lg:max-w-[500px] xl:max-w-[800px] text-center ml-auto mr-auto lg:mb-[-75px]">
                                                <!-- <span class="text-base text-white block mb-5" style="font-size: 23px;">A new way to find Properties</span> -->
                                                <!-- <h1 class="font-lora  text-[30px] sm:text-[33px] md:text-[33px] lg:text-[33px] leading-tight title" style="font-weight: 800;" id="mainhead">
                                                    Search and Find Luxury Homes</h1> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>
                </div>
                <div class="swiper-slide">
                    <section class="relative before:absolute before:inset-0 before:content-[''] ">
                        <div class="" id="bannerimages">
                            <img class="w-full min-h-[60px] md:min-h-[60px] object-cover" src="{{url('')}}/assets/images/hero/02.jpg" alt="hero image">
                            <div class="absolute right-0 left-0 lg:top-[110px] xl:top-[155px] -translate-y-1/2 lg:translate-y-0">
                                <div class="container">
                                    <div class="grid grid-cols-12">
                                        <div class="col-span-12">
                                            <div class="lg:max-w-[500px] xl:max-w-[800px] text-center ml-auto mr-auto lg:mb-[-75px]">
                                                <!-- <span class="text-base text-white block mb-5" style="font-size: 23px;">A new way to find Properties</span> -->
                                                <!-- <h1 class="font-lora  text-[30px] sm:text-[33px] md:text-[33px] lg:text-[33px] leading-tight title" style="font-weight: 800;" id="mainhead">
                                                    Search and Find Luxury Homes</h1> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>
                </div>
                <div class="swiper-slide">
                    <section class="relative before:absolute before:inset-0 before:content-[''] ">
                        <div class="" id="bannerimages">
                            <img class="w-full min-h-[60px] md:min-h-[60px] object-cover" src="{{url('')}}/assets/images/hero/03.jpg" alt="hero image">
                            <div class="absolute right-0 left-0 lg:top-[110px] xl:top-[155px] -translate-y-1/2 lg:translate-y-0">
                                <div class="container">
                                    <div class="grid grid-cols-12">
                                        <div class="col-span-12">
                                            <div class="lg:max-w-[500px] xl:max-w-[800px] text-center ml-auto mr-auto lg:mb-[-75px]">
                                                <!-- <span class="text-base text-white block mb-5" style="font-size: 23px;">A new way to find Properties</span> -->
                                                <!-- <h1 class="font-lora  text-[30px] sm:text-[33px] md:text-[33px] lg:text-[33px] leading-tight title" style="font-weight: 800;" id="mainhead">
                                                    Search and Find Luxury Homes</h1> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
              </div>
              <div class="swiper-pagination" ></div>
              <!-- <div class="swiper-button-next" style="left: auto; color: black; border-radius: 100%; background-color: white; padding: 30px;" id="swiper-button-next"></div>
              <div class="swiper-button-prev" style="right: auto; color: black; border-radius: 100%; background-color: white; padding: 30px;" id="swiper-button-prev"></div> -->
            </div>
            <!-- Hero section end -->

<!-- Addvanced search tab start -->
            <!-- <div class="container md:mt-[120px] lg:mt-[-180px] z-[2] pl-[60px] lg:pl-[50px] 2xl::pl-[0px] absolute lg:left-0 lg:right-0 lg:top-[95%] lg:translate-y-[-120px] md:translate-y-[-350px]" id="filterz"> -->
            <div class="container md:mt-[120px] lg:mt-[-180px] z-[2] pl-[60px] lg:pl-[50px] 2xl::pl-[0px] lg:absolute lg:left-0 lg:right-0 lg:top-[95%] translate-y-[-0px]" id="filterz">

                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="relative text-center mb-2">
                            <ul class="tab-nav search-tab inline-flex px-[5px] sm:px-[15px] pt-[15px] pb-[21px] border-t border-l border-r border-solid  rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] rounded-br-[20px] bg-[rgb(237,252,250,0.9)]" id="ul1">
                                <li data-tab="rent" class="mr-[5px] sm:mr-[10px] md:mr-[30px] my-[-5px] active">
                                    <button class="font-lora leading-none px-[2px] sm:px-[3px] capitalize text-primary transition-all text-base xl:text-[16px] before:absolute before:left-auto before:right-0 before:bottom-[-20px] before:z-10 before:rounded-full before:w-0 before:h-[3px] before:content-[''] before:bg-secondary relative before:transition-all ease-out" id="rent1">rent</button>
                                </li>
                                <li data-tab="buy" class="mr-[5px] sm:mr-[10px] md:mr-[30px] my-[-5px]">
                                    <button class="font-lora leading-none px-[2px] sm:px-[3px] capitalize text-primary transition-all text-base xl:text-[16px] before:absolute before:left-auto before:right-0 before:bottom-[-20px] before:z-10 before:rounded-full before:w-0 before:h-[3px] before:content-[''] before:bg-secondary relative before:transition-all ease-out" id="buy1">buy</button>
                                </li>
                                <li data-tab="co-living" class="mr-[5px] sm:mr-[10px] md:mr-[30px] my-[-5px]">
                                    <button class="font-lora leading-none px-[2px] sm:px-[3px] capitalize text-primary transition-all text-base xl:text-[16px] before:absolute before:left-auto before:right-0 before:bottom-[-20px] before:z-10 before:rounded-full before:w-0 before:h-[3px] before:content-[''] before:bg-secondary relative before:transition-all ease-out" id="new_projects1">New Projects</button>
                                </li>
                                
                                <li class="md:mr-[0px] my-[-5px]">
                                    <a href="{{ route('sell') }}">
                                        <button class="font-lora leading-none px-[2px] sm:px-[3px] capitalize text-primary transition-all text-base xl:text-[16px] before:absolute before:left-auto before:right-0 before:bottom-[-20px] before:z-10 before:rounded-full before:w-0 before:h-[3px] before:content-[''] before:bg-secondary relative before:transition-all ease-out" id="sell1">sell</button></a>
                                </li>

                               <!--  <li class="mx-[5px] sm:mx-[10px] md:mr-[30px] my-[-5px]">
                                    <a href="{{ route('careers') }}">
                                        <button class="font-lora leading-none px-[2px] sm:px-[3px] capitalize text-primary transition-all text-base xl:text-[16px] before:absolute before:left-auto before:right-0 before:bottom-[-20px] before:z-10 before:rounded-full before:w-0 before:h-[3px] before:content-[''] before:bg-secondary relative before:transition-all ease-out" id="sell1">Join-Family</button></a>
                                </li> -->
                            </ul>

                        </div>
                        <div class="relative selectricc-border-none">
                            <!-- <button class="tab-toggle-btn px-[10px] py-[15px] absolute top-[0px] left-[-45px] border-l border-t border-b border-solid  bg-[rgb(237,252,250,0.8)] text-primary rounded-tl-[10px] rounded-bl-[10px]" id="b1" aria-label="svg icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19 22V11" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M19 7V2" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M12 22V17" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M12 13V2" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M5 22V11" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M5 7V2" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M3 11H7" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M17 11H21" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M10 13H14" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button> -->
                        </div>
                        <div id="buy" class="tab-content bg-[rgb(237,252,250,0.9)] border border-solid rounded-bl-[20px] rounded-br-[20px] rounded-tr-[20px] rounded-tl-[20px] px-[15px] sm:px-[15px] py-[10px] h-[4rem] lg:max-h-[4rem] overflow-visible">
                            <form action="{{ route('buy.search') }}" method="get">
                                @csrf
                                <div class="advanced-searrch flex flex-wrap -mb-[45px] lg:mr-[-2px] mt-1">
                                    <div class="flex-1" style="display: -ms-flexbox; display: flex;  margin-bottom: 15px;">
                                        <img src="{{url('')}}/assets/images/icon/search-grey.svg" class="w-[30px] h-[30px]" alt="search icon">
                                        <input id="locationbuy" type="text" name="locationbuy" placeholder="Search Properties" class="text-[16px] placeholder:text-body leading-none font-light pr-3 focus:outline-none w-full bg-transparent py-[0.5rem] ml-2" style="border-bottom: 1px solid; border-color: #787878;" autocomplete="off">
                                    </div>
                                    <div class="advanced-searrch-list flex lg:border-r lg:border-primary  last:border-r-0 mb-[45px] max-h-[2.5rem] mt-[1px]" style=" border:none; cursor: pointer;">
                                        <button class="search-btn py-auto absolute active right-[95px] w-[7rem] h-[3rem] font-lora capitalize text-base xl:text-[17px] rounded-bl-[20px] rounded-br-[20px] rounded-tr-[20px] rounded-tl-[20px] " style="color:black; padding:0px; color: white; letter-spacing: 1px; font-size: 15px;" id="b1view">
                                        <b>SEARCH</b>
                                        </button>
                                    </div>
                                </div>                                  
                            </form>
                            <div id="buy_suggest" class="w-full"></div>
                        </div>

                        <div id="rent" class="active tab-content bg-[rgb(237,252,250,0.9)] border border-solid rounded-bl-[20px] rounded-br-[20px] rounded-tr-[20px] rounded-tl-[20px] px-[15px] sm:px-[15px] py-[10px] h-[4rem] lg:max-h-[4rem] overflow-visible ">
                            <form action="{{ route('rent.search') }}" method="get">
                                @csrf
                                <div class="advanced-searrch flex flex-wrap -mb-[45px] lg:mr-[-2px] mt-1">
                                    <div class="flex-1" style="display: -ms-flexbox; display: flex;  margin-bottom: 15px;">
                                        <img src="{{url('')}}/assets/images/icon/search-grey.svg" class="w-[30px] h-[30px]" alt="search icon">
                                        <input id="locationrent" type="text" name="locationrent1" placeholder="Search Properties" class="text-[16px] placeholder:text-body leading-none font-light pr-3 focus:outline-none w-full bg-transparent py-[0.5rem] ml-2" style="border-bottom: 1px solid; border-color: #787878;" autocomplete="off">
                                        

                                    </div>
                                    <div class="advanced-searrch-list flex lg:border-r lg:border-primary  last:border-r-0 mb-[45px] max-h-[2.5rem] mt-[1px]" style=" border:none; cursor: pointer;">
                                        <button class="search-btn py-auto absolute active right-[95px] w-[7rem] h-[3rem] font-lora capitalize text-base xl:text-[17px] rounded-bl-[20px] rounded-br-[20px] rounded-tr-[20px] rounded-tl-[20px] " style="color:black; padding:0px; color: white; letter-spacing: 1px; font-size: 15px" id="b1view">
                                        <b>SEARCH</b>
                                        </button>
                                    </div>
                        

                                </div>
                            </form>
                            <div id="rent_suggest" class="w-full"></div>

                        </div>

                        <div id="co-living" class="tab-content bg-[rgb(237,252,250,0.9)] border border-solid rounded-bl-[20px] rounded-br-[20px] rounded-tr-[20px] rounded-tl-[20px] px-[15px] sm:px-[15px] py-[10px] h-[4rem] lg:max-h-[4rem] overflow-visible">
                            <form action="{{route('projects.search')}}" method="get">
                                @csrf
                                <div class="advanced-searrch flex flex-wrap -mb-[45px] lg:mr-[-2px] mt-1">
                                    <div class="flex-1" style="display: -ms-flexbox; display: flex;  margin-bottom: 15px;">
                                        <img src="{{url('')}}/assets/images/icon/search-grey.svg" class="w-[30px] h-[30px]" alt="search icon">
                                        <input id="locationnew" type="text" name="locationnew" placeholder="Search Properties" class="text-[16px] placeholder:text-body leading-none font-light pr-3 focus:outline-none w-full bg-transparent py-[0.5rem] ml-2" style="border-bottom: 1px solid; border-color: #787878;" autocomplete="off">
                                    </div>
                                    <div class="advanced-searrch-list flex lg:border-r lg:border-primary  last:border-r-0 mb-[45px] max-h-[2.5rem] mt-[1px]" style=" border:none; cursor: pointer;">                
                                        <button class="search-btn py-auto absolute active right-[95px] w-[7rem] h-[3rem] font-lora capitalize text-base xl:text-[17px] rounded-bl-[20px] rounded-br-[20px] rounded-tr-[20px] rounded-tl-[20px] " style="color:black; padding:0px; color: white; letter-spacing: 1px; font-size: 15px" id="b1view">
                                        <b>SEARCH</b>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <div id="newP_suggest" class="w-full"></div>
                        </div>

                    </div>
                </div>
            </div>
    </div>
<!-- Addvanced search tab end -->

    <!-- Explore Cities Start-->

        <section class="explore-cities-section pt-[30px] pb-[120px] mb-[-180px]">
            <div class="container">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="grid grid-cols-12">
                            <div class="col-span-12">
                                <div class="flex flex-col sm:flex-row sm:items-center justify-between mb-[50px]">
                                    <div>
                                        <span class="text-secondary text-tiny inline-block " style="font-size: 16px; color: #D2AC47;">Best Choice</span>
                                        <h2 class="font-lora text-primary text-[20px] sm:text-[20px] capitalize font-medium">
                                        <b>Featured Properties</b><span class="text-secondary">.</span></h2>
                                    </div>
                                    <div>
                                        <a href="{{ route('project') }}" class="flex flex-wrap items-center text-secondary text-tiny" style="font-size: 16px">Explore all
                                            <svg class="ml-[10px]" width="26" height="11" viewBox="0 0 26 11" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="m20.088.693 4.12 4.315H0v.984h24.207l-4.12 4.315.662.693L26 5.5 20.75 0l-.662.693Z"/></svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cities-slider mt-[-4rem]">
                            <div class="swiper -mx-[10px] -my-[30px] px-[10px] py-[30px] " id="swiper">
                                <div class="swiper-wrapper sm:rid-rows-none sm:grid-cols-none gap-[10px]">
                                    @foreach($Properties as $property)
                                    <div class="swiper-slide text-center ">
                                        <div class="overflow-hidden rounded-[15px] drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] bg-[#FFFDFC] text-center transition-all duration-300 hover:-translate-y-[10px] min-h-[30rem] w-[100%]">
                                            <div class="relative">
                                                <!-- <img src="{{url('')}}/assets/images/team/images.jpg" class="flex flex-wrap flex-col absolute top-1 left-1" style="border-radius: 50%; width:60px; border-color: rgb(11,44,61); border: 2px solid;" alt="Avatar"> -->
                                                <a href="{{ route('project_details',$property->id) }}" class="block">
                                                    <img src="{{config('fgproperties.file_path').$property->featured_image}}" class="w-full h-[15rem]" loading="lazy" width="370" height="266" alt="{{$property->title}}">
                                                </a>
                                                <div class="flex flex-wrap flex-col absolute top-5 right-5">
                                                    <button class="flex flex-wrap items-center bg-[rgb(11,44,61,0.8)] p-[5px] rounded-[2px] text-white mb-[5px] text-xs"><img class="mr-1" src="{{url('')}}/assets/images/icon/camera.png" loading="lazy" width="13" height="10" alt="camera icon">
                                                         @php                        
                                                            if ($property->images !="") {
                                                                $images = $property->images;
                                                                $img1 = explode(',', $images);
                                                                $real_image = reset($img1);
                                                            }
                                                        @endphp
                                                        {{ count($img1) }}
                                                    </button>
                                                </div>
                                                @if($property->status)
                                                <span class="absolute bottom-5 left-5 bg-[#FFFDFC] p-[5px] rounded-[2px] text-primary leading-none text-[12px] font-normal capitalize"> @if($property->status != 'New Project') for {{ $property->status }}
                                                    @else
                                                    {{$property->status}}
                                                    @endif
                                                </span>
                                                @endif
                                            </div>

                                            <div class="py-[20px] px-[20px] text-left">
                                                <h3><a href="{{ route('project_details',$property->id) }}" class="font-lora leading-tight text-[18px] xl:text-[18px] text-primary font-medium"> {{$property->title}}</a></h3>
                                                <h4 class="truncate"><a href="{{ route('project_details',$property->id) }}" class="font-light text-tiny underline text-[16px]" style=" margin-top: 20px">
                                                    @if($property->url != "")
                                                        {{$property->url}}
                                                    @else
                                                       UAE
                                                    @endif
                                                </a></h4>
                                                <span class="font-light text-sm">Added: {{ Carbon\Carbon::parse($property->created_at)->format('d-M-Y') }}</span>
                                                <ul class="absolute  min-w-full my-auto flex flex-wrap items-center justify-between text-[12px] mt-[10px] mb-[15px] pb-[10px] border-b border-[#E0E0E0] my-auto">
                                                    <li class="flex flex-wrap items-center pr-[25px] sm:pr-[5px] md:pr-[25px] border-r border-[#E0DEDE]">
                                                        <svg class="mr-[5px]" width="14" height="14" viewBox="0 0 14 14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M11.8125 9.68709V4.31285C12.111 4.23634 12.384 4.0822 12.6037 3.86607C12.8234 3.64994 12.982 3.37951 13.0634 3.08226C13.1448 2.78501 13.1461 2.47151 13.0671 2.1736C12.9882 1.87569 12.8318 1.60398 12.6139 1.38605C12.396 1.16812 12.1243 1.01174 11.8263 0.932792C11.5284 0.85384 11.2149 0.855126 10.9177 0.936521C10.6204 1.01792 10.35 1.17652 10.1339 1.39623C9.91774 1.61593 9.7636 1.88892 9.68709 2.18747H4.31285C4.23634 1.88892 4.0822 1.61593 3.86607 1.39623C3.64994 1.17652 3.37951 1.01792 3.08226 0.936521C2.78501 0.855126 2.47151 0.85384 2.1736 0.932792C1.87569 1.01174 1.60398 1.16812 1.38605 1.38605C1.16812 1.60398 1.01174 1.87569 0.932792 2.1736C0.85384 2.47151 0.855126 2.78501 0.936521 3.08226C1.01792 3.37951 1.17652 3.64994 1.39623 3.86607C1.61593 4.0822 1.88892 4.23634 2.18747 4.31285V9.68709C1.88892 9.7636 1.61593 9.91774 1.39623 10.1339C1.17652 10.35 1.01792 10.6204 0.936521 10.9177C0.855126 11.2149 0.85384 11.5284 0.932792 11.8263C1.01174 12.1243 1.16812 12.396 1.38605 12.6139C1.60398 12.8318 1.87569 12.9882 2.1736 13.0671C2.47151 13.1461 2.78501 13.1448 3.08226 13.0634C3.37951 12.982 3.64994 12.8234 3.86607 12.6037C4.0822 12.384 4.23634 12.111 4.31285 11.8125H9.68709C9.7636 12.111 9.91774 12.384 10.1339 12.6037C10.35 12.8234 10.6204 12.982 10.9177 13.0634C11.2149 13.1448 11.5284 13.1461 11.8263 13.0671C12.1243 12.9882 12.396 12.8318 12.6139 12.6139C12.8318 12.396 12.9882 12.1243 13.0671 11.8263C13.1461 11.5284 13.1448 11.2149 13.0634 10.9177C12.982 10.6204 12.8234 10.35 12.6037 10.1339C12.384 9.91774 12.111 9.7636 11.8125 9.68709ZM11.375 1.74997C11.548 1.74997 11.7172 1.80129 11.8611 1.89744C12.005 1.99358 12.1171 2.13024 12.1834 2.29012C12.2496 2.45001 12.2669 2.62594 12.2332 2.79568C12.1994 2.96541 12.1161 3.12132 11.9937 3.24369C11.8713 3.36606 11.7154 3.4494 11.5457 3.48316C11.3759 3.51692 11.2 3.49959 11.0401 3.43337C10.8802 3.36714 10.7436 3.25499 10.6474 3.11109C10.5513 2.9672 10.5 2.79803 10.5 2.62497C10.5002 2.39298 10.5925 2.17055 10.7565 2.00651C10.9206 1.84246 11.143 1.7502 11.375 1.74997ZM1.74997 2.62497C1.74997 2.45191 1.80129 2.28274 1.89744 2.13885C1.99358 1.99495 2.13024 1.8828 2.29012 1.81658C2.45001 1.75035 2.62594 1.73302 2.79568 1.76678C2.96541 1.80055 3.12132 1.88388 3.24369 2.00625C3.36606 2.12862 3.4494 2.28453 3.48316 2.45427C3.51692 2.624 3.49959 2.79993 3.43337 2.95982C3.36714 3.1197 3.25499 3.25636 3.11109 3.35251C2.9672 3.44865 2.79803 3.49997 2.62497 3.49997C2.39298 3.49974 2.17055 3.40748 2.00651 3.24343C1.84246 3.07939 1.7502 2.85696 1.74997 2.62497ZM2.62497 12.25C2.45191 12.25 2.28274 12.1987 2.13885 12.1025C1.99495 12.0064 1.8828 11.8697 1.81658 11.7098C1.75035 11.5499 1.73302 11.374 1.76678 11.2043C1.80055 11.0345 1.88388 10.8786 2.00625 10.7563C2.12862 10.6339 2.28453 10.5505 2.45427 10.5168C2.624 10.483 2.79993 10.5003 2.95982 10.5666C3.1197 10.6328 3.25636 10.745 3.35251 10.8888C3.44865 11.0327 3.49997 11.2019 3.49997 11.375C3.49974 11.607 3.40748 11.8294 3.24343 11.9934C3.07939 12.1575 2.85696 12.2497 2.62497 12.25ZM9.68709 10.9375H4.31285C4.23448 10.6367 4.07729 10.3622 3.8575 10.1424C3.63771 9.92265 3.36326 9.76546 3.06247 9.68709V4.31285C3.36324 4.23444 3.63766 4.07724 3.85745 3.85745C4.07724 3.63766 4.23444 3.36324 4.31285 3.06247H9.68709C9.76546 3.36326 9.92265 3.63771 10.1424 3.8575C10.3622 4.07729 10.6367 4.23448 10.9375 4.31285V9.68709C10.6367 9.76542 10.3622 9.92259 10.1424 10.1424C9.92259 10.3622 9.76542 10.6367 9.68709 10.9375ZM11.375 12.25C11.2019 12.25 11.0327 12.1987 10.8888 12.1025C10.745 12.0064 10.6328 11.8697 10.5666 11.7098C10.5003 11.5499 10.483 11.374 10.5168 11.2043C10.5505 11.0345 10.6339 10.8786 10.7563 10.7563C10.8786 10.6339 11.0345 10.5505 11.2043 10.5168C11.374 10.483 11.5499 10.5003 11.7098 10.5666C11.8697 10.6328 12.0064 10.745 12.1025 10.8888C12.1987 11.0327 12.25 11.2019 12.25 11.375C12.2496 11.6069 12.1573 11.8293 11.9933 11.9933C11.8293 12.1573 11.6069 12.2496 11.375 12.25Z" />
                                                        </svg>

                                                        <span> 
                                                            @if($property->area != "")
                                                                {{$property->area}} Sq.fit
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
                                                            @if($property->bedrooms != "")
                                                                {{$property->bedrooms}}
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
                                                            @if($property->bathrooms != "")
                                                                {{$property->bathrooms}}
                                                            @else
                                                                N/A 
                                                            @endif
                                                        </span>

                                                    </li>
                                                </ul>

                                                <ul class="absolute bottom-[3.7rem] min-w-full my-auto border-b border-solid">
                                                    <li class="flex flex-wrap items-center justify-between">
                                                        <span class="font-lora text-base text-primary leading-none font-bold" style="font-size:18px">
                                                            @if($property->price != "")
                                                                Price: {{ number_format($property->price) }} AED
                                                            @else
                                                              Price: N/A
                                                            @endif
                                                        </span>

                                                        <span class="absolute right-0 flex flex-wrap items-center">
                                                            <button class="mr-[15px] hover:text-secondary" aria-label="svg" style="color:red; font-size:18px">
                                                                <a href="tel:{{ $property->phone != '' ? $property->phone : getSettings('agent_number') }}"><i class="fa-solid fa-phone"></i></a>
                                                            </button>
                                                            <button class="mr-[15px] hover:text-secondary" aria-label="svg"  style="color:rgb(37, 211, 102); font-size:18px">
                                                                <a href="{{ $property->phone != '' ? 'https://wa.me/'. $property->phone : 'https://wa.me/'.getSettings('agent_number') }}"><i class="fa-brands fa-whatsapp"></i></a>
                                                            </button>
                                                            <button class="mr-[15px] hover:text-secondary" aria-label="svg"  style="color:rgb(11, 44, 61); font-size:18px">
                                                                <a href="mailto:{{ $property->email != '' ? $property->email : getSettings('website_email_1') }}"><i class="fa-solid fa-envelope"></i></a>
                                                            </button>
                                                            <button class="mr-[25px] hover:text-secondary" aria-label="svg"  style="color:black; font-size:18px">
                                                                <a href="{{ $property->phone != '' ? 'https://wa.me/'. $property->phone : 'https://wa.me/'.getSettings('agent_number') }}"><i class="fas fa-share"></i></a>
                                                            </button>
                                                        </span>
                                                    </li>
                                                </ul>
                                                <div class="flex flex-1 flex-wrap absolute bottom-1 left-1">
                                                    @if($property->agent_image == '')
                                                    <img src="{{url('')}}/assets/images/team/images.jpg" class="flex flex-wrap flex-col " style="border-radius: 50%; width:50px; border-color: rgb(11,44,61); border: 2px solid;" alt="Avatar">
                                                    <p class="font-lora text-base text-primary leading-none font-bold place-self-center mx-1">
                                                        Fg Properties
                                                    </p>
                                                        @else
                                                    <img src="{{config('fgproperties.file_path').$property->agent_image}}" class="flex flex-wrap flex-col " style="border-radius: 50%; width:50px; border-color: rgb(11,44,61); border: 2px solid;" alt="Avatar">
                                                    <p class="font-lora text-base text-primary leading-none font-bold place-self-center mx-1">
                                                        Fg Properties
                                                    </p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="swiper-button-next" style="left: auto; color: black; border-radius: 100%; background-color: white; padding: 30px;"></div>
                                <div class="swiper-button-prev" style="right: auto; color: black; border-radius: 100%; background-color: white; padding: 30px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <!-- Explore Cities End-->

    <!-- Popular Properties start -->
        <!-- <section class="popular-properties py-[80px] lg:py-[120px] mb-[-180px]">
            <div class="container">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between mb-[50px]">
                            <div>
                                <span class="text-secondary text-tiny inline-block mb-2" style="font-size: 20px; color: #D2AC47;">Best Choice</span>
                                <h2 class="font-lora text-primary text-[24px] sm:text-[40px] capitalize font-medium">
                                    <b>Featured Properties</b><span class="text-secondary">.</span></h2>
                            </div>
                            <div>
                                <a href="{{ route('project') }}" class="flex flex-wrap items-center text-secondary text-tiny" style="font-size:25px">Explore all
                                    <svg class="ml-[10px]" width="26" height="11" viewBox="0 0 26 11" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20.0877 0.69303L24.2075 5.00849H0V5.99151H24.2075L20.0877 10.307L20.7493 11L26 5.5L20.7493 0L20.0877 0.69303Z" fill="currentColor" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-[30px]">

                    <div class="overflow-hidden rounded-md drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] bg-[#FFFDFC] text-center transition-all duration-300 hover:-translate-y-[10px]">
                        <div class="relative">
                            <a href="{{ route('project') }}" class="block">
                                <img src="{{url('')}}/assets/images/properties/properties1.png" class="w-full h-full" loading="lazy" width="370" height="266" alt="Orchid Casel de Paradise.">
                            </a>
                            <div class="flex flex-wrap flex-col absolute top-5 right-5">
                                <button class="flex flex-wrap items-center bg-[rgb(11,44,61,0.8)] p-[5px] rounded-[2px] text-white mb-[5px] text-xs"><img class="mr-1" src="{{url('')}}/assets/images/icon/camera.png" loading="lazy" width="13" height="10" alt="camera icon">07</button>
                                <button class="flex flex-wrap items-center bg-[rgb(11,44,61,0.8)] p-[5px] rounded-[2px] text-white text-xs"><img class="mr-1" src="{{url('')}}/assets/images/icon/video.png" loading="lazy" width="14" height="10" alt="camera icon">08</button>
                            </div>
                            <span class="absolute bottom-5 left-5 bg-[#FFFDFC] p-[5px] rounded-[2px] text-primary leading-none text-[14px] font-normal capitalize">for Sale</span>
                        </div>

                        <div class="py-[20px] px-[20px]">
                            <h3><a href="{{ route('project') }}" class="font-lora leading-tight text-[22px] xl:text-[26px] text-primary font-medium">Sobha Creek Vistas Tower C.</a></h3>
                            <h4><a href="{{ route('project') }}" class="font-light text-tiny underline">18B Central Street, Dubai</a></h4>
                            <span class="font-light text-sm">Added: 25 November, 2021</span>
                            <div class="before:block before:absolute before:top-1/2 before:-translate-y-1/2 before:h-[1px] before:w-full before:z-[-1] before:bg-[#E0E0E0] relative"><span class="font-lora text-base text-primary px-[15px] bg-white font-medium">Price: 255300 AED</span></div>
                            <p class="font-light">1230 Sq.fit - 4 Bed - 3 Bath - 2 Garage</p>
                        </div>
                    </div>
                    <div class="overflow-hidden rounded-md drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] bg-[#FFFDFC] text-center transition-all duration-300 hover:-translate-y-[10px]">
                        <div class="relative">
                            <a href="" class="block">
                                <img src="{{url('')}}/assets/images/properties/properties2.png" class="w-full h-full" loading="lazy" width="370" height="266" alt="Ruposibangla de parlosia.">
                            </a>
                            <div class="flex flex-wrap flex-col absolute top-5 right-5">
                                <button class="flex flex-wrap items-center bg-[rgb(11,44,61,0.8)] p-[5px] rounded-[2px] text-white mb-[5px] text-xs"><img class="mr-1" src="{{url('')}}/assets/images/icon/camera.png" loading="lazy" width="13" height="10" alt="camera icon">07</button>
                                <button class="flex flex-wrap items-center bg-[rgb(11,44,61,0.8)] p-[5px] rounded-[2px] text-white text-xs"><img class="mr-1" src="{{url('')}}/assets/images/icon/video.png" loading="lazy" width="14" height="10" alt="camera icon">08</button>
                            </div>
                            <span class="absolute bottom-5 left-5 bg-[#FFFDFC] p-[5px] rounded-[2px] text-primary leading-none text-[14px] font-normal capitalize">for Rent</span>
                        </div>

                        <div class="py-[20px] px-[20px]">
                            <h3><a href="" class="font-lora leading-tight text-[22px] xl:text-[26px] text-primary font-medium">DAMAC Tower Amman.</a></h3>
                            <h4><a href="" class="font-light text-tiny underline">18B Central Street, Dubai</a></h4>
                            <span class="font-light text-sm">Added: 25 November, 2021</span>
                            <div class="before:block before:absolute before:top-1/2 before:-translate-y-1/2 before:h-[1px] before:w-full before:z-[-1] before:bg-[#E0E0E0] relative"><span class="font-lora text-base text-primary px-[15px] bg-white font-medium">Price: 255300 AED</span></div>
                            <p class="font-light">1800 Sq.fit - 5 Bed - 3 Bath - 2 Garage</p>
                        </div>
                    </div>
                    <div class="overflow-hidden rounded-md drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] bg-[#FFFDFC] text-center transition-all duration-300 hover:-translate-y-[10px]">
                        <div class="relative">
                            <a href="" class="block">
                                <img src="{{url('')}}/assets/images/properties/properties3.png" class="w-full h-full" loading="lazy" width="370" height="266" alt="Sinomen Studio Palace.">
                            </a>
                            <div class="flex flex-wrap flex-col absolute top-5 right-5">
                                <button class="flex flex-wrap items-center bg-[rgb(11,44,61,0.8)] p-[5px] rounded-[2px] text-white mb-[5px] text-xs"><img class="mr-1" src="{{url('')}}/assets/images/icon/camera.png" loading="lazy" width="13" height="10" alt="camera icon">07</button>
                                <button class="flex flex-wrap items-center bg-[rgb(11,44,61,0.8)] p-[5px] rounded-[2px] text-white text-xs"><img class="mr-1" src="{{url('')}}/assets/images/icon/video.png" loading="lazy" width="14" height="10" alt="camera icon">08</button>
                            </div>
                            <span class="absolute bottom-5 left-5 bg-[#FFFDFC] p-[5px] rounded-[2px] text-primary leading-none text-[14px] font-normal capitalize">for Sale</span>
                        </div>

                        <div class="py-[20px] px-[20px]">
                            <h3><a href="" class="font-lora leading-tight text-[22px] xl:text-[26px] text-primary font-medium">The Crest Tower B .</a></h3>
                            <h4><a href="" class="font-light text-tiny underline">194 Mercer Street, 627 Broadway, Dubai</a></h4>
                            <span class="font-light text-sm">Added: 25 November, 2021</span>
                            <div class="before:block before:absolute before:top-1/2 before:-translate-y-1/2 before:h-[1px] before:w-full before:z-[-1] before:bg-[#E0E0E0] relative"><span class="font-lora text-base text-primary px-[15px] bg-white font-medium">Price: 255300 AED</span></div>
                            <p class="font-light">1230 Sq.fit - 4 Bed - 3 Bath - 2 Garage</p>
                        </div>
                    </div>

                </div>

            </div>
        </section> -->
    <!-- Popular Properties end -->

    <!-- Popular Area start -->
        <section class="popular-properties py-[80px] lg:py-[120px]">
            <div class="container">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between ">
                            <div>
                                <span class="text-secondary text-tiny inline-block" style="font-size: 16px; color: #D2AC47;">Best Choice</span>
                                <h2 class="font-lora text-primary text-[20px] sm:text-[20px] capitalize font-medium">
                                    <b>Popular Areas In Dubai</b><span class="text-secondary">.</span></h2>
                            </div>
                            <div>
                                <a href="{{ route('project') }}" class="flex flex-wrap items-center text-secondary text-tiny" style="font-size:16px">Explore all
                                    <svg class="ml-[10px]" width="26" height="11" viewBox="0 0 26 11" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="m20.088.693 4.12 4.315H0v.984h24.207l-4.12 4.315.662.693L26 5.5 20.75 0l-.662.693Z"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="mt-5 grid md:grid-cols-3 w-auto gap-4 sm:grid-cols-none ">
                    <div class="swiper-slide text-center area">
                        <div class="relative group">
                            <a href="{{ route('project') }}" class="block group-hover:shadow-[0_10px_15px_0px_rgba(0,0,0,0.1)] transition-all duration-300">
                                <figure><img src="{{url('')}}/assets/images/area/dubai-marina.jpg" class="rounded-[15px]" alt=""></figure>
                                <div class="bg-[rgb(255,253,252,0.9)] rounded-[6px] px-[5px] py-[5px] absolute bottom-[15px] left-[25px] mb-25 right-[25px]">
                                    <span class="font-lora font-normal text-[20px] text-primary ">Dubai Marina</span>
                                    <p class="font-light text-[15px] capitalize text-secondary "><b>Price From 600,000 AED</b></p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="swiper-slide text-center area">
                        <div class="relative group">
                            <a href="{{ route('project') }}" class="block group-hover:shadow-[0_10px_15px_0px_rgba(0,0,0,0.1)] transition-all duration-300">
                                <figure><img src="{{url('')}}/assets/images/area/emaar-beachfront.jpg" class="rounded-[15px]" alt=""></figure>
                                <div class="bg-[rgb(255,253,252,0.9)] rounded-[6px] px-[5px] py-[5px] absolute bottom-[15px] left-[25px] mb-25 right-[25px]">
                                    <span class="font-lora font-normal text-[20px] text-primary ">Emaar</span>
                                    <p class="font-light text-[15px] capitalize text-secondary "><b>Price From 600,000 AED</b></p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="swiper-slide text-center area">
                        <div class="relative group">
                            <a href="{{ route('project') }}" class="block group-hover:shadow-[0_10px_15px_0px_rgba(0,0,0,0.1)] transition-all duration-300">
                                <figure><img src="{{url('')}}/assets/images/area/dubai-hills-estate.jpg" class="rounded-[15px]" alt=""></figure>
                                <div class="bg-[rgb(255,253,252,0.9)] rounded-[6px] px-[5px] py-[5px] absolute bottom-[15px] left-[25px] mb-25 right-[25px]">
                                    <span class="font-lora font-normal text-[20px] text-primary ">Dubai Hills</span>
                                    <p class="font-light text-[15px] capitalize text-secondary "><b>Price From 600,000 AED</b></p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="mt-5 grid md:grid-cols-4 w-auto gap-4 sm:grid-cols-none">
                    <div class="swiper-slide text-center area">
                        <div class="relative group">
                            <a href="{{ route('project') }}" class="block group-hover:shadow-[0_10px_15px_0px_rgba(0,0,0,0.1)] transition-all duration-300">
                                 <figure><img src="{{url('')}}/assets/images/area/business-bay_-scaled.jpg" class="rounded-[15px]" alt=""></figure>
                                 <div class="bg-[rgb(255,253,252,0.9)] rounded-[6px] px-[5px] py-[5px] absolute bottom-[15px] left-[25px] mb-25 right-[25px]">
                                    <span class="font-lora font-normal text-[20px] text-primary ">Dubai Marina</span>
                                    <p class="font-light text-[15px] capitalize text-secondary "><b>Price From 600,000 AED</b></p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="swiper-slide text-center area">
                        <div class="relative group">
                            <a href="{{ route('project') }}" class="block group-hover:shadow-[0_10px_15px_0px_rgba(0,0,0,0.1)] transition-all duration-300">
                                <figure><img src="{{url('')}}/assets/images/area/palm-jumeirah.jpg" class="rounded-[15px]" alt=""></figure>
                                <div class="bg-[rgb(255,253,252,0.9)] rounded-[6px] px-[5px] py-[5px] absolute bottom-[15px] left-[25px] mb-25 right-[25px]">
                                    <span class="font-lora font-normal text-[20px] text-primary ">Palm Jumeirah</span>
                                    <p class="font-light text-[15px] capitalize text-secondary "><b>Price From 600,000 AED</b></p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="swiper-slide text-center area">
                        <div class="relative group">
                            <a href="{{ route('project') }}" class="block group-hover:shadow-[0_10px_15px_0px_rgba(0,0,0,0.1)] transition-all duration-300">
                                <figure><img src="{{url('')}}/assets/images/area/downtown-header.jpg" class="rounded-[15px]" alt=""></figure>
                                <div class="bg-[rgb(255,253,252,0.9)] rounded-[6px] px-[5px] py-[5px] absolute bottom-[15px] left-[25px] mb-25 right-[25px]">
                                    <span class="font-lora font-normal text-[20px] text-primary ">Downtown Header</span>
                                    <p class="font-light text-[15px] capitalize text-secondary "><b>Price From 600,000 AED</b></p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="swiper-slide text-center area">
                        <div class="relative group">
                            <a href="{{ route('project') }}" class="block group-hover:shadow-[0_10px_15px_0px_rgba(0,0,0,0.1)] transition-all duration-300">
                                <figure><img src="{{url('')}}/assets/images/area/jbr.jpg" class="rounded-[15px]" alt=""></figure>
                                <div class="bg-[rgb(255,253,252,0.9)] rounded-[6px] px-[5px] py-[5px] absolute bottom-[15px] left-[25px] mb-25 right-[25px]">
                                    <span class="font-lora font-normal text-[20px] text-primary ">JBR</span>
                                    <p class="font-light text-[15px] capitalize text-secondary "><b>Price From 600,000 AED</b></p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div> 
            </div>
        </section>
    <!-- Popular Area end -->

    <!-- About Us Sectin Start -->
        <section class="about-section lg:pt-[0px] mt-[-6rem]">
            <div class="container">
                <div class="grid grid-cols-12 gap-6 items-center">
                    <div class="col-span-12 lg:col-span-6">
                        <span class="text-secondary text-tiny inline-block" style="font-size: 16px; color: #D2AC47;">Why Choose us</span>
                        <h2 class="font-lora text-primary text-[20px] sm:text-[20px] leading-[1.277] capitalize mb-5 lg:mb-16 font-medium max-w-[500px]">We Provide Latest Properties for our valuable Clients<span class="text-secondary">.</span></h2>
                        <div class="scene" data-relative-input="true">
                            <img data-depth="0.1" src="{{url('')}}/assets/images/about/about1.png" class="" loading="lazy" width="729" height="663" alt="about Image">
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6 lg:pl-[70px] mt-12">
                        <p class="max-w-[448px] text-sm">You can find out plenty of options for properties here with us. A large number of possessions are available for purchase, sale, or rental. So, you have a lot of options to select from and save a lot of money.</p>

                        <div class="-mb-10 mt-12 xl:mt-[70px] 2xl:mt-[100px]">
                            <div class="flex flex-wrap mb-5 lg:mb-10">
                                <img src="{{url('')}}/assets/images/icon/doller.png" class="self-start mr-5" loading="lazy" width="50" height="50" alt="about Image">
                                <div class="flex-1">
                                    <h3 class="font-lora text-primary text-[20px] xl:text-lg capitalize mb-2">Cost-effective</h3>
                                    <p class="max-w-[315px] text-sm">Because most properties are reasonable and cost-effective, you have the opportunity to find the greatest one.</p>
                                </div>

                            </div>
                            <div class="flex flex-wrap mb-5 lg:mb-10">
                                <img src="{{url('')}}/assets/images/icon/location.png" class="self-start mr-5" loading="lazy" width="50" height="50" alt="about Image">
                                <div class="flex-1">
                                    <h3 class="font-lora text-primary text-[20px] xl:text-lg capitalize mb-2">Privileged location</h3>
                                    <p class="max-w-[315px] text-sm">Location is prime and up to the mark to offer all the basic facilities and needs to live a quality life.</p>
                                </div>

                            </div>
                            <div class="flex flex-wrap mb-5 lg:mb-10">
                                <img src="{{url('')}}/assets/images/icon/trusted.png" class="self-start mr-5" loading="lazy" width="50" height="50" alt="about Image">
                                <div class="flex-1">
                                    <h3 class="font-lora text-primary text-[20px] xl:text-lg capitalize mb-2">
                                        Reliable and safe</h3>
                                    <p class="max-w-[315px] text-sm">We manage to make our reputation over decade in real estate market quite Reliable and secure. This is truly a valuable asset for us.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- About Us Sectin End -->

            
<!-- <br>
<br> -->
        <!-- Brand section Start-->

         <section class="brand-section pt-[30px] lg:pt-[30px]">
            <div class="container">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="mb-[60px] text-center">
                            <!-- <span class="text-secondary text-tiny inline-block mb-2" style="font-size: 20px; color: #D2AC47;">Our Developers</span> -->
                            <h2 class="font-lora text-primary text-[20px] sm:text-[20px] capitalize font-medium">
                             <b>Our Partners</b><span class="text-secondary">.</span></h2>
                        </div>
                    </div>
                    <div class="col-span-12">
                        <div class="brand-slider">
                            <div class="swiper" id="swiper1">
                                <div class="swiper-wrapper">
                                    <!-- swiper-slide start -->
                                    @foreach($developers as $dev)
                                        <div class="swiper-slide text-center">
                                            <a href="{{ route('projects.developer',$dev->slug ) }}" class="block">
                                                <img src="{{config('fgproperties.file_path').$dev->logo}}" class="w-auto h-auto block mx-auto" loading="lazy" style="width: 100%;" alt="Arada">
                                            </a>
                                        </div>
                                    @endforeach
                                    <!-- swiper-slide end-->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </section>

        <!-- Brand section End-->

    <!-- Blog Section Start  -->

        <section class="blog-section relative mt-[50px]">
            <div class="container">
                <div class="">
                    <div class="">
                        <div class="mb-[60px] text-center">
                            <span class="text-secondary text-tiny inline-block" style="font-size: 16px; color: #D2AC47;">Our Blog</span>
                            <h2 class="font-lora text-primary text-[20px] sm:text-[20px] capitalize font-medium">
                                <b>Check our blog post's</b><span class="text-secondary">.</span></h2>
                        </div>
                    </div>
                    <div class="">
                        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-x-[30px] mb-[-30px]">
                            @foreach($blog as $blogs)
                            <div class="mb-[30px] ">
                                <a href="{{route('blog.post',$blogs->slug)}}" class="block overflow-hidden rounded-[6px] mb-[30px]">
                                    <img class="w-full md:h-[15rem] h-full rounded-[15px]" src="{{config('fgproperties.file_path').$blogs->image}}" width="370" height="270" loading="lazy" alt="{{ $blogs->name }}">
                                </a>
                                <div>
                                    <span class="block leading-none font-normal text-[13px] text-secondary mb-[10px] relative before:absolute before:left-0 before:top-1/2 -translate-y-1/2">{{ $blogs->by }} | {{ Carbon\Carbon::parse($blogs->date)->format('d-M-Y') }}</span>
                                    <h3><a href="{{route('blog.post',$blogs->slug)}}" class="font-lora text-[16px] xl:text-[16px] leading-[1.285] text-primary block mb-[10px] hover:text-secondary transition-all font-medium">{{ $blogs->name }}</a></h3>
                                    <p class="font-light text-[#494949] text-[13px] leading-[1.75]">{{$blogs->short_description}}</p>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- Blog Section End  -->



    <!-- News Letter section start -->
        <!--<section class="pt-[80px] lg:pt-[120px]">
            <div class="container">
                <div class="grid grid-cols-1">
                    <div class="col-span">
                        <div class="flex flex-wrap items-center justify-between py-[30px] xl:py-[40px] px-[30px] xl:px-[55px] shadow-[0px_10px_20px_rgba(196,196,196,0.5)] rounded-[15px] border border-[rgba(1,100,80,0.25)] bg-white mb-[80px] lg:mb-[-75px]">
                            <div class="w-full lg:w-auto">
                                <h3 class="font-lora text-primary text-[24px] sm:text-[30px] xl:text-[36px] leading-[1.277] mb-[10px]">Interested in Buying Property?</h3>
                                <p class="text-secondary leading-[1.5] tracking-[0.03em]">Put your email address to subscribe to our news letter.</p>
                            </div>
                            <div class="w-full lg:w-auto mt-5 lg:mt-0">
                                <form id="mc-form" action="#" class="relative w-full">
                                    <input id="mc-email" class="font-light text-primary leading-[1.75] opacity-100 border border-[#FF6500] w-full lg:w-[395px] xl:w-[495px] h-[60px] rounded-[10px] py-[15px] pl-[15px] pr-[15px] sm:pr-[135px] focus:border-primary focus:outline-none border-opacity-60 placeholder:text-primary" type="text" placeholder="Enter your email here...">
                                    <button id="mc-submit" type="submit" class="text-white font-medium text-[16px] leading-none tracking-[0.02em] bg-secondary py-[15px] px-[20px] mt-5 sm:mt-0 rounded-[10px] hover:bg-primary transition-all sm:absolute sm:right-[5px] sm:top-1/2 sm:-translate-y-1/2">Get Listed</button>
                                </form>
                                <div class="mailchimp-alerts text-centre">
                                    <div class="mailchimp-submitting"></div>
                                    <div class="mailchimp-success text-green-400"></div>
                                    <div class="mailchimp-error text-red-600"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section> -->
    <!-- News Letter section End -->
@endsection

@section('bottom-mid-scripts')

@endsection

@section('bottom-bot-scripts')

<script type="text/javascript">


            $(document).ready(function () {
             
                $('#locationrent').on('input',function() {
                    var query = $('#locationrent').val(); 
                    $.ajax({
                       
                        url:"{{ route('liveSearch.rent') }}",
                  
                        type:"GET",
                       
                        data:{'location':query, "_token": "{{ csrf_token() }}",},
                       
                        success:function (data) {
                          
                            $('#rent_suggest').html(data);
                        }
                    })
                    // end of ajax call
                });

                
                $(document).on('click', '.it', function(){
                  
                    var value = $(this).text();
                    $('#locationrent').val(value);
                    $('#rent_suggest').html("");
                });
            });

            $(document).on('click', function(){
                $('#rent_suggest').html("");

            });

            $(document).ready(function () {
             
                $('#locationbuy').on('input',function() {
                    var query = $('#locationbuy').val(); 
                    $.ajax({
                       
                        url:"{{ route('liveSearch.buy') }}",
                  
                        type:"GET",
                       
                        data:{'location':query, "_token": "{{ csrf_token() }}",},
                       
                        success:function (data) {
                          
                            $('#buy_suggest').html(data);
                        }
                    })
                    // end of ajax call
                });

                
                $(document).on('click', '.it', function(){
                  
                    var value = $(this).text();
                    $('#locationbuy').val(value);
                    $('#buy_suggest').html("");
                });
            });

            $(document).on('click', function(){
                $('#buy_suggest').html("");

            });

            $(document).ready(function () {
             
                $('#locationnew').on('input',function() {
                    var query = $('#locationnew').val(); 
                    $.ajax({
                       
                        url:"{{ route('liveSearch.newProjects') }}",
                  
                        type:"GET",
                       
                        data:{'location':query, "_token": "{{ csrf_token() }}",},
                       
                        success:function (data) {
                          
                            $('#newP_suggest').html(data);
                        }
                    })
                    // end of ajax call
                });

                
                $(document).on('click', '.it', function(){
                  
                    var value = $(this).text();
                    $('#locationnew').val(value);
                    $('#newP_suggest').html("");
                });
            });

            $(document).on('click', function(){
                $('#newP_suggest').html("");

            });            


</script>
<script type="text/javascript">
    var mySwiper = new Swiper ('#swiper1', 
    {
    speed:900,
    autoplay: 
    {
      delay: 2000,
    },
    loop: true,
    slidesPerView: 5,
    spaceBetween: 10,
    slidesPerGroup: 1,
    breakpoints: {
      // when window width is >= 320px
      0: {
        slidesPerView: 2,
      },
      // when window width is >= 480px
      576: {
        slidesPerView: 2,
      },
      // when window width is >= 640px
      768: {
        slidesPerView: 2,
      },
      992: {
        slidesPerView: 5,
      },
    },
    }); 


</script>
<script type="text/javascript">
    if($("#b1").classlist.contains("active")){
        $("#b1view").visibility("hidden");
    }
    else{
       $("#b1view").visibility("visible"); 
    }
</script>
<script src="{{url('')}}/assets/js/plugisdns/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->

<script>
    function myFunction(x) {
      if (x.matches) { // If media query matches
        
      } 
    }
    var swiper = new Swiper("#swiper", {
          slidesPerView: 3,
          spaceBetween: 10,
          slidesPerGroup: 1,
          loop: true,
          loopFillGroupWithBlank: true,
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
          breakpoints: {
          // when window width is >= 320px
          0: {
            slidesPerView: 1,
          },
          // when window width is >= 480px
          412: {
            slidesPerView: 1,
          },
          // when window width is >= 640px
          768: {
            slidesPerView: 2,
          },
          992: {
            slidesPerView: 3,
          },
        },
        });

    var x = window.matchMedia("(max-width: 700px)")
    myFunction(x) // Call listener function at run time
    x.addListener(myFunction) // Attach listener function on state changes
</script>

<!-- <script>
    function myFunction(x) {
      if (x.matches) { // If media query matches
        var swiper = new Swiper("#swiper", {
          slidesPerView: 1,
          spaceBetween: 10,
          slidesPerGroup: 1,
          loop: true,
          loopFillGroupWithBlank: true,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
        });
      } 

      else {
       var swiper = new Swiper("#swiper", {
          slidesPerView: 1,
          spaceBetween: 10,
          slidesPerGroup: 1,
          loop: true,
          loopFillGroupWithBlank: true,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
        });
      }
    }

    var x = window.matchMedia("(min-width: 200px) and (max-width: 550px)")
    myFunction(x) // Call listener function at run time
    x.addListener(myFunction) // Attach listener function on state changes
</script>

<script>
    function myFunction1(y) {
      if (y.matches) { // If media query matches
        var swiper = new Swiper("#swiper", {
          slidesPerView: 2,
          spaceBetween: 10,
          slidesPerGroup: 1,
          loop: true,
          loopFillGroupWithBlank: true,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
        });
      }
      else {
       var swiper = new Swiper("#swiper", {
          slidesPerView: 2,
          spaceBetween: 10,
          slidesPerGroup: 1,
          loop: true,
          loopFillGroupWithBlank: true,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
        });
      }
    }

    var y = window.matchMedia("(min-width: 551px) and (max-width: 1100px)")
    myFunction1(y) // Call listener function at run time
    y.addListener(myFunction1) // Attach listener function on state changes
</script>

<script>
    function myFunction2(z) {
      if (z.matches) { // If media query matches
        var swiper = new Swiper("#swiper", {
          slidesPerView: 3,
          spaceBetween: 10,
          slidesPerGroup: 1,
          loop: true,
          loopFillGroupWithBlank: true,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
        });
      }
      // else {
      //  var swiper = new Swiper("#swiper", {
      //     slidesPerView: 3,
      //     spaceBetween: 10,
      //     slidesPerGroup: 1,
      //     loop: true,
      //     loopFillGroupWithBlank: true,
      //     pagination: {
      //       el: ".swiper-pagination",
      //       clickable: true,
      //     },
      //     navigation: {
      //       nextEl: ".swiper-button-next",
      //       prevEl: ".swiper-button-prev",
      //     },
      //   });
      // }
      
    }

    var z = window.matchMedia("(min-width: 1101px) and (max-width: 2400px)")
    myFunction2(z) // Call listener function at run time
    z.addListener(myFunction2) // Attach listener function on state changes
</script> -->

<script>

    function morebuy() {
        if(document.getElementById("buymore").style.display == "none")
        document.getElementById("buymore").style.display = "block";
        else
        document.getElementById("buymore").style.display = "none";
    }
    document.addEventListener('mousedown', function(e) {
      let container = document.getElementById('buymore');
      if (!container.contains(e.target)) {
        container.style.display = 'none';
      }
    });

    function morerent() {
        if(document.getElementById("rentmore").style.display == "none")
        document.getElementById("rentmore").style.display = "block";
        else
        document.getElementById("rentmore").style.display = "none";
    }
    document.addEventListener('mousedown', function(e) {
      let container = document.getElementById('rentmore');
      if (!container.contains(e.target)) {
        container.style.display = 'none';
      }
    });

    function pricerent() {
        if(document.getElementById("pricerentmore").style.display == "none")
        document.getElementById("pricerentmore").style.display = "block";
        else
        document.getElementById("pricerentmore").style.display = "none";
    }
    document.addEventListener('mousedown', function(e) {
      let container = document.getElementById('pricerentmore');
      if (!container.contains(e.target)) {
        container.style.display = 'none';
      }
    });

    function pricenew() {
        if(document.getElementById("pricenewmore").style.display == "none")
        document.getElementById("pricenewmore").style.display = "block";
        else
        document.getElementById("pricenewmore").style.display = "none";
    }
    document.addEventListener('mousedown', function(e) {
      let container = document.getElementById('pricenewmore');
      if (!container.contains(e.target)) {
        container.style.display = 'none';
      }
    });

    function pricebuy() {
        if(document.getElementById("pricebuymore").style.display == "none")
        document.getElementById("pricebuymore").style.display = "block";
        else
        document.getElementById("pricebuymore").style.display = "none";
    }
    document.addEventListener('mousedown', function(e) {
      let container = document.getElementById('pricebuymore');
      if (!container.contains(e.target)) {
        container.style.display = 'none';
      }
    });



    function moreNewP() {
        if(document.getElementById("NewPmore").style.display == "none")
        document.getElementById("NewPmore").style.display = "block";
        else
        document.getElementById("NewPmore").style.display = "none";
    }
    document.addEventListener('mousedown', function(e) {
      let container = document.getElementById('NewPmore');
      if (!container.contains(e.target)) {
        container.style.display = 'none';
      }
    });

</script>
<script>
      var swiper = new Swiper(".swi", {
        spaceBetween: 30,
        effect: "fade",
        autoplay: {
          delay: 4000,
          disableOnInteraction: false
        },
         pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
        
        
      });
</script>
@endsection
