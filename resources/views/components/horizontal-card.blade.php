@props(['discoverBook'])

<div
class="w-full flex flex-col md:flex-row md:space-x-5 space-y-3 md:space-y-0 rounded-xl shadow-lg p-3 max-w-xs md:max-w-3xl mx-auto border border-white bg-white"
>
<div class="w-full md:w-[40%]   bg-white grid place-items-center">
    <section
        class="h-72 w-full rotate-3  rounded transform space-y-6  bg-red-100 duration-300 hover:rotate-0"
    >
      <img src="books/malcom-x.png" class="rounded h-full w-full object-fit" >
    </section>
</div>

<div
    class="w-full md:w-auto bg-white justify-center flex flex-col space-y-2 p-4"
>
    <h3 class="font-black text-gray-800 md:text-xl text-md">
        The Autobiography of Malcolm X
    </h3>
    <h3 class="md:text-lg text-gray-500 text-base">MALCOLM X, ALEX HALEY</h3>
    <div class="text-xl font-black text-gray-800">
        <div class="flex justify-between item-center">
            <p class="text-gray-500 font-medium hidden md:block">
                Pages
            </p>
            <div class="flex items-center">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 text-yellow-500"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                >
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                    />
                </svg>
                <p class="text-gray-600 font-bold text-sm ml-1">
                    4.96
                    <span class="text-gray-500 font-normal"
                        >(76 reviews)</span
                    >
                </p>
            </div>
            <div class="">
                <i class="fa-regular fa-thumbs-up text-blue-600 text-lg"></i>
            </div>
        </div>
    </div>
</div>
</div>