@extends('layouts.master')
@section('title')@if(request()->segment(2)) {{ 'Projects '.ucwords(trim(preg_replace('/[^A-Za-z0-9 ]+/', ' ', request()->segment(2)))) }} @endif @endsection
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
.inline-popup::before {
  content: "";
/*  position: absolute;*/
  width: 0;
  height: 0;
  bottom: 100%;
  margin-left: 20px;
  border: 10px solid transparent;
    border-top-color: transparent;
    border-top-style: solid;
    border-top-width: 10px;
    border-bottom-color: transparent;
    border-bottom-style: solid;
    border-bottom-width: 10px;
  border-top: none;
  border-bottom: 10px solid rgb(237,252,250,1);
  -webkit-filter: drop-shadow(0 -1px 1px rgba(0,0,0,.1));
  filter: drop-shadow(0 -1px 1px rgba(0,0,0,.1));
  -webkit-filter: drop-shadow(0 -0.0625rem 0.0625rem rgba(0,0,0,.1));
  filter: drop-shadow(0 -0.0625rem 0.0625rem rgba(0,0,0,.1));
}

.more-filter-popup::before {

    margin-left: 343px;
    margin-right: 180px !important;

}

#NewPmore {
    margin-left: -16rem;
}


@media (max-width: 800px) {
    #NewPmore {
        margin-left: 0rem;
    }

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
    .maindiv{
        margin-top: 10rem;
    }
    .input-div{
        padding: 10px;
        width: 23.5rem;
    }
    .input-internal{
        width: 100%;
    }
    .buydiv{
        min-height: 38rem; 
    }
    #b1view{
        width: 90%;
        margin-left: auto;
        margin-right: auto;
        right: 0px;
        left: 0px;
    }
    #statusnewmore{
        display: block;
        top: 190px;
        min-width: 100%;
        -webkit-filter: drop-shadow(0 -1px 1px rgba(0,0,0,.1));
        filter: drop-shadow(0 -1px 1px rgba(0,0,0,.1));
        -webkit-filter: drop-shadow(0 -0.0625rem 0.0625rem rgba(0,0,0,.1));
        filter: drop-shadow(0 -0.0625rem 0.0625rem rgba(0,0,0,.1));
    }
    #typesnewmore{
        display: block;
        top: 278px;
        min-width: 100%;
        filter: drop-shadow(rgba(0, 0, 0, 0.1) 0px -0.0625rem 0.0625rem);
    }
    #pricenewmore{
        display: block;
        top: 364px;
        min-width: 100%;
        filter: drop-shadow(rgba(0, 0, 0, 0.1) 0px -0.0625rem 0.0625rem);
    }
    #bedsnewmore{
        display: block;
        display: block;
        top: 448px;
        min-width: 100%;
        filter: drop-shadow(rgba(0, 0, 0, 0.1) 0px -0.0625rem 0.0625rem);
    }
    #more{
        display: block;
        top: 532px;
        filter: drop-shadow(rgba(0, 0, 0, 0.1) 0px -0.0625rem 0.0625rem);
        z-index: 999999;
    }
    #amenit{
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }
    #sort_by_options{
        width: 100%;
    }
    .inline-popup::before {
        left: auto;
        right: 30px !important;
    }
        .sorting-div{
        z-index: 1;
    }
}




</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
@endsection

@section('content')        
<!-- Hero section start -->

