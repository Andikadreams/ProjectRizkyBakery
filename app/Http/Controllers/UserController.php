<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
		return view('layouts.admin.userManage.index', ['data' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.admin.userManage.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::get();
        Validator::make($request->all(), 
        [
			'name' => 'required',
			'email' => 'required|email',
			'password' => 'required',
            'level' => 'required',
		])->validate();
        // $foto = '';
        // if ($request->file('image')) {
        //     $foto = $request->file('image')->store('images', 'public');
        // }
        $data = [
			'name' => $request->name,
			'email' => $request->email,
			'password' => Hash::make($request->password),
			'level' => $request->level,
		];

        User::create($data);
		return redirect()->route('user');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
		return view('layouts.admin.userManage.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Validator::make($request->all(), 
        [
			'name' => 'required',
			'email' => 'required|email',
			'password' => 'required',
            'level' => 'required',
		])->validate();
        $data = [
			'name' => $request->name,
			'email' => $request->email,
			'password' => Hash::make($request->password),
			'level' => $request->level,
		];

        User::find($id)->update($data);
        return redirect()->route('user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
		return redirect()->route('user');
    }
}
