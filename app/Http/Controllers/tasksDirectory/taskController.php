<?php

namespace App\Http\Controllers\tasksDirectory;

use App\Http\Controllers\Controller;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class taskController extends Controller
{

    public function taskPage()
    {
        return view("defineTheTasksDirectory.defineTheTask");

    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data  = new Task;


        $data->title = $request->title;
        $data->content = $request->contentt;
        $data->status = $request->status;
        $data->deadline = $request->deadline;

        $data->save();

        return view("todoListPageDirectory.todoList",compact("data"));

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
