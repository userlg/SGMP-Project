<div>
    {{-- MODAL --}}
    <div @if ($open == true) class="visible"
          @else
    class="hidden" @endif>
        <div
            class="bg-slate-800 bg-opacity-50 flex justify-center items-center absolute top-0 right-0 bottom-0 left-0 animate-fade-in-down">
            <div
                class="bg-white dark:bg-night px-16 dark:shadow-md dark:shadow-sred py-14 rounded-md text-center w-11/12 md:w-1/3 max-w-lg">
                <h1 class="text-md md:text-2xl mb-4 font-semibold font-pacifico text-sred">Crear Proyecto</h1>

                <form wire:submit.prevent="saveProject"
                    class="flex mx-auto p-2 justify-center items-center flex-col gap-4">
                    @csrf
                    <div class="mx-auto flex flex-col gap-2 w-11/12">
                        <label for="title" class="dark:text-sred text-left font-pacifico font-medium">Titulo</label>
                        <input type="text" wire:model.defer="title" name="title"
                            class="border-2 border-black rounded" placeholder="Coloca un titulo">
                        @error('title')
                            <span class="error text-sred">{{ $message }}</span>
                        @enderror
                    </div>
                    {{--     <input type="text" wire:model="description" name="description"
                        class="border-2 border-black rounded-md" placeholder="description"> --}}
                    <div class="mx-auto flex flex-col gap-2">
                        <label for="description"
                            class="dark:text-sred text-left font-pacifico font-medium">Description</label>
                        <textarea name="description" id="description" wire:model.defer="description" cols="42" rows="10"
                            class="border-2 border-black rounded-sm" placeholder="Escribe alguna descripcion"></textarea>
                        @error('description')
                            <span class="error text-sred">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-row gap-2 justify-center items-center">
                        <div wire:click="close"
                            class="bg-blue-500 px-7 py-2 ml-2 rounded-md text-md text-white text-sm md:text-base font-semibold cursor-pointer">Cerrar</div>
                        <button
                            class="bg-sred px-7 py-2 ml-2 rounded-md text-md text-white text-sm md:text-base font-semibold">Crear</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
    {{-- ------- --}}
</div>
