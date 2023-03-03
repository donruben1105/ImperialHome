<x-layout>

    {{-- =================================================================================================== --}}
    <section
        class="relative overflow-hidden bg-no-repeat bg-cover flex items-center justify-center"
        style="
        background-position: 50%;
        background-image: url('/images/pedro-lastra-Nyvq2juw4_o-unsplash.jpg');
        height: 100vh;
      "
      >
      <div class="h-full p-10 bg-black/50 w-full">
        <div
          class="flex h-full flex-wrap items-center justify-center text-black">
          <div class="lg:w-3/5">
            <div
              class="block rounded-lg bg-gradient-to-t from-cyan-800/80 to-cyan-400/80 shadow-lg">
              <div class="flex-wrap flex items-center justify-center">
                <div class="px-4 md:px-0 lg:w-4/5">
                  <div class="md:mx-6 md:p-12">
                      <div class="text-center">
                        <img
                          class="mx-auto w-48 pb-7"
                          src="/images/logo.png"
                          alt="logo"
                        />
                      </div>
                      <form method="POST" action="/users">
                        @csrf
                          <div class="mb-2">
                              <label for="name" class="inline-block text-lg mb-1 text-white">
                                  Name
                              </label>
                              <input
                                  type="text"
                                  class="border border-gray-200 rounded p-1 w-full"
                                  name="name"
                                  value="{{old('name')}}"
                              />
                              @error('name')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                              @enderror
                          </div>
                    
                          <div class="mb-2">
                              <label for="email" class="inline-block text-lg mb-1 text-white"
                                  >Email</label
                              >
                              <input
                                  type="email"
                                  class="border border-gray-200 rounded p-1 w-full"
                                  name="email"
                                  value="{{old('email')}}"
                              />
                              <!-- Error Example -->
                              @error('email')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                              @enderror
                          </div>
                    
                          <div class="mb-2">
                              <label
                                  for="password"
                                  class="inline-block text-lg mb-1 text-white"
                              >
                                  Password
                              </label>
                              <input
                                  type="password"
                                  class="border border-gray-200 rounded p-1 w-full"
                                  name="password"
                              />
                              @error('password')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                              @enderror
                          </div>
                    
                          <div class="mb-3">
                              <label
                                  for="password2"
                                  class="inline-block text-lg mb-1 text-white"
                              >
                                  Confirm Password
                              </label>
                              <input
                                  type="password"
                                  class="border border-gray-200 rounded p-1 w-full"
                                  name="password_confirmation"
                              />
                              @error('password_confirmation')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                              @enderror
                          </div>
                    
                          <div class="mb-3">
                            <button
                            type="submit"
                            class="bg-amber-500 inline-block px-6 py-2.5 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-amber-600 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out w-full mb-3"
                            data-mdb-ripple="true"
                            data-mdb-ripple-color="light"
                          >
                           Register 
                        </div>                             
                            </button>
                          <div class="flex items-center justify-between pb-6">
                            <p class="mb-0 mr-2 text-white">Already have an account?</p>
                            <button
                              type="button"
                              class="inline-block px-6 py-2 border-2 border-amber-500 text-amber-500 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out"
                              data-mdb-ripple="true"
                              data-mdb-ripple-color="light"
                            >
                              <a href="/login">Log in</a>
                            </button>
                          </div>
                      </form>  
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
     </section>
    
    
      
    </x-layout>