<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('productsingle');
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $file = $request->file('image');

        if ($file) {
            try {
                $path = $file->store('images');
                $data['image'] = 'images/' . basename($path);
                Log::info('File uploaded successfully: ' . $path);
            } catch (\Exception $e) {
                Log::error('File upload error: ' . $e->getMessage());
                $data['images'] = null;
            }
        }
      Product::create($data);


    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
