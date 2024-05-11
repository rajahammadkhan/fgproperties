

<!-- <header id="sticky-header" class="relative bg-[#ECFAF7] lg:py-[30px] z-[25] secondary-sticky"> -->
<header id="" class="relative bg-[rgb(236,250,247,0.7)] lg:py-[7px] py-[12px] z-[25] secondary-sticky" >
    <div class="font-lora text-black py-[8px] " >
            <div class="container" >
                <div class="grid items-center grid-cols-12 gap-x-[30px]">
                    <div class="col-span-12 sm:col-span-2 text-center sm:text-left"id="phone">
                        <span style="font-family: Karla, sans-serif; font-size: 19px;" >
                            <a href="tel:{{ getSettings('contact_no_1') }}"><i class="fa fa-phone" style="width: 15px; display: inline; "></i> Contact </a>
                        </span>
                    </div>
                    <div class="col-span-12 sm:col-span-2 text-center sm:text-left" id="email" >
                        <span style="font-size: 19px; font-family: Karla, sans-serif;"><a title="mail-to" href="mailto:{{ getSettings('website_email_1') }}"><i class="fa fa-envelope" style="width: 15px; display: inline; "></i> Get in Touch</a></span>
                    </div>
                    <div class="col-span-12 sm:col-span-2 text-center sm:text-left" style="font-family: Karla, sans-serif; font-size: 19px; " id="whatsapp" >
                        <a href="https://wa.me/{{ getSettings('agent_number') }}" target="_blank">
                            <img src="https://img.icons8.com/color/48/whatsapp--v1.png" style="width: 22px; display: inline;"/> WhatsApp
                        </a>
                    </div>
                    <div class="col-span-12 sm:col-span-4 text-center sm:text-left mt-[-1.5rem] mb-[-2rem] md:ml-[19.5rem]" id="arabic">
                        <!-- <span class="inline-block align-baseline">
                             <div class="md:mt-[-20px]" id="google_translate_element"  style="display: flex;"></div> 

                            <a href=""><p class="md:mt-[-40px]" style="font-family: Karla, sans-serif; font-size: 20px; font-weight: 500;">
                                 <img src="{{url('')}}/assets/images/arabic.png" style="width:10px"> <span>Arabic</span></p></a>
                        </span>--> 
                        <a href="#" target="_blank" style="font-family: Karla, sans-serif; font-size: 20px; font-weight: 500;">
                            <img src="{{url('')}}/assets/images/arabic.png" style="width: 18px; display: inline; margin-top: -8px;"/>  Arabic
                        </a>
                        
                    </div>
                    <div class="col-span-12 sm:col-span-2 text-center " style="font-family: Karla, sans-serif; font-size: 19px;" id="iconfa">
                        <ul class="grid grid-cols-4 grid-flow-col gap-2 f-r" style="float: right;">
                            <li class="mx-1"><a href="{{ getSettings('facebook_page') }}"><i class="fa-brands fa-facebook"></i></a></li>
                            <li  class="mx-1"><a href="{{ getSettings('social_instagram') }}"><i class="fa-brands fa-instagram"></i></a></li>
                            <li class="mx-1"><a href="{{ getSettings('social_youtube') }}"><i class="fa-brands fa-youtube"></i></a></li>
                            <li class="mx-1"><a href="{{ getSettings('social_linkedin') }}"><i class="fa-brands fa-linkedin-in"></i></a></li>
                          </ul>
                    </div>
                </div>
            </div>
        </div>
            <div class="container">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="flex flex-wrap items-center justify-between">
                            <a href="{{ route('home') }}" class="block">
                                <img class="w-full h-full" src="{{config('fgproperties.file_path').getSettings('site_logo_header')}}" loading="lazy" style="width: 150px;" alt="Future Generation Properties">
                            </a>
                            <nav class="flex flex-wrap items-center">
                                <ul class="hidden lg:flex flex-wrap items-center font-lora text-[18px] xl:text-[20px] leading-none text-black" style="font-weight: 510;">

                                    <li class="mr-7 xl:mr-[40px] relative group py-[20px]">
                                        <a href="{{ route('home') }}" class="transition-all hover:text-secondary">Home</a>
                                    </li>
                                    <li class="mr-7 xl:mr-[40px] relative group py-[20px]">
                                        <a href="{{ route('buy') }}" class="transition-all hover:text-secondary">Buy</a>
                                    </li>
                                    <li class="mr-7 xl:mr-[40px] relative group py-[20px]">
                                        <a href="{{ route('rent') }}" class="transition-all hover:text-secondary">Rent</a>
                                    </li>
                                    <li class="mr-7 xl:mr-[40px] relative group py-[20px]">
                                        <a href="{{ route('sell') }}" class="transition-all hover:text-secondary">Sell</a>
                                    </li>
                                    <li class="mr-7 xl:mr-[40px] relative group py-[20px]">
                                        <a href="{{ route('developer') }}" class="transition-all hover:text-secondary">Developers</a>
                                    </li>
                                    <li class="mr-7 xl:mr-[40px] relative group py-[20px]">
                                        <a href="{{ route('project') }}" class="transition-all hover:text-secondary">Projects</a>
                                    </li>
                                    <li class="mr-7 xl:mr-[40px] relative group py-[20px]">
                                        <a href="{{ route('blog') }}" class="transition-all hover:text-secondary">Blog</a>
                                    </li>
                                    <li class="mr-7 xl:mr-[40px] relative group py-[20px]">
                                        <a href="{{ route('contactus') }}" class="transition-all hover:text-secondary">Contact</a>
                                    </li>
                                </ul>
                                <ul class="flex flex-wrap items-center">
                                    <!-- <li onclick="openModal1()" class="sm:mr-5 xl:mr-[20px] relative group"><a href="#">
                                            <img class="rounded-full border-2 border-[#294159] w-12" src="{{config('fgproperties.file_path').getSettings('site_logo_footer')}}" loading="lazy" style="" alt="User Logo">
                                        </a>
                                    </li> -->
                                    <li>
                                        <button onclick="openModal()"  class="before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[20px] py-[15px] capitalize font-medium text-white hidden sm:block text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-primary after:rounded-md after:transition-all">Enquiry</button>
                                    </li>
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
        <div
            class="border shadow-lg modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
            <div class="modal-content py-4 text-left px-6">
                <!--Title-->
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
                    <!--Body-->
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
                    <!--Footer-->
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
        <div
            class="border shadow-lg modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
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
                        <li class="relative block border-b-primary border-b">
                            <a href="{{ route('home') }}" class="block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5">Home</a>
                        </li>
                        <li class="relative block border-b-primary border-b">
                            <a href="{{ route('buy') }}" class="block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5">Buy</a>
                           

                        </li>
                        <li class="relative block border-b-primary border-b">
                            <a href="{{ route('rent') }}" class="block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5">Rent</a>
                            
                        </li>
                        <li class="relative block border-b-primary border-b">
                            <a href="{{ route('sell') }}" class="block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5">Sell</a>
                            
                        </li>
                        <li class="relative block border-b-primary border-b">
                            <a href="{{ route('developer') }}" class="block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5">Developers</a>
                            
                        </li>
                        <li class="relative block border-b-primary border-b">
                            <a href="{{ route('project') }}" class="block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5">Projects</a>
                            
                        </li>
                        <li class="relative block border-b-primary border-b">
                            <a href="{{ route('blog') }}" class="block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5">Blog</a>
                        </li>
                        <li class="relative block border-b-primary border-b">
                            <a href="{{ route('contactus') }}" class="block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5">Contact</a>
                            
                        </li>

                        <li class="relative block border-b-primary border-b">
                            <button onclick="openModal()" class="block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5">Enquiry</button>
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