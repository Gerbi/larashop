<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Product::all();

        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        //validate the form
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' => 'image|required'
        ]);

        //upload the image
        if ($request->hasFile('image'))
        {
            $image = $request->image;
            $image->move('uploads',$image->getClientOriginalName());
        }

        //save the data
        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' =>$request->description,
            'image' => $request->image->getClientOriginalName()

        ]);

        //session message
        $request->session()->flash('msg','Your product has been added');

        //redirect
        return redirect('products/create');
    }

    public function destroy($id)
    {
        //Delete the product
        Product::destroy($id);

        //Store a mesagge
        session()->flash('msg','Product has been deleted');

        //Redirect back
        return redirect('products/');
    }
}
