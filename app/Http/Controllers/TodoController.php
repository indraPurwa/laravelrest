<?php

namespace App\Http\Controllers;
use App\Todo;

class TodoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    
    public function all(){
        $data = Todo::all();
        return response()->json($data, 200);
    }
    public function paginate()
    {
        $getPost = Todo::OrderBy("id", "DESC")->paginate(10);
        $out = [
            "message" => "list_post",
            "results" => $getPost
        ];

        return response()->json($out, 200);
    }
    public function show($id){
        $data = ModelTodo::where('id',$id)->get();
        return response ($data);
    }
    public function store (Request $request){
        $data = new ModelTodo();
        $data->activity = $request->input('activity');
        $data->description = $request->input('description');
        $data->save();
    
        return response('Berhasil Tambah Data');
    }
}
