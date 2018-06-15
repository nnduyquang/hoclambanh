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
        $orderProduct = Post::where('category_item_id', $product->category_item_id)->where('id', '!=', $product->id)->get();
        $data['product'] = $product;
        $data['orderProduct'] = $orderProduct;
        return $data;
    }

    public function getCategoryDetail($path)
    {
        $data = '';
        $category = CategoryItem::where('path', $path)->where('type', CATEGORY_POST)->first();
        $products = Post::where('category_item_id', $category->id)->where('isActive', ACTIVE)->get();
        if (count($products) == 1) {
            $data['type'] = 1;
            $data['oneProduct'] = $products[0];
        } else {
            $data['type'] = 0;
            foreach ($products as $key => $item) {
                $item->description = loai_bo_html_tag($item->description);
            }
            $data['products'] = $products;
        }
        $data['category'] = $category;
        return $data;
    }
}