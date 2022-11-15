<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;

class SubCategoryController extends Controller
{
	public function index()
	{
		$list = Subcategory::all();
		return view('admin.subcategory.list',get_defined_vars());
	}
    public function add()
    {
    	$cats = Category::all();
    	return view('admin.subcategory.add',get_defined_vars());
    }
    public function save(Request $req, $id=null)
    {
        // dd($req);
    	$req->validate([
    		'name' => 'required',
    		'description' => 'required',
            'image' => 'required',
    		'price' => 'required',
    	]);
    	if(is_null($id))
    	{
    		$subcategory = new Subcategory();
	    	$subcategory->name = $req->name;
	    	$subcategory->category_id = $req->category_id;
            $subcategory->description = $req->description;
	    	$subcategory->price = $req->price;
	    	$subcategory->image = uploadFile($req->image, 'uploads/sub/doors');
	    	$subcategory->save();

	    	$msg = "Sub Category save successfully";
    	}
    	else
    	{
    		$subcategory = Subcategory::find($id);
	    	$subcategory->name = $req->name;
	    	$subcategory->category_id = $req->category_id;
            $subcategory->description = $req->description;
            $subcategory->price = $req->price;
            $subcategory->image = uploadFile($req->image, 'uploads/sub/doors');
            $subcategory->save();
	    	$msg = "Sub Category save successfully";
    	}
    	return redirect()->route('admin.subcategory.list')->with('success',$msg);
    }
    public function edit($id)
    {
        // dd($id);
        $cats = Category::all();
        $subcategory=Subcategory::find($id);
        return view('admin.subcategory.edit',get_defined_vars());
    }
    public function delete($id)
    {
        Subcategory::find($id)->delete();
        return redirect()->back()->with('success','Subcategory deleted successfully');
    }
}
