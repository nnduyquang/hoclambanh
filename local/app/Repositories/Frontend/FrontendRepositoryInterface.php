<?php

namespace App\Repositories\Frontend;

interface FrontendRepositoryInterface
{
    public function getFrontend();

    public function getFrontEndInfo();

    public function getProductDetail($path);

    public function getCategoryDetail($path);
}