
<!DOCTYPE html>
    <html>
        <head>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="{{ mix('../resources/css/app.css') }}" rel="stylesheet">
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.10.2/dist/cdn.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body x-data="{openMenu : false}" id="pastel1">




<header class=" flex justify-between bg-black drop-shadow-sm py-4 px-8"  id="header">
                <button class="md:hidden" @click="openMenu = !openMenu">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" /></svg></button>



 
<!-- dsktop mneu-->
<nav class="hidden  md:flex text-white bg-black">
    <ul class="flex flex-row gap-3  ">
        <li class="inline-flex py-2 px-3 hover:bg-purple-300 hover:text-black rounded-lg">
            <a href="#" class="flex flex-row space-between slign-baseline">
  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
</svg>
Home
</a>
         </li>   
         <li class="inline-flex py-2 px-3 hover:bg-purple-300 hover:text-black  rounded-lg"> 
            <a href="#"  class="flex flex-row space-between slign-baseline"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ">
  <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
</svg>Favourites</a>
            </li>
           
            <li class="inline-flex py-2 px-3 hover:bg-purple-300 hover:text-black  rounded-lg">    
            <a href="#"  class="flex flex-row space-between slign-baseline"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
</svg>
Cart</a>
            </li>
            
            <li class="inline-flex py-2 px-3 hover:bg-purple-300 hover:text-black  rounded-lg">
            <a href="Profile"  class="flex flex-row space-between slign-baseline"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
</svg>
  {{ __('Profile') }}</a>
            </li>
            <li class="inline-flex py-2 px-3 hover:bg-purple-300 hover:text-black  rounded-lg">
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
<div id="test" class="flex flex-row">
<img src="img/5.jpg" class="" id="image" > 

</div>

<div class="w-full flex flex-col items-center justify-center mt-8" id="test">
  <div class="w-11/12 md:w-8/12 xl:w-1/2 h-auto p-5 rounded-3xl bg-black  border-2 border-white-600 ">
    <section class="w-full h-5 flex items-center ">
      <span class="w-10 h-full hidden md:flex items-cente">
        <i class="text-xl"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
  </svg></i> </span>
      <input id="border"  class="w-full h-10 font-[dm sans] text-2xl font-thin text-purple-300 md:pl-2 border-2 border-none focus:ring-0 bg-black " type="text"  placeholder="Search" /> 
      <button class="w-28 h-10 bg-purple-300 flex justify-center items-center rounded-2xl text-black-font-medium text-lg font-[dm-sans]">Search </button>
    </section>
  </div>
</div>













 <!--pop out nav-->
 <nav class="fixed top-0 right-0 bottom-0 left-0 backdrop-blur-sm z-10"  :hidden="!openMenu">

 <ul class="absolute top-0 bottom-0 left-0  w-10/12 py-4 bg-white drop-shadow-2xl z-10">
    <li class="border-b border-inherit"><a href="#" class="block p-4 hover:bg-purple-300 rounded flex flex-row space-between slign-baseline">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
</svg>

   
Home</a></li></div>
    <li class="border-b border-inherit "><a href="#" class="block p-4 hover:bg-purple-300 rounded flex flex-row space-between slign-baseline"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
</svg>Favourites</a></li>
    <li class="border-b border-inherit "><a href="#" class="block p-4 hover:bg-purple-300 rounded flex flex-row space-between slign-baseline"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
</svg>
Cart</a></li>
    <li class="border-b border-inherit " ><a href="Profile" class="block p-4 hover:bg-purple-300 rounded flex flex-row space-between slign-baseline">  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
</svg>
 {{ __('Profile') }}</a> </li>
    <li  class="border-b border-inherit ">
            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf
          <a href="{{ route('logout') }}" class="block p-4 hover:bg-purple-300 rounded flex flex-row space-between slign-baseline" @click.prevent="$root.submit();">
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


 

