<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Users;
use App\Company;
use App\Position;
use App\role;

class UsersController extends Controller
{
    public function getData(){
        $dataUser = Users::where('user_del_status',0)->get();
        return view('user', ['dataUser'=>$dataUser]);
    }

    public function getAttributeData(){
        $getComp = Company::where('comp_del_status',0)->get();
        $getPost = Position::where('posit_del_status',0)->get();
        $getRole = role::where('role_del_status',0)->get();

        return view('addUsers',['getComp'=>$getComp, 'getPost'=>$getPost, 'getRole'=>$getRole]);
    }

    public function storeData(Request $request){
        $dateNow = date("Y-m-d H:i:s");
        $delStatus = 0;

        Users::create([
            'user_firstname'=>$request->nama_depan,
            'user_lastname'=>$request->nama_belakang,
            'user_jointdate'=>$request->join_date,
            'user_nik'=>$request->nik,
            'user_gender'=>$request->jk,
            'user_phone'=>$request->no_telp,
            'user_email'=>$request->email,
            'user_name'=>$request->username,
            'user_password'=>$request->password,
            'user_comp_id'=>$request->comp_user,
            'user_role_id'=>$request->role_user,
            'user_posit_id'=>$request->posit_user,
            'user_create_date'=>$dateNow,
            'user_del_status'=>$delStatus
        ]);

        return redirect('/user');
    }

    public function delData($user_id){
        $deldata = Users::find($user_id);
        $deldata->user_del_status = 1;
        $deldata->save();

        return redirect('/user');
    }

    public function editData($user_id){
        $getDetail = Users::find($user_id);
        $getCompUser = Company::where('comp_id',$getDetail->user_comp_id)->first();
        $getPositUser = Position::where('posit_id',$getDetail->user_posit_id)->first();
        $getRoleUser = role::where('role_id',$getDetail->user_role_id)->first();

        $getComp = Company::where('comp_del_status',0)->get();
        $getPost = Position::where('posit_del_status',0)->get();
        $getRole = role::where('role_del_status',0)->get();

        return view('editUsers', [
        'detailUser'=>$getDetail, 
        'getCompUser'=>$getCompUser, 
        'getPositUser'=>$getPositUser, 
        'getRoleUser'=>$getRoleUser,
        'getComp'=>$getComp,
        'getPost'=>$getPost,
        'getRole'=>$getRole]);
    }

    public function upData($user_id, Request $request){
        $dateNow = date("Y-m-d H:i:s");

        $updateData = Users::find($user_id);
        $updateData->user_firstname = $request->nama_depan;
        $updateData->user_lastname = $request->nama_belakang;
        $updateData->user_jointdate = $request->join_date;
        $updateData->user_nik = $request->nik;
        $updateData->user_phone = $request->no_telp;
        $updateData->user_email = $request->email;
        $updateData->user_name = $request->username;
        $updateData->user_password = $request->password;
        $updateData->user_comp_id = $request->comp_user;
        $updateData->user_role_id = $request->role_user;
        $updateData->user_posit_id = $request->posit_user;
        $updateData->user_update_date = $dateNow;
        $updateData->save();

        return redirect('/user');
    }
}
