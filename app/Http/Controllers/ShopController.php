<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Product;
use Exception;
use Illuminate\Support\Arr;

class ShopController extends Controller
{
    public function index(){
        $shops = Shop::all();
        return view('shop.index',compact('shops'));
    }

    public function create(){
        return view('shop.create');
    }

    public function store(Request $request){
        $name=$request->input('name');

        $shop = new Shop();
        $shop->name=$name;
        $shop->save();

        return redirect()->route('shops.index');
    }

    public function show($id){
        $shop = Shop::find($id);
        return view('shop.show',compact('shop'));
    }

    public function edit($id){
        $shop = Shop::find($id);
        $products = Product::all();
        $plucked = $shop->products->pluck('id');
        return view('shop.edit',compact('shop','products','plucked'));
    }

    public function update(Request $request,$id){
        $products = $request->input('shop_product');
        $name = $request->input('name');

        $shop = Shop::find($id);
        $shop->name = $name;
        $shop->products()->sync($products);
        $shop->save();

        return redirect()->route('shops.show',$id);
    }

    public function destroy(Request $request,$id){
        try {
            Shop::destroy($id);
        } catch (Exception $e) {
            $request->session()->flash('warning','Không thể xóa shop, hãy bỏ hết products trong shop trước');
        }
        
        return redirect()->route('shops.index');
    }
}
