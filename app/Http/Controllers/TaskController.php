<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
     public function index(Request $request)
    {
    	$page = $request->input('page');
    	if (is_null($page)) {
    		$page = 1;
    	}
    	
        $tasks = Task::paginate(10, ['*'], 'page', $page);
        return $tasks;
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

        $this->validate($request, [
            'body' => 'required|unique:tasks'
        ]);

        $task->body = $request->body;
        $task->created_at = time();
        $task->updated_at = time();
        $task->save();

        return response()->json($task, 200);
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
        return $task;
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
        $task = Task::find($id);

        $this->validate($request, [
            'body' => 'required|unique:tasks'
        ]);

        $task->body = $request->body;
        $task->updated_at = time();
        $task->save();

        return response()->json($task, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();
        
        return response()->json(null, 204);
    }
}
