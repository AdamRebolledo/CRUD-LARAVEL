<?php

namespace ProductApp\Http\Controllers;

use Illuminate\Http\Request;
use ProductApp\Product;
use ProductApp\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    
public function index(){
    $products = Product::orderBy('id', 'DESC')->paginate();
    return view('products.index',compact('products'));
}


public function edit($id){
    $product = Product::find($id);
    return view('products.edit', compact('product'));

}
public function create(){

    return view('products.create');
}


public function store(ProductRequest $request){
    $product = new Product;
    $product->name  = $request->name;
    $product->short = $request->short;
    $product->body  = $request->body;


    $product->save();
    return redirect()->route('products.index')
    ->with('info', 'El producto fue guardado');
}

public function update(ProductRequest $request, $id){
    $product = \ProductApp\Product::find($id);
    $product->name  = $request->name;
    $product->short = $request->short;
    $product->body  = $request->body;


    $product->save();
    return redirect()->route('products.index')
    ->with('info', 'El producto fue actualizado');
    
    }

public function show($id){
$product = Product::find($id);
return view('products.show', compact('product'));

}

public function destroy($id){

    $product = Product::find($id);
    $product->delete();

    return back()->with('info', 'El producto fue eliminado'); 

}

}