<div class="relative lg:mt-[22rem] md:mt-[22rem] maindiv">
    <div class="grid grid-cols-1 sm:mb-0">
        <div class=" xl:container xl:mx-auto 2xl:container 2xl:mx-auto relative z-[2] md:mt-[-1rem] mt-[-9rem] lg:translate-y-[-320px]">
            <!-- <div class="grid grid-cols-12"> -->
                <!-- <div class="col-span-12 "> -->

                    
                    <div class="relative selectricc-border-none lg:max-h-56">
                        <div id="rent" class="active tab-content bg-[rgb(237,252,250,0.9)] border border-solid rounded-bl-[15px] rounded-br-[15px] rounded-tr-[15px] rounded-tl-[15px] py-[8px] lg:max-h-56  overflow-visible buydiv" style="padding-bottom: 1%;">
                            <form action="{{ route('projects.filter') }}" method="post">                       
                            @csrf
                                <div class="flex flex-wrap -mb-[45px] md:px-[1rem] overflow-visible min-h-[6rem] max-h-[6rem]">
                                    <div class="grow lg:shrink last:mr-0 last:border-r-0 lg:mb-[45px]  md:mb-[45px] input-div" id="first-in-div" style="margin-top: 0.2rem;">
                                        <div>
                                            <div class="lg:w-[30rem] md:w-[30rem] input-internal" style="width: 100%;">
                                                <!-- <label for="locationnew" class="font-lora block capitalize text-primary text-[16px] xl:text-[16px] leading-none mb-1">Location</label> -->
                                                <input id="locationnew" type="text" name="locationnew" placeholder="Search and select area" class="lg:w-full h-[2.63rem] leading-[2.3] text-tiny placeholder:text-body leading-none font-light pr-3 focus:outline-none w-full bg-transparent border-[1px] pl-2 pr-2 mt-1 border-black rounded-md">
                                            </div>
                                            <div class="ml-auto z-100 max-h-32 input-div rounded-md" id="searchdiv" style=" display: none;" >
                                                <div class="block justify-center rounded ">
                                                    <div class="rounded-lg shadow-lg bg-[rgb(237,252,250,1)]  bg-[rgb(237,252,250,1)] border-black overflow-x-hidden  z-[100] overflow-y-auto" style="border: 1px solid; min-height: 20px; max-height: 100px;">
                                                        <div id="rent_suggest">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=" shrink  lg:ml-[1rem] xl:ml-[1rem] last:mr-0 last:border-r-0 lg:mb-[45px] md:mb-[45px] input-div w-[7rem]"  style=" cursor: pointer;">
                                        <div>
                                            <div class="lg:w-[7rem] md:w-[7rem] input-internal" onclick="statussnew()">
                                                <!-- <label for="typenew" class="font-lora block capitalize text-primary text-[16px] xl:text-[16px] leading-none mb-1">Status</label> -->
                                                <p for="garage" class="text-tiny placeholder:text-body font-light focus:outline-none bg-transparent h-[2.63rem] border-[1px] pl-2 w-full mt-2 border-black rounded-md leading-[2.5]" >Status</p>
                                            </div>
                                            <div class="mt-0 ml-auto z-100 max-h-32 sm:hidden min-w-[20rem] max-w-[20rem] inline-popup" id="statusnewmore" style="display: none;">
                                                <div class="block justify-center rounded ">
                                                    <div class="rounded-lg shadow-lg bg-[rgb(237,252,250,1)] max-w-sm bg-[rgb(237,252,250,1)] border-black overflow-x-hidden  z-[100] overflow-y-auto max-h-96">
                                                        <div class="p-6">
                                                            <h5 class="font-lora block capitalize text-primary text-[16px] xl:text-[16px] leading-none mb-[0.75rem] show2 ">Interest to</h5>
                                                            <div class="flex flex-1 flex-wrap">
                                                                <div class="flex w-[45%] mb-2">
                                                                    <label for="Buy" type="button" class="w-full font-lora rounded form-control block px-2 py-2 text-sm font-normal text-gray-700 bg-[rgb(237,252,250,1)] bg-clip-padding border border-solid border-black rounded transition ease-in-out focus:text-gray-700 focus:bg-[rgb(237,252,250,1)] focus:border-blue-600 focus:outline-none cursor-pointer lab-Buy" value=""><a href="{{ route('buy') }}" class="w-full inline-block">Buy</a></label>
                                                                    <!-- <input id="Buy" class="cb" type="checkbox" name="type['Villa']" value="Villa" hidden> -->
                                                                </div>
                                                                <div class="w-[10%]"></div>
                                                                <div class="flex w-[45%] mb-2">
                                                                    <label for="Rent" type="button" class="w-full font-lora rounded form-control block px-2 py-2 text-sm font-normal text-gray-700 bg-[rgb(237,252,250,1)] bg-clip-padding border border-solid border-black rounded transition ease-in-out focus:text-gray-700 focus:bg-[rgb(237,252,250,1)] focus:border-blue-600 focus:outline-none cursor-pointer lab-Rent" value=""><a href="{{ route('rent') }}" class="w-full inline-block">Rent</a></label>
                                                                    <!-- <input id="Rent" class="cb" type="checkbox" name="type['Villa']" value="Villa" hidden> -->
                                                                </div>
                                                            </div>
                                                            <h5 class="font-lora block capitalize text-primary text-[16px] xl:text-[16px] leading-none mb-[0.75rem] show2 ">Property Status</h5>
                                                            <div class="flex flex-1 flex-wrap">
                                                                 <div class="flex w-[30%] mb-2">
                                                                    <label for="All" type="button" class="w-full font-lora rounded form-control block px-2 py-2 text-sm font-normal text-gray-700 bg-[rgb(237,252,250,1)] bg-clip-padding border border-solid border-black rounded transition ease-in-out focus:text-gray-700 focus:bg-[rgb(237,252,250,1)] focus:border-blue-600 focus:outline-none cursor-pointer lab-All" value=""><a href="{{ route('project') }}" class="w-full inline-block">All</a></label>
                                                                    <!-- <input id="All" class="cb" type="checkbox" name="property_status[]" value="Villa" hidden> -->
                                                                </div>
                                                                <div class="w-[5%]"></div>
                                                                <div class="flex w-[30%] mb-2">
                                                                    <label for="Ready" type="button" class="w-full font-lora rounded form-control block px-2 py-2 text-sm font-normal text-gray-700 bg-[rgb(237,252,250,1)] bg-clip-padding border border-solid border-black rounded transition ease-in-out focus:text-gray-700 focus:bg-[rgb(237,252,250,1)] focus:border-blue-600 focus:outline-none cursor-pointer lab-Ready" value=""><a href="{{ route('projects.sortingByReady') }}" class="w-full inline-block">Ready</a></label>
                                                                    <!-- <input id="Ready" class="cb" type="checkbox" name="property_status[]" value="Villa" hidden> -->
                                                                </div>
                                                                <div class="w-[5%]"></div>
                                                                <div class="flex w-[30%] mb-2">
                                                                    <label for="Off-plan" type="button" class="w-full font-lora rounded form-control block px-2 py-2 text-sm font-normal text-gray-700 bg-[rgb(237,252,250,1)] bg-clip-padding border border-solid border-black rounded transition ease-in-out focus:text-gray-700 focus:bg-[rgb(237,252,250,1)] focus:border-blue-600 focus:outline-none cursor-pointer lab-Off-plan" value=""><a href="{{ route('projects.sortingByOffPlan') }}" class="w-full inline-block">Off-plan</a></label>
                                                                    <!-- <input id="Off-plan" class="cb" type="checkbox" name="property_status[]" value="Villa" hidden> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                     </div>

                                    <div class=" shrink  lg:ml-[1rem] xl:ml-[1rem] last:mr-0 last:border-r-0 lg:mb-[45px] md:mb-[45px] input-div w-[7rem]" style=" cursor: pointer;">
                                        <div>
                                            <div class="lg:w-[7rem] md:w-[7rem] input-internal" onclick="typesnew()">
                                                <!-- <label for="typenew" class="font-lora block capitalize text-primary text-[16px] xl:text-[16px] leading-none mb-1">Type</label> -->
                                                <p for="garage" class="text-tiny placeholder:text-body font-light focus:outline-none bg-transparent h-[2.63rem] border-[1px] pl-2 w-full mt-2 border-black rounded-md leading-[2.5]" >Type</p>
                                            </div>
                                            <div class="mt-0 ml-auto z-100 max-h-32 sm:hidden min-w-[20rem] max-w-[20rem] inline-popup" id="typesnewmore" style="display: none;">
                                                <div class="block justify-center rounded ">
                                                    <div class="rounded-lg shadow-lg bg-[rgb(237,252,250,1)] max-w-sm bg-[rgb(237,252,250,1)] border-black overflow-x-hidden  z-[100] overflow-y-auto max-h-96">
                                                        <div class="p-6">
                                                            <h5 class="font-lora block capitalize text-primary text-[16px] xl:text-[16px] leading-none mb-[0.75rem] show2 ">Property Type</h5>
                                                            <div class="flex flex-1 flex-wrap">
                                                                <div class="flex mr-2 mb-2">
                                                                    <label for="villa" type="button" class="font-lora rounded form-control block px-2 py-2 text-sm font-normal text-gray-700 bg-[rgb(237,252,250,1)] bg-clip-padding border border-solid border-black rounded transition ease-in-out focus:text-gray-700 focus:bg-[rgb(237,252,250,1)] focus:border-blue-600 focus:outline-none cursor-pointer lab-villa" value="">Villa</label>
                                                                    <input id="villa" class="cb" type="checkbox" name="type['Villa']" value="Villa" hidden>
                                                                </div>
                                                                <div class="flex mr-2 mb-2">
                                                                    <label for="apartment" type="button" class="font-lora rounded form-control block px-2 py-2 text-sm font-normal text-gray-700 bg-[rgb(237,252,250,1)] bg-clip-padding border border-solid border-black rounded transition ease-in-out focus:text-gray-700 focus:bg-[rgb(237,252,250,1)] focus:border-blue-600 focus:outline-none cursor-pointer lab-apartment" value="">Apartment</label>
                                                                    <input id="apartment" class="cb" type="checkbox" name="type['Apartment']" value="Apartment" hidden>
                                                                </div>
                                                                <div class="flex mr-2 mb-2">
                                                                    <label for="townhouse" type="button" class="font-lora rounded form-control block px-2 py-2 text-sm font-normal text-gray-700 bg-[rgb(237,252,250,1)] bg-clip-padding border border-solid border-black rounded transition ease-in-out focus:text-gray-700 focus:bg-[rgb(237,252,250,1)] focus:border-blue-600 focus:outline-none cursor-pointer lab-townhouse" value="">Townhouse</label>
                                                                    <input id="townhouse" class="cb" type="checkbox" name="type['Townhouse']" value="Townhouse" hidden>
                                                                </div>
                                                                <div class="flex mr-2 mb-2">
                                                                    <label for="penthouse" type="button" class="font-lora rounded form-control block px-2 py-2 text-sm font-normal text-gray-700 bg-[rgb(237,252,250,1)] bg-clip-padding border border-solid border-black rounded transition ease-in-out focus:text-gray-700 focus:bg-[rgb(237,252,250,1)] focus:border-blue-600 focus:outline-none cursor-pointer lab-penthouse" value="">Penthouse</label>
                                                                    <input id="penthouse" class="cb" type="checkbox" name="type['Penthouse']" value="Penthouse" hidden>
                                                                </div>
                                                            </div> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                     </div>

                                    <div class=" shrink  lg:ml-[1rem] xl:ml-[1rem] last:mr-0 last:border-r-0 lg:mb-[45px] md:mb-[45px] input-div w-[7rem]" style=" cursor: pointer;" >
                                        <div>
                                            <div class="block lg:w-[7rem] md:w-[7rem] input-internal" style=";" onclick="pricenew()">
                                                <!-- <label for="price" class="font-lora block capitalize text-primary text-[16px] xl:text-[16px] leading-none mb-1">Price</label> -->
                                                <p for="price" class="text-tiny placeholder:text-body font-light focus:outline-none bg-transparent h-[2.63rem] border-[1px] pl-2 w-full mt-2 border-black rounded-md leading-[2.5]">Price</p>
                                            </div>
                                            <div class="md:absolute ml-auto z-100 max-h-32 sm:hidden max-w-[20rem] inline-popup" id="pricenewmore" style="display: none;">
                                                <div class="flex justify-center rounded ">
                                                    <div class="rounded-lg shadow-lg bg-[rgb(237,252,250,1)] max-w-sm bg-[rgb(237,252,250,1)] border-black overflow-x-hidden  z-[100] overflow-y-auto max-h-96">
                                                        <div class="p-6">
                                                            <h5 class="font-lora block capitalize text-primary text-[16px] xl:text-[16px] leading-none mb-[0.75rem] show2 ">Price Range</h5>
                                                            <div class="grid grid-cols-3 gap-0">
                                                                <div class="">
                                                                    <input type="text" class="font-lora rounded form-control block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-[rgb(237,252,250,1)] bg-clip-padding border border-solid border-black rounded transition ease-in-out focus:text-gray-700 focus:bg-[rgb(237,252,250,1)] focus:border-blue-600 focus:outline-none" id="exampleFormControlInput2" placeholder="Min AED" name="pricenew1">
                                                                </div>
                                                                <div class="  mx-auto"><p> - </p></div>
                                                                <div class="">
                                                                    <input type="text" class="font-lora rounded form-control block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-[rgb(237,252,250,1)] bg-clip-padding border border-solid border-black rounded transition ease-in-out focus:text-gray-700 focus:bg-[rgb(237,252,250,1)] focus:border-blue-600 focus:outline-none" id="exampleFormControlInput2" placeholder="Max AED" name="pricenew2">
                                                                </div>
                                                            </div> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="shrink  lg:ml-[1rem] xl:ml-[1rem] last:mr-0 last:border-r-0 lg:mb-[45px] md:mb-[45px] search-list input-div w-[7rem]" style=" cursor: pointer; ">
                                        <div>
                                            <div class="lg:w-[7rem] md:w-[7rem] input-internal" onclick="bedsnew()">
                                                <!-- <label for="bedroomsnew" class="font-lora block capitalize text-primary text-[16px] xl:text-[16px] leading-none mb-1">Beds</label> -->
                                                <p for="garage" class="text-tiny placeholder:text-body font-light focus:outline-none bg-transparent h-[2.63rem] border-[1px] pl-2 w-full mt-2 border-black rounded-md leading-[2.5]" >Beds</p>
                                            </div>
                                            <div class="ml-auto z-100 max-h-32 sm:hidden min-w-[20rem] max-w-[20rem] inline-popup" id="bedsnewmore" style="display: none;">
                                                <div class="block justify-center rounded ">
                                                    <div class="rounded-lg shadow-lg bg-[rgb(237,252,250,1)] max-w-sm bg-[rgb(237,252,250,1)] border-black overflow-x-hidden  z-[100] overflow-y-auto max-h-96">
                                                        <div class="p-6">
                                                            <h5 class="font-lora block capitalize text-primary text-[16px] xl:text-[16px] leading-none mb-[0.75rem] show2 ">Bedrooms</h5>
                                                            <div class="flex flex-1 flex-wrap">
                                                                <div class="flex mr-2 mb-2">
                                                                    <label for="any" type="button" name="bed" class="font-lora rounded form-control block px-2 py-2 text-sm font-normal text-gray-700 bg-[rgb(237,252,250,1)] bg-clip-padding border border-solid border-black rounded transition ease-in-out focus:text-gray-700 focus:bg-[rgb(237,252,250,1)] focus:border-blue-600 cursor-pointer lab-any focus:outline-none">Any</label>
                                                                    <input id="any" class="cb" type="checkbox" name="bed['any']" value="any" hidden>
                                                                </div>
                                                                <div class="flex mr-2 mb-2">
                                                                    <label  for="studio" type="button" class="font-lora rounded form-control block px-2 py-2 text-sm font-normal text-gray-700 bg-[rgb(237,252,250,1)] bg-clip-padding border border-solid border-black rounded transition ease-in-out focus:text-gray-700 focus:bg-[rgb(237,252,250,1)] focus:border-blue-600 focus:outline-none cursor-pointer lab-studio">Studio</label>
                                                                    <input id="studio" class="cb" type="checkbox" name="bed['studio']" value="studio" hidden>
                                                                </div>
                                                                <div class="flex mr-2 mb-2">
                                                                    <label  for="1" type="button" class="font-lora rounded form-control block px-2 py-2 text-sm font-normal text-gray-700 bg-[rgb(237,252,250,1)] bg-clip-padding border border-solid border-black rounded transition ease-in-out focus:text-gray-700 focus:bg-[rgb(237,252,250,1)] focus:border-blue-600 focus:outline-none cursor-pointer lab-1">1 Bed</label>
                                                                    <input id="1" class="cb" type="checkbox" name="bed['1']" value="1" hidden>
                                                                </div>
                                                                <div class="flex mr-2 mb-2">
                                                                    <label  for="2" type="button" class="font-lora rounded form-control block px-2 py-2 text-sm font-normal text-gray-700 bg-[rgb(237,252,250,1)] bg-clip-padding border border-solid border-black rounded transition ease-in-out focus:text-gray-700 focus:bg-[rgb(237,252,250,1)] focus:border-blue-600 focus:outline-none cursor-pointer lab-2">2 Beds</label>
                                                                    <input id="2" class="cb" type="checkbox" name="bed['2']" value="2" hidden>
                                                                </div>
                                                                <div class="flex mr-2 mb-2">
                                                                    <label  for="3" type="button" class="font-lora rounded form-control block px-2 py-2 text-sm font-normal text-gray-700 bg-[rgb(237,252,250,1)] bg-clip-padding border border-solid border-black rounded transition ease-in-out focus:text-gray-700 focus:bg-[rgb(237,252,250,1)] focus:border-blue-600 focus:outline-none cursor-pointer lab-3">3 Beds</label>
                                                                    <input id="3" class="cb" type="checkbox" name="bed['3']" value="3" hidden>
                                                                </div>
                                                                <div class="flex mr-2 mb-2">
                                                                    <label  for="4" type="button" class="font-lora rounded form-control block px-2 py-2 text-sm font-normal text-gray-700 bg-[rgb(237,252,250,1)] bg-clip-padding border border-solid border-black rounded transition ease-in-out focus:text-gray-700 focus:bg-[rgb(237,252,250,1)] focus:border-blue-600 focus:outline-none cursor-pointer lab-4">4 Beds</label>
                                                                    <input id="4" class="cb" type="checkbox" name="bed['4']" value="4" hidden>
                                                                </div>
                                                                <div class="flex mr-2 mb-2">
                                                                    <label  for="5" type="button" class="font-lora rounded form-control block px-2 py-2 text-sm font-normal text-gray-700 bg-[rgb(237,252,250,1)] bg-clip-padding border border-solid border-black rounded transition ease-in-out focus:text-gray-700 focus:bg-[rgb(237,252,250,1)] focus:border-blue-600 focus:outline-none cursor-pointer lab-5">5 Beds</label>
                                                                    <input id="5" class="cb" type="checkbox" name="bed['5']" value="5" hidden>
                                                                </div>
                                                                <div class="flex mr-2 mb-2">
                                                                    <label  for="6" type="button" class="font-lora rounded form-control block px-2 py-2 text-sm font-normal text-gray-700 bg-[rgb(237,252,250,1)] bg-clip-padding border border-solid border-black rounded transition ease-in-out focus:text-gray-700 focus:bg-[rgb(237,252,250,1)] focus:border-blue-600 focus:outline-none cursor-pointer lab-6">6 Beds</label>
                                                                    <input id="6" class="cb" type="checkbox" name="bed['6']" value="6" hidden>
                                                                </div>
                                                                <div class="flex mr-2 mb-2">
                                                                    <label  for="7" type="button" class="font-lora rounded form-control block px-2 py-2 text-sm font-normal text-gray-700 bg-[rgb(237,252,250,1)] bg-clip-padding border border-solid border-black rounded transition ease-in-out focus:text-gray-700 focus:bg-[rgb(237,252,250,1)] focus:border-blue-600 focus:outline-none cursor-pointer lab-7">7+ Beds</label>
                                                                    <input id="7" class="cb" type="checkbox" name="bed['7+']" value="7" hidden>
                                                                </div>
                                                            </div> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=" shrink  lg:ml-[1rem] xl:ml-[1rem] last:border-r-0 lg:mb-[45px] md:mb-[45px] rounded-lg input-div w-[7rem]" style="cursor: pointer; ">
                                        <div>
                                            <div class="block lg:w-[7rem] md:w-[7rem] input-internal" style=";" onclick="moreNewP()">
                                                <!-- <label for="garage" class="font-lora block capitalize text-primary text-[16px] xl:text-[16px] leading-none mb-1 show2" style="cursor: pointer" id="moreShow"  >More</label> -->
                                                <p for="garage" class="text-tiny placeholder:text-body font-light focus:outline-none bg-transparent h-[2.63rem] border-[1px] pl-2 w-full mt-2 border-black rounded-md leading-[2.5]" >Filters</p>
                                            </div>
                                            <div class="flex-1 place-self-end ml-[-16rem] z-100 max-h-32 sm:hidden  min-w-max inline-popup more-filter-popup" id="NewPmore" style="display: none;">
                                                <!-- <div class="flex justify-center rounded absolute inline-popup more-filter-popup md:top-[6rem]" id="more"> -->
                                                    <div class="rounded-lg shadow-lg bg-[rgb(237,252,250,1)] max-w-sm bg-white border-black overflow-x-hidden  z-[100] overflow-y-auto max-h-96">
                                                        <div class="p-6 bg-[rgb(237,252,250,1)] ">
                                                            <h5 class="font-lora text-gray-900 text-xl font-medium mb-2">Furnishing</h5>
                                                            <select class="font-lora rounded form-control block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-[rgb(237,252,250,1)] bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 border-gray-300 focus:text-gray-700 focus:bg-[rgb(237,252,250,1)] focus:border-blue-600 focus:outline-none" name="furnishingnew">
                                                                <option selected disabled value="">Select </option>
                                                                <option value="1">furnished</option>
                                                                <option value="0">unfurnished</option>
                                                            </select>
                                                            <hr>
                                                        </div>
                                                        <hr>
                                                        <div class="p-6 bg-[rgb(237,252,250,1)]">
                                                            <h5 class="font-lora text-gray-900 text-xl font-medium mb-2">Amenities</h5>
                                                            <div class="flex  justify-center px-0">
                                                                <ul class="grid gap-x-4 gap-y-[5px] grid-cols-1 sm:grid-cols-2 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 px-[15px] mx-[-15px] " id="amenit">
                                                                @foreach($amenities as $amenity)
                                                                    <li class="flex flex-wrap inline-block  w-[10rem] text-sm ">
                                                                        <div class="form-check col-span-1  min-w-fit px-px">
                                                                            <input class="form-check-input h-4 w-4 border border-gray-300 rounded-sm bg-[rgb(237,252,250,1)] checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer my-auto" type="checkbox" name="amenities[]" value="{!!$amenity->name !!}" id="new{{$amenity->id}}">
                                                                            <label class="font-lora flex items-top form-check-label inline-block text-gray-800 mx-0" for="new{{$amenity->id}}">
                                                                                {!!$amenity->name !!}
                                                                            </label>
                                                                        </div>
                                                                    </li>
                                                                @endforeach
                                                                </ul>
                                                            </div>                                            
                                                        </div>
                                                        <hr>
                                                        <div class="p-6 bg-[rgb(237,252,250,1)]">
                                                            <h5 class="font-lora text-gray-900 text-xl font-medium mb-2">Keywords</h5>
                                                            <input type="text" class="font-lora rounded form-control block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-[rgb(237,252,250,1)] bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-[rgb(237,252,250,1)] focus:border-blue-600 focus:outline-none" id="exampleFormControlInput2" placeholder="Dubai" name="keywordsbuy">
                                                            <hr>
                                                        </div>
                                                        <hr>
                                                        <div class="p-6 bg-[rgb(237,252,250,1)]">
                                                            <h5 class="font-lora text-gray-900 text-xl font-medium mb-2">Listed by</h5>
                                                            <ul class="grid gap-x-4 gap-y-[5px] grid-cols-1 sm:grid-cols-2 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 px-[15px] mx-[-15px] " id="amenit">
                                                            @foreach($developers as $dev)
                                                                <li class="flex flex-wrap inline-block  w-[10rem] text-sm ">
                                                                    <div class="form-check col-span-1  min-w-fit px-px">
                                                                        <input class="form-check-input h-4 w-4 border border-gray-300 rounded-sm bg-[rgb(237,252,250,1)] checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer my-auto" type="checkbox" name="dev[]" value="{{$dev->id}}" id="devnew{{$dev->id}}">
                                                                        <label class="font-lora flex items-top form-check-label inline-block text-gray-800 mx-0" for="devnew{{$dev->id}}">
                                                                            {{$dev->developer_name }}
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                            @endforeach
                                                            </ul>
                                                        </div>
                                                                
                                                        <hr>
                                                        <div class="p-6 bg-[rgb(237,252,250,1)]">
                                                            <h5 class="font-lora text-gray-900 text-xl font-medium mb-2">Size sqft</h5>
                                                            <div class="grid grid-cols-3 gap-4">
                                                                <div class="col-start-1">
                                                                    <select class="font-lora rounded form-control block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-[rgb(237,252,250,1)] bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-[rgb(237,252,250,1)] focus:border-blue-600 focus:outline-none" name="minsizenew">
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
                                                                <div class="col-start-2 px-auto justify-center mx-auto"><p> - </p></div>
                                                                <div class="col-start-3">
                                                                    <select class="font-lora rounded form-control block w-full px-4 py-2 text-sm font-normal text-gray-700 bg-[rgb(237,252,250,1)] bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-[rgb(237,252,250,1)] focus:border-blue-600 focus:outline-none" name="maxsizenew">
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
                                                <!-- </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shrink  lg:ml-[1rem] xl:ml-[1rem] last:border-r-0 lg:mb-[45px] md:mb-[45px] rounded-lg input-div w-[7.2rem]" style="cursor: pointer; ">
                                        <div class="block lg:w-[7rem] md:w-[7rem] input-internal" style="width: 100%;">

                                            <button class="search-btn text-tiny placeholder:text-body font-light h-[2.63rem] border-[1px] pl-2 w-full mt-2 rounded-md leading-[2.5]" style="color:black; padding:0px; color: white; letter-spacing: 0.5px;" >
                                            <b style="font-weight: 800;">SEARCH</b>

                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </form>               
                        </div>
                    </div>
                <!-- </div> -->
            <!-- </div> -->
        </div>
    </div>
