<x-layouts.base title="Dashboard">
    <div>
        <div class="flex flex-row gap-1  justify-center items-center">
            <p class="dark:text-white"> Welcome To Dashboard </p>
            <h3 class="text-sred font-semibold capitalize"> {{ auth()->user()->name }} </h3>
        </div>

        <div class="my-4">
            @if ($projects == 0)
                <p class="dark:text-white text-center">Crea tu primer proyecto!!</p>
            @else
                <p class="dark:text-white text-center">Total de Proyectos <strong
                        class="text-sred font-bold">{{ $projects }}</strong></p>
            @endif
        </div>
    </div>

    <livewire:create-project>


</x-layouts.base>
