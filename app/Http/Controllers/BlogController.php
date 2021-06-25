<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $blog = Blog::all();
        return response()->json([
            'status'=>'success',
            'message'=>'Load Data Blog succcessfuly',
            $blog
        ]);
    }

    public function create(Request $request)
    {

        $data = $request->all();
        $blog = Blog::create($data);

        return response()->json($blog);

    }

    public function show($id)
    {
        $blog = Blog::find($id);
        if(!$blog){
            return response()->json([
                'message'=>'Blog Not Found'],404);
        }
        return response()->json($blog);

    }

    public function update(Request $request, $id)
    {
        $blog_baru = Blog::findOrFail($id);
        $blog = $request->all();
        $blog_baru->fill($blog);
        $blog_baru->save();

        return response()->json($blog_baru);

    }

    public function destroy($id)
    {
        $blog = Blog::find($id);
        if (!$blog){
            return response()->json([
                'message'=>'File Not Found'
            ]);
        }

        $blog->delete();
        return response()->json([
            'message'=>'Delete Data Successfuly'
        ]);
    }
}
