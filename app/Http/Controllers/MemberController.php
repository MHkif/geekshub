<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Member;
use App\Models\Members;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class MemberController extends Controller
{
    /**
     * Show the form for creating the resource.
     */
    public function create(): never
    {
        abort(404);
    }

    /**
     * Store the newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
            'group_id' => 'required'
        ]);

        $data['user_id'] = Auth::user()->id;

        Member::create($data);
        // $group = Group::find($data['group_id']);
        $affected = DB::update(
            'update groups set members = (members + 1) where id = ?',
            [$data['group_id']]
        );
        return back()->with('success', 'You have joined The Group Successfully');
    }

    /**
     * Display the resource.
     */
    public function show(): Response
    {
        //
    }

    /**
     * Show the form for editing the resource.
     */
    public function edit(): Response
    {
        //
    }

    /**
     * Update the resource in storage.
     */
    public function update(Request $request): RedirectResponse
    {
        //
    }

    /**
     * Remove the resource from storage.
     */
    public function destroy(Group $group)
    {
        $data = [
            'group_id' => $group->id,
            'user_id' => auth()->user()->id
        ];
        $member = Member::where($data);
        $member->delete();
        $affected = DB::update(
            'update groups set members = (members - 1) where id = ?',
            [$data['group_id']]
        );
        return back()->with('leave', 'You have left the Group Successfully !');
    }
}
