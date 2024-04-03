<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Models\Category;
use App\services\AuthService;
use App\services\CategoryService;
use App\services\OrderService;
use App\services\ProductService;
use App\services\RoleService;
use App\services\UserService;

class CategoryController extends Controller
{
    public function __construct(CategoryService $categoryService, OrderService $orderService, UserService $userService, ProductService $productService, RoleService $roleService, AuthService $authService)
    {
        parent::__construct($categoryService, $orderService, $userService, $productService, $roleService, $authService);
        $this->middleware('hasPermission:CATEGORY_READ_ALL')->only('index');
        $this->middleware('hasPermission:CATEGORY_CREATE')->only('create');
        $this->middleware('hasPermission:CATEGORY_CREATE')->only('store');
        $this->middleware('hasPermission:CATEGORY_UPDATE')->only('edit');
        $this->middleware('hasPermission:CATEGORY_UPDATE')->only('update');
        $this->middleware('hasPermission:CATEGORY_DELETE')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = $this->categoryService->getAll();
        return view('category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryStoreRequest $request)
    {
        $this->categoryService->create($request);
        return redirect()->route('categories.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryUpdateRequest $request, Category $category)
    {
        $this->categoryService->update($request, $category);
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $this->categoryService->delete($category);
        return redirect()->route('categories.index');
    }





}
