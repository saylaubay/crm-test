<?php

namespace App\Http\Controllers;

use App\Exports\OrderExport;
use App\Http\Requests\OrderByDateRequest;
use App\Http\Requests\OrderStoreRequest;
use App\Http\Requests\OrderUpdateRequest;
use App\Models\Order;
use App\services\AuthService;
use App\services\CategoryService;
use App\services\OrderService;
use App\services\ProductService;
use App\services\RoleService;
use App\services\UserService;
use Maatwebsite\Excel\Facades\Excel;

class OrderController extends Controller
{

    public function __construct(CategoryService $categoryService, OrderService $orderService, UserService $userService, ProductService $productService, RoleService $roleService, AuthService $authService)
    {
        parent::__construct($categoryService, $orderService, $userService, $productService, $roleService, $authService);
        $this->middleware('hasPermission:ORDER_READ_ALL')->only('index');
        $this->middleware('hasPermission:ORDER_CREATE')->only('create');
        $this->middleware('hasPermission:ORDER_CREATE')->only('store');
        $this->middleware('hasPermission:ORDER_UPDATE')->only('edit');
        $this->middleware('hasPermission:ORDER_UPDATE')->only('update');
        $this->middleware('hasPermission:ORDER_DELETE')->only('destroy');

        $this->middleware('hasPermission:ORDER_BY_DATE')->only('orderByDate');
        $this->middleware('hasPermission:MY_DELIVERED')->only('myDelivered');
        $this->middleware('hasPermission:MY_UNDELIVERED')->only('myUnDelivered');
        $this->middleware('hasPermission:MY_DELIVERY')->only('mydelivery');
        $this->middleware('hasPermission:SET_DELIVERY')->only('delivered');
        $this->middleware('hasPermission:EXPORT_EXCEL')->only('export');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = $this->orderService->getAllPaginate();
        return view('order.index', ['orders'=>$orders]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $deliverymans = $this->userService->getDeliverymans();
        $supervisors = $this->userService->getrSupervisors();
        $products = $this->productService->getAll();
        return view('order.create', ['supervisors'=>$supervisors,'deliverymans'=>$deliverymans,'products'=>$products]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OrderStoreRequest $request)
    {
        $this->orderService->create($request);
        return redirect()->route('orders.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        $supervisors = $this->userService->getrSupervisors();
        $deliverymans = $this->userService->getDeliverymans();
        $products = $this->productService->getAll();
        return view('order.edit', ['order'=>$order,'deliverymans'=>$deliverymans,'products'=>$products,'supervisors'=>$supervisors]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OrderUpdateRequest $request, Order $order)
    {
        $this->orderService->update($request, $order);
        return redirect()->route('orders.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $this->orderService->delete($order);
        return redirect()->route('orders.index');
    }

    //ORDER_BY_DATE
    public function orderByDate(OrderByDateRequest $request)
    {
        $list = $this->orderService->orderByDate($request);
        return $list;
    }

    //MY_DELIVERED
    public function myDelivered()
    {
        $myDeliveries = $this->orderService->myDelivered();
        return view('mydelivery.delivered', ['myDeliveries'=>$myDeliveries]);
    }

    //MY_UNDELIVERED
    public function myUnDelivered()
    {
        $myDeliveries = $this->orderService->myUnDelivered();
        return view('mydelivery.undelivered', ['myDeliveries'=>$myDeliveries]);
    }

    //MY_DELIVERY
    public function mydelivery()
    {
        $myDeliveries = $this->orderService->mydelivery();
        return view('mydelivery.index', ['myDeliveries'=>$myDeliveries]);
    }

    //SET_DELIVERY
    public function delivered($id)
    {
        $this->orderService->delivered($id);
        return redirect()->route('mydelivery');
    }

    //EXPORT_EXCEL
    public function export(OrderByDateRequest $request)
    {
        $data = $this->orderService->export($request);
        return Excel::download(new OrderExport($data['start'], $data['end']), $request->start. " - ".$request->end.".xlsx");
    }

}
