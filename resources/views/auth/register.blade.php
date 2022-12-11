<x-layouts.base title="Register">
    {{-- REGISTER FORM --}}
    <div class="mt-40">
        <form action="{{ route('register') }}" method="POST"
            class="border border-black dark:border-sred bg-white shadow-md shadow-gray-400 dark:bg-night dark:shadow-none rounded-md w-11/12 md:w-1/5 mx-auto flex flex-col p-3 justify-center items-center gap-4 ">
            <h2 class="text-sred font-bold text-center text-md md:text-2xl mt-4">Registro</h2>
            @csrf
            <label for="name" class="flex flex-col justify-center items-center">
                <input type="text" placeholder="name" name="name" class="border border-black rounded  w-full"
                    value="{{ old('name') }}">
                @error('name')
                    <p class="dark:text-sred">{{ $message }}</p>
                @enderror
            </label>

            <label for="email" class="flex flex-col justify-center items-center">
                <input type="email" placeholder="email" name="email" class="border border-black rounded  w-full"
                    value="{{ old('email') }}">
                @error('email')
                    <p class="dark:text-sred">{{ $message }}</p>
                @enderror
            </label>
            <label for="password" class="flex flex-col justify-center items-center">
                <input type="password" name="password" placeholder="password" value="{{ old('password') }}"
                    class="border border-black rounded w-full">
                @error('password')
                    <p class="dark:text-sred">{{ $message }}</p>
                @enderror
            </label>

            <label for="password_confirmation" class="flex flex-col justify-center items-center">
                <input type="password" name="password_confirmation" placeholder="password confirmation"
                    class="border border-black rounded w-full" value="{{ old('password_confirmation') }}">
                @error('password_confirmation')
                    <p class="dark:text-sred">{{ $message }}</p>
                @enderror
            </label>


            <button
                class="text-white text-sm sm:text-base bg-sred p-2 rounded  w-1/2 sm:w-3/4 mb-8">Registrarse</button>
        </form>
    </div>
    {{-- ************ --}}
</x-layouts.base>
