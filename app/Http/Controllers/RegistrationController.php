<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistrationController extends Controller
{

    public function index()
    {

        $allUsers = User::all();

        return response()->json($allUsers);

    }

 
    public function store(Request $request)
    {
        $User = new User();
        $User->firstname = $request->get('firstname');
        $User->lastname = $request->get('lastname');
        $User->email = $request->get('email');
        $User->password = $request->get('password');
        $User->repeatpassword = $request->get('repeatpassword');
        $User->save();

        $AllUsers = User::all();

        return response()->json($AllUsers);
    }
}
