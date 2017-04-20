<?php

namespace App\Http\Controllers;

use App\backpack;
use Illuminate\Http\Request;

class BackpackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Backpack::get();

        return view('backpack.list', compact('list'));
    }

    /**
     * Show the form for creating a new backpack item.
     *
     * @return \Illuminate\Http\Response
     */
    public function showBackpackAdd()
    {
        return view('backpack.addItem');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $request['bp_item'] = $_GET['newItem'];
        $item = Backpack::create($request);
        if (isset($item->id))
        {
            $list = Backpack::get();
            return view('backpack.list', compact('list'));
        }

     //   return abort(400, 'could not create item');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function showBackpackFind()
    {
        return view('backpack.findItem');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\backpack  $backpack
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $id = $_GET['findItem'];
        $list = backpack::where('bp_item', 'like', '%' . $id . '%')->get();
        if (count($list)) {
            return view('backpack.list', compact('list'));
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\backpack  $backpack
     * @return \Illuminate\Http\Response
     */
    public function edit(backpack $backpack)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\backpack  $backpack
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, backpack $backpack)
    {
        //
    }

    public function getBackpackItem()
    {
        return view('backpack.removeItem');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\backpack  $backpack
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $id = $_GET['removeId'];
        $item = Backpack::find($id);
        if (isset($item->id)) {
            Backpack::destroy($item->id);
            $item = Backpack::find($id);
            if (! isset($item->id)) {
                $list = Backpack::get();
                return view('backpack.list', compact('list'));
            }
        }
    }
}
