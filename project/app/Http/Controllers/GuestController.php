<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Cd;
use Illuminate\Http\Request;

class GuestController extends Controller
{
     
    public function index()
    {
        $books = Book::all();
        $cds= Cd::all();
        return view('guest.guest' , compact('books', 'cds'));
    }

}
