<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\facilities_master;

class facilities_masterController extends Controller
{
    public function tambaDataFas(Request $request){
        $dateNow = date("Y-m-d H:i:s");
        $delStatus = 0;

        $storeData = facilities_master::create([
            'facilmast_name'=> $request->nama_fasilitas,
            'facilmast_desc'=> $request->keterangan,
            'facilmast_create_date'=> $dateNow,
            'facilmast_del_status'=> $delStatus
        ]);

        return redirect('/masterFasilitas');
    }

    public function getDataFas(){
        $getData = facilities_master::where('facilmast_del_status', 0)->get();

        return view('/master_fasilitas', ['getData'=>$getData]);
    }

    public function delData($id_fasilitas){
        $hapusData = facilities_master::find($id_fasilitas);
        $hapusData->facilmast_del_status = 1;
        $hapusData->save();

        return redirect('/masterFasilitas');
    }

    public function editData($id_fasilitas){
        $getData = facilities_master::where('facilmast_id', $id_fasilitas)->first();

        return view('editMasterFasil', ['getData'=>$getData]);
    }

    public function upData($id_fasilitas, Request $request){
        $dateNow = date("Y-m-d H:i:s");

        $updating = facilities_master::find($id_fasilitas);
        $updating->facilmast_name = $request->nama_fasil;
        $updating->facilmast_desc = $request->ket;
        $updating->facilmast_update_date = $dateNow;
        $updating->save();

        return redirect('/masterFasilitas');
    }
}
