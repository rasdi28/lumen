<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    public function index()
    {
        $test=Test::all();
        return response()->json([
            'status'=>'success',
            'message'=>'show all data',
            'data'=>$test
        ]);
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'nama'=>'required|string',
            'desc'=>'required|string|min:5'
        ]);

        $test = $request->all();
        Test::create($test);
        return response()->json([
            'status'=>'success',
            'message'=>'success input data',
            'data'=>$test
        ]);

    }

    public function show($id)
    {
        $test = Test::find($id);
        if(!$test){
            return response()->json([
                'status'=>'success',
                'message'=>'Data not found'
            ]);
        }
        return response()->json([
            'status'=>'success',
            'message'=>'show data',
            'data'=>$test
        ]);
    }

    public function update($id, Request $request)
    {
        $testbaru = Test::findOrFail($id);
        $test = $request->all();
        $testbaru->update($test);

        return response()->json([
            'status'=>'success',
            'message'=>'data berhasil di update',
            'data'=>$testbaru
        ]);
    }

    public function destroy($id)
    {
        $data = Test::find($id);
        $data->delete();
        return response()->json([
            'status'=>'success',
            'message'=>'data has been deleted',
            'data'=>$data
        ]);
        
    }

    //
}
