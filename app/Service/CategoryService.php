<?php

namespace App\Service;

use App\Repository\Interface\CategoryInterface;
use App\Service\Interface\AbstractService;

class CategoryService extends AbstractService {
    public function __construct(CategoryInterface $genaral)
    {
        parent::__construct($genaral);
    }
}