</div>

<!-- Hero section end -->

    <!-- Popular Properties start -->
        <section class="popular-properties py-[80px] lg:py-[120px] lg:mt-[-26rem] md:mt-[-26rem]">
            <div class="container">
                <x-keywords/>
                
                <br>
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between ">
                            <div>
                                <h2 class="font-lora text-primary text-[25px] sm:text-[25px] capitalize font-medium">
                                    <b>Projects </b><span class="text-secondary">.</span></h2>
                            </div>
                            <div class="relative inline-block text-left lg:z-10 md:z-10 sorting-div">
                              <div class="mb-5 ">
                                <button type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500 text-[14px]" id="Sort_by" aria-expanded="true" aria-haspopup="true" onclick="sorts()">
                                  Sort By
                                  <!-- Heroicon name: solid/chevron-down -->
                                  <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                  </svg>
                                </button>
                              </div>

                              <!--
                                Dropdown menu, show/hide based on menu state.

                                Entering: "transition ease-out duration-100"
                                  From: "transform opacity-0 scale-95"
                                  To: "transform opacity-100 scale-100"
                                Leaving: "transition ease-in duration-75"
                                  From: "transform opacity-100 scale-100"
                                  To: "transform opacity-0 scale-95"
                              -->
                              <div class="origin-top-right absolute right-0 mt-0 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none  transform:opacity-0 transform:scale-95 transform:opacity-100 tranform:scale-100 hidden  " id="sort_by_options" role="menu" aria-orientation="vertical" aria-labelledby="Sort_by" tabindex="-1" style="display:none;">
                                <div class="py-1" role="none">
                                  <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                  <a href="{{route('projects.sortingByNew')}}" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 hover:text-gray-900 text-[14px] newest" role="menuitem" tabindex="-1" id="menu-item-0">Newest</a>
                                  <a href="{{route('projects.sortingByPriceHigh')}}" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 hover:text-gray-900 text-[14px] p_high" role="menuitem" tabindex="-1" id="menu-item-1">Price(High to Low)</a>
                                  <a href="{{route('projects.sortingByPriceLow')}}" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 hover:text-gray-900 text-[14px] p_low" role="menuitem" tabindex="-1" id="menu-item-2">Price(Low to High)</a>
                                  <a href="{{route('projects.sortingByAreaLow')}}" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 hover:text-gray-900 text-[14px] s_low" role="menuitem" tabindex="-1" id="menu-item-3">Size(Small to Large)</a>
                                  <a href="{{route('projects.sortingByAreaHigh')}}" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 hover:text-gray-900 text-[14px] s_high" role="menuitem" tabindex="-1" id="menu-item-4">Size(Large to Small)</a>
                                  
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-[30px]">
                    @if(count($projects->where('status', '!=', 'Rent')) > 0)
                    @foreach($projects as $project)
                    @if($project->status != 'Rent')
                    <div class="overflow-hidden rounded-[15px] drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] bg-[#FFFDFC] text-center transition-all duration-300 hover:-translate-y-[10px] min-h-[30rem]">
                        <div class="relative">
                            <a href="{{ route('project_details',$project->id) }}" class="block">
                                <img src="{{config('fgproperties.file_path').$project->featured_image}}" class="w-full h-[15rem] rounded-tr-[15px] rounded-tl-[15px]" loading="lazy" width="370" height="266" alt="{{$project->title}}">
                            </a>
                            <div class="flex flex-wrap flex-col absolute top-5 right-5">
                                <button class="flex flex-wrap items-center bg-[rgb(11,44,61,0.8)] p-[5px] rounded-[2px] text-white mb-[5px] text-xs"><img class="mr-1" src="{{url('')}}/assets/images/icon/camera.png" loading="lazy" width="13" height="10" alt="camera icon">
                                     @php                        
                                        if ($project->images !="") {
                                            $images = $project->images;
                                            $img1 = explode(',', $images);
                                            $real_image = reset($img1);
                                        }
                                    @endphp
                                    {{ !Empty($img1) ? count($img1) : 1 }}
                                </button>
                            </div>
                            <span class="absolute bottom-5 left-5 bg-[#FFFDFC] p-[5px] rounded-[2px] text-primary leading-none text-[14px] font-normal capitalize">{{ $project->status=='Sell' ? 'For Sale' : $project->status}}</span>
                            @if ($project->developer_id)
                            <span class="absolute bottom-5 right-5 bg-[#FFFDFC] p-[5px] rounded-[2px] text-primary leading-none text-[14px] font-normal capitalize"> 
                                @foreach($developers as $developer)
                                    @if($developer->id == $project->developer_id)
                                        By {{$developer->developer_name}}
                                    @endif
                                @endforeach
                            </span> 
                            @endif
                        </div>

                        <div class="py-[20px] px-[20px] text-left">
                            <h3><a href="{{ route('project_details',$project->id) }}" class="font-lora leading-tight text-[16px] xl:text-[16px] text-primary font-medium"> {{$project->title}}</a></h3>
                            <h4 class="truncate"><a href="{{ route('project_details',$project->id) }}" class="font-light text-tiny underline " style=" margin-top: 20px">
                                @if($project->url != "")
                                    {{$project->url}}
                                @else
                                   UAE
                                @endif
                            </a></h4>
                            <span class="font-light text-sm">Added: {{ Carbon\Carbon::parse($project->created_at)->diffForHumans() }}</span>
                            <ul class="absolute  min-w-full my-auto flex flex-wrap items-center justify-between text-[12px] mt-[10px] mb-[15px] pb-[10px] border-b border-[#E0E0E0] my-auto">
                                
                                <li class="flex flex-wrap items-center pr-[25px] sm:pr-[5px] md:pr-[25px] border-r border-[#E0DEDE]">
                                    <svg class="mr-[5px]" width="14" height="14" viewBox="0 0 14 14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.8125 9.68709V4.31285C12.111 4.23634 12.384 4.0822 12.6037 3.86607C12.8234 3.64994 12.982 3.37951 13.0634 3.08226C13.1448 2.78501 13.1461 2.47151 13.0671 2.1736C12.9882 1.87569 12.8318 1.60398 12.6139 1.38605C12.396 1.16812 12.1243 1.01174 11.8263 0.932792C11.5284 0.85384 11.2149 0.855126 10.9177 0.936521C10.6204 1.01792 10.35 1.17652 10.1339 1.39623C9.91774 1.61593 9.7636 1.88892 9.68709 2.18747H4.31285C4.23634 1.88892 4.0822 1.61593 3.86607 1.39623C3.64994 1.17652 3.37951 1.01792 3.08226 0.936521C2.78501 0.855126 2.47151 0.85384 2.1736 0.932792C1.87569 1.01174 1.60398 1.16812 1.38605 1.38605C1.16812 1.60398 1.01174 1.87569 0.932792 2.1736C0.85384 2.47151 0.855126 2.78501 0.936521 3.08226C1.01792 3.37951 1.17652 3.64994 1.39623 3.86607C1.61593 4.0822 1.88892 4.23634 2.18747 4.31285V9.68709C1.88892 9.7636 1.61593 9.91774 1.39623 10.1339C1.17652 10.35 1.01792 10.6204 0.936521 10.9177C0.855126 11.2149 0.85384 11.5284 0.932792 11.8263C1.01174 12.1243 1.16812 12.396 1.38605 12.6139C1.60398 12.8318 1.87569 12.9882 2.1736 13.0671C2.47151 13.1461 2.78501 13.1448 3.08226 13.0634C3.37951 12.982 3.64994 12.8234 3.86607 12.6037C4.0822 12.384 4.23634 12.111 4.31285 11.8125H9.68709C9.7636 12.111 9.91774 12.384 10.1339 12.6037C10.35 12.8234 10.6204 12.982 10.9177 13.0634C11.2149 13.1448 11.5284 13.1461 11.8263 13.0671C12.1243 12.9882 12.396 12.8318 12.6139 12.6139C12.8318 12.396 12.9882 12.1243 13.0671 11.8263C13.1461 11.5284 13.1448 11.2149 13.0634 10.9177C12.982 10.6204 12.8234 10.35 12.6037 10.1339C12.384 9.91774 12.111 9.7636 11.8125 9.68709ZM11.375 1.74997C11.548 1.74997 11.7172 1.80129 11.8611 1.89744C12.005 1.99358 12.1171 2.13024 12.1834 2.29012C12.2496 2.45001 12.2669 2.62594 12.2332 2.79568C12.1994 2.96541 12.1161 3.12132 11.9937 3.24369C11.8713 3.36606 11.7154 3.4494 11.5457 3.48316C11.3759 3.51692 11.2 3.49959 11.0401 3.43337C10.8802 3.36714 10.7436 3.25499 10.6474 3.11109C10.5513 2.9672 10.5 2.79803 10.5 2.62497C10.5002 2.39298 10.5925 2.17055 10.7565 2.00651C10.9206 1.84246 11.143 1.7502 11.375 1.74997ZM1.74997 2.62497C1.74997 2.45191 1.80129 2.28274 1.89744 2.13885C1.99358 1.99495 2.13024 1.8828 2.29012 1.81658C2.45001 1.75035 2.62594 1.73302 2.79568 1.76678C2.96541 1.80055 3.12132 1.88388 3.24369 2.00625C3.36606 2.12862 3.4494 2.28453 3.48316 2.45427C3.51692 2.624 3.49959 2.79993 3.43337 2.95982C3.36714 3.1197 3.25499 3.25636 3.11109 3.35251C2.9672 3.44865 2.79803 3.49997 2.62497 3.49997C2.39298 3.49974 2.17055 3.40748 2.00651 3.24343C1.84246 3.07939 1.7502 2.85696 1.74997 2.62497ZM2.62497 12.25C2.45191 12.25 2.28274 12.1987 2.13885 12.1025C1.99495 12.0064 1.8828 11.8697 1.81658 11.7098C1.75035 11.5499 1.73302 11.374 1.76678 11.2043C1.80055 11.0345 1.88388 10.8786 2.00625 10.7563C2.12862 10.6339 2.28453 10.5505 2.45427 10.5168C2.624 10.483 2.79993 10.5003 2.95982 10.5666C3.1197 10.6328 3.25636 10.745 3.35251 10.8888C3.44865 11.0327 3.49997 11.2019 3.49997 11.375C3.49974 11.607 3.40748 11.8294 3.24343 11.9934C3.07939 12.1575 2.85696 12.2497 2.62497 12.25ZM9.68709 10.9375H4.31285C4.23448 10.6367 4.07729 10.3622 3.8575 10.1424C3.63771 9.92265 3.36326 9.76546 3.06247 9.68709V4.31285C3.36324 4.23444 3.63766 4.07724 3.85745 3.85745C4.07724 3.63766 4.23444 3.36324 4.31285 3.06247H9.68709C9.76546 3.36326 9.92265 3.63771 10.1424 3.8575C10.3622 4.07729 10.6367 4.23448 10.9375 4.31285V9.68709C10.6367 9.76542 10.3622 9.92259 10.1424 10.1424C9.92259 10.3622 9.76542 10.6367 9.68709 10.9375ZM11.375 12.25C11.2019 12.25 11.0327 12.1987 10.8888 12.1025C10.745 12.0064 10.6328 11.8697 10.5666 11.7098C10.5003 11.5499 10.483 11.374 10.5168 11.2043C10.5505 11.0345 10.6339 10.8786 10.7563 10.7563C10.8786 10.6339 11.0345 10.5505 11.2043 10.5168C11.374 10.483 11.5499 10.5003 11.7098 10.5666C11.8697 10.6328 12.0064 10.745 12.1025 10.8888C12.1987 11.0327 12.25 11.2019 12.25 11.375C12.2496 11.6069 12.1573 11.8293 11.9933 11.9933C11.8293 12.1573 11.6069 12.2496 11.375 12.25Z"/>
                                    </svg>
                                    <span> 
                                        @if($project->area != "")
                                            {{$project->area}} Sq.fit
                                        @else
                                        {{($project->built_area != "" ? $project->built_area ." Sq.ft":($project->plot_area != "" ? $project->plot_area ." Sq.ft":'N/A Sq.fit')) }}


                                        @endif
                                    </span>
                                </li>

                                <li class="flex flex-wrap items-center pr-[25px] sm:pr-[5px] md:pr-[25px] border-r border-[#E0DEDE]">
                                    <svg class="mr-[5px]" width="14" height="10" viewBox="0 0 14 10" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.0002 4.18665V2.33331C13.0002 1.23331 12.1002 0.333313 11.0002 0.333313H8.3335C7.82016 0.333313 7.3535 0.533313 7.00016 0.853313C6.64683 0.533313 6.18016 0.333313 5.66683 0.333313H3.00016C1.90016 0.333313 1.00016 1.23331 1.00016 2.33331V4.18665C0.593496 4.55331 0.333496 5.07998 0.333496 5.66665V9.66665H1.66683V8.33331H12.3335V9.66665H13.6668V5.66665C13.6668 5.07998 13.4068 4.55331 13.0002 4.18665ZM8.3335 1.66665H11.0002C11.3668 1.66665 11.6668 1.96665 11.6668 2.33331V3.66665H7.66683V2.33331C7.66683 1.96665 7.96683 1.66665 8.3335 1.66665ZM2.3335 2.33331C2.3335 1.96665 2.6335 1.66665 3.00016 1.66665H5.66683C6.0335 1.66665 6.3335 1.96665 6.3335 2.33331V3.66665H2.3335V2.33331ZM1.66683 6.99998V5.66665C1.66683 5.29998 1.96683 4.99998 2.3335 4.99998H11.6668C12.0335 4.99998 12.3335 5.29998 12.3335 5.66665V6.99998H1.66683Z" />
                                    </svg>
                                    <span>
                                        @if($project->bedrooms != "")
                                            {{$project->bedrooms}}
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
                                        @if($project->bathrooms != "")
                                            {{$project->bathrooms}}
                                        @else
                                            N/A 
                                        @endif
                                    </span>
                                </li>

                            </ul>

                            <ul class="absolute bottom-[3.7rem] min-w-full my-auto border-b border-solid" style="">
                                <li class="flex flex-wrap items-center justify-between">
                                    <span class="font-lora text-base text-primary leading-none font-bold" style="font-size:18px; margin-bottom: 0.3rem;">
                                        @if($project->price != "")
                                            Price: {{ number_format($project->price) }} AED
                                        @else
                                          Price: N/A
                                        @endif
                                    </span>

                                   <span class="absolute right-0 flex flex-wrap items-center">
                                        <button class="mr-[15px] hover:text-secondary" aria-label="svg" style="color:red; font-size:18px">
                                            <a href="tel:{{ $project->phone != '' ? $project->phone : getSettings('agent_number') }}"><i class="fa-solid fa-phone"></i></a>
                                        </button>
                                        <button class="mr-[15px] hover:text-secondary" aria-label="svg"  style="color:rgb(37, 211, 102); font-size:18px">
                                            <a href="{{ $project->phone != '' ? 'https://wa.me/'. $project->phone : 'https://wa.me/'.getSettings('agent_number') }}"><i class="fa-brands fa-whatsapp"></i></a>
                                        </button>
                                        <button class="mr-[15px] hover:text-secondary" aria-label="svg"  style="color:rgb(11, 44, 61); font-size:18px">
                                            <a href="mailto:{{ $project->email != '' ? $project->email : getSettings('website_email_1') }}"><i class="fa-solid fa-envelope"></i></a>
                                        </button>
                                        <button class="mr-[25px] hover:text-secondary" aria-label="svg"  style="color:black; font-size:18px">
                                            <a href="{{ $project->phone != '' ? 'https://wa.me/'. $project->phone : 'https://wa.me/'.getSettings('agent_number') }}"><i class="fas fa-share"></i></a>
                                        </button>
                                    </span>
                                </li>
                            </ul>
                            <div class="flex flex-1 flex-wrap absolute bottom-1 left-1">
                               @if($project->agent_image == '')
                            <img src="{{url('')}}/assets/images/team/images.jpg" class="flex flex-wrap flex-col " style="border-radius: 50%; width:50px; border-color: rgb(11,44,61); border: 2px solid;" alt="Avatar">
                            <p class="font-lora text-base text-primary leading-none font-bold place-self-center mx-1">
                                Fg Properties
                            </p>
                                @else
                            <img src="{{config('fgproperties.file_path').$project->agent_image}}" class="flex flex-wrap flex-col " style="border-radius: 50%; width:50px; height: 50px; border-color: rgb(11,44,61); border: 2px solid;" alt="Avatar">
                            <p class="font-lora text-base text-primary leading-none font-bold place-self-center mx-1">
                                {{ $project->agent_name }}
                            </p>
                            @endif
                            </div>

                        </div>
                    </div>
                    @endif
                    @endforeach
                    @else
                    <div class="grid grid-cols-12">
                        <div class="col-span-12">
                            <div class="flex flex-col sm:flex-row sm:items-center justify-between ">
                                <div>
                                    <h2 class="font-lora text-primary text-[25px] sm:text-[25px] capitalize font-medium">
                                        <b>No result</b><span class="text-secondary"></span>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </section>
    <!-- Popular Properties end -->
