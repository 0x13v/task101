<?php

namespace App\Http\Controllers;
use App\Models\Account;
use App\Models\Project;
use App\Models\Job;
use App\Models\Task;
use Illuminate\Http\Request;

class ProjectsController extends Controller
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
        $accounts = Account::all();


        return view('Queries.subpages.addproject',['accounts'=>$accounts]);
    }



    public function store(Request $request )
    {
        $project = new Project();
        $project->name = $request->_Name;
        $project->price =  $request->price;
        $project->account_id = $request->account_id;
        $project->save();
        return redirect()->route('queries.index');
    }
}
