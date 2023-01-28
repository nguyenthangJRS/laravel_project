<?php
namespace App\Component;

use App\Models\Menu;
class RecusiveMenu extends RecusiveAbstract {

    public function __construct(Menu $object, $id = 0)
    {
        parent::__construct($object, $id);

    }

}
