<?php

namespace App\Service;

use App\Repository\Interface\ProductInterface;
use App\Service\Interface\AbstractService;
use App\Service\Interface\ProductServiceInterface;
use Illuminate\Http\Request;

class ProductService extends AbstractService implements ProductServiceInterface{

    public function __construct(ProductInterface $genaral)
    {
        parent::__construct($genaral);
    }

    function store_file(Request $req)
    {
        return $this->genaral->store_file($req);
    }
}
