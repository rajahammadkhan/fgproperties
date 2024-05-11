@extends('layouts.master')



@section('top-styles')
<!-- <style type="text/css">
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
</style> -->
<style>
.hasImage:hover section {
  background-color: rgba(5, 5, 5, 0.4);
}
.hasImage:hover button:hover {
  background: rgba(5, 5, 5, 0.45);
}

#overlay p,
i {
  opacity: 0;
}

#overlay.draggedover {
  background-color: rgba(255, 255, 255, 0.7);
}
#overlay.draggedover p,
#overlay.draggedover i {
  opacity: 1;
}

.group:hover .group-hover\:text-blue-800 {
  color: #2b6cb0;
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
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
@endsection

@section('content')        
    <section class="bg-no-repeat bg-center bg-cover bg-[#FFF6F0] lg:h-[350px] flex flex-wrap items-center relative before:absolute before:inset-0 before:content-[''] before:bg-[#000000] before:opacity-[50%]" style="background-image: url('{{url('')}}/assets/images/breadcrumb/sale.png');" id="bannerimages">
            <div class="container">
                <div class="grid grid-cols-1 ">
                    <div class="col-span-12 ">
                        <div class="max-w-[700px]  mx-auto text-center text-white relative z-[1]">
                            <!-- <div class="mb-5"><span class="text-base block sm:text-[35px]">Sale</span></div> -->
                            <h1 class="font-lora text-[32px] sm:text-[50px] md:text-[68px] lg:text-[50px] leading-tight font-medium md:mt-[-0rem]">
                                Sell  
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

        <div class="relative">

        <!-- Hero section end -->

        @if(session()->has('message'))
                                    <div class="container w-[50rem] mt-[2rem] mb-[3rem] text-center" id="aler">
                                        <div class="bg-[#294159] border border-[#294159] text-[white] px-4 py-3 rounded relative" role="alert">
                                          <strong class="font-bold">THANK YOU!</strong>
                                          <span class="block sm:inline">{{ session()->get('message') }}</span>
                                        </div>
                                    </div>
                                @endif

        <div>
            <div class="container py-[50px] lg:py-[90px] mb-[-100px]">
                
                    <div class="grid grid-cols-12 gap-x-[30px] mb-[-30px] items-end">
                        <div class="col-span-12 lg:col-span-12 mb-[30px]">
                            <div>
                                <h2 class="font-lora text-primary text-[24px] sm:text-[28px] leading-[1.277] capitalize mb-[10px] font-medium">
                                    Tell us about yourself

                                </h2>
                            </div>
                            <form  method="post"  action="{{ route('sell') }}" enctype="multipart/form-data">
                                @csrf
                            <div class="grid grid-cols-12 gap-x-[20px] gap-y-[30px]">

                                <div class="col-span-12 md:col-span-4">
                                    <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " type="text" placeholder="First Name" name="name">
                                </div>

                                <div class="col-span-12 md:col-span-4">
                                    <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " type="email" placeholder="Email Address" name="email">
                                </div>

                                <div class="col-span-12 md:col-span-4">
                                    <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " type="text" placeholder="Phone number" name="number">
                                </div>

                                <div class="col-span-12 md:col-span-12">
                                    <h2 class="font-lora text-primary text-[24px] sm:text-[28px] leading-[1.277] capitalize mb-[10px] font-medium">
                                        Tell us about your property

                                    </h2>
                                </div>

                                <div class="col-span-12 md:col-span-4 mt-[-20px]">
                                    <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " type="text" placeholder="Location" name="url">
                                </div>

                                <div class="col-span-12 md:col-span-4 mt-[-20px]">
                                    <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " type="text" placeholder="Property Type" name="property_type">
                                </div>

                                <div class="col-span-12 md:col-span-4 mt-[-20px]">
                                    <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " type="text" placeholder="Bed" name="bedrooms">
                                </div>

                                <div class="col-span-12 md:col-span-4 mt-[-20px]">
                                    <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " type="text" placeholder="Size Sqft" name="size_sqft">
                                </div>

                                <div class="col-span-12 md:col-span-4 mt-[-20px]">
                                    <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " type="text" placeholder="Unit No" name="unit_no">
                                </div>

                                <div class="col-span-12 md:col-span-4 mt-[-20px]">
                                    <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-[#FD6400] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " type="text" placeholder="Price" name="price">
                                </div>

                                <div class="col-span-12 md:col-span-6">
                                    <h2 class="font-lora text-primary text-[24px] sm:text-[28px] leading-[1.277] capitalize mb-[10px] font-medium">
                                        Upload Title Deeds <span style="font-size: 20px; color:gray;">(Optional)</span>

                                    </h2>
                                    <div x-data="showImage()" class="flex items-center ">
                                        <div class="bg-white rounded-lg shadow-xl md:w-9/12 lg:w-1/2">
                                            <div class="m-4">
                                                <label class="inline-block mb-2 text-black">Upload
                                                    Image (jpg,png)</label>
                                                <div class="flex items-center justify-center w-full">
                                                    <label
                                                        class="flex flex-col w-full h-32 border-2 border-dashed hover:bg-gray-100 hover:border-gray-300">
                                                        <div class="relative flex flex-col items-center justify-center pt-7">
                                                            <img id="preview" class="absolute inset-0 w-full h-32">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-gray-400 group-hover:text-gray-600" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M4 3a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"/></svg>
                                                            <p class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">
                                                                Select a photo</p>
                                                        </div>
                                                        <input type="file" class="opacity-0" accept="image/*" name="title_image" @change="showPreview(event)" />
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-span-12 md:col-span-6">
                                    <h2 class="font-lora text-primary text-[24px] sm:text-[28px] leading-[1.277] capitalize mb-[10px] font-medium">
                                        Upload Passport <span style="font-size: 20px; color:gray;">(Optional)</span>

                                    </h2>
                                    <div x-data="showImage1()" class="flex items-center ">
                                        <div class="bg-white rounded-lg shadow-xl md:w-9/12 lg:w-1/2">
                                            <div class="m-4">
                                                <label class="inline-block mb-2 text-black">Upload
                                                    Image (jpg,png)</label>
                                                <div class="flex items-center justify-center w-full">
                                                    <label
                                                        class="flex flex-col w-full h-32 border-2 border-dashed hover:bg-gray-100 hover:border-gray-300">
                                                        <div class="relative flex flex-col items-center justify-center pt-7">
                                                            <img id="preview1" class="absolute inset-0 w-full h-32">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-gray-400 group-hover:text-gray-600" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M4 3a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"/></svg>
                                                            <p class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">
                                                                Select a photo</p>
                                                        </div>
                                                        <input type="file" class="opacity-0" accept="image/*" name="passport_image" @change="showPreview1(event)" />
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                 <div class="col-span-12 md:col-span-12">
                                    <h2 class="font-lora text-primary text-[24px] sm:text-[28px] leading-[1.277] capitalize mb-[10px] font-medium">
                                        Upload Images <span style="font-size: 20px; color:gray;">(Optional)</span>

                                    </h2>
                                    <div class="">
                                      <main class="container ">
                                        <!-- file upload modal -->
                                        <article aria-label="File Upload Modal" class="relative h-full flex flex-col bg-white shadow-xl rounded-md" ondrop="dropHandler(event);" ondragover="dragOverHandler(event);" ondragleave="dragLeaveHandler(event);" ondragenter="dragEnterHandler(event);">
                                          <!-- overlay -->
                                          <div id="overlay" class="w-full h-full absolute top-0 left-0 pointer-events-none z-50 flex flex-col items-center justify-center rounded-md">
                                            <i>
                                              <svg class="fill-current w-12 h-12 mb-3 text-blue-700" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19.479 10.092C19.267 6.141 16.006 3 12 3c-4.005 0-7.267 3.141-7.479 7.092A5.499 5.499 0 0 0 5.5 21h13a5.499 5.499 0 0 0 .979-10.908zM12 9l4 4h-3v4h-2v-4H8l4-4z"/></svg>
                                            </i>
                                            <p class="text-lg text-blue-700">Drop files to upload</p>
                                          </div>

                                          <!-- scroll area -->
                                          <section class="h-full overflow-auto p-8 w-full h-full flex flex-col">
                                            <header class="border-dashed border-2 border-gray-400 py-12 flex flex-col justify-center items-center">
                                              <p class="mb-3 font-semibold text-gray-900 flex flex-wrap justify-center">
                                                <span>Drag and drop your</span>&nbsp;<span>files anywhere or</span>
                                              </p>
                                              <input id="hidden-input" type="file" name="multi_images[]" multiple class="hidden" />
                                              <p id="button" class="mt-2 rounded-sm px-3 py-1 bg-gray-200 hover:bg-gray-300 focus:shadow-outline focus:outline-none">
                                                Upload a file
                                              </p>
                                            </header>

                                            <h1 class="pt-8 pb-3 font-semibold sm:text-lg text-gray-900">
                                              To Upload
                                            </h1>

                                            <ul id="gallery" class="flex flex-1 flex-wrap -m-1">
                                              <li id="empty" class="h-full w-full text-center flex flex-col items-center justify-center items-center">
                                                <img class="mx-auto w-32" src="https://user-images.githubusercontent.com/507615/54591670-ac0a0180-4a65-11e9-846c-e55ffce0fe7b.png" alt="no data" />
                                                <span class="text-small text-gray-500">No files selected</span>
                                              </li>
                                            </ul>
                                          </section>
                                        </article>
                                      </main>
                                    </div>

                                        <!-- using two similar templates for simplicity in js code -->
                                    <template id="file-template">
                                      <li class="block p-1 w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/6 xl:w-1/8 h-24">
                                        <article tabindex="0" class="group w-full h-full rounded-md focus:outline-none focus:shadow-outline elative bg-gray-100 cursor-pointer relative shadow-sm">
                                          <img alt="upload preview" class="img-preview hidden w-full h-full sticky object-cover rounded-md bg-fixed" />

                                          <section class="flex flex-col rounded-md text-xs break-words w-full h-full z-20 absolute top-0 py-2 px-3">
                                            <h1 class="flex-1 group-hover:text-blue-800"></h1>
                                            <div class="flex">
                                              <span class="p-1 text-blue-800">
                                                <i>
                                                  <svg class="fill-current w-4 h-4 ml-auto pt-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M15 2v5h5v15H4V2h11zm1-2H2v24h20V6l-6-6z"/></svg>
                                                </i>
                                              </span>
                                              <p class="p-1 size text-xs text-gray-700"></p>
                                              <button class="delete ml-auto focus:outline-none hover:bg-gray-300 p-1 rounded-md text-gray-800">
                                                <svg class="pointer-events-none fill-current w-4 h-4 ml-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path class="pointer-events-none" d="m3 6 3 18h12l3-18H3zm19-4v2H2V2h5.711c.9 0 1.631-1.099 1.631-2h5.316c0 .901.73 2 1.631 2H22z"/></svg>
                                              </button>
                                            </div>
                                          </section>
                                        </article>
                                      </li>
                                    </template>

                                    <template id="image-template">
                                      <li class="block p-1 w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/6 xl:w-1/8 h-24">
                                        <article tabindex="0" class="group hasImage w-full h-full rounded-md focus:outline-none focus:shadow-outline bg-gray-100 cursor-pointer relative text-transparent hover:text-white shadow-sm">
                                          <img alt="upload preview" class="img-preview w-full h-full sticky object-cover rounded-md bg-fixed" />

                                          <section class="flex flex-col rounded-md text-xs break-words w-full h-full z-20 absolute top-0 py-2 px-3">
                                            <h1 class="flex-1"></h1>
                                            <div class="flex">
                                              <span class="p-1">
                                                <i>
                                                  <svg class="fill-current w-4 h-4 ml-auto pt-" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M5 8.5a1.5 1.5 0 1 1 3.001.001A1.5 1.5 0 0 1 5 8.5zm9 .5-2.519 4L9 11.04 5 17h14l-5-8zm8-4v14H2V5h20zm2-2H0v18h24V3z"/></svg>
                                                </i>
                                              </span>

                                              <p class="p-1 size text-xs"></p>
                                              <button class="delete ml-auto focus:outline-none hover:bg-gray-300 p-1 rounded-md">
                                                <svg class="pointer-events-none fill-current w-4 h-4 ml-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path class="pointer-events-none" d="m3 6 3 18h12l3-18H3zm19-4v2H2V2h5.711c.9 0 1.631-1.099 1.631-2h5.316c0 .901.73 2 1.631 2H22z"/></svg>
                                              </button>
                                            </div>
                                          </section>
                                        </article>
                                      </li>
                                    </template>
                                </div>
                                <div class="col-span-12 mb-[0px] order-2 lg:order-none">
                                <center>
                                    <button type="submit" class="before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[30px] py-[15px] capitalize font-medium text-white text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-primary after:rounded-md after:transition-all mb-[30px] lg:mb-0">Submit</button>
                                    <p class="form-messege mt-3"></p>
                                    </center>
                                </div>
                                </form>

                            </div>
                        </div>
                        
                    </div>
                

            </div>
        </div>




@endsection

@section('bottom-mid-scripts')

@endsection

@section('bottom-bot-scripts')
<script>
const fileTempl = document.getElementById("file-template"),
  imageTempl = document.getElementById("image-template"),
  empty = document.getElementById("empty");

// use to store pre selected files
let FILES = {};

// check if file is of type image and prepend the initialied
// template to the target element
function addFile(target, file) {
  const isImage = file.type.match("image.*"),
    objectURL = URL.createObjectURL(file);

  const clone = isImage
    ? imageTempl.content.cloneNode(true)
    : fileTempl.content.cloneNode(true);

  clone.querySelector("h1").textContent = file.name;
  clone.querySelector("li").id = objectURL;
  clone.querySelector(".delete").dataset.target = objectURL;
  clone.querySelector(".size").textContent =
    file.size > 1024
      ? file.size > 1048576
        ? Math.round(file.size / 1048576) + "mb"
        : Math.round(file.size / 1024) + "kb"
      : file.size + "b";

  isImage &&
    Object.assign(clone.querySelector("img"), {
      src: objectURL,
      alt: file.name
    });

  empty.classList.add("hidden");
  target.prepend(clone);

  FILES[objectURL] = file;
}

const gallery = document.getElementById("gallery"),
  overlay = document.getElementById("overlay");

// click the hidden input of type file if the visible button is clicked
// and capture the selected files
const hidden = document.getElementById("hidden-input");
document.getElementById("button").onclick = () => hidden.click();
hidden.onchange = (e) => {
  for (const file of e.target.files) {
    addFile(gallery, file);
  }
};

// use to check if a file is being dragged
const hasFiles = ({ dataTransfer: { types = [] } }) =>
  types.indexOf("Files") > -1;

// use to drag dragenter and dragleave events.
// this is to know if the outermost parent is dragged over
// without issues due to drag events on its children
let counter = 0;

// reset counter and append file to gallery when file is dropped
function dropHandler(ev) {
  ev.preventDefault();
  for (const file of ev.dataTransfer.files) {
    addFile(gallery, file);
    overlay.classList.remove("draggedover");
    counter = 0;
  }
}

// only react to actual files being dragged
function dragEnterHandler(e) {
  e.preventDefault();
  if (!hasFiles(e)) {
    return;
  }
  ++counter && overlay.classList.add("draggedover");
}

function dragLeaveHandler(e) {
  1 > --counter && overlay.classList.remove("draggedover");
}

function dragOverHandler(e) {
  if (hasFiles(e)) {
    e.preventDefault();
  }
}

// event delegation to caputre delete events
// fron the waste buckets in the file preview cards
gallery.onclick = ({ target }) => {
  if (target.classList.contains("delete")) {
    const ou = target.dataset.target;
    document.getElementById(ou).remove(ou);
    gallery.children.length === 1 && empty.classList.remove("hidden");
    delete FILES[ou];
  }
};

// print all selected files
document.getElementById("submit").onclick = () => {
  alert(`Submitted Files:\n${JSON.stringify(FILES)}`);
  console.log(FILES);
};

// clear entire selection
document.getElementById("cancel").onclick = () => {
  while (gallery.children.length > 0) {
    gallery.lastChild.remove();
  }
  FILES = {};
  empty.classList.remove("hidden");
  gallery.append(empty);
};

</script>
<script>
            function showImage() {
                return {
                    showPreview(event) {
                        if (event.target.files.length > 0) {
                            var src = URL.createObjectURL(event.target.files[0]);
                            var preview = document.getElementById("preview");
                            preview.src = src;
                            preview.style.display = "block";
                        }
                    }
                }
            }

            function showImage1() {
                return {
                    showPreview1(event) {
                        if (event.target.files.length > 0) {
                            var src = URL.createObjectURL(event.target.files[0]);
                            var pre = document.getElementById("preview1");
                            pre.src = src;
                            pre.style.display = "block";
                        }
                    }
                }
            }
        </script>

          <script type="text/javascript">
      $("#aler").show();
        setTimeout(function() { $("#aler").hide(); }, 3000);
  </script>
@endsection
