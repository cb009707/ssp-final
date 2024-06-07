<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Enums\Role;
use Illuminate\Http\Request;

class usercon extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('admin.user.index',[
            'users' => User::paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.user.form',[
            'user' => (new User()),
            'roles' => Role::cases(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'role' => 'required'
        ]);

        $validated['password'] = bcrypt('password');
        User::create($validated);

        return redirect()->route('admin.user.index')->with('success', 'User successfully updated!');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
        $bookings = DB::table('bookings')->get();
        return view('admin.user.userdataform',[
            'user' => $user,
            'bookings' => $bookings
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
        return view('admin.user.form',[
            'user' => $user,
            'roles' => Role::cases(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'role' => 'required'
        ]);

        $user->update($validated);

        return redirect()->route('admin.user.index')->with('success', 'User successfully updated!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
        $user->delete();
        return redirect()->route('admin.user.index')->with('success', 'User successfully deleted!');
    }
}
