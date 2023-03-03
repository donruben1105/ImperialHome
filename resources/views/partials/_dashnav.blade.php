<aside class="static  bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
    <div class="p-6">
      <a
        href="/dashboard"
        class="text-white text-3xl font-semibold uppercase hover:text-gray-300"
        >Admin</a
      >
    </div>
    <nav class="text-white text-base font-semibold pt-3">
      <a
      href="/"
      class="flex items-center text-white py-4 pl-6 nav-item"
    >
    <i class="fa-solid fa-house mr-3"></i>
      Home
    </a>
      <a
        href="/dashboard"
        class="flex items-center text-white py-4 pl-6 nav-item"
      >
        <i class="fas fa-tachometer-alt mr-3"></i>
        Dashboard
      </a>
      <a
        href="/admin/register"
        class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item"
      >
      <i class="fa-solid fa-plus mr-3"></i>
        Add Admin
      </a>
      {{-- <a
        href="/dashboard/table"
        class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item"
      >
        <i class="fas fa-table mr-3"></i>
        Property Status
      </a> --}}
      {{-- dropdown --}}
      <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover"
        class="flex items-center w-60 text-white py-4 pl-6 nav-item"
        type="button"><i class="fa-solid fa-caret-down mr-5"></i> Property Status</button>
    <!-- Dropdown menu -->
    <div id="dropdownHover"
        class="z-10 hidden  rounded-lg w-44 bg-sidebar">
        <ul class="py-2 text-md text-white" aria-labelledby="dropdownHoverButton">
            <li>
                <a href="/dashboard/table/sale" class="block px-4 py-2 hover:bg-gray-100 rounded hover:bg-gray-600">For
                    Sale</a>
            </li>
            <li>
                <a href="/dashboard/table/rent" class="block px-4 py-2 hover:bg-gray-100 rounded hover:bg-gray-600">For
                    rent</a>
            </li>
            <li>
                <a href="/dashboard/table/rented" class="block px-4 py-2 hover:bg-gray-100 rounded hover:bg-gray-600">Rented</a>
            </li>
            <li>
                <a href="/dashboard/table/sold" class="block px-4 py-2 hover:bg-gray-100 rounded hover:bg-gray-600">Sold</a>
            </li>

        </ul>
    </div>
      {{-- end of dropdown --}}
      <form class="inline" method="POST" action="/logout">
        @csrf
      <button
          type="submit"
          class="absolute bottom-0 left-0 flex items-center w-60 text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item"
        >
          <i class="fas fa-sign-out-alt mr-3"></i>
          Sign Out
      </button>
      </form>
    </nav>
  </aside>

  <div class="w-full flex flex-col h-screen overflow-y-hidden">
    <!-- Desktop Header -->
    <header class="w-full items-center bg-white py-2 px-6 hidden sm:flex">
      <div class="w-1/2"></div>
      <div x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end">
        <button
          class="realtive z-10 w-12 h-12 rounded-full overflow-hidden border-4 border-gray-400 hover:border-gray-300 focus:border-gray-300 focus:outline-none"
        >
          <img src="https://source.unsplash.com/uJ8LNVCBjFQ/400x400" />
        </button>
        <button
          x-show="isOpen"
          @click="isOpen = false"
          class="h-full w-full fixed inset-0 cursor-default"
        ></button>
      </div>
    </header>

    <!-- Mobile Header & Nav -->
    <header
      x-data="{ isOpen: false }"
      class="w-full bg-sidebar py-5 px-6 sm:hidden"
    >
      <div class="flex items-center justify-between">
        <a
          href="/dashboard"
          class="text-white text-3xl font-semibold uppercase hover:text-gray-300"
          >Admin</a
        >
        <button
          @click="isOpen = !isOpen"
          class="text-white text-3xl focus:outline-none"
        >
          <i x-show="!isOpen" class="fas fa-bars"></i>
          <i x-show="isOpen" class="fas fa-times"></i>
        </button>
      </div>

      <!-- Dropdown Nav -->
      <nav :class="isOpen ? 'flex': 'hidden'" class="flex flex-col pt-4">
        <a
          href="/dashboard"
          class="flex items-center text-white py-2 pl-4 nav-item"
        >
          <i class="fas fa-tachometer-alt mr-3"></i>
          Dashboard
        </a>
        <a
        href="/admin/register"
        class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item"
      >
      <i class="fa-solid fa-plus mr-3"></i>
        Add Admin
      </a>
        {{-- <a
          href="/dashboard/table"
          class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item"
        >
          <i class="fas fa-table mr-3"></i>
          Tables
        </a> --}}
        {{-- dropdown --}}
      <button id="dropdownButton" data-dropdown-toggle="dropdown"
      class="flex items-center w-60 text-white py-4 pl-6 nav-item"
      type="button"><i class="fa-solid fa-caret-down mr-5"></i> Property Status</button>
  <!-- Dropdown menu -->
  <div id="dropdown"
      class="z-10 hidden  rounded-lg w-44 bg-sidebar">
      <ul class="py-2 text-md text-white" aria-labelledby="dropdownHoverButton">
          <li>
              <a href="/dashboard/table/sale" class="block px-4 py-2 hover:bg-gray-100 rounded hover:bg-gray-600">For
                  Sale</a>
          </li>
          <li>
              <a href="/dashboard/table/rent" class="block px-4 py-2 hover:bg-gray-100 rounded hover:bg-gray-600">For
                  rent</a>
          </li>
          <li>
              <a href="/dashboard/table/rented" class="block px-4 py-2 hover:bg-gray-100 rounded hover:bg-gray-600">Rented</a>
          </li>
          <li>
              <a href="/dashboard/table/sold" class="block px-4 py-2 hover:bg-gray-100 rounded hover:bg-gray-600">Sold</a>
          </li>

      </ul>
  </div>
    {{-- end of dropdown --}}
        <form class="inline" method="POST" action="/logout">
          @csrf
        <button
            type="submit"
            class="flex items-center w-60 text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item"
          >
            <i class="fas fa-sign-out-alt mr-2"></i>
            Sign Out
        </button>
        </form>
        </form>
      </nav>
      <!-- <button class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
              <i class="fas fa-plus mr-3"></i> New Report
          </button> -->
    </header>