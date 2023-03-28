@props(['book'])

<a href="/book/{{$book->id}}"
    class="w-full flex flex-col space-y-2 rounded shadow-lg p-2 md:p-3 bg-white"
    >
    <div class="w-full bg-white grid place-items-center">
            {{-- <section
            class="relative h-72 w-full rounded bg-red-100 "
                >
                <div
                class="absolute top-0 left-0 right-0 h-full w-full rounded bg-contain bg-no-repeat  bg-red-100 "
                style="background-image: url('{{asset('books/python.png')}}')"  
                >
        </div>
            </section> --}}
            <section
            class=" h-full w-full rounded bg-red-100 "
                >
                <img src={{$book->cover ?  asset("storage/$book->cover") : asset("/books/python.png")}} class="rounded h-80 w-full object-fit" >
            </section>
        </div>

        <div
            class="w-full bg-white justify-center flex flex-col space-y-2 p-2"
        >
            <h3 class="font-black text-gray-800 md:text-xl text-md overflow-hidden truncate ">
                {{ $book->title}}
                </h3>
            <h3 class=" text-xs  font-semiBold text-gray-500 md:text-sm uppercase">{{$book->author}}</h3>
            <div class="flex flex-col gap-4 font-black text-gray-800">
                <div class="flex justify-start item-center">
                    
                    <div class="flex justify-start  items-center">
                        {{-- <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 text-yellow-500"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                        >
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                            />
                        </svg> --}}
                        <div class="rating">
                           
                         
                            <label>
                              <input type="radio" name="stars" value="5" />
                              <span class="icon">★</span>
                              <span class="icon">★</span>
                              <span class="icon">★</span>
                              <span class="icon">★</span>
                              <span class="icon">★</span>
                            </label>
                        </div>
                        {{-- <p class="text-gray-600 font-bold text-sm ml-1">
                            {{$book->rating}} --}}
                            {{-- <span class="text-gray-500 font-normal"
                            >(76 reviews)</span
                            > --}}
                        {{-- </p> --}}
                    </div>
                    
                </div>
                <div class="flex justify-between item-center">
                    <div class="flex items-center gap-2 ">
                        {{-- <div class=""> --}}
                            {{-- <i class="fa-solid fa-hands-clapping text-blue-600 "></i> --}}
                        {{-- </div> --}}
                        <form method="POST" action="/book/{{$book->id}}/like">
                            @csrf
                            @if ($book->is_liked)
                            <button>
                                <i class="fa-solid fa-thumbs-up text-blue-600 text-lg"></i>
                            </button>
                            @else
                            <button>
                                <i class="fa-regular fa-thumbs-up text-blue-600 text-lg"></i>
                            </button>
                            @endif
                        </form>
                        <p class="text-gray-600 font-bold text-sm ">
                            {{ $book->likes->count()}} likes
                        </p>

                    </div>
                    
                    <form method="POST" action="/book/{{$book->id}}/favorite">
                        @csrf
                        @if ($book->is_Favorite)
                        <button>
                            <i class="fa-solid fa-bookmark text-lg "></i> 
                        </button>
                        @else
                        <button>
                            <i class="fa-regular fa-bookmark text-lg"></i> 
                        </button>
                        @endif
                    </form>
                    
                </div>
                
            </div>
    </div>
</a>