<x-layouts.base title="Login">
    {{-- Login FORM --}}
    <div class="mt-40">
        <form action="{{ route('login') }}" method="POST"
            class="border border-black dark:border-sred rounded-md  dark:shadow-none  bg-white shadow-md shadow-gray-400 dark:bg-night w-3/4 sm:w-1/2 md:w-[300px] mx-auto flex flex-col p-8 justify-center items-center gap-4 ">
            <h2 class="text-sred font-bold text-center text-xl md:text-2xl font-pacifico">Login</h2>
            @csrf
            <label for="email" class="flex flex-col justify-center items-center w-3/4 md:w-11/12">
                <input type="email" placeholder="email" name="email"
                    class="border border-black rounded dark:text-black w-full text-center" value="{{ old('email') }}">
                @error('email')
                    <p class="dark:text-sred">{{ $message }}</p>
                @enderror
            </label>
            <label for="password" class="flex flex-col justify-center items-center w-3/4 md:w-11/12">
                <input type="password" placeholder="password" name="password"
                    class="border border-black rounded w-full text-black text-center">
                @error('password')
                    <p class="dark:text-sred">{{ $message }}</p>
                @enderror
            </label>
            <button class="text-white text-sm sm:text-base bg-sred p-2 rounded  w-28">Entrar</button>
        </form>
    </div>
    {{-- ************ --}}
</x-layouts.base>
