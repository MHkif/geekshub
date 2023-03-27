@props(['active'])

@php
// flex gap-2 items-center  hover:text-blue-500 px-2  rounded block mb-5 md:py-1 md:hover:bg-gray-200 md:hover:text-gray-700 transition duration-150 ease-in-out
$classes = ($active ?? false)
            ? 'inline-flex justify-center bg-blue-600  cursor-pointer items-center px-3 py-2 rounded-full  text-md font-medium leading-5 text-gray-100  md:gap-2 hover:bg-blue-400 hover:text-gray-100 md:rounded md:w-full md:p-2 md:justify-start transition duration-100 ease-in-out '
            : 'inline-flex justify-center cursor-pointer items-center px-3 py-2  rounded-full  text-sm font-medium leading-5 text-gray-900  md:gap-2 hover:bg-blue-400 hover:text-gray-100 md:justify-start md:rounded  md:p-2 md:w-full transition duration-100 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    
    {{ $slot }}
</a>
