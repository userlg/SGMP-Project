<div class="flex mt-2">
    <div class="cursor-pointer flex flex-row space-x-2">
        <span class="text-xs text-gray-800 dark:text-yellow-200">Light</span>
        <div>
            <input type="checkbox" name="toggle" id="toggle" class="hidden">
            <label for="toggle">
                <div
                    class="w-9 h-5 flex items-center bg-gray-300 dark:bg-cyan-700 rounded-full p-1 transform transition-colors ease-linear duration-150">
                    <div id="switch"
                        class="toggle-active transition-all w-4 h-4 bg-white rounded-full shadow-sm shadow-cyan-700 ease-linear duration-150">
                    </div>
                </div>
            </label>
        </div>
        <span class="text-xs  text-black dark:text-gray-400">Dark</span>
    </div>
</div>




    <x-layouts.base title="home">
        <p class="text-green-400 font-semibold">Testing The main component</p>
    </x-layouts.base>
