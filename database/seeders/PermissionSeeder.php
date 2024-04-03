<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name'=>'CATEGORY_CREATE']);    //1
        Permission::create(['name'=>'CATEGORY_READ']);      //2
        Permission::create(['name'=>'CATEGORY_READ_ALL']);  //3
        Permission::create(['name'=>'CATEGORY_UPDATE']);    //4
        Permission::create(['name'=>'CATEGORY_DELETE']);    //5

        Permission::create(['name'=>'USER_CREATE']);        //6
        Permission::create(['name'=>'USER_READ']);          //7
        Permission::create(['name'=>'USER_READ_ALL']);      //8
        Permission::create(['name'=>'USER_UPDATE']);        //9
        Permission::create(['name'=>'USER_DELETE']);        //10

        Permission::create(['name'=>'PRODUCT_CREATE']);     //11
        Permission::create(['name'=>'PRODUCT_READ']);       //12
        Permission::create(['name'=>'PRODUCT_READ_ALL']);   //13
        Permission::create(['name'=>'PRODUCT_UPDATE']);     //14
        Permission::create(['name'=>'PRODUCT_DELETE']);     //15

        Permission::create(['name'=>'ORDER_CREATE']);       //16
        Permission::create(['name'=>'ORDER_READ']);         //17
        Permission::create(['name'=>'ORDER_READ_ALL']);     //18
        Permission::create(['name'=>'ORDER_UPDATE']);       //19
        Permission::create(['name'=>'ORDER_DELETE']);       //20
        Permission::create(['name'=>'ORDER_BY_DATE']);      //21
        Permission::create(['name'=>'MY_DELIVERED']);       //22
        Permission::create(['name'=>'MY_UNDELIVERED']);     //23
        Permission::create(['name'=>'MY_DELIVERY']);        //24
        Permission::create(['name'=>'SET_DELIVERY']);       //25
        Permission::create(['name'=>'EXPORT_EXCEL']);       //26

        Permission::create(['name'=>'ROLE_CREATE']);        //27
        Permission::create(['name'=>'ROLE_READ']);          //28
        Permission::create(['name'=>'ROLE_READ_ALL']);      //29
        Permission::create(['name'=>'ROLE_UPDATE']);        //30
        Permission::create(['name'=>'ROLE_DELETE']);        //31

    }
}
