<?php

namespace App\Http\Controllers;

use App\Models\Book;
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
    public function search(Request $request){
        $input = $request->all();
        if($input["search"] == null){
            switch ($input["cat"]){
                case "all":
                    $data = Book::query()->get();
                    break;
                default:
                    $data = Book::query()->where("cat_id","=",$input["cat"])->get();
                    break;
            }
        }else{
            switch ($input["cat"]){
                case "all":
                    $data = Book::query()->where("name","LIKE","%".$input["search"]."%")->get();
                    break;
                default:
                    $data = Book::query()->where("name","LIKE","%".$input["search"]."%")->where("cat_id","=",$input["cat"])->get();
                    break;
            }
        }
        return view("frontend.book.result",["data" => $data]);
    }
}
