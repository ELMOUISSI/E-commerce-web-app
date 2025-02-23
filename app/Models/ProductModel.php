<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;
    protected $table = 'product';
    static public function getSingle($id)
    {
        return self::find($id);
    }
    static public function getRecord(){
        return self::select('product.*','users.name as created_by_name')
                     ->join('users','users.id','=','product.created_by')
                      ->where('product.is_delete','=',0)
                      ->orderBy('product.id','desc')
                    ->paginate(20);
    }
    static public function getProduct($category_id = '',$sub_category_id=''){
        $return = ProductModel::select('product.*','users.name as created_by_name')
                    ->join('users','users.id','=','product.created_by');
                    if(!empty($category_id)){
                        $return= $return->where('product.category_id','=',$category_id);
                    }
                    if(!empty($subcategory_id)){
                        $return= $return->where('product.subcategory_id','=',$subcategory_id);
                    }
                    $return= $return->where('product.is_delete','=',0)
                    ->orderBy('product.id','desc')
                    ->paginate(20);

              return  $return;
    }
    static public function checkSlug($slug)
    {
        return self::where('slug','=',$slug)->count();
    }

    public function getColor(){
        return $this->hasMany(ProductColorModel::class,'product_id');
    }
    public function getSize(){
        return $this->hasMany(ProductSizeModel::class,'product_id');
    }

    public function getImage(){
        return $this->hasMany(ProductImageModel::class,'product_id')->orderBy('order_by','asc');
    }
}

