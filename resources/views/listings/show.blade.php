<x-layout>



  
  <x-card class="p-5">
    <div>
      <a href="/" class="inline-block text-white hover:text-amber-500 rounded-md py-2 px-4 "
      ><i class="fa-solid fa-arrow-left"></i> Back
    </a>
    </div>
    <div class="mx-6 py-10 text-center md:text-left">
      <div class="grid grid-1 md:grid-cols-1 lg:grid-cols-2 gap-0">
  
        <div class="grid justify-items-stretch col-span-1 lg:col-span-1">
          <img
            class="w-full h-full mr-6 rounded-md"
            src="{{$listing->file ? asset('storage/' . $listing->file) : asset('images/h10.jpg')}}"
            alt=""
        />
        </div>
  
        <div class="flex flex-col justify-center lg:p-5 my-5">
          <div>
            <div>
              <h3 class="text-2xl font-bold text-center text-amber-500 mb-5">Contact Seller</h3>
            </div>
            <form>
              <div class="form-group mb-6">
                <input type="text" class="form-control block
                  w-full
                  px-3
                  py-1.5
                  text-base
                  font-normal
                  text-gray-700
                  bg-white bg-clip-padding
                  border border-solid border-gray-300
                  rounded
                  transition
                  ease-in-out
                  m-0
                  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput7"
                  placeholder="Name">
              </div>
              <div class="form-group mb-6">
                <input type="email" class="form-control block
                  w-full
                  px-3
                  py-1.5
                  text-base
                  font-normal
                  text-gray-700
                  bg-white bg-clip-padding
                  border border-solid border-gray-300
                  rounded
                  transition
                  ease-in-out
                  m-0
                  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput8"
                  placeholder="Email address">
              </div>
              <div class="form-group mb-6">
                <textarea
                class="
                  form-control
                  block
                  w-full
                  px-3
                  py-1.5
                  text-base
                  font-normal
                  text-gray-700
                  bg-white bg-clip-padding
                  border border-solid border-gray-300
                  rounded
                  transition
                  ease-in-out
                  m-0
                  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                "
                id="exampleFormControlTextarea13"
                rows="3"
                placeholder="Message"
              ></textarea>
              </div>
              
              <button type="submit" class="
                w-full
                px-6
                py-2.5
                bg-blue-600
                text-white
                font-medium
                text-xs
                leading-tight
                uppercase
                rounded
                shadow-md
                hover:bg-blue-700 hover:shadow-lg
                focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
                active:bg-blue-800 active:shadow-lg
                transition
                duration-150
                ease-in-out">Send</button>
            </form>
          </div>
        </div>
  
        <div  class="flex flex-col justify-center items-center lg:items-start bg-black/30 p-5 lg:border-black/50 lg:border-r-2 lg:mt-5">
          <h3 class="text-5xl text-amber-500 font-bold mb-2">{{$listing->propertyName}}</h3>
        
              <div class="flex gap-2">
                <span class="flex">
                    <x-listing-tags :tagsCsv="$listing-> tags"/>
                </span>           
                <span class="text-lg text-white">
                    <i class="fa-solid fa-location-dot text-white"></i> {{$listing->location}}
                </span>
              </div>
              <div class="text-xl font-light text-white">
                {{$listing->model}}
              </div>
        
                
              <div class="text-lg mb-2 text-white">
                <span class="text-white">Price: </span>
                {{$listing->price}}
             </div>
        </div>

        <div  class="flex flex-col items-center lg:items-start bg-black/30 p-5 lg:mt-5">
          <h3 class="text-3xl font-bold mb-2 text-amber-500">
            Property Description
        </h3>
        <div class="text-lg space-y-6 text-white">
            <p>
              {{$listing->description}}
            </p>
        </div>
        </div>
  
      </div>
    </div>      
    </x-card>


    
</x-layout>