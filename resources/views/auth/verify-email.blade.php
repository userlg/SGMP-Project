<x-layouts.base title="Verify Email">
    <div class="container mx-auto">
        <div
            class="flex flex-col p-4 justify-center items-center mx-auto mt-10 gap-4 border border-black shadow-lg shadow-gray-400 bg-white w-11/12 md:w-1/3 rounded dark:bg-night dark:border-none dark:shadow-sred">
            <div class="text-sred text-base md:text-2xl font-semibold font-pacifico ">{{ __('Verifica Tu email') }}</div>
            <div class="mx-auto flex flex-col justify-center items-center gap-8">
                @if (session('resent'))
                    <div class="alert alert-success dark:text-white" role="alert">
                        <p class="class="text-sm sm:tex-base"">
                            {{ __('Un nuevo email de verificacion ha sido enviado') }}
                        </p>
                    </div>
                @endif
                <div class="dark:text-white flex flex-col text-center">
                    <p class="text-sm sm:tex-base">{{ __('Antes de proceder revisa tu email y verificate') }}</p>
                    <p class="text-sm sm:tex-base">{{ __('Si no has recibido el email') }}</p>
                </div>
                <form block" method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button type="submit"
                        class="bg-sred text-white p-4 rounded text-sm md:text-base">{{ __('Reenviar') }}</button>
                </form>
            </div>
        </div>
    </div>
</x-layouts.base>
