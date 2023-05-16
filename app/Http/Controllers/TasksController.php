<?php

namespace App\Http\Controllers;
use App\Models\Account;
use App\Models\Project;
use App\Models\Job;
use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    //
        //
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('Queries.subpages.addaccount');
    }

    public function add()
    {
        $jobs = Job::all();

        return view('Queries.subpages.addtask',['jobs'=>$jobs]);
    }


    public function store(Request $request )
    {
        $task = new Task();
        $task->name = $request->_Name;
        $task->project_id = $request->job_id;
        $task->save();

        return redirect()->route('queries.index');
    }
}
