<x-layouts.base title="Dashboard">
    <div class="flex flex-row gap-1  justify-center items-center">
        <p class="dark:text-white"> Welcome To Dashboard </p>
        <h3 class="text-sred"> {{ auth()->user()->email }} </h3>
    </div>
</x-layouts.base>
