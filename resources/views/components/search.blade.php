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
.inline-popup::before {
  content: "";
  position: absolute;
  width: 0;
  height: 0;
  bottom: 100%;
  left: 30px;
  border: 10px solid transparent;
    border-top-color: transparent;
    border-top-style: solid;
    border-top-width: 10px;
    border-bottom-color: transparent;
    border-bottom-style: solid;
    border-bottom-width: 10px;
  border-top: none;
  border-bottom: 10px solid rgb(237,252,250,1);
  -webkit-filter: drop-shadow(0 -1px 1px rgba(0,0,0,.1));
  filter: drop-shadow(0 -1px 1px rgba(0,0,0,.1));
  -webkit-filter: drop-shadow(0 -0.0625rem 0.0625rem rgba(0,0,0,.1));
  filter: drop-shadow(0 -0.0625rem 0.0625rem rgba(0,0,0,.1));
}

.more-filter-popup::before {

    left: auto;
    right: 30px !important;

}


@media (max-width: 800px) {
    #bannerimages {
        height: 10rem;
    }
    #bannerimages .absolute{
        top: 70%;
    }
    #filterz{
        margin-top: 20px;
    }
    #mainhead{
        color: rgb(255, 255, 255);
    }
    .maindiv{
        margin-top: 10rem;
    }
    .input-div{
        padding: 10px;
        width: 23.5rem;
    }
    .input-internal{
        width: 100%;
    }
    .buydiv{
        min-height: 38rem; 
    }
    #b1view{
        width: 90%;
        margin-left: auto;
        margin-right: auto;
        right: 0px;
        left: 0px;
    }
    #statusnewmore{
        display: block;
        top: 190px;
        min-width: 100%;
        -webkit-filter: drop-shadow(0 -1px 1px rgba(0,0,0,.1));
        filter: drop-shadow(0 -1px 1px rgba(0,0,0,.1));
        -webkit-filter: drop-shadow(0 -0.0625rem 0.0625rem rgba(0,0,0,.1));
        filter: drop-shadow(0 -0.0625rem 0.0625rem rgba(0,0,0,.1));
    }
    #typesnewmore{
        display: block;
        top: 278px;
        min-width: 100%;
        filter: drop-shadow(rgba(0, 0, 0, 0.1) 0px -0.0625rem 0.0625rem);
    }
    #pricenewmore{
        display: block;
        top: 364px;
        min-width: 100%;
        filter: drop-shadow(rgba(0, 0, 0, 0.1) 0px -0.0625rem 0.0625rem);
    }
    #bedsnewmore{
        display: block;
        display: block;
        top: 448px;
        min-width: 100%;
        filter: drop-shadow(rgba(0, 0, 0, 0.1) 0px -0.0625rem 0.0625rem);
    }
    #more{
        display: block;
        top: 532px;
        filter: drop-shadow(rgba(0, 0, 0, 0.1) 0px -0.0625rem 0.0625rem);
        z-index: 999999;
    }
    #amenit{
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }
    #sort_by_options{
        width: 100%;
    }
    .inline-popup::before {
        left: auto;
        right: 30px !important;
    }
        .sorting-div{
        z-index: 1;
    }
}
@media (min-device-width: 1024px) and (max-device-width: 1279px) {
    #b1view{
        right: 1%;
        bottom: 15%;

    }
     #locationnew{
        width: 100%;
    }
    #first-in-div{
        margin-left: 1%;
        width: 19%;
    }
    .input-internal{
        width: 100%;
    }
    .input-internal{
        width: 100%;
    }

     #statusnewmore{
        left: 24.5%;
    }
    #typesnewmore{
        left: 37.5%;
    }
    #pricenewmore{
        right: 17.5%;
    } 
    #bedsnewmore{
        right: 4.5%;
    }
    #more{
        right: 11%;
    }

    
    

    #co-living{
        padding-left: 10px;
        padding-right: 10px;
    }  

    #bannerimages {
        height: 22rem;
    }   
    #bannerimages .absolute{
        top: 30%;
    }  
    #filterz{
        margin-top: 5rem;
    }
    #mainhead{
        color: rgb(11, 44, 61);
    }
}
@media (min-device-width: 1280px) and (max-device-width: 1535px) {

    #b1view{
        right: 1%;
        bottom: 18%;
        
    }
     #locationnew{
        width: 100%;
    }
    #first-in-div{
        margin-left: 1%;
        width: 35%;
    }
    .input-internal{
        width: 100%;
    }
    .input-internal{
        width: 100%;
    }

    #statusnewmore{
        left: 40.5%;
    }
    #typesnewmore{
        left: 49.5%;
    }
    #pricenewmore{
        right: 13.5%;
    } 
    #bedsnewmore{
        right: 3.5%;
    }
    #more{
        right: 8%;
    }
    

    #co-living{
        padding-left: 10px;
        padding-right: 10px;
    }  

    #bannerimages {
        height: 22rem;
    }   
    #bannerimages .absolute{
        top: 30%;
    }  
    #filterz{
        margin-top: 5rem;
    }
    #mainhead{
        color: rgb(11, 44, 61);
    }
}
@media (min-device-width: 1536px) and (max-device-width: 1540px) {
    #buy{    
        padding-left: 10px;
        padding-right: 10px;
    }

    #b1view{
        right: 1%;
        bottom: 18%;
       
    }
     #locationnew{
        width: 100%;
    }
    #first-in-div{
        margin-left: 1%;
        width: 46.8%;
    }
    .input-internal{
        width: 100%;
    }
    .input-internal{
        width: 100%;
    }

    #pricebuymore{
        right: 30rem;
    }

    #more{
        right: 7.5rem;
    }

    
    

    #co-living{
        padding-left: 10px;
        padding-right: 10px;
    }  
    
    #bannerimages {
        height: 22rem;
    }   
    #bannerimages .absolute{
        top: 30%;
    }  
    #filterz{
        margin-top: 5rem;
    }
    #mainhead{
        color: rgb(11, 44, 61);
    }    
}

