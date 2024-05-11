@extends('layouts.master')
@section('title') Careers @endsection
@section('top-styles')
<style type="text/css">
    .im{
        margin-left: 20px;
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
    #requirements{
        grid-template-columns: repeat(6, minmax(0, 1fr));
    }
    #form-grid{
     grid-template-columns: repeat(6, minmax(0, 1fr));   
    }
}

.radio-toolbar { 
  margin: 10px; 
} 
 
.radio-toolbar input[type="radio"] { 
  opacity: 0; 
  position: fixed; 
  width: 0; 
} 
 
.radio-toolbar label { 
    display: inline-block; 
    background-color: #ddd; 
    padding: 10px 20px; 
    font-family: sans-serif, Arial; 
    font-size: 16px; 
    border: 2px solid #444; 
    border-radius: 4px; 
} 
 
.radio-toolbar label:hover { 
  background-color: #dfd; 
} 
 
.radio-toolbar input[type="radio"]:focus + label { 
    border: 2px dashed #444; 
} 
 
.radio-toolbar input[type="radio"]:checked + label { 
    background-color: #bfb; 
    border-color: #4c4; 
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
                        <h1 class="font-lora text-[30px] sm:text-[30px] md:text-[30px] lg:text-[30px] leading-tight font-medium md:mt-[-0rem]" style="color: #D2AC47">
                            JOIN <br><span class="text-white text-[25px]">Future Generation Properties</span>  
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
        <section class="popular-properties mt-[2.5rem]">
            <div class="container">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between ">
                            <div>
                                <h2 class="font-lora text-primary text-[22px] sm:text-[22px] capitalize font-medium ">
                                    <b>Vaccancies</b><span class="text-secondary">.</span></h2>
                                    <p class="text-center text-sm">Become part of FG Properties culture, where innovation, inclusion and commitment are rewarded and where every individual is respected.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <br>

                <div class="grid grid-cols-12">
                    @foreach($vacancies as $vacancy)
                    <div class="col-span-12 lg:col-span-6 pl-[1rem] pr-[1rem] mb-[0.5rem]">
                        <div>
                            <fieldset class=" uppercase w-full placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[15px] p-[10px] pl-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)]" style="border: 1px solid; border-color: lightgrey;">  
                                <legend class="text-[16px] text-[#D2AC47] font-bold depart{{$loop->iteration}} text-sm">{{ $vacancy->department }}</legend>
                            <p>
                                <span class="text-left pr-[1rem] text-primary text-[16px] font-bold pos{{$loop->iteration}}">{{ $vacancy->position }}:</span><br>
                                 <span class="text-left pl-[1rem] pr-[1rem] text-[14px] text-primary">{!! $vacancy->short_description !!}</span>
                                <button onclick="openModalapply{{$loop->iteration}}()" class="before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[20px] py-[10px] mt-[1.5rem] mr-[1rem] font-medium text-white sm:block text-[13px] xl:text-[13px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-primary after:rounded-md after:transition-all pl-[1rem] pr-[1rem] uppercase" style="float: right;">Apply</button>

                                <button onclick="openModalview{{$loop->iteration}}()" class="before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[20px] py-[10px] mt-[1.5rem] mr-[1rem] font-medium text-white sm:block text-[13px] xl:text-[13px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-primary after:rounded-md after:transition-all pl-[1rem] pr-[1rem] uppercase" style="float: right;">View Job</button>
                            </p>
                        </fieldset>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Popular Area end -->
        @foreach($vacancies as $vacancy)

        <div class="main-modal-apply{{$loop->iteration}} pt-[22.25rem] md:pt-[0rem] md:my-auto fixed w-full h-full md:h-100 inset-0 z-50 overflow-y-auto flex justify-center items-center animated fadeIn faster" style="background: rgba(0,0,0,.7); display: none !important;">
            <div
                class="border shadow-lg modal-container bg-white w-11/12 md:max-w-[60rem] mx-auto rounded shadow-lg z-50 overflow-y-auto">
                <div class="modal-content py-4 text-left px-6" >
                    <!--Title-->
                    <div class="flex justify-between items-center pb-1 mb-3">
                        <p class="text-lg font-bold">Apply Now</p>
                        
                        <div class="modal-close-apply{{$loop->iteration}} cursor-pointer z-50">
                            <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"><path d="m14.53 4.53-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"/></svg>
                        </div>
                    </div>
                    <hr>
                    <div class="flex justify-between items-center pb-2 mt-2 mb-2">
                        <h4 class="text-[18px] font-bold uppercase designation">Associate Director</h4>
                        <h4 class="pl-[1rem] pr-[1rem] text-[14px] text-[#D2AC47] dept">Sales</h4>
                        
                    </div>
                    <hr>
                    
                    <form method="post"  action="{{ route('apply') }}" enctype="multipart/form-data">
                        @csrf
                        <!--Body-->
                        <div class="my-5 text-sm">    
                            <div class="grid grid-cols-12" id="form-grid">                
                                <div class="col-span-12 md:col-span-4 mt-2 mr-1 hidden">
                                    <input class="font-light w-full leading-[0.5] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] text-sm designation-input" type="text" placeholder="Designation" name="designation" required readonly>
                                </div>

                                <div class="col-span-12 md:col-span-4 mt-2 mr-1 hidden">
                                    <input class="font-light w-full leading-[0.5] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] text-sm department-input" type="text" placeholder="Department" name="department" required readonly>
                                </div>

                                <div class="col-span-12 md:col-span-4 mt-2 mr-1">
                                    <input class="font-light w-full leading-[0.5] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] text-sm " type="text" placeholder="Full Name" name="full_name" required>
                                </div>

                                <div class="col-span-12 md:col-span-4 mt-2 mr-1">
                                    <input class="font-light w-full leading-[0.5] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] text-sm " type="text" placeholder="Phone Number" name="phone" required>
                                </div>

                                <div class="col-span-12 md:col-span-4 mt-2 mr-1">
                                    <input class="font-light w-full leading-[0.5] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] text-sm " type="email" placeholder="Email Address" name="email" required>
                                </div>

                                <div class="col-span-12 md:col-span-4 mt-2 mr-1">
                                    <input class="font-light w-full leading-[0.5] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] text-sm " type="text" placeholder="Birth Date" min="1960-01-01" max="2001-12-31" name="dob" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" required>
                                </div>

                                <div class="col-span-12 md:col-span-4 mt-2 mr-1">
                                    <input class="font-light w-full leading-[0.5] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] text-sm " type="text" placeholder="Nationality" name="nationality" required>
                                </div>

                                <div class="col-span-12 md:col-span-4 mt-2 mr-1 text-sm">
                                    <select name="visa_status" id="typerent" class="font-light w-full leading-[1.1] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] appearance-none bg-transparent text-tiny font-light cursor-pointer" >
                                        <option selected disabled value="">Visa Status</option>
                                        <option value="employmentvisa">Employment Visa</option>
                                        <option value="familysponsored">Family Sponsored</option>
                                        <option value="visitvisa">Visit Visa</option>
                                        <option value="touristvisa">Tourist Visa</option>
                                        <option value="none-outsidedubai">None - Outside Dubai</option>
                                    </select>
                                </div>

                                <div class="col-span-12 md:col-span-4 mt-2 mr-1">
                                    <input class="font-light w-full leading-[0.5] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] text-sm" type="text" placeholder="Ready to join by" name="ready_to_join"   onfocus="(this.type='date')" onblur="(this.type='text')" id="date1" required>
                                </div>

                                <div class="col-span-12 md:col-span-4 mt-2 mr-1">
                                    <input class="font-light w-full leading-[0.5] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] text-sm " type="text" placeholder="Fluent in Languages" name="languages" required>
                                </div>

                                <div class="col-span-12 md:col-span-4 mt-2 mr-1">
                                    <input class="font-light w-full leading-[0.5] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] text-sm " type="text" placeholder="Current Address" name="address" required>
                                </div>

                                <div class="col-span-12 md:col-span-4 mt-[0.6rem] mr-1">
                                    <input class="font-light w-full leading-[0.5] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] text-sm " type="text" placeholder="Major" name="major" required>
                                </div>

                                <div class="col-span-12 md:col-span-4 mt-2 mr-1">
                                    <fieldset class="font-light w-full leading-[0.5] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] text-sm" style="border: 1px solid;">  
                                        <legend>Gender:</legend>
                                        <input type="radio" name="gender" id="female" value="Female" class="ml-[1.5rem]">
                                        <label class="btn btn-secondary" for="female">Female</label>
                                        <input type="radio" name="gender" id="male" class="ml-[2rem]" value="Male">
                                        <label class="btn btn-secondary" for="male">Male</label>
                                    </fieldset>
                                </div>

                                <div class="col-span-12 md:col-span-4 mt-2 mr-1">
                                    <fieldset class="font-light w-full leading-[0.5] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] text-sm" style="border: 1px solid;">  
                                        <legend>Are you in Dubai Now?</legend>
                                        <input type="radio" name="location" id="yes" value="Yes" class="ml-[1.5rem]">
                                        <label class="btn btn-secondary" for="yes">Yes</label>

                                        <input type="radio" name="location" id="no" class="ml-[2rem]" value="No">
                                        <label class="btn btn-secondary" for="no">No</label>
                                    </fieldset>
                                </div>

                                <div class="col-span-12 md:col-span-6 mt-2 mr-1 ">
                                    <fieldset class="font-light w-full leading-[0.5] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] text-sm" style="border: 1px solid;">  
                                        <legend>Education Level:</legend>
                                        <div>
                                            <input type="radio" name="education_level" id="highschool" class="ml-[1rem]" value="High School">
                                            <label class="btn btn-secondary" for="highschool">High School</label>

                                            <input type="radio" name="education_level" id="bachelordegree" class="ml-[1rem]" value="Bachelor Degree">
                                            <label class="btn btn-secondary md:mr-[0px] mr-[1rem]" for="bachelordegree">Bachelor Degree</label>

                                            <input type="radio" name="education_level" id="masterdegree" class="ml-[1rem]" value="Master Degree">
                                            <label class="btn btn-secondary" for="masterdegree">Master Degree</label>                                   
                                        </div>
                                    </fieldset>                                  
                                </div>    

                                <div class="col-span-12 md:col-span-6 mt-2 mr-1">
                                    <fieldset class="font-light w-full leading-[0.5] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] text-sm
                                    " style="border: 1px solid;">  
                                        <legend>Do you have a Realestate Experience:</legend>
                                        <input type="radio" name="realestate_exp" id="yes1" value="Yes" class="ml-[1.5rem]">
                                        <label class="btn btn-secondary" for="yes1">Yes</label>

                                        <input type="radio" name="realestate_exp" id="no1" class="ml-[2rem]" value="No">
                                        <label class="btn btn-secondary" for="no1">No</label>
                                    </fieldset>
                                </div>

                                

                                <div class="col-span-12 md:col-span-12 mt-2 mr-1  text-sm">
                                    <label class="" for="file_input">C.V (Only .pdf files are accepted.)</label>
                                    <input class="block w-full text-sm text-gray-900 bg-gray-50 leading-[3] pl-2 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" required accept=".pdf" name="cv" style="background-color: rgb(11 44 61 / var(--tw-bg-opacity));">
                                </div>

                                <div class="col-span-12 md:col-span-12 mt-2 mr-1">
                                    <textarea class="h-[86px] font-light w-full leading-[0.5] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] text-sm resize-none" name="message" id="textarea" cols="30" rows="10" placeholder="Notes" required></textarea>
                                </div>
                            </div>
                        </div>
                        <!--Footer-->
                        <div class="flex justify-end pt-2">
                            <button type="button" class="focus:outline-none modal-close-apply{{$loop->iteration}} px-4 bg-gray-400 p-3 rounded-lg text-black hover:bg-gray-300">Cancel</button>
                            <button class="before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-4 py p-3 ml-3 capitalize font-medium text-white text-[13px] xl:text-[13px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-primary after:rounded-md after:transition-all">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="main-modal-view{{$loop->iteration}} fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster" style="background: rgba(0,0,0,.7); display: none !important;">
            <div class="border shadow-lg modal-container bg-white w-11/12 md:max-w-[60rem] mx-auto rounded shadow-lg z-50 overflow-y-auto">
                <div class="modal-content py-4 text-left px-6" >
                    <!--Title-->
                    <div class="flex justify-between items-center pb-1 mb-3">
                        <p class="text-lg font-bold">{{$vacancy->position}}</p>
                        
                        <div class="modal-close-view{{$loop->iteration}} cursor-pointer z-50">
                            <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"><path d="m14.53 4.53-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"/></svg>
                        </div>
                    </div>
                    <hr>
                    <div class="flex justify-between items-center pb-2 mt-2 mb-2">
                        <h4 class="text-[18px] font-bold uppercase text-[#D2AC47]">{{ $vacancy->department }}</h4>
                    </div>
                    <hr>
                    {!! $vacancy->description !!}
                    <!-- <h2 class="text-sm">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</h2>
                    <hr>
                    <div class="grid grid-cols-12" id="requirements">                
                        <div class="col-span-6 md:col-span-6 mt-2 mr-1">
                             <h1 class="text-[18px] uppercase font-bold">Responsibilities:</h1>
                                <ul>
                                    <li>Managing Sales</li>
                                    <li>Managing Sales</li>
                                    <li>Managing Sales</li>
                                    <li>Managing Sales</li>
                                </ul>
                        </div>

                        <div class="col-span-6 md:col-span-6 mt-2 mr-1">
                            <h1 class="text-[18px] uppercase font-bold">Requirement:</h1>
                            <ul>
                                <li>Master Degree</li>
                            </ul>
                        </div>
                    </div> --> 
                </div>
            </div>
        </div>
        @endforeach

        <!-- Popular Area start -->
        <section class="popular-properties mt-[2.5rem]">
            <div class="container">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between ">
                            <div>
                                <h2 class="font-lora text-primary text-[25px] sm:text-[22px] capitalize font-medium text-center">
                                    <b>Our core values</b><span class="text-secondary">.</span>
                                </h2>
                                <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <br>

                <div class="grid grid-cols-12">
                    <div class="col-span-12 lg:col-span-6 pl-[1rem] pr-[1rem] mb-[0.5rem]" style="">
                        <div class="rounded-[15px] py-2 text-[16px] lg:text-[16px] font-bold uppercase" style="border: 1px solid; border-color: lightgrey;">
                            <p>
                                <span class="text-left pl-[1rem] pr-[1rem] text-[#D2AC47] text-[16px]">Our customers are our most valuable asset</span>
                            </p>
                            <p class="pl-[1rem] pr-[1rem] text-[12px] md:text-[13px] capitalize">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen</p>
                        </div>
                    </div>

                    <div class="col-span-12 lg:col-span-6 pl-[1rem] pr-[1rem] mb-[0.5rem]" style="">
                        <div class="rounded-[15px] py-2 text-[16px] lg:text-[16px] font-bold uppercase" style="border: 1px solid; border-color: lightgrey;">
                            <p>
                                <span class="text-left pl-[1rem] pr-[1rem] text-[#D2AC47] ">Cold Caller</span>
                            </p>
                            <p class="pl-[1rem] pr-[1rem] text-[13px] md:text-[13px] capitalize">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen</p>
                        </div>
                    </div>

                    <div class="col-span-12 lg:col-span-6 pl-[1rem] pr-[1rem] mb-[0.5rem]" style="">
                        <div class="rounded-[15px] py-2 text-[16px] lg:text-[16px] font-bold uppercase" style="border: 1px solid; border-color: lightgrey;">
                            <p>
                                <span class="text-left pl-[1rem] pr-[1rem] text-[#D2AC47] ">General Accountant</span>
                            </p>
                            <p class="pl-[1rem] pr-[1rem] text-[13px] md:text-[13px] capitalize">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen</p>
                        </div>
                    </div>

                    <div class="col-span-12 lg:col-span-6 pl-[1rem] pr-[1rem] mb-[0.5rem]" style="">
                        <div class="rounded-[15px] py-2 text-[16px] lg:text-[16px] font-bold uppercase" style="border: 1px solid; border-color: lightgrey;">
                            <p>
                                <span class="text-left pl-[1rem] pr-[1rem] text-[#D2AC47] ">HR Director</span>
                            </p>
                            <p class="pl-[1rem] pr-[1rem] text-[13px] md:text-[13px] capitalize">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen</p>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script type="text/javascript">
    @foreach($vacancies as $vacancy)

    const modalapply{{$loop->iteration}} = document.querySelector('.main-modal-apply{{$loop->iteration}}');
        const closeButtonapply{{$loop->iteration}} = document.querySelectorAll('.modal-close-apply{{$loop->iteration}}');

        const modalCloseapply{{$loop->iteration}} = () => {

            modalapply{{$loop->iteration}}.classList.remove('fadeIn');
            modalapply{{$loop->iteration}}.classList.add('fadeOut');
            setTimeout(() => {
                modalapply{{$loop->iteration}}.style.display = 'none';
            });
        }

        const openModalapply{{$loop->iteration}} = () => {
            modalapply{{$loop->iteration}}.classList.remove('fadeOut');
            modalapply{{$loop->iteration}}.classList.add('fadeIn');
            modalapply{{$loop->iteration}}.style.display = 'flex';
            $('.designation').html($('.pos{{$loop->iteration}}').text()) ;
            $('.dept').html($('.depart{{$loop->iteration}}').text()) ;

            $('.designation-input').val($('.pos{{$loop->iteration}}').text());
            $('.department-input').val($('.depart{{$loop->iteration}}').text());
        }

        for (let i = 0; i < closeButtonapply{{$loop->iteration}}.length; i++) {

            const elements = closeButtonapply{{$loop->iteration}}[i];

            elements.onclick = (e) => modalCloseapply{{$loop->iteration}}();

            modalapply{{$loop->iteration}}.style.display = 'none';

            window.onclick = function (event) {
                if (event.target == modal) modalCloseapply{{$loop->iteration}}();
                else if (event.target == modal1) modalClosejob1();
            }
        }
        const modalview{{$loop->iteration}} = document.querySelector('.main-modal-view{{$loop->iteration}}');
        const closeButtonview{{$loop->iteration}} = document.querySelectorAll('.modal-close-view{{$loop->iteration}}');

        const modalCloseview{{$loop->iteration}} = () => {

            modalview{{$loop->iteration}}.classList.remove('fadeIn');
            modalview{{$loop->iteration}}.classList.add('fadeOut');
            setTimeout(() => {
                modalview{{$loop->iteration}}.style.display = 'none';
            });
        }

        const openModalview{{$loop->iteration}} = () => {
            modalview{{$loop->iteration}}.classList.remove('fadeOut');
            modalview{{$loop->iteration}}.classList.add('fadeIn');
            modalview{{$loop->iteration}}.style.display = 'flex';
        }

        for (let i = 0; i < closeButtonview{{$loop->iteration}}.length; i++) {

            const elements = closeButtonview{{$loop->iteration}}[i];

            elements.onclick = (e) => modalCloseview{{$loop->iteration}}();

            modalview{{$loop->iteration}}.style.display = 'none';

            window.onclick = function (event) {
                if (event.target == modal) modalCloseview{{$loop->iteration}}();
                else if (event.target == modal1) modalClosejob2();
            }
        }
        @endforeach
</script>

<script type="text/javascript">
$(function(){
    var dtToday = new Date();
    
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var minDate= year + '-' + month + '-' + day;
    
    $('#date1').attr('min', minDate);
});
</script>
@endsection
