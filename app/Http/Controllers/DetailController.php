<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Models\Detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $details = Detail::where('user_id', Auth::id())->get();
        return view('details.index', compact('details'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


        return view('/details/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Detail::create($request->except('user_id') + [
            'user_id' => Auth::id()
        ]);

        $name = 'aayusha';
        $price = 500;
        $quantity = 1;
        Mail::to('test@test.com')->queue(new TestMail($name, $price, $quantity));
        return redirect('/details');
    }

    /**
     * Display the specified resource.
     */
    public function show(Detail $detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $detail = Detail::find($id);
        return view('details.edit', compact('detail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $detail = Detail::find($id);
        $detail->update($request->all());
        return redirect('/details');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $detail = Detail::find($id);
        $detail->delete();
        return redirect('/details');
    }
}
