<x-layout>

  <x-card class="p-10">
    <div>
      <a href="/" class="inline-block text-white hover:text-amber-500 rounded-md py-2 px-4 "
      ><i class="fa-solid fa-arrow-left"></i> Back
    </a>
    </div>
            
    <header>
        <h1 class="text-5xl text-center text-yellow-500 font-bold mt-6 mb-20">
            Manage Properties
        </h1>
    </header>

    <div class="flex flex-col sm:m-5 lg:m-32 bg-black/30 rounded-md">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
            <div class="overflow-x-auto">
              <table class="min-w-full mb-10">
                
                <thead class="border-b border-cyan-600">
                  
                    <tr>
                      @unless($listings->isEmpty())
                      
                      <th scope="col" class="text-xl font-medium text-white px-6 py-10 text-left">
                        Property Name
                      </th>
                      <th scope="col" class="text-xl font-medium text-white px-6 py-10 text-left">
                        Image
                      </th>
                    </tr>
                  </thead>
                
                  @foreach($listings as $listing)
                <tbody>
                  <tr class="border-b border-cyan-600">

                    <td class="text-md text-white font-normal px-6 py-10 whitespace-nowrap">
                        <a href="/listings/{{$listing->id}}"> {{$listing->propertyName}} </a>
                    </td>
                    <td class="text-md text-white font-normal px-6 py-1 whitespace-nowrap">
                      <img
                      class="rounded-t-lg w-full h-60"
                      src="{{$listing->file ? asset('storage/' . $listing->file) : asset('images/no-image.png')}}"
                      alt=""
                    />
                    </td>
    
                    
                        <td class="text-md text-white font-light px-1 py-10 whitespace-nowrap flex justify-end ml-32">
                            <a href="/listings/{{$listing->id}}/edit" class="text-white bg-blue-600 hover:bg-blue-800 hover:text-white marker:block font-medium rounded-lg text-sm px-5 py-2.5 text-center"><i class="fa-solid fa-pen-to-square"></i>
                            Edit</a>
                        </td>
                        <td class="text-md text-white font-light px-1 py-10 whitespace-nowrap">
                            <form method="POST" action="/listings/{{$listing->id}}">
                                @csrf
                                @method('DELETE')
                                <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="text-white bg-red-600 hover:bg-red-800 marker:block font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button"><i class="fa-solid fa-trash"></i>
                                    Delete
                                   </button>
            
                                   <div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                                    <div class="relative w-full h-full max-w-md md:h-auto">
                                        <div class="relative bg-white rounded-lg shadow">
                                            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="popup-modal">
                                                <span class="sr-only">Close</span>
                                            </button>
                                            <div class="p-6 text-center">
                                                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this product?</h3>
                                                <button data-modal-hide="popup-modal" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                    Yes, I'm sure
                                                </button>
                                                <button data-modal-hide="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              </form>
                        </td>
                    
                  </tr>
                  @endforeach
                @else
               
                      <p class="text-center text-white text-2xl p-5 pt-5">No Listings Found</p>                  
                   
                @endunless
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
  </x-card>

</x-layout>



