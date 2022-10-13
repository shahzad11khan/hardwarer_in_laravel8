<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        echo"something";

        exit;
    //     //
    //    $Customer = new Customer();
        
    //        $Customer->CustomerName = $request->CustomerName;
    //        $Customer->name=$request->name;
    //        $Customer->category_id=$request->category_id;
    //        $Customer->Quantit=$request->Quantity;
    //        $Customer->unit=$request->unit;
    //        $Customer->minussq =$request->minussq;
    //         $Customer->salestotalprice=$request->salestotalprice;
    //        $Customer->salequantity=$request->salequantity;
    //      $Customer->date=$request->date;

    
        // $create=Customer::create($data);
    //     dd($$Customer);
    //     return redirect()->back();
    //     // return redirect()->route('admin.create');
     }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
