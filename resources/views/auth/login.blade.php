<x-layouts.base title="Login">
    {{-- Login FORM --}}
    <div class="mt-40">
        <form action="{{ route('login') }}" method="POST"
            class="border border-black dark:border-sred w-11/12 md:w-1/5 mx-auto flex flex-col p-3 justify-center items-center gap-4 ">
            <h2 class="text-sred font-bold text-center text-md md:text-2xl">Login</h2>
            @csrf
            <label for="email" class="flex flex-col justify-center items-center">
                <input type="email" placeholder="email" name="email"
                    class="border border-black rounded dark:text-white w-full" value="{{ old('email') }}">
                @error('email')
                    <p class="dark:text-sred">{{ $message }}</p>
                @enderror
            </label>
            <label for="password" class="flex flex-col justify-center items-center">
                <input type="password" placeholder="password" name="password"
                    class="border border-black rounded w-full">
                @error('password')
                    <p class="dark:text-sred">{{ $message }}</p>
                @enderror
            </label>
            <button class="text-white text-sm sm:text-base bg-sred p-2 rounded  w-1/2 sm:w-1/4">Entrar</button>
        </form>
    </div>
    {{-- ************ --}}
</x-layouts.base>
