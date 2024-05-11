@extends('layouts.master')


@section('top-styles')
<style type="text/css">
    .im{
        margin-left: 20px;
    }
    input[type="file"] {
    display: none;
}
    .custom-file-upload {
    border: 1px solid #ccc;
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer;
    border-radius: 8px;
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
    }

    #co-living{
        width: 1050px;
    }  
    .selectricc-border-none{
        margin-left: 10rem;
    } 
    #bannerimages {
        height: 22rem;
    }   
    #bannerimages .absolute{
        top: 30%;
    }  
    #filterz{
        margin-top: 5rem;
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
    }

    #co-living{
        width: 955px;
    }  
    .selectricc-border-none{
        margin-left: 10rem;
    } 
    #bannerimages {
        height: 22rem;
    }   
    #bannerimages .absolute{
        top: 30%;
    }  
    #filterz{
        margin-top: 5rem;
    }
    #mainhead{
        color: rgb(11, 44, 61);
    }    
}
@media (max-width: 800px) {
    #bannerimages {
        height: 10rem;
    }
    #bannerimages .absolute{
        top: 70%;
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
            <section class="bg-no-repeat bg-center bg-cover bg-[#FFF6F0] h-[350px] lg:h-[350px] flex flex-wrap items-center relative before:absolute before:inset-0 before:content-[''] before:bg-[#000000] before:opacity-[50%]" style="background-image: url('{{url('')}}/assets/images/breadcrumb/sale.png');" id="bannerimages">
            <div class="container">
                <div class="grid grid-cols-1 ">
                    <div class="col-span-12 ">
                        <div class="max-w-[700px]  mx-auto text-center text-white relative z-[1]">
                            <!-- <div class="mb-5"><span class="text-base block sm:text-[35px]">Sale</span></div> -->
                            <h1 class="font-lora text-[32px] sm:text-[50px] md:text-[68px] lg:text-[50px] leading-tight font-medium md:mt-[-9rem]">
                                Rent Properties  
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
    <div class="grid grid-cols-1">
                     <div class="container  z-[2] pl-[60px] lg:pl-[50px] 2xl::pl-[0px] lg:absolute lg:left-0 lg:right-0 md:mt-[5rem] mt-[1rem] lg:translate-y-[-320px]">
                        <div class="grid grid-cols-12">
                            <div class="col-span-12">
                                <div class="relative selectricc-border-none ">
                                    <button class="tab-toggle-btn px-[10px] py-[15px] absolute top-[0px] left-[-45px] border-l border-t border-b border-solid border-[#016450] bg-[rgb(236,250,247,0.8)] text-primary rounded-tl-[10px] rounded-bl-[10px]" id="b1" aria-label="svg icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19 22V11m0-4V2m-7 20v-5m0-4V2M5 22V11m0-4V2m-2 9h4m10 0h4m-11 2h4" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </button>

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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</div>

        <!-- Hero section end -->

        <!-- Popular Properties start -->
        <section class="popular-properties py-[80px] lg:py-[120px]">
            <div class="container">
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-[30px]">

                     @foreach($Properties as $property)
                    <div class="overflow-hidden rounded-md drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] bg-[#FFFDFC] text-center transition-all duration-300 hover:-translate-y-[10px]">
                        <div class="relative">
                            <a href="{{ route('property_details',$property->id) }}" class="block">
                                <img src="{{config('fgproperties.file_path').$property->featured_image}}" class="w-full h-[15rem]" loading="lazy" width="370" height="266" alt="Sobha Creek Vistas Tower C.">
                            </a>
                            <div class="flex flex-wrap flex-col absolute top-5 right-5">
                                <button class="flex flex-wrap items-center bg-[rgb(11,44,61,0.8)] p-[5px] rounded-[2px] text-white mb-[5px] text-xs"><img class="mr-1" src="{{url('')}}/assets/images/icon/camera.png" loading="lazy" width="13" height="10" alt="camera icon">
                                 @php                        if ($property->images !="") {
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
                                    UAE
                                @endif</a></h4>
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
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Popular Properties end -->
@endsection

@section('bottom-mid-scripts')

@endsection

@section('bottom-bot-scripts')
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
