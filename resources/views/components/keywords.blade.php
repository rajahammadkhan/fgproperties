@php 
    use App\Models\keywords;
    use App\Models\Projects;
    $keywords = keywords::get();
@endphp
<style type="text/css">
    @media(max-device-width: 800px){
        .swiper-button-next, .swiper-button-prev {
            display: none;
        }
    }
.swiper-slide {
        text-align: center;
        font-size: 18px;
        padding-top: 10px;
        padding-bottom: 10px;
        width: auto !important;
        margin-left:10px ;
        margin-right:10px ;
      }

      .swiper-button-next::after, .swiper-button-prev::after {
        font-family: swiper-icons;
        font-size: 20px !important;
        text-transform: none !important;
        letter-spacing: 0;
        font-variant: initial;
        line-height: 1;
        /*font-size: initial;*/
        color: black;
        background-color: gray;
        padding: 8px;
        border-radius: 100px;
        background: white;

      }
      .swiper-button-next, .swiper-button-prev {
        color: #0b2c3d !important;
        opacity: 1 !important;
        background-color: white;
        border-radius: 25%;
        padding: .2rem;
        border: 1px solid white;
        /*font-size: 10px;*/
      }
      .button-disabled, .swiper-button-prev.swiper-button-disabled{
        opacity: 1 !important;
        background-color: white;
        border: 1px solid white;
      }

       .button-disabled, .swiper-button-next.swiper-button-disabled{
        opacity: 1 !important;
        background-color: white;
        border: 1px solid white;
      }
       .swiper-button-next{
        margin-left: 0px;
       }
       .swiper-button-prev {
        margin-right: 0px;
       }
      
      #btnswiper{
        color: white !important;
        font-size: 15px;
        border: none !important;
        border-radius: 20px;
        padding: 5px;
        padding-left: 15px;
        padding-right: 15px;
        display: flex;
        flex-wrap: wrap;
        background-color: rgb(11, 44, 61);
        font-family: Open Sans, sans-serif;
      }
      /*.buttonSwiper{
        background: rgba(237,252,250,0.9);
        border: 1px solid;
        border-radius: 20px;
        border-color: rgb(229, 231, 235);
      }*/
</style>

<div>
    <h2 class="font-lora text-primary text-[25px] sm:text-[25px] capitalize font-medium">
        <b>{{ (request()->segment(1) == 'Project')  ? 'Search New Projects' : 'Search Properties' }}<!-- Search New Projects --></b><span class="text-secondary">.</span>
    </h2>
<!--     <div class="flex flex-nowrap overflow-hidden rounded bg-[rgb(237,252,250,0.9)] z-[99999] py-2 border border-solid " id="swiper">
        @foreach($keywords as $keyword)
        @if(request()->segment(1) == 'Project' || request()->segment(1) == 'Buy' )
             @php $req = route('projects.search') @endphp
        @else
            @php $req = route('rent.search') @endphp
        @endif
            <div class="swiper-slide">
                <a href="{{$req}}" ><input class="mx-1 cursor-pointer" type="submit"  id="btnswiper" value="{{$keyword->keyword}} {{'('.rand(10,100).')'}}"/></a>
            </div>
        @endforeach 
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div> -->
</div>
    <div class="flex flex-nowrap overflow-hidden rounded bg-[rgb(237,252,250,0.9)] z-[99999] py-2 border border-solid rounded-bl-[15px] rounded-br-[15px] rounded-tr-[15px] rounded-tl-[15px]">
      <div class="swiper buttonSwiper">
        <div class="swiper-wrapper" style="padding-right: 5%;padding-left: 5%;">
             @foreach($keywords as $keyword)
            @if(request()->segment(1) == 'Project' || request()->segment(1) == 'Buy' )
                 @php $req = route('projects.search') @endphp
            @else
                @php $req = route('rent.search') @endphp
            @endif
          <div class="swiper-slide">
            <a href="{{$req}}" ><input class="mx-1 cursor-pointer" type="submit"  id="btnswiper" value="{{Projects::search($keyword->keyword)->get()->count() > 0 ? $keyword->keyword.' ('. Projects::search($keyword->keyword)->get()->count() .')' : $keyword->keyword}}"/></a>
          </div>
            @endforeach
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>

     <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script> <!-- yeh nhi lagana -->

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".buttonSwiper", {
        slidesPerView: 3,
        spaceBetween: 1,
        mousewheel: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true
        },
        breakpoints: {
          640: {
            slidesPerView: 6,
            spaceBetween: 2
          },
          768: {
            slidesPerView: 6,
            spaceBetween: 2
          },
          1024: {
            slidesPerView: 10,
            spaceBetween: 2
          }
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev"
        }
      });
    </script>