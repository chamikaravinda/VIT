<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\suppliers;

class SupplierController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supplier=suppliers::all();

        return view('Supplier.showsupplier')->with('supplier',$supplier);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Supplier.AddSupplier');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=> 'required',
            'contact'=> 'required|max:10',
            'address'=>'nullable'
        ]);

        $supplier=new suppliers;

        $supplier->name=$request->input('name');
        $supplier->address=$request->input('address');
        $supplier->contact=$request->input('contact');

        $supplier->save();
        return redirect('/suppliers')->with('success','Suppiler Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supplier=suppliers::find($id);
        //Check for correct user
        return view('Supplier.EditSupplier')->with('suppliers',$supplier);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name'=> 'required',
            'address'=>'nullable'
        ]);

        $supplier =suppliers::find($id);

        $supplier->name=$request->input('name');
        $supplier->address=$request->input('address');
        $supplier->contactnum=$request->input('contactnum');

        $supplier->save();


        return redirect('/suppliers')->with('success','Suppiler Updated');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supplier = suppliers::find($id);
        $supplier-> delete();
        return redirect('/suppliers')->with('success','Supplier  Removed');

    }
}
