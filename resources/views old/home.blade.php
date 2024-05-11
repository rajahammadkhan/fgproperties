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
}

@media (min-width: 1600px) {
    #buy{
        width: 1050px;
    }

    #b1view{
        margin-top: -0.5rem;
        margin-right: 20rem;
    }

    #rent{
        width: 1050px;
        margin-left: 10rem;
    }

    #co-living{
        width: 1050px;
        margin-left: 10rem;
    }  
    .selectricc-border-none{
        margin-left: 10rem;
    } 
    #bannerimages img{
        height: 35rem;
    }   
    #bannerimages .absolute{
        top: 30%;
    }  
    #filterz{
        margin-top: -11rem;
    }
    #mainhead{
        color: rgb(11, 44, 61);
    }
}

@media (min-device-width: 1250px) and (max-device-width: 1500px) {
    #buy{
        width: 955px;
    }

    #b1view{
        margin-top: -0.5rem;
        margin-right: 12rem;
    }

    #rent{
        width: 955px;
        margin-left: 8rem;
    }

    #co-living{
        width: 955px;
        margin-left: 8rem;
    } 
    .selectricc-border-none{
        margin-left: 8rem;
    } 
    #bannerimages img{
        height: 35rem;
    }  
    #bannerimages .absolute{
        top: 30%;
    }   
    #filterz{
        margin-top: -11rem;
    }
    #mainhead{
        color: rgb(11, 44, 61);
    }
}

@media (max-width: 800px) {
    #bannerimages img{
        height: 15rem;
    }
    #bannerimages .absolute{
        top: 80%;
    }
    #filterz{
        margin-top: 20px;
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
    <div class="relative">

            <!-- Hero section start -->

            <section class="relative before:absolute before:inset-0 before:content-[''] ">
                <div class="mt-[-9.5rem]" id="bannerimages">
                    <img class="w-full min-h-[60px] md:min-h-[60px] object-cover" src="{{url('')}}/assets/images/hero/home-3.jpg" alt="hero image">
                    <div class="absolute right-0 left-0 lg:top-[110px] xl:top-[155px] -translate-y-1/2 lg:translate-y-0">
                        <div class="container">
                            <div class="grid grid-cols-12">
                                <div class="col-span-12">
                                    <div class="lg:max-w-[500px] xl:max-w-[800px] text-center ml-auto mr-auto lg:mb-[-75px]">
                                        <!-- <span class="text-base text-white block mb-5" style="font-size: 23px;">A new way to find Properties</span> -->
                                        <h1 class="font-lora  text-[30px] sm:text-[40px] md:text-[40px] lg:text-[40px] leading-tight title" style="font-weight: 800;" id="mainhead">
                                            Search and Find Luxury Homes</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- Hero section end -->

