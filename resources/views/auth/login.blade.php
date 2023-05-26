@extends('main')
@section('content')
<center>
<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="container3" :status="session('status')" />
    <div class="d-flex justify-content-center align-items-center vh-100">
    <form method="POST" action="{{ route('login') }}" >
        @csrf
        <br>
        <h2> Logowanie </h2>
        <!-- Email Address -->
        <div>
            <b><x-input-label for="email" :value="__('Email')" /></b>
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <br>
        <!-- Password -->
        <div class="mt-4">
        <b><x-input-label for="password" :value="__('Hasło')" /></b>

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
<br>
 
        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Zapomniałeś hasła?') }}
                </a>
                <br><br>
            @endif

            <x-primary-button class="submit">
                {{ __('Zaloguj') }}
            </x-primary-button>
        </div>
    </form>
</div>
</x-guest-layout>
</center>
@endsection