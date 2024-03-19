@extends ('layout.page')
@section('content')
@vite('resources/css/app.css')

<div class=" bg-gray-300  h-screen flex flex-col mx-auto">
    <table class="w-full border-collapse border border-gray-200">
        <thead>
            <tr>
                <th class="border border-gray-800 px-4 py-2">Amount</th>
                <th class="border border-gray-800 px-4 py-2">Remarks</th>
                <th class="border border-gray-800 px-4 py-2">Type</th>
            </tr>
        </thead>
        <tbody class="bg-gray-100">
            @foreach ($payments as $item)
            <tr>
                <td class="border border-gray-800 px-4 py-2">{{ $item->amount }}</td>
                <td class="border border-gray-800 px-4 py-2">{{ $item->remarks }}</td>
                <td class="border border-gray-800 px-4 py-2"><a href="/payments/edit/{{$item->id}}" class="text-blue-500 hover:underline">Edit</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>