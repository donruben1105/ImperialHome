<x-layout>
  @include('partials._navbar')

  <div
  class="relative overflow-hidden bg-no-repeat bg-cover"
  style="
    background-position: 50%;
    background-image: url('/images/pedro-lastra-Nyvq2juw4_o-unsplash.jpg');
    height: 550px;
  "
>
  <div
    class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
    style="background-color: rgba(0, 0, 0, 0.6)"
  >
    <div class="flex justify-center items-center h-full">
      <div class="text-center text-white px-6 md:px-12">
        <ol class="title2 list-reset flex items-center justify-center">
          <li>
            <a href="#" class="text-1xl text-white hover:text-black"
              >Home</a
            >
          </li>
          <li><span class="text-gray-500 mx-2">/</span></li>
          <li>
            <a href="#" class="text-1xl text-yellow-600"
              >Properties</a
            >
          </li>
        </ol>
        <h3 class="title text-7xl text-amber-500 font-bold mb-8">PROPERTIES</h3>
      </div>
    </div>
  </div>
</div>

  @include('partials._search')
  

    <div class="lg:grid grid-cols-3 gap-1 mx-20">
    
    @unless(count($listings) == 0)
    
    @foreach ($listings as $listing)
      <x-listing-card :listing="$listing" />
    @endforeach
    
    @else
    <div class="p-16 flex text-2xl">
      <p class="text-white mx-2 ">No Listings Found</p>
    </div>
    @endunless
    </div>
    
    <div class="mt-6 p-4">
      {{$listings->links()}}
    </div>
  </x-layout>
  <x-footer />