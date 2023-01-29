<?php
namespace App\Repository;

use App\Component\RecusiveMenu;
use App\Repository\Interface\MenuInterface;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MenuRepository extends AbstractRepository implements MenuInterface{

    public function __construct(Menu $menu,RecusiveMenu $recusive)
    {
        parent::__construct($menu,$recusive);
        $this->menu = $menu;
    }
    function store(Request $req)
    {
        $result = $this->menu->create([
            'parent_id' => $req->parent_id,
            "name" => $req->name,
            'slug' => Str::slug($req->name),
        ]);
        return $result;
    }

    function update(Request $req,$id)
    {
        $data = $this->menu->find($id);
        $result = $data->update([
            "name" => $req->name,
            'parent_id' => $req->parent_id,
            'slug' => Str::slug($req->name),
        ]);
        return $result;
    }
}
