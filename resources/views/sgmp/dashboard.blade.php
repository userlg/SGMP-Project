<x-layouts.base title="Dashboard">
    <div>
        <div class="flex flex-row gap-1  justify-center items-center">
            <p class="dark:text-white"> Bienvenido al Dashboard </p>
            <h3 class="text-sred font-semibold capitalize"> {{ auth()->user()->name }} </h3>
        </div>

        <livewire:update-projects />

    </div>

    <livewire:create-project>

</x-layouts.base>
