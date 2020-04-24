<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Categorie;

class CategoryController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function manageCategory()
    {
        $categories = Categorie::where('parent_id', '=', 0)->get();

        $allCategories = Categorie::all();

        return view('categoryTreeview',compact('categories','allCategories'));
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function addCategory(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);

        $input = $request->all();
        $input['parent_id'] = empty($input['parent_id']) ? 0 : $input['parent_id'];

        Categorie::create($input);
        return back()->with('success', 'New Category added successfully.');

    }
}
