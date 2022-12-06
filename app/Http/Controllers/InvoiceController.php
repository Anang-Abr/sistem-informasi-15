<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Invoice;
use App\Models\Supply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = Invoice::get();  
        return view('invoice.index', array('invoices' => $invoices));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $allSupply = Supply::all();
        $customerData = session()->get('customerData');

        return view('invoice.create',array('customerData' => $customerData, 'supplies' => $allSupply));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $supplyId = $request->supply;
        $customerId = $request->customer;
        $supplyData = Supply::find($supplyId);
        $customerData = Customer::find($customerId);
        $jumlah = $request->jumlah;
        $total = $jumlah * $supplyData->harga;
        $tanggal = $request->tanggal;
        $status = $request->status;
        if($supplyData->stock < $jumlah){
            return Redirect::back()->with('msg', 'jumlah yang dibeli melebihi sisa stock');
        }

        $inputData = array(
            'customer_id' => $customerId,
            'supply_id' => $supplyId,
            'jumlah' => $jumlah,
            'total' => $total,
            'tanggal' => $tanggal,
            'status' => $status
        );
        
        Invoice::create($inputData);
        $supplyData->update(['stock' => $supplyData->stock - $jumlah]);

        return response()->json([
            'invoices' => $inputData,
            'supply' => $supplyData,
            'customer' => $customerData,
        ]);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
