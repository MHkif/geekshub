@if(session()->has('success'))
 <div  x-data="{show: true}" x-init="setTimeout(() => show = false, 6000)"
    x-show="show"
 class="fixed top-0 left-1/2 text-center transform -translate-x-1/2  bg-green-400 text-white px-24 py-3 ">
    <p>
        {{session('success')}}
    </p>
 </div>
@elseif(session()->has('memberNotAdded'))
<div  x-data="{show: true}" x-init="setTimeout(() => show = false, 6000)"
   x-show="show"
class="fixed top-0 left-1/2 text-center transform -translate-x-1/2 border border-red-600 bg-red-300 text-white px-24 py-3 ">
   <p>
       {{session('memberNotAdded')}}
   </p>
</div>
@elseif(session()->has('notCreated'))
<div  x-data="{show: true}" x-init="setTimeout(() => show = false, 6000)"
   x-show="show"
class="fixed top-0 left-1/2 text-center transform -translate-x-1/2 border border-red-600 bg-red-600 text-white px-24 py-3 ">
   <p>
       {{session('notCreated')}}
   </p>
</div>
@elseif(session()->has('leave'))
<div  x-data="{show: true}" x-init="setTimeout(() => show = false, 6000)"
   x-show="show"
class="fixed top-0 left-1/2 text-center transform -translate-x-1/2 border border-red-600 bg-red-600 text-white px-24 py-3 ">
   <p>
       {{session('leave')}}
   </p>
</div>
@elseif(session()->has('like'))
<div  x-data="{show: true}" x-init="setTimeout(() => show = false, 6000)"
   x-show="show"
class="fixed top-0 left-1/2 text-center transform -translate-x-1/2 border border-green-600 bg-green-600 text-white px-24 py-3 ">
   <p>
       {{session('like')}}
   </p>
</div>
@elseif(session()->has('dislike'))
<div  x-data="{show: true}" x-init="setTimeout(() => show = false, 6000)"
   x-show="show"
class="fixed top-0 left-1/2 text-center transform -translate-x-1/2 border border-red-600 bg-red-600 text-white px-24 py-3 ">
   <p>
       {{session('dislike')}}
   </p>
</div>
@elseif(session()->has('addFavorite'))
<div  x-data="{show: true}" x-init="setTimeout(() => show = false, 6000)"
   x-show="show"
class="fixed top-0 left-1/2 text-center transform -translate-x-1/2 border border-green-600 bg-green-600 text-white px-24 py-3 ">
   <p>
       {{session('addFavorite')}}
   </p>
</div>
@elseif(session()->has('removeFavorite'))
<div  x-data="{show: true}" x-init="setTimeout(() => show = false, 6000)"
   x-show="show"
class="fixed top-0 left-1/2 text-center transform -translate-x-1/2 border border-red-600 bg-red-600 text-white px-24 py-3 ">
   <p>
       {{session('removeFavorite')}}
   </p>
</div>
@endif