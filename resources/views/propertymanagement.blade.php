@extends('layouts.master')
@section('title') Property Management @endsection

@section('top-styles')
<title> property Management</title>

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
              <h1 class="font-lora text-[25px] sm:text-[25px] md:text-[25px] lg:text-[25px] leading-tight font-medium md:mt-[-0rem]">
              	Property Management  
            	</h1>
          	</div>
        	</div>
      	</div>              
    </div>
</section>
        <!-- Hero section end -->

<div class=" container">
	
</div>

<section class="py-[80px] lg:py-[120px]">

            <div class="container">
                <div class="grid grid-cols-12 gap-x-[30px]">
                    <div class="col-span-12">
                        <div class="col-span-12 mb-[70px]">
                            <div class="text-center">
                                <span class="text-secondary text-tiny inline-block mb-2" style="font-size: 18px; color: #D2AC47;">Property Management services</span>
                                <h2 class="font-lora text-primary text-[25px] sm:text-[25px] capitalize font-medium">
                                    <!-- <b>Get in Touch</b><span class="text-secondary">.</span> -->
                                </h2>
                                <p class="mx-auto max-w-fit text-md">
                                   Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="grid col-span-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-[30px] mb-[-30px]">

                    <div class="flex flex-wrap drop-shadow-[0px_16px_10px_rgba(0,0,0,0.1)] bg-[#F5F9F8] transition-all p-[20px] xl:p-[35px] rounded-[15px] mb-[30px]">
                        <img class="self-center mr-[20px] sm:mr-[40px] lg:mr-[20px] xl:mr-[40px] sm:mb-[15px] lg:mb-0" src="{{url('')}}/assets/images/icon/Facility-and-Maintenance-Management-Icons-01.png" width="60" height="60" loading="lazy" alt="image icon">
                        <div class="flex-1">
                            <h4 class="font-lora leading-none text-[20px] sm:text-[20px] text-primary mb-[10px]">Maintenance management <span
                                    class="text-secondary">.</span></h4>
                            <p class="font-light text-[16px] lg:max-w-[230px]">Facility and Maintenance management</p>
                        </div>
                    </div>

                    <div class="flex flex-wrap drop-shadow-[0px_16px_10px_rgba(0,0,0,0.1)] bg-[#F5F9F8] transition-all p-[20px] xl:p-[35px] rounded-[15px] mb-[30px]">
                        <img class="self-center mr-[20px] sm:mr-[40px] lg:mr-[20px] xl:mr-[40px] sm:mb-[15px] lg:mb-0" src="{{url('')}}/assets/images/icon/Lease-and-Tenant-Management-Icons-02.png" width="60" height="60" loading="lazy" alt="image icon">
                        <div class="flex-1">
                            <h4 class="font-lora leading-none text-[20px] sm:text-[20px] text-primary mb-[10px]">Lease Management <span
                                    class="text-secondary">.</span></h4>
                                    
                            <p class="font-light text-[16px] lg:max-w-[230px]">Lease and Tenant Management </p>
                        </div>
                    </div>

                    <div class="flex flex-wrap drop-shadow-[0px_16px_10px_rgba(0,0,0,0.1)] bg-[#F5F9F8] transition-all p-[20px] xl:p-[35px] rounded-[15px] mb-[30px] xl:pl-[65px]">
                        <img class="self-center mr-[20px] sm:mr-[40px] lg:mr-[20px] xl:mr-[40px] sm:mb-[15px] lg:mb-0" src="{{url('')}}/assets/images/icon/Rent-Collection-and-Accounting-Icons-03.png" width="60" height="60" loading="lazy" alt="image icon">
                        <div class="flex-1">
                            <h4 class="font-lora leading-none text-[20px] sm:text-[20px] text-primary mb-[10px]">Accounting <span
                                    class="text-secondary">.</span></h4>
                                    
                            <p class="font-light text-[16px] lg:max-w-[230px]">
                                 Rent Collection and Accounting
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-wrap drop-shadow-[0px_16px_10px_rgba(0,0,0,0.1)] bg-[#F5F9F8] transition-all p-[20px] xl:p-[35px] rounded-[15px] mb-[30px] xl:pl-[65px]">
                        <img class="self-center mr-[20px] sm:mr-[40px] lg:mr-[20px] xl:mr-[40px] sm:mb-[15px] lg:mb-0" src="{{url('')}}/assets/images/icon/Marketing-of-the-Property-Icons-04.png" width="60" height="60" loading="lazy" alt="image icon">
                        <div class="flex-1">
                            <h4 class="font-lora leading-none text-[20px] sm:text-[20px] text-primary mb-[10px]">Marketing <span
                                    class="text-secondary">.</span></h4>
                                    
                            <p class="font-light text-[16px] lg:max-w-[230px]">
                                 Marketing of the Property
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-wrap drop-shadow-[0px_16px_10px_rgba(0,0,0,0.1)] bg-[#F5F9F8] transition-all p-[20px] xl:p-[35px] rounded-[15px] mb-[30px] xl:pl-[65px]">
                        <img class="self-center mr-[20px] sm:mr-[40px] lg:mr-[20px] xl:mr-[40px] sm:mb-[15px] lg:mb-0" src="{{url('')}}/assets/images/icon/Legal-Guidance-Icons-06.png" width="60" height="60" loading="lazy" alt="image icon">
                        <div class="flex-1">
                            <h4 class="font-lora leading-none text-[20px] sm:text-[20px] text-primary mb-[10px]">Guidance <span
                                    class="text-secondary">.</span></h4>
                                    
                            <p class="font-light text-[16px] lg:max-w-[230px]">
                                 Legal Guidance
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-wrap drop-shadow-[0px_16px_10px_rgba(0,0,0,0.1)] bg-[#F5F9F8] transition-all p-[20px] xl:p-[35px] rounded-[15px] mb-[30px] xl:pl-[65px]">
                        <img class="self-center mr-[20px] sm:mr-[40px] lg:mr-[20px] xl:mr-[40px] sm:mb-[15px] lg:mb-0" src="{{url('')}}/assets/images/icon/Regular-Cleaning-Icons-05.png" width="60" height="60" loading="lazy" alt="image icon">
                        <div class="flex-1">
                            <h4 class="font-lora leading-none text-[20px] sm:text-[20px] text-primary mb-[10px]">Cleaning <span
                                    class="text-secondary">.</span></h4>
                                    
                            <p class="font-light text-[16px] lg:max-w-[230px]">
                                 Regular Cleaning
                            </p>
                        </div>
                    </div>

                </div>


            </div>
        </section>
        <!-- contact form end -->
        <div> 
            <div class="container">
                <div class="col-span-12 lg:col-span-7 mb-[30px] min-w-full">
                    <div>
                        <h2 class="font-lora text-primary text-[22px] sm:text-[22px] leading-[1.277] capitalize mb-[10px] font-medium">
                            Property Management Enquires
                        </h2>
                        <!--<p class="max-w-[465px] mb-[40px]">
                                Huge number of propreties availabe here for buy, sell and Rent.
                                Also you find here co-living property, lots opportunity
                            </p> -->

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
                        <div class="grid grid-cols-12 gap-x-[20px] gap-y-[30px] text-sm">
                            <div class="col-span-12 md:col-span-12">
                                <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[15px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " type="text" placeholder="Full Name" name="name" required>
                            </div>

                            <div class="col-span-12 md:col-span-6">
                                <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[15px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " type="text" placeholder="Phone Number" name="phone" required>
                            </div>

                            <div class="col-span-12 md:col-span-6">
                                <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[15px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " type="email" placeholder="Email Address" name="email" required>
                            </div>

                            <div class="col-span-12">
                                <textarea class="h-[196px] font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[15px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] resize-none" name="message" id="textarea" cols="30" rows="10" placeholder="Message" required></textarea>
                            </div>
                            <div class="col-span-12 mb-[30px] lg:mb-0  order-2 lg:order-none">
                                <button type="submit" class="before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[30px] py-[15px] capitalize font-medium text-white text-[13px] xl:text-[13px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-primary after:rounded-md after:transition-all mb-[30px] lg:mb-0">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>










@endsection

@section('bottom-mid-scripts')

@endsection

@section('bottom-bot-scripts')

@endsection
