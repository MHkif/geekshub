<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot> --}}
  
{{-- Discover --}}
    <div >
        <h3 class="font-black text-gray-800 md:text-2xl text-lg  m-4">
            Discover
        </h3>
    
        <div class="w-full grid grid-cols-2 gap-6">
            <div
                class="w-full flex flex-col md:flex-row md:space-x-5 space-y-3 md:space-y-0 rounded-xl shadow-lg p-3 max-w-xs md:max-w-3xl mx-auto border border-white bg-white"
            >
                <div class="w-full md:w-1/3 bg-white grid place-items-center">
                    <section
                        class="h-full w-full rotate-3  rounded transform space-y-6 rounded-2xl bg-red-100 duration-300 hover:rotate-0"
                    >
                      <img src="books/malcom-x.png" class="rounded h-full w-full object-cover" >
                    </section>
                </div>
    
                <div
                    class="w-full md:w-2/3 bg-white justify-center flex flex-col space-y-2 p-4"
                >
                    <h3 class="font-black text-gray-800 md:text-xl text-md">
                        The Autobiography of Malcolm X
                    </h3>
                    <h3 class="md:text-lg text-gray-500 text-base">MALCOLM X, ALEX HALEY</h3>
                    <div class="text-xl font-black text-gray-800">
                        <div class="flex justify-between item-center">
                            <p class="text-gray-500 font-medium hidden md:block">
                                Pages
                            </p>
                            <div class="flex items-center">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 text-yellow-500"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                >
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                    />
                                </svg>
                                <p class="text-gray-600 font-bold text-sm ml-1">
                                    4.96
                                    <span class="text-gray-500 font-normal"
                                        >(76 reviews)</span
                                    >
                                </p>
                            </div>
                            <div class="">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 text-pink-500"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                        clip-rule="evenodd"
                                    />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <div
                class="w-full flex flex-col md:flex-row md:space-x-5 space-y-3 md:space-y-0 rounded-xl shadow-lg p-3 max-w-xs md:max-w-3xl mx-auto border border-white bg-white"
            >
                <div class="w-full md:w-1/3 bg-white grid place-items-center">
                    <section
                    class="h-full w-full rotate-3  rounded transform space-y-6 rounded-2xl bg-red-100 duration-300 hover:rotate-0"
                >
                  <img src="books/zerotoone.png" class="rounded h-full w-full object-cover" >
                </section>
                </div>
    
                <div
                    class="w-full md:w-2/3 bg-white justify-center flex flex-col space-y-2 p-4"
                >
                    <h3 class="font-black text-gray-800 md:text-xl text-md ">
                       Zero to One: Notes on Startups, or How to Build the Future
                    </h3>
                    <h3 class=" text-base text-gray-600  md:text-lg "> PETER THIEL, BLAKE MASTERS </h3>
                    <div class="text-xl font-black text-gray-600">
                        <div class="flex justify-between item-center">
                            <p class="text-base text-gray-500 font-medium hidden md:block">
                                Pages
                            </p>
                            <div class="flex items-center">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 text-yellow-500"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                >
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                    />
                                </svg>
                                <p class="text-gray-600 font-bold text-sm ml-1">
                                    4.96
                                    <span class="text-gray-500 font-normal"
                                        >(76 reviews)</span
                                    >
                                </p>
                            </div>
                            <div class="">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 text-pink-500"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                        clip-rule="evenodd"
                                    />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Latest Added --}}
    <div>
        <h3 class="font-black text-gray-800 md:text-2xl text-lg   m-4">
            Latest Added Books
        </h3>
    
        <div class="w-full grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <a href="/book"
                class="w-full flex flex-col space-y-3 rounded shadow-lg p-3 max-w-xs md:max-w-3xl mx-auto border border-white bg-white"
                    >
                        <div class="w-full bg-white grid place-items-center">
                            <section
                             class="h-full w-full rounded space-y-6 rounded-2xl bg-red-100 "
                                >
                                <img src="books/python.png" class="rounded h-80 w-full object-fit" >
                            </section>
                        </div>
            
                        <div
                            class="w-full bg-white justify-center flex flex-col space-y-2 p-4"
                        >
                            <h3 class="font-black text-gray-800 md:text-xl text-md overflow-hidden truncate ">
                                Intro to Python for Computer Science and Data Science
                            </h3>
                            <h3 class=" text-xs  font-semiBold text-gray-500 md:text-sm">PAUL DEITEL, HARVEY DEITEL</h3>
                            <div class="text-xl font-black text-gray-800">
                                <div class="flex justify-between item-center">
                                    <p class="text-gray-500 font-medium hidden md:block">
                                        Pages
                                    </p>
                                    <div class="flex items-center">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5 text-yellow-500"
                                            viewBox="0 0 20 20"
                                            fill="currentColor"
                                        >
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                            />
                                        </svg>
                                        <p class="text-gray-600 font-bold text-sm ml-1">
                                            4.96
                                            <span class="text-gray-500 font-normal"
                                                >(76 reviews)</span
                                            >
                                        </p>
                                    </div>
                                    <div class="">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5 text-pink-500"
                                            viewBox="0 0 20 20"
                                            fill="currentColor"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                                clip-rule="evenodd"
                                            />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                    </div>
                </a>
    
            <div
             class="w-full flex flex-col space-y-3 rounded shadow-lg p-3 max-w-xs md:max-w-3xl mx-auto border border-white bg-white"
                >
                    <div class="w-full bg-white grid place-items-center">
                        <section
                        class="h-full w-full rounded space-y-6 rounded-2xl bg-red-100 "
                    >
                    <img src="books/zerotoone.png" class="rounded h-80 w-full object-fit" >
                    </section>
                    </div>
        
                    <div
                        class="w-full bg-white justify-center flex flex-col space-y-2 p-4"
                    >
                        <h3 class="font-black text-gray-800 md:text-xl text-md overflow-hidden truncate">
                            Zero to One: Notes on Startups, or How to Build the Future                        </h3>
                        <h3 class="text-xs text-gray-500 md:text-sm">PAUL DEITEL, HARVEY DEITEL</h3>
                        <div class="text-xl font-black text-gray-800">
                            <div class="flex justify-between item-center">
                                <p class="text-gray-500 font-medium hidden md:block">
                                    Pages
                                </p>
                                <div class="flex items-center">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-5 w-5 text-yellow-500"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                    >
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                        />
                                    </svg>
                                    <p class="text-gray-600 font-bold text-sm ml-1">
                                        4.96
                                        <span class="text-gray-500 font-normal"
                                            >(76 reviews)</span
                                        >
                                    </p>
                                </div>
                                <div class="">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-5 w-5 text-pink-500"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                            clip-rule="evenodd"
                                        />
                                    </svg>
                                </div>
                            </div>
                        </div>
                </div>
        </div>
        <div
        class="w-full flex flex-col space-y-3 rounded-xl shadow-lg p-3 max-w-xs md:max-w-3xl mx-auto border border-white bg-white"
            >
                <div class="w-full bg-white grid place-items-center">
                    <section
                    class="h-full w-full  rounded space-y-6 rounded bg-red-100 "
                >
                <img src="books/malcom-x.png" class="rounded h-80 w-full object-fit" >
                </section>
                </div>
    
                <div
                    class="w-full bg-white justify-center flex flex-col space-y-2 p-3"
                >
                    <h3 class="font-black text-gray-800 md:text-xl text-md overflow-hidden truncate">
                        The Autobiography of Malcolm X                    </h3>
                    <h3 class="text-xs text-gray-500 md:text-sm">PAUL DEITEL, HARVEY DEITEL</h3>
                    <div class="text-xl font-black text-gray-800">
                        <div class="flex justify-between item-center">
                            <p class="text-gray-500 font-medium hidden md:block">
                                Pages
                            </p>
                            <div class="flex items-center">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 text-yellow-500"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                >
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                    />
                                </svg>
                                <p class="text-gray-600 font-bold text-sm ml-1">
                                    4.96
                                    <span class="text-gray-500 font-normal"
                                        >(76 reviews)</span
                                    >
                                </p>
                            </div>
                            <div class="">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 text-pink-500"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                        clip-rule="evenodd"
                                    />
                                </svg>
                            </div>
                        </div>
                        <div class="py-4 flex space-x-2">
                            <div class="flex space-x-1 items-center">
                              <span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-gray-600 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                </svg>
                              </span>
                              <span>22</span>
                            </div>
                            <div class="flex space-x-1 items-center">
                              <span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-red-500 hover:text-red-400 transition duration-100 cursor-pointer" viewBox="0 0 20 20" fill="currentColor">
                                  <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                                </svg>
                              </span>
                              <span>20</span>
                            </div>
                          </div>
                    </div>
            </div>
    </div>
            <div
                class="w-full flex flex-col space-y-3 rounded-xl shadow-lg p-3 max-w-xs md:max-w-3xl mx-auto border border-white bg-white"
            >
                <div class="w-full bg-white grid place-items-center">
                    <section
                        class="h-full w-full rounded space-y-6 rounded-2xl bg-red-100 "
                    >
                      <img src="books/ego.png" class="rounded  h-80 w-full object-fit" >
                    </section>
                </div>
    
                <div
                    class="w-full bg-white justify-center flex flex-col space-y-2 p-4"
                >
                    <h3 class="font-black text-gray-800 md:text-xl text-md overflow-hidden truncate">
                        Ego Is the Enemy
                    </h3>
                    <h3 class="text-xs text-gray-500 md:text-sm">RYAN HOLIDAY</h3>
                    <div class="text-xl font-black text-gray-800">
                        <div class="flex justify-between item-center">
                            <p class="text-gray-500 font-medium hidden md:block">
                                Pages
                            </p>
                            <div class="flex items-center">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 text-yellow-500"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                >
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                    />
                                </svg>
                                <p class="text-gray-600 font-bold text-sm ml-1">
                                    4.96
                                    <span class="text-gray-500 font-normal"
                                        >(76 reviews)</span
                                    >
                                </p>
                            </div>
                            <div class="">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 text-pink-500"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                        clip-rule="evenodd"
                                    />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
 </div>

 
</x-app-layout>
