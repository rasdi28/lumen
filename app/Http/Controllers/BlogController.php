<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

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
        $blog = Blog::findOrFail($id);
        return response()->json($blog);
    }

    public function update(Request $request, $id)
    {
        $blog_baru = Blog::findOrFail($id);
        $blog = $request->all();
        $blog_baru->fill($blog);
        $blog_baru->save();

        return response()->json($blog);

    }
}
