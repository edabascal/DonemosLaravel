<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Request\TagRequest;
use App\Tag;
use Laracast\Flash\Flash;

class TagsController extends Controller
{
    public function index ()
    {
        return view('admin.tags.index');

    }
    public function create ()
    {
      return view('admin.tags.create');
    }
    public function store (TagRequest $request)

    {
        $tag= new tag($request-> all());
        $tag= save();

        flash::success('El Tag '. $tag->name. 'ha sido creado con exito!');
        return redirect()->route('admin.tags.index');
    }
    public function show ($id)
    {

    }
    public function edit ($id)
    {

    }
    public function update(request $request, $id)
    {

    }
    public function destroy ($id)
  {

  }
}
