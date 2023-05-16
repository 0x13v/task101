<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
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


    //view functions
    public function index()
    {
        $Categories = Category::orderBy('id')->get();

        if($Categories->isEmpty()){
            $Categories = null;
        }else{
            $Categories = json_encode($this->GetCategoriesAsHTML($Categories));
        }

        return view('Hierarchical.Table',['Categories'=>$Categories]);
    }


    //public action functions

    //private action functions
    private function GetCategoriesAsHTML($categories, $level = 0)
    {
        $html = '<ul>';

        foreach ($categories as $category) {
            $html .= '<li>Level ' . $level . ' ' . $category->name;

            if ($category->children->isNotEmpty()) {
                $html .= $this->GetCategoriesAsHTML($category->children, $level + 1);
            }

            $html .= '</li>';
        }

        $html .= '</ul>';

        return $html;
    }


    private function GetCategoriesAsJSON($categories, $level = 0)
    {
        $data = [];

        foreach ($categories as $category) {
            $categoryData = [
                'name' => $category->name,
                'level' => $level,
            ];

            if ($category->children->isNotEmpty()) {
                $categoryData['children'] = GetCategoriesAsJSON($category->children, $level + 1);
            }

            $data[] = $categoryData;
        }

        return $data;
    }
}
