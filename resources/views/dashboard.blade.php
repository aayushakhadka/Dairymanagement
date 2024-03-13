<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-50 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-black">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
        <div class="flex flex-col items-center justify-center mt-[4rem]">
            <a class="h-[3rem] w-[8rem] bg-gray-100 flex items-center justify-center rounded-[1rem] text-black shadow-md shadow-black" href="/details">Details</a>
        </div>
    </div>
</x-app-layout>