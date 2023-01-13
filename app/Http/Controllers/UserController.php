<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\Book;
use App\Models\bookLikes;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // accessing editPrfile pg
    function getEditProfile() {
        return view('user/editProfile');
    }

    // updating user info in database
    function update_user(Request $request) {
        $request -> validate([
            'name'          => 'required',
            'email'         => 'required|email',
            'password'      => 'required|min:6'
        ]);

        $data = $request -> all();
        $hashedPass = Hash::make($data['password']);
        $user = User::find(Auth::id());
        $user -> name = $data['name'];
        $user -> email = $data['email'];
        $user -> password = $hashedPass;
        $user -> gender = $data['gender'];
        $user -> dob = $data['dob'];

        $user -> save();

        return redirect('home');
    }

    // adding userID and bookId to table when user likes a book, also incrementing like of that particular liked book
    function addLike($bookID) {
        $post = DB::table('book_Likes') -> select('bookID', 'userID') -> where("bookID", $bookID) -> where("userID", Auth::id()) -> get();
        $book = Book::find($bookID);

        if ($post -> count() != 0) {
            DB::table('book_Likes') -> where("bookID", $bookID) -> where("userID", Auth::id()) -> delete();
            if ($book -> likes > 0) {
                $book -> likes = $book -> likes - 1;
                $book -> save();
            }
        } else {
            bookLikes::create([
                'bookID' => $bookID,
                'userID' => Auth::id()
            ]);
            $book -> likes = $book -> likes + 1;
            $book -> save();
        }
        return redirect('home');
    }

    // viewing all books that user liked
    function getLikedBooks() {
        $liked_books = DB::table("books") -> select("title", "type", "likes") -> join('book_likes', "books.id", "=", "book_likes.bookID") -> where("book_likes.userID", "=", Auth::id()) -> get();
        return view('user/likedBooks', compact("liked_books"));
    }

    // viewing all books that user uploaded
    function getUploadedBooks() {
        $uploaded_books = DB::table("books") -> select("id", "title", "type", "likes") -> where("uploadedBy", "=", Auth::id()) -> get();
        return view('user/uploadedBooks', compact("uploaded_books"));
    }

    // deleting a particular book uploaded by signed in guy
    function deleteBook($fileID) {
        DB::table('books') -> where("id", "=", $fileID) -> delete();
        return redirect('upload');
    }

    // viewing contact page
    function getContact() {
        return view('user/contact');
    }

    // viewing about page
    function getAbout() {
        return view('user/about');
    }
}
