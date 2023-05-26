@extends('mainLogin')
@section('content')
<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Zapomniałeś hasła? Nie ma problemu. Wystarczy podać nam swój adres email, a wyślemy Ci link do resetowania hasła, który umożliwi Ci wybranie nowego') }}
    </div>

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
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Link do resetowania hasła') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
@endsection