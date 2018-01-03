<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }
    public function index(){
        #book_category
        $cat = Category::query()->get();
        return view("frontend.book.index",["cat" => $cat]);
    }
}
