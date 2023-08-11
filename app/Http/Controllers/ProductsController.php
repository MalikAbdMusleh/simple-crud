<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function create(Request $request)
    {
        $userID = Auth::user()->id;


        $create = Products::create([
            'product_name' => $request->product_name,
            'user_id' => $userID

        ]);

        return back()->with('status', 'product created!');;
    }

    public function get(Request $request)
    {
        $userID = Auth::user()->id;
        $all = Products::all();

        return view('products', ['products' => $all]);
    }

    public function my_products(Request $request)
    {
        $userID = Auth::user()->id;
        $all = Products::where(['user_id' => $userID])->get();
        
        return view('my_products', ['products' => $all]);
    }

    public function get_by_userid(Request $request)
    {
        $all = Products::where(['user_id' => $request->id,])->get();

        return view('products', ['products' => $all]);
    }
    public function dashboard(Request $request)
    {
        $userID = Auth::user()->id;
        $all = User::all();

        return view('dashboard', ['users' => $all]);
    }
    // 
    public function destroy(Request $request)
    {
        $userID = Auth::user()->id;
        $all = Products::destroy($request->id);
        return back()->with('status', 'product deleted!');;
    }
    public function view_update(Request $request)
    {
        return view('update_product', ['id' => $request->id]);;
    }
    public function update(Request $request)
    {
        Products::where('id', $request->id)
            ->update(['product_name' => $request->product_name]);
        return Redirect::to('/dashboard');
    }
}
