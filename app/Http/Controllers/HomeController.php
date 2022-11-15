<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
class HomeController extends Controller
{
    public function index()
    {
        $list = Category::all();
    	return view('front.home',get_defined_vars());
    }
    public function showroom()
    {
    	return view('front.showroom');
    }
    public function about_us()
    {
    	return view('front.about-us');
    }
    public function service()
    {
    	return view('front.service');
    }
    public function reviews()
    {
    	return view('front.reviews');
    }
    public function contact_us()
    {
    	return view('front.contact-us');
    }
    public function faq()
    {
    	return view('front.faq');
    }
    public function blog()
    {
    	return view('front.blog');
    }
    public function special_offers()
    {
    	return view('front.special_offers');
    }
    public function external_bfold($id)
    {
        $subs = Subcategory::where('category_id',$id)->get();
        return view('front.external_bfold',get_defined_vars());
    }
    public function external_french($id)
    {
        $subs = Subcategory::where('category_id',$id)->get();
        return view('front.external_french',get_defined_vars());
    }
    public function internal($id)
    {
        $subs = Subcategory::where('category_id',$id)->get();
        return view('front.internal',get_defined_vars());
    }
    public function internal_bfold($id)
    {
        $subs = Subcategory::where('category_id',$id)->get();
        return view('front.internal_bfold',get_defined_vars());
    }
    public function internal_french($id)
    {
        $subs = Subcategory::where('category_id',$id)->get();
        return view('front.internal_french',get_defined_vars());
    }
    public function external($id)
    {
        $subs = Subcategory::where('category_id',$id)->get();
        return view('front.external',get_defined_vars());
    }
    public function door_frame($id)
    {
        $subs = Subcategory::where('category_id',$id)->get();
        return view('front.door_frame',get_defined_vars());
    }
    public function sliding_door($id)
    {
        $subs = Subcategory::where('category_id',$id)->get();
        return view('front.sliding_door',get_defined_vars());
    }
    public function patio($id)
    {
        $subs = Subcategory::where('category_id',$id)->get();
        return view('front.patio',get_defined_vars());
    }
    public function login()
    {
        return view('auth.login');
    }
    public function detail($id)
    {
        $sub = Subcategory::find($id);
        $list = Category::all();
        return view('front.detail',get_defined_vars());
    }
}
