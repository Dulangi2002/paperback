
<!DOCTYPE html>
    <html>
        <head>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="{{ mix('../resources/css/app.css') }}" rel="stylesheet">
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.10.2/dist/cdn.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body x-data="{openMenu : false}">




<header class=" flex justify-between bg-white drop-shadow-sm py-4 px-8"  id="header">
                <button class="md:hidden" @click="openMenu = !openMenu">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" /></svg></button>



 
<!-- dsktop mneu-->
<nav class="hidden  md:flex ">
    <ul class="flex flex-row gap-3">
        <li class="inline-flex py-2 px-3 hover:bg-indigo-300 rounded">
            <a href="#" class="flex flex-row space-between slign-baseline">
  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
</svg>
Home
</a>
         </li>   
         <li class="inline-flex py-2 px-3 hover:bg-indigo-300 rounded "> 
            <a href="#"  class="flex flex-row space-between slign-baseline"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ">
  <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
</svg>Favourites</a>
            </li>
           
            <li class="inline-flex py-2 px-3 hover:bg-indigo-300 rounded">    
            <a href="#"  class="flex flex-row space-between slign-baseline"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
</svg>
Cart</a>
            </li>
            
            <li class="inline-flex py-2 px-3 hover:bg-indigo-300 rounded">
            <a href="Profile"  class="flex flex-row space-between slign-baseline"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
</svg>
  {{ __('Profile') }}</a>
            </li>
            <li class="inline-flex py-2 px-3 hover:bg-indigo-300 rounded">
            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <a href="{{ route('logout') }}"
                                         @click.prevent="$root.submit();"  class="flex flex-row space-between slign-baseline">
                                         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
</svg>

                                    {{ __('Log Out') }}</a>
            </form>
        
        </li>


</nav>
</header>


<div class="w-full flex flex-col items-center justify-center mt-20" id="test">
  <div class="w-11/12 md:w-8/12 xl:w-1/2 h-auto p-5 rounded-3xl bg-white  border-2 border-purple-600 ">
    <section class="w-full h-5 flex items-center border-none focus:border-none  focus:outline-none">
      <span class="w-10 h-full hidden md:flex items-center border-none focus:border-none  focus:outline-none">
        <i class="text-xl"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
  </svg></i> </span>
      <input id="border"  class="w-full h-10 font-medium  md:pl-2 border-none focus:border-none  focus:outline-none" type="text"  placeholder="Search" /> 
      <button class="w-28 h-10 bg-purple-300 flex justify-center items-center rounded-2xl text-black-font-medium font-[dm-sans]">Search </button>
    </section>
  </div>
</div>













 <!--pop out nav-->
 <nav class="fixed top-0 right-0 bottom-0 left-0 backdrop-blur-sm z-10"  :hidden="!openMenu">

 <ul class="absolute top-0 bottom-0 left-0  w-10/12 py-4 bg-white drop-shadow-2xl z-10">
    <li class="border-b border-inherit"><a href="#" class="block p-4 hover:bg-indigo-300 rounded flex flex-row space-between slign-baseline">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
</svg>

   
Home</a></li></div>
    <li class="border-b border-inherit "><a href="#" class="block p-4 hover:bg-indigo-300 rounded flex flex-row space-between slign-baseline"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
</svg>Favourites</a></li>
    <li class="border-b border-inherit "><a href="#" class="block p-4 hover:bg-indigo-300 rounded flex flex-row space-between slign-baseline"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
</svg>
Cart</a></li>
    <li class="border-b border-inherit " ><a href="Profile" class="block p-4 hover:bg-indigo-300 rounded flex flex-row space-between slign-baseline">  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
</svg>
 {{ __('Profile') }}</a> </li>
    <li  class="border-b border-inherit ">
            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf
          <a href="{{ route('logout') }}" class="block p-4 hover:bg-indigo-300 rounded flex flex-row space-between slign-baseline" @click.prevent="$root.submit();">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
          </svg>{{ __('Log Out') }}
          </a>
          </form>
        
     </li>

</ul>



<!---close button-->

<button class="absolute top-0 right-0 bottom-0 left-0" @click="openMenu = !openMenu">
<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 absolute top-2 right-2">
  <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
</svg>

</button>

</nav>


<!--


       

    
  <nav class=" ">
    <ul class="flex flex-row justify-start gap-x-10 pl-10 pt-5">
      <li class="border-solid border-2 border-black border-t-0 border-l-0 border-r-1 border-b-0 pr-5 ">
        <a href="#">
          Home
        </a>
      </li>
      <li class="border-solid border-2 border-black border-t-0 border-l-0 border-r-1 border-b-0 pr-5 ">
        <a href="#">
        Favourites
        </a>
      </li>
      <li class="border-solid border-2 border-black border-t-0 border-l-0 border-r-1 border-b-0 pr-5  ">
        <a href="#">
        Cart
        </a>
      </li>
      <li class="border-solid border-2 border-black border-t-0 border-l-0 border-r-1 border-b-0 pr-5 ">
       
      <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <a href="{{ route('logout') }}"
                                         @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                <a>
                            </form>
      </li>
      
    </ul>
</nav>

</header>-->
<!-- component -->
<!-- This is an example component -->
 

<div class="overflow-x-auto ml-auto mr-auto whitespace-nowrap  scrollbar-hide pt-20 w-1/2 "  id="categories">

