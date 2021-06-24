<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        $blog = Blog::all();
        return response()->json($blog);
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
}
