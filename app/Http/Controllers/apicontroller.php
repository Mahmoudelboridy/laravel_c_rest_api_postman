<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;

class apicontroller extends Controller
{
    //read
    public function index(){
   return response()->json([
    'users'=>users::all()
]);
    }
    public function create(Request $request){
$data=users::create([
    'password'=>$request->password,
    'name'=>$request->name
    ]);
    return response()->json([
        'message'=>'user added',
        'status'=>'success',
        'data'=>$data 
    ]);
    }

    public function show(request $request,$id){
        $data=users::where('id','=',$id)->first();

   return response()->json($data);
    }
    public function update(Request $request,$id){
        $data=users::where('id','=',$id)->update([
            'password'=>$request->password,
            'name'=>$request->name ]);
            if ($data){
                return response()->json([
                    'message'=>'user updated',
                    'status'=>'success',
                    'data'=>$data 
                                ]);                  
            }

    }
    public function delete(Request $request,$id){
        $data=users::where('id','=',$id)->delete();
        if($data){
            return response()->json([
                'message'=>'user deleted',
                'status'=>'success',
                'data'=>$data 
                            ]);        }}
}