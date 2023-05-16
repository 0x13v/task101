<?php

namespace App\Http\Controllers;


use App\Models\Account;
use App\Models\Project;
use App\Models\Job;
use App\Models\Task;

use Illuminate\Http\Request;

class QueriesTaskController extends Controller
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


     public function index(Request $request)
     {



         if($request->exists('Querie')&&$request->exists('filter')&&$request->exists('Search')){

            $price = (isset($request->Search)&&$request->filter!=0) ? $request->Search : 1e5;
            $accountname = (isset($request->Search)&&$request->filter==0) ? $request->Search : null;
            $Querie = (isset($request->Search)) ? $request->Querie : 1;
            $filter =(isset($request->filter)) ? $request->filter : 1;
            $list = [
                '1' => 'account',
                '2' => 'jobs',
                '3' => 'tasks',

            ];
            $TableList = ['account', 'tasks'];
            switch ($filter) {
                case 0:
                    # code...
                    if($Querie==0){
                        $projects = Project::with($TableList)
                        ->where('name','LIKE','%'.$accountname."%")
                        ->get();
                    }else{
                        $projects = Project::with($TableList)
                        ->whereHas($list[$Querie], function ($query) use ($accountname) {
                            $query->where('name','LIKE','%'.$accountname."%");
                        })
                        ->get();
                    }
                    break;
                case 1:
                    # code...
                    $projects = Project::with($TableList)
                    ->where('price', '<', $price)
                    ->get();
                    break;
                case 2:
                    # code...
                    $projects = Project::with($TableList)
                    ->where('price', '>', $price)
                    ->get();
                    break;
                default:
                    # code...
                     $projects = Project::with($TableList)
                        ->where('price', '=', $price)
                        ->get();
                    break;
            }


            return view('Queries.Queries' , ['Data'=>$projects,'Querie'=>$request->Querie,'filter'=>$request->filter,'Search'=>$request->Search]);
        }else{
            $projects = Project::with('account')->get();
            return view('Queries.Queries' , ['Data'=>$projects]);
        }

     }

}
