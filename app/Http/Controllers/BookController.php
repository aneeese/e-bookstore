<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Book;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    // accessing home page after login
    function home() {
        if (Auth::check()) {
            $books = DB::table('books') -> select('id', 'title', 'type', 'likes', 'description', 'coverPic', 'bookFile') -> get();
            $liked = DB::table('book_likes') -> select('bookID') -> where("userID", Auth::id()) -> get();
            $likedBooks = array();
            for ($i = 0; $i < count($liked); $i++) {
                array_push($likedBooks, $liked[$i] -> bookID);
            }
            return view('user/home', compact("books", "likedBooks"));
        }
        return redirect('login');
    }

    // viewing upload book pg if user is logged in
    function upload() {
        if (Auth::check()) {
            return view('user/upload');
        }
        return redirect('login');
    }

    // user adding new book to database
    function validate_book(Request $request) {
        $request -> validate([
            'title'         => 'required',
            'description'   => 'required',
            'coverPic'      => 'required',
            'bookFile'      => 'required'
        ]);

        $data = $request -> all();

        // saving img and book file to local storage
        $image = $data['coverPic'];
        $imgname = $image -> getClientOriginalName();
        $image -> storeAs('public/images', $imgname);

        $book_file = $data['bookFile'];
        $bookname = $book_file -> getClientOriginalName();
        $book_file -> storeAs('public/books', $bookname);

        // creating new entry in database
        Book::create([
            'title'         => $data['title'],
            'type'          => $data['category'],
            'description'   => $data['description'],
            'coverPic'      => $imgname,
            'bookFile'      => $bookname,
            'likes'         => 0,
            'uploadedBy'    => Auth::id()
        ]);

        return redirect('home');
    }

    // downloading book
    function downloadBook($filename) {
        $path = public_path("storage/books/{$filename}");
        return Response::download($path);
    }

    // online reading pdf files
    function readBook($filename) {
        $path = public_path("storage/books/{$filename}");

        // Header content type
        header("Content-type: application/pdf");
            
        header("Content-Length: " . filesize($path));
            
        // Send the file to the browser.
        readfile($path);
    }

    // category wise filtering here on
    function comp_books() {
        if (Auth::check()) {
            $books = DB::table('books') -> select('id', 'title', 'type', 'likes', 'description', 'coverPic', 'bookFile') -> where("type", "Computer") -> get();
            $liked = DB::table('book_likes') -> select('bookID') -> where("userID", Auth::id()) -> get();
            $likedBooks = array();
            for ($i = 0; $i < count($liked); $i++) {
                array_push($likedBooks, $liked[$i] -> bookID);
            }
            return view('user/home', compact("books", "likedBooks"));
        }
        return redirect('login'); 
    }

    function phy_books() {
        if (Auth::check()) {
            $books = DB::table('books') -> select('id', 'title', 'type', 'likes', 'description', 'coverPic', 'bookFile') -> where("type", "Physics") -> get();
            $liked = DB::table('book_likes') -> select('bookID') -> where("userID", Auth::id()) -> get();
            $likedBooks = array();
            for ($i = 0; $i < count($liked); $i++) {
                array_push($likedBooks, $liked[$i] -> bookID);
            }
            return view('user/home', compact("books", "likedBooks"));
        }
        return redirect('login'); 
    }

    function med_books() {
        if (Auth::check()) {
            $books = DB::table('books') -> select('id', 'title', 'type', 'likes', 'description', 'coverPic', 'bookFile') -> where("type", "Medical") -> get();
            $liked = DB::table('book_likes') -> select('bookID') -> where("userID", Auth::id()) -> get();
            $likedBooks = array();
            for ($i = 0; $i < count($liked); $i++) {
                array_push($likedBooks, $liked[$i] -> bookID);
            }
            return view('user/home', compact("books", "likedBooks"));
        }
        return redirect('login'); 
    }

    function history_books() {
        if (Auth::check()) {
            $books = DB::table('books') -> select('id', 'title', 'type', 'likes', 'description', 'coverPic', 'bookFile') -> where("type", "History") -> get();
            $liked = DB::table('book_likes') -> select('bookID') -> where("userID", Auth::id()) -> get();
            $likedBooks = array();
            for ($i = 0; $i < count($liked); $i++) {
                array_push($likedBooks, $liked[$i] -> bookID);
            }
            return view('user/home', compact("books", "likedBooks"));
        }
        return redirect('login');
    }
}
