<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Models\Status;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    // public function index()
    // {
    //     $tasks = Task::all();
    //     return view('task.index', ['tasks' => $tasks]);
 
    // }
    public function index(Request $request)
    {
        if ('deadline' == $request->sort) {
            $tasks = Task::orderBy('deadline')->get();
        }
        else {
            $tasks = Task::all();
        }
        return view('task.index', ['tasks' => $tasks]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $statuses = Status::all();
        return view('task.create', ['statuses' => $statuses]);
 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task = new Task;
        $task->task_name = $request->task_name;
        $task->task_description = $request->task_description;
        $task->deadline = $request->deadline;
        $task->status_id = $request->status_id;
        $task->save();
        return redirect()->route('task.index')->with('success_message', 'The Task has been created.');
 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        $statuses = Status::all();
        return view('task.edit', ['task' => $task, 'statuses' => $statuses]);
 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        $task->task_name = $request->task_name;
        $task->task_description = $request->task_description;
        $task->deadline = $request->deadline;
        $task->status_id = $request->status_id;
        $task->save();
        return redirect()->route('task.index')->with('success_message', 'The Task has been updated.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('task.index')->with('success_message', 'The Task has been deleted.');
 
    }
}
