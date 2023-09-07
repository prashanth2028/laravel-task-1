<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class internscontroller extends Controller
{
    public function insert_form(){
        return view('index');
    }

    public function insert(Request $request){
        $intern = $request->input('name');

         DB::insert('insert into interns(name) values(?)',[$intern]);

         return 'successfully name is added <a href="/view">go back to view page</a> <br> <a href="/">go back to main page</a>';

    }

    public function select(){
      $intern =  DB::select('select * from interns');

      return view('view',['interns'=>$intern]);

    }

    public function edit($id){
        $intern = DB::select('select * from interns where id =?',[$id]);
        return view('edit',['intern'=>$intern]);
    }

    public function update(Request $request ,$id){
        $name = $request->input('name');
        DB::update('update interns set name =? where id =?',[$name,$id]);
        return 'record updated successfully <a href="/view">go back to view page</a> <br> <a href="/">go back to main page</a>';
    }

    public function delete($id){
        DB::delete('delete from interns where id =?',[$id]);
        return 'Successfully deleted the person <a href="/view">go back to view page</a> <br> <a href="/">go back to main page</a>';

    }

    public function delete_all(){
        DB::statement('truncate table interns');
        return 'Successfully deleted all the recordes form the database <a href="/view">go back to view page</a> <br> <a href="/">go back to main page</a> ';
    }
}
