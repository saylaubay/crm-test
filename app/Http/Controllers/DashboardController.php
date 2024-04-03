<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{

    public function index()
    {
        $userCount = $this->userService->getAll()->count();
        $orderCount = $this->orderService->getAll()->count();
        $noDeliveredCount = $this->orderService->getAllNoDelivery()->count();
        $deliveredCount = $this->orderService->getAllDelivrey()->count();
        $myDeliveryCount = $this->orderService->myAlldelivery()->count();
        $myUnDeliveryCount = $this->orderService->myAllUnDelivered()->count();
        $myAllDeliveredCount = $this->orderService->myAllDelivered()->count();

        $sMyAllDeliveryCount = $this->orderService->sMyAlldelivery()->count();

        $categoryCount = $this->categoryService->getAllNoPaginate()->count();
        $productCount = $this->productService->getAllNoPaginate()->count();

        $aUserCount = $this->userService->getAll()->count();
        $aRoleCount = $this->roleService->getAllNoPaginate()->count();

        return view('welcome', [
            'userCount'=>$userCount,
            'orderCount'=>$orderCount,
            'noDeliveredCount'=>$noDeliveredCount,
            'deliveredCount'=>$deliveredCount,
            'myDeliveryCount'=>$myDeliveryCount,
            'myUnDeliveryCount'=>$myUnDeliveryCount,
            'myAllDeliveredCount'=>$myAllDeliveredCount,
            'sMyAllDeliveryCount'=>$sMyAllDeliveryCount,
            'categoryCount'=>$categoryCount,
            'productCount'=>$productCount,
            'aUserCount'=>$aUserCount,
            'aRoleCount'=>$aRoleCount,
        ]);
    }
}
