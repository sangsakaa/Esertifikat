<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="p-4">
        <div class="">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 grid grid-cols-3">
                    <div class="p-6 text-white bg-sky-400">
                        {{$data}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>