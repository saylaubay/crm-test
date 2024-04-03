<?php


namespace App\services;


use App\Models\Permission;
use App\Models\Role;
use Illuminate\Support\Collection;

class RoleService
{

    public function getAll()
    {
        return Role::all();
    }

    public function getAllNoPaginate()
    {
        return Role::paginate(10);
    }

    public function create($request)
    {
        $role = Role::create([
            'name'=>$request->name,
        ]);

        $list = new Collection();

        $count = Permission::all()->count();
        for($i=1; $i<=$count; $i++){
            if ($request->has($i)){
                $list->add($i);
            }
        }
        $role->permissions()->attach($list);
    }

    public function getPermissions($role)
    {
        return $role->permissions;
    }

    public function delete($role)
    {
        $role->delete();
    }

    public function edit($permissions)
    {
        $list = [];
        $count = Permission::all()->count();
        for($i=1; $i<=$count; $i++){
            $list[$i] = false;
        }

        $number = 0;
        for($i=1; $i<=count($list); $i++){
            if (isset($permissions[$number])){
                if ($permissions[$number]->id == $i){
                    $list[$i] = true;
                    $number++;
                }
            }
        }
        return $list;
    }

    public function update($request, $role)
    {
        $list = [];

        $count = Permission::all()->count();
        for($i=1; $i<=$count; $i++){
            if ($request->has($i)){
                $list[$i] = $i;
            }
        }
        $role->permissions()->detach();
        $role->permissions()->attach($list);
    }

}
