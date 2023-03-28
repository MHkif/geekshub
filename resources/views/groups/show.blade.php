<x-normal-layout>
    

    @include('components.flash-message')
<div class="h-screen flex flex-col   shadow-lg rounded-md">
    <!-- headaer -->
<div class="px-5 py-5 flex justify-between items-center bg-white border-b-2">
   <a href="/groups" class="flex items-center  gap-4 px-3 py-2 bg-gray-100 border border-gray-200 rounded-md shadow-md">
     <i class="fa-solid fa-angle-left"></i> 
     
     <h3 class="font-semibold ">back</h3>

   </a>
  @if(Auth::user()->id == $group->user_id)

  <form method="POST" action="/group/{{$group->id}}/delete" >
    @csrf
    @method('delete')
    <button class="px-4 py-2 text-sm text-red-500 font-semibold rounded-md border border-red-500 hover:text-white hover:bg-red-500 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
      Delete The Group
    </button>
  </form>
  @endif
</div>
<!-- end header -->

<div class="flex items-center border-b-2 justify-start px-3 md:hidden">
    <div class="flex items-center gap-2 w-52">
      <button type="submit" class="rounded p-2   text-sm font-medium text-white bg-blue-700 hover:bg-blue-800 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        {{-- <i class="fa-solid fa-magnifying-glass"></i> --}}
        <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
        </svg>
    </button>
      <h3 class="text-sm font-semibold text-gray-600 ">Memebers ({{$group->members}})</h3>
     
    </div>
    
  <div class="flex gap-2 w-full overflow-x-auto">
    @foreach ($members as $member)
   <div class="flex p-2 gap-4 justify-center items-center">
       {{-- <div class="w-1/4"> --}}
       <img
           src="{{$member->avatar ?  asset("avatar/$member->avatar") : asset("avatar/profile.png")}}"
           class="object-contain h-8 w-8  rounded-full border border-gray-400 md:h-10 md:w-10"
           alt=""
       />
     
   </div>
   @endforeach
 </div>
</div>

<div class="flex flex-col w-full h-full justify-between bg-white md:flex-row">

  
  <!-- chat list -->
  <div class="hidden flex h-full flex-col w-2/5 border-r-2 overflow-y-auto md:flex">
    <!-- search compt -->
    <div class="flex flex-col gap-2 border-b-2 py-3 px-2">
        <div class="text-sm font-semibold text-gray-600 lg:text-lg">Memebers ({{$group->members}})</div>
      <input
        type="text"
        placeholder="Search Member"
        class="text-sm p-2 border-1 border-gray-300 rounded-md w-full"
      />
    </div>
    <!-- end search compt -->
    <!-- user list -->
    @foreach ($members as $member)
    <div class="flex flex-row p-2 gap-4 justify-center items-center border-b-2">
        {{-- <div class="w-1/4"> --}}
        <img
            src="{{$member->avatar ?  asset("avatar/$member->avatar") : asset("avatar/profile.png")}}"
            class="object-contain h-8 w-8  rounded-full border border-gray-400 md:h-10 md:w-10"
            alt=""
        />
        {{-- </div> --}}
        <div class="w-full">
        <div class=" font-semibold text-sm lg:text-md">{{$member->name}}</div>
        </div>
    </div>
    @endforeach
    
    <!-- end user list -->
  </div>
  <!-- end chat list -->


  <!-- message -->
    <div class="relative max-h-full flex flex-col md:max-h-screen justify-between  md:w-full">
      {{-- Messages --}}
      <div class="flex flex-col mt-5 mb-16 h-full px-3 text-sm md:text-md max-h-full overflow-y-scroll ">
        @foreach($group->comments as $comment)
        @php
        $avatar = $comment->user->avatar;
       @endphp
        @if ($comment->user_id == Auth::user()->id)
        <div class="flex justify-end mb-4">
            <div
              class="mr-2 py-3 px-4 bg-blue-400 rounded-bl-2xl  rounded-tl-2xl rounded-br-xl text-white"
              >
              {{$comment->content}}
            </div>
                <img
                src="{{$avatar ?  asset("avatar/$avatar"): asset("avatar/profile.png")}}"
                class="object-contain h-8 w-8 rounded-full"
                alt=""
                />
        </div>
            
        @else
        <div class="flex justify-start mb-4">
        
            <img
            src="{{$avatar ?  asset("avatar/$avatar"): asset("avatar/profile.png")}}"
            class="object-contain h-8 w-8 rounded-full"
            alt=""
            />
            <div
            class="ml-2 py-3 px-4 bg-gray-400 rounded-br-2xl rounded-tr-2xl rounded-bl-xl text-white"
            >
        {{$comment->content}}
            </div>
        </div>
        @endif
        @endforeach
      </div>
 

        <form method="POST" action={{"/group/$group->id/comment/create"}} class="absolute w-full flex  gap-2 bg-gray-50 bottom-0 p-3 ">
          @csrf
         
          <input
              class="w-full  bg-gray-100 px-3 rounded-md"
              type="text"
              name='content'
              placeholder="type your comment here..."
          />
          <button class=" flex items-center justiify-center px-2">
              <i class="fa-solid fa-paper-plane text-xl text-blue-500"></i>
          </button>
        </form>
    </div>

  <!-- end message -->
  <div class=" w-full  border-l-2 px-5  md:w-2/5 md:flex">
    <div class="flex flex-col">
      <div class="py-4">
        <h3 class="font-semibold text-xl">{{$group->name}}</h3>
      </div>
      

      <img
        src="{{$book->cover ?  asset("storage/$book->cover") : asset("/books/python.png")}}"
        class="object-fit rounded-xl h-68"
        alt=""
      />
      <div class="font-semibold py-4">Created 22 Mars 2023</div>
      {{-- <div class="font-light">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt,
        perspiciatis!
      </div> --}}
      </div>
    </div>
  </div>
</div>
</div>
    
    
    </x-normal-layout>