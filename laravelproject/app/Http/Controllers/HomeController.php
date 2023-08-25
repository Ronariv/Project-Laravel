<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $search_query = $request->query('search');
        if(!empty($search_query)){
            $books = Book::where('title', 'LIKE', "%$search_query%")->paginate(6)->appends(['search' => $search_query]);

        }
        else{
            $books = Book::paginate(18);
        }

        return view('home')->with('books', $books);
    }
    public function showDetail(Request $request){
        $books = Book::all();
        $book = Book::find($request->route('id'));
        return view('detail')->with('book', $book)->with('books',$books);
    }

}
