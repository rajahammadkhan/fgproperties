@extends('layouts.master')

@section('title') Home | Future Generation Properties @endsection

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
</style>
@endsection

@section('content')     

    <div class="relative">

            <!-- Hero section start -->

            <section class="bg-[#FFF6F0] relative before:absolute before:inset-0 before:content-[''] before:bg-[#060606] before:opacity-[50%]">
                <div class="lg:h-[720px] xl:h-[830px]">
                    <img class="w-full h-full min-h-[360px] md:min-h-[540px] object-cover" src="assets/images/hero/home-3.jpg" alt="hero image">
                    <div class="absolute right-0 left-0 lg:top-[110px] xl:top-[155px] top-[50%] -translate-y-1/2 lg:translate-y-0">
                        <div class="container">
                            <div class="grid grid-cols-12">
                                <div class="col-span-12">
                                    <div class="lg:max-w-[500px] xl:max-w-[600px] text-center ml-auto mr-auto lg:mb-[75px]">
                                        <span class="text-base text-white block mb-5">A new way to find Properties</span>
                                        <h1 class="font-lora text-white text-[36px] sm:text-[50px] md:text-[68px] lg:text-[50px] leading-tight xl:text-2xl title">
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

            <div class="container mt-[80px] md:mt-[120px] lg:mt-[0px] z-[2] pl-[60px] lg:pl-[50px] 2xl::pl-[0px] lg:absolute lg:left-0 lg:right-0 lg:top-[100%] lg:translate-y-[-396px]">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="relative text-center">
                            <ul class="tab-nav search-tab inline-flex px-[15px] sm:px-[30px] py-[22px] border-t border-l border-r border-solid border-[#016450] rounded-tl-[15px] rounded-tr-[15px] bg-[rgb(236,250,247,0.8)]">
                                <li data-tab="rent" class="mr-[5px] sm:mr-[10px] md:mr-[46px] my-1 active"><button class="font-lora leading-none px-[5px] sm:px-[10px] capitalize text-primary transition-all text-base xl:text-[22px] before:absolute before:left-auto before:right-0 before:bottom-[-31px] before:z-10 before:rounded-full before:w-0 before:h-[3px] before:content-[''] before:bg-secondary relative before:transition-all ease-out">rent</button>
                                </li>
                                <li data-tab="buy" class="mr-[5px] sm:mr-[10px] md:mr-[46px] my-1"><button class="font-lora leading-none px-[5px] sm:px-[10px] capitalize text-primary transition-all text-base xl:text-[22px] before:absolute before:left-auto before:right-0 before:bottom-[-31px] before:z-10 before:rounded-full before:w-0 before:h-[3px] before:content-[''] before:bg-secondary relative before:transition-all ease-out">buy</button>
                                </li>
                                <li data-tab="co-living" class="mr-[5px] sm:mr-[10px] md:mr-[46px] my-1"><button class="font-lora leading-none px-[5px] sm:px-[10px] capitalize text-primary transition-all text-base xl:text-[22px] before:absolute before:left-auto before:right-0 before:bottom-[-31px] before:z-10 before:rounded-full before:w-0 before:h-[3px] before:content-[''] before:bg-secondary relative before:transition-all ease-out">New Projects</button>
                                </li>
                                <li data-tab="sell" class="md:mr-[0px] my-1"><button class="font-lora leading-none px-[5px] sm:px-[10px] capitalize text-primary transition-all text-base xl:text-[22px] before:absolute before:left-auto before:right-0 before:bottom-[-31px] before:z-10 before:rounded-full before:w-0 before:h-[3px] before:content-[''] before:bg-secondary relative before:transition-all ease-out">Sell</button>
                                </li>
                            </ul>

                        </div>
                        <div class="relative selectricc-border-none">
                            <!-- <button class="tab-toggle-btn px-[10px] py-[15px] absolute top-[0px] left-[-45px] border-l border-t border-b border-solid border-[#016450] bg-[rgb(236,250,247,0.8)] text-primary rounded-tl-[10px] rounded-bl-[10px]" aria-label="svg icon">
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
                            <div id="buy" class=" tab-content bg-[rgb(236,250,247,0.8)] border border-solid border-[#016450] rounded-bl-[15px] rounded-br-[15px] rounded-tr-[15px] px-[15px] sm:px-[30px] py-[40px]  active" style="border-top-left-radius: 15px;">
                                <form action="#">
                                    <div class="advanced-searrch flex flex-wrap -mb-[45px]">

                                    	<div class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="assets/images/icon/property.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="property" class="font-lora block capitalize text-primary text-[17px] xl:text-[23px] leading-none mb-1">City</label>
                                                <select name="property" id="property" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                    <option selected value="0">Dubai</option>
                                                    <option value="1">Al Ain</option>
                                                    <option value="2">Sharjah</option>
                                                    <!-- <option value="3">Duplex House 3</option> -->
                                                </select>
                                            </div>
                                        </div>

                                        <div class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="assets/images/icon/location.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="location" class="font-lora block capitalize text-primary text-[17px] xl:text-[23px] leading-none mb-1">Location</label>
                                                <input id="location" type="text" placeholder="Choose location" class="text-tiny placeholder:text-body leading-none font-light pr-3 focus:outline-none w-full bg-transparent">
                                            </div>
                                        </div>

                                        <div class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="assets/images/icon/property.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="property" class="font-lora block capitalize text-primary text-[17px] xl:text-[23px] leading-none mb-1">Property
                                                    Type</label>
                                                <select name="property" id="property" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                    <option selected value="0">Apartments</option>
                                                    <option value="1">Villa</option>
                                                    <option value="2">Tounhouse</option>
                                                    <option value="3">Penthouse</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="assets/images/icon/dollar-circle.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="price" class="font-lora block capitalize text-primary text-[17px] xl:text-[23px] leading-none mb-1">Price
                                                    Range</label>
                                                <select name="price" id="price" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                    <option selected value="0">3500 USD</option>
                                                    <option value="1">3600 USD</option>
                                                    <option value="2">3700 USD</option>
                                                    <option value="3">3800 USD</option>
                                                </select>
                                            </div>

                                        </div>

                                        <div class="advanced-searrch-list border-r-black flex items-center lg:border-r lg:boprimaryborder-primaryD4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] relative">

                                            <div class="mr-4 self-start shrink-0">
                                                <img src="assets/images/icon/area.svg" width="24" height="24" alt="svg icon">
                                            </div>

                                            <div class="flex-1">
                                                <label for="property-size" class="font-lora block capitalize text-primary text-[17px] xl:text-[23px] leading-none mb-1">Developers</label>
                                                <select name="property-size" id="property-size" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                    <option selected value="0">Damac</option>
                                                    <option value="1">Sobha</option>
                                                    <option value="2">Arada</option>
                                                    <option value="3">Damac</option>
                                                </select>
                                            </div>
                                            <!--  -->
                                        </div>

                                        <div class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="assets/images/icon/location.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="bedrooms10" class="font-lora block capitalize text-primary text-[17px] xl:text-[23px] leading-none mb-1">Bedrooms</label>
                                                <select name="property" id="bedrooms10" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                    <option selected value="0">Bedrooms</option>
                                                    <option value="1">kitchen</option>
                                                    <option value="2">dinning rooms</option>
                                                    <option value="3">Duplex House 3</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="assets/images/icon/property.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="property9" class="font-lora block capitalize text-primary text-[17px] xl:text-[23px] leading-none mb-1">Projects</label>
                                                <select name="property" id="property9" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                    <option selected value="0">Project 1</option>
                                                    <!-- <option value="1">Duplex House 1</option> -->
                                                    <option value="2">Project 2</option>
                                                    <option value="3">Project 3</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="advanced-searrch-list flex items-center border-r-black lg:border-r lg:boprimaryborder-primaryD4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="assets/images/icon/dollar-circle.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="garage" class="font-lora block capitalize text-primary text-[17px] xl:text-[23px] leading-none mb-1">More</label>
                                                <!-- <select name="garage" id="garage" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                    <option selected value="0">2 Garage</option>
                                                    <option value="1">2 Garage</option>
                                                    <option value="2">3 Garage</option>
                                                    <option value="3">4 Garage</option>
                                                </select> -->
                                            </div>

                                        </div>

                                        <div class="advanced-searrch-list flex items-center lg:border-r lg:boprimaryborder-primaryD4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list "
                                        style="float: right;">
                                            <button class="search-properties-btn">
                                                Search Properties
                                            </button>
                                        </div>

                                    </div>



                                   <!--  <div class="advanced-searrch flex flex-wrap items-center mt-[45px] -mb-[45px]">

                                        

                                    </div> -->


                                </form>
                            </div>

                            <!-- <div id="sell" class="tab-content bg-[rgb(236,250,247,0.8)] border border-solid border-[#016450] rounded-bl-[15px] rounded-br-[15px] rounded-tr-[15px] px-[15px] sm:px-[30px] py-[40px]" style="border-top-left-radius: 15px;">
                                <form action="#">
                                    <div class="advanced-searrch flex flex-wrap -mb-[45px]">

                                        <div class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="assets/images/icon/property.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="property" class="font-lora block capitalize text-primary text-[17px] xl:text-[23px] leading-none mb-1">City</label>
                                                <select name="property" id="property" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                    <option selected value="0">Dubai</option>
                                                    <option value="1">Al Ain</option>
                                                    <option value="2">Sharjah</option>

                                                </select>
                                            </div>
                                        </div>

                                        <div class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="assets/images/icon/location.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="location" class="font-lora block capitalize text-primary text-[17px] xl:text-[23px] leading-none mb-1">Location</label>
                                                <input id="location" type="text" placeholder="Choose location" class="text-tiny placeholder:text-body leading-none font-light pr-3 focus:outline-none w-full bg-transparent">
                                            </div>
                                        </div>

                                        <div class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="assets/images/icon/property.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="property" class="font-lora block capitalize text-primary text-[17px] xl:text-[23px] leading-none mb-1">Property
                                                    Type</label>
                                                <select name="property" id="property" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                    <option selected value="0">Apartments</option>
                                                    <option value="1">Villa</option>
                                                    <option value="2">Tounhouse</option>
                                                    <option value="3">Penthouse</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="assets/images/icon/dollar-circle.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="price" class="font-lora block capitalize text-primary text-[17px] xl:text-[23px] leading-none mb-1">Price
                                                    Range</label>
                                                <select name="price" id="price" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                    <option selected value="0">3500 USD</option>
                                                    <option value="1">3600 USD</option>
                                                    <option value="2">3700 USD</option>
                                                    <option value="3">3800 USD</option>
                                                </select>
                                            </div>

                                        </div>

                                        <div class="advanced-searrch-list flex items-center lg:border-r lg:boprimaryborder-primaryD4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] relative">

                                            <div class="mr-4 self-start shrink-0">
                                                <img src="assets/images/icon/area.svg" width="24" height="24" alt="svg icon">
                                            </div>

                                            <div class="flex-1">
                                                <label for="property-size" class="font-lora block capitalize text-primary text-[17px] xl:text-[23px] leading-none mb-1">Developers</label>
                                                <select name="property-size" id="property-size" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                    <option selected value="0">Damac</option>
                                                    <option value="1">Sobha</option>
                                                    <option value="2">Arada</option>
                                                    <option value="3">Damac</option>
                                                </select>
                                            </div>
                                       
                                        </div>

                                        <div class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="assets/images/icon/location.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="bedrooms10" class="font-lora block capitalize text-primary text-[17px] xl:text-[23px] leading-none mb-1">Bedrooms</label>
                                                <select name="property" id="bedrooms10" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                    <option selected value="0">Bedrooms</option>
                                                    <option value="1">kitchen</option>
                                                    <option value="2">dinning rooms</option>
                                                    <option value="3">Duplex House 3</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="assets/images/icon/property.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="property9" class="font-lora block capitalize text-primary text-[17px] xl:text-[23px] leading-none mb-1">Projects</label>
                                                <select name="property" id="property9" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                    <option selected value="0">Project 1</option>

                                                    <option value="2">Project 2</option>
                                                    <option value="3">Project 3</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="advanced-searrch-list flex items-center border-r-black lg:border-r lg:boprimaryborder-primaryD4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="assets/images/icon/dollar-circle.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="garage" class="font-lora block capitalize text-primary text-[17px] xl:text-[23px] leading-none mb-1">More</label>
                                                


                                            </div>

                                        </div>

                                        <div class="advanced-searrch-list flex items-center lg:border-r lg:boprimaryborder-primaryD4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list "
                                        style="float: right;">
                                            <button class="search-properties-btn">
                                                Search Properties
                                            </button>
                                        </div>

                                    </div>



                                   


                                </form>

                               
                            </div> -->

                            <div id="rent" class="tab-content bg-[rgb(236,250,247,0.8)] border border-solid border-[#016450] rounded-bl-[15px] rounded-br-[15px] rounded-tr-[15px] px-[15px] sm:px-[30px] py-[40px]" style="border-top-left-radius: 15px;">
                                
                                <form action="#">
                                    <div class="advanced-searrch flex flex-wrap -mb-[45px]">

                                        <div class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="assets/images/icon/property.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="property" class="font-lora block capitalize text-primary text-[17px] xl:text-[23px] leading-none mb-1">City</label>
                                                <select name="property" id="property" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                    <option selected value="0">Dubai</option>
                                                    <option value="1">Al Ain</option>
                                                    <option value="2">Sharjah</option>
                                                    <!-- <option value="3">Duplex House 3</option> -->
                                                </select>
                                            </div>
                                        </div>

                                        <div class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="assets/images/icon/location.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="location" class="font-lora block capitalize text-primary text-[17px] xl:text-[23px] leading-none mb-1">Location</label>
                                                <input id="location" type="text" placeholder="Choose location" class="text-tiny placeholder:text-body leading-none font-light pr-3 focus:outline-none w-full bg-transparent">
                                            </div>
                                        </div>

                                        <div class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="assets/images/icon/property.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="property" class="font-lora block capitalize text-primary text-[17px] xl:text-[23px] leading-none mb-1">Property
                                                    Type</label>
                                                <select name="property" id="property" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                    <option selected value="0">Apartments</option>
                                                    <option value="1">Villa</option>
                                                    <option value="2">Tounhouse</option>
                                                    <option value="3">Penthouse</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="assets/images/icon/dollar-circle.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="price" class="font-lora block capitalize text-primary text-[17px] xl:text-[23px] leading-none mb-1">Price
                                                    Range</label>
                                                <select name="price" id="price" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                    <option selected value="0">3500 USD</option>
                                                    <option value="1">3600 USD</option>
                                                    <option value="2">3700 USD</option>
                                                    <option value="3">3800 USD</option>
                                                </select>
                                            </div>

                                        </div>

                                        <div class="advanced-searrch-list border-r-black flex items-center lg:border-r lg:boprimaryborder-primaryD4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] relative">

                                            <div class="mr-4 self-start shrink-0">
                                                <img src="assets/images/icon/area.svg" width="24" height="24" alt="svg icon">
                                            </div>

                                            <div class="flex-1">
                                                <label for="property-size" class="font-lora block capitalize text-primary text-[17px] xl:text-[23px] leading-none mb-1">Developers</label>
                                                <select name="property-size" id="property-size" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                    <option selected value="0">Damac</option>
                                                    <option value="1">Sobha</option>
                                                    <option value="2">Arada</option>
                                                    <option value="3">Damac</option>
                                                </select>
                                            </div>
                                            <!--  -->
                                        </div>

                                        <div class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="assets/images/icon/location.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="bedrooms10" class="font-lora block capitalize text-primary text-[17px] xl:text-[23px] leading-none mb-1">Bedrooms</label>
                                                <select name="property" id="bedrooms10" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                    <option selected value="0">Bedrooms</option>
                                                    <option value="1">kitchen</option>
                                                    <option value="2">dinning rooms</option>
                                                    <option value="3">Duplex House 3</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="assets/images/icon/property.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="property9" class="font-lora block capitalize text-primary text-[17px] xl:text-[23px] leading-none mb-1">Projects</label>
                                                <select name="property" id="property9" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                    <option selected value="0">Project 1</option>
                                                    <!-- <option value="1">Duplex House 1</option> -->
                                                    <option value="2">Project 2</option>
                                                    <option value="3">Project 3</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="advanced-searrch-list flex items-center border-r-black lg:border-r lg:boprimaryborder-primaryD4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="assets/images/icon/dollar-circle.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="garage" class="font-lora block capitalize text-primary text-[17px] xl:text-[23px] leading-none mb-1">More</label>
                                                <!-- <select name="garage" id="garage" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                    <option selected value="0">2 Garage</option>
                                                    <option value="1">2 Garage</option>
                                                    <option value="2">3 Garage</option>
                                                    <option value="3">4 Garage</option>
                                                </select> -->
                                            </div>

                                        </div>

                                        <div class="advanced-searrch-list flex items-center lg:border-r lg:boprimaryborder-primaryD4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list "
                                        style="float: right;">
                                            <button class="search-properties-btn">
                                                Search Properties
                                            </button>
                                        </div>

                                    </div>



                                   <!--  <div class="advanced-searrch flex flex-wrap items-center mt-[45px] -mb-[45px]">

                                        

                                    </div> -->


                                </form>

                                <!-- <form action="#">
                                    <div class="advanced-searrch flex flex-wrap -mb-[45px]">

                                        <div class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="assets/images/icon/location.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="location7" class="font-lora block capitalize text-primary text-[17px] xl:text-[23px] leading-none mb-1">Location</label>
                                                <input id="location7" type="text" placeholder="Choose location" class="text-tiny placeholder:text-body leading-none font-light pr-3 focus:outline-none w-full bg-transparent">
                                            </div>
                                        </div>

                                        <div class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="assets/images/icon/property.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="property8" class="font-lora block capitalize text-primary text-[17px] xl:text-[23px] leading-none mb-1">Property
                                                    Type</label>
                                                <select name="property" id="property8" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                    <option selected value="0">Apartments</option>
                                                    <option value="1">Apartments 1</option>
                                                    <option value="2">Apartments 2</option>
                                                    <option value="3">Apartments 3</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="assets/images/icon/dollar-circle.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="price7" class="font-lora block capitalize text-primary text-[17px] xl:text-[23px] leading-none mb-1">Price
                                                    Range</label>
                                                <select name="price" id="price7" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                    <option selected value="0">6500 USD</option>
                                                    <option value="1">6600 USD</option>
                                                    <option value="2">6700 USD</option>
                                                    <option value="3">6800 USD</option>
                                                </select>
                                            </div>

                                        </div>

                                        <div class="advanced-searrch-list flex items-center lg:border-r lg:boprimaryborder-primaryD4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] relative">

                                            <div class="mr-4 self-start shrink-0">
                                                <img src="assets/images/icon/area.svg" width="24" height="24" alt="svg icon">
                                            </div>

                                            <div class="flex-1">
                                                <label for="property-size9" class="font-lora block capitalize text-primary text-[17px] xl:text-[23px] leading-none mb-1">Property
                                                    Size</label>
                                                <select name="property-size" id="property-size9" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                    <option selected value="0">7500 Sqft</option>
                                                    <option value="1">7600 Sqft</option>
                                                    <option value="2">7700 Sqft</option>
                                                    <option value="3">7800 Sqft</option>
                                                </select>
                                            </div>
                                            
                                        </div>

                                    </div>



                                    <div class="advanced-searrch flex flex-wrap items-center mt-[45px] -mb-[45px]">

                                        <div class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="assets/images/icon/location.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="bedrooms6" class="font-lora block capitalize text-primary text-[17px] xl:text-[23px] leading-none mb-1">Bedrooms</label>
                                                <select name="property" id="bedrooms6" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                    <option selected value="0">Bedrooms</option>
                                                    <option value="1">kitchen</option>
                                                    <option value="2">dinning rooms</option>
                                                    <option value="3">Duplex House 3</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="assets/images/icon/property.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="property7" class="font-lora block capitalize text-primary text-[17px] xl:text-[23px] leading-none mb-1">Bathrooms</label>
                                                <select name="property" id="property7" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                    <option selected value="0">Duplex House</option>
                                                    <option value="1">Duplex House 1</option>
                                                    <option value="2">Duplex House 2</option>
                                                    <option value="3">Duplex House 3</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="advanced-searrch-list flex items-center lg:border-r lg:boprimaryborder-primaryD4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="assets/images/icon/dollar-circle.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="garage20" class="font-lora block capitalize text-primary text-[17px] xl:text-[23px] leading-none mb-1">Garage</label>
                                                <select name="garage" id="garage20" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                    <option selected value="0">2 Garage</option>
                                                    <option value="1">2 Garage</option>
                                                    <option value="2">3 Garage</option>
                                                    <option value="3">4 Garage</option>
                                                </select>
                                            </div>

                                        </div>

                                        <div class="advanced-searrch-list flex items-center lg:border-r lg:boprimaryborder-primaryD4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                            <button class="search-properties-btn">
                                                Search Properties
                                            </button>
                                        </div>

                                    </div>


                                </form> -->
                            </div>

                            <div id="co-living" class="tab-content bg-[rgb(236,250,247,0.8)] border border-solid border-[#016450] rounded-bl-[15px] rounded-br-[15px] rounded-tr-[15px] px-[15px] sm:px-[30px] py-[40px]" style="border-top-left-radius: 15px;">
                                
                                <form action="#">
                                    <div class="advanced-searrch flex flex-wrap -mb-[45px]">

                                        <div class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="assets/images/icon/property.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="property" class="font-lora block capitalize text-primary text-[17px] xl:text-[23px] leading-none mb-1">City</label>
                                                <select name="property" id="property" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                    <option selected value="0">Dubai</option>
                                                    <option value="1">Al Ain</option>
                                                    <option value="2">Sharjah</option>
                                                    <!-- <option value="3">Duplex House 3</option> -->
                                                </select>
                                            </div>
                                        </div>

                                        <div class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="assets/images/icon/location.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="location" class="font-lora block capitalize text-primary text-[17px] xl:text-[23px] leading-none mb-1">Location</label>
                                                <input id="location" type="text" placeholder="Choose location" class="text-tiny placeholder:text-body leading-none font-light pr-3 focus:outline-none w-full bg-transparent">
                                            </div>
                                        </div>

                                        <div class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="assets/images/icon/property.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="property" class="font-lora block capitalize text-primary text-[17px] xl:text-[23px] leading-none mb-1">Property
                                                    Type</label>
                                                <select name="property" id="property" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                    <option selected value="0">Apartments</option>
                                                    <option value="1">Villa</option>
                                                    <option value="2">Tounhouse</option>
                                                    <option value="3">Penthouse</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="assets/images/icon/dollar-circle.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="price" class="font-lora block capitalize text-primary text-[17px] xl:text-[23px] leading-none mb-1">Price
                                                    Range</label>
                                                <select name="price" id="price" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                    <option selected value="0">3500 USD</option>
                                                    <option value="1">3600 USD</option>
                                                    <option value="2">3700 USD</option>
                                                    <option value="3">3800 USD</option>
                                                </select>
                                            </div>

                                        </div>

                                        <div class="advanced-searrch-list border-r-black flex items-center lg:border-r lg:boprimaryborder-primaryD4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] relative">

                                            <div class="mr-4 self-start shrink-0">
                                                <img src="assets/images/icon/area.svg" width="24" height="24" alt="svg icon">
                                            </div>

                                            <div class="flex-1">
                                                <label for="property-size" class="font-lora block capitalize text-primary text-[17px] xl:text-[23px] leading-none mb-1">Developers</label>
                                                <select name="property-size" id="property-size" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                    <option selected value="0">Damac</option>
                                                    <option value="1">Sobha</option>
                                                    <option value="2">Arada</option>
                                                    <option value="3">Damac</option>
                                                </select>
                                            </div>
                                            <!--  -->
                                        </div>

                                        <div class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="assets/images/icon/location.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="bedrooms10" class="font-lora block capitalize text-primary text-[17px] xl:text-[23px] leading-none mb-1">Bedrooms</label>
                                                <select name="property" id="bedrooms10" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                    <option selected value="0">Bedrooms</option>
                                                    <option value="1">kitchen</option>
                                                    <option value="2">dinning rooms</option>
                                                    <option value="3">Duplex House 3</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- <div class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="assets/images/icon/property.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="property9" class="font-lora block capitalize text-primary text-[17px] xl:text-[23px] leading-none mb-1">Projects</label>
                                                <select name="property" id="property9" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                    <option selected value="0">Project 1</option>

                                                    <option value="2">Project 2</option>
                                                    <option value="3">Project 3</option>
                                                </select>
                                            </div>
                                        </div> -->

                                        <div class="advanced-searrch-list flex items-center border-r-black lg:border-r lg:boprimaryborder-primaryD4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="assets/images/icon/dollar-circle.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="garage" class="font-lora block capitalize text-primary text-[17px] xl:text-[23px] leading-none mb-1">More</label>
                                                <!-- <select name="garage" id="garage" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                    <option selected value="0">2 Garage</option>
                                                    <option value="1">2 Garage</option>
                                                    <option value="2">3 Garage</option>
                                                    <option value="3">4 Garage</option>
                                                </select> -->
                                            </div>

                                        </div>

                                        <div class="advanced-searrch-list flex items-center lg:border-r lg:boprimaryborder-primaryD4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list "
                                        style="float: right;">
                                            <button class="search-properties-btn">
                                                Search Properties
                                            </button>
                                        </div>

                                    </div>



                                   <!--  <div class="advanced-searrch flex flex-wrap items-center mt-[45px] -mb-[45px]">

                                        

                                    </div> -->


                                </form>

                                <!-- <form action="#">
                                    <div class="advanced-searrch flex flex-wrap -mb-[45px]">

                                        <div class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="assets/images/icon/location.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="location6" class="font-lora block capitalize text-primary text-[17px] xl:text-[23px] leading-none mb-1">Location</label>
                                                <input id="location6" type="text" placeholder="Choose location" class="text-tiny placeholder:text-body leading-none font-light pr-3 focus:outline-none w-full bg-transparent">
                                            </div>
                                        </div>

                                        <div class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="assets/images/icon/property.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="property6" class="font-lora block capitalize text-primary text-[17px] xl:text-[23px] leading-none mb-1">Property
                                                    Type</label>
                                                <select name="property" id="property6" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                    <option selected value="0">Duplex House</option>
                                                    <option value="1">Duplex House 1</option>
                                                    <option value="2">Duplex House 2</option>
                                                    <option value="3">Duplex House 3</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px]">
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="assets/images/icon/dollar-circle.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="price6" class="font-lora block capitalize text-primary text-[17px] xl:text-[23px] leading-none mb-1">Price
                                                    Range</label>
                                                <select name="price" id="price6" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                    <option selected value="0">1500 USD</option>
                                                    <option value="1">1600 USD</option>
                                                    <option value="2">1700 USD</option>
                                                    <option value="3">1800 USD</option>
                                                </select>
                                            </div>

                                        </div>

                                        <div class="advanced-searrch-list flex items-center lg:border-r lg:boprimaryborder-primaryD4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] relative">

                                            <div class="mr-4 self-start shrink-0">
                                                <img src="assets/images/icon/area.svg" width="24" height="24" alt="svg icon">
                                            </div>

                                            <div class="flex-1">
                                                <label for="property-size4" class="font-lora block capitalize text-primary text-[17px] xl:text-[23px] leading-none mb-1">Property
                                                    Size</label>
                                                <select name="property-size" id="property-size4" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                    <option selected value="0">2500 Sqft</option>
                                                    <option value="1">2600 Sqft</option>
                                                    <option value="2">2700 Sqft</option>
                                                    <option value="3">2800 Sqft</option>
                                                </select>
                                            </div>
                                            
                                        </div>

                                    </div>



                                    <div class="advanced-searrch flex flex-wrap items-center mt-[45px] -mb-[45px]">

                                        <div class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="assets/images/icon/location.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="bedrooms4" class="font-lora block capitalize text-primary text-[17px] xl:text-[23px] leading-none mb-1">Bedrooms</label>
                                                <select name="property" id="bedrooms4" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                    <option selected value="0">Bedrooms</option>
                                                    <option value="1">kitchen</option>
                                                    <option value="2">dinning rooms</option>
                                                    <option value="3">Duplex House 3</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="advanced-searrch-list flex lg:border-r lg:border-primary lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="assets/images/icon/property.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="property4" class="font-lora block capitalize text-primary text-[17px] xl:text-[23px] leading-none mb-1">Bathrooms</label>
                                                <select name="property" id="property4" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                    <option selected value="0">Duplex House</option>
                                                    <option value="1">Duplex House 1</option>
                                                    <option value="2">Duplex House 2</option>
                                                    <option value="3">Duplex House 3</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="advanced-searrch-list flex items-center lg:border-r lg:boprimaryborder-primaryD4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                            <div class="mr-4 self-start shrink-0">
                                                <img src="assets/images/icon/dollar-circle.svg" width="24" height="24" alt="svg icon">
                                            </div>
                                            <div class="flex-1">
                                                <label for="garage4" class="font-lora block capitalize text-primary text-[17px] xl:text-[23px] leading-none mb-1">Garage</label>
                                                <select name="garage" id="garage4" class="nice-select appearance-none bg-transparent text-tiny font-light cursor-pointer">
                                                    <option selected value="0">2 Garage</option>
                                                    <option value="1">2 Garage</option>
                                                    <option value="2">3 Garage</option>
                                                    <option value="3">4 Garage</option>
                                                </select>
                                            </div>

                                        </div>

                                        <div class="advanced-searrch-list flex items-center lg:border-r lg:boprimaryborder-primaryD4D4] lg:mr-[40px] xl:mr-[50px] last:mr-0 last:border-r-0 mb-[45px] search-list">
                                            <button class="search-properties-btn">
                                                Search Properties
                                            </button>
                                        </div>

                                    </div>


                                </form> -->
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>

        <!-- Brand section Start-->

         <section class="brand-section pt-[80px] lg:pt-[120px]">
            <div class="container">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="mb-[60px] text-center">
                            <span class="text-secondary text-tiny inline-block mb-2">Our Developers</span>
                            <h2 class="font-lora text-primary text-[24px] sm:text-[30px] xl:text-xl capitalize font-medium">
                                Reliable Developers<span class="text-secondary">.</span></h2>
                        </div>
                    </div>
                    <div class="col-span-12">
                        <div class="brand-slider">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <!-- swiper-slide start -->
                                    <div class="swiper-slide text-center">
                                        <a href="#" class="block">
                                            <img src="{{url('')}}/assets/images/developer/arada.png" class="w-auto h-auto block mx-auto" loading="lazy" style="width: 100%;" alt="Arada">
                                        </a>
                                    </div>
                                    <div class="swiper-slide text-center">
                                        <a href="#" class="block">
                                            <img src="{{url('')}}/assets/images/developer/damac.png" class="w-auto h-auto block mx-auto" loading="lazy" style="width: 100%;" alt="Damac">
                                        </a>
                                    </div>
                                    <div class="swiper-slide text-center">
                                        <a href="#" class="block">
                                            <img src="{{url('')}}/assets/images/developer/dubaipro.png" class="w-auto h-auto block mx-auto" loading="lazy" style="width: 100%;" alt="Dubai Property">
                                        </a>
                                    </div>
                                    <div class="swiper-slide text-center">
                                        <a href="#" class="block">
                                            <img src="{{url('')}}/assets/images/developer/emaar.png" class="w-auto h-auto block mx-auto" loading="lazy" style="width: 100%;" alt="Emaar">
                                        </a>
                                    </div>
                                    <div class="swiper-slide text-center">
                                        <a href="#" class="block">
                                            <img src="{{url('')}}/assets/images/developer/nakheel.png" class="w-auto h-auto block mx-auto" loading="lazy" style="width: 100%;" alt="Nakheel">
                                        </a>
                                    </div>
                                    <div class="swiper-slide text-center">
                                        <a href="#" class="block">
                                            <img src="{{url('')}}/assets/images/developer/sobsha.png" class="w-auto h-auto block mx-auto" loading="lazy" style="width: 100%;" alt="Sobha">
                                        </a>
                                    </div>

                                    <!-- swiper-slide end-->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </section>

        <!-- Brand section End-->


    <!-- Explore Cities Start-->

        <!-- <section class="explore-cities-section pt-[80px] pb-[120px] lg:py-[120px]">
            <div class="container">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="mb-[30px] lg:mb-[60px] text-center">
                            <span class="text-secondary text-tiny inline-block mb-2">Explore Cities</span>
                            <h2 class="font-lora text-primary text-[24px] sm:text-[30px] xl:text-xl capitalize font-medium">Find
                                Popular Areas<span class="text-secondary">.</span></h2>
                        </div>
                        <div class="cities-slider">
                            <div class="swiper  -mx-[30px] -my-[60px] px-[30px] py-[60px]">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide text-center">
                                        <div class="relative group">
                                            <a href="agency.html" class="block group-hover:shadow-[0_10px_15px_0px_rgba(0,0,0,0.1)] transition-all duration-300">
                                                <img src="assets/images/cities/image1.png" class="w-full h-full block mx-auto rounded-[6px]" loading="lazy" width="270" height="380" alt="New York">
                                                <div class="bg-[rgb(255,253,252,0.8)] rounded-[6px] px-[5px] py-[15px] absolute group-hover:bottom-[25px] group-hover:opacity-100 bottom-[0px] opacity-0 left-[25px] right-[25px] transition-all duration-500">
                                                    <span class="font-lora font-normal text-[18px] text-primary transition-all leading-none">Downtown Dubai</span>
                                                    <p class="font-light text-[14px] capitalize text-secondary transition-all leading-none">36 Properties</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide text-center">
                                        <div class="relative group">
                                            <a href="agency.html" class="block group-hover:shadow-[0_10px_15px_0px_rgba(0,0,0,0.1)] transition-all duration-300">
                                                <img src="assets/images/cities/image2.png" class="w-full h-full block mx-auto rounded-[6px]" loading="lazy" width="270" height="380" alt="Sun Francisco">
                                                <div class="bg-[rgb(255,253,252,0.8)] rounded-[6px] px-[5px] py-[15px] absolute group-hover:bottom-[25px] group-hover:opacity-100 bottom-[0px] opacity-0 left-[25px] right-[25px] transition-all duration-500">
                                                    <span class="font-lora font-normal text-[18px] text-primary transition-all leading-none">The Palm Jumeirah</span>
                                                    <p class="font-light text-[14px] capitalize text-secondary transition-all leading-none">18 Properties</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide text-center">
                                        <div class="relative group">
                                            <a href="agency.html" class="block group-hover:shadow-[0_10px_15px_0px_rgba(0,0,0,0.1)] transition-all duration-300">
                                                <img src="assets/images/cities/image3.png" class="w-full h-full block mx-auto rounded-[6px]" loading="lazy" width="270" height="380" alt="Washington D.C.">
                                                <div class="bg-[rgb(255,253,252,0.8)] rounded-[6px] px-[5px] py-[15px] absolute group-hover:bottom-[25px] group-hover:opacity-100 bottom-[0px] opacity-0 left-[25px] right-[25px] transition-all duration-500">
                                                    <span class="font-lora font-normal text-[18px] text-primary transition-all leading-none">Dubai Marina</span>
                                                    <p class="font-light text-[14px] capitalize text-secondary transition-all leading-none">27 Properties</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide text-center">
                                        <div class="relative group">
                                            <a href="agency.html" class="block group-hover:shadow-[0_10px_15px_0px_rgba(0,0,0,0.1)] transition-all duration-300">
                                                <img src="assets/images/cities/image4.png" class="w-full h-full block mx-auto rounded-[6px]" loading="lazy" width="270" height="380" alt="New York">
                                                <div class="bg-[rgb(255,253,252,0.8)] rounded-[6px] px-[5px] py-[15px] absolute group-hover:bottom-[25px] group-hover:opacity-100 bottom-[0px] opacity-0 left-[25px] right-[25px] transition-all duration-500">
                                                    <span class="font-lora font-normal text-[18px] text-primary transition-all leading-none">Dubai Silicon Oasis</span>
                                                    <p class="font-light text-[14px] capitalize text-secondary transition-all leading-none">56 Properties</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide text-center">
                                        <div class="relative group">
                                            <a href="agency.html" class="block group-hover:shadow-[0_10px_15px_0px_rgba(0,0,0,0.1)] transition-all duration-300">
                                                <img src="assets/images/cities/image3.png" class="w-full h-full block mx-auto rounded-[6px]" loading="lazy" width="270" height="380" alt="Francisco">
                                                <div class="bg-[rgb(255,253,252,0.8)] rounded-[6px] px-[5px] py-[15px] absolute group-hover:bottom-[25px] group-hover:opacity-100 bottom-[0px] opacity-0 left-[25px] right-[25px] transition-all duration-500">
                                                    <span class="font-lora font-normal text-[18px] text-primary transition-all leading-none">JLT Jumeirah Lake Towers</span>
                                                    <p class="font-light text-[14px] capitalize text-secondary transition-all leading-none">18 Properties Sun</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

    <!-- Explore Cities End-->

    <!-- Popular Properties start -->
        <section class="popular-properties py-[80px] lg:py-[120px] mb-[-180px]">
            <div class="container">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between mb-[50px]">
                            <div>
                                <span class="text-secondary text-tiny inline-block mb-2">Best Choice</span>
                                <h2 class="font-lora text-primary text-[24px] sm:text-[30px] xl:text-xl capitalize font-medium">
                                    Featured
                                    Properties<span class="text-secondary">.</span></h2>
                            </div>
                            <div>
                                <a href="properties-v1.html" class="flex flex-wrap items-center text-secondary text-tiny">Explore all
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
                            <a href="properties-details.html" class="block">
                                <img src="assets/images/properties/properties1.png" class="w-full h-full" loading="lazy" width="370" height="266" alt="Orchid Casel de Paradise.">
                            </a>
                            <div class="flex flex-wrap flex-col absolute top-5 right-5">
                                <button class="flex flex-wrap items-center bg-[rgb(11,44,61,0.8)] p-[5px] rounded-[2px] text-white mb-[5px] text-xs"><img class="mr-1" src="assets/images/icon/camera.png" loading="lazy" width="13" height="10" alt="camera icon">07</button>
                                <button class="flex flex-wrap items-center bg-[rgb(11,44,61,0.8)] p-[5px] rounded-[2px] text-white text-xs"><img class="mr-1" src="assets/images/icon/video.png" loading="lazy" width="14" height="10" alt="camera icon">08</button>
                            </div>
                            <span class="absolute bottom-5 left-5 bg-[#FFFDFC] p-[5px] rounded-[2px] text-primary leading-none text-[14px] font-normal capitalize">for Sale</span>
                        </div>

                        <div class="py-[20px] px-[20px]">
                            <h3><a href="properties-details.html" class="font-lora leading-tight text-[22px] xl:text-[26px] text-primary font-medium">Sobha Creek Vistas Tower C.</a></h3>
                            <h4><a href="properties-details.html" class="font-light text-tiny underline">18B Central Street, Dubai</a></h4>
                            <span class="font-light text-sm">Added: 25 November, 2021</span>
                            <div class="before:block before:absolute before:top-1/2 before:-translate-y-1/2 before:h-[1px] before:w-full before:z-[-1] before:bg-[#E0E0E0] relative"><span class="font-lora text-base text-primary px-[15px] bg-white font-medium">Price: 255300 AED</span></div>
                            <p class="font-light">1230 Sq.fit - 4 Bed - 3 Bath - 2 Garage</p>
                        </div>
                    </div>
                    <div class="overflow-hidden rounded-md drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] bg-[#FFFDFC] text-center transition-all duration-300 hover:-translate-y-[10px]">
                        <div class="relative">
                            <a href="properties-details.html" class="block">
                                <img src="assets/images/properties/properties2.png" class="w-full h-full" loading="lazy" width="370" height="266" alt="Ruposibangla de parlosia.">
                            </a>
                            <div class="flex flex-wrap flex-col absolute top-5 right-5">
                                <button class="flex flex-wrap items-center bg-[rgb(11,44,61,0.8)] p-[5px] rounded-[2px] text-white mb-[5px] text-xs"><img class="mr-1" src="assets/images/icon/camera.png" loading="lazy" width="13" height="10" alt="camera icon">07</button>
                                <button class="flex flex-wrap items-center bg-[rgb(11,44,61,0.8)] p-[5px] rounded-[2px] text-white text-xs"><img class="mr-1" src="assets/images/icon/video.png" loading="lazy" width="14" height="10" alt="camera icon">08</button>
                            </div>
                            <span class="absolute bottom-5 left-5 bg-[#FFFDFC] p-[5px] rounded-[2px] text-primary leading-none text-[14px] font-normal capitalize">for Rent</span>
                        </div>

                        <div class="py-[20px] px-[20px]">
                            <h3><a href="properties-details.html" class="font-lora leading-tight text-[22px] xl:text-[26px] text-primary font-medium">DAMAC Tower Amman.</a></h3>
                            <h4><a href="properties-details.html" class="font-light text-tiny underline">18B Central Street, Dubai</a></h4>
                            <span class="font-light text-sm">Added: 25 November, 2021</span>
                            <div class="before:block before:absolute before:top-1/2 before:-translate-y-1/2 before:h-[1px] before:w-full before:z-[-1] before:bg-[#E0E0E0] relative"><span class="font-lora text-base text-primary px-[15px] bg-white font-medium">Price: 255300 AED</span></div>
                            <p class="font-light">1800 Sq.fit - 5 Bed - 3 Bath - 2 Garage</p>
                        </div>
                    </div>
                    <div class="overflow-hidden rounded-md drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] bg-[#FFFDFC] text-center transition-all duration-300 hover:-translate-y-[10px]">
                        <div class="relative">
                            <a href="properties-details.html" class="block">
                                <img src="assets/images/properties/properties3.png" class="w-full h-full" loading="lazy" width="370" height="266" alt="Sinomen Studio Palace.">
                            </a>
                            <div class="flex flex-wrap flex-col absolute top-5 right-5">
                                <button class="flex flex-wrap items-center bg-[rgb(11,44,61,0.8)] p-[5px] rounded-[2px] text-white mb-[5px] text-xs"><img class="mr-1" src="assets/images/icon/camera.png" loading="lazy" width="13" height="10" alt="camera icon">07</button>
                                <button class="flex flex-wrap items-center bg-[rgb(11,44,61,0.8)] p-[5px] rounded-[2px] text-white text-xs"><img class="mr-1" src="assets/images/icon/video.png" loading="lazy" width="14" height="10" alt="camera icon">08</button>
                            </div>
                            <span class="absolute bottom-5 left-5 bg-[#FFFDFC] p-[5px] rounded-[2px] text-primary leading-none text-[14px] font-normal capitalize">for Sale</span>
                        </div>

                        <div class="py-[20px] px-[20px]">
                            <h3><a href="properties-details.html" class="font-lora leading-tight text-[22px] xl:text-[26px] text-primary font-medium">The Crest Tower B .</a></h3>
                            <h4><a href="properties-details.html" class="font-light text-tiny underline">194 Mercer Street, 627 Broadway, Dubai</a></h4>
                            <span class="font-light text-sm">Added: 25 November, 2021</span>
                            <div class="before:block before:absolute before:top-1/2 before:-translate-y-1/2 before:h-[1px] before:w-full before:z-[-1] before:bg-[#E0E0E0] relative"><span class="font-lora text-base text-primary px-[15px] bg-white font-medium">Price: 255300 AED</span></div>
                            <p class="font-light">1230 Sq.fit - 4 Bed - 3 Bath - 2 Garage</p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- Popular Properties end -->

        <!-- Popular Area start -->
        <section class="popular-properties py-[80px] lg:py-[120px]">
            <div class="container">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between ">
                            <div>
                                <span class="text-secondary text-tiny inline-block mb-2">Best Choice</span>
                                <h2 class="font-lora text-primary text-[24px] sm:text-[30px] xl:text-xl capitalize font-medium">
                                    Popular Areas In Dubai<span class="text-secondary">.</span></h2>
                            </div>
                            <div>
                                <a href="properties-v1.html" class="flex flex-wrap items-center text-secondary text-tiny">Explore all
                                    <svg class="ml-[10px]" width="26" height="11" viewBox="0 0 26 11" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20.0877 0.69303L24.2075 5.00849H0V5.99151H24.2075L20.0877 10.307L20.7493 11L26 5.5L20.7493 0L20.0877 0.69303Z" fill="currentColor" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="mt-5 grid grid-cols-3 w-auto gap-4 ">
                    <div class="swiper-slide text-center area">
                        <div class="relative group">
                            <a href="agency.html" class="block group-hover:shadow-[0_10px_15px_0px_rgba(0,0,0,0.1)] transition-all duration-300">
                                 <figure><img src="{{url('')}}/assets/images/area/dubai-marina.jpg" alt=""></figure>
                                <div class="bg-[rgb(255,253,252,0.8)] rounded-[6px] px-[5px] py-[15px] absolute group-hover:bottom-[25px] group-hover:opacity-100 bottom-[0px] opacity-0 left-[25px] right-[25px] transition-all duration-500">
                                
                                </div>
                                <span class="font-lora font-normal text-[20px] text-primary transition-all leading-none">Dubai Marina</span>
                                <p class="font-light text-[16px] capitalize text-secondary transition-all leading-none">Price form 600,000 AED</p>
                            </a>
                        </div>
                    </div>

                    <div class="swiper-slide text-center area">
                        <div class="relative group">
                            <a href="agency.html" class="block group-hover:shadow-[0_10px_15px_0px_rgba(0,0,0,0.1)] transition-all duration-300">
                                <figure><img src="{{url('')}}/assets/images/area/emaar-beachfront.jpg" alt=""></figure>
                                <div class="bg-[rgb(255,253,252,0.8)] rounded-[6px] px-[5px] py-[15px] absolute group-hover:bottom-[25px] group-hover:opacity-100 bottom-[0px] opacity-0 left-[25px] right-[25px] transition-all duration-500">
                                <span class="font-lora font-normal text-[20px] text-primary transition-all leading-none">Emaar</span>
                                <p class="font-light text-[16px] capitalize text-secondary transition-all leading-none">Price form 600,000 AED</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="swiper-slide text-center area">
                        <div class="relative group">
                            <a href="agency.html" class="block group-hover:shadow-[0_10px_15px_0px_rgba(0,0,0,0.1)] transition-all duration-300">
                                <figure><img src="{{url('')}}/assets/images/area/dubai-hills-estate.jpg" alt=""></figure>
                                <div class="bg-[rgb(255,253,252,0.8)] rounded-[6px] px-[5px] py-[15px] absolute group-hover:bottom-[25px] group-hover:opacity-100 bottom-[0px] opacity-0 left-[25px] right-[25px] transition-all duration-500">
                                <span class="font-lora font-normal text-[20px] text-primary transition-all leading-none">Dubai Hills</span>
                                <p class="font-light text-[16px] capitalize text-secondary transition-all leading-none">Price form 600,000 AED</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="mt-5 grid grid-cols-4 w-auto gap-4">
                    <div class="swiper-slide text-center area">
                        <div class="relative group">
                            <a href="agency.html" class="block group-hover:shadow-[0_10px_15px_0px_rgba(0,0,0,0.1)] transition-all duration-300">
                                 <figure><img src="{{url('')}}/assets/images/area/business-bay_-scaled.jpg" alt=""></figure>
                                <div class="bg-[rgb(255,253,252,0.8)] rounded-[6px] px-[5px] py-[15px] absolute group-hover:bottom-[25px] group-hover:opacity-100 bottom-[0px] opacity-0 left-[25px] right-[25px] transition-all duration-500">
                                <span class="font-lora font-normal text-[20px] text-primary transition-all leading-none">Dubai Marina</span>
                                <p class="font-light text-[16px] capitalize text-secondary transition-all leading-none">Price form 600,000 AED</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="swiper-slide text-center area">
                        <div class="relative group">
                            <a href="agency.html" class="block group-hover:shadow-[0_10px_15px_0px_rgba(0,0,0,0.1)] transition-all duration-300">
                                <figure><img src="{{url('')}}/assets/images/area/palm-jumeirah.jpg" alt=""></figure>
                                <div class="bg-[rgb(255,253,252,0.8)] rounded-[6px] px-[5px] py-[15px] absolute group-hover:bottom-[25px] group-hover:opacity-100 bottom-[0px] opacity-0 left-[25px] right-[25px] transition-all duration-500">
                                <span class="font-lora font-normal text-[20px] text-primary transition-all leading-none">Palm Jumeirah</span>
                                <p class="font-light text-[16px] capitalize text-secondary transition-all leading-none">Price form 600,000 AED</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="swiper-slide text-center area">
                        <div class="relative group">
                            <a href="agency.html" class="block group-hover:shadow-[0_10px_15px_0px_rgba(0,0,0,0.1)] transition-all duration-300">
                                <figure><img src="{{url('')}}/assets/images/area/downtown-header.jpg" alt=""></figure>
                                <div class="bg-[rgb(255,253,252,0.8)] rounded-[6px] px-[5px] py-[15px] absolute group-hover:bottom-[25px] group-hover:opacity-100 bottom-[0px] opacity-0 left-[25px] right-[25px] transition-all duration-500">
                                <span class="font-lora font-normal text-[20px] text-primary transition-all leading-none">Downtown Header</span>
                                <p class="font-light text-[16px] capitalize text-secondary transition-all leading-none">Price form 600,000 AED</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="swiper-slide text-center area">
                        <div class="relative group">
                            <a href="agency.html" class="block group-hover:shadow-[0_10px_15px_0px_rgba(0,0,0,0.1)] transition-all duration-300">
                                <figure><img src="{{url('')}}/assets/images/area/jbr.jpg" alt=""></figure>
                                <div class="bg-[rgb(255,253,252,0.8)] rounded-[6px] px-[5px] py-[15px] absolute group-hover:bottom-[25px] group-hover:opacity-100 bottom-[0px] opacity-0 left-[25px] right-[25px] transition-all duration-500">
                                <span class="font-lora font-normal text-[20px] text-primary transition-all leading-none">JBR</span>
                                <p class="font-light text-[16px] capitalize text-secondary transition-all leading-none">Price form 600,000 AED</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div> 

            </div>
        </section>
        <!-- Popular Area end -->

    <!-- About Us Sectin Start -->
        <section class="about-section lg:pt-[0px]">
            <div class="container">
                <div class="grid grid-cols-12 gap-6 items-center">
                    <div class="col-span-12 lg:col-span-6">
                        <span class="text-secondary text-tiny inline-block mb-2">Why Choose us</span>
                        <h2 class="font-lora text-primary text-[24px] sm:text-[30px] leading-[1.277] xl:text-xl capitalize mb-5 lg:mb-16 font-medium max-w-[500px]">We Provide Latest Properties for our valuable Clients.<span class="text-secondary">.</span></h2>
                        <div class="scene" data-relative-input="true">
                            <img data-depth="0.1" src="assets/images/about/about1.png" class="" loading="lazy" width="729" height="663" alt="about Image">
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6 lg:pl-[70px]">
                        <p class="max-w-[448px] ">Huge number of propreties availabe here for buy, sell and
                            Rent. Also you find here co-living property so lots opportunity
                            you have to choose here and enjoy huge discount. </p>

                        <div class="-mb-10 mt-12 xl:mt-[70px] 2xl:mt-[100px]">
                            <div class="flex flex-wrap mb-5 lg:mb-10">
                                <img src="assets/images/icon/doller.png" class="self-start mr-5" loading="lazy" width="50" height="50" alt="about Image">
                                <div class="flex-1">
                                    <h3 class="font-lora text-primary text-[22px] xl:text-lg capitalize mb-2">Budget
                                        Friendly</h3>
                                    <p class="max-w-[315px]">Properties are most budget friendly so you
                                        have opportunity to find the best one</p>
                                </div>

                            </div>
                            <div class="flex flex-wrap mb-5 lg:mb-10">
                                <img src="assets/images/icon/location.png" class="self-start mr-5" loading="lazy" width="50" height="50" alt="about Image">
                                <div class="flex-1">
                                    <h3 class="font-lora text-primary text-[22px] xl:text-lg capitalize mb-2">Prime
                                        Location</h3>
                                    <p class="max-w-[315px]">Properties are most budget friendly so you
                                        have opportunity to find the best one</p>
                                </div>

                            </div>
                            <div class="flex flex-wrap mb-5 lg:mb-10">
                                <img src="assets/images/icon/trusted.png" class="self-start mr-5" loading="lazy" width="50" height="50" alt="about Image">
                                <div class="flex-1">
                                    <h3 class="font-lora text-primary text-[22px] xl:text-lg capitalize mb-2">
                                        Trusted by
                                        Thousand</h3>
                                    <p class="max-w-[315px]">Properties are most budget friendly so you
                                        have opportunity to find the best one</p>
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

    <!-- Blog Section Start  -->

        <section class="blog-section relative">
            <div class="container">
                <div class="">
                    <div class="">
                        <div class="mb-[60px] text-center">
                            <span class="text-secondary text-tiny inline-block mb-2">Our Blog</span>
                            <h2 class="font-lora text-primary text-[24px] sm:text-[30px] xl:text-xl capitalize font-medium">
                                Check our blog post's<span class="text-secondary">.</span></h2>
                        </div>
                    </div>
                    <div class="">
                        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-x-[30px] mb-[-30px]">
                            <div class="mb-[30px]">
                                <a href="blog-details.html" class="block overflow-hidden rounded-[6px] mb-[30px]">
                                    <img class="w-full h-full" src="assets/images/blog/post1.png" width="370" height="270" loading="lazy" alt="Tip’s about Real Estate Recent Conditions from Agent.">
                                </a>
                                <div>
                                    <span class="block leading-none font-normal text-[14px] text-secondary mb-[10px] relative before:absolute before:left-0 before:top-1/2 -translate-y-1/2">James Alber on 22 December, 21</span>
                                    <h3><a href="blog-details.html" class="font-lora text-[22px] xl:text-[24px] leading-[1.285] text-primary block mb-[10px] hover:text-secondary transition-all font-medium">Tip’s about Real Estate Recent Conditions from Agent.</a></h3>
                                    <p class="font-light text-[#494949] text-[16px] leading-[1.75]">Properties are most budget friendly so you have are opportunity to find are the best the best...</p>
                                </div>
                            </div>
                            <div class="mb-[30px]">
                                <a href="blog-details.html" class="block overflow-hidden rounded-[6px] mb-[30px]">
                                    <img class="w-full h-full" src="assets/images/blog/post2.png" width="370" height="270" loading="lazy" alt="Importance of Build quality of modern Real Estate.">
                                </a>
                                <div>
                                    <span class="block leading-none font-normal text-[14px] text-secondary mb-[10px] relative before:absolute before:left-0 before:top-1/2 -translate-y-1/2">Shohel Gyes on 21 December, 21</span>
                                    <h3><a href="blog-details.html" class="font-lora text-[22px] xl:text-[24px] leading-[1.285] text-primary block mb-[10px] hover:text-secondary transition-all font-medium">Importance of Build quality of modern Real Estate.</a></h3>
                                    <p class="font-light text-[#494949] text-[16px] leading-[1.75]">Properties are most budget friendly so you have are opportunity to find are the best the best...</p>
                                </div>
                            </div>
                            <div class="mb-[30px]">
                                <a href="blog-details.html" class="block overflow-hidden rounded-[6px] mb-[30px]">
                                    <img class="w-full h-full" src="assets/images/blog/post3.png" width="370" height="270" loading="lazy" alt="Importance of Build quality of modern Real Estate.">
                                </a>
                                <div>
                                    <span class="block leading-none font-normal text-[14px] text-secondary mb-[10px] relative before:absolute before:left-0 before:top-1/2 -translate-y-1/2">Shohel Gyes on 21 December, 21</span>
                                    <h3><a href="blog-details.html" class="font-lora text-[22px] xl:text-[24px] leading-[1.285] text-primary block mb-[10px] hover:text-secondary transition-all font-medium">Importance of Build quality of modern Real Estate.</a></h3>
                                    <p class="font-light text-[#494949] text-[16px] leading-[1.75]">Properties are most budget friendly so you have are opportunity to find are the best the best...</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- Blog Section End  -->



    <!-- News Letter section start -->
        <section class="pt-[80px] lg:pt-[120px]">
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
                                <!-- mailchimp-alerts Start -->
                                <div class="mailchimp-alerts text-centre">
                                    <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                    <div class="mailchimp-success text-green-400"></div><!-- mailchimp-success end -->
                                    <div class="mailchimp-error text-red-600"></div><!-- mailchimp-error end -->
                                </div>
                                <!-- mailchimp-alerts end -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    <!-- News Letter section End -->
@endsection

@section('bottom-mid-scripts')

@endsection

@section('bottom-bot-scripts')

@endsection
