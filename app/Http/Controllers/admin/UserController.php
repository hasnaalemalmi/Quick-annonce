<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function show_user()
    {
        $users = User::where('role', 2)->paginate(20);


        
        
        return view('admin_components.delete_user', compact('users'));
    }
    public function delete_user($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        
        return back();
    }
    
    
}
