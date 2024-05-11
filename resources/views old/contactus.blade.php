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
                                Contact Us  
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
<!-- contact form start -->
        <section class="py-[80px] lg:py-[120px]">

            <div class="container">
                <div class="grid grid-cols-12 gap-x-[30px]">
                    <div class="col-span-12">
                        <div class="col-span-12 mb-[70px]">
                            <div class="text-center">
                                <span class="text-secondary text-tiny inline-block mb-2" style="font-size: 20px; color: #D2AC47;">Contact us</span>
                                <h2 class="font-lora text-primary text-[24px] sm:text-[40px] capitalize font-medium">
                                    <b>Get in Touch</b><span class="text-secondary">.</span></h2>
                                <p class="mx-auto max-w-[465px]">
                                    Huge number of propreties availabe here for buy, sell and Rent.
                                    Also you find here co-living property, lots opportunity.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="grid col-span-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-[30px] mb-[-30px]">

                    <div class="flex flex-wrap drop-shadow-[0px_16px_10px_rgba(0,0,0,0.1)] bg-[#F5F9F8] transition-all p-[20px] xl:p-[35px] rounded-[8px] mb-[30px]">
                        <img class="self-center mr-[20px] sm:mr-[40px] lg:mr-[20px] xl:mr-[40px] sm:mb-[15px] lg:mb-0" src="{{url('')}}/assets/images/icon/map.png" width="40" height="55" loading="lazy" alt="image icon">
                        <div class="flex-1">
                            <h4 class="font-lora leading-none text-[28px] text-primary mb-[10px]">Address <span
                                    class="text-secondary">.</span></h4>
                            <p class="font-light text-[18px] lg:max-w-[230px]">{{ getSettings('address') }}</p>
                        </div>
                    </div>

                    <div class="flex flex-wrap drop-shadow-[0px_16px_10px_rgba(0,0,0,0.1)] bg-[#F5F9F8] transition-all p-[20px] xl:p-[35px] rounded-[8px] mb-[30px]">
                        <img class="self-center mr-[20px] sm:mr-[40px] lg:mr-[20px] xl:mr-[40px] sm:mb-[15px] lg:mb-0" src="{{url('')}}/assets/images/icon/phone.png" width="46" height="46" loading="lazy" alt="image icon">
                        <div class="flex-1">
                            <h4 class="font-lora leading-none text-[28px] text-primary mb-[10px]">Call us <span
                                    class="text-secondary">.</span></h4>
                                    <br>
                            <p class="font-light text-[18px] lg:max-w-[230px]">{{ getSettings('contact_no_1') }} </p>
                        </div>
                    </div>

                    <div class="flex flex-wrap drop-shadow-[0px_16px_10px_rgba(0,0,0,0.1)] bg-[#F5F9F8] transition-all p-[20px] xl:p-[35px] rounded-[8px] mb-[30px] xl:pl-[65px]">
                        <img class="self-center mr-[20px] sm:mr-[40px] lg:mr-[20px] xl:mr-[40px] sm:mb-[15px] lg:mb-0" src="{{url('')}}/assets/images/icon/mail.png" width="46" height="52" loading="lazy" alt="image icon">
                        <div class="flex-1">
                            <h4 class="font-lora leading-none text-[28px] text-primary mb-[10px]">Email us <span
                                    class="text-secondary">.</span></h4>
                                    <br>
                            <p class="font-light text-[18px] lg:max-w-[230px]">
                                <a href="mailto:{{ getSettings('website_email_1') }}" class="hover:text-secondary"> {{ getSettings('website_email_1') }}</a>
                            </p>
                        </div>
                    </div>

                </div>


            </div>
        </section>
        <!-- contact form end -->


        <div>
            
            <div class="container">
                <form method="post"  action="{{ route('contactus') }}">
                    @csrf
                    <div class="grid grid-cols-12 gap-x-[30px] mb-[-30px] items-end">
                        <div class="col-span-12 lg:col-span-7 mb-[30px]">
                            <div>
                                <h2 class="font-lora text-primary text-[24px] sm:text-[28px] leading-[1.277] capitalize mb-[10px] font-medium">
                                    Send Message

                                </h2>
                                <p class="max-w-[465px] mb-[40px]">
                                    Huge number of propreties availabe here for buy, sell and Rent.
                                    Also you find here co-living property, lots opportunity
                                </p>

                                @if(session()->has('message'))
                                    <div class="container w-[50rem] mt-[2rem] mb-[3rem] text-center" id="aler">
                                        <div class="bg-[#294159] border border-[#294159] text-[white] px-4 py-3 rounded relative" role="alert">
                                          <strong class="font-bold">THANK YOU!</strong>
                                          <span class="block sm:inline">{{ session()->get('message') }}</span>
                                        </div>
                                    </div>
                                @endif
                                    
                            </div>
                            <form method="post"  action="{{ route('contactus') }}">
                            @csrf
                                <div class="grid grid-cols-12 gap-x-[20px] gap-y-[30px]">

                                    <div class="col-span-12 md:col-span-12">
                                        <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " type="text" placeholder="Full Name" name="name" required>
                                    </div>

                                    <div class="col-span-12 md:col-span-6">
                                        <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " type="text" placeholder="Phone Number" name="phone" required>
                                    </div>

                                    <div class="col-span-12 md:col-span-6">
                                        <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " type="email" placeholder="Email Address" name="email" required>
                                    </div>

                                    <div class="col-span-12">
                                        <textarea class="h-[196px] font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] resize-none" name="message" id="textarea" cols="30" rows="10" placeholder="Message" required></textarea>
                                    </div>
                                    <div class="col-span-12 mb-[30px] lg:mb-0  order-2 lg:order-none">
                                        <button type="submit" class="before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[30px] py-[15px] capitalize font-medium text-white text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-primary after:rounded-md after:transition-all mb-[30px] lg:mb-0">Contact us</button>
                                    </div>

                                </div>
                            </form>

                        </div>

                        <div class="col-span-12 lg:col-span-5 md:mb-[100px] order-last lg:order-none">
                            <div class="h-[385px] rounded-[6px] overflow-hidden xl:ml-[40px]">
                                <iframe class="w-full h-full" src="{{ getSettings('google_location') ?? null }}" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                        
                    </div>
                

            </div>
        </div>
@endsection

@section('bottom-mid-scripts')

@endsection

@section('bottom-bot-scripts')
  <script type="text/javascript">
      $("#aler").show();
        setTimeout(function() { $("#aler").hide(); }, 3000);
  </script>
@endsection
