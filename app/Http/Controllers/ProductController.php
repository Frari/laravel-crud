<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products = Product::orderBy('id', 'desc')->get();
      return view('products.index', compact('products'));
    }


    public function create()
    {
      return view('products.create');
    }


    public function store(Request $request)
    {
      $dati = $request->all();
      $nuovo_prodotto = new Product();
      // $nuovo_prodotto->name = $dati['name'];
      // $nuovo_prodotto->description = $dati['description'];
      // $nuovo_prodotto->price = $dati['price'];
      $nuovo_prodotto->fill($dati);
      $nuovo_prodotto->save();

      return redirect()->route('products.index');
    }


    public function show(Product $product)
    {
        //
    }


    public function edit(Product $product)
    {
        //
    }


    public function update(Request $request, Product $product)
    {
        //
    }


    public function destroy(Product $product)
    {
        //
    }
}
