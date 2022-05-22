<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::latest()->paginate(6);

        return view('users.index',compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 6);
    }
    public function create()
    {
        return view('users.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|string|min:5',
            'jenis_kelamin' => 'required',
            'tgl_lahir' => 'required',
            'role' => 'required',
            'status' => 'required'
        ]);
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        User::create($input);

        return redirect()->route('users.index')
                        ->with('success','Pengguna Created Successfully.');
    }
    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }

    public function edit(User $user)
    {
        return view('users.edit',compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email,'.$user->id.'',
            'password' => 'nullable|string|min:5',
            'jenis_kelamin' => 'required',
            'tgl_lahir' => 'required',
            'role' => 'required',
            'status' => 'required',
        ]);
        $input = $validated;
        $input['password'] = Hash::make($input['password']);

        $user->update($input);

        return redirect()->route('users.index')
                        ->with('success','Pengguna Updated Successfully');
    }

    public function destroy(User $user)
    {
        //perlu di benahi
        if($user==Auth::user()->email){
            return redirect()->route('users.index')
                            ->with('error','Cannot Delete Pengguna');
        }
        else{
            $user->delete();

            return redirect()->route('users.index')
                            ->with('success','Pengguna Deleted Successfully');
        }
    }
}
