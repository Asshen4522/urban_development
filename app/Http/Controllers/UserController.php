<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;



class UserController extends Controller
{
    public function register(Request $request)
    {
        $this->validate($request, [
            'password' => 'required', 'confirmed',
        ]);
        $FIO = $request->FIO;
        $FIO = explode(" ", $FIO);
        $name = $FIO[1];
        $surname = $FIO[0];
        unset($FIO[0]);
        unset($FIO[1]);
        User::create([
            'name' => $name,
            'surname' => $surname,
            'last_name' => implode(' ', $FIO),
            'login' => $request->login,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect('/authorisation');
    }

    public function authorisate(Request $request)
    {

        // $user = User::where('email', $request->email)->get();

        // if (count($user) < 1) {
        //     # code...
        //     return response('not found', 404);
        // }

        // $user = $user[0];
        // $verified = Hash::check($request->password, $user->password);

        // if ($verified !== true) {
        //     return response('not found', 404);
        // }

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/cabinet');
        } else {
            return response('fu', 401);
        }
    }

    public function validation(Request $request)
    {
        $login = $request->login;

        $response = array(
            'success' => true,
        );

        $user = User::where('login', $login)->first();
        if ($user) {
            $response = array(
                'success' => false,
            );
        }

        return response()->json($response);
    }

    public function unauthorisate(Request $request)
    {
        Auth::logout();
        return redirect('/main');
    }
}
