@props(['group'])

<a href={{ $group->is_member ? "groups/$group->id" : "#" }} class="bg-white p-4 rounded-md flex flex-col gap-4 border border-gray-100 shadow-md">
    <h1 class="font-black text-gray-600 md:text-xl text-md">{{ $group->name }}</h1>
    <div class="flex flex-col gap-2">
        <div class="flex">
            <div class="flex  w-10 h-10 justify-center items-center mr-2  rounded-full border-r-2 border-white"><img class="rounded-full" alt="A" src="https://randomuser.me/api/portraits/women/68.jpg"> </div>
            <div class="flex  w-10 h-10 justify-center items-center  mr-2 -ml-3 rounded-full border-r-2 border-white"><img class="rounded-full" alt="A" src="https://randomuser.me/api/portraits/men/68.jpg"> </div>
            <div class="flex  w-10 h-10 justify-center items-center  mr-2 -ml-3 rounded-full border-r-2 border-white"><img class="rounded-full" alt="A" src="https://randomuser.me/api/portraits/men/80.jpg"> </div>
            <div class="flex  w-10 h-10 bg-gray-500 justify-center items-center  mr-2 -ml-3 rounded-full  text-xl text-white">+5 </div>
        </div>
  
      <h1 class="text-gray-500 font-medium text-xs ">{{ $group->members }} Members</h1>
    </div>
    @if(auth()->user()->id == $group->user_id)
    <form method="POST" action="/group/{{$group->id}}/delete" >
    @csrf
    @method('delete')
    <button class="w-full px-4 py-2 text-sm text-red-500 font-semibold rounded border border-red-500 hover:text-white hover:bg-red-500 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
       Delete The Group
    </button>
</form>
    @elseif($group->is_member)

    <form method="POST" action="/group/{{$group->id}}/leave/{{auth()->user()->id}}" >
        @csrf
    <button name="group_id" value="{{$group->id}}" type="submit" class="w-full px-4 py-2 text-sm text-blue-500 font-semibold rounded border border-blue-500 hover:text-white hover:bg-blue-500 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
        Leave 
    </button>
</form>
    @else

    <form method="POST" action="/group/{{$group->id}}/join/{{Auth::user()->id}}" >
        @csrf
    <button name="group_id" value="{{$group->id}}" type="submit" class="w-full px-4 py-2 text-sm text-white bg-blue-500 font-semibold rounded border border-blue-500 hover:text-white hover:bg-blue-500 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
        Ask To Join 
    </button>
    </form>
    @endif
  
</a>