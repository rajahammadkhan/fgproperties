@extends('layouts.master')

@section('description') {{$meta_description}} @endsection
@section('keywords') {{$keywords}} @endsection

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
        height: 15rem;
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
                            <h1 class="font-lora text-[1.8rem] text-[25px] sm:text-[25px] md:text-[25px] lg:text-[25px] leading-tight font-medium md:mt-[-0rem]">
                                {{$blog->name}}
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

        <!-- Popular Properties start -->
        <section class="popular-properties pt-[1rem] lg:pt-[1rem]">
            <div class="container">

                <div class="grid grid-cols-12 mb-[-30px] gap-[30px] xl:gap-[50px]">
                    <div class="col-span-12 md:col-span-66 lg:col-span-66 mb-[30px]">
                        <div class="mt-[55px] mb-[35px]">
                            <span class="block leading-none font-normal text-[14px] text-secondary mb-[5px] relative before:absolute before:left-0 before:top-1/2 -translate-y-1/2 before:bg-secondary before:content-[''] before:w-[3px] before:h-[3px] before:rounded-full before:block pl-[10px] lg:text-[14px]">{{ Carbon\Carbon::parse($blog->date)->format('d-M-Y') }}</span>
                            <h2 class="font-lora leading-tight text-[25px] md:text-[25px] lg:text-[25px] text-primary mb-[10px] font-medium">
                                {{ $blog->name }}
                            </h2>
                        </div>

                        <!-- <img src="{{URL('')}}/{{config('fgproperties.file_path').$blog->image}}" class="w-auto h-auto mt-[10px]" loading="lazy" alt="Elite Garden Resedence." style="width:100%; height: 505px;"> -->
                        <img src="{{config('fgproperties.file_path').$blog->image}}" class="w-auto h-auto mt-[10px] rounded-[15px]" loading="lazy" alt="Elite Garden Resedence." style="width:100%; height: 505px;">

                        <div class="mt-[20px] mb-[35px]">
                            <p class="pl-[20px]" style="font-size:18px">{!!$blog->description!!}</p>
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <!-- Popular Properties end -->

@endsection

@section('bottom-mid-scripts')

@endsection

@section('bottom-bot-scripts')

@endsection
