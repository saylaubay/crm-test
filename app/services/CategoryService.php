<?php


namespace App\services;


use App\Models\Category;

class CategoryService
{

    public function getAll()
    {
        return Category::paginate(10);
    }

    public function create($request)
    {
        Category::create([
            'name'=>$request->name,
        ]);
    }

    public function update($request, $category)
    {
        $category->name = $request->name;
        $category->update();
    }

    public function delete($category)
    {
        $category->delete();

    }

    public function getAllNoPaginate()
    {
        return Category::all();
    }

}
