<?php

namespace App\Http\Controllers\Menu;

use App\Http\Controllers\Controller;
use App\Service\MenuService;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function __construct(MenuService $menu)
    {
        $this->menu = $menu;
    }

    public function showMenu()
    {
        $menu_list = $this->menu->show();
        return view('admin.menu.menuList',compact('menu_list'));
    }

    public function create()
    {
        $menu_level = $this->menu->create();
        return view('admin.menu.menuAdd',compact('menu_level'));
    }

    public function store(Request $req){
        $this->menu->store($req);
        return redirect()->route('menu.show');
    }

    public function edit($id){
        $data = $this->menu->edit($id);
        return view('admin.menu.menuEdit',compact('data'));
    }

    public function update(Request $req,$id)
    {
     $this->menu->update($req,$id);
     return redirect()->route("menu.show");
    }

    public function delete($id){

        $this->menu->delete($id);
        return redirect()->route("menu.show");
    }

}
