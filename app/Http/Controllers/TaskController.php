<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        return view('index', [
            'tasks' => Task::all(),
        ]);
    }
    public function tasks()
    {
        return view('indexorder', [
            'tasks' => Task::all()->sortBy('title'),
        ]);
    }

     public function view($id = 0)
    {
        return view('view', [
            'task' => \App\Models\Task::find($id),
        ]);
    }

     public function destroy($id, Request $request)
    {
        //$bfdeleteAccounts = bufashaccounts::findOrFail($id);
        //$bfdeleteAccounts->delete();
        //return 'delete';
        $task = Task::findOrFail($id);
        $task->delete();
        $request->session()->flash('alert-success', 'Task was deleted succesfully!');
        //return view('bufashaccts.allAccounts', compact('bfaccounts'));
        return redirect('/');
    }

}
