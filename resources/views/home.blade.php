<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot> --}}
  
{{-- Discover --}}

    @include('components.flash-message')
    <div>
        <h3 class="font-black text-gray-800 md:text-2xl text-lg  m-4">
            Discover
        </h3>
    
        <div class="w-full grid grid-cols-2 gap-6">

        <x-horizontal-card/>
        <x-horizontal-card/>
    
        </div>
    </div>

   
    <div>
        <h3 class="font-black text-gray-800 md:text-2xl text-lg my-4">
            Latest Added Books 
        </h3>
    
        @unless (count($books) == 0)
        <div class="w-full grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                
                @foreach ($books as $book)
                <x-book-card :book='$book' />
                @endforeach
            </div>
            @else
                <p class="my-16 font-black text-gray-800  text-lg text-center md:text-2xl">
                    No Books Found
                </p>
            @endunless
      

        <div class="mt-6 p-4">
            {{$books->links()}}
        </div>
    </div>
    
 </div>

 
</x-app-layout>
