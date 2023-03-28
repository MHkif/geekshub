
<x-app-layout>
 
    @include('components.flash-message')
      <div x-data="{modelOpen: false }"  class="flex justify-between items-center p-6">
        <h1 class="font-black text-gray-600 md:text-xl text-md">Groups</h1>
          <button @click="modelOpen=!modelOpen" class="rounded py-2.5 px-3 text-sm font-medium text-white bg-blue-700 hover:bg-blue-800 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <i class="fa-solid fa-plus mr-2"></i>Create Group
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
                        <h1 class="text-xl font-medium text-gray-800 ">Create A Group</h1>
    
                        <button @click="modelOpen = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </button>
                    </div>
    
                    <p class="mt-2 text-sm text-gray-500 ">
                        Add members to your group and start a discussion .
                    </p>
    
                    <form method="POST" action="/groups/myGroups/create"  class="mt-5">
                        @csrf
                        <div>
                            <label for="name" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Group name</label>
                            <input value="{{old('name')}}" placeholder="Aliens Homies" type="text" name="name"    class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                            @error('name')
                            <p class="mt-1 text-xs text-red-500 ">
                                {{$message}}
                            </p>
                            @enderror
                        </div>
                      
                        <div class="mt-4">
                            <label for="book" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Pick A Book</label>
                             <select  value="{{old('book_id')}}" name="book_id" id="book" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-blue-400  focus:ring focus:ring-blue-300 focus:ring-opacity-40" aria-placeholder="category" aria-label="select a category" >
                               @foreach($books as $book)
                                <option value="{{$book->id}}"> {{$book->title}}</option>    
                                @endforeach          
                             </select>
                             <p class="mt-2 text-sm text-gray-500 ">
                                This Field is required to create a group .
                            </p>
                             @error('book_id')
                            <p class="mt-1 text-xs text-red-500 ">
                                {{$message}}
                            </p>
                            @enderror
                        </div>
                      

                        
                        <div class="flex justify-end mt-6">
                         
                            <button type="submit" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-600 rounded dark:bg-blue-500 dark:hover:bg-blue-700 dark:focus:bg-blue-700 hover:bg-blue-600 focus:outline-none focus:bg-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                            Create
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @unless (count($groups) == 0)
     <div  class="w-full grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 px-6">
  
                
                @foreach ($groups as $group)
                <x-group-card :group='$group' />
                @endforeach
            </div>
            @else
                <p class="my-16 font-black text-gray-800  text-lg text-center md:text-2xl">
                    No Groups Found
                </p>
            @endunless
      

        {{-- <div class="mt-6 p-4">
            {{$groups->links()}}
        </div> --}}
      </div>


</x-app-layout>


