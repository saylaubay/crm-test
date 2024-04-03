<?php


namespace App\services;


use App\Models\User;

class UserService
{

    public function getDeliverymans()
    {
        return User::where('role_id', 3)->get();
    }

    public function getrSupervisors()
    {
        return User::where('role_id', 4)->get();
    }

    public function getAll()
    {
        return User::paginate(10);
    }

    public function create($request)
    {
        User::create([
            'first_name'=>$request->firstname,
            'last_name'=>$request->lastname,
            'phone'=>$request->phone,
            'role_id'=>$request->role,
            'password'=>$request->password,
        ]);
    }

    public function update($request, $user)
    {
        $request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'phone'=>'required',
            'role'=>'required',
        ]);
        $user->first_name = $request->firstname;
        $user->last_name = $request->lastname;
        $user->phone = $request->phone;
        $user->role_id = $request->role;
        $user->update();
    }

    public function delete($user)
    {
        $user->delete();
    }

}
