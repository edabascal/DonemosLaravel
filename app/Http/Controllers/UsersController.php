<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index ()
    {
        $user= User::orderBy('id','ASC')->paginate(1);

          return view('admin.user.index')->with('user', $user);
    }
    public function create ()
    {
        return view('admin.user.create');
    }
    public function store (request $request)
    {

    }
    public function show ($id)
    {

    }
    public function edit ($id)
    {
        $user= User::find($id);

          return view('admin.user.edit')->with('user', $user);
    }
    public function update(Request $request, $id)
    {
        $user= User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->type = $request->type;
        $user->save();

        // $user = new User($request->all());
        // $user -> password =bcrypt($request->password);
        // $user -> save();

          // Flash::success ('Se ha registrado de forma exitosa');

          return redirect()->route('admin.user.index');
    }
    public function destroy ($id)
  {
      $user= User::find($id);
      $user-> delete();

            return redirect()->route('admin.user.index');

  }
}
