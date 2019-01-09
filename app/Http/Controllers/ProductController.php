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
        $product = new Product();

        return view('admin.products.create', compact('product'));
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
        return redirect('admin/products/create');
    }

    public function destroy($id)
    {
        //Delete the product
        Product::destroy($id);

        //Store a mesagge
        session()->flash('msg','Product has been deleted');

        //Redirect back
        return redirect('admin/products/');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.products.edit', compact('product'));
    }

    public function show($id)
    {
        $product = Product::find($id);

        return view('admin.products.details', compact('product'));
    }

    public function update(Request $request, $id)
    {
        //find the product
        $product = Product::find($id);

        //Validate the form
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

        //check if here is any image
        if ($request->hasFile('image'))
        {
            //check if the old image exists inside folder
            if (file_exists(public_path('uploads/').$product->image))
            {
                unlink(public_path('uploads/').$product->image);
            }

            //Upload the new image
            $image = $request->image;
            $image->move('uploads', $image->getClientOriginalName());

            $product->image = $request->image->getClientOriginalName();
        }

        //updating the product
        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $product->image
        ]);

        //store a image session
        $request->session()->flash('msg','Product has been updated');

        //redirect
        return redirect('admin/products');

    }


}
