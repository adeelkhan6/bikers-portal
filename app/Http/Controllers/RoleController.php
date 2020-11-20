<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Role;
use App\User;
use App\Order;
use App\RentOrder;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [

            'orders'     => auth()->user()->orders,
            'rentOrders'  => auth()->user()->rentOrders

        ];

        return view('user.user_profile')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function updatePassword(Request $request, Role $role)
    {
         request()->validate([
            
            'old_password'           => 'required',
            'password'               => 'required',
            'password_confirmation'  => ['required', 'confirmed']

        ]);

         if ($request->old_password != $request->password) {
             
             return back()->with('error', 'Password is not matching !');
         }
        
        if (Hash::check(request('old_password'), auth()->user()->password)) 

        {

        $password = Hash::make(request('password'));

        auth()->user()->update(['password' => $password]);

        return redirect()->route('profile')->with('success', 'Your Password has been changed successfully !');
    }

            return back()->with('error', 'Password does not matches !');
    }

    public function updateProfile()
    {
        $attributes = request()->validate([

            'name'    => 'required',
            'contact' => 'required'

        ]);

            auth()->user()->update($attributes);

            return back()->with('success', 'Profile has been updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        //
    }
}
