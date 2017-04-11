<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;


use View;
use Illuminate\Support\Facades\Redirect;



class authors extends Controller
{
    public function index (){
        return  View::make('authors.index')
                ->with('title' , 'Authors And Books')
                ->with('authors' , Author::orderBy('name')->get());
       
    }
    
    public function view($id){
        return View::make('authors.view')
                ->with('title' , 'Author View')
                ->with('author' , Author::where("id",$id)->first());
    }
    
    public function news (){
        return view('authors.news')
                ->with('title' , 'new_author');
                //->with('new_author' , Author::)
    }
    
    public function create(Request $request){
       // Author::create(array(
         //   'name' => Input::get('name'),
           //
           // 'bio' => Input::get('bio'),
        $request->input('name');
        $request->input('bio');
        
       
    }
}
