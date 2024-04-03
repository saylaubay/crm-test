<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roleAdmin = Role::find(1);
        $roleAdmin->permissions()->attach([6,7,8,9,10,27,28,29,30,31]);//

        $roleManager = Role::find(2);
        $roleManager->permissions()->attach([2,3,7,8,12,13,17,18,26]);//

        $roleDeliveryman = Role::find(3);
        $roleDeliveryman->permissions()->attach([22,23,24,25]);//

        $roleSupervisor = Role::find(4);
        $roleSupervisor->permissions()->attach([11,12,13,14,15,16,17,18,19,20]);//
    }
}