<!-- Addvanced search tab start -->
            <div class="container md:mt-[120px] lg:mt-[-180px] z-[2] pl-[60px] lg:pl-[50px] 2xl::pl-[0px] lg:absolute lg:left-0 lg:right-0 lg:top-[95%] lg:translate-y-[-120px] md:translate-y-[-350px]" id="filterz">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="relative text-center">
                            <ul class="tab-nav search-tab inline-flex px-[15px] sm:px-[30px] pt-[15px] pb-[21px] border-t border-l border-r border-solid border-[#016450] rounded-tl-[15px] rounded-tr-[15px] bg-[rgb(237,252,250,0.9)]" id="ul1">
                                <li data-tab="rent" class="mr-[5px] sm:mr-[10px] md:mr-[46px] my-0 active"><button class="font-lora leading-none px-[5px] sm:px-[10px] capitalize text-primary transition-all text-base xl:text-[22px] before:absolute before:left-auto before:right-0 before:bottom-[-31px] before:z-10 before:rounded-full before:w-0 before:h-[3px] before:content-[''] before:bg-secondary relative before:transition-all ease-out" id="rent1">rent</button>
                                </li>
                                <li data-tab="buy" class="mr-[5px] sm:mr-[10px] md:mr-[46px] my-0"><button class="font-lora leading-none px-[5px] sm:px-[10px] capitalize text-primary transition-all text-base xl:text-[22px] before:absolute before:left-auto before:right-0 before:bottom-[-31px] before:z-10 before:rounded-full before:w-0 before:h-[3px] before:content-[''] before:bg-secondary relative before:transition-all ease-out" id="buy1">buy</button>
                                </li>
                                <li data-tab="co-living" class="mr-[5px] sm:mr-[10px] md:mr-[46px] my-0"><button class="font-lora leading-none px-[5px] sm:px-[10px] capitalize text-primary transition-all text-base xl:text-[22px] before:absolute before:left-auto before:right-0 before:bottom-[-31px] before:z-10 before:rounded-full before:w-0 before:h-[3px] before:content-[''] before:bg-secondary relative before:transition-all ease-out" id="new_projects1">New Projects</button>
                                </li>
                                <a href="{{ route('sell') }}"><li class="md:mr-[0px] my-0"><button class="font-lora leading-none px-[5px] sm:px-[10px] capitalize text-primary transition-all text-base xl:text-[22px] before:absolute before:left-auto before:right-0 before:bottom-[-31px] before:z-10 before:rounded-full before:w-0 before:h-[3px] before:content-[''] before:bg-secondary relative before:transition-all ease-out" id="sell1">sell</button></a>
                                </li>
                            </ul>

                        </div>
                        <div class="relative selectricc-border-none">
                            <button class="tab-toggle-btn px-[10px] py-[15px] absolute top-[0px] left-[-45px] border-l border-t border-b border-solid border-[#016450] bg-[rgb(237,252,250,0.9)] text-primary rounded-tl-[10px] rounded-bl-[10px]" id="b1" aria-label="svg icon">
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
                            </button>
                            <div id="buy" class="tab-content bg-[rgb(237,252,250,0.9)] border border-solid border-[#016450] rounded-bl-[15px] rounded-br-[15px] rounded-tr-[15px] px-[15px] sm:px-[30px] py-[28px] lg:max-h-56 overflow-visible">
                                <form action="{{ route('buy.search') }}" method="post">
                                    @csrf
                                    <div class="advanced-searrch flex flex-wrap -mb-[45px] lg:mr-[-2px]">
                                        <div class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[10px] xl:mr-[20px] last:mr-0 last:border-r-0 mb-[45px]" style="">
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="{{url('')}}/assets/images/icon/property.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="citybuy" class="font-lora block capitalize text-primary text-[12px] xl:text-[18px] leading-none mb-1">City</label>
                                                <select name="citybuy" id="citybuy" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                    <option selected disabled value="">City</option>
                                                    <option value="Dubai">Dubai</option>
                                                    <option value="Al Ain">Al Ain</option>
                                                    <option value="Sharjah">Sharjah</option>
                                                    <option value="Abu Dhabi">Abu Dhabi</option>
                                                    <option value="Ras al Khaimah">Ras al Khaimah</option>
                                                    <option value="Fujairah">Fujairah</option>
                                                    <option value="Ajman">Ajman</option>
                                                    <option value="Umm al Quwain">Umm al Quwain</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[10px] xl:mr-[20px] last:mr-0 last:border-r-0 mb-[45px]">
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="{{url('')}}/assets/images/icon/location.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="locationbuy" class="font-lora block capitalize text-primary text-[12px] xl:text-[18px] leading-none mb-1">Location</label>
                                                <input id="locationbuy" type="text" name="locationbuy" placeholder="Choose location" class="text-tiny placeholder:text-body leading-none font-light pr-3 focus:outline-none w-full bg-transparent">
                                            </div>
                                        </div>
                                        <div class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[10px] xl:mr-[20px] last:mr-0 last:border-r-0 mb-[45px]">
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="{{url('')}}/assets/images/icon/property.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="typebuy" class="font-lora block capitalize text-primary text-[12px] xl:text-[18px] leading-none mb-1">Property
                                                    Type</label>
                                                <select name="typebuy" id="typebuy" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer" >
                                                    <option selected disabled value="">type</option>
                                                    <option value="apartment">Apartment</option>
                                                    <option value="villa">Villa</option>
                                                    <option value="tounhouse">Tounhouse</option>
                                                    <option value="penthouse">Penthouse</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[10px] xl:mr-[20px] last:mr-0 last:border-r-0 mb-[45px]" style=" border:none; cursor: pointer;" >
                                            <div class="mr-4 self-start shrink-0">
                                                                <!-- <img src="{{url('')}}/assets/images/icon/dollar-circle.svg" width="24" height="24" alt="svg icon"> -->
                                                            </div>
                                                            <div class="block" style=";" onclick="pricebuy()">
                                                                <label for="price" class="font-lora block capitalize text-primary text-[12px] xl:text-[18px] leading-none mb-1">Price Range</label>
                                                                <label for="price" class="text-tiny placeholder:text-body leading-none font-light pr-3 focus:outline-none w-full bg-transparent">Any</label>
                                                            </div>
                                            <button class="search-btn py-auto absolute right-[12px] active " id="b1view">
                                                <img src="{{url('')}}/assets/images/icon/search-outline.svg" class="max-w-[30px] xl:w-auto" width="40" height="40" alt="svg icon">
                                                <span class="hidden">Search Properties</span>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="absolute lg:right-[10rem] lg:top-[6rem] ml-auto z-100 max-h-32 sm:hidden max-w-[20rem]" id="pricebuymore" style="display: none;">
                                            <div class="flex justify-center  rounded ">
                                            <div class="rounded-lg shadow-lg bg-white max-w-sm bg-white border-black overflow-x-hidden  z-[100] overflow-y-auto max-h-96">
                                                
                                                
                                                <div class="p-6">
                                                    <h5 class="text-gray-900 text-xl font-medium mb-2">Price Range</h5>
                                                    <div class="grid grid-cols-3 gap-0">
                                                        <div class="">
                                                            <input type="text" class="rounded form-control block w-[125%] px-4 py-2 text-sm font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlInput2" placeholder="Min AED" name="pricebuy1">
                                                        </div>
                                                        <div class="  ml-[35px]"><p> - </p></div>
                                                        <div class="">
                                                            <input type="text" class="rounded form-control block w-[125%] px-4 py-2 text-sm font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out ml-[-2rem] focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlInput2" placeholder="Max AED" name="pricebuy2">
                                                        </div>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="advanced-searrch-hidden flex flex-wrap items-center mt-[45px] -mb-[45px]">
                                        
                                        <div class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[10px] xl:mr-[20px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="{{url('')}}/assets/images/icon/bed.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="bedroomsbuy" class="font-lora block capitalize text-primary text-[12px] xl:text-[18px] leading-none mb-1">Bedrooms</label>
                                                <select name="bedroomsbuy" id="bedroomsbuy" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                   <option selected disabled value="">Bedrooms</option>
                                                   <option value="1">1 Bedroom</option>
                                                   <option value="2">2 Bedroom</option>
                                                    <option value="3">3 Bedroom</option>
                                                   <option value="4">4 Bedroom</option>
                                                    <option value="5">5 Bedroom</option>
                                                   <option value="6">6 Bedroom</option>
                                                   <option value="7">7 Bedroom</option>
                                                   <option value="8">8 Bedroom</option>
                                                    <option value="9">9 Bedroom</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="advanced-searrch-list border-r-black flex items-center lg:border-r lg:boprimaryborder-primaryD4D4] lg:mr-[10px] xl:mr-[20px] last:mr-0 last:border-r-0 mb-[45px] relative">
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="{{url('')}}/assets/images/icon/area.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="developerbuy" class="font-lora block capitalize text-primary text-[12px] xl:text-[18px] leading-none mb-1">Developers</label>
                                                <select name="developerbuy" id="developerbuy" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                    <option selected disabled value=""> developer</option>

                                                    @foreach($developers as $dev)
                                                    <option value="{{ $dev->id }}">{{$dev->developer_name}}</option>
                                                    @endforeach  
                                                </select>
                                            </div>
                                        </div>
                                        <div class="advanced-searrch-list border-r-black flex items-center lg:border-r lg:boprimaryborder-primaryD4D4] lg:mr-[10px] xl:mr-[20px] last:mr-0 last:border-r-0 mb-[45px] relative" >
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="{{url('')}}/assets/images/icon/property.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="projectsbuy" class="font-lora block capitalize text-primary text-[12px] xl:text-[18px] leading-none mb-1">Projects</label>
                                                <select name="projectsbuy" id="projectsbuy" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                     <option selected disabled value="">Project </option>
                                                    @foreach($projects as $project)
                                                    <option  value="{{$project->title}}">{{$project->title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[10px] xl:mr-[20px] last:mr-0 last:border-r-0 mb-[45px] rounded-lg " style="cursor: pointer;
                                        "  >
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="{{url('')}}/assets/images/icon/plus.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="block" style=";" onclick="morebuy()">
                                                <label for="garage" class="font-lora block capitalize text-primary text-[12px] xl:text-[18px] leading-none mb-1 show2" style="cursor: pointer" id="moreShow"  >More</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-1 place-self-end ml-auto z-100 max-h-32 sm:hidden" id="buymore" style="display: none;">
                                        <div class="flex justify-center rounded absolute  right-0">
                                            <div class="rounded-lg shadow-lg bg-white max-w-sm bg-white border-black overflow-x-hidden  z-[100] overflow-y-auto max-h-96">
                                                <div class="p-6 ">
                                                    <h5 class="text-gray-900 text-xl font-medium mb-2">Furnishing</h5>
                                                    <select class="rounded form-control block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 border-gray-300 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="furnishingbuy">
                                                        <option selected disabled value="">Select </option>
                                                        <option value="1">furnished</option>
                                                        <option value="0">unfurnished</option>
                                                    </select>
                                                    <hr>
                                                </div>
                                                <hr>
                                                <div class="p-6">
                                                    <h5 class="text-gray-900 text-xl font-medium mb-2">Amenities</h5>
                                                    <div class="flex  justify-center px-0">
                                                        <ul class="grid gap-x-4 gap-y-[5px] grid-cols-1 sm:grid-cols-2 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 px-[15px] mx-[-15px] ">
                                                            @foreach($amenities as $amenity)
                                                                <li class="flex flex-wrap inline-block  w-[10rem] text-sm ">
                                                                    <div class="form-check col-span-1  min-w-fit px-px">
                                                                        <input class="form-check-input h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer my-auto" type="checkbox" value="" id="{{$amenity->id}}">
                                                                        <label class="flex items-top form-check-label inline-block text-gray-800 mx-0" for="{{$amenity->id}}">
                                                                            {{$amenity->name }}
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>                                            
                                                </div>
                                                <hr>
                                                <div class="p-6">
                                                    <h5 class="text-gray-900 text-xl font-medium mb-2">Keywords</h5>
                                                    <input type="text" class="rounded form-control block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlInput2" placeholder="Form control lg" name="keywordsbuy">
                                                    <hr>
                                                </div>
                                                <hr>
                                                <div class="p-6">
                                                    <h5 class="text-gray-900 text-xl font-medium mb-2">Listed by</h5>
                                                    <ul class="grid gap-x-4 gap-y-[5px] grid-cols-1 sm:grid-cols-2 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 px-[15px] mx-[-15px] ">
                                                        @foreach($developers as $dev)
                                                            <li class="flex flex-wrap inline-block  w-[10rem] text-sm ">
                                                                <div class="form-check col-span-1  min-w-fit px-px">
                                                                    <input class="form-check-input h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer my-auto" type="checkbox" value="{{$dev->id}}" id="devnew{{$dev->id}}">
                                                                    <label class="flex items-top form-check-label inline-block text-gray-800 mx-0" for="devbuy{{$dev->id}}">
                                                                        {{$dev->developer_name }}
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                
                                                <hr>
                                                <div class="p-6">
                                                    <h5 class="text-gray-900 text-xl font-medium mb-2">Size sqft</h5>
                                                    <div class="grid grid-cols-3 gap-4">
                                                        <div class="col-start-1">
                                                            <!-- <input type="number" class="rounded form-control block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlInput2" placeholder="Min Sq/ft" name="min_size"> -->
                                                            <select class="rounded form-control block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="minsizebuy">
                                                                <option selected value="">Min</option>
                                                                <option value="100">100 sqft</option>
                                                                <option value="200">200 sqft</option>
                                                                <option value="300">300 sqft</option>
                                                                <option value="400">400 sqft</option>
                                                                <option value="500">500 sqft</option>
                                                                <option value="600">600 sqft</option>
                                                                <option value="700">700 sqft</option>
                                                                <option value="800">800 sqft</option>
                                                                <option value="900">900 sqft</option>
                                                                <option value="1000">1000 sqft</option>
                                                                <option value="1100">1100 sqft</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-start-2 px-auto justify-center ml-[50px]"><p> - </p></div>
                                                        <div class="col-start-3">
                                                            <!-- <input type="number" class="rounded form-control block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlInput2" placeholder="Max Sq/ft" name="max_size"> -->
                                                            <select class="rounded form-control block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="maxsizebuy">
                                                                <option selected value="">Max</option>
                                                                 <option value="200">200 sqft</option>
                                                                <option value="300">300 sqft</option>
                                                                <option value="400">400 sqft</option>
                                                                <option value="500">500 sqft</option>
                                                                <option value="600">600 sqft</option>
                                                                <option value="700">700 sqft</option>
                                                                <option value="800">800 sqft</option>
                                                                <option value="900">900 sqft</option>
                                                                <option value="1000">1000 sqft</option>
                                                                <option value="1100">1100 sqft</option>
                                                                <option value="1200">1200 sqft</option>
                                                            </select>
                                                        </div>
                                                    </div>  
                                                    <hr>
                                                </div>
                                                <hr>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>


                            <div id="rent" class="active tab-content bg-[rgb(237,252,250,0.9)] border border-solid border-[#016450] rounded-bl-[15px] rounded-br-[15px] rounded-tr-[15px] px-[15px] sm:px-[30px] py-[28px] lg:max-h-56 overflow-visible">
                                <form action="{{ route('rent.search') }}" method="post">
                                    @csrf
                                    <div class="advanced-searrch flex flex-wrap -mb-[45px] lg:mr-[-2px]">
                                        <div class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[10px] xl:mr-[20px] last:mr-0 last:border-r-0 mb-[45px]">
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="{{url('')}}/assets/images/icon/property.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1 ">
                                                <label for="cityrent" class="font-lora block capitalize text-primary text-[12px] xl:text-[18px] leading-none mb-1">City</label>
                                                <select name="cityrent" id="cityrent" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer ">
                                                    <option selected disabled value="">City</option>
                                                    <option value="Dubai">Dubai</option>
                                                    <option value="Al Ain">Al Ain</option>
                                                    <option value="Sharjah">Sharjah</option>
                                                    <option value="Abu Dhabi">Abu Dhabi</option>
                                                    <option value="Ras al Khaimah">Ras al Khaimah</option>
                                                    <option value="Fujairah">Fujairah</option>
                                                    <option value="Ajman">Ajman</option>
                                                    <option value="Umm al Quwain">Umm al Quwain</option>
                                                    <!-- <option value="3">Duplex House 3</option> -->
                                                </select>
                                            </div>
                                        </div>
                                        <div class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[10px] xl:mr-[20px] last:mr-0 last:border-r-0 mb-[45px]">
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="{{url('')}}/assets/images/icon/location.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="locationrent" class="font-lora block capitalize text-primary text-[12px] xl:text-[18px] leading-none mb-1">Location</label>
                                                <input id="locationrent" type="text" name="locationrent" placeholder="Choose location" class="text-tiny placeholder:text-body leading-none font-light pr-3 focus:outline-none w-full bg-transparent">
                                            </div>
                                        </div>
                                        <div class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[10px] xl:mr-[20px] last:mr-0 last:border-r-0 mb-[45px]">
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="{{url('')}}/assets/images/icon/property.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="typerent" class="font-lora block capitalize text-primary text-[12px] xl:text-[18px] leading-none mb-1">Property
                                                    Type</label>
                                                <select name="typerent" id="typerent" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer" >
                                                    <option selected disabled value="">type</option>
                                                    <option value="apartment">Apartment</option>
                                                    <option value="villa">Villa</option>
                                                    <option value="tounhouse">Tounhouse</option>
                                                    <option value="penthouse">Penthouse</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[10px] xl:mr-[20px] last:mr-0 last:border-r-0 mb-[45px]" style=" border:none; cursor: pointer;">
                                                            <div class="mr-4 self-start shrink-0">
                                                                <!-- <img src="{{url('')}}/assets/images/icon/dollar-circle.svg" width="24" height="24" alt="svg icon"> -->
                                                            </div>
                                                            <div class="block" style=";"onclick="pricerent()">
                                                                <label for="price" class="font-lora block capitalize text-primary text-[12px] xl:text-[18px] leading-none mb-1">Price Range</label>
                                                                <label for="price" class="text-tiny placeholder:text-body leading-none font-light pr-3 focus:outline-none w-full bg-transparent">Any</label>
                                                            </div>

                                            
                                            <!-- <div class="flex-1">
                                                <label for="pricerent" class="font-lora block capitalize text-primary text-[12px] xl:text-[18px] leading-none mb-1">Price
                                                    Range</label>
                                                    
                                                <select name="pricerent" id="pricerent" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                   <option selected value="9000000">Price Range</option>
                                                   <option  value="100000">{{number_format(100000)}} AED</option>
                                                    <option value="150000">{{number_format(150000)}} AED</option>
                                                    <option value="200000">{{number_format(200000)}} AED</option>
                                                    <option value="250000">{{number_format(250000)}} AED</option>
                                                    <option value="300000">{{number_format(300000)}} AED</option>
                                                    <option value="350000">{{number_format(350000)}} AED</option>
                                                    <option value="400000">{{number_format(400000)}} AED</option>
                                                    <option value="450000">{{number_format(450000)}} AED</option>
                                                    <option value="500000">{{number_format(500000)}} AED</option>
                                                </select>
                                            </div> -->
                                            <button class="search-btn py-auto absolute right-[27px] active " id="b1view">
                                                <img src="{{url('')}}/assets/images/icon/search-outline.svg" class="max-w-[30px] xl:w-auto" width="40" height="40" alt="svg icon">
                                                <span class="hidden">Search Properties</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="absolute lg:right-[10rem] lg:top-[10rem] ml-auto z-100 max-h-32 sm:hidden max-w-[20rem]" id="pricerentmore" style="display: none;">
                                            <div class="flex justify-center  rounded ">
                                            <div class="rounded-lg shadow-lg bg-white max-w-sm bg-white border-black overflow-x-hidden  z-[100] overflow-y-auto max-h-96">

                                                <div class="p-6">
                                                    <h5 class="text-gray-900 text-xl font-medium mb-2">Price Range</h5>
                                                    <div class="grid grid-cols-3 gap-0">
                                                        <div class="">
                                                            <input type="text" class="rounded form-control block w-[125%] px-4 py-2 text-sm font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlInput2" placeholder="Min AED" name="pricerent1">
                                                        </div>
                                                        <div class="  ml-[35px]"><p> - </p></div>
                                                        <div class="">
                                                            <input type="text" class="rounded form-control block w-[125%] px-4 py-2 text-sm font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out ml-[-2rem] focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlInput2" placeholder="Max AED" name="pricerent2">
                                                        </div>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="advanced-searrch-hidden flex flex-wrap items-center mt-[45px] -mb-[45px]">
                                        <div class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[10px] xl:mr-[20px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="{{url('')}}/assets/images/icon/bed.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="bedroomsrent" class="font-lora block capitalize text-primary text-[12px] xl:text-[18px] leading-none mb-1">Bedrooms</label>
                                                <select name="bedroomsrent" id="bedroomsrent" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                    <option selected disabled value="">Bedrooms</option>
                                                   <option value="1">1 Bedroom</option>
                                                   <option value="2">2 Bedroom</option>
                                                    <option value="3">3 Bedroom</option>
                                                   <option value="4">4 Bedroom</option>
                                                    <option value="5">5 Bedroom</option>
                                                   <option value="6">6 Bedroom</option>
                                                   <option value="7">7 Bedroom</option>
                                                   <option value="8">8 Bedroom</option>
                                                    <option value="9">9 Bedroom</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[10px] xl:mr-[20px] last:mr-0 last:border-r-0 mb-[45px] rounded-lg" style=" border:none; cursor: pointer;
                                        " onclick="morerent()" >
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="{{url('')}}/assets/images/icon/plus.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="block" style=";">
                                                <label for="garage" class="font-lora block capitalize text-primary text-[12px] xl:text-[18px] leading-none mb-1 show2" style="cursor: pointer" id="moreShow"  >More</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="absolute lg:left-96  ml-auto z-100 max-h-32 sm:hidden max-w-fit" id="rentmore" style="display: none;">
                                        <div class="flex justify-center  rounded ">
                                            <div class="rounded-lg shadow-lg bg-white max-w-sm bg-white border-black overflow-x-hidden  z-[100] overflow-y-auto max-h-96">
                                                <div class="p-6 ">
                                                    <h5 class="text-gray-900 text-xl font-medium mb-2">Furnishing</h5>
                                                    <select class="rounded form-control block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 border-gray-300 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="furnishingrent">
                                                        <option selected disabled value="">Select </option>
                                                        <option value="1">furnished</option>
                                                        <option value="0">unfurnished</option>
                                                    </select>
                                                    <hr>
                                                </div>
                                                <hr>
                                                <div class="p-6">
                                                    <h5 class="text-gray-900 text-xl font-medium mb-2">Amenities</h5>
                                                    <div class="flex  justify-center px-0">
                                                        <ul class="grid gap-x-4 gap-y-[5px] grid-cols-1 sm:grid-cols-2 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 px-[15px] mx-[-15px] ">
                                                            @foreach($amenities as $amenity)
                                                                <li class="flex flex-wrap inline-block  w-[10rem] text-sm ">
                                                                    <div class="form-check col-span-1  min-w-fit px-px">
                                                                        <input class="form-check-input h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer my-auto" type="checkbox" value="" id="{{$amenity->id}}">
                                                                        <label class="flex items-top form-check-label inline-block text-gray-800 mx-0" for="{{$amenity->id}}">
                                                                            {{$amenity->name }}
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="p-6">
                                                    <h5 class="text-gray-900 text-xl font-medium mb-2">Keywords</h5>
                                                    <input type="text" class="rounded form-control block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlInput2" placeholder="Form control lg" name="keywordsbuy">
                                                    <hr>
                                                </div>
                                                <hr>
                                                <div class="p-6">
                                                    <h5 class="text-gray-900 text-xl font-medium mb-2">Listed by</h5>
                                                    <div class="flex  justify-center px-0">
                                                        <ul class="grid gap-x-4 gap-y-[5px] grid-cols-1 sm:grid-cols-2 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 px-[15px] mx-[-15px] ">
                                                            @foreach($developers as $dev)
                                                                <li class="flex flex-wrap inline-block  w-[10rem] text-sm ">
                                                                    <div class="form-check col-span-1  min-w-fit px-px">          
                                                                      <input class="form-check-input h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer my-auto" type="checkbox" value="" id="{{$dev->id}}">
                                                                      <label class="flex items-top form-check-label inline-block text-gray-800 mx-0" for="{{$dev->id}}">
                                                                      {{$dev->developer_name }}
                                                                      </label>
                                                                    </div>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="p-6">
                                                    <h5 class="text-gray-900 text-xl font-medium mb-2">Size sqft</h5>
                                                    <div class="grid grid-cols-3 gap-4">
                                                        <div class="col-start-1">
                                                            <!-- <input type="number" class="rounded form-control block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlInput2" placeholder="Min Sq/ft" name="min_size"> -->
                                                            <select class="rounded form-control block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="minsizerent">
                                                                <option selected value="">Min</option>
                                                                <option value="100">100 sqft</option>
                                                                <option value="200">200 sqft</option>
                                                                <option value="300">300 sqft</option>
                                                                <option value="400">400 sqft</option>
                                                                <option value="500">500 sqft</option>
                                                                <option value="600">600 sqft</option>
                                                                <option value="700">700 sqft</option>
                                                                <option value="800">800 sqft</option>
                                                                <option value="900">900 sqft</option>
                                                                <option value="1000">1000 sqft</option>
                                                                <option value="1100">1100 sqft</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-start-2 px-auto justify-center ml-[50px]"><p> - </p></div>
                                                        <div class="col-start-3">
                                                            <!-- <input type="number" class="rounded form-control block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlInput2" placeholder="Max Sq/ft" name="max_size"> -->
                                                            <select class="rounded form-control block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="maxsizerent">
                                                                <option selected value="">Max</option>
                                                                 <option value="200">200 sqft</option>
                                                                <option value="300">300 sqft</option>
                                                                <option value="400">400 sqft</option>
                                                                <option value="500">500 sqft</option>
                                                                <option value="600">600 sqft</option>
                                                                <option value="700">700 sqft</option>
                                                                <option value="800">800 sqft</option>
                                                                <option value="900">900 sqft</option>
                                                                <option value="1000">1000 sqft</option>
                                                                <option value="1100">1100 sqft</option>
                                                                <option value="1200">1200 sqft</option>
                                                            </select>
                                                        </div>
                                                    </div>  
                                                    <hr>
                                                </div>
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div id="co-living" class="tab-content bg-[rgb(237,252,250,0.9)] border border-solid border-[#016450] rounded-bl-[15px] rounded-br-[15px] rounded-tr-[15px] px-[15px] sm:px-[30px] py-[28px] lg:max-h-56 overflow-visible">
                                <form action="{{route('projects.search')}}" method="post">
                                    @csrf
                                    <div class="advanced-searrch flex flex-wrap -mb-[45px] lg:mr-[-2px]">
                                        <div class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[10px] xl:mr-[20px] last:mr-0 last:border-r-0 mb-[45px]">
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="{{url('')}}/assets/images/icon/property.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="citynew" class="font-lora block capitalize text-primary text-[12px] xl:text-[18px] leading-none mb-1">City</label>
                                                <select name="citynew" id="citynew" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer" >
                                                    <option selected disabled value="">City</option>
                                                    <option value="Dubai">Dubai</option>
                                                    <option value="Al Ain">Al Ain</option>
                                                    <option value="Sharjah">Sharjah</option>
                                                    <option value="Abu Dhabi">Abu Dhabi</option>
                                                    <option value="Ras al Khaimah">Ras al Khaimah</option>
                                                    <option value="Fujairah">Fujairah</option>
                                                    <option value="Ajman">Ajman</option>
                                                    <option value="Umm al Quwain">Umm al Quwain</option>
                                                    <!-- <option value="3">Duplex House 3</option> -->
                                                </select>
                                            </div>
                                        </div>
                                        <div class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[10px] xl:mr-[20px] last:mr-0 last:border-r-0 mb-[45px]">
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="{{url('')}}/assets/images/icon/location.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="locationnew" class="font-lora block capitalize text-primary text-[12px] xl:text-[18px] leading-none mb-1">Location</label>
                                                <input name="locationnew" id="locationnew" type="text" placeholder="Choose location" class="text-tiny placeholder:text-body leading-none font-light pr-3 focus:outline-none w-full bg-transparent" >
                                            </div>
                                        </div>
                                        <div class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[10px] xl:mr-[20px] last:mr-0 last:border-r-0 mb-[45px]">
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="{{url('')}}/assets/images/icon/property.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="type" class="font-lora block capitalize text-primary text-[12px] xl:text-[18px] leading-none mb-1">Property
                                                    Type</label>
                                                <select name="typenew" id="type" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer" >
                                                    <option selected disabled value="">type</option>
                                                    <option value="apartment">Apartment</option>
                                                    <option value="villa">Villa</option>
                                                    <option value="tounhouse">Tounhouse</option>
                                                    <option value="penthouse">Penthouse</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[10px] xl:mr-[20px] last:mr-0 last:border-r-0 mb-[45px]" style=" border:none; cursor: pointer;" >
                                            <div class="mr-4 self-start shrink-0">
                                                <!-- <img src="{{url('')}}/assets/images/icon/dollar-circle.svg" width="24" height="24" alt="svg icon"> -->
                                            </div>
                                            <div class="block" style=";" onclick="pricenew()">
                                                <label for="price" class="font-lora block capitalize text-primary text-[12px] xl:text-[18px] leading-none mb-1">Price Range</label>
                                                <label for="price" class="text-tiny placeholder:text-body leading-none font-light pr-3 focus:outline-none w-full bg-transparent">Any</label>
                                            </div>
                                            <button class="search-btn py-auto absolute right-[27px] active " id="b1view">
                                                <img src="{{url('')}}/assets/images/icon/search-outline.svg" class="max-w-[30px] xl:w-auto" width="40" height="40" alt="svg icon">
                                                <span class="hidden">Search Properties</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="absolute lg:right-[10rem] lg:top-[10rem] ml-auto z-100 max-h-32 sm:hidden max-w-[20rem]" id="pricenewmore" style="display: none;">
                                            <div class="flex justify-center  rounded ">
                                            <div class="rounded-lg shadow-lg bg-white max-w-sm bg-white border-black overflow-x-hidden  z-[100] overflow-y-auto max-h-96">
                                                <div class="p-6">
                                                    <h5 class="text-gray-900 text-xl font-medium mb-2">Price Range</h5>
                                                    <div class="grid grid-cols-3 gap-0">
                                                        <div class="">
                                                            <input type="text" class="rounded form-control block w-[125%] px-4 py-2 text-sm font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlInput2" placeholder="Min AED" name="pricenew1">
                                                        </div>
                                                        <div class="  ml-[35px]"><p> - </p></div>
                                                        <div class="">
                                                            <input type="text" class="rounded form-control block w-[125%] px-4 py-2 text-sm font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out ml-[-2rem] focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlInput2" placeholder="Max AED" name="pricenew2">
                                                        </div>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="advanced-searrch-hidden flex flex-wrap items-center mt-[45px] -mb-[45px]">
                                        
                                        <div class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[10px] xl:mr-[20px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="{{url('')}}/assets/images/icon/bed.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="bedroomsnew" class="font-lora block capitalize text-primary text-[12px] xl:text-[18px] leading-none mb-1">Bedrooms</label>
                                                <select name="bedroomsnew" id="bedroomsnew" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                    <option selected disabled value="">Bedrooms</option>
                                                   <option value="1">1 Bedroom</option>
                                                   <option value="2">2 Bedroom</option>
                                                    <option value="3">3 Bedroom</option>
                                                   <option value="4">4 Bedroom</option>
                                                    <option value="5">5 Bedroom</option>
                                                   <option value="6">6 Bedroom</option>
                                                   <option value="7">7 Bedroom</option>
                                                   <option value="8">8 Bedroom</option>
                                                    <option value="9">9 Bedroom</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="advanced-searrch-list border-r-black flex items-center lg:border-r lg:boprimaryborder-primaryD4D4] lg:mr-[10px] xl:mr-[20px] last:mr-0 last:border-r-0 mb-[45px] relative">
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="{{url('')}}/assets/images/icon/area.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="developernew" class="font-lora block capitalize text-primary text-[12px] xl:text-[18px] leading-none mb-1">Developers</label>
                                                <select name="developernew" id="developernew" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                    <option selected disabled value=""> developer</option>
                                                    @foreach($developers as $dev)
                                                    <option value="{{ $dev->id }}">{{$dev->developer_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="advanced-searrch-list border-r-black flex items-center lg:border-r lg:boprimaryborder-primaryD4D4] lg:mr-[10px] xl:mr-[20px] last:mr-0 last:border-r-0 mb-[45px] relative" >
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="{{url('')}}/assets/images/icon/property.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="projectnew" class="font-lora block capitalize text-primary text-[12px] xl:text-[18px] leading-none mb-1">Projects</label>
                                                <select name="projectnew" id="projectnew" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                    <option selected disabled value="">Project </option>
                                                    @foreach($projects as $project)
                                                    <option  value="{{$project->title}}">{{$project->title}}</option>
                                                    @endforeach
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[10px] xl:mr-[20px] last:mr-0 last:border-r-0 mb-[45px] rounded-lg" style="cursor: pointer;
                                        " onclick="moreNewP()" >
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="{{url('')}}/assets/images/icon/plus.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="block" style=";">
                                                <label for="garage" class="font-lora block capitalize text-primary text-[12px] xl:text-[18px] leading-none mb-1 show2 " style="cursor: pointer" id="moreShow"  >More</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-1 place-self-end ml-auto z-100 max-h-32 sm:hidden" id="NewPmore" style="display: none;">
                                        <div class="flex justify-center rounded absolute  right-0">
                                            <div class="rounded-lg shadow-lg bg-white max-w-sm bg-white border-black overflow-x-hidden  z-[100] overflow-y-auto max-h-96">
                                                <div class="p-6 ">
                                                    <h5 class="text-gray-900 text-xl font-medium mb-2">Furnishing</h5>

                                                    <select class="rounded form-control block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 border-gray-300 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="furnishingnew">
                                                        <option selected disabled value="">Select </option>
                                                        <option value="1">furnished</option>
                                                        <option value="0">unfurnished</option>
                                                    </select>
                                                    <!-- <input type="text" class="rounded form-control block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 border-gray-300 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlInput2" placeholder="Yes" name=""> -->
                                                    <hr>
                                                </div>
                                                <hr>
                                                <div class="p-6">
                                                    <h5 class="text-gray-900 text-xl font-medium mb-2">Amenities</h5>
                                                    <div class="flex  justify-center px-0">
                                                        <ul class="grid gap-x-4 gap-y-[5px] grid-cols-1 sm:grid-cols-2 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 px-[15px] mx-[-15px] ">
                                                            @foreach($amenities as $amenity)
                                                                <li class="flex flex-wrap inline-block  w-[10rem] text-sm ">
                                                                    <div class="form-check col-span-1  min-w-fit px-px">
                                                                      <input class="form-check-input h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer my-auto" name="amenities[]" type="checkbox" value="{{$amenity->id}}" id="new{{$amenity->id}}">
                                                                      <label class="flex items-top form-check-label inline-block text-gray-800 mx-0" for="new{{$amenity->id}}">
                                                                      {{$amenity->name }}
                                                                      </label>
                                                                    </div>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                                <hr>        
                                                <div class="p-6">
                                                    <h5 class="text-gray-900 text-xl font-medium mb-2">Keywords</h5>
                                                    <input type="text" class="rounded form-control block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlInput2" placeholder="Form control lg" name="keywords">
                                                    <hr>
                                                </div>
                                                <hr>
                                                <div class="p-6">
                                                    <h5 class="text-gray-900 text-xl font-medium mb-2">Listed by</h5>
                                                    <ul class="grid gap-x-4 gap-y-[5px] grid-cols-1 sm:grid-cols-2 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 px-[15px] mx-[-15px] ">
                                                        @foreach($developers as $dev)
                                                            <li class="flex flex-wrap inline-block  w-[10rem] text-sm ">
                                                                <div class="form-check col-span-1  min-w-fit px-px">
                                                                    <input class="form-check-input h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer my-auto" type="checkbox" value="{{$dev->id}}" id="devnew{{$dev->id}}">
                                                                    <label class="flex items-top form-check-label inline-block text-gray-800 mx-0" for="devnew{{$dev->id}}">
                                                                        {{$dev->developer_name }}
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <hr>
                                                <div class="p-6">
                                                    <h5 class="text-gray-900 text-xl font-medium mb-2">Size sqft</h5>
                                                    <div class="grid grid-cols-3 gap-4">
                                                        <div class="col-start-1">
                                                            <!-- <input type="number" class="rounded form-control block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlInput2" placeholder="Min Sq/ft" name="min_size"> -->
                                                            <select class="rounded form-control block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="minsizenew">
                                                                <option selected value="">Min</option>
                                                                <option value="100">100 sqft</option>
                                                                <option value="200">200 sqft</option>
                                                                <option value="300">300 sqft</option>
                                                                <option value="400">400 sqft</option>
                                                                <option value="500">500 sqft</option>
                                                                <option value="600">600 sqft</option>
                                                                <option value="700">700 sqft</option>
                                                                <option value="800">800 sqft</option>
                                                                <option value="900">900 sqft</option>
                                                                <option value="1000">1000 sqft</option>
                                                                <option value="1100">1100 sqft</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-start-2 px-auto justify-center ml-[50px]"><p> - </p></div>
                                                        <div class="col-start-3">
                                                            <!-- <input type="number" class="rounded form-control block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleFormControlInput2" placeholder="Max Sq/ft" name="max_size"> -->
                                                            <select class="rounded form-control block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="maxsizenew">
                                                                <option selected value="">Max</option>
                                                                 <option value="200">200 sqft</option>
                                                                <option value="300">300 sqft</option>
                                                                <option value="400">400 sqft</option>
                                                                <option value="500">500 sqft</option>
                                                                <option value="600">600 sqft</option>
                                                                <option value="700">700 sqft</option>
                                                                <option value="800">800 sqft</option>
                                                                <option value="900">900 sqft</option>
                                                                <option value="1000">1000 sqft</option>
                                                                <option value="1100">1100 sqft</option>
                                                                <option value="1200">1200 sqft</option>
                                                            </select>
                                                        </div>
                                                    </div>  
                                                    <hr>
                                                </div>
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
                                        <span class="text-secondary text-tiny inline-block mb-2" style="font-size: 20px; color: #D2AC47;">Best Choice</span>
                                        <h2 class="font-lora text-primary text-[24px] sm:text-[40px] capitalize font-medium">
                                        <b>Featured Properties</b><span class="text-secondary">.</span></h2>
                                    </div>
                                    <div>
                                        <a href="/project" class="flex flex-wrap items-center text-secondary text-tiny" style="font-size:25px">Explore all
                                            <svg class="ml-[10px]" width="26" height="11" viewBox="0 0 26 11" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="m20.088.693 4.12 4.315H0v.984h24.207l-4.12 4.315.662.693L26 5.5 20.75 0l-.662.693Z"/></svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cities-slider">
                            <div class="swiper -mx-[30px] -my-[60px] px-[30px] py-[60px] " id="swiper">
                                <div class="swiper-wrapper sm:rid-rows-none sm:grid-cols-none">
                                    @foreach($Properties as $property)
                                    <div class="swiper-slide text-center ">
                                        <div class="overflow-hidden rounded-md drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] bg-[#FFFDFC] text-center transition-all duration-300 hover:-translate-y-[10px] w-[100%] h-[28rem]">
                                            <div class="relative">
                                                <a href="{{ route('property_details',$property->id) }}" class="block">
                                                    <img src="{{config('fgproperties.file_path').$property->featured_image}}" class="w-full h-[15rem]" loading="lazy" alt="{{$property->title}}">
                                                </a>
                                                <div class="flex flex-wrap flex-col absolute top-5 right-5">
                                                    <button class="flex flex-wrap items-center bg-[rgb(11,44,61,0.8)] p-[5px] rounded-[2px] text-white mb-[5px] text-xs"><img class="mr-1" src="{{url('')}}/assets/images/icon/camera.png" loading="lazy" width="13" height="10" alt="camera icon">
                                                    @php
                                                    if ($property->images !="") 
                                                    {
                                                        $images = $property->images;
                                                        $img1 = explode(',', $images);
                                                        $real_image = reset($img1);
                                                    }
                                                    @endphp
                                                    {{count($img1)}}

                                                    </button>
                                                    <!-- <button class="flex flex-wrap items-center bg-[rgb(11,44,61,0.8)] p-[5px] rounded-[2px] text-white text-xs"><img class="mr-1" src="{{url('')}}/assets/images/icon/video.png" loading="lazy" width="14" height="10" alt="camera icon">08</button> -->
                                                </div>
                                                <span class="absolute bottom-5 left-5 bg-[#FFFDFC] p-[5px] rounded-[2px] text-primary leading-none text-[14px] font-normal capitalize">for {{$property->status}}</span>
                                            </div>

                                            <div class="py-[20px] px-[20px]">
                                                <h3><a href="{{ route('property_details',$property->id) }}" class="font-lora leading-tight text-[22px] xl:text-[26px] text-primary font-medium">{{$property->title}}</a></h3>
                                                <h4><a href="{{ route('property_details',$property->id) }}" class="font-light text-tiny underline">
                                                    @if($property->url != "")
                                                        {{$property->url}}
                                                    @else
                                                        N/A Location
                                                    @endif
                                                </a></h4>
                                                <span class="font-light text-sm">Added: {{ Carbon\Carbon::parse($property->created_at)->format('d-M-Y') }}</span>
                                                <div class="before:block before:absolute before:top-1/2 before:-translate-y-1/2 before:h-[1px] before:w-full before:z-[-1] before:bg-[#E0E0E0] relative"><span class="font-lora text-base text-primary px-[15px] bg-white font-medium">
                                                    @if($property->price != "")
                                                        Price: {{ number_format($property->price) }} AED
                                                    @else
                                                              
                                                    @endif
                                                </span></div>
                                                <p class="font-light">
                                                    @if($property->area != "")
                                                    {{$property->area}} Sq.fit -
                                                    @else
                                                    N/A Sq.fit - 
                                                    @endif

                                                    @if($property->bedrooms != "")
                                                     {{$property->bedrooms}} Bed -
                                                    @else
                                                    N/A Bed - 
                                                    @endif

                                                    @if($property->bathrooms != "")
                                                    {{$property->bathrooms}} Bath 
                                                    @else
                                                    N/A Bath 
                                                    @endif

                                                    </p>
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
                                <a href="/project" class="flex flex-wrap items-center text-secondary text-tiny" style="font-size:25px">Explore all
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
                            <a href="/project_details" class="block">
                                <img src="{{url('')}}/assets/images/properties/properties1.png" class="w-full h-full" loading="lazy" width="370" height="266" alt="Orchid Casel de Paradise.">
                            </a>
                            <div class="flex flex-wrap flex-col absolute top-5 right-5">
                                <button class="flex flex-wrap items-center bg-[rgb(11,44,61,0.8)] p-[5px] rounded-[2px] text-white mb-[5px] text-xs"><img class="mr-1" src="{{url('')}}/assets/images/icon/camera.png" loading="lazy" width="13" height="10" alt="camera icon">07</button>
                                <button class="flex flex-wrap items-center bg-[rgb(11,44,61,0.8)] p-[5px] rounded-[2px] text-white text-xs"><img class="mr-1" src="{{url('')}}/assets/images/icon/video.png" loading="lazy" width="14" height="10" alt="camera icon">08</button>
                            </div>
                            <span class="absolute bottom-5 left-5 bg-[#FFFDFC] p-[5px] rounded-[2px] text-primary leading-none text-[14px] font-normal capitalize">for Sale</span>
                        </div>

                        <div class="py-[20px] px-[20px]">
                            <h3><a href="/project_details" class="font-lora leading-tight text-[22px] xl:text-[26px] text-primary font-medium">Sobha Creek Vistas Tower C.</a></h3>
                            <h4><a href="/project_details" class="font-light text-tiny underline">18B Central Street, Dubai</a></h4>
                            <span class="font-light text-sm">Added: 25 November, 2021</span>
                            <div class="before:block before:absolute before:top-1/2 before:-translate-y-1/2 before:h-[1px] before:w-full before:z-[-1] before:bg-[#E0E0E0] relative"><span class="font-lora text-base text-primary px-[15px] bg-white font-medium">Price: 255300 AED</span></div>
                            <p class="font-light">1230 Sq.fit - 4 Bed - 3 Bath - 2 Garage</p>
                        </div>
                    </div>
                    <div class="overflow-hidden rounded-md drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] bg-[#FFFDFC] text-center transition-all duration-300 hover:-translate-y-[10px]">
                        <div class="relative">
                            <a href="/project_details" class="block">
                                <img src="{{url('')}}/assets/images/properties/properties2.png" class="w-full h-full" loading="lazy" width="370" height="266" alt="Ruposibangla de parlosia.">
                            </a>
                            <div class="flex flex-wrap flex-col absolute top-5 right-5">
                                <button class="flex flex-wrap items-center bg-[rgb(11,44,61,0.8)] p-[5px] rounded-[2px] text-white mb-[5px] text-xs"><img class="mr-1" src="{{url('')}}/assets/images/icon/camera.png" loading="lazy" width="13" height="10" alt="camera icon">07</button>
                                <button class="flex flex-wrap items-center bg-[rgb(11,44,61,0.8)] p-[5px] rounded-[2px] text-white text-xs"><img class="mr-1" src="{{url('')}}/assets/images/icon/video.png" loading="lazy" width="14" height="10" alt="camera icon">08</button>
                            </div>
                            <span class="absolute bottom-5 left-5 bg-[#FFFDFC] p-[5px] rounded-[2px] text-primary leading-none text-[14px] font-normal capitalize">for Rent</span>
                        </div>

                        <div class="py-[20px] px-[20px]">
                            <h3><a href="/project_details" class="font-lora leading-tight text-[22px] xl:text-[26px] text-primary font-medium">DAMAC Tower Amman.</a></h3>
                            <h4><a href="/project_details" class="font-light text-tiny underline">18B Central Street, Dubai</a></h4>
                            <span class="font-light text-sm">Added: 25 November, 2021</span>
                            <div class="before:block before:absolute before:top-1/2 before:-translate-y-1/2 before:h-[1px] before:w-full before:z-[-1] before:bg-[#E0E0E0] relative"><span class="font-lora text-base text-primary px-[15px] bg-white font-medium">Price: 255300 AED</span></div>
                            <p class="font-light">1800 Sq.fit - 5 Bed - 3 Bath - 2 Garage</p>
                        </div>
                    </div>
                    <div class="overflow-hidden rounded-md drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] bg-[#FFFDFC] text-center transition-all duration-300 hover:-translate-y-[10px]">
                        <div class="relative">
                            <a href="/project_details" class="block">
                                <img src="{{url('')}}/assets/images/properties/properties3.png" class="w-full h-full" loading="lazy" width="370" height="266" alt="Sinomen Studio Palace.">
                            </a>
                            <div class="flex flex-wrap flex-col absolute top-5 right-5">
                                <button class="flex flex-wrap items-center bg-[rgb(11,44,61,0.8)] p-[5px] rounded-[2px] text-white mb-[5px] text-xs"><img class="mr-1" src="{{url('')}}/assets/images/icon/camera.png" loading="lazy" width="13" height="10" alt="camera icon">07</button>
                                <button class="flex flex-wrap items-center bg-[rgb(11,44,61,0.8)] p-[5px] rounded-[2px] text-white text-xs"><img class="mr-1" src="{{url('')}}/assets/images/icon/video.png" loading="lazy" width="14" height="10" alt="camera icon">08</button>
                            </div>
                            <span class="absolute bottom-5 left-5 bg-[#FFFDFC] p-[5px] rounded-[2px] text-primary leading-none text-[14px] font-normal capitalize">for Sale</span>
                        </div>

                        <div class="py-[20px] px-[20px]">
                            <h3><a href="/project_details" class="font-lora leading-tight text-[22px] xl:text-[26px] text-primary font-medium">The Crest Tower B .</a></h3>
                            <h4><a href="/project_details" class="font-light text-tiny underline">194 Mercer Street, 627 Broadway, Dubai</a></h4>
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
                                <span class="text-secondary text-tiny inline-block mb-2" style="font-size: 20px; color: #D2AC47;">Best Choice</span>
                                <h2 class="font-lora text-primary text-[24px] sm:text-[40px] capitalize font-medium">
                                    <b>Popular Areas In Dubai</b><span class="text-secondary">.</span></h2>
                            </div>
                            <div>
                                <a href="/project" class="flex flex-wrap items-center text-secondary text-tiny" style="font-size:25px">Explore all
                                    <svg class="ml-[10px]" width="26" height="11" viewBox="0 0 26 11" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="m20.088.693 4.12 4.315H0v.984h24.207l-4.12 4.315.662.693L26 5.5 20.75 0l-.662.693Z"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="mt-5 grid md:grid-cols-3 w-auto gap-4 sm:grid-cols-none ">
                    <div class="swiper-slide text-center area">
                        <div class="relative group">
                            <a href="/project" class="block group-hover:shadow-[0_10px_15px_0px_rgba(0,0,0,0.1)] transition-all duration-300">
                                 <figure><img src="{{url('')}}/assets/images/area/dubai-marina.jpg" alt=""></figure>
                                 <div class="bg-[rgb(255,253,252,0.9)] rounded-[6px] px-[5px] py-[5px] absolute bottom-[15px] left-[25px] mb-25 right-[25px]">
                                        <span class="font-lora font-normal text-[25px] text-primary ">Dubai Marina</span>
                                        <p class="font-light text-[18px] capitalize text-secondary "><b>Price From 600,000 AED</b></p>
                                 </div>
                            </a>
                        </div>
                    </div>

                    <div class="swiper-slide text-center area">
                        <div class="relative group">
                            <a href="/project" class="block group-hover:shadow-[0_10px_15px_0px_rgba(0,0,0,0.1)] transition-all duration-300">
                                <figure><img src="{{url('')}}/assets/images/area/emaar-beachfront.jpg" alt=""></figure>
                                <div class="bg-[rgb(255,253,252,0.9)] rounded-[6px] px-[5px] py-[5px] absolute bottom-[15px] left-[25px] mb-25 right-[25px]">
                                        <span class="font-lora font-normal text-[25px] text-primary ">Emaar</span>
                                        <p class="font-light text-[18px] capitalize text-secondary "><b>Price From 600,000 AED</b></p>
                                 </div>
                            </a>
                        </div>
                    </div>

                    <div class="swiper-slide text-center area">
                        <div class="relative group">
                            <a href="/project" class="block group-hover:shadow-[0_10px_15px_0px_rgba(0,0,0,0.1)] transition-all duration-300">
                                <figure><img src="{{url('')}}/assets/images/area/dubai-hills-estate.jpg" alt=""></figure>
                                <div class="bg-[rgb(255,253,252,0.9)] rounded-[6px] px-[5px] py-[5px] absolute bottom-[15px] left-[25px] mb-25 right-[25px]">
                                        <span class="font-lora font-normal text-[25px] text-primary ">Dubai Hills</span>
                                        <p class="font-light text-[18px] capitalize text-secondary "><b>Price From 600,000 AED</b></p>
                                 </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="mt-5 grid md:grid-cols-4 w-auto gap-4 sm:grid-cols-none">
                    <div class="swiper-slide text-center area">
                        <div class="relative group">
                            <a href="/project" class="block group-hover:shadow-[0_10px_15px_0px_rgba(0,0,0,0.1)] transition-all duration-300">
                                 <figure><img src="{{url('')}}/assets/images/area/business-bay_-scaled.jpg" alt=""></figure>
                                 <div class="bg-[rgb(255,253,252,0.9)] rounded-[6px] px-[5px] py-[5px] absolute bottom-[15px] left-[25px] mb-25 right-[25px]">
                                        <span class="font-lora font-normal text-[25px] text-primary ">Dubai Marina</span>
                                        <p class="font-light text-[18px] capitalize text-secondary "><b>Price From 600,000 AED</b></p>
                                 </div>
                            </a>
                        </div>
                    </div>

                    <div class="swiper-slide text-center area">
                        <div class="relative group">
                            <a href="/project" class="block group-hover:shadow-[0_10px_15px_0px_rgba(0,0,0,0.1)] transition-all duration-300">
                                <figure><img src="{{url('')}}/assets/images/area/palm-jumeirah.jpg" alt=""></figure>
                                <div class="bg-[rgb(255,253,252,0.9)] rounded-[6px] px-[5px] py-[5px] absolute bottom-[15px] left-[25px] mb-25 right-[25px]">
                                        <span class="font-lora font-normal text-[25px] text-primary ">Palm Jumeirah</span>
                                        <p class="font-light text-[18px] capitalize text-secondary "><b>Price From 600,000 AED</b></p>
                                 </div>
                            </a>
                        </div>
                    </div>

                    <div class="swiper-slide text-center area">
                        <div class="relative group">
                            <a href="/project" class="block group-hover:shadow-[0_10px_15px_0px_rgba(0,0,0,0.1)] transition-all duration-300">
                                <figure><img src="{{url('')}}/assets/images/area/downtown-header.jpg" alt=""></figure>
                                <div class="bg-[rgb(255,253,252,0.9)] rounded-[6px] px-[5px] py-[5px] absolute bottom-[15px] left-[25px] mb-25 right-[25px]">
                                        <span class="font-lora font-normal text-[25px] text-primary ">Downtown Header</span>
                                        <p class="font-light text-[18px] capitalize text-secondary "><b>Price From 600,000 AED</b></p>
                                 </div>
                            </a>
                        </div>
                    </div>

                    <div class="swiper-slide text-center area">
                        <div class="relative group">
                            <a href="/project" class="block group-hover:shadow-[0_10px_15px_0px_rgba(0,0,0,0.1)] transition-all duration-300">
                                <figure><img src="{{url('')}}/assets/images/area/jbr.jpg" alt=""></figure>
                                <div class="bg-[rgb(255,253,252,0.9)] rounded-[6px] px-[5px] py-[5px] absolute bottom-[15px] left-[25px] mb-25 right-[25px]">
                                        <span class="font-lora font-normal text-[25px] text-primary ">JBR</span>
                                        <p class="font-light text-[18px] capitalize text-secondary "><b>Price From 600,000 AED</b></p>
                                 </div>
                            </a>
                        </div>
                    </div>
                </div> 

            </div>
        </section>
        <!-- Popular Area end -->

    <!-- About Us Sectin Start -->
        <section class="about-section lg:pt-[0px] ">
            <div class="container">
                <div class="grid grid-cols-12 gap-6 items-center">
                    <div class="col-span-12 lg:col-span-6">
                        <span class="text-secondary text-tiny inline-block mb-2" style="font-size: 20px; color: #D2AC47;">Why Choose us</span>
                        <h2 class="font-lora text-primary text-[24px] sm:text-[35px] leading-[1.277] capitalize mb-5 lg:mb-16 font-medium max-w-[500px]">We Provide Latest Properties for our valuable Clients<span class="text-secondary">.</span></h2>
                        <div class="scene" data-relative-input="true">
                            <img data-depth="0.1" src="{{url('')}}/assets/images/about/about1.png" class="" loading="lazy" width="729" height="663" alt="about Image">
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6 lg:pl-[70px] mt-12">
                        <p class="max-w-[448px] ">You can find out plenty of options for properties here with us. A large number of possessions are available for purchase, sale, or rental. So, you have a lot of options to select from and save a lot of money.</p>

                        <div class="-mb-10 mt-12 xl:mt-[70px] 2xl:mt-[100px]">
                            <div class="flex flex-wrap mb-5 lg:mb-10">
                                <img src="{{url('')}}/assets/images/icon/doller.png" class="self-start mr-5" loading="lazy" width="50" height="50" alt="about Image">
                                <div class="flex-1">
                                    <h3 class="font-lora text-primary text-[22px] xl:text-lg capitalize mb-2">Cost-effective</h3>
                                    <p class="max-w-[315px]">Because most properties are reasonable and cost-effective, you have the opportunity to find the greatest one.</p>
                                </div>

                            </div>
                            <div class="flex flex-wrap mb-5 lg:mb-10">
                                <img src="{{url('')}}/assets/images/icon/location.png" class="self-start mr-5" loading="lazy" width="50" height="50" alt="about Image">
                                <div class="flex-1">
                                    <h3 class="font-lora text-primary text-[22px] xl:text-lg capitalize mb-2">Privileged location</h3>
                                    <p class="max-w-[315px]">Location is prime and up to the mark to offer all the basic facilities and needs to live a quality life.</p>
                                </div>

                            </div>
                            <div class="flex flex-wrap mb-5 lg:mb-10">
                                <img src="{{url('')}}/assets/images/icon/trusted.png" class="self-start mr-5" loading="lazy" width="50" height="50" alt="about Image">
                                <div class="flex-1">
                                    <h3 class="font-lora text-primary text-[22px] xl:text-lg capitalize mb-2">
                                        Reliable and safe</h3>
                                    <p class="max-w-[315px]">We manage to make our reputation over decade in real estate market quite Reliable and secure. This is truly a valuable asset for us.</p>
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
                            <h2 class="font-lora text-primary text-[24px] sm:text-[40px] capitalize font-medium">
                            <b> Our Partners</b><span class="text-secondary">.</span></h2>
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
                            <span class="text-secondary text-tiny inline-block mb-2" style="font-size: 20px; color: #D2AC47;">Our Blog</span>
                            <h2 class="font-lora text-primary text-[24px] sm:text-[35px] capitalize font-medium">
                                Check our blog post's<span class="text-secondary">.</span></h2>
                        </div>
                    </div>
                    <div class="">
                        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-x-[30px] mb-[-30px]">
                            @foreach($blog as $blogs)
                            <div class="mb-[30px]">
                                <a href="{{route('blog.post',$blogs->slug)}}" class="block overflow-hidden rounded-[6px] mb-[30px]">
                                    <img class="w-full md:h-[15rem] h-full" src="{{config('fgproperties.file_path').$blogs->image}}" width="370" height="270" loading="lazy" alt="{{ $blogs->name }}">
                                </a>
                                <div>
                                    <span class="block leading-none font-normal text-[14px] text-secondary mb-[10px] relative before:absolute before:left-0 before:top-1/2 -translate-y-1/2">{{ $blogs->by }} | {{ Carbon\Carbon::parse($blogs->date)->format('d-M-Y') }}</span>
                                    <h3><a href="{{route('blog.post',$blogs->slug)}}" class="font-lora text-[22px] xl:text-[24px] leading-[1.285] text-primary block mb-[10px] hover:text-secondary transition-all font-medium">{{ $blogs->name }}</a></h3>
                                    <p class="font-light text-[#494949] text-[16px] leading-[1.75]">{{$blogs->short_description}}</p>
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
<!--         <section class="pt-[80px] lg:pt-[120px]">
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
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

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
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
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
      576: {
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
@endsection
