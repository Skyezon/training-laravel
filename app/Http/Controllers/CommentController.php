<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function create(Request $request,$artikelId){
        $user = Auth::user();

        $user->commentArtikels()->attach($artikelId,['comment' => $request->comment]);
        return back();
    }
}
