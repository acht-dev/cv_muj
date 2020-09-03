<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Company;
use App\Customer;

class CustomerController extends Controller
{
    public function getData(){
        $getCust = Customer::where('cust_del_status', 0)->get();
        return view('customer', ['data'=>$getCust]);
    }
    public function getDataComp(){
        $getData = Company::where('comp_del_status',0)->get();
        return view('addCustomer', ['data' => $getData]);
    }

    public function storeData(Request $request){
        $dateNow = date("Y-m-d H:i:s");
        $delStatus = 0;
        Customer::create([
            'cust_comp_id' => $request->cust_comp,
            'cust_name' => $request->nama_cust,
            'cust_address' => $request->alamat,
            'cust_phone' => $request->no_tel_cust,
            'cust_create_date' => $dateNow,
            'cust_del_status' => $delStatus
        ]);

        return redirect('/customer');
    }

    public function delData($cust_id){
        $hapus = Customer::find($cust_id);
        $hapus->cust_del_status = 1;
        $hapus->save();

        return redirect('/customer');
    }

    public function editData($cust_id){
        $getCust = Customer::find($cust_id);
        $getCompCust = Company::where('comp_id',$getCust->cust_comp_id)->first();
        $getData = Company::where('comp_del_status',0)->get();

        return view('editCustomer', ['dataCust'=>$getCust, 'dataCompCust'=>$getCompCust, 'dataComp'=>$getData]);
    }

    public function upData($cust_id, Request $request){
        $dateNow = date("Y-m-d H:i:s");

        $updateData = Customer::find($cust_id);
        $updateData->cust_name = $request->nama_cust;
        $updateData->cust_comp_id = $request->cust_comp;
        $updateData->cust_address = $request->alamat;
        $updateData->cust_phone = $request->no_tel_cust;
        $updateData->cust_update_date = $dateNow;
        $updateData->save();

        return redirect('/customer');
    }
}
