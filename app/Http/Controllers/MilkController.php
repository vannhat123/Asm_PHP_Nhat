<?php

namespace App\Http\Controllers;
use App\Milk;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;

class MilkController extends Controller
{
    public function index()
    {
        $list_obj = Milk::all();
        return view('admin.milk.list')->with('list_obj', $list_obj);
    }

    /**
     * Show the form for creating a new reauthor.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.milk.create');
    }

    /**
     * Store a newly created reauthor in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $obj = new Milk();
        $obj->name = Input::get('name');
        $obj->author = Input::get('author');
        $obj->content = Input::get('content');
        $obj->images = Input::get('images');
        $obj->save();
        return redirect('/admin/milk');
    }

    /**
     * Display the specified reauthor.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $obj = Milk::find($id);
        if ($obj == null) {
            return view('404');
        }
        return view('admin.milk.show')
            ->with('obj', $obj);
    }

    /**
     * Show the form for editing the specified reauthor.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obj = Milk::find($id);
        if ($obj == null) {
            return view('404');
        }
        return view('admin.milk.edit')
            ->with('obj', $obj);
    }

    /**
     * Update the specified reauthor in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $obj = Milk::find($id);
        if ($obj == null) {
            return view('404');
        }
        $obj->name = Input::get('name');
        $obj->author = Input::get('author');
        $obj->content = Input::get('content');
        $obj->images = Input::get('images');
        $obj->save();
        return redirect('/admin/milk');
    }

    /**
     * Remove the specified reauthor from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Milk::find($id);
        if ($obj == null) {
            return response('Milk not found or has been deleted!', 404);
        }
        $obj->delete();
        return response('Deleted', 200);
    }
}
