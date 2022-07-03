<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_food extends Model
{
    use HasFactory;
    protected $table = 't_food';
    public function getAllData()
    {
        $listProduct = DB::table($this->table)->paginate(4);
        return $listProduct;
    }
    public function InsertData($arr)
    {
        DB::table($this->table)->insert($arr);
    }
    public function show($id){
        $product = DB::table($this->table)->where('id',[$id])->first();
        return $product;
    }
    public function Cate($cate)
    {
        $product = DB::table($this->table)->where('status',[$cate])->get();
        return $product;
    }
}
