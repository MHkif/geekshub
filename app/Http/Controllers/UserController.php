<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    /**
     * Show the form for creating the resource.
     */
    public function create()
    {
        abort(404);
    }

    /**
     * Store the newly created resource in storage.
     */
    public function store(Request $request): never
    {
        abort(404);
    }

    public function login(Request $request)
    {
        return view('login');
    }

    public function register(Request $request)
    {
        return view('register');
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

    public function favorites()
    {

        $books = User::find(Auth::user()->id)->favoriteBooks ?? [];

        // dd($books);
        return view('profile/favorites', [
            'books' => $books,
        ]);
    }

    /**
     * Remove the resource from storage.
     */
    public function destroy(): never
    {
        abort(404);
    }
}
