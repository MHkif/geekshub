<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class Groups extends Controller
{
    /**
     * Show the form for creating the resource.
     */

    public function index(Request $request)
    {
        // $group = Group::find(Auth::user()->id );
        //  dd( $group);
        return view('groups/index', [
            'books' => Book::all(),
            'groups' => Group::all()
        ]);
    }

    public function myGroups(Request $request)
    {

        $groups = User::find(Auth::user()->id)->groups ?? [];
        //  dd( $group);
        return view('profile/myGroups', [
            'books' => Book::all(),
            'groups' => $groups
        ]);
    }

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
            'name' => 'required',
            'book_id' => 'required',
            // 'user_id' => 'required'
        ]);

        $data['user_id'] = Auth::user()->id;
        // $data['members'] = 1;

        // dd($data);
        if ($group = Group::create($data)) {
            if (Group::find($group->id)->users()->attach(Auth::user()->id) == null)
                return back()->with('success', 'Group has been created Successfully !');
            else
                return back()->with('memberNotAdded', 'The Member did not join the group !');
        } else {
            return back()->with('notCreated', 'Creation of Group has been Failed !');
        }



        // return back()->with('success', 'Group has been created Successfully !'); 

    }




    /**
     * Display the resource.
     */

    public function show(Group $group)
    {
        // dd($group);
        $book = Book::find($group->book_id);
        $members = Group::find($group->id)->users;

        // dd($members);
        return view(
            'groups/show',
            [
                'group' => $group,
                'book' => $book,
                'members' => $members,
            ]
        );
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
    public function destroy(Request $requset, Group $group)
    {
        // dd($group);
        $group->delete();
        return back()->with('success', 'Group has been deleted successfully!');
    }
}
