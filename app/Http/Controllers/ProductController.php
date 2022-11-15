<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Subcategory;
use App\Models\Order;
use App\Models\OrderProduct;
use Session;

class ProductController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function cart()
    {
        return view('cart');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function save(Request $req)
    {
        
        $req->validate([
            'sub_cat' =>  'required',
            'total_price' => 'required',
            'total_quantity' => 'required',
            'quantity' => 'required',
        ]);
        // dd($req);
        $sub_cat= Subcategory::find($req->sub_cat);
        // dd($sub_cat);
        $product = new Product();
        $product->name = $sub_cat->name;
        $product->description = $sub_cat->description;
        $product->image = $sub_cat->image;
        $product->price = $req->total_price;
        $product->quantity = $req->quantity;
        $product->save();
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }
    public function checkout()
    {
        $product = Product::whereStatus('0')->get();
        // dd($product);
        return view('front.checkout',get_defined_vars());
    }
    public function delete($id)
    {
        // dd($id);
        Product::find($id)->delete();
        return redirect()->back()->with('success','Checkout item deleted');
    }
    public function checkoutSave(Request $req)
    {
           
        $req->validate([
            'b_first' => 'required',
            'b_surname' => 'required',
            'b_email' => 'required',
            'b_telephone' => 'required',
            'b_telephone_alt' => 'required',
            'b_address1' => 'required',
            'b_city' => 'required',
            'b_county' => 'required',
            'b_postcode' => 'required',
        ]);
        
        $order= new Order();
        $order->fname = $req->b_first;
        $order->surname = $req->b_surname;
        $order->email = $req->b_email;
        $order->telephone = $req->b_telephone;
        $order->telephone_alt = $req->b_telephone_alt;
        $order->address = $req->b_address1;
        $order->city = $req->b_city;
        $order->county = $req->b_county;
        $order->postcode = $req->b_postcode;
        $order->save();

        foreach ($req->product_id as $data) 
        {
            $product = Product::find($data);
            $product->status = 1;
            $product->save();

            $order_product = new OrderProduct();
            $order_product->image = $product->image;
            $order_product->name = $product->name;
            $order_product->price = $product->price;
            $order_product->quantity = $product->quantity;
            $order_product->order_id = $order->id;
            $order_product->save();
        }
        return redirect()->route('checkout.order',$order->id)->with('success','Order created successfully');
    }
    public function order($id)
    {
        $order=Order::find($id);
        $order_product=OrderProduct::where('order_id',$id)->get();
        return view('front.order',get_defined_vars());
    }
    public function payment(Request $req)
    {

        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $intent=Session::get('intent_id');
        $response = $stripe->paymentIntents->capture($intent,['amount' => $req->amount_d*100]);
        return redirect()->route('home')->with('success','Payment succeeded');

    }
}
