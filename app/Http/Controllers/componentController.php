<?php

namespace App\Http\Controllers;

use App\component;
use Illuminate\Http\Request;

class componentController extends Controller
{
    public function index()
    {
        $comps = component::all();
        return view('component.component', compact('comps'));
        //return $deps;
    }
    public function create()
    {
        return view('component.add_component');
    }

    public function store(Request $request)
    {
        $post=$request->all();
        component::create($post);
        return view('component.add_component');
    }

    public function show(component $component)
    {
        //
    }

    public function edit($id)
    {
        $comp = component::find($id);
        return view('component.edit_component',compact('comp'));
    }

    public function update(Request $request, $id)
    {
        $update=component::findorFail($id);
        $update->update($request->all());

        return redirect('/comp');
    }

    public function destroy($id)
    {
        component::find($id)->delete();
        return redirect('/comp');
    }
}
