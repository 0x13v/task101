<?php

namespace App\Http\Controllers;
use App\Models\Account;
use App\Models\Project;
use App\Models\Job;
use App\Models\Task;
use Illuminate\Http\Request;

class AccountsController extends Controller
{
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

        return view('Queries.subpages.addaccount');
    }


    public function store(Request $request )
    {
        $account = new Account();
        $account->name = $request->_Name;
        $account->save();

        return redirect()->route('queries.index');
    }
}
