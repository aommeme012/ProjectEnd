<?php

namespace App\Http\Controllers;

use App\component;
use App\componentdetail;
use App\Materials;
use Illuminate\Http\Request;

class componentdetailController extends Controller
{
    public function index()
    {
        $comdes = componentdetail::all();
        return view('componentdetail.componentdetail', compact('comdes'));
    }
    public function create()
    {
        $mats = Materials::all();
        $comps = component::all();
        return view('componentdetail.add_componentdetail', compact('mats','comps'));
    }
    public function store(Request $request)
    {
        $post=$request->all();
        componentdetail::create($post);
        return back();
    }
    public function show(componentdetail $componentdetail)
    {
        //
    }
    public function edit($id)
    {
        $comde = componentdetail::find($id);
        $mats = Materials::all();
        $comps = component::all();
        return view('componentdetail.edit_componentdetail',compact('comde','mats','comps'));
    }
    public function update(Request $request, $id)
    {
        $update=componentdetail::findorFail($id);
        $update->update($request->all());

        return redirect('/comde');
    }
    public function destroy($id)
    {
        componentdetail::find($id)->delete();
        return redirect('/comde');
    }
}
