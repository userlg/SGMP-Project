<div>
    {{-- Table Tailwindcss Custom --}}
    <div class="mx-auto mt-4">
        <table class='table w-full 2xl:w-3/4'>
            <thead>
                <tr>
                    <th class="invisible sm:visible sm:w-10 lg:w-auto">#</th>
                    <th class="text-xs sm:text-base w-20 md:w-1/4 lg:w-auto capitalize">titulo</th>
                    <th class='text-xs sm:text-base w-1/3 md:w-1/4 lg:w-auto overflow-x-hidden capitalize'>
                        description</th>
                    <th class="text-xs sm:text-base w-1/3 md:w-1/4 lg:w-auto capitalize">Creado</th>
                    <th class="text-xs sm:text-base   w-1/3 sm:w-1/2 md:w-36 lg:w-auto capitalize">Opciones</ </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td class='invisible sm:visible text-xs sm:text-base'>{{ $project->id }}</td>
                        <td class="text-xs md:text-base overflow-x-hidden">{{ $project->title }}</td>
                        <td class="text-xs md:text-base">{{ $project->description }} gr</td>
                        <td>
                            <div class="flex flex-row justify-center items-center gap-2">
                                <p class="text-xs md:text-base font-medium"> {{ $project->created_at->diffForHumans() }}
                                </p>
                            </div>
                        </td>
                        <td>
                            <div class="flex flex-row items-center justify-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="#FF2D20" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="#FF2D20" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                </svg>
                            </div>
                        </td>
                    </tr>
                @endforeach
                {{-- Pagination --}}
            </tbody>
        </table>
        {{-- -- End of table --- --}}
        <div class='my-4 gap-2 mx-auto flex flex-col justify-center items-center'>
            {{ $projects->links('vendor.livewire.tailwind') }}
        </div>
    </div>

</div>
