<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;

class rcontroller extends Controller
{
    //
    public function index(){
        $n='1';
        $users=users::all();
        return view('welcome',compact('users','n'));

    }
    public function create(Request $request){
        $validate=$request->validate([
            'password'=>'required',
            'name'=>'required'
        ]);
        if($validate){
             users::create([
             'password'=>$request->password,
             'name'=>$request->name
             ]);
         }
         return redirect()->back();
 
    }
    public function delete(Request $request,$id){
        $cruds=users::where('id','=',$id)->delete();
        if($cruds){
            return redirect()->back();
       }}
       public function update(Request $request,$id){
        $ard=users::where('id','=',$id)->first();
        $r=$id;
        return view('update',compact('ard','r'));
       }
       public function update2(Request $request,$id){
        $validate=$request->validate([
            'password'=>'required',
            'name'=>'required'
        ]);
        if($validate){
             users::where('id','=',$id)->update([
             'password'=>$request->password,
             'name'=>$request->name
             ]);}
        return redirect('/');
       }
}