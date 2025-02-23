<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\ProductModel;
use App\Models\SubCategoryModel;
use Illuminate\Http\Request;

class FrontProductController extends Controller
{
    public function getCategory($slug,$subslug=''){
        $getCategory = CategoryModel::getSingleSlug($slug);
        $getSubCategory = SubCategoryModel::getSingleSlug($subslug);

        if(!empty( $getCategory )&& !empty( $getSubCategory )){
             
            $data['meta_title']= $getSubCategory->meta_title;
            $data['meta_keywords']= $getSubCategory->meta_keywords;
            $data['meta_description']= $getSubCategory->meta_description;

            $data['getSubCategory']= $getSubCategory;
            $data['getCategory']= $getCategory;
            $data['getProduct']= ProductModel::getProduct($getCategory->id,$getSubCategory->id);
            return view('product.list',$data);
        }
        else if(!empty( $getCategory )){
            
            $data['getCategory']= $getCategory;

            $data['meta_title']= $getCategory->meta_title;
            $data['meta_keywords']= $getCategory->meta_keywords;
            $data['meta_description']= $getCategory->meta_description;
            $data['getProduct']= ProductModel::getProduct($getCategory->id);
            return view('product.list',$data);
        }
        else{
            abort(404);
        }
        
    }
}
