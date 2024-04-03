<?php


namespace App\services;


use App\Models\Product;

class ProductService
{

    public function getAll()
    {
        return Product::paginate(10);
    }

    public function getAllNoPaginate()
    {
        return Product::get();
    }

    public function store($request)
    {
        Product::create([
            'name'=>$request->name,
            'category_id'=>$request->category,
        ]);
    }

    public function update($request, $product)
    {
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->save();
    }

    public function delete($product)
    {
        $product->delete();
    }

}
