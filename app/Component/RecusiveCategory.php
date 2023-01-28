<?php
namespace App\Component;

use App\Models\Category;
class RecusiveCategory extends RecusiveAbstract {

    public function __construct(Category $object, $id = 0)
    {
        parent::__construct($object, $id);

    }

}
