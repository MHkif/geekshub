<x-dash>
    @include('components.flash-message')
        <section class="w-full flex flex-col h-full gap-4 px-6">
            <div class="w-full flex-col items-center justify-between md:flex-row">
                <div class="w-full flex justify-between">
                    <h1 class="text-sm font-semibold leading-relaxed text-gray-600 md:text-lg">Books/Create</h1>
                </div>

               
            
            </div>        
            <p class="mt-2 text-sm text-gray-500 ">
                Add new book to your site .                                   </p>

            <form method="POST" action="/book" enctype="multipart/form-data" class="mt-5">
                @csrf
                {{-- @method('POST') --}}
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
                
                <div class="flex justify-end my-6">
                    <button type="submit" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-600 rounded-md dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:bg-blue-700 hover:bg-blue-600 focus:outline-none focus:bg-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                        Create
                    </button>
                </div>
            </form>
        </section>




</x-dash>
