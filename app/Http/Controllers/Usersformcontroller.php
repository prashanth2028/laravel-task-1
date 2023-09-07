<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\usersform;
use Illuminate\Http\Request;

class Usersformcontroller extends Controller
{
    public function create(){
        return view('userindex');
    }

    public function store(Request $request){
      $date = $request->only(['name','phone','email','age']);

     $user= usersform::create($date);

     return 'user successfully created ! USER ID is :'. $user->id;
    }

    public function list(){
        $user = usersform::all();
        return view('list_user',['users'=>$user]);
    }

    public function edit($id){
        $user = usersform::find($id);
        return view('edit_user',['user'=>$user]);
    }

    public function update(Request $request,$id){
        $user = usersform::find($id);
        $user->name= $request->input('name');
        $user->phone= $request->input('phone');
        $user->email= $request->input('email');
        $user->age= $request->input('age');
        $user->save();
        return 'Successfully Updated the user ! <a href="'.url('list').'">Click me</a>';
    }

    public function delete($id){
        $user = usersform::find($id);
        $user->delete();
        return 'Successfully Delete the user ! <a href="'.url('list').'">Click me</a>';

    }
}
