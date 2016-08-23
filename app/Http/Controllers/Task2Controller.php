<?php

namespace App\Http\Controllers;

//use App\Commands\StoreTaskCommand;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\StoreTaskRequest;

use App\Commands\StoreTaskCommand;
use App\Commands\UpdateTaskCommand;
use App\Commands\DestroyTaskCommand;
use App\Task;

class Task2Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $tasks = array('Task One', 'Task Two', 'Task Thre');


        $tasks = Task::all();
        $heading = "My tasks";
//        $tasks = Task::where('id', '=','1')->get();

        return view('tasks', array('tasks'=> $tasks, 'heading'=> $heading));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
        return 'This is the create';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTaskRequest $request)
    {
        $name = $request->input('name');
//        return 'Success';
//        Instancimi
    $command = new StoreTaskCommand($name);
//        Egzekutimi
        $this->dispatch($command);

        return \Redirect::route('task.index')->with('message', 'Task added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Task::find($id);

//        return $tasks[$id];
            return view('show', array('task'=> $task));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//        return 'This is task Edit / '.$id.'';
        $task = Task::find($id);

        return view('edit', array('task'=> $task));
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
        $name = $request->input('name');
//        return 'Success';
//        Instancimi
        $command = new UpdateTaskCommand($id, $name);
//        Egzekutimi
        $this->dispatch($command);

        return \Redirect::route('task.index')->with('message', 'Task Updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//        Instancimi
        $command = new DestroyTaskCommand($id);
//        Egzekutimi
        $this->dispatch($command);

        return \Redirect::route('task.index')->with('message', 'Task Deleted!');
    }
}
