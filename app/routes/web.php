<?php

use App\Models\Book;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {

    DB::enableQueryLog();
    // $books = Book::all();

    // foreach ($books as $book) {
    //     echo $book->author->name;
    // }
    $books = Book::with('author')->get();

    foreach ($books as $book) {
        echo $book->author->name;
    }

    // 実行されたクエリを表示
    dd(DB::getQueryLog());

    return view('welcome');
});
