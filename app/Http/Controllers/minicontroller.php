<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mini;
class minicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $minis = Mini::all();
        return view('mini.home',compact('minis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mini.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mini = new Mini;
        $this->validate($request,[
            'title'=> 'required|unique:minis',
            'body' => 'required',
        ]);
        $mini->title = $request->title;
        $mini->body = $request->body;
        $mini->save();
        session()->flash('message','Created Successfully');
        return redirect('mini');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Mini::find($id);
        return view('mini.show',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Mini::find($id);
       return view('mini.edit',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mini = Mini::find($id);
        $this->validate($request,[
            'title'=> 'required',
            'body' => 'required',
        ]);
        $mini->title = $request->title;
        $mini->body = $request->body;
        $mini->save();
        session()->flash('message','Updated Successfully');
        return redirect('mini');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Mini::find($id);
        $item->delete();
        session()->flash('message','Deleted Successfully');
        return redirect('mini');
    }
}
