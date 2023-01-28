<?php

namespace App\Service\Interface;

use App\Interface\GenaralInterface;
use Illuminate\Http\Request;

class AbstractService implements GenaralService{
    public function __construct($genaral)
    {
        $this->genaral = $genaral;
    }
    function show(){
        return $this->genaral->show();
    }

    function create(){
        return $this->genaral->create();
    }

    function store(Request $req){
        return $this->genaral->store($req);
    }

    function edit($id){
        return $this->genaral->edit($id);
    }

    function update(Request $req,$id){
        return $this->genaral->update($req,$id);
    }

    function delete($id){
        return $this->genaral->delete($id);
    }
}