@media (min-width: 2379px){
    
    #b1view{
        right: 1%;
    }
    #first-in-div{
        margin-left: 1%;
        width: 46.8%;
    }
    .input-internal{
        width: 100%;
    }
    #locationnew{
        width: 100%;
    }
    #statusnewmore{
        left: 49.5%;
    }
    #typesnewmore{
        left: 58.5%;
    }
    #pricenewmore{
        right: 11.5%;
    } 
    #bedsnewmore{
        right: 3.5%;
    }
    #more{
        right: 8%;
    }
}

@media (min-width: 2720px){
  
    #b1view{
        right: 1%;
    }
    #first-in-div{
        margin-left: 1%;
    }
    .input-internal{
        width: 100%;
    }

}
@media (min-width: 1541px) and (max-device-width: 2378px) {
    #b1view{
        margin-right: 1%;
        width: 7%;
    }
}
@media (min-width: 1541px) and (max-device-width: 2378px) {
    #buy{
        padding-left: 30px;
        padding-right: 30px;
        margin-left: 90px;
        margin-right: 90px;
    }

    #locationnew{
        width: 100%;
    }

    #b1view{
        margin-right: 1%;
    }

    #pricebuymore{
        right: 30rem;
    }
    #first-in-div{
        margin-left: 1%;
        width: 46.8%;
    }
    .input-internal{
        width: 100%;
    }

    #more{
        right: 8%;
    }

    #co-living{
        padding-left: 30px;
        padding-right: 30px;
        margin-left: 90px;
        margin-right: 90px;
    }  
   
    #bannerimages {
        height: 22rem;
    }   
    #bannerimages .absolute{
        top: 30%;
    }  
    #filterz{
        margin-top: 5rem;
    }
    #mainhead{
        color: rgb(11, 44, 61);
    }  
    #typesnewmore{
        left: 58.5%;
    }
    #pricenewmore{
        right: 11.5%;
    }    
    #bedsnewmore{
        right: 3.5%;
    }
    #statusnewmore{
        left: 49.5%;
    }
}

