    @extends('layouts.app')
    @section('content')

    </section>
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

        <div class="flex items-center justify-center gap-4 ">
            <a href="/details">Details</a>
            <a href="/orders">Order</a>
            <a href="/payments">Payments</a>

        </div>
    </div>

    @endsection