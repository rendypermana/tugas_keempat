<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Article;
use App\Comment;
use Session;
use Validator;
use Excel;

class ArticleController extends Controller
{
    /*public function __construct() {

    $this->middleware('sentinel');

  }*/
    public function getAjax(Request $request){

        $a = $_GET['keywords'];
        $article = Article::where('title', 'like', '%'.$request->$a.'%')
          ->orWhere('content', 'like', '%'.$request->$a.'%')
          ->paginate(2);
        
        $view = (String) view('pencarian-coba')
        ->with('article', $article)
        ->render();
        return response()->json(['view' => $view]);
        
        
    }

    public function index(){

        $comment = Comment::orderBy('id_comment', 'DESC')->limit(5, 'DESC')->get();
    	$article = Article::orderBy('id_article','DESC')->paginate(5);
        return view('list-post',compact('comment','article'));
  
    }

     public function show($id_article){
        $comment = Comment::orderBy('id_comment', 'DESC')->limit(5, 'DESC')->get();
        $article = Article::with('comment')->find($id_article);
        return view('detail-post',compact('article','comment'));
    }

    public function create(){
        return view('admin.create-post');
    }

    public function store(Request $request){
        Article::Create($request->all());
        return redirect('post');
    }

    public function edit($id_article){
        $article = Article::find($id_article);
        return view('admin.edit-post',compact('article'));
    }

    public function update(Request $request,$id_article){
        Article::find($id_article)->update($request->all());
        return redirect('post');
    }

    public function destroy($id_article){
        Article::find($id_article)->delete();
        return redirect('post');
    }

    public function admin(){
        return view('admin.home');
        
    }
    public function cari(){
        return view('pencarian-coba');
        
    }
    public function post(){
        $article= Article::all();
        return view('admin.list_post')->with('article', $article);
    }

    //Excel View
    public function importExport(){
        return view('admin.excel-post');
    }

    //Download excel
    public function downloadExcel(Request $request, $type){

        $data = Article::get()->toArray();

        return Excel::create('data_article_task_4_download', function($excel) use ($data) {

            $excel->sheet('mySheet', function($sheet) use ($data)

            {

                $sheet->fromArray($data);

            });

        })->download($type);

    }
    
    public function importExcel(Request $request) {

        if($request->hasFile('import_file')){

            $path = $request->file('import_file')->getRealPath();
            $extension = $request->file('import_file')->extension();


            $data = Excel::load($path, function($reader) {})->get();


            if(!empty($data) && $data->count()){

                if($extension == 'ods'){
                foreach ($data->toArray() as $key => $value) {

                    if(!empty($value)){

                        foreach ($value as $v) {        

                            $insert = ['title' => $v['title'], 'content' => $v['content'],'posted' => $v['posted']];

                            }
                        }

                    }
                    }else {
                        foreach ($data->toArray() as $key =>$value) {
                        $insert = ['title' => $value['title'], 'content' => $value['content'],'posted' => $value['posted']];
                         
                    }
                }


                

                if(!empty($insert)){

                    Article::insert($insert);
                    Session::flash('notice','Insert Record Successfully');
                    return back()->with('success','Insert Record successfully.');

                }


            }


        }


        return back()->with('error','Please Check your file, Something is wrong there.');
    }


}
