<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\product;
use App\facilities_master;
use App\facilities;

class productController extends Controller
{
    public function getProduct(){
        $data = product::where('product_del_status', 0)->get();

        return view('product', ['data'=>$data]);
    }

    public function getDataSpek(){
        $dataSpek = facilities_master::where('facilmast_del_status',0)->get();
        return view('addProduct', ['dataSpek'=>$dataSpek]);
    }

    public function StoreData(Request $request){
        $dateNow = date("Y-m-d H:i:s");
        $delStatus = 0;

        $store = product::create([
            'product_name'=>$request->nama_produk,
            'product_sale_price'=>$request->harga_jual,
            'product_buy_price'=>$request->harga_beli,
            'product_create_date'=>$dateNow,
            'product_del_status'=>$delStatus
        ]);
        
        $spesifikasi = $request->input('dataspesifikasi');
        foreach ($spesifikasi as $item){
            facilities::create([
                'facilities_ref_id'=>$item,
                'facilities_prod_id'=>$store->product_id,
                'facilities_create_date'=>$dateNow,
                'facilites_del_status'=>$delStatus
            ]);
        }

        return redirect('/addproduct');
    }

    public function delData($id_data){
        $hapusData = product::find($id_data);
        $hapusData->product_del_status = 1;
        $hapusData->save();

        return redirect('/product');
    }
}
