<div>
    {{-- MODAL TO NOTIFICATIONS --}}
    <div @if ($open == true) class="visible"
          @else
    class="hidden" @endif>
        <div
            class="bg-slate-800 bg-opacity-50 flex justify-center items-center absolute top-0 right-0 bottom-0 left-0 animate-fade-in-down">
            <div
                class="bg-white dark:bg-night px-16 dark:shadow-md dark:shadow-sred py-14 rounded-md text-center w-11/12 md:w-1/2 max-w-lg flex flex-col justify-center items-center gap-2">

                <div
                    class="flex flex-col justify-center items-center m-1 border-2 border-green-700 dark:border-sred rounded-full mx-auto w-7 h-7">
                    @if ($icon == 'success')
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-8 h-8 stroke-green-700 dark:stroke-sred stroke-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                    @endif
                </div>

                <h1 class="text-md md:text-2xl mb-4 font-semibold font-pacifico text-sred">{{ $title }}</h1>

                <div>
                    <p class="dark:text-white font-medium">{{ $message }}</p>
                </div>

                <button
                    class="bg-sred px-7 py-2 ml-2  mt-2  rounded-md text-md text-white text-sm md:text-base font-semibold"
                    wire:click="close">OK</button>
            </div>

        </div>
    </div>
    {{-- ------- --}}
</div>
