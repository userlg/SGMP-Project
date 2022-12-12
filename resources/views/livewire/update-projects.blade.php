<div>
    <div class="my-4">
        @if ($projects == 0)
            <p class="dark:text-white text-center">Crea tu primer proyecto!!</p>
        @else
            <p class="dark:text-white text-center">Total de Proyectos <strong
                    class="text-sred font-bold">{{ $projects }}</strong></p>
        @endif
    </div>
</div>
