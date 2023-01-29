<?php

namespace App\Repository\Interface;

use Illuminate\Http\Request;

interface ProductInterface extends GenaralInterface {

    function store_file(Request $req);
}
