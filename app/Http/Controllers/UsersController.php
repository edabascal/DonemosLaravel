<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index ()
    {
        $user= User::orderBy('id','ASC')->paginate(1);

          return view('admin.users.index')->with('users', $users);
    }
    public function create ()
    {
        return view('admin.users.create');
    }
    public function store (request $request)
    {

    }
    public function show ($id)
    {

    }
    public function edit ($id)
    {

    }
    public function update(request $request, $id)
    {
        $user = new User($request->all());
        $user -> password =bcrypt($request->password);
        $user -> save();

          Flash::success ('Se ha registrado de forma exitosa');

          return redirect()->route('admin.users.index');
    }
    public function destroy ($id)
  {

  }
}
