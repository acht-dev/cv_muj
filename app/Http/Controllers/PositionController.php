<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Position;

class PositionController extends Controller
{
    public function getData(){
        $dataPosisi = Position::where('posit_del_status', 0)->get();
        return view('position', ['posisi'=>$dataPosisi]);
    }

    public function storeData(Request $request){
        $dateNow = date("Y-m-d H:i:s");
        $delStatus = 0;

        Position::create([
            'posit_name' => $request->posisi,
            'posit_create_date' => $dateNow,
            'posit_del_status' => 0

        ]);

        return redirect('/position');
    }

    public function deleteData($posit_id){
        $hapusData = Position::find($posit_id);
        $hapusData->posit_del_status = 1;
        $hapusData->save();

        return redirect('/position');
    }

    public function editData($posit_id){
        $dataPosisi = Position::find($posit_id);
        return view('editPosition', ['dataPosisi'=>$dataPosisi]);
    }

    public function upData($posit_id, Request $request){
        $dateNow = date("Y-m-d H:i:s");
        $posisi = Position::find($posit_id);
        $posisi->posit_name = $request->posisi;
        $posisi->posit_update_date = $dateNow;
        $posisi->save();

        return redirect('/position');
    }
}
