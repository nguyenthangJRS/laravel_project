<?php
namespace App\Repository;

use App\Component\RecusiveMenu;
use App\Repository\Interface\MenuInterface;
use App\Models\Menu;

class MenuRepository extends AbstractRepository implements MenuInterface{

    public function __construct(Menu $menu,RecusiveMenu $recusive)
    {
        parent::__construct($menu,$recusive);
    }
}
