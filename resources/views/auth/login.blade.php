<x-authentication-layout>
    <h1 class="text-2xl text-center text-slate-800 dark:text-slate-100 font-bold mb-6">{{ __('SISTEM INFORMASI REALISASI KEUANGAN DIRJEN PPKTRANS') }}</h1>
    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif   
    <!-- Form -->
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="space-y-4">
            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" type="email" name="email" :value="old('email')" required autofocus />                
            </div>
            <div>
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" type="password" name="password" required autocomplete="current-password" />                
            </div>
        </div>
        <div class="flex items-center justify-between mt-6">
            {{-- @if (Route::has('password.request'))
                <div class="mr-1">
                    <a class="text-sm underline hover:no-underline" href="{{ route('password.request') }}">
                        {{ __('Forgot Password?') }}
                    </a>
                </div>
            @endif             --}}
            <x-jet-button>
                {{ __('Sign in') }}
            </x-jet-button>            
        </div>
    </form>
    <x-jet-validation-errors class="mt-4" />   
   

</x-authentication-layout>
