<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\T_food;
use App\Http\Requests\Validator_form;
class Form_process extends Controller
{
    public function index(){
        return view('form');
    }
    public function store(Request $request,Validator_form $vali)
    {
        $product = new T_food();
        $name = '';
        $file = $request->file('inputImage');
        $name = time() . '_' . $file->getClientOriginalName();
        $destinationPath = public_path('/source/image/product');
        $file->move($destinationPath, $name);
        $arr = [
            'name' => $request->input('inputName'),
            'old_price' => $request->input('inputPrice'),
            'new_price' => $request->input('inputPromotionPrice'),
            'image' => $name,
            'descript' => $request->input('inputDescription')
        ];
        $product->InsertData($arr);
        // return redirect()->route('showProduct');
        
    }
    public function homepage(){
        $product = new T_food();
        $listProduct = $product->getAllData();
        return view('trangchu',compact('listProduct'));
    }
    public function Deatail($id){
        $ab = new T_food();
        $sanpham = $ab->show($id);
        return view('Detail',compact('sanpham'));
    }
    public function category($cate){
        $ab = new T_food();
        $listProduct = $ab->cate($cate);
        return view('Hoaqua', compact('listProduct'));
    }
    
}
