<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use  App\Service\CategoryService;

class CategoryController extends Controller
{

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function show()
    {
        $categories = $this->categoryService->show();
        return view('admin.category.show',compact('categories'));
    }

    public function create()
    {
        $result = $this->categoryService->create();
        return view('admin.category.add',compact('result'));
    }

    public function store(Request $req){
        $this->categoryService->store($req);
        return redirect()->route('admin.categories.show');
    }

    public function edit($id)
    {
        $result  = $this->categoryService->edit($id);
        return view('admin.category.edit',compact('result'));
    }

    public function update(Request $req,$id)
    {
        $this->categoryService->update($req,$id);
        return redirect()->route('categories.show');
    }

    public function delete($id)
    {
        $this->categoryService->delete($id);
        return redirect()->route('admin.categories.show');
    }

    public function show_deleted()
    {
//        $deleted_categories = $this->category->whereNotNull('deleted_at')->get();
        $deleted_categories = DB::table('categories')->whereNotNull('deleted_at')->latest()->paginate(20);
        $deleted_categories = $deleted_categories->items();
        return view('admin.category.showDeleted',compact('deleted_categories'));
    }

    public function restore($id){
        $date = DB::table("categories")->find($id);
        $deleted_categories = DB::table('categories')->whereDeleted_at($date->deleted_at)->update([
            "deleted_at" => null
        ]);
        return redirect()->route('categories.show');

    }


}
