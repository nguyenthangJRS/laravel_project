<?php
namespace App\Service\Interface;

use Illuminate\Http\Request;

interface ProductServiceInterface extends GenaralService {
    function store_file(Request $req);

}