</style>
<div class="relative ">
    <div class="xl:container xl:mx-auto 2xl:container 2xl:mx-auto relative  z-[2] md:mt-[1rem] ">
        <div class="relative selectricc-border-none lg:max-h-56">
            <div id="rent" class="active tab-content bg-[rgb(237,252,250,0.9)] border border-solid rounded-bl-[15px] rounded-br-[15px] rounded-tr-[15px] rounded-tl-[15px] py-[8px] lg:max-h-56  overflow-visible buydiv" style="padding-bottom: 1%;">
                <form action="{{ route('rent.filter') }}" method="post">
                    @csrf
                    <div class="flex flex-wrap -mb-[45px] md:px-[1rem]">
                        <div class="grow last:mr-0 last:border-r-0 lg:mb-[45px] md:ml-[1rem] md:mb-[45px] input-div" id="first-in-div" style="margin-top: 0.2rem;">
                            <div class="lg:w-[30rem] md:w-[30rem] input-internal" style="width: 100%;">
                                
                                <input id="locationnew" type="text" name="locationnew" placeholder="Search and select area" class="lg:w-full h-[2.63rem] leading-[2.3] text-tiny placeholder:text-body leading-none font-light pr-3 focus:outline-none w-full bg-transparent border-[1px] pl-2 pr-2 mt-1 border-black rounded-md">
                            </div>
                        </div>

                        <div class=" shrink  lg:ml-[1rem] xl:ml-[1rem] last:mr-0 last:border-r-0 lg:mb-[45px] md:mb-[45px] input-div w-[7rem]"  style=" cursor: pointer;">
                            <div class="lg:w-[7rem] md:w-[7rem] input-internal" onclick="statussnew()">
                                
                                <p for="garage" class="text-tiny placeholder:text-body font-light focus:outline-none bg-transparent h-[2.63rem] border-[1px] pl-2 w-full mt-2 border-black rounded-md leading-[2.5]" >Status</p>
                            </div>
                        </div>

                        <div class=" shrink  lg:ml-[1rem] xl:ml-[1rem] last:mr-0 last:border-r-0 lg:mb-[45px] md:mb-[45px] input-div w-[7rem]" style=" cursor: pointer;">
                            <div class="lg:w-[7rem] md:w-[7rem] input-internal" onclick="typesnew()">
                                
                                <p for="garage" class="text-tiny placeholder:text-body font-light focus:outline-none bg-transparent h-[2.63rem] border-[1px] pl-2 w-full mt-2 border-black rounded-md leading-[2.5]" >Type</p>
                            </div>
                        </div>

                        <div class=" shrink  lg:ml-[1rem] xl:ml-[1rem] last:mr-0 last:border-r-0 lg:mb-[45px] md:mb-[45px] input-div w-[7rem]" style=" cursor: pointer;" >
                            <div class="block lg:w-[7rem] md:w-[7rem] input-internal" style=";" onclick="pricenew()">
                                
                                <p for="price" class="text-tiny placeholder:text-body font-light focus:outline-none bg-transparent h-[2.63rem] border-[1px] pl-2 w-full mt-2 border-black rounded-md leading-[2.5]">Price</p>
                            </div>
                        </div>

                        <div class="shrink  lg:ml-[1rem] xl:ml-[1rem] last:mr-0 last:border-r-0 lg:mb-[45px] md:mb-[45px] search-list input-div w-[7rem]" style=" cursor: pointer; ">
                            <div class="lg:w-[7rem] md:w-[7rem] input-internal" onclick="bedsnew()">
                                
                                <p for="garage" class="text-tiny placeholder:text-body font-light focus:outline-none bg-transparent h-[2.63rem] border-[1px] pl-2 w-full mt-2 border-black rounded-md leading-[2.5]" >Beds</p>
                            </div>
                        </div>
                        
                        <div class=" shrink  lg:ml-[1rem] xl:ml-[1rem] last:mr-0 last:border-r-0 lg:mb-[45px] md:mb-[45px] rounded-lg input-div w-[7rem]" style="cursor: pointer; ">
                            <div class="block lg:w-[7rem] md:w-[7rem] input-internal" style=";" onclick="moreNewP()">
                                
                                <p for="garage" class="text-tiny placeholder:text-body font-light focus:outline-none bg-transparent h-[2.63rem] border-[1px] pl-2 w-full mt-2 border-black rounded-md leading-[2.5]" >Filters</p>
                            </div>
                        </div>

                        <div class="shrink  lg:ml-[1rem] xl:ml-[1rem] last:border-r-0 lg:mb-[45px] md:mb-[45px] rounded-lg input-div w-[7.2rem]" style="cursor: pointer; ">
                            <div class="block lg:w-[7rem] md:w-[7rem] input-internal" style="width: 100%;">
                                <button class="search-btn text-tiny placeholder:text-body font-light h-[2.63rem] border-[1px] pl-2 w-full mt-2 rounded-md leading-[2.5]" style="color:black; padding:0px; color: white; letter-spacing: 0.5px;" >
                                    <b style="font-weight: 800;">SEARCH</b>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>               
            </div>
        </div>
    </div>
