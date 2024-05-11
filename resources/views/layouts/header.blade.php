<style>
.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  cursor: pointer;
  font-size: 16px;  
  border: none;
  outline: none;
  color: rgb(11, 44, 61);
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn, .dropbtn:focus {
  background-color: white;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: fit-content;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: rgb(11, 44, 61);
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.show {
  display: block;
}
</style>

<!-- <header id="sticky-header" class="relative bg-[#ECFAF7] lg:py-[30px] z-[25] secondary-sticky"> -->
<header id="" class="relative bg-[rgb(236,250,247,0.7)] lg:py-[4px] py-[10px] z-[25] secondary-sticky" >
            <div class="container">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="flex flex-wrap items-center justify-between">
                            <a href="{{ route('home') }}" class="block" id="navleft" >
                                <img class="w-full h-full" src="{{config('fgproperties.file_path').getSettings('site_logo_header')}}" loading="lazy" style="width: 140px; " alt="Future Generation Properties">
                                <!-- <img class="w-full h-full" src="{{URL('')}}/{{config('fgproperties.file_path').getSettings('site_logo_header')}}" loading="lazy" style="width: 140px; " alt="Future Generation Properties"> -->
                            </a>
                            <nav class="flex flex-wrap items-center">
                                <ul class="hidden lg:flex flex-wrap items-center font-lora text-[17px] xl:text-[17px] leading-none text-black " style="font-weight: 480;">

                                    <li class="mr-7 xl:mr-[40px] relative group py-[20px]">


                                        <a href="{{ route('buy') }}" >
                                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex justify-between items-center md:p-0 transition-all hover:text-secondary text-[15px]">Buy <svg class="ml-1 w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                                        </a> 

                                        <ul class="list-none bg-white drop-shadow-[0px_6px_10px_rgba(0,0,0,0.2)] rounded-[12px] flex flex-wrap flex-col w-[220px] absolute top-[120%] left-1/2 -translate-x-1/2 transition-all group-hover:top-[100%] invisible group-hover:visible opacity-0 group-hover:opacity-100 ">
                                            
                                            <li class="border-b border-dashed border-primary border-opacity-40 last:border-b-0 transition-all">
                                                <a href="{{ route('projects.getApartments') }}" class="font-lora leading-[1.571] text-[14px] text-primary p-[10px] capitalize block transition-all hover:bg-primary hover:text-white text-center my-[-1px] text-[15px] hover:rounded-tl-[12px] hover:rounded-tr-[12px]">Apartment For Sale</a>
                                            </li>
                                            <li class="border-b border-dashed border-primary border-opacity-40 last:border-b-0 hover:border-solid transition-all">
                                                <a href="{{ route('projects.getVillas') }}" class="font-lora leading-[1.571] text-[14px] text-primary p-[10px] capitalize block transition-all hover:bg-primary hover:text-white text-center my-[-1px] text-[15px]">Villas For Sale</a>
                                            </li>
                                            <li class="border-b border-dashed border-primary border-opacity-40 last:border-b-0 hover:border-solid transition-all">
                                                <a href="{{ route('contact') }}" class="font-lora leading-[1.571] text-[14px] text-primary p-[10px] capitalize block transition-all hover:bg-primary hover:text-white text-center my-[-1px] text-[15px] hover:rounded-bl-[12px] hover:rounded-br-[12px]">Make an Enquiry</a>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                    <li class="mr-7 xl:mr-[40px] relative group py-[20px]">



                                        <a href="{{ route('rent') }}"  >
                                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex justify-between items-center md:p-0 transition-all hover:text-secondary text-[15px]">Rent <svg class="ml-1 w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                                        </a> 

                                        <ul class="list-none bg-white drop-shadow-[0px_6px_10px_rgba(0,0,0,0.2)] rounded-[12px] flex flex-wrap flex-col w-[220px] absolute top-[120%] left-1/2 -translate-x-1/2 transition-all group-hover:top-[100%] invisible group-hover:visible opacity-0 group-hover:opacity-100">
                                            
                                            <li class="border-b border-dashed border-primary border-opacity-40 last:border-b-0 hover:border-solid transition-all">
                                                <a href="{{ route('rent.getApartmentsRent') }}" class="font-lora leading-[1.571] text-[14px] text-primary p-[10px] capitalize block transition-all hover:bg-primary hover:text-white text-center my-[-1px] text-[15px] hover:rounded-tl-[12px] hover:rounded-tr-[12px]">Apartment For Rent</a>
                                            </li>
                                            <li class="border-b border-dashed border-primary border-opacity-40 last:border-b-0 hover:border-solid transition-all">
                                                <a href="{{ route('rent.getVillasRent') }}" class="font-lora leading-[1.571] text-[14px] text-primary p-[10px] capitalize block transition-all hover:bg-primary hover:text-white text-center my-[-1px] text-[15px]">Villas For Rent</a>
                                            </li>
                                            <li class="border-b border-dashed border-primary border-opacity-40 last:border-b-0 hover:border-solid transition-all">
                                                <a href="{{ route('contact') }}" class="font-lora leading-[1.571] text-[14px] text-primary p-[10px] capitalize block transition-all hover:bg-primary hover:text-white text-center my-[-1px] text-[15px] hover:rounded-bl-[12px] hover:rounded-br-[12px]">Make an Enquiry</a>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                    <li class="mr-7 xl:mr-[40px] relative group py-[20px]">
                                        <a href="{{ route('sell') }}" class="transition-all hover:text-secondary text-[15px]">Sell</a>
                                    </li>

                                    <li class="mr-7 xl:mr-[40px] relative group py-[20px]">
                                        <a href="{{ route('insight') }}" class="transition-all hover:text-secondary text-[15px]">Insight</a>
                                    </li>
                                    
                                    <li class="mr-7 xl:mr-[40px] relative group py-[20px]">


                                        <a href="{{ route('project') }}" >
                                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex justify-between items-center md:p-0 transition-all hover:text-secondary text-[15px]">Projects <svg class="ml-1 w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                                        </a> 

                                        <ul class="list-none bg-white drop-shadow-[0px_6px_10px_rgba(0,0,0,0.2)] rounded-[12px] flex flex-wrap flex-col w-[220px] absolute top-[120%] left-1/2 -translate-x-1/2 transition-all group-hover:top-[100%] invisible group-hover:visible opacity-0 group-hover:opacity-100">
                                            @foreach($developers_for_nav as $dev)
                                            <li class="border-b border-dashed border-primary border-opacity-40 last:border-b-0 hover:border-solid transition-all">
                                                <a href="{{ route('projects.developer',$dev->slug ) }}" class="font-lora leading-[1.571] text-[14px] text-primary p-[10px] capitalize block transition-all hover:bg-primary hover:text-white text-center my-[-1px] text-[15px] {{ ($loop->first ? 'hover:rounded-tl-[12px] hover:rounded-tr-[12px]' : ($loop->last ? 'hover:rounded-bl-[12px] hover:rounded-br-[12px]' : null))}} ">{{$dev->developer_name}}</a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    
                                    <li class="mr-7 xl:mr-[40px] relative group py-[20px]">
                                        <a href="{{ route('blog') }}" class="transition-all hover:text-secondary text-[15px]">Blog</a>
                                    </li>
                                    <li class="mr-7 xl:mr-[40px] relative group py-[20px]">

                                        <a href="#" >
                                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex justify-between items-center md:p-0 transition-all hover:text-secondary text-[15px]">About Us <svg class="ml-1 w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                                        </a> 

                                        <ul class="list-none bg-white drop-shadow-[0px_6px_10px_rgba(0,0,0,0.2)] rounded-[12px] flex flex-wrap flex-col w-[220px] absolute top-[120%] left-1/2 -translate-x-1/2 transition-all group-hover:top-[100%] invisible group-hover:visible opacity-0 group-hover:opacity-100">
                                            <li class="border-b border-dashed border-primary border-opacity-40 last:border-b-0 hover:border-solid transition-all">
                                                <a href="{{ route('about.us') }}" class="font-lora leading-[1.571] text-[14px] text-primary p-[10px] capitalize block transition-all hover:bg-primary hover:text-white text-center my-[-1px] text-[15px] hover:rounded-tl-[12px] hover:rounded-tr-[12px]">About Us</a>
                                            </li>
                                            <li class="border-b border-dashed border-primary border-opacity-40 last:border-b-0 hover:border-solid transition-all">
                                                <a href="{{ route('contact') }}" class="font-lora leading-[1.571] text-[14px] text-primary p-[10px] capitalize block transition-all hover:bg-primary hover:text-white text-center my-[-1px] text-[15px]">Contact Us</a>
                                            </li>
                                            <li class="border-b border-dashed border-primary border-opacity-40 last:border-b-0 hover:border-solid transition-all">
                                                <a href="{{ route('property-management') }}" class="font-lora leading-[1.571] text-[14px] text-primary p-[10px] capitalize block transition-all hover:bg-primary hover:text-white text-center my-[-1px] text-[15px]">Property Management</a>
                                            </li>
                                            <li class="border-b border-dashed border-primary border-opacity-40 last:border-b-0 hover:border-solid transition-all">
                                                <a href="{{ route('careers') }}" class="font-lora leading-[1.571] text-[14px] text-primary p-[10px] capitalize block transition-all hover:bg-primary hover:text-white text-center my-[-1px] text-[15px] hover:rounded-bl-[12px] hover:rounded-br-[12px]">Join-Family</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="mr-7 xl:mr-[40px] relative group py-[20px]">
                                        <a href="{{ route('contact') }}" class="transition-all hover:text-secondary text-[15px]">Contact</a>
                                    </li>
                                     <li class="mr-7 xl:mr-[40px] relative group py-[20px] menu-traslate-header">

                                        <!-- <a href="{{ route('buy') }}" class="transition-all hover:text-secondary">Buy </a>  -->
                                        <a href="#" >
                                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex justify-between items-center md:p-0 transition-all hover:text-secondary text-[15px] langlink">Language <svg class="ml-1 w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                                        </a> 

                                        <ul class="list-none bg-white drop-shadow-[0px_6px_10px_rgba(0,0,0,0.2)] rounded-[12px] flex flex-wrap flex-col w-[180px] absolute top-[120%] left-1/2 -translate-x-1/2 transition-all group-hover:top-[100%] invisible group-hover:visible opacity-0 group-hover:opacity-100 ">
                                            
                                            <li class="border-b border-dashed border-primary border-opacity-40 last:border-b-0 hover:border-solid transition-all">
                                                <a href="#googtrans/ar" class="font-lora leading-[1.571] text-[14px] text-primary p-[10px] capitalize block transition-all hover:bg-primary hover:text-white text-center my-[-1px] text-[15px] hover:rounded-tl-[12px] hover:rounded-tr-[12px]" translate="no">AR</a>
                                            </li>
                                            <li class="border-b border-dashed border-primary border-opacity-40 last:border-b-0 hover:border-solid transition-all">
                                                <a href="#googtrans/en" class="font-lora leading-[1.571] text-[14px] text-primary p-[10px] capitalize block transition-all hover:bg-primary hover:text-white text-center my-[-1px] text-[15px] hover:rounded-bl-[12px] hover:rounded-br-[12px]" translate="no">EN</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="flex flex-wrap items-center" id="navright" >
                                    <li class="ml-2 sm:ml-5 lg:hidden">
                                        <a href="#offcanvas-mobile-menu" class="offcanvas-toggle flex text-[#016450] hover:text-secondary">
                                            <svg width="24" height="24" class="fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M0 96c0-17.67 14.33-32 32-32h384c17.7 0 32 14.33 32 32 0 17.7-14.3 32-32 32H32c-17.67 0-32-14.3-32-32zm0 160c0-17.7 14.33-32 32-32h384c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.67 0-32-14.3-32-32zm416 192H32c-17.67 0-32-14.3-32-32s14.33-32 32-32h384c17.7 0 32 14.3 32 32s-14.3 32-32 32z"/></svg>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>

    <div class="main-modal fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster" style="background: rgba(0,0,0,.7); display: none !important;">
        <div class="border shadow-lg modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
            <div class="modal-content py-4 text-left px-6">

                <div class="flex justify-between items-center pb-1 mb-3">
                    <p class="text-2xl font-bold">Enquire Now</p>
                    
                    <div class="modal-close cursor-pointer z-50">
                        <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"><path d="m14.53 4.53-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"/></svg>
                    </div>
                </div>
                <hr>
                <div class="flex justify-between items-center pb-2 mt-2 mb-2">
                    <a href="tel:{{ getSettings('contact_no_1') }}" class="text-sm md:text-md md:font-bold hover:text-secondary"><i class="fa fa-phone"></i> {{ getSettings('contact_no_1') }}</a>
                    <a href="mailto:{{ getSettings('website_email_1') }}" class="text-sm md:text-md md:font-bold hover:text-secondary"><i class="fa fa-envelope"></i> {{ getSettings('website_email_1') }}</a>
                </div>
                <hr>
                
                <form method="post"  action="{{ route('msend.message') }}">
                    @csrf
                    <div class="my-5">                    
                        <div class="col-span-12 md:col-span-6 mt-2">
                            <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " type="text" placeholder="Full Name" name="name" required>
                        </div>

                        <div class="col-span-12 md:col-span-6 mt-2">
                            <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " type="text" placeholder="Phone Number" name="phone" required>
                        </div>

                        <div class="col-span-12 md:col-span-6 mt-2">
                            <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " type="email" placeholder="Email Address" name="email" required>
                        </div>

                        <div class="col-span-12 mt-2">
                            <textarea class="h-[196px] font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] resize-none" name="message" id="textarea" cols="30" rows="10" placeholder="Message" required></textarea>
                        </div>
                    </div>
                    <div class="flex justify-end pt-2">
                        <button
                            class="focus:outline-none modal-close px-4 bg-gray-400 p-3 rounded-lg text-black hover:bg-gray-300">Cancel</button>
                        <button class="before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-4 py p-3 ml-3 capitalize font-medium text-white text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-primary after:rounded-md after:transition-all">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <div class="main-modal1 fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster" style="background: rgba(0,0,0,.7); display: none !important;">
        <div class="border shadow-lg modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
            <div class="modal-content py-4 text-left px-6">
                <!--Title-->
                <div class="flex justify-between items-center pb-1 mb-3">
                    <p class="text-2xl font-bold"></p>
                    
                    <div class="modal-close1 cursor-pointer z-50">
                        <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"><path d="m14.53 4.53-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"/></svg>
                    </div>
                </div>
                <hr>
                
                <!--Body-->
                
                <div class="my-5 text-center">
                    <div class="m-[2rem]">
                        <img class="center rounded-full border-2 border-[#294159]" src="{{config('fgproperties.file_path').getSettings('site_logo_footer')}}" loading="lazy" style="width:100%;" alt="User Logo">
                        <!-- <img class="center rounded-full border-2 border-[#294159]" src="{{URL('')}}/{{config('fgproperties.file_path').getSettings('site_logo_footer')}}" loading="lazy" style="width:100%;" alt="User Logo"> -->
                    </div>
                    
                    <p class="text-sm md:text-2xl center md:font-bold hover:text-secondary">{{ getSettings('agent_name') }}</p>
                    <p class="text-sm md:text-md center md:font-bold hover:text-secondary">{{ getSettings('agent_position') }}</p>

                    <div class="flex justify-between items-center pb-2 mt-2 mb-2">
                        <a href="tel:{{ getSettings('agent_number') }}" class="text-sm md:text-md md:font-bold hover:text-secondary"><i class="fa fa-phone"></i> {{ getSettings('agent_number') }}</a>
                        <a href="mailto:{{ getSettings('agent_email') }}" class="text-sm md:text-md md:font-bold hover:text-secondary"><i class="fa fa-envelope"></i> {{ getSettings('agent_email') }}</a>
                    </div>
                    <hr>
                </div>
                <!--Footer-->
            </div>
        </div>
    </div>

        <!-- offcanvas-overlay start -->
        <div class="offcanvas-overlay hidden fixed inset-0 bg-black opacity-50 z-50"></div>
        <!-- offcanvas-overlay end -->
        <!-- offcanvas-mobile-menu start -->
        <div id="offcanvas-mobile-menu" class="offcanvas left-0 transform -translate-x-full fixed font-normal text-sm top-0 z-50 h-screen xs:w-[300px] lg:w-[380px] transition-all ease-in-out duration-300 bg-white">

            <div class="py-12 pr-5 h-[100vh] overflow-y-auto">
                <!-- close button start -->
                <button class="offcanvas-close text-primary text-[25px] w-10 h-10 absolute right-0 top-0 z-[1]" aria-label="offcanvas">x</button>
                <!-- close button end -->

                <!-- offcanvas-menu start -->

                <nav class="offcanvas-menu mr-[20px]">
                    <ul>
                        
                       <!--  <li class="relative block border-b-primary border-b">
                            <a href="#" target="_blank" class="block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5 text-[15px]">
                                <img src="{{url('')}}/assets/images/arabic.png" style="width: 18px; display: inline; margin-top: -8px;"/>  Arabic
                            </a>
                        </li> -->

                        <li class="relative block border-b-primary border-b menu-traslate-header">
                            <a href="#" class="block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5 text-[15px]"><img src="{{url('')}}/assets/images/arabic.png" style="width: 18px; display: inline; margin-top: -8px;"/>Arabic</a>
                            <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100 capitalize">
                                <li><a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary text-[15px]" href="#googtrans/ar"><img src="{{url('')}}/assets/images/arabic.png" style="width: 18px; display: inline; margin-top: -8px;"/>Arabic</a></li>
                                <li><a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary text-[15px]" href="#googtrans/en"><img src="{{url('')}}/assets/images/english.png" style="width: 18px; display: inline; margin-top: -8px;"/>English</a></li>
                            </ul>
                        </li>
                        <hr>
                        <!-- <li class="relative block border-b-primary border-b">
                            <a href="{{ route('home') }}" class="block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5">Home</a>
                        </li> -->
                        <!-- <li class="relative block border-b-primary border-b">
                            <a href="{{ route('buy') }}" class="block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5">Buy</a>
                        </li> -->

                        <li class="relative block border-b-primary border-b first:border-t first:border-t-primary">
                            <a href="{{ route('buy') }}" class="block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5 text-[15px]">Buy</a>
                            <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100 capitalize">
                                <li><a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary text-[15px]" href="{{ route('projects.getApartments') }}">Apartments for Sale</a></li>
                                <li><a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary text-[15px]" href="{{ route('projects.getVillas') }}">Villas for Sale</a></li>
                                <li><a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary text-[15px]" href="{{ route('contact') }}">Make an Enquiry</a></li>
                            </ul>
                        </li>

                        <!-- <li class="relative block border-b-primary border-b">
                            <a href="{{ route('rent') }}" class="block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5">Rent</a>
                        </li> -->

                        <li class="relative block border-b-primary border-b first:border-t first:border-t-primary">
                            <a href="{{ route('rent') }}" class="block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5 text-[15px]">Rent</a>
                            <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100 capitalize">
                                <li><a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary text-[15px]" href="{{ route('rent.getApartmentsRent') }}">Appartments for Rent</a></li>
                                <li><a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary text-[15px]" href="{{ route('rent.getVillasRent') }}">Villas for Rent</a></li>
                                <li><a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary text-[15px]" href="{{ route('contact') }}">Make an Enquiry</a></li>
                            </ul>
                        </li>

                        <li class="relative block border-b-primary border-b">
                            <a href="{{ route('sell') }}" class="block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5 text-[15px]">Sell</a>                            
                        </li>

                        <li class="relative block border-b-primary border-b">
                            <a href="{{ route('insight') }}" class="block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5 text-[15px]">Insight</a>                            
                        </li>

                        <!-- <li class="relative block border-b-primary border-b">
                            <a href="{{ route('developer') }}" class="block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5 text-[15px]">Developers</a>
                            
                        </li> -->
                        <!-- <li class="relative block border-b-primary border-b">
                            <a href="{{ route('project') }}" class="block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5 text-[15px]">Projects</a>                            
                        </li> -->

                        <li class="relative block border-b-primary border-b first:border-t first:border-t-primary">
                            <a href="{{ route('project') }}" class="block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5 text-[15px]">Projects</a>
                            <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100 capitalize">
                                @foreach($developers_for_nav as $dev)
                                <li><a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary text-[15px]" href="{{ route('projects.developer',$dev->slug ) }}">{{ $dev->developer_name  }}</a></li>
                                @endforeach
                            </ul>
                        </li>

                        <li class="relative block border-b-primary border-b">
                            <a href="{{ route('blog') }}" class="block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5 text-[15px]">Blog</a>
                        </li>




                        <li class="relative block border-b-primary border-b first:border-t first:border-t-primary">
                            <a href="{{ route('rent') }}" class="block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5 text-[15px]">About Us</a>
                            <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100 capitalize">
                                <li><a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary text-[15px]" href="{{ route('about.us') }}">About Us</a></li>
                                <li><a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary text-[15px]" href="{{ route('contact') }}">Contact Us</a></li>
                                <li><a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary text-[15px]" href="{{ route('property-management') }}">Property Management</a></li>
                                <li><a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary text-[15px]" href="{{ route('careers') }}">Join-Family</a></li>
                            </ul>
                        </li>

                        <!-- <li class="relative block border-b-primary border-b first:border-t first:border-t-primary">
                            <a href="#" class="block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5 text-[15px]">Services</a>
                            <ul class="offcanvas-submenu static top-auto hidden w-full visible opacity-100 capitalize">
                                <li><a class="text-sm py-2 px-[30px] text-black font-light block transition-all hover:text-secondary" href="{{ route('careers') }}">Careers</a></li>
                            </ul>
                        </li> -->

                        <li class="relative block border-b-primary border-b">
                            <a href="{{ route('contact') }}" class="block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5 text-[15px]">Contact</a>
                            
                        </li>
                    </ul>
                </nav>
                <!-- offcanvas-menu end -->

                <!-- <div class="px-5 flex flex-wrap mt-3 sm:hidden">
                    <a href="#" class="before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[20px] py-[15px] capitalize font-medium text-white text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-primary after:rounded-md after:transition-all">Add
                        Property</a>
                </div> -->



            </div>
        </div>
        @include('cookieConsent::index')
    <script type="text/javascript">
        const modal1 = document.querySelector('.main-modal1');
        const closeButton1 = document.querySelectorAll('.modal-close1');

        const modalClose1 = () => {

            modal1.classList.remove('fadeIn');
            modal1.classList.add('fadeOut');
            setTimeout(() => {
                modal1.style.display = 'none';
            });
        }

        const openModal1 = () => {
            modal1.classList.remove('fadeOut');
            modal1.classList.add('fadeIn');
            modal1.style.display = 'flex';
        }

        for (let h = 0; h < closeButton1.length; h++) {

            const elements = closeButton1[h];

            elements.onclick = (a) => modalClose1();

            modal1.style.display = 'none';
        }
        const modal = document.querySelector('.main-modal');
        const closeButton = document.querySelectorAll('.modal-close');

        const modalClose = () => {

            modal.classList.remove('fadeIn');
            modal.classList.add('fadeOut');
            setTimeout(() => {
                modal.style.display = 'none';
            });
        }

        const openModal = () => {
            modal.classList.remove('fadeOut');
            modal.classList.add('fadeIn');
            modal.style.display = 'flex';
        }

        for (let i = 0; i < closeButton.length; i++) {

            const elements = closeButton[i];

            elements.onclick = (e) => modalClose();

            modal.style.display = 'none';

            window.onclick = function (event) {
                if (event.target == modal) modalClose();
                else if (event.target == modal1) modalClose1();
            }
        }
    </script>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction23() {
  // document.getElementById("myDropdown").classList.toggle("show");
  if(document.getElementById("myDropdown").style.display == 'block'){
    document.getElementById("myDropdown").style.display = 'none';
  }
  else{
    document.getElementById("myDropdown").style.display = 'block';
  }
}

$(document).on('mousedown', function(){
    let l = document.getElementById("myDropdown");
    if(l != null){
        if(document.getElementById("myDropdown").style.display == 'block'){
         document.getElementById("myDropdown").style.display = 'none';
        }
    }
    
    // document.getElementById("myDropdown").style.display = 'none';
})

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
  if(myDropdown != null){
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
    }
    
  }
}
</script>