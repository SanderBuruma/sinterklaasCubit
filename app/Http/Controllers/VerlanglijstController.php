<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class VerlanglijstController extends Controller
{
    public function slug($slug){
        $user = User::where('slug', '=', $slug)->first();
        return view ('verlanglijst.single')->withUser($user);
    }
}
