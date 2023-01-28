<?php

namespace App\Repository;

use App\Repository\Interface\CategoryInterface;
use App\Component\RecusiveCategory;
use App\Models\Category;

class CategoryRepository extends AbstractRepository implements  CategoryInterface{
    public function __construct(Category $category,RecusiveCategory $recusive)
    {
        parent::__construct($category,$recusive);
    }
}
