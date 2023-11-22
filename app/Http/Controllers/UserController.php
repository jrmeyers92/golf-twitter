<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
   public function register(Request $request) {
        $incomingfields = $request->validate([
            'username' => ['required', 'min:3', 'max:25', Rule::unique('users', 'username')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:8','max:63', 'confirmed']
        ]);

        $incomingfields['password'] = bcrypt($incomingfields['password']);

        User::create($incomingfields);
        return 'hello from reg';
   }
}
