<?php

namespace App\Repository\Interface;

use Illuminate\Http\Request;

interface GenaralInterface{
    function show();
    function create();
    function store(Request $req);
    function edit($id);
    function update(Request $req,$id);
    function delete($id);
}
