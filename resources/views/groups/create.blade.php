
<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot> --}}
  
    <div  class="w-full grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-8">
    
  @for($i = 0; $i < 8 ; $i++)
  <div class="bg-white p-4 rounded-md flex flex-col gap-4 border border-gray-100 shadow-md">
    <h1 class="font-black text-gray-600 md:text-xl text-md">Group Name</h1>
    <div class="flex flex-col gap-2">
        <div class="flex">
            <div class="flex  w-10 h-10 justify-center items-center mr-2  rounded-full border-r-2 border-white"><img class="rounded-full" alt="A" src="https://randomuser.me/api/portraits/women/68.jpg"> </div>
            <div class="flex  w-10 h-10 justify-center items-center  mr-2 -ml-3 rounded-full border-r-2 border-white"><img class="rounded-full" alt="A" src="https://randomuser.me/api/portraits/men/68.jpg"> </div>
            <div class="flex  w-10 h-10 justify-center items-center  mr-2 -ml-3 rounded-full border-r-2 border-white"><img class="rounded-full" alt="A" src="https://randomuser.me/api/portraits/men/80.jpg"> </div>
            <div class="flex  w-10 h-10 bg-gray-500 justify-center items-center  mr-2 -ml-3 rounded-full  text-xl text-white">+5 </div>
        </div>
  
      <h1 class="text-gray-500 font-medium text-xs ">8 Participants</h1>
    </div>
    <button class="px-4 py-2 text-sm text-blue-500 font-semibold rounded-md border border-blue-500 hover:text-white hover:bg-blue-500 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Ask To Join</button>
  
  </div>
  @endfor
          
  </div>
  
  
  </x-app-layout>
  
  
  