<ul class="flex flex-row justify-start gap-x-10 pl-10 mt-auto">
      <li class="border-purple-600 border-2 p-2  rounded-3xl px-4">
        <a href="#">
          Fantasy
        </a>
      </li>
      <li class="border-purple-600 border-2 p-2 rounded-3xl  px-4">
        <a href="#">
        Sci-fi
        </a>
      </li>
      <li class="border-purple-600 border-2 p-2 rounded-3xl  px-4">
        <a href="#">
        Non-Fiction
        </a>
      </li>
      <li class="border-purple-600 border-2 p-2 rounded-3xl  px-4">
        <a href="#">
         biographies
        </a>
      </li>

      <li class="border-purple-600 border-2 p-2 rounded-3xl  px-4">
        <a href="#">
        Thriller
        </a>
      </li>

      <li class="border-purple-600 border-2 p-2 rounded-3xl  px-4">
        <a href="#">
         Short-story
        </a>
      </li>

      <li class="border-purple-600 border-2 p-2 rounded-3xl  px-4">
        <a href="#">
        Mystery
        </a>
      </li>
      
    </ul>

</div>

</br>
<!--
<div class="ml-auto mr-auto justify-center ">

        <label class="relative block">
            <button class="absolute inset-y-0 left-0 flex items-center pl-3 w-500 ml-auto mr-auto">
                <svg class="h-5 w-5 fill-black" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30"
                    height="30" viewBox="0 0 30 30">
                    <path
                        d="M 13 3 C 7.4889971 3 3 7.4889971 3 13 C 3 18.511003 7.4889971 23 13 23 C 15.396508 23 17.597385 22.148986 19.322266 20.736328 L 25.292969 26.707031 A 1.0001 1.0001 0 1 0 26.707031 25.292969 L 20.736328 19.322266 C 22.148986 17.597385 23 15.396508 23 13 C 23 7.4889971 18.511003 3 13 3 z M 13 5 C 17.430123 5 21 8.5698774 21 13 C 21 17.430123 17.430123 21 13 21 C 8.5698774 21 5 17.430123 5 13 C 5 8.5698774 8.5698774 5 13 5 z">
                    </path>
                </svg>
</button>
            <input
                class="w-50 bg-white placeholder:font-italitc border border-slate-300 rounded-full py-2 pl-10 pr-4 focus:outline-none  "
                placeholder="Enter your keyword to search" type="text" />
        </label>

</div>

<br>

<div class="bg-white">
  <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
    <h2 class="sr-only">Products</h2>

    <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
      <a href="#" class="group">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
          <img src="img/caraval.jpg"  class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700">Caraval</h3>
        <p class="mt-1 text-lg font-medium text-gray-900">LKR 2000</p>
      </a>
      <a href="#" class="group">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
          <img src="img/philosophers.jpg" class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700">Harry potter and the philosopher's stone</h3>
        <p class="mt-1 text-lg font-medium text-gray-900">LKR 2435</p>
      </a>
      <a href="#" class="group">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
          <img src="img/sorcery.jpg" class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700">Sorcery of thorns</h3>
        <p class="mt-1 text-lg font-medium text-gray-900">LKR 2270</p>
      </a>
   

   
    </div>
  </div>
</div>



</br>

<div class="bg-white">
  <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
    <h2 >Products</h2>

    <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
      <a href="#" class="group">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
          <img src="img/The fellowship of the Ring.jpg" class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700">The fellowship of the ring</h3>
        <p class="mt-1 text-lg font-medium text-gray-900">LKR 1500</p>
      </a>
      <a href="#" class="group">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
          <img src="img/the way of kings.jpg" class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700">The way of kings</h3>
        <p class="mt-1 text-lg font-medium text-gray-900">LKR 2450</p>
      </a>
      <a href="#" class="group">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
          <img src="img/Dune.jpg" class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700">Dune</h3>
        <p class="mt-1 text-lg font-medium text-gray-900">LKR 1545</p>
      </a>
  
    </div>
  </div>
</div>-->


<!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->

@php 
    $i =1;
    @endphp

<div class="py-6">
  <div class="flex max-lg:flex-col min-w-lg bg-white  rounded-lg overflow-hidden">
    <div class="flex-1 max-lg:flex-col" >
    <img src="{{asset('./storage/images/'.$product->image)}}" class=" bg-cover ml-auto mr-auto justify-center w-60 lg:ml-56">
    </div> 
    <div class="flex-1 max-lg:flex-col  p-4 my-auto mx-auto lg:mr-56 md:ml-auto md:mr-auto md:justify-center ">
      <h1 class="text-gray-900 font-bold text-2xl">{{$product ->name}}</h1>
      <h3 class="text-gray-900 font-bold text-md pb-5">{{$product ->author}}</h3>
      
      <p class="mt-2 text-gray-600 text-sm">{{$product ->description}}</p>
      <div class="flex item-center mt-2">
        <svg class="w-5 h-5 fill-current text-gray-700" viewBox="0 0 24 24">
          <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z"/>
        </svg>
        <svg class="w-5 h-5 fill-current text-gray-700" viewBox="0 0 24 24">
          <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z"/>
        </svg>
        <svg class="w-5 h-5 fill-current text-gray-700" viewBox="0 0 24 24">
          <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z"/>
        </svg>
        <svg class="w-5 h-5 fill-current text-gray-500" viewBox="0 0 24 24">
          <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z"/>
        </svg>
        <svg class="w-5 h-5 fill-current text-gray-500" viewBox="0 0 24 24">
          <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z"/>
        </svg>
      </div>
      <div class="flex item-center flex-col justify-between mt-3">
        <h1 class="text-gray-700 font-bold text-xl">LKR {{$product ->price}}</h1>

        <button class="px-3 py-2 bg-purple-300  text-black text-xs font-bold uppercase rounded w-56 mb-2 mt-2">Add to Cart</button>
        <button class="px-3 py-2 bg-purple-300  text-black text-xs font-bold uppercase rounded w-56">Reviews</button>

      </div>

      
    </div>
  </div>
</div>

      
    </div>
</div>
</div>





</body>
</html>


