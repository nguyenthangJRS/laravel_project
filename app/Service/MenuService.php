<?php
namespace App\Service;

use App\Repository\Interface\MenuInterface;
use App\Service\Interface\AbstractService;

class MenuService extends AbstractService{
    public function __construct(MenuInterface $genaral)
    {
        parent::__construct($genaral);
    }
}