<div class="overflow-x-auto  whitespace-nowrap  mt-4 scrollbar-hide w-96 ml-auto mr-auto  justify-center"  id="categories">

<ul class=" gap-x-10  mt-auto flex flex-row ml-auto mr-auto">
      <li class="border-black-300 border-2 p-3 text-lg font-[dms-sans] font-medium rounded-3xl bg-black text-white ">
        <a href="#">
          Fantasy
        </a>
      </li>
      <li class="border-black-300 border-2 p-3 text-lg font-[dms-sans] text-white font-medium rounded-3xl bg-black text-white ">
        <a href="#">
        Sci-fi
        </a>
      </li>
      <li class="border-black-300 border-2 p-3 text-lg font-[dms-sans] font-medium rounded-3xl bg-black text-white ">
        <a href="#">
        Non-Fiction
        </a>
      </li>
      <li class="border-black-300 border-2 p-3 text-lg font-[dms-sans] font-medium rounded-3xl bg-black text-white ">
        <a href="#">
         biographies
        </a>
      </li>

      <li class="border-black-300 border-2 p-3 text-lg font-[dms-sans] font-medium rounded-3xl bg-black text-white ">
        <a href="#">
        Thriller
        </a>
      </li>

      <li class="border-black-300 border-2 p-3 text-lg font-[dms-sans] font-medium rounded-3xl bg-black text-white ">
        <a href="#">
         Short-story
        </a>
      </li>

      <li class="border-black-300 border-2 p-3 text-lg font-[dms-sans] font-medium rounded-3xl bg-black text-white ">
        <a href="#">
        Mystery
        </a>
      </li>
      
    </ul>

</div>

</br>





<div class="" id="pastel1">
  
  <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
    <h2 class="sr-only">Products</h2>

    <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8" >
    
      
         
    @php 
    $i =1;
    @endphp

    @foreach ($data as $product)
      <a href="details/{{$product['id']}}" class="group bg-white-300 p-3 rounded-lg shadow-md shadow-purple-100" id="pastel">
       <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
          <img src="{{ asset('./storage/images/'.$product->image) }}" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="h-70 w-full object-cover object-center group-hover:opacity-75">
        </div>
      <div class="flex flex-col">  <h3 class="mt-4 text-sm text-gray-700 font-medium">{{$product ->name}}</h3>
        <p class="mt-1 text-sm  text-gray-900">{{$product -> author}}</p>
        <p class="mt-1 text-sm  text-gray-900">LKR {{$product -> price}}</p>
        <button class="flex flex-row mt-2 ml-2 bg-purple-300 mr-auto ml-auto justify-center p-3 w-full rounded-lg font-[dm-sans] hover:bg-white border-2 border-purple-500 gap-1"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
</svg>Add to cart</button></div>


      </a>




      @endforeach


      <!-- More products... -->
    </div>
  </div>
</div>



</br>












<!-- component -->
<!--Foooter -->
<footer>
<section class="bg-black text-white">
    <div class="max-w-screen-xl px-4 py-12 mx-auto space-y-8 overflow-hidden sm:px-6 lg:px-8">
        <nav class="flex flex-column justify-center -mx-5 -my-2">
            <div class="px-5 py-2">
                <a href="#" class="text-base leading-6 text-white hover:text-purple-900">
                    Home
                </a>
            </div>
            <div class="px-5 py-2">
                <a href="#" class="text-base leading-6 text-white hover:text-purple-900">
                    Contact
                </a>
            </div>
            <div class="px-5 py-2">
                <a href="#" class="text-base leading-6 text-white hover:text-purple-900">
                    Help
                </a>
            </div>
            
            <div class="px-5 py-2">
                <a href="#" class="text-base leading-6 text-white hover:text-purple-900">
                    Contact
                </a>
            </div>
            <div class="px-5 py-2">
                <a href="#" class="text-base leading-6 text-white hover:text-purple-900">
                    Terms
                </a>
            </div>
        </nav>
      
</section>
</footer>
</body>
</html>

