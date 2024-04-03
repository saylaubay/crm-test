<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Models\Product;
use App\services\AuthService;
use App\services\CategoryService;
use App\services\OrderService;
use App\services\ProductService;
use App\services\RoleService;
use App\services\UserService;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{

    public function __construct(CategoryService $categoryService, OrderService $orderService, UserService $userService, ProductService $productService, RoleService $roleService, AuthService $authService)
    {
        parent::__construct($categoryService, $orderService, $userService, $productService, $roleService, $authService);
        $this->middleware('hasPermission:PRODUCT_READ_ALL')->only('index');
        $this->middleware('hasPermission:PRODUCT_CREATE')->only('create');
        $this->middleware('hasPermission:PRODUCT_CREATE')->only('store');
        $this->middleware('hasPermission:PRODUCT_UPDATE')->only('edit');
        $this->middleware('hasPermission:PRODUCT_UPDATE')->only('update');
        $this->middleware('hasPermission:PRODUCT_DELETE')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = $this->productService->getAll();
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = $this->categoryService->getAll();
        return view('product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductStoreRequest $request)
    {
        $this->productService->store($request);
        return redirect()->route('products.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = $this->categoryService->getAllNoPaginate();
        return view('product.edit', ['product'=>$product, 'categories'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductUpdateRequest $request, Product $product)
    {
        $this->productService->update($request, $product);
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $this->productService->delete($product);
        return redirect()->route('products.index');
    }
}
