<div style="background-image: url('/images/h3.jpg')" class="w-full h-960 bg-fixed bg-cover bg-center">
    <x-layout>
    <div class="bg-black/50 w-full h-350 p-20">
        <div class="">
            <a href="/" class="inline-block text-white hover:text-amber-500 rounded-md py-2 px-4 "
            ><i class="fa-solid fa-arrow-left"></i> Back
          </a>
          </div>
        <x-card class="p-3 rounded lg:w-4/6 mx-auto my-20 bg-gradient-to-t from-cyan-800 to-cyan-500/90">
            <div class="lg:py-10 py-2 text-center md:text-left text-neutral-800">
                <header class="text-center">
                    <h2 class="text-2xl font-bold uppercase mb-1 text-amber-500">
                       Post your property
                    </h2>
                    <p class="mb-4 text-white">Everyone deserves the opportunuity of home</p>
                </header>
                <div class="grid grid-1 md:grid-cols-2 lg:grid-cols-2 gap-5">
                    <div class="grid justify-items-stretch">
                    <form method="POST" action="/listings" enctype="multipart/form-data">
                     @csrf
                  
                    <div class="mb-6">
                        <label
                            for="propertyName"
                            class="inline-block text-lg mb-2"
                            >Property Name</label>
                        <input
                            type="text"
                            class="border border-gray-200 rounded p-2 w-full"
                            name="propertyName" value="{{old('propertyName')}}"/>
                          @error('propertyName')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                          @enderror
                    </div>
            
                    <div class="mb-6">
                        <label
                            for="propertyType"
                            class="inline-block text-lg mb-2"
                            >Property Type</label>
                        <input
                            type="text"
                            class="border border-gray-200 rounded p-2 w-full"
                            name="propertyType" value="{{old('propertyType')}}"/>
                          @error('propertyType')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                          @enderror
                    </div>
            
                    <div class="mb-6">
                        <label for="title" class="inline-block text-lg mb-2"
                            >Model</label
                        >
                        <input
                            type="text"
                            class="border border-gray-200 rounded p-2 w-full"
                            name="model"
                            value="{{old('model')}}"
                        />
                        @error('Model')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                          @enderror
                    </div>
            
                    <div class="mb-6">
                        <label
                            for="location"
                            class="inline-block text-lg mb-2"
                            >Location</label
                        >
                        <input
                            type="text"
                            class="border border-gray-200 rounded p-2 w-full"
                            name="location"
                            value="{{old('location')}}"
                        />
                        @error('location')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                          @enderror
                    </div>
            
                    <div class="mb-6">
                        <label
                            for="Price"
                            class="inline-block text-lg mb-2"
                        >
                        Price
                        </label>
                        <input
                            type="text"
                            class="border border-gray-200 rounded p-2 w-full"
                            name="price"
                            value="{{old('price')}}"
                        />
                        @error('price')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                          @enderror
                    </div> 
                  </div>
                  
            
                  <div class="flex flex-col">
                    <div class="mb-6">
                        <label for="tags" class="inline-block text-lg mb-2">
                            Tags
                        </label>
                        <input
                            type="text"
                            class="border border-gray-200 rounded p-2 w-full"
                            name="tags"
                            placeholder="Example: For sale or For Rent"
                            value="{{old('tags')}}"
                        />
                        @error('tags')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                          @enderror
                    </div>
            
                    <div class="mb-5">
                        <label for="file" class="inline-block text-lg mb-2">
                           Upload Photo
                        </label>
                        <input
                            type="file"
                            class="border border-gray-200 rounded p-2 w-full"
                            name="file"
                        />
                        @error('file')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                          @enderror
                    </div>
            
                    <div class="mb-5">
                        <label
                            for="description"
                            class="inline-block text-lg mb-2"
                        >
                           Description
                        </label>
                        <textarea
                            class="border border-gray-200 rounded p-2 w-full"
                            name="description"
                            rows="9"
                            value="{{old('description')}}"
                        ></textarea>
                          @error('description')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                          @enderror
                    </div>
            
                    <div class="mb-6 flex justify-end">
                        <button
                            class=" text-white rounded py-2 px-4 bg-amber-400 hover:bg-amber-500"
                        >
                            Submit
                        </button>            
                    </div> 
                    </div>
                    </form>                   
                  </div>           
                </div>     
            </div>
        </x-card>
    </div>
    </x-layout>
</div>