</div>
<button type="button" class="but" >
    open model
</button>
<div id="modal-email" class="relative z-10 hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
  <!--
    Background backdrop, show/hide based on modal state.

    Entering: "ease-out duration-300"
      From: "opacity-0"
      To: "opacity-100"
    Leaving: "ease-in duration-200"
      From: "opacity-100"
      To: "opacity-0"
  -->
  <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

  <div class="fixed inset-0 z-10 overflow-y-auto">
    <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
      <!--
        Modal panel, show/hide based on modal state.

        Entering: "ease-out duration-300"
          From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
          To: "opacity-100 translate-y-0 sm:scale-100"
        Leaving: "ease-in duration-200"
          From: "opacity-100 translate-y-0 sm:scale-100"
          To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
      -->
      <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
          <div class="sm:flex sm:items-start">
            <div class="mx-auto flex h-50 w-50 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-50 sm:w-50">
              <!-- Heroicon name: outline/exclamation-triangle -->
              <!-- <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 10.5v3.75m-9.303 3.376C1.83 19.126 2.914 21 4.645 21h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 4.88c-.866-1.501-3.032-1.501-3.898 0L2.697 17.626zM12 17.25h.007v.008H12v-.008z" />
              </svg> -->
              <img class="h-50 w-50 rounded-full" src="{{url('')}}/assets/images/team/images.jpg"/>
            </div>
            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
              <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-title">email lmao</h3>
              <div class="mt-2">
                <form method="post" action="" >
                    <input class="font-light w-full leading-[1.15] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] my-1" type="text" placeholder="Full Name" name="name" required>
                    <input class="font-light w-full leading-[1.15] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] my-1" type="text" placeholder="Email" name="name" required>
                    <input class="font-light w-full leading-[1.15] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] my-1" type="text" placeholder="Phone No." name="name" required>
                    <textarea class="font-light w-full leading-[1.15] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] my-1" type="text" placeholder="Message" name="name" required>Message </textarea>                
                    
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
          <button type="button" class="inline-flex w-full justify-center rounded-md border border-transparent bg-[#405463] px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-white hover:text-[#405463] hover:drop-shadow-md hover:border-[#405463] sm:ml-3 sm:w-auto sm:text-sm send">Send</button>
          <button type="button" class="mt-3 inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-base font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm cancel">Cancel</button>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $('.but').on('click', function(){
        $('#modal-email').css('display', 'block')
    })

    $('.cancel').on('click', function(){
        $('#modal-email').css('display', 'none')
    })

</script>