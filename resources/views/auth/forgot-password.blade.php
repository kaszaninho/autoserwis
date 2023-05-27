@extends('main')
@section('content')
<x-guest-layout>
    <h2>Odzyskiwanie hasła</h2>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Zapomniałeś hasła? 
            Wystarczy podać nam swój adres email, a wyślemy Ci link do resetowania hasła, który umożliwi Ci wybranie nowego') }}
    </div>
    <br>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        @if ($errors->any())
    			<div class="alert alert-danger">
        			<ul>
            			@foreach ($errors->all() as $error)
                			<li>{{ $error }}</li>
            			@endforeach
        			</ul>
    			</div>
			@endif
            <br>
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
<br>
            <x-primary-button class="submit">
                {{ __('Zarejestruj') }}
            </x-primary-button>
    </form>
</x-guest-layout>
@endsection