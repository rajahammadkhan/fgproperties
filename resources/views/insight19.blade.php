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
                                Dubai Property Market Performance 2022  
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
        <!-- Hero section end -->

        <!-- Popular Area start -->
        <section class="popular-properties py-[80px] lg:py-[120px]">
            <div class="container">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between ">
                            <div>
                                <h2 class="font-lora text-primary text-[25px] sm:text-[25px] capitalize font-medium">
                                    <b>Dubai property market summary 2022 (YTD)</b><span class="text-secondary">.</span></h2>
                            </div>
                            <div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="mt-5 grid md:grid-cols-4 w-auto gap-4 sm:grid-cols-none ">
                    <div class="swiper-slide text-center area">
                        <div class="relative group" style="border-radius: 20px; background-color: white; box-shadow: 5px 5px 5px 5px #D3D3D3;">
                            <div class="text-center" style="padding: 2rem;">
                                <p style="font-size: 45px; color: rgb(11, 44, 61);">51</p>
                                <h2 style="font-size: 25px;">Projects Delivered</h2>                                
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide text-center area">
                        <div class="relative group" style="border-radius: 20px; background-color: white; box-shadow: 5px 5px 5px 5px #D3D3D3;">
                            <div class="text-center" style="padding: 2rem;">
                                <p style="font-size: 45px; color: rgb(11, 44, 61);">51</p>
                                <h2 style="font-size: 25px;">Projects Delivered</h2>                                
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide text-center area">
                        <div class="relative group" style="border-radius: 20px; background-color: white; box-shadow: 5px 5px 5px 5px #D3D3D3;">
                            <div class="text-center" style="padding: 2rem;">
                                <p style="font-size: 45px; color: rgb(11, 44, 61);">51</p>
                                <h2 style="font-size: 25px;">Projects Delivered</h2>                                
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide text-center area">
                        <div class="relative group" style="border-radius: 20px; background-color: white; box-shadow: 5px 5px 5px 5px #D3D3D3;">
                            <div class="text-center" style="padding: 2rem;">
                                <p style="font-size: 45px; color: rgb(11, 44, 61);">51</p>
                                <h2 style="font-size: 25px;">Projects Delivered</h2>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Popular Area end -->
@endsection

@section('bottom-mid-scripts')

@endsection

@section('bottom-bot-scripts')

@endsection
