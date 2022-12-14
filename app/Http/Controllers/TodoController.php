<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todoList = Todo::all()->toArray();
        $todoTable = view('list', compact('todoList'))->render();
        return view("index")->with(
            compact([
                'todoTable'
            ])
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Todo::create([
            'title' => $request->title, 
            'description' => $request->description, 
            'due_date' => $request->due_date,
            'status' => $request->status,
        ]);
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
        $task = Todo::getById($id)->toArray();
        $task = $task[0];
        return view("info")->with(
            compact([
                'task'
            ])
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $task = Todo::getById($id)->toArray();
        $task = $task[0];
        return view("edit")->with(
            compact([
                'task'
            ])
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        Todo::where('id', $request->id)
            ->update([
                'title' => $request->title, 
                'description' => $request->description, 
                'due_date' => $request->due_date,
                'status' => $request->status,
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        Todo::find($request->id)->delete();
    }
}
