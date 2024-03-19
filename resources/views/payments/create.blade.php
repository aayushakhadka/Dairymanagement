<div>
    @vite('resources/css/app.css')
    @extends('layout.page')
    @section('content')
    <form class="bg-amber-700  h-screen flex flex-col items-center justify-center py-12 px-6 rounded-lg shadow-md" action="/payments/create" method="POST">
        @csrf
        <div class='flex flex-col  shadow-md shadow-gray-800 rounded-tl-[3rem] rounded-br-[3rem] p-[1rem] bg-amber-700'>
            <div class="bg-gray-100 rounded-br-[3rem] rounded-tl-[3rem] flex flex-col items-center justify-center py-[2rem] px-[2rem]">
                <div class="flex flex-col gap-3">
                    <label class="text-xl font-bold" for="amount">Amount</label>
                    <input class=" p-[1rem] w-[25rem] h-[3rem] rounded-xl outline-0 border-none bg-gray-300" type='text' name="amount" placeholder="Enter amount">
                </div>
                <div class="flex flex-col gap-3">
                    <label class="text-xl font-bold" for="remarks">Remarks</label>
                    <input class=" p-[1rem] w-[25rem] h-[3rem] rounded-xl outline-0 border-none bg-gray-300" type='text' name="remarks" placeholder="Enter remarks">
                </div>
                <div class="flex flex-col gap-3">
                    <label class="text-xl font-bold" for="type">Type</label>

                    <select class=" flex items-center justify-center border-none w-[25rem]  bg-gray-300 h-12 rounded-lg px-4 focus:outline-none focus:ring-2 focus:ring-blue-500" name="order_id" id="">
                        @foreach ($orders as $item)
                        <option value="{{ $item->id }}">{{ $item->type }}</option>
                        @endforeach
                    </select>
                </div>

                <button class="h-12 mt-[1rem] w-80 bg-blue-500 hover:bg-blue-600 rounded-lg text-white font-semibold focus:outline-none focus:ring-2 focus:ring-blue-500" type="submit">Submit</button>
            </div>
        </div>


    </form>