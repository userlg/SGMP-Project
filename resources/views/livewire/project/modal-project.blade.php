<div>
    {{-- MODAL --}}
    <div @if ($open == true) class="visible"
          @else
    class="hidden" @endif>
        <div
            class="bg-slate-800 bg-opacity-50 flex justify-center items-center absolute top-0 right-0 bottom-0 left-0 animate-fade-in-down">
            <div
                class="bg-white dark:bg-night px-16 dark:shadow-md dark:shadow-sred py-14 rounded-md text-center w-11/12 md:w-1/2 max-w-lg">
                <h1 class="text-md md:text-2xl mb-4 font-semibold font-pacifico text-sred">Crear Proyecto</h1>

                <form wire:submit.prevent="saveProject"
                    class="flex mx-auto p-2 justify-center items-center flex-col gap-4">
                    @csrf
                    <div class="mx-auto flex flex-col gap-2 w-full">
                        <label for="title" class="dark:text-sred text-left font-pacifico font-medium">Titulo</label>
                        <input type="text" wire:model.defer="title" name="title"
                            class="border-2 border-black rounded" placeholder="Coloca un titulo">
                        @error('title')
                            <span class="error text-sred">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Textarea to Description --}}
                    <div class="mx-auto flex flex-col gap-2 w-full">
                        <label for="description"
                            class="dark:text-sred text-left font-pacifico font-medium">Description</label>
                        <textarea name="description" id="description" wire:model.defer="description" rows="8"
                            class="border-2 border-black p-2.5 w-full text-gray-900  focus:ring-blue-500 focus:border-blue-500 dark:focus:ring-blue-500 dark:focus:border-blue-500 rounded-sm"
                            placeholder="Escribe alguna descripcion"></textarea>
                        @error('description')
                            <span class="error text-sred">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-row gap-2 justify-center items-center">
                        <div wire:click="close"
                            class="bg-blue-800 p-2 ml-2 rounded-md shadow-none dark:shadow-sm dark:shadow-purple-700 text-md text-white text-sm md:text-base font-semibold cursor-pointer">
                            Cerrar</div>
                        <button
                            class="bg-sred p-2 ml-2 rounded-md text-md text-white text-sm md:text-base font-semibold">Guardar</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
    {{-- ------- --}}
</div>
