<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Models\User;
use App\services\AuthService;
use App\services\CategoryService;
use App\services\OrderService;
use App\services\ProductService;
use App\services\RoleService;
use App\services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(CategoryService $categoryService, OrderService $orderService, UserService $userService, ProductService $productService, RoleService $roleService, AuthService $authService)
    {
        parent::__construct($categoryService, $orderService, $userService, $productService, $roleService, $authService);
        $this->middleware('hasPermission:USER_READ_ALL')->only('index');
        $this->middleware('hasPermission:USER_CREATE')->only('create');
        $this->middleware('hasPermission:USER_CREATE')->only('store');
        $this->middleware('hasPermission:USER_UPDATE')->only('edit');
        $this->middleware('hasPermission:USER_UPDATE')->only('update');
        $this->middleware('hasPermission:USER_DELETE')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = $this->userService->getAll();
        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = $this->roleService->getAll();
        return view('user.create', ['roles'=>$roles]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserStoreRequest $request)
    {
        $this->userService->create($request);
        return redirect()->route('users.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $roles = $this->roleService->getAll();
        return view('user.edit', ['user'=>$user, 'roles'=>$roles]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $this->userService->update($request, $user);
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $this->userService->delete($user);
        return redirect()->route('users.index');
    }
}
