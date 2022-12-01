<div>
    {{-- MODAL --}}
    <div @if ($open == true) class="visible"
          @else
    class="hidden" @endif>
        <div
            class="bg-slate-800 bg-opacity-50 flex justify-center items-center absolute top-0 right-0 bottom-0 left-0 animate-fade-in-down">
            <div
                class="bg-white dark:bg-night px-16 dark:shadow-md dark:shadow-sred py-14 rounded-md text-center w-11/12 md:w-1/3 max-w-lg">
                <h1 class="text-xl mb-4 font-semibold font-pacifico text-black dark:text-sred">Crear Proyecto</h1>
                <button class="bg-sred px-7 py-2 ml-2 rounded-md text-md text-white text-sm md:text-base font-semibold"
                    wire:click="close">Cerrar</button>
            </div>
        </div>
    </div>
    {{-- ------- --}}
</div>
