<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Favorite;
use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Spatie\FlareClient\Http\Response;

class BookContoller extends Controller
{
    /**
     * Show the form for creating the resource.
     */

    public function index(Request $request)
    {

        return view('home', [
            'books' => Book::latest()->filter(request(['book']))->paginate(6)
        ]);
    }

    public function create(): never
    {
    }

    /**
     * Store the newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->file('cover'));
        $data = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'category_id' => 'required',
            'description' => 'required',
        ]);

        if ($request->hasFile('cover')) {
            $data['cover'] = $request->file('cover')->store('booksCover', 'public');
        }

        Book::create($data);

        return redirect('/admin/books/')->with('success', 'Book has been created Successfully !'); //admin/books
    }

    public function update(Request $request, Book $book)
    {
        // dd($request->all());
        $data = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'archived' => 'required'
        ]);

        if ($request->hasFile('cover')) {
            $data['cover'] = $request->file('cover')->store('booksCover', 'public');
        }

        $book->update($data);

        return redirect('/admin/books')->with('success', 'Book has been Updated Successfully !'); //admin/books
    }

    /**
     * Display the resource.
     */
    public function show(Book $book)
    {
        return view(
            'books/show',
            ['book' => $book]
        );
    }

    public function liked(Book $book)
    {
        if (auth()->user()->id ?? false) {
            if ($book->likes()->where('book_id', '=', $book->id)->where('user_id', '=', auth()->user()->id)->exists()) {
                $book->likes()->detach(auth()->user()->id);
                return back()->with('dislike', 'You have disliked this book');
            }
            $book->likes()->attach(auth()->user()->id);
            return back()->with('like', 'You have liked this book');
        }
        return redirect('/login');
    }


    public function isFavorite(Book $book)
    {
        if (auth()->user()->id ?? false) {
            if ($book->favorites()->where('book_id', '=', $book->id)->where('user_id', '=', auth()->user()->id)->exists()) {
                $book->favorites()->detach(auth()->user()->id);
                return back()->with('removeFavorite', 'Book Has been Removed From You Favorites');
            }
            $book->favorites()->attach(auth()->user()->id);
            return back()->with('addFavorite', 'Book Has been added to You Favorites');
        }
        return redirect('/login');
    }

    public function like(Book $book)
    {
        $data = [
            'user_id' => auth()->user()->id,
            'book_id' => $book->id
        ];

        if (auth()->user()->id ?? false) {
            $likedBook = Like::where('book_id', '=', $book->id)->where('user_id', '=', auth()->user()->id);
            if ($likedBook->exists()) {
                $likedBook->delete($data);
                return back()->with('dislike', 'You have disliked this book');
            }
            Like::create($data);
            return back()->with('like', 'You have liked this book');
        }
        return redirect('/login');
    }


    public function favorite(Book $book)
    {
        $data = [
            'user_id' => auth()->user()->id,
            'book_id' => $book->id
        ];

        if (auth()->user()->id ?? false) {
            $favoriteBook = Favorite::where('book_id', '=', $book->id)->where('user_id', '=', auth()->user()->id);
            if ($favoriteBook->exists()) {
                $favoriteBook->delete($data);
                return back()->with('removeFavorite', 'Book Has been Removed From You Favorites');
            }
            Favorite::create($data);
            return back()->with('addFavorite', 'Book Has been added to You Favorites');
        }
        return redirect('/login');
    }


    public function edit(): Response
    {
        //
    }

    /**
     * Update the resource in storage.
     */

    /**
     * Remove the resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect('/admin/books')->with('success', 'Book has been Deleted Successfully !'); //admin/books

    }
}
