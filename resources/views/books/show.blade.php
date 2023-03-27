<x-app-layout>

<div class="w-full flex flex-col md:flex-row justify-between gap-12">
    <div class="w-full h-screen rounded-md  py-4  md:w-[40%]">
        {{-- <section
            class="w-full  h-full rounded-md space-y-6  "
        > --}}
            <img
            src="{{$book->cover ?  asset("storage/$book->cover") : asset("/books/python.png")}}" 
                class="rounded-md h-full w-full object-fit"
            />
        {{-- </section> --}}
    </div>

    <div class="w-full py-6 flex flex-col justify-between  md:w-[60%]">
        <div>
            <h3 class="text-sm text-gray-900 text-center font-bold md:text-2xl">{{ $book->title}}</h3>
         
        </div>
        <div>
            <h3 class="text-gray-900 font-bold">About This Book</h3>
            <p class="w-full text-gray-500 font-medium">
              {{$book->description}}
            </p>
        </div>
        <div>
            <h3 class="text-gray-900 font-bold">From The Book</h3>
            <p class="w-full text-gray-500 font-medium">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque,
                consequatur excepturi aperiam ducimus officiis corporis illum,
                earum i Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Atque, consequatur excepturi aperiam ducimus officiis corporis
                illum, earum iusto fugiat id facilis voluptatibus laboriosam
                inventore distinctio, consequuntur rerum tempora! Dolores,
                libero!usto fugiat id facilis voluptatibus laboriosam inventore
                distinctio, consequuntur rerum tempora! Dolores, libero! Lorem
                ipsum dolor sit amet consectetur adipisicing elit. Atque,
                consequatur excepturi aperiam ducimus officiis corporis illum,
                earum iusto fugiat id facilis voluptatibus laboriosam inventore
                distinctio, consequuntur rerum tempora! Dolores, libero!
            </p>
        </div>

        <button @click="modelOpen =!modelOpen" class="flex items-center  justify-center px-3 py-2.5 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-600 rounded-md dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:bg-blue-700 hover:bg-blue-600 focus:outline-none focus:bg-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
            </svg>

            <span>Read the book</span>
        </button>
    </div>
</div>


</x-app-layout>