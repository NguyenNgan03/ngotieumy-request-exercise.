<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    public function showForm()
    {
        return view('formUploadFile');
    }

    public function submitForm(Request $request)
    {
        $name = $request->input('name');
        $username = $request->input('username');
        $password = $request->input('password');

        return view('return', [
            'name' => $name,
            'username' => $username,
            'password' => $password,
        ]);
    }
}
