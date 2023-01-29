<?php

namespace App\Repository;

use App\Repository\Interface\CategoryInterface;
use App\Component\RecusiveCategory;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryRepository extends AbstractRepository implements  CategoryInterface{
    public function __construct(Category $category,RecusiveCategory $recusive)
    {
        parent::__construct($category,$recusive);
        $this->category = $category;
    }
    function store(Request $req)
    {
        $result = $this->category->create([
            'parent_id' => $req->parent_id,
            "name" => $req->name,
            'slug' => Str::slug($req->name),
        ]);
        return $result;
    }

    function update(Request $req,$id)
    {
        $data = $this->category->find($id);
        $result = $data->update([
            "name" => $req->name,
            'parent_id' => $req->parent_id,
            'slug' => Str::slug($req->name),
        ]);
        return $result;
    }
}
