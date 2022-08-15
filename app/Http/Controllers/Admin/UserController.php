<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {   
        $users = user::all();
        return view('admin.user.index',compact('users'));
    }

    public function edit($user_id)
    {   
        $user = user::find($user_id);
        return view('admin.user.edit',compact('user'));
    }

    public function update(Request $request,$user_id)
    {   
        $user = user::find($user_id);
        if($user)
        {
            $user->role_as = $request->role_as;
            $user->Update();
            return redirect('admin/users')->with('message', 'update successfully' );
        }
        return redirect('admin/users')->with('message', 'No user Found' );
    }
}
