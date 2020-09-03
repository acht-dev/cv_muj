<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\role;

class roleController extends Controller
{
    public function getData(){
        $dataRole = role::where('role_del_status',0)->get();
        return view('role', ['role' => $dataRole]);
    }

    public function storeData(Request $request){
        // $this->validate($request,[
        //     'role'=>'required'
        // ]);
        $dateNow = date("Y-m-d H:i:s");
        $delStatus = 0;
        role::create([
            'role_name' => $request->role,
            'role_create_date' => $dateNow,
            'role_del_status' => 0
        ]);

        return redirect('/role');
    }

    public function hapusData($role_id){
        $hapus = role::find($role_id);
        $hapus->role_del_status = 1;
        $hapus->save();

        return redirect('/role');
    }

    public function editData($role_id){
        $dataRole = role::find($role_id);
        return view('editRole', ['dataRole' => $dataRole]);
    }

    public function upData($role_id, Request $request){
        $dateNow = date("Y-m-d H:i:s");
        $role = role::find($role_id);
        $role->role_name = $request->role;
        $role->role_update_date = $dateNow;
        $role->save();

        return redirect('/role');
    }
}
