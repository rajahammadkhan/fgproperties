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
        height: 22rem;
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
        height: 8rem;
    }
    #bannerimages .absolute{
        top: 70%;
    }
    #mainhead{
        color: rgb(255, 255, 255);
    }
}
</style>
@endsection

@section('content')
        <section class="bg-no-repeat bg-center bg-cover bg-[#FFF6F0] lg:h-[350px] flex flex-wrap items-center relative before:absolute before:inset-0 before:content-[''] before:bg-[#000000] before:opacity-[50%]" style="background-image: url('{{url('')}}/assets/images/breadcrumb/sale.png');" id="bannerimages">
            <div class="container">
                <div class="grid grid-cols-1 ">
                    <div class="col-span-12 ">
                        <div class="max-w-[700px]  mx-auto text-center text-white relative z-[1]">
                            <!-- <div class="mb-5"><span class="text-base block sm:text-[35px]">Sale</span></div> -->
                            <h1 class="font-lora text-[30px] sm:text-[33px] md:text-[33px] lg:text-[33px] leading-tight font-medium md:mt-[-0rem]">
                                Developers  
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

            <div class="container mt-[2rem]">
                        <div class="mt-5 grid md:grid-cols-3 w-auto gap-4 sm:grid-cols-none">
                    @foreach($developers as $dev)
                    <div class="swiper-slide text-center area">
                        <div class="relative group">
                            <a href="{{ route('projects.developer',$dev->slug ) }}" class="block group-hover:shadow-[0_10px_15px_0px_rgba(0,0,0,0.1)] transition-all duration-300">
                                 <figure><img src="{{config('fgproperties.file_path').$dev->imagesmenu}}" alt=""></figure>
                                 <div class="bg-[rgb(255,253,252,0.9)] rounded-[6px] px-[5px] py-[5px] absolute bottom-[15px] left-[100px] mb-25 right-[100px]">
                                        <span class="font-lora font-normal text-[23px] text-primary ">{{$dev->developer_name}}</span>
                                        <p class="font-light text-[16px] capitalize text-secondary "><b>
                                             @php
                                                $dev_name = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '_', $dev->developer_name)));
                                                @endphp

                                                @if($$dev_name == 1)
                                                                {{ $$dev_name }} Project
                                                                
                                                                @else
                                                                {{ $$dev_name }} Projects
                                                            @endif
                                        </b></p>
                                 </div>
                            </a>
                        </div>
                    </div>
                    @endforeach

                    <!-- <div class="swiper-slide text-center area">
                        <div class="relative group">
                            <a href="agency.html" class="block group-hover:shadow-[0_10px_15px_0px_rgba(0,0,0,0.1)] transition-all duration-300">
                                <figure><img src="{{url('')}}/assets/images/developer/arada.jpg" alt=""></figure>
                                <div class="bg-[rgb(255,253,252,0.9)] rounded-[6px] px-[5px] py-[5px] absolute bottom-[15px] left-[100px] mb-25 right-[100px]">
                                        <span class="font-lora font-normal text-[25px] text-primary ">Arada</span>
                                        <p class="font-light text-[18px] capitalize text-secondary "><b>55 Projects</b></p>
                                 </div>
                            </a>
                        </div>
                    </div>

                    <div class="swiper-slide text-center area">
                        <div class="relative group">
                            <a href="agency.html" class="block group-hover:shadow-[0_10px_15px_0px_rgba(0,0,0,0.1)] transition-all duration-300">
                                <figure><img src="{{url('')}}/assets/images/developer/dubai_property.jpeg" alt=""></figure>
                                <div class="bg-[rgb(255,253,252,0.9)] rounded-[6px] px-[5px] py-[5px] absolute bottom-[15px] left-[100px] mb-25 right-[100px]">
                                        <span class="font-lora font-normal text-[25px] text-primary ">Dubai Properties</span>
                                        <p class="font-light text-[18px] capitalize text-secondary "><b>75 Projects</b></p>
                                 </div>
                            </a>
                        </div>
                    </div>

                    <div class="swiper-slide text-center area">
                        <div class="relative group">
                            <a href="agency.html" class="block group-hover:shadow-[0_10px_15px_0px_rgba(0,0,0,0.1)] transition-all duration-300">
                                <figure><img src="{{url('')}}/assets/images/developer/emaar.jpg" alt=""></figure>
                                <div class="bg-[rgb(255,253,252,0.9)] rounded-[6px] px-[5px] py-[5px] absolute bottom-[15px] left-[100px] mb-25 right-[100px]">
                                        <span class="font-lora font-normal text-[25px] text-primary ">Emaar</span>
                                        <p class="font-light text-[18px] capitalize text-secondary "><b>85 Projects</b></p>
                                 </div>
                            </a>
                        </div>
                    </div>

                    <div class="swiper-slide text-center area">
                        <div class="relative group">
                            <a href="agency.html" class="block group-hover:shadow-[0_10px_15px_0px_rgba(0,0,0,0.1)] transition-all duration-300">
                                <figure><img src="{{url('')}}/assets/images/developer/Nakheel.jpg" alt=""></figure>
                                <div class="bg-[rgb(255,253,252,0.9)] rounded-[6px] px-[5px] py-[5px] absolute bottom-[15px] left-[100px] mb-25 right-[100px]">
                                        <span class="font-lora font-normal text-[25px] text-primary ">Nakheel</span>
                                        <p class="font-light text-[18px] capitalize text-secondary "><b>15 Projects</b></p>
                                 </div>
                            </a>
                        </div>
                    </div>

                    <div class="swiper-slide text-center area">
                        <div class="relative group">
                            <a href="agency.html" class="block group-hover:shadow-[0_10px_15px_0px_rgba(0,0,0,0.1)] transition-all duration-300">
                                <figure><img src="{{url('')}}/assets/images/developer/sobha.jpg" alt=""></figure>
                                <div class="bg-[rgb(255,253,252,0.9)] rounded-[6px] px-[5px] py-[5px] absolute bottom-[15px] left-[100px] mb-25 right-[100px]">
                                        <span class="font-lora font-normal text-[25px] text-primary ">Sobha</span>
                                        <p class="font-light text-[18px] capitalize text-secondary "><b>35 Projects</b></p>
                                 </div>
                            </a>
                        </div>
                    </div> -->
                </div>
            </div>

        <!-- Hero section end -->
@endsection

@section('bottom-mid-scripts')

@endsection

@section('bottom-bot-scripts')

@endsection
