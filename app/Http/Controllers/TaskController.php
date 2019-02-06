<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    //
    public function showTask(){
    	$tasks = Task::all();
    	//$task = new App\Task
    	return view('tasks.tasklist', compact("tasks"));
    }
    public function addTask(Request $request){
    	$task = new Task;
    	$task->name = $request->newtask;
    	//$task->status = $request->newtask;
    	$task->save();
    	return redirect("/tasklist");
    }
    public function updateTask(Request $request, $id){
    	$taskUpdate = Task::find($id);
    	$taskUpdate->name = $request->editedtask;
    	$taskUpdate->save();
    	//dd($taskUpdate);
    	return redirect("/tasklist");
    }
    public function deleteTask($id){
    	$taskDelete = Task::find($id); //id
    	$taskDelete->delete();
    	//return redirect("/tasklist");
    }
}
