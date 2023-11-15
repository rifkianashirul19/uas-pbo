<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserManagementController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('admin.usermanagement', [
            'title' => 'User Management',
            'user' => $user
        ]);
    }
}
