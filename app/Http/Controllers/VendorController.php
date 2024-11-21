<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;

class VendorController extends Controller
{
    public function show($id) {
        // URL'/vendors/{id}'の'{id}'部分と主キー（idカラム）の値が一致するデータをvendorsテーブルから取得し、変数$vendorに代入する
        $vendor = Vendor::find($id);

        // インスタンスに紐づくproductsテーブルのすべてのデータをインスタンスのコレクションとして取得する
        $products = $vendor->products;

        // 変数$vendorと変数$productsをvendors/show.blade.phpファイルに渡す
        return view('vendors.show', compact('vendor', 'products'));
    }
}
