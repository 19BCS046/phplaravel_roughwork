<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentInsertController extends Controller
{
    public function insert_form(){
        return view('insert_form');
    }
    public function student_list(){
        $students=DB::select('select * from student');
        return view('student_list',['students'=>$students]);
    }
    public function insert(Request $request){
        $name=$request->input('student_name');
        DB::insert('insert into student (name) values (?)', [$name]);
        return "Record inserted successfully! <a href='/'>Click here to back</a>";
    }
    public function edit($id){
        $student=DB::select('select * from student where id=?', [$id]);
        return view('student_edit',['student'=>$student]);
    }
    public function update(Request $request,$id){
        $name=$request->input('student_name');
        DB::update('update student set name=? where id=?',[$name,$id]);
        return 'Record updated successfully<a href="/view_records">click here to go back</a>';
    }
    public function delete($id){
        DB::delete("delete from student where id=?",[$id]);
        return 'Record deleted Successfully<a href="/view_records">click here t go</a>';
    }
    public function delete_all(){
        DB::statement('truncate table student');
        return 'Table deleted Successfully<a href="/view_records">click here t go</a>';

    }
}
