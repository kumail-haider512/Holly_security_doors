<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
	public function index()
	{
		$list = Category::all();
		return view('admin.category.list',get_defined_vars());
	}
    public function add()
    {
    	return view('admin.category.add');
    }
    public function save(Request $req, $id=null)
    {
        // dd($req);
    	$req->validate([
    		'name' => 'required',
    		'description' => 'required',
            'range' => 'required',
    		'image' => 'required',
    	]);
    	if(is_null($id))
    	{
    		$category = new Category();
	    	$category->name = $req->name;
	    	$category->description = $req->description;
            $category->range = $req->range;
	    	$category->image = uploadFile($req->image, 'uploads/doors');
	    	$category->save();

	    	$msg = "Category save successfully";
    	}
    	else
    	{
    		$category = Category::find($id);
	    	$category->name = $req->name;
            $category->description = $req->description;
            $category->range = $req->range;
            $category->image = uploadFile($req->image, 'uploads/doors');
            $category->save();
	    	$msg = "Category save successfully";
    	}
    	return redirect()->route('admin.category.list')->with('success',$msg);
    }
    public function edit($id)
    {
        // dd($id);
        $category=Category::find($id);
        return view('admin.category.edit',get_defined_vars());
    }
    public function delete($id)
    {
        Category::find($id)->delete();
        return redirect()->back()->with('success','User deleted successfully');
    }
}