<?php

namespace App\Http\Controllers;

use App\model\Memories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemoriesController extends Controller
{
    //
    public function create()
    {
        return view('create');

    }
    public function store(Request $request)
    {

        $memories = new Memories();

        $title=$request->input('title');
        $text=$request->input('text');
        $user_id = Auth::user()->id;


        $memories->title = $title;
        $memories->description = $text;
        $memories->user_id = $user_id;

        $memories->save();
        return redirect()->route('getList');


    }

    public function edit($id)
    {
        $memory = Memories::findOrFail($id);

        return view('edit' , compact('memory'));


    }

    public function patch($id , Request $request)
    {

        $title=$request->input('title');
        $text=$request->input('text');


        \DB::table('memories')
            ->where('id', $id)
            ->update(['title' =>$title,'description' =>$text]);


        return redirect()->route('getList');



    }

    public function delete($id)
    {

        $memory = Memories::findOrFail($id);
        $memory->delete();

        return redirect()->route('getList');


    }

    public function getList()
    {
        $memories = Memories::where('user_id',Auth::user()->id)->get();
        return view('list',compact('memories'));
//        return json_encode($memories);

    }

    public function show($id)
    {
        $memory = Memories::findOrFail($id);
        return view('show' , compact('memory'));

    }
}
