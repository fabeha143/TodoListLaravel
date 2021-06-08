<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todolist;
class TodolistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $todoLists = Todolist::all();
       return view('todolist', ['todoLists' => $todoLists]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_todolist');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Todolist::create([
            'task_name' => $request->task_name,
        ]);
        return redirect(route('todolist.index'))->with(['success' => 'Todolist added!!']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $todoList  = Todolist::where('id' , $id)->first();
        return view('edit',['todoList' => $todoList] );
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
        Todolist::where('id' , $id)->update([

                'task_name' => $request->task_name,
            ]);
            return redirect(route('todolist.index'))->with(['success' => 'Todolist updated!!']);
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Todolist::where('id' , $id)->delete();
        return redirect(route('todolist.index'))->with(['success' => 'Todolist deleted!!']);
    }
}
