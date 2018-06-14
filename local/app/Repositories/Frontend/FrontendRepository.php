<?php

namespace App\Repositories\Frontend;


use App\CategoryItem;
use App\Config;
use App\Post;
use App\Product;

class FrontendRepository implements FrontendRepositoryInterface
{
    public function getFrontend()
    {
        $data = '';
        $products = Post::where('post_type', IS_POST)->where('category_item_id', 1)->where('isActive', ACTIVE)->get();
        $data['products'] = $products;
        return $data;
    }

    public function getFrontEndInfo()
    {
        $data = '';
        return $data;
    }

    public function getProductDetail($path)
    {
        $data = '';
        $product = Post::where('path', $path)->first();
        $orderProduct=Post::where('category_item_id',$product->category_item_id)->where('id','!=',$product->id)->get();
        $data['product'] = $product;
        $data['orderProduct'] = $orderProduct;
        return $data;
    }


}