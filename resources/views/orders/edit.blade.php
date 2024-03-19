@vite('resources/css/app.css')
@extends('layout.page')
@section('content')
<form action="/orders/updates/{{order->$id}}" method="POST" class="bg-amber-700  h-screen flex flex-col items-center justify-center py-12 px-6 rounded-lg shadow-md" method='post'>
@csrf
                    @method('PATCH')
        <div class='flex flex-col  shadow-md shadow-gray-800 rounded-tl-[3rem] rounded-br-[3rem] p-[1rem] bg-amber-700'>

        <div class="bg-gray-100 rounded-br-[3rem] rounded-tl-[3rem] flex flex-col items-center justify-center py-[2rem] px-[2rem]">
            <div class="flex flex-col gap-3">
                <label class="text-xl font-bold" for="date">Date</label>
                <input class=" p-[1rem] w-[25rem] h-[3rem] rounded-xl outline-0 border-none bg-gray-300" type='date' name="date" placeholder="Date">
            </div>

            <div class="flex flex-col gap-3">
                <label class="text-xl font-bold" for="time">Time</label>
                <input class=" p-[1rem] w-[25rem] h-[3rem] rounded-xl outline-0 border-none bg-gray-300" type='time' name="time" placeholder="Time">
            </div>
            <div class="flex flex-col gap-3">
                <label class="text-xl font-bold" for="quantity">Quantity</label>
                <input class=" p-[1rem] w-[25rem] h-[3rem] rounded-xl outline-0 border-none bg-gray-300" type='text' name="quantity" placeholder="Quantity">
            </div>

            <div class="flex flex-col gap-3">
                <label class="text-xl font-bold" for="type">Type</label>
                <input class=" p-[1rem] w-[25rem] h-[3rem] rounded-xl outline-0 border-none bg-gray-300" type='text' name='type' placeholder="Type">
            </div>
            <div class="flex flex-col gap-3">
                <label class="text-xl font-bold" for="type">Price</label>
                <input class=" p-[1rem] w-[25rem] h-[3rem] rounded-xl outline-0 border-none bg-gray-300" type='text' name="price" placeholder="Price">
            </div>
            <button class="f w-[25rem] h-[3rem] bg-amber-700 rounded-xl mt-[1rem] text-white font-display text-xl" type='submit'>submit</button>

        </div>
        </div>


    </form>

</form>