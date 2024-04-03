<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleStoreRequest;
use App\Models\Role;
use App\services\AuthService;
use App\services\CategoryService;
use App\services\OrderService;
use App\services\ProductService;
use App\services\RoleService;
use App\services\UserService;
use Illuminate\Http\Request;

class RoleController extends Controller
{

    public function __construct(CategoryService $categoryService, OrderService $orderService, UserService $userService, ProductService $productService, RoleService $roleService, AuthService $authService)
    {
        parent::__construct($categoryService, $orderService, $userService, $productService, $roleService, $authService);
        $this->middleware('hasPermission:ROLE_READ_ALL')->only('index');
        $this->middleware('hasPermission:ROLE_CREATE')->only('create');
        $this->middleware('hasPermission:ROLE_CREATE')->only('store');
        $this->middleware('hasPermission:ROLE_UPDATE')->only('edit');
        $this->middleware('hasPermission:ROLE_UPDATE')->only('update');
        $this->middleware('hasPermission:ROLE_DELETE')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = $this->roleService->getAllNoPaginate();
        return view('role.index', ['roles'=>$roles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('role.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoleStoreRequest $request)
    {
        $this->roleService->create($request);
        return redirect()->route('roles.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        $permissions = $this->roleService->getPermissions($role);
        $list = $this->roleService->edit($permissions);
        return view('role.edit', ['role'=>$role,'list'=>$list]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        $this->roleService->update($request, $role);
        return redirect()->route('roles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $this->roleService->delete($role);
        return redirect()->route('roles.index');
    }
}
