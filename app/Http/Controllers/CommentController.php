<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Comment;
use App\Article;

class CommentController extends Controller
{
    
	public function index(){

       $comment = Comment::all();
       return view('admin.list_comment')->with('comment',$comment);
        
    }

    public function store(Request $request){
        Comment::Create($request->all());
        return redirect('/');
    }

    public function destroy($id_comment){
        Comment::find($id_comment)->delete();
        return redirect('/comment');
    }

}
