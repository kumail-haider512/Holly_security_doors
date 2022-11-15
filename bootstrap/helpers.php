<?php

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Category;
use App\Models\Product;

function uploadFile($file, $path){
    $name = time().'-'.str_replace(' ', '-', $file->getClientOriginalName());
    $file->move($path,$name);
    return $path.'/'.$name;
}
function allList()
{
	$header = Category::all();
	return $header;
	
}
function itemCount()
{
	$item = Product::whereStatus(0)->count();
	return $item;
}
function amount()
{
	$amount = Product::whereStatus(0)->sum('price');
	return $amount;
}
?>
