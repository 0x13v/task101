<?php

namespace App\Http\Controllers;
use App\Models\Account;
use App\Models\Project;
use App\Models\Job;
use App\Models\Task;
use Illuminate\Http\Request;

class JobsController extends Controller
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
        $projects = Project::all();
        return view('Queries.subpages.addjob',['projects'=>$projects]);
    }



    public function store(Request $request )
    {

        $job = new Job();
        $job->name = $request->_Name;
        $job->amount = $request->price;
        $job->project_id = $request->project_id;
        $job->save();

        return redirect()->route('queries.index');
    }
}
