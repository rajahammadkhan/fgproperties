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
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
@endsection



@section('content')        

        <!-- Hero section start -->
        <section class="bg-no-repeat bg-left-bottom xl:bg-right-bottom bg-contain xl:bg-cover bg-[#E9F1FF] h-[450px] lg:h-[500px] xl:h-[550px] flex flex-wrap items-center relative" >
            <div class="container">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="max-w-[420px] text-center mx-auto my-[-150px]">
                            <div class="mb-5"><span class="text-base text-secondary block sm:text-[25px]">About us</span></div>
                            <h1 class="font-lora text-primary text-[36px] sm:text-[50px] md:text-[68px] lg:text-[50px] leading-tight xl:text-2xl title font-medium w-[700px] -ml-[130px]" style="font-size: 68px; line-height: 1.1764;">
                                About FG Properties<span class="text-secondary">.</span>
                            </h1>
                            <!-- <p class="text-base mt-5">Huge number of propreties availabe here for buy and sell</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Hero section end -->

                <!-- About section start -->
        <section class="relative z-[1] mt-[80px] xl:mt-0">
            <div class="container">
                <div class="items-center">
                    <div class="lg:mb-[60px] mb-10 -mt-[150px]">
                        <img class="mx-auto" src="{{url('')}}/assets/images/about/about5.png" width="597" height="716" alt="about image" style="width:1197px; height: 716;">
                    </div>
                    <div class="max-w-[830px] mx-auto text-center">
                        <span class="text-secondary text-tiny inline-block mb-2">Since 1975</span>
                        <h2 class="font-lora text-primary text-[24px] sm:text-[30px] leading-[1.3888] xl:text-[35px] capitalize mb-[30px] lg:mb-[50px] font-medium"> We Provide Right Choice of Properties that You need and have great opportunity to choose from thousands of Collection<span class="text-secondary">.</span></h2>
                        <div class="flex justify-center">
                            <ul class="flex flex-wrap list-none" >
                                <li class="block" >
                                    <span class="font-lora text-secondary text-xl" style="font-size: 36px; line-height: 1.277;"><span class="counter-up" >20</span> <span>k+</span></span>
                                    <p>Properties</p>
                                </li>
                                <li class="block pl-[30px] sm:pl-[40px] md:pl-[60px]">
                                    <span class="font-lora text-secondary text-xl" style="font-size: 36px; line-height: 1.277;"><span class="counter-up">12</span> <span>k+</span></span>
                                    <p>Customers</p>
                                </li>
                                <li class="block pl-[30px] sm:pl-[40px] md:pl-[60px]">
                                    <span class="font-lora text-secondary text-xl" style="font-size: 36px; line-height: 1.277;"><span class="counter-up">160</span>
                                    <span>+</span></span>
                                    <p>Awards Win</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About section end -->

        <!-- About Us Sectin Start -->
        <section class="about-section pt-[80px] lg:pt-[120px]">
            <div class="container">
                <div class="grid grid-cols-12 gap-6 items-center">
                    <div class="col-span-12 lg:col-span-6">
                        <span class="text-secondary text-tiny inline-block mb-2">Why Choose us</span>
                        <h2 class="font-lora text-primary text-[24px] sm:text-[30px] leading-[1.277] xl:text-xl capitalize mb-5 lg:mb-16 font-medium max-w-[500px]" style="font-size: 36px; line-height: 1.277;">We Provide Latest Properties for our valuable Clients.<span class="text-secondary">.</span></h2>
                        <div class="scene" data-relative-input="true">
                            <img data-depth="0.1" src="{{url('')}}/assets/images/about/about7.png" class="" loading="lazy" width="729" height="663" alt="about Image">
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6 lg:pl-[70px]">
                        <p class="max-w-[448px] ">
                        	You can find out plenty of options for properties here with us. A large number of
													possessions are available for purchase, sale, or rental. You may also locate co-
													living properties here. So, you have a lot of options to select from and save a lot
													of money. </p>

                        <div class="-mb-10 mt-12 xl:mt-[70px] 2xl:mt-[100px]">
                            <div class="flex flex-wrap mb-5 lg:mb-10">
                                <img src="{{url('')}}/assets/images/icon/doller.png" class="self-start mr-5" loading="lazy" width="50" height="50" alt="about Image">
                                <div class="flex-1">
                                    <h3 class="font-lora text-primary text-[22px] xl:text-lg capitalize mb-2" style="font-size: 28px;">Cost-effective:</h3>
                                    <p class="max-w-[315px]">Because most properties are reasonable and cost-effective, you have the
                                    opportunity to find the greatest one.</p>
                                </div>

                            </div>
                            <div class="flex flex-wrap mb-5 lg:mb-10">
                                <img src="{{url('')}}/assets/images/icon/location.png" class="self-start mr-5" loading="lazy" width="50" height="50" alt="about Image">
                                <div class="flex-1">
                                    <h3 class="font-lora text-primary text-[22px] xl:text-lg capitalize mb-2" style="font-size: 28px;">Privileged location:</h3>
                                    <p class="max-w-[315px]">Location is prime and up to the mark to offer all the basic facilities and needs to live a quality life.</p>
                                </div>

                            </div>
                            <div class="flex flex-wrap mb-5 lg:mb-10">
                                <img src="{{url('')}}/assets/images/icon/trusted.png" class="self-start mr-5" loading="lazy" width="50" height="50" alt="about Image">
                                <div class="flex-1">
                                    <h3 class="font-lora text-primary text-[22px] xl:text-lg capitalize mb-2" style="font-size: 28px;">
                                        Reliable and safe:</h3>
                                    <p class="max-w-[315px]">We manage to make our reputation over decade in real estate market quite Reliable and secure. This is truly a valuable asset for us.</p>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- About Us Sectin End -->

        <!-- service Section Start-->
        <section class="py-[80px] lg:py-[120px]">
            <div class="container">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="mb-[30px] lg:mb-[60px] text-center">
                            <span class="text-secondary text-tiny inline-block mb-2">Our Services</span>
                            <h2 class="font-lora text-primary text-[24px] sm:text-[30px] xl:text-xl capitalize font-medium" style="font-size: 36px; line-height: 1.277;">
                                Services that we Provide<span class="text-secondary">.</span></h2>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-[30px]">
                    <div class="relative group">
                        <a href="properties-details.html" class="block">
                            <img src="{{url('')}}/assets/images/service/service1.png" class="w-full h-full block mx-auto rounded-[6px_6px_0px_0px]" loading="lazy" width="270" height="290" alt="Sale Property">
                            <div class="drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] hover:drop-shadow-[0px_8px_20px_rgba(0,0,0,0.15)] bg-[#FFFDFC] rounded-[0px_0px_6px_6px] px-[25px] py-[25px]">
                                <h3 class="font-lora font-normal text-[24px] xl:text-lg text-primary group-hover:text-secondary transition-all mb-[5px]" style="font-size: 28px;">Sale Property<span class="text-secondary group-hover:text-primary">.</span> </h3>
                                <p class="font-light text-tiny">Provide prorpery Sale options opportunity to find the best </p>
                            </div>
                        </a>
                    </div>
                    <div class="relative group">
                        <a href="properties-details.html" class="block">
                            <img src="{{url('')}}/assets/images/service/service2.png" class="w-full h-full block mx-auto rounded-[6px_6px_0px_0px]" loading="lazy" width="270" height="290" alt="Buy Property">
                            <div class="drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] hover:drop-shadow-[0px_8px_20px_rgba(0,0,0,0.15)] bg-[#FFFDFC] rounded-[0px_0px_6px_6px] px-[25px] py-[25px]">
                                <h3 class="font-lora font-normal text-[24px] xl:text-lg text-primary group-hover:text-secondary transition-all mb-[5px]" style="font-size: 28px;">Buy Property<span class="text-secondary group-hover:text-primary">.</span> </h3>
                                <p class="font-light text-tiny">Provide prorpery Sale options opportunity to find the best </p>
                            </div>
                        </a>
                    </div>
                    <div class="relative group">
                        <a href="properties-details.html" class="block">
                            <img src="{{url('')}}/assets/images/service/service3.png" class="w-full h-full block mx-auto rounded-[6px_6px_0px_0px]" loading="lazy" width="270" height="290" alt="Rent Property">
                            <div class="drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] hover:drop-shadow-[0px_8px_20px_rgba(0,0,0,0.15)] bg-[#FFFDFC] rounded-[0px_0px_6px_6px] px-[25px] py-[25px]">
                                <h3 class="font-lora font-normal text-[24px] xl:text-lg text-primary group-hover:text-secondary transition-all mb-[5px]" style="font-size: 28px;">Rent Property<span class="text-secondary group-hover:text-primary">.</span> </h3>
                                <p class="font-light text-tiny">Provide prorpery Sale options opportunity to find the best </p>
                            </div>
                        </a>
                    </div>
                    <div class="relative group">
                        <a href="properties-details.html" class="block">
                            <img src="{{url('')}}/assets/images/service/service4.png" class="w-full h-full block mx-auto rounded-[6px_6px_0px_0px]" loading="lazy" width="270" height="290" alt="Mortgage">
                            <div class="drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] hover:drop-shadow-[0px_8px_20px_rgba(0,0,0,0.15)] bg-[#FFFDFC] rounded-[0px_0px_6px_6px] px-[25px] py-[25px]">
                                <h3 class="font-lora font-normal text-[24px] xl:text-lg text-primary group-hover:text-secondary transition-all mb-[5px]" style="font-size: 28px;">Mortgage<span class="text-secondary group-hover:text-primary">.</span> </h3>
                                <p class="font-light text-tiny">Provide prorpery Sale options opportunity to find the best </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- service Section End-->

        <section class="brand-section pt-[80px] lg:pt-[0px]">
            <div class="container">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="mb-[60px] text-center">
                            <span class="text-secondary text-tiny inline-block mb-2" style="font-size: 20px; color: #D2AC47;">Our Developers</span>
                            <h2 class="font-lora text-primary text-[24px] sm:text-[40px] capitalize font-medium">
                            <b> Reliable Developers</b><span class="text-secondary">.</span></h2>
                        </div>
                    </div>
                    <div class="col-span-12">
                        <div class="brand-slider">
                            <div class="swiper">
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

@endsection

@section('bottom-mid-scripts')

@endsection

@section('bottom-bot-scripts')


@endsection