@endsection

@section('bottom-mid-scripts')

@endsection

@section('bottom-bot-scripts')
<script>
 $(document).ready(function () {
             
                $('#locationnew').on('input',function() {
                    var query = $('#locationnew').val(); 
                    $.ajax({
                       
                        url:"{{ route('liveSearch.searchBuyPage') }}",
                  
                        type:"GET",
                       
                        data:{'location':query, "_token": "{{ csrf_token() }}",},
                       
                        success:function (data) {
                          
                            $('#searchdiv').css('display', 'block');
                            $('#rent_suggest').html(data);
                        }
                    })
                    // end of ajax call
                });

                
                $(document).on('click', '.it', function(){
                  
                    var value = $(this).text();
                    $('#locationnew').val(value);
                    $('#rent_suggest').html("");
                });
            });

            $(document).on('click', function(){
                $('#searchdiv').css('display', 'none');
                $('#rent_suggest').html("");

            });


    $('.cb').on('change', function(event) {
        // alert(event.target.id);
        if(event.target.checked){
        $('.lab-'+event.target.id).css('border','solid 1px blue');
        $('.lab-'+event.target.id).css('color','blue');
        }
        else{
           $('.lab-'+event.target.id).css('border', 'solid 1px black');
        $('.lab-'+event.target.id).css('color', '#374151'); 
        }
    });

        function sorts() {
            if(document.getElementById("sort_by_options").style.display == "none")
            document.getElementById("sort_by_options").style.display = "block";
            else
            document.getElementById("sort_by_options").style.display = "none";
        }

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

        function typesnew() {
            if(document.getElementById("typesnewmore").style.display == "none")
            document.getElementById("typesnewmore").style.display = "block";
            else
            document.getElementById("typesnewmore").style.display = "none";
        }
        document.addEventListener('mousedown', function(e) {
          let container = document.getElementById('typesnewmore');
          if (!container.contains(e.target)) {
            container.style.display = 'none';
          }
        });

        function statussnew() {
            if(document.getElementById("statusnewmore").style.display == "none")
            document.getElementById("statusnewmore").style.display = "block";
            else
            document.getElementById("statusnewmore").style.display = "none";
        }
        document.addEventListener('mousedown', function(e) {
          let container = document.getElementById('statusnewmore');
          if (!container.contains(e.target)) {
            container.style.display = 'none';
          }
        });        

        function bedsnew() {
            if(document.getElementById("bedsnewmore").style.display == "none")
            document.getElementById("bedsnewmore").style.display = "block";
            else
            document.getElementById("bedsnewmore").style.display = "none";
        }
        document.addEventListener('mousedown', function(e) {
          let container = document.getElementById('bedsnewmore');
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

    console.log(`{{request()->header('User-Agent');}}`);
</script>

@endsection
