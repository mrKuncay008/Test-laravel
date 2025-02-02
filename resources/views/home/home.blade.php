@extends('master')

@section('home')

  <div class="w-full overflow-x-hidden border-t flex flex-col">
      <main class="w-full flex-grow p-6">
          <p class="pl-10 text-xl flex items-center">
              <i class="fas fa-list mr-3"></i> Statistics
          </p>
          <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-4 lg:grid-cols-4 xl:grid-cols-4 gap-6">
                  <div class="max-w-sm h-[25vh] rounded-md overflow-hidden shadow-lg bg-white ">
                      <div class="px-10 py-6">
                          <div class="font-bold text-xl mb-2 text-center">Users</div>
                          <p class="text-gray-700 mt-3 text-5xl text-center">
                              1
                          </p>
                      </div>
                  </div>

                  <div class="max-w-sm max-h-lg rounded-md overflow-hidden shadow-lg bg-white ">
                      <div class="px-10 py-6">
                          <div class="font-bold text-xl mb-2 text-center">Categories</div>
                          <p class="text-gray-700 mt-3 text-5xl text-center">
                              1
                          </p>
                      </div>
                  </div>

              <div class="max-w-sm max-h-lg rounded-md overflow-hidden shadow-lg bg-white ">
                  <div class="px-10 py-6">
                      <div class="font-bold text-xl mb-2 text-center">Tasks</div>
                      <p class="text-gray-700 mt-3 text-5xl text-center">
                          1
                      </p>
                  </div>
              </div>

              <div class="max-w-sm max-h-lg rounded-md overflow-hidden shadow-lg bg-white ">
                  <div class="px-10 py-6">
                      <div class="font-bold text-md mb-2 text-center">Completed Tasks</div>
                      <p class="text-gray-700 mt-3 text-5xl text-center">
                          1
                      </p>
                  </div>
              </div>

          </div>
      </main>
  </div>



@endsection