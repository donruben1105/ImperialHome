@props(['listing'])
<x-dashlayout>
  @include('partials._dashnav')
    
        <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6">
                <h1 class="text-3xl text-black pb-6">Status</h1>
                    {{--  --}}
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
                  {{--  --}}
                <div class="w-full mt-12">
                    <p class="text-xl flex items-center pb-3">
                        <i class="fas fa-list mr-3"></i> For Sale
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
                

                {{-- <div class="w-full mt-12">
                    <p class="text-xl pb-3 flex items-center">
                        <i class="fas fa-list mr-3"></i> For rent
                    </p>
                    <div class="bg-white overflow-auto">
                        <table class="text-left w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
                            <thead class="bg-gray-800 text-white">
                                <tr>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Property Type</th>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Location</th>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Model</th>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="hover:bg-grey-lighter">
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $listing->propertyType }}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $listing->location }}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $listing->model }}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $listing->price }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>       
                </div> --}}

                {{-- <div class="w-full mt-12">
                    <p class="text-xl pb-3 flex items-center">
                        <i class="fas fa-list mr-3"></i> Sold
                    </p>
                    <div class="bg-white overflow-auto">
                        <table class="text-left w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
                            <thead class="bg-gray-800 text-white">
                                <tr>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Property Type</th>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Location</th>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Model</th>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="hover:bg-grey-lighter">
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $listing->propertyType }}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $listing->location }}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $listing->model }}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $listing->price }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>       
                </div>

                <div class="w-full mt-12">
                    <p class="text-xl pb-3 flex items-center">
                        <i class="fas fa-list mr-3"></i> Employee

                       

                          END OF ADD EMPLOYEE
                    </p>
                    <div class="bg-white overflow-auto">
                        <table class="min-w-full leading-normal">
                            <thead>
                                <tr class="">
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Name
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Rol
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Created at
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Status
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 w-10 h-10">
                                                <img class="w-full h-full rounded-full"
                                                    src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                                                    alt="" />
                                            </div>
                                            <div class="ml-3">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    Vera Carpenter
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">Admin</p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            Jan 21, 2020
                                        </p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <span
                                            class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                            <span aria-hidden
                                                class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                            <span class="relative">Active</span>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main> --}}
    
            <footer class="w-full bg-white text-right p-4">
                Built by <a target="_blank" href="#" class="underline">WonderBoys</a>.
            </footer>
      </div>

</x-dashlayout>
