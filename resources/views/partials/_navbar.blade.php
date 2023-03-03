<!-- ####################################### Start Navbar ########################################### -->
<nav
class="px-2 sm:px-4 py-2.5 bg-gradient-to-t from-cyan-500 to-cyan-800 min-w-full md:min-w-screen z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
<div class="container flex flex-wrap items-center justify-between mx-auto">
  <a href="/" class="flex items-center">
    <img src="{{asset('images/logo.png')}}" class="h-6 mr-3 sm:h-9">
    <span class="self-center text-xl font-semibold whitespace-nowrap text-amber-500">IMPERIAL</span><span
      class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">HOMES</span>
  </a>

  <div class="flex lg:order-2">
    <ul class="flex space-x-6 mr-6 text-lg">
        
        @auth   
        <button
        class="text-white bg-amber-500 hover:bg-amber-400 focus:ring-2 focus:outline-none focus:ring-amber-300 font-medium rounded-lg text-sm px-5 py-2 text-center mr-5 md:mr-0"><a
        href="/listings/create"
        class="text-white"
        >Post Properties</a
    ></button>  
    
<button id="multiLevelDropdownButton" data-dropdown-toggle="dropdown" class="text-white" type="button"> <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
<!-- Dropdown menu -->
<div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
   <ul class="py-2 text-sm text-black" aria-labelledby="multiLevelDropdownButton">
     <li>
       <a href="/dashboard" class="block px-4 py-2 hover:bg-gray-100">Dashboard</a>
     </li>
     <li>
       <a href="/listings/manage" class="block px-4 py-2 hover:bg-gray-100">Manage Properties</a>
   
     </li>
    
     <li>
       <form class="inline" method="POST" action="/logout">
         @csrf
       <button type="submit" class="block px-4 py-2 w-44 text-left hover:bg-gray-100">
       Sign out
     </button>
   </form>
     </li>
   </ul>
</div>
            
        {{-- <li>
            <a href="/listings/manage" class="hover:text-laravel"
                ><span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white"><i class="fa-solid fa-gear"></i>
                </span></a
            >
        </li>
        <li>
            <form class="inline" method="POST" action="/logout">
            @csrf
            <button type="submit">
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white" ><i class="fa-solid fa-right-from-bracket"></i></span>
            </button>
            </form> --}}
        </li>
        @else
        <li class="lg:text-sm">
            <a href="/register" class="text-white"
                ><i class="fa-solid fa-user-plus mr-3"></i> Register</a
            >
        </li>
        <li class="lg:text-sm">
            <a href="/login" class="text-white"
                ><i class="fa-solid fa-arrow-right-to-bracket mr-3"></i>
                Login</a
            >
        </li>
        @endauth
    </ul>
        

    <button data-collapse-toggle="navbar-sticky" type="button"
      class="inline-flex items-center p-2 text-sm text-amber-500 rounded-lg lg:hidden hover:bg-amber-100 focus:outline-none focus:ring-2 focus:ring-amber-200"
      aria-controls="navbar-sticky" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
        xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
          d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
          clip-rule="evenodd"></path>
      </svg>
    </button>
  </div>
  
  <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="navbar-sticky">
    <ul
      class="flex flex-col p-4 mt-4 lg:flex-row lg:space-x-8 lg:mt-0 lg:text-sm lg:font-medium lg:border-0">
      
      <li>
        <a href="/"
          class="block py-2 pl-3 pr-4 text-white rounded hover:text-white hover:bg-amber-500 lg:hover:bg-transparent lg:hover:text-amber-500 lg:p-0 focus:text-amber-500"
          aria-current="page"><i class="fa-solid fa-house"></i> HOME</a>
      </li>
      <li>
        <a href="#about-us"
          class="block py-2 pl-3 pr-4 text-white rounded hover:text-white hover:bg-amber-500 lg:hover:bg-transparent lg:hover:text-amber-500 lg:p-0"><i
            class="fa-solid fa-magnifying-glass"></i> ABOUT</a>
      </li>
      <li>
        <a href="/listings/property"
          class="block py-2 pl-3 pr-4 text-white rounded hover:text-white hover:bg-amber-500 lg:hover:bg-transparent lg:hover:text-amber-500 lg:p-0"><i
            class="fa-solid fa-city"></i> PROPERTIES</a>
      </li>
      <li>
        <a href="/contact"
          class="block py-2 pl-3 pr-4 text-white rounded hover:text-white hover:bg-amber-500 lg:hover:bg-transparent lg:hover:text-amber-500 lg:p-0"><i
            class="fa-solid fa-envelope"></i> CONTACTS</a>
      </li>
      
    </ul>
  </div>
</div>
</nav>
<!-- End Navbar -->