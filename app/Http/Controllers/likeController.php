<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;

class likeController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->file('cover'));
        $data = $request->validate([
            'user_id' => 'required',
            'book_id' => 'required'
        ]);

        // if($request->hasFile('cover')){
        //     $data['cover'] = $request->file('cover')->store('booksCover', 'public');
        // }

        Like::create($data);

        return back();
        }
}
