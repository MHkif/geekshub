<x-normal-layout>
    

    @include('components.flash-message')
<div class="h-screen flex flex-col container mx-auto shadow-lg rounded-md">
    <!-- headaer -->
<div class="px-5 py-5 flex justify-between items-center bg-white border-b-2">
   <a href="/groups" class="flex items-center  gap-4 px-3 py-2 bg-gray-100 border border-gray-200 rounded-md shadow-md">
     <i class="fa-solid fa-angle-left"></i> 
     
     <h3 class="font-semibold ">back</h3>

   </a>
  @if(Auth::user()->id == $group->user_id)
  <button class="px-4 py-2 text-sm text-red-500 font-semibold rounded-md border border-red-500 hover:text-white hover:bg-red-500 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
     Delete The Group
  </button>
  @endif
</div>
<!-- end header -->

<!-- Chatting -->
<div class="flex flex-row h-full justify-between bg-white">

  <!-- chat list -->
  <div class="flex h-full flex-col w-2/5 border-r-2 overflow-y-auto">
    <!-- search compt -->
    <div class="flex flex-col gap-2 border-b-2 py-3 px-2">
        <div class="text-md font-semibold text-gray-600">Memebers ({{$group->members}})</div>
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
        <div class="w-1/4">
        <img
            src="{{$member->avatar ?  asset("avatar/$member->avatar") : asset("avatar/profile.png")}}"
            class="object-contain h-12 w-12 rounded-full border border-gray-400"
            alt=""
        />
        </div>
        <div class="w-full">
        <div class=" font-semibold text-sm md:text-md">{{$member->name}}</div>
        </div>
    </div>
    @endforeach
    
    <!-- end user list -->
  </div>
  <!-- end chat list -->


  <!-- message -->
    <div class="relative w-full flex flex-col min-h-full justify-between">
      {{-- Messages --}}
      <div class="flex flex-col mt-5 mb-16  px-3 text-sm md:text-md max-h-full overflow-y-scroll ">
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
  <div class="w-2/5 border-l-2 px-5">
    <div class="flex flex-col">
      <div class="py-4">
        <h3 class="font-semibold text-xl">{{$group->name}}</h3>
      </div>
      

      <img
        src="{{$book->cover ?  asset("storage/$book->cover") : asset("/books/python.png")}}"
        class="object-fit rounded-xl h-68"
        alt=""
      />
      <div class="font-semibold py-4">Created 22 Sep 2021</div>
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