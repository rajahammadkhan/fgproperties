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
                            <h1 class="font-lora text-[32px] sm:text-[50px] md:text-[68px] lg:text-[50px] leading-tight font-medium md:mt-[-0rem]">
                                Blogs  
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
                <!-- Blog Section Start  -->

        <section class="blog-section pt-[80px] lg:pt-[120px]">
            <div class="container">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-[30px] gap-y-[40px]">
                    @foreach($blogs as $blog)
                    <div class="post-item">
                        <a href="{{route('blog.post',$blog->slug)}}" class="block overflow-hidden rounded-[6px] mb-[35px]">
                            <img class="w-full md:h-[15rem] h-full" src="{{config('fgproperties.file_path').$blog->image}}" width="370" height="270" loading="lazy" alt="{{ $blog->name }}">
                        </a>
                        <div>
                            <span class="block leading-none font-normal text-[14px] text-secondary mb-[5px] relative before:absolute before:left-0 before:top-1/2 -translate-y-1/2 before:bg-secondary before:content-[''] before:w-[3px] before:h-[3px] before:rounded-full pl-[10px]">{{ $blog->by }} | {{ Carbon\Carbon::parse($blog->date)->format('d-M-Y') }}</span>
                            <h3><a href="{{route('blog.post',$blog->slug)}}" class="font-lora text-[22px] xl:text-[24px] leading-[1.285] text-primary block mb-[10px] hover:text-secondary transition-all font-medium">{{ $blog->name }}</a></h3>
                            <p class="font-light text-[#494949] text-[16px] leading-[1.75]">{{$blog->short_description}}</p>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </section>
        <!-- Blog Section End  -->
@endsection

@section('bottom-mid-scripts')

@endsection

@section('bottom-bot-scripts')

@endsection
