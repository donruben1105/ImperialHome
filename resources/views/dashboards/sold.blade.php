@props(['listing'])
<x-dashlayout>
  @include('partials._dashnav')

  <div class="w-full overflow-x-hidden border-t flex flex-col">
    <main class="w-full flex-grow p-6">
      <h1 class="text-3xl text-black pb-6">Status</h1>
      
      <div class="container  mx-auto grid">
            
        <!-- Cards -->
        <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
          <!-- Card -->
          <div class="flex items-center p-6 bg-gray-200 rounded-lg shadow-xs dark:bg-gray-800">
            <div class="p-3 mr-4">
              <i class="fa-solid fa-building"></i>
            </div>
            <div>
              <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                Total Properties
              </p>
              <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                {{$listing}}
              </p>
            </div>
          </div>
          <!-- Card -->
          <div class="flex items-center p-6 bg-gray-200 rounded-lg shadow-xs dark:bg-gray-800">
            <div class="p-3 mr-4">
              <i class="fa-solid fa-user"></i>
            </div>
            <div>
              <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                  Total Users
              </p>
              <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                {{$users}}
              </p>
            </div>
          </div>
          <!-- Card -->
          <div class="flex items-center p-6 bg-gray-200 rounded-lg shadow-xs dark:bg-gray-800">
              <div class="p-3 mr-4">
                <i class="fa-solid fa-lock"></i>
                </div>
            <div>
              <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                Admins
              </p>
              <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                {{$adminCount}}
              </p>
            </div>
          </div>
          <!-- Card -->
          <div class="flex items-center p-6 bg-gray-200 rounded-lg shadow-xs dark:bg-gray-800">
           
            <div class="p-3 mr-4">
              <i class="fa-solid fa-cart-shopping"></i>
            </div>
            <div>
              <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
               For sale
              </p>
              <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                {{$forsale}}
              </p>
            </div>
          </div>
        </div>
        @include('partials._dashsearch')
      </div>

  <div class="w-full mt-12">
    <p class="text-xl flex items-center pb-3">
        <i class="fas fa-list mr-3"></i> Sold Properties
    </p>
    
    <div class="bg-white overflow-auto">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
              <tr>
                @unless($listings->isEmpty())
                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">
                  Property Name
                </th>
                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">
                  Property Type
                </th>
                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">
                  Location
                </th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">
                  Model
                </th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">
                  Price
                </th>
                <th class="text-center py-3 px-4 uppercase font-semibold text-sm">
                  Status
                </th>
              </tr>
            </thead>
            @foreach($listings as $listing)
            <tbody class="text-gray-700">
                <tr>
                  <td class="w-1/3 text-left py-3 px-4 border-b border-grey-light"> {{$listing->propertyName}} </td>
                  <td class="w-1/3 text-left py-3 px-4 border-b border-grey-light">{{ $listing->propertyType }}</td>
                  <td class="text-left py-3 px-4 border-b border-grey-light"> {{ $listing->location }}</td>
                  <td class="text-left py-3 px-4 border-b border-grey-light"> {{ $listing->model }}</td>
                  <td class="w-1/3 text-left py-3 px-4 border-b border-grey-light">{{ $listing->price }}</td>
                  <td class="w-1/3 text-left py-3 px-4 border-b border-grey-light"><x-listing-tags :tagsCsv="$listing-> tags"/>
                  </td>
                </tr>
                @endforeach
                @else
                    <p class="text-center text-white text-2xl p-5 pt-5">No Listings Found</p>  
                @endunless
            </tbody>
        </table>
        <div class="mt-6 p-4">
          {{$listings->links()}}
        </div>
    </div>
</div>


    </main>
  </div>
</x-dashlayout>
