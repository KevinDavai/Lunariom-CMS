<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="card my-4">
        <div class="card-body">
            @auth
                You are logged in!
            @else
                You are a guest !
            @endauth
        </div>
    </div>
</x-app-layout>