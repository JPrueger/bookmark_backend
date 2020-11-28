<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        // speicher den neuen Eintrag
        $User = new User();
        $User->firstname = $request->get('firstname');
        $User->lastname = $request->get('lastname');
        $User->email = $request->get('email');
        $User->password = $request->get('password');
        $User->repeatpassword = $request->get('repeatpassword');
        $User->save();

        // nimm alle bestehenden Posts (inkl. dem neuen Post) und gib sie zurück
        // $AllPosts = Post::all();

        // return response()->json($AllPosts);
    }

}
