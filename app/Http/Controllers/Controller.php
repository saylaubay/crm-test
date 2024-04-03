<?php

namespace App\Http\Controllers;

use App\services\AuthService;
use App\services\CategoryService;
use App\services\OrderService;
use App\services\ProductService;
use App\services\RoleService;
use App\services\UserService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    protected $categoryService;
    protected $orderService;
    protected $userService;
    protected $productService;
    protected $roleService;
    protected $authService;

    public function __construct(
        CategoryService $categoryService,
        OrderService $orderService,
        UserService $userService,
        ProductService $productService,
        RoleService $roleService,
        AuthService $authService
    )
    {
        $this->categoryService = $categoryService;
        $this->orderService = $orderService;
        $this->userService = $userService;
        $this->productService = $productService;
        $this->roleService = $roleService;
        $this->authService = $authService;
    }


}
