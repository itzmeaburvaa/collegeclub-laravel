<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function check(Request $request)
    {
        $admin = Admin::where('username', $request->username)
                      ->where('password', $request->password) // plain text check
                      ->first();

        if ($admin) {
            return response()->json(['status' => 'success']);
        } else {
            return response()->json(['status' => 'error']);
        }
    }
}