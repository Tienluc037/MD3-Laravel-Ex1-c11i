<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function showAll()
    {
        $books = DB::table('books')->get();
        return view('book.list', compact('books'));
    }


    public function detail($id)
    {
        $book = DB::table('books')->where('id', $id)->get(); //->first()
        dd($book);
    }

    public function showFormCreate()
    {
        return view('book.create');
    }

    public function create(Request $request)
    {
        $data = $request->only('title','content');
//        dd($data);
        DB::table('books')->insert($data);
        return redirect()->route('book.list');
    }


    public function delete($id)
    {
        DB::table('books')->where('id',$id)->delete();
        return redirect()->route('book.list');
    }


    public function edit($id)
    {
        $book = DB::table('books')->where('id',$id)->first();
        return view('book.update',compact( 'id','book'));
    }

    public function update(Request $request, $id)
    {
//        dd($request);
        $data = $request->only('title','content');
         DB::table('books')->where('id',$id)->update($data);
        return redirect()->route('book.list');

    }
}
