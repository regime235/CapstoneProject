<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function userlist() {
        $users = User::all();
        return view('admin.user')->with('users', $users);
    }
}
