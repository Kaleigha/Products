<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('index', compact('products'));
    }

    public function addProduct()
    {
        return view('fonctions.addProduct');
    }

    public function store(Request $request)
    {
        $post = Product::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price')
        ]);
        return redirect('/add');
    }

    public function updateProduct($id)
    {
        $product = Product::findOrFail($id);
        // dd($product);
        return view('fonctions.updateProduct', ['product' => $product]);

    }

    public function updateProductConfirm(Request $request, $id)
    {
        $post = Product::findOrFail($id);
        $post->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price')
        ]);
        return redirect('/');
    }
    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('/');
    }
}
