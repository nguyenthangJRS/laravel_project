<?php

namespace App\Repository;


use App\Component\RecusiveCategory;
use App\Models\Product;
use App\Repository\Interface\ProductInterface;
use App\Traits\FileTraits;
use Illuminate\Http\Request;

class ProductRepository extends AbstractRepository implements ProductInterface{

    use FileTraits;
    public function __construct(Product $model,RecusiveCategory $recusive)
    {
        parent::__construct($model, $recusive);
    }


    function store_file(Request $req)
    {
        return $path = $this->file_info($req,"feature_image_path","product");
    }
}
