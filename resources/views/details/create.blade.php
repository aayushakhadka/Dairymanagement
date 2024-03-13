<div class="">
    @vite('resources/css/app.css')
    @extends('layout.page')
    @section('content')
    <div class="flex flex-col items-center justify-center gap-4 font-display bg-amber-800 h-screen ">
        <div class='flex shadow-md shadow-gray-800 rounded-tl-[3rem] rounded-br-[3rem] p-[1rem] bg-amber-700 '>

            <div class=" bg-gray-100 rounded-br-[3rem] rounded-tl-[3rem] flex flex-col items-center justify-center py-[2rem] px-[2rem] ">
                <form class="flex flex-col gap-3" action="/details/create" method="POST">
                    @csrf
                    <div class="flex gap-4 ">
                        <div class="flex flex-col gap-3">
                            <label class="text-xl font-bold" for="name">Name</label>
                            <input class=" p-[1rem] w-[25rem] h-[3rem] rounded-xl outline-0 border-none bg-gray-300" type='text' name="name" placeholder="name" />
                        </div>
                        <div class="flex flex-col gap-3">

                            <label class="text-xl font-bold" for="number">Number</label>
                            <input class=" p-[1rem] w-[25rem] h-[3rem] rounded-xl outline-0 border-none bg-gray-300" type='text' name="number" placeholder="number" />
                        </div>
                    </div>


                    <div class="flex gap-4">
                        <div class="flex flex-col gap-3">

                            <label class="text-xl font-bold" for="quantity">Quantity</label>
                            <input class=" p-[1rem] w-[25rem] h-[3rem] rounded-xl outline-0 border-none bg-gray-300" type='number' name="quantity" placeholder="quantity" />
                        </div>
                        <div class="flex flex-col gap-3">

                            <label class="text-xl font-bold" for="type">Type</label>
                            <input class=" p-[1rem] w-[25rem] rounded-xl outline-0 border-none  h-[3rem]  bg-gray-300 " type='text' name="type" placeholder="Type" />
                        </div>

                    </div>
                    <label class="text-xl font-bold " for="price">Price</label>
                    <input class=" p-[1rem] w-[25rem] rounded-xl outline-0 border-none h-[3rem]  bg-gray-300 " type='text' name="price" placeholder="price" />

                    <div class="flex items-center justify-center">
                        <button class="f w-[25rem] h-[3rem] bg-amber-700 rounded-xl mt-[1rem] text-white font-display text-xl" type='submit'>submit</button>

                    </div>

                </form>
            </div>
        </div>

    </div>
</div>