<div>
    <div class="flex items-center justify-center">

        <button class="p-2 bg-sred rounded-sm" wire:click="openModal">
            <div class="flex flex-row gap-2 p-1 justify-center items-center">
                <h3 class="text-white font-semibold">Crear</h3>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-4 h-4 stroke-2 stroke-white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>

            </div>
        </button>


    </div>

    {{-- Livewire Component to Create projects --}}
    <livewire:modal-project />

    {{-- Livewire Component to Show Notifications --}}
    <livewire:modal-notify />

</div>
