<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, Group $group)
    {
        // dd($request);
        $data = $request->validate([
            'content' => 'required',
        ]);
        $data['user_id'] = Auth::user()->id;
        $data['group_id'] = $group->id;
        Comment::create($data);
        return back()->with('success', 'Your Comment has been posted Successfully');
    }
}
