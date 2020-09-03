<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\add_ons;

class addonsController extends Controller
{
    public function tambah_addons(Request $request){
        $dateNow = date("Y-m-d H:i:s");
        $delStatus = 0;

        $tambahComp = add_ons::create([
            'add_ons_name' => $request->nama_addons,
            'add_ons_sale_price' => $request->harga_jual,
            'add_ons_buy_price' => $request->harga_beli,
            'add_ons_ket' => $request->keterangan,
            'add_ons_create_date' => $dateNow,
            'add_ons_del_status' => $delStatus
        ]);

        return redirect('/AddOns');
    }

    public function get_add_ons(){
        $getData = add_ons::where('add_ons_del_status',0)->get();
        return view('AddOns', ['dataAddOns' => $getData]);
    }

    public function delData($add_ons_id){
        $hapusData = add_ons::find($add_ons_id);
        $hapusData->add_ons_del_status = 1;
        $hapusData->save();

        return redirect('/AddOns');
    }

    public function EditData($add_ons_id){
        $ambilData = add_ons::where('add_ons_id', $add_ons_id)->first();

        return view('editAddOns', ['ambildata'=>$ambilData]);
    }

    public function UpdateData($add_ons_id, Request $request){
        $dateNow = date("Y-m-d H:i:s");

        $upAddOns = add_ons::find($add_ons_id);
        $upAddOns->add_ons_name = $request->nama_addons;
        $upAddOns->add_ons_sale_price = $request->harga_jual;
        $upAddOns->add_ons_buy_price = $request->harga_beli;
        $upAddOns->add_ons_ket = $request->keterangan;
        $upAddOns->add_ons_update_date = $dateNow;
        $upAddOns->save();

        return redirect('/AddOns');
    }
}
