<?php

namespace App\Service\Interface;

use Illuminate\Http\Request;

interface GenaralService{
    function show();
    function create();
    function store(Request $req);
    function edit($id);
    function update(Request $req,$id);
    function delete($id);
}
