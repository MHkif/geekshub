<x-dash>
    @include('components.flash-message')
        <section class="w-full flex flex-col h-full gap-4">
            <div class="w-full flex-col items-center justify-between md:flex-row">
                <div class="w-full flex justify-between">
                    <h1 class="text-md font-semibold leading-relaxed text-gray-800 md:text-xl">All Categories</h1>
                    <a href="/category/create" class="flex items-center justify-center px-3 py-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-600 rounded-md dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:bg-blue-700 hover:bg-blue-600 focus:outline-none focus:bg-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-50">
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
        
                            <span>New Category</span>
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
                                        <h1 class="text-xl font-medium text-gray-800 ">New Category</h1>
        
                                        <button @click="modelOpen = false" class="text-red-600 focus:outline-none hover:text-red-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </button>
                                    </div>
        
                                    <p class="mt-2 text-sm text-gray-500 ">
                                        Add new category to your site .                                   </p>
        
                                    <form method="POST" action="/category/add"  class="mt-5">
                                        @csrf
                                       
                                        <div>
                                            <label for="name" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Category name</label>
                                            <input placeholder="History" value="{{old('name')}}" name="name" id="name" type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                            @error('name')
                                            <p class="mt-1 text-xs text-red-500 ">
                                                {{$message}}
                                            </p>
                                            @enderror
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
                    <table class="w-full ">
                        <thead>
                            <tr class="text-sm font-semibold tracking-wide text-left text-white bg-blue-600 rounded uppercase border-b border-gray-600">
                                <th class="py-4 px-6 ">ID</th>
                                <th class="py-4 px-6 ">Name</th>
                                <th class="py-4 px-6 ">Books Count</th>
                                <th class="py-4 px-6 ">Created</th>
                                <th class="py-4 px-6  ">Action</th>


                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @foreach ($categories as $category)
                                <tr class="text-gray-700">
                                    <td class="px-4 py-3 text-sm font-semibold border">{{ $category->id }}</td>
                                    <td class="px-4 py-3 text-sm font-semibold border">{{ $category->name }}</td>
                                    <td class="px-4 py-3 text-sm font-semibold border">{{ $category->book->count()}}</td>
                                    <td class="px-4 py-3 text-sm border">{{ $category->created_at }}</td>
                                    <td class="py-4 px-6 text-sm border space-x-2 text-center ">
                                        <a href="/category/{{$category->id}}/edit">
                                        {{-- @csrf --}}
                                        {{-- <button  name="id" >  --}}
                                            <i class="fa-solid fa-pen-to-square text-green-600"></i>
                                        {{-- </button> --}}
                                    </a>

                                        <a href="/category/{{$category->id}}/delete">
                                             <i class="fa-solid fa-trash-can text-red-600"></i>
                                            </a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </section>

<script>

function edit(event, id) {
  event.preventDefault();
//   passwordSpan = document.getElementById("passwordSpan");
//   emailSpan = document.getElementById("emailSpan");
//   email = document.getElementById("emailL").value;
//   password = document.getElementById("passwordL").value;

name = document.getElementById("name").value;
console.log('Here');

  let url = `http://localhost//category/${this.id}/edit`;

//   $.ajax({
//     url: url,
//     type: "POST",
//     data: {
//       name: name,
//     },
//     success: function (response) {
//       console.log(response);
     
//     },
//   });
}
        </script>


</x-dash>
