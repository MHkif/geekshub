<x-dash>
                   
    <section class="w-full flex flex-col h-full gap-4">
        <div class="w-full flex-col items-center justify-between md:flex-row">
            <div class="w-full flex justify-between">
                <h1 class="text-md font-semibold leading-relaxed text-gray-800 md:text-xl">All Groups</h1>

    
            </div>
        
        </div>        
      
        <div class=" overflow-hidden rounded shadow-lg ">
            <div class="h-full overflow-auto">
                <table class="w-full ">
                    <thead>
                        <tr class="text-sm font-semibold tracking-wide text-left text-white bg-blue-600 rounded uppercase border-b border-gray-600">
                            <th class="py-4 px-6 ">ID</th>
                            <th class="py-4 px-6 ">Name</th>
                            <th class="py-4 px-6 ">Creator</th>
                            <th class="py-4 px-6 ">Book</th>
                            <th class="py-4 px-6 ">Members</th>
                            <th class="py-4 px-6 ">Updated</th>
                            <th class="py-4 px-6 ">Created</th>


                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @foreach ($groups as $group)
                            <tr class="text-gray-700">
                                <td class="px-4 py-3 text-sm font-semibold border">{{ $group->id }}</td>
                                <td class="px-4 py-3 text-sm font-semibold border">{{ $group->name }}</td>
                                <td class="px-4 py-3 text-sm font-semibold border">{{ $group->user_id }}</td>
                                <td class="px-4 py-3 text-sm font-semibold border">{{ $group->book_id }}</td>
                                <td class="px-4 py-3 text-sm font-semibold border">{{ $group->members }}</td>
                                <td class="px-4 py-3 text-sm font-semibold border">{{ $group->updated_at }}</td>
                                <td class="px-4 py-3 text-sm border">{{ $group->created_at }}</td>
                              
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </section>



</x-dash>

