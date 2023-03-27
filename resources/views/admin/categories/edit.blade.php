<x-dash>
    @include('components.flash-message')
        <section class="w-full flex flex-col h-full gap-4">
            <div class="w-full flex-col items-center justify-between md:flex-row">
                <div class="w-full flex justify-between">
                    <h1 class="text-sm font-semibold leading-relaxed text-gray-600 md:text-lg">Categories/Update</h1>
                </div>

               
            
            </div>        
          
            <form method="POST" action="/category/{{$category->id}}/update"  class="mt-5">
                @csrf
                @method('PUT')
                <div>
                    <label for="name" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Category name</label>
                    <input placeholder="History" value="{{$category->name}}" name="name" id="name" type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                    @error('name')
                    <p class="mt-1 text-xs text-red-500 ">
                        {{$message}}
                    </p>
                    @enderror
                </div>
              
                
                <div class="flex justify-end mt-6">
                    <button type="submit" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-600 rounded-md dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:bg-blue-700 hover:bg-blue-600 focus:outline-none focus:bg-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                        Update
                    </button>
                </div>
            </form>
        </section>




</x-dash>
