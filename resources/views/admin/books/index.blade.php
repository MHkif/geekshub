<x-dash>
 
  
    
        {{-- <h3 class="text-sm text-gray-900 text-center font-bold md:text-2xl">No Books</h3> --}}
        <!-- Available Medicines -->
                   
        <section class="w-full flex flex-col h-full gap-4">
            <div class="w-full flex-col items-center justify-between md:flex-row">
                <div class="w-full flex justify-between">
                    <h1 class="text-md font-semibold leading-relaxed text-gray-800 md:text-xl">All Books </h1>
                    <a href="/admin/books/create" class="flex items-center justify-center px-3 py-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-600 rounded-md dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:bg-blue-700 hover:bg-blue-600 focus:outline-none focus:bg-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
    
                        <span>New</span>
                    </a>
            {{-- Modal --}}
                    {{-- <div x-data="{ modelOpen: false }">
                        <button @click="modelOpen =!modelOpen" class="flex items-center justify-center px-3 py-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-600 rounded-md dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:bg-blue-700 hover:bg-blue-600 focus:outline-none focus:bg-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                            </svg>
        
                            <span>New Book</span>
                        </button>
        
                        <div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                            <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                                <div x-cloak @click="modelOpen = false" x-show="modelOpen" 
                                    x-transition:enter="transition ease-out duration-300 transform"
                                    x-transition:enter-start="opacity-0" 
                                    x-transition:enter-end="opacity-100"
                                    x-transition:leave="transition ease-in duration-200 transform"
                                    x-transition:leave-start="opacity-100" 
                                    x-transition:leave-end="opacity-0"
                                    class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"
                                ></div>
        
                                <div x-cloak x-show="modelOpen" 
                                    x-transition:enter="transition ease-out duration-300 transform"
                                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                    x-transition:leave="transition ease-in duration-200 transform"
                                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
                                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                    class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl"
                                >
                                    <div class="flex items-center justify-between space-x-4">
                                        <h1 class="text-xl font-medium text-gray-800 ">New Book</h1>
        
                                        <button @click="modelOpen = false" class="text-red-600 focus:outline-none hover:text-red-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </button>
                                    </div>
        
                                    <p class="mt-2 text-sm text-gray-500 ">
                                        Add new book to your site .                                   </p>
        
                                    <form method="POST" action="/book" enctype="multipart/form-data" class="mt-5">
                                        @csrf
                                        <div>
                                            <label for="title" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Book Title</label>
                                            <input placeholder="Al Moqadimuh" value="{{old('title')}}" name="title" type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                            @error('title')
                                            <p class="mt-1 text-xs text-red-500 ">
                                                {{$message}}
                                            </p>
                                            @enderror
                                        </div>
        
                                        <div class="mt-4">
                                            <label for="author" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Book's Auhtor</label>
                                            <input placeholder="Ibn Khaldoun"  value="{{old('author')}}" name="author" type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40" >
                                            @error('author')
                                            <p class="mt-2 text-xs text-red-500 ">
                                                {{$message}}
                                            </p>
                                            @enderror
                                        </div>
                                        
                                        <div class="mt-4">
                                            <label for="category" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Book's Category</label>
                                             <select  value="{{old('category_id')}}" name="category_id" id="category" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-blue-400  focus:ring focus:ring-blue-300 focus:ring-opacity-40" aria-placeholder="category" aria-label="select a category" >
                                               @foreach($categories as $category)
                                                <option value="{{$category->id}}"> {{$category->name}}</option>    
                                                @endforeach          
                                             </select>
                                             @error('category_id')
                                            <p class="mt-1 text-xs text-red-500 ">
                                                {{$message}}
                                            </p>
                                            @enderror
                                        </div>

                                        
                                        <div class="mt-4">
                                            <label for="description" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Book's Description</label>
                                           <textarea class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40"
                                            name="description" id="description" cols="30" rows="5"
                                            placeholder="Once Upon a time ...">{{old('description')}}</textarea>
                                        
                                            @error('description')
                                            <p class="mt-1 text-xs text-red-500 ">
                                                {{$message}}
                                            </p>
                                            @enderror
                                        </div>


                                        <div class="mt-4">
                                            <label for="cover" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Book's Cover</label>
                                            <input  type="file" id="cover" name="cover" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                            @error('cover')
                                            <p class="mt-1 text-xs text-red-500 ">
                                                {{$message}}
                                            </p>
                                            @enderror
                                        </div>
                                       
                                        <div class="mt-4 flex space-x-2">
                                            <div class="flex items-center space-x-3 cursor-pointer" x-data="{ show: false }" @click="show =!show">
                                                <div class="relative w-10 h-5 transition duration-200 ease-linear rounded-full"
                                                    :class="[show ? 'bg-blue-600' : 'bg-gray-300']">
                                                    <label for="show"
                                                        @click="show =!show"
                                                        class="absolute left-0 w-5 h-5 mb-2 transition duration-100 ease-linear transform bg-white border-2 rounded-full cursor-pointer"
                                                        :class="[show ? 'translate-x-full border-blue-500' : 'translate-x-0 border-gray-300']"></label>
                                                        <input type="checkbox" name="archived" class=" w-full h-full rounded-full appearance-none opacity-0"/>
                                                    </div>
                                                <p class="text-gray-500">Archived</p>
                                            </div>
                                        </div>
                                        
                                        <div class="flex justify-end mt-6">
                                            <button type="submit" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-600 rounded-md dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:bg-blue-700 hover:bg-blue-600 focus:outline-none focus:bg-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                                                Create
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> --}}
        
                </div>
            
            </div>        
          
            <div class=" overflow-hidden rounded shadow-lg ">
                <div class="h-full overflow-auto">
                    <table class="">
                        <thead>
                            <tr class="text-sm font-semibold tracking-wide text-left text-white bg-blue-600 rounded uppercase border-b border-gray-600">
                                <th class="py-4 px-6 ">Cover</th>
                                <th class="py-4 px-6 ">Title</th>
                                <th class="py-4 px-6 ">Author</th>
                                <th class="py-4 px-6 ">Category</th>
                                <th class="py-4 px-6 ">Rating</th>
                                <th class="py-4 px-6 ">Description</th>
                                <th class="py-4 px-6 ">Archived</th>
                                <th class="py-4 px-6 ">Created</th>
                                <th class="py-4 px-6  ">Action</th>


                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @foreach ($books as $book)
                                <tr class="text-gray-700">
                                    <td class="p-2  border">
                                        <div class="flex items-center">
                                            <div class=" w-24 h-32 overflow-hidden rounded">
                                                <img class="object-fit w-full h-full " src="{{$book->cover ?  asset("storage/$book->cover") : asset("/books/python.png")}}" alt="" loading="lazy" />

                                            </div>

                                        </div>
                                    </td>
                                    <td class="px-4 py-3 text-sm font-semibold border">{{ $book->title }}</td>

                                    <td class="px-4 py-3 text-sm font-semibold border">{{ $book->author }}</td>
                                    <td class="px-4 py-3 text-sm font-semibold border">{{ $book->category->name }}</td>

                                    <td class="px-4 py-3 text-sm border">{{ $book->rating }}</td>
                                    <td class="px-4 py-3 text-sm border">{{ $book->title }}</td>
                                    <td class="px-4 py-3 text-sm border">
                                        <h1 class=" font-meduim leading-relaxed {{ $book->archived? "text-red-600" : "text-green-600"  }} ">
                                            {{$book->archived ? "True" : "False"}}
                                         </h1>

                                    </td>
                                    <td class="px-4 py-3 text-sm border">{{ $book->created_at }}</td>
                                    <td class="py-4 px-6 text-sm border space-x-2 text-center ">
                                        <a href="/admin/books/{{$book->id}}/edit"> <i class="fa-solid fa-pen-to-square text-green-600"></i></a>

                                        <a href="/admin/books/{{$book->id}}/delete"> <i class="fa-solid fa-trash-can text-red-600"></i></a>

                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </section>




    


</x-dash>
