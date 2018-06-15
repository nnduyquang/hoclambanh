<?php

namespace App\Http\Controllers;

use App\Repositories\Frontend\FrontendRepositoryInterface;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    protected $frontendRepository;

    public function __construct(FrontendRepositoryInterface $frontendRepository)
    {
        $this->frontendRepository = $frontendRepository;
    }

    public function getFrontend(){
        $data = $this->frontendRepository->getFrontend();
        return view('frontend.home.index', compact('data'));
    }
    public function getProductDetail($path){
        $data = $this->frontendRepository->getProductDetail($path);
        return view('frontend.product.index', compact('data'));
    }
    public function getCategoryDetail($path){
        $data = $this->frontendRepository->getCategoryDetail($path);
        return view('frontend.category.index', compact('data'));
    }

}

