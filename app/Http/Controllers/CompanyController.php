<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Company;
use App\Bank_Account;

class CompanyController extends Controller
{
    public function tambahData(Request $request){
        $dateNow = date("Y-m-d H:i:s");
        $delStatus = 0;
        $tambahComp = Company::create([
            'comp_name' => $request->nama_perusahaan,
            'comp_datail' => $request->keterangan,
            'comp_npwp' => $request->npwp,
            'comp_address' => $request->alamat1,
            'comp_address2' => $request->alamat2,
            'comp_email' => $request->email,
            'comp_phone' => $request->telepon,
            'comp_create_date' => $dateNow,
            'comp_del_status' => $delStatus
        ]);

        $tambahRek = Bank_Account::create([
            'bank_comp_id' => $tambahComp->comp_id,
            'bank_name' => $request->nama_bank,
            'bank_no_rek' => $request->norek_bank,
            'bank_an' => $request->an_bank,
            'bank_branch' => $request->cabang_bank,
            'bank_create_date' => $dateNow,
            'bank_del_status' => $delStatus
        ]);

        return redirect('/company');
    }

    public function getData(){
        $getDataComp = Company::where('comp_del_status',0)->get();
        return view('company', ['dataComp' => $getDataComp]);
    }

    public function delData($comp_id){
        $hapusData = Company::find($comp_id);
        $hapusData->comp_del_status = 1;
        $hapusData->save();

        return redirect('/company');
    }

    public function editData($comp_id){
        $tampilData = Company::find($comp_id);
        $tampilRek = Bank_Account::where('bank_comp_id', $comp_id)->first();

        return view('editCompany', ['dataComp' => $tampilData, 'dataRek'=>$tampilRek]);
    }

    public function upData($comp_id, Request $request){
        $dateNow = date("Y-m-d H:i:s");

        $upComp = Company::find($comp_id);
        $upComp->comp_name = $request->nama_perusahaan;
        $upComp->comp_datail = $request->keterangan;
        $upComp->comp_npwp = $request->npwp;
        $upComp->comp_address = $request->alamat1;
        $upComp->comp_address2 = $request->alamat2;
        $upComp->comp_email = $request->email;
        $upComp->comp_phone = $request->telepon;
        $upComp->comp_update_date = $dateNow;
        $upComp->save();

        $upRek = Bank_Account::where('bank_comp_id', $comp_id)->first();
        $upRek->bank_name = $request->nama_bank;
        $upRek->bank_no_rek = $request->norek_bank;
        $upRek->bank_an = $request->an_bank;
        $upRek->bank_branch = $request->cabang_bank;
        $upRek->bank_update_date = $dateNow;
        $upRek->save();

        return redirect('/company');
    }
}
