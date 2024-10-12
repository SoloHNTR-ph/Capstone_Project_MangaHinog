<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MangaHinog</title>
        @vite(['resources/css/app.css','resources/js/app.js'])

    </head>
    <body>
        @extends('navbar')
        @section('navbar')
        
        <section id="default-carousel" class="relative w-full" data-carousel="static">
            <div class="absolute top-5 left-0 w-full z-40 ml-10">
                <div>
                    <h1 class="text-white text-4xl tracking-wider font-bold">Latest Updates</h1>
                </div>
            </div>
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden md:h-96">
                 <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class="flex-shrink-0 w-full h-96 flex items-center justify-center">
                        <div class="relative w-full h-full flex items-center justify-center">
                            <div class="absolute inset-0 bg-cover blur-sm bg-center" style="background-image: url('{{ asset('images/onepiece.jpg') }}');">
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black "></div>

                            <div class="relative z-10 w-full mx-5">
                                <a href="/mangadetails">
                                    <div>
                                        <div class="mt-3 mx-5">
                                          <div class="flex w-full gap-9 px-10 mt-10">
                                            <div class="w-48 h-auto">
                                              <img class="object-contain rounded-md" src="{{ asset('images/placeholder.png') }}" alt={title} />
                                            </div>
                                            <div class="flex flex-col w-full h-auto justify-between">
                                              <div class="flex flex-col justify-between w-full">
                                                <h1 class="text-6xl font-extrabold text-white">Title</h1>
                                                <div class="flex justify-between">
                                                  <div class="flex gap-5">
                                                    <h3 class="text-white">Genre</h3>
                                                  </div>
                                                  <div class="flex">
                                                    <h3 class="text-white">Status</h3>
                                                  </div>
                                                </div>
                                              </div>
                                              <div>
                                                <h3 class="text-white text-sm" >Summary:</h3>
                                                <p class="text-white">Description</p>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                </a>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class="flex-shrink-0 w-full h-96 flex items-center justify-center">
                        <div class="relative w-full h-full flex items-center justify-center">
                            <div class="absolute inset-0 bg-cover blur-sm bg-center" style="background-image: url('{{ asset('images/onepiece.jpg') }}');">
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black "></div>

                            <div class="relative z-10 w-full mx-5">
                                <a href="/mangadetails">
                                    <div>
                                        <div class="mt-3 mx-5">
                                          <div class="flex w-full gap-9 px-10 mt-10">
                                            <div class="w-48 h-auto">
                                              <img class="object-contain rounded-md" src="{{ asset('images/placeholder.png') }}" alt={title} />
                                            </div>
                                            <div class="flex flex-col w-full h-auto justify-between">
                                              <div class="flex flex-col justify-between w-full">
                                                <h1 class="text-6xl font-extrabold text-white">Title</h1>
                                                <div class="flex justify-between">
                                                  <div class="flex gap-5">
                                                    <h3 class="text-white">Genre</h3>
                                                  </div>
                                                  <div class="flex">
                                                    <h3 class="text-white">Status</h3>
                                                  </div>
                                                </div>
                                              </div>
                                              <div>
                                                <h3 class="text-white text-sm" >Summary:</h3>
                                                <p class="text-white">Description</p>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                </a>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class="flex-shrink-0 w-full h-96 flex items-center justify-center">
                        <div class="relative w-full h-full flex items-center justify-center">
                            <div class="absolute inset-0 bg-cover blur-sm bg-center" style="background-image: url('{{ asset('images/onepiece.jpg') }}');">
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black "></div>

                            <div class="relative z-10 w-full mx-5">
                                <a href="/mangadetails">
                                    <div>
                                        <div class="mt-3 mx-5">
                                          <div class="flex w-full gap-9 px-10 mt-10">
                                            <div class="w-48 h-auto">
                                              <img class="object-contain rounded-md" src="{{ asset('images/placeholder.png') }}" alt={title} />
                                            </div>
                                            <div class="flex flex-col w-full h-auto justify-between">
                                              <div class="flex flex-col justify-between w-full">
                                                <h1 class="text-6xl font-extrabold text-white">Title</h1>
                                                <div class="flex justify-between">
                                                  <div class="flex gap-5">
                                                    <h3 class="text-white">Genre</h3>
                                                  </div>
                                                  <div class="flex">
                                                    <h3 class="text-white">Status</h3>
                                                  </div>
                                                </div>
                                              </div>
                                              <div>
                                                <h3 class="text-white text-sm" >Summary:</h3>
                                                <p class="text-white">Description</p>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                </a>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class="flex-shrink-0 w-full h-96 flex items-center justify-center">
                        <div class="relative w-full h-full flex items-center justify-center">
                            <div class="absolute inset-0 bg-cover blur-sm bg-center" style="background-image: url('{{ asset('images/onepiece.jpg') }}');">
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black "></div>

                            <div class="relative z-10 w-full mx-5">
                                <a href="/mangadetails">
                                    <div>
                                        <div class="mt-3 mx-5">
                                          <div class="flex w-full gap-9 px-10 mt-10">
                                            <div class="w-48 h-auto">
                                              <img class="object-contain rounded-md" src="{{ asset('images/placeholder.png') }}" alt={title} />
                                            </div>
                                            <div class="flex flex-col w-full h-auto justify-between">
                                              <div class="flex flex-col justify-between w-full">
                                                <h1 class="text-6xl font-extrabold text-white">Title</h1>
                                                <div class="flex justify-between">
                                                  <div class="flex gap-5">
                                                    <h3 class="text-white">Genre</h3>
                                                  </div>
                                                  <div class="flex">
                                                    <h3 class="text-white">Status</h3>
                                                  </div>
                                                </div>
                                              </div>
                                              <div>
                                                <h3 class="text-white text-sm" >Summary:</h3>
                                                <p class="text-white">Description</p>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                </a>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class="flex-shrink-0 w-full h-96 flex items-center justify-center">
                        <div class="relative w-full h-full flex items-center justify-center">
                            <div class="absolute inset-0 bg-cover blur-sm bg-center" style="background-image: url('{{ asset('images/onepiece.jpg') }}');">
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black "></div>

                            <div class="relative z-10 w-full mx-5">
                                <a href="/mangadetails">
                                    <div>
                                        <div class="mt-3 mx-5">
                                          <div class="flex w-full gap-9 px-10 mt-10">
                                            <div class="w-48 h-auto">
                                              <img class="object-contain rounded-md" src="{{ asset('images/placeholder.png') }}" alt={title} />
                                            </div>
                                            <div class="flex flex-col w-full h-auto justify-between">
                                              <div class="flex flex-col justify-between w-full">
                                                <h1 class="text-6xl font-extrabold text-white">Title</h1>
                                                <div class="flex justify-between">
                                                  <div class="flex gap-5">
                                                    <h3 class="text-white">Genre</h3>
                                                  </div>
                                                  <div class="flex">
                                                    <h3 class="text-white">Status</h3>
                                                  </div>
                                                </div>
                                              </div>
                                              <div>
                                                <h3 class="text-white text-sm" >Summary:</h3>
                                                <p class="text-white">Description</p>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                </a>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </section>

        <section class="flex flex-col w-full items-center mt-10">
            <h1 class="text-4xl font-bold">Most Popular Titles</h1>
            <div class="grid grid-cols-6 gap-2 p-6 w-full justify-items-center items-center">
                <div class="w-36 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{ asset('images/placeholder.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Title</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Description.</p>
                        
                    </div>
                </div>
                <div class="w-36 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{ asset('images/placeholder.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Title</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Description.</p>
                        
                    </div>
                </div>
                <div class="w-36 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{ asset('images/placeholder.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Title</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Description.</p>
                        
                    </div>
                </div>
                <div class="w-36 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{ asset('images/placeholder.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Title</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Description.</p>
                        
                    </div>
                </div>
                <div class="w-36 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{ asset('images/placeholder.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Title</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Description.</p>
                        
                    </div>
                </div>
                <div class="w-36 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{ asset('images/placeholder.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Title</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Description.</p>
                        
                    </div>
                </div>
                <div class="w-36 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{ asset('images/placeholder.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Title</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Description.</p>
                        
                    </div>
                </div>
                <div class="w-36 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{ asset('images/placeholder.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Title</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Description.</p>
                        
                    </div>
                </div>
                <div class="w-36 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{ asset('images/placeholder.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Title</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Description.</p>
                        
                    </div>
                </div>
                <div class="w-36 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{ asset('images/placeholder.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Title</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Description.</p>
                        
                    </div>
                </div>
                <div class="w-36 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{ asset('images/placeholder.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Title</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Description.</p>
                        
                    </div>
                </div>
                <div class="w-36 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{ asset('images/placeholder.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Title</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Description.</p>
                        
                    </div>
                </div>

            </div>
            
        </section>
        
        @endsection


    </body>
</html>
