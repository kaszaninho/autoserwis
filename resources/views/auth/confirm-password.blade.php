<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Proszę potwierdzić hasło przed kontynuacją.') }}
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
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
        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Hasło')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex justify-end mt-4">
            <x-primary-button>
                {{ __('Potwierdź') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
