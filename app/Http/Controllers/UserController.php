<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(Request $request)
{
    $id =$request()->input('user_id');
    $user = User::find($id); 
if (!$user || !$user->isAdmin()) {
    abort(403, 'Unauthorized action.');
}
}
}

