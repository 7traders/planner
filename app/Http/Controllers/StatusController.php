<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */




    // public function index()
    // {
    //     $statuses = Status::all();
    //     return view('status.index', ['statuses' => $statuses]);
 
    // }
    public function index(Request $request)
    {
        if ('status_name' == $request->sort) {
            $statuses = Status::orderBy('status_name')->get();
        }
        else {
            $statuses = Status::all();
        }
        return view('status.index', ['statuses' => $statuses]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('status.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $status = new Status;
        $status->status_name = $request->status_name;
        $status->save();
        return redirect()->route('status.index')->with('success_message', 'The Status has been created.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function show(Status $status)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function edit(Status $status)
    {
        return view('status.edit', ['status' => $status]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Status $status)
    {
        $status->status_name = $request->status_name;
        $status->save();
        return redirect()->route('status.index')->with('success_message', 'The Status has been updated.');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function destroy(Status $status)
    {
        if($status->statusTasks->count()){
            return redirect()->route('status.index')->with('info_message', 'This Status can not be deleted, because it is used in the Task list!');
        }
        $status->delete();
        return redirect()->route('status.index')->with('success_message', 'The Status has been deleted.');

    }
}
