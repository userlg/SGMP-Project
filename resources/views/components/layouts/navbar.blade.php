<div>
    <nav class="p-5 bg-white dark:bg-night dark:ring-1 dark:ring-sred shadow md:flex md:items-center md:justify-between">
        <div class="flex justify-between items-center ">
            <span class="text-2xl font-[Poppins] cursor-pointer">
                <a href="{{ route('home') }}" class="flex flex-row gap-3"> <img class="h-10 inline"
                        src="{{ asset('logo.png') }}">
                    <h2 class="text-black dark:text-white">SGMP</h2>
                </a>
            </span>

            {{-- MENU BAR BUTTON --}}
            <div class="text-3xl cursor-pointer mx-2 md:hidden block" id="menubar">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    id="burgerIcon" stroke="currentColor"
                    class="visible w-6 h-6 dark:stroke-sred transition-all duration-300 ease-in">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    id="exIcon" stroke="currentColor"
                    class="hidden w-6 h-6 dark:stroke-sred transition-all duration-300 ease-in">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </div>
            {{-- *********************************************** --}}
        </div>

        <ul
            class="md:flex md:items-center z-[5] md:z-auto md:static absolute dark:md:ring-transparent md:ring-transparent ring-1 ring-black bg-white dark:bg-night dark:ring-1 dark:ring-sred dark:text-white w-full gap-4 left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
            <li class=" my-1 md:my-0">
                <a href="#" class="text-xl hover:text-cyan-500 dark:hover:text-yellow-200  duration-500">HOME</a>
            </li>
            <li class="my-1 md:my-0">
                <a href="#"
                    class="text-xl hover:text-cyan-500 dark:hover:text-yellow-200 duration-500">SERVICE</a>
            </li>
            <li class="my-1 md:my-0">
                <a href="#" class="text-xl hover:text-cyan-500 dark:hover:text-yellow-200 duration-500">ABOUT</a>
            </li>
            <li class="my-1 md:my-0">
                <a href="#"
                    class="text-xl hover:text-cyan-500 dark:hover:text-yellow-200 duration-500">CONTACT</a>
            </li>

            <button class="my-1 bg-sred text-white font-[Poppins] duration-500 px-6 py-2 hover:bg-cyan-500 rounded ">
                Login
            </button>

            {{-- Dark Toggle Button --}}
            <div class="my-1">
                <x-layouts.togglebutton />
            </div>

            <h2 class=""></h2>
        </ul>
    </nav>

    <script>
        const menubtn = document.getElementById("menubar");

        const burgerIcon = document.getElementById("burgerIcon");

        const exIcon = document.getElementById("exIcon");

        var sw = false;


        function menu() {
            let list = document.querySelector('ul');

            if (!sw) {
                sw = true;
                list.classList.add('top-[80px]');
                list.classList.add('opacity-100');
                burgerIcon.classList.remove("visible");
                burgerIcon.classList.add("hidden");
                exIcon.classList.remove("hidden");
                exIcon.classList.add("visible");
            } else {
                sw = false;
                list.classList.remove('top-[80px]');
                list.classList.remove('opacity-100');
                burgerIcon.classList.remove("hidden");
                burgerIcon.classList.add("visible");
                exIcon.classList.remove("visible");
                exIcon.classList.add("hidden");
            }
        }

        menubtn.addEventListener("click", () => {
            menu();
        })

    </script>



</div>
