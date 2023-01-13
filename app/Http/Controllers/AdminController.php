<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Book;
use App\Models\Review;

class AdminController extends Controller
{
    // Admin login page
    function adminIndex() {
        return view('admin/admin-login');
    }

    // Admin upload page
    function adminUpload() {
        return view('admin/admin-upload');
    }

    // validate admin
    function validate_admin(Request $request) {
        $request -> validate([
            'email'     => 'required',
            'password'  => 'required'
        ]);

        $data = $request -> all();
        if ($data['email'] == env('ADMIN_EMAIL') && $data['password'] == env('ADMIN_PASS')) {
            return redirect('admin-home');
        }
        return redirect('admin-login') -> with('success', 'Login details are not valid');
    }

    // admin home page
    function adminHome() {
        $totalbooks = count(DB::table('books') -> get());
        $totalUsers = count(DB::table('users') -> get());
        $totalQueries = count(DB::table('reviews') -> get());
        return view('admin/admin-home', compact("totalbooks", "totalUsers", "totalQueries"));
    }

    // admin uploading new book
    function validateBookAdmin(Request $request) {
        $request -> validate([
            'title'         => 'required',
            'description'   => 'required',
            'coverPic'      => 'required',
            'bookFile'      => 'required'
        ]);

        $data = $request -> all();

        // saving picture and book to local storage
        $image = $data['coverPic'];
        $imgname = $image -> getClientOriginalName();
        $image -> storeAs('public/images', $imgname);

        $book_file = $data['bookFile'];
        $bookname = $book_file -> getClientOriginalName();
        $book_file -> storeAs('public/books', $bookname);

        // new entry in database
        Book::create([
            'title'         => $data['title'],
            'type'          => $data['category'],
            'description'   => $data['description'],
            'coverPic'      => $imgname,
            'bookFile'      => $bookname,
            'likes'         => 0,
            'uploadedBy'    => 1
        ]);

        return redirect('admin-home');
    }

    // displaying all books present in DB to admin
    function adminDel() {
        $uploaded_books = DB::table("books") -> select("id", "title", "type", "likes") -> get();
        return view('admin/admin-delete', compact("uploaded_books"));
    }

    // deleting selected book
    function delete_book($fileID) {
        DB::table('books') -> where("id", "=", $fileID) -> delete();
        return redirect('admin-delete');
    }

    // adding user review to database
    function addReview(Request $request) {
        $request -> validate([
            'email'         => 'required',
            'message'       => 'required',
        ]);

        Review::create([
            'email'        => $request -> email,
            'message'      => $request -> message,
        ]);

        return redirect('/');
    }

    // displaying all reviews on customerCare page
    function customerCare() {
        $reviews = DB::table('reviews') -> get();
        return view("admin/customer-care", compact("reviews"));
    }

    // deleting a particular review
    function delete_review($reviewID) {
        DB::table('reviews') -> where("id", "=", $reviewID) -> delete();
        return redirect('customer-care');
    }
}
