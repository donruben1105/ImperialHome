<x-layout>
    <div class="mt-5 ml-5">
        <a href="/" class="inline-block text-white hover:text-amber-500 rounded-md py-2 px-4 "
        ><i class="fa-solid fa-arrow-left"></i> Back
      </a>
      </div>
    <x-card class="p-10 rounded max-w-lg mx-auto my-20">
        <header class="text-center">
            <h2 class="text-3xl font-bold uppercase mb-1 text-amber-500">
               Edit your property
            </h2>
            <p class="mb-4 text-white font-light">"Everyone deserves the opportunuity of home."</p>
        </header>
    
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
    
            <div class="mb-6">
                <label for="logo" class="inline-block text-lg mb-2">
                   Upload Photo
                </label>
                <input
                    type="file"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="logo"
                />
                @error('logo')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                  @enderror
            </div>
    
            <div class="mb-6">
                <label
                    for="description"
                    class="inline-block text-lg mb-2"
                >
                   Description
                </label>
                <textarea
                    class="border border-gray-200 rounded p-2 w-full"
                    name="description"
                    rows="10"
                    value="{{old('description')}}"
                ></textarea>
                  @error('description')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                  @enderror
            </div>
    
            <div class="mb-6">
                <button
                    class=" text-white rounded py-2 px-4 bg-amber-400 hover:bg-amber-500"
                >
                    Submit
                </button>
                <button
                    class=" text-white rounded py-2 px-4 bg-sky-900 hover:bg-sky-700"
                >
                <a href="/" class="text-white"> Back </a>
                </button>
                
            </div>
        </form>
    </x-card>
  </x-layout>