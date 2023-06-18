<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{


    public function show()
    {
        $user = User::get();
        return view('layouts.admin.profile.index', compact('user'));
    }
    
    public function edit($id){
        $user = User::find($id);
		return view('layouts.admin.profile.form', compact('user'));
    }

    public function update(Request $request, $id){
        $user = User::find($id);
        $foto = '';
            if ($request->hasFile('image')) {
                if ($user->foto && file_exists(storage_path('app/public/' . $user->foto))) {
                    Storage::delete('public/' . $user->foto);
                }
                $foto = $request->file('image')->store('images', 'public');
            } else {
                $foto = $user->foto;
            }
            $data = [
                'alamat' => $request->alamat,
                'foto' => $foto,
                'no_hp' => $request->no_hp,
                'tgl_lahir' => $request->tgl_lahir,
            ];
            User::find($id)->update($data);
            return redirect()->route('profile');
    }
}
