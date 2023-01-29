<?php
namespace App\Repository;

use App\Repository\Interface\GenaralInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

abstract class AbstractRepository implements GenaralInterface{

    public function __construct($model,$recusive)
    {
        $this->model = $model;
        $this->recusive = $recusive;
    }

    function show()
    {
        return $this->model->orderBy('parent_id')->paginate(9);
    }
    function create()
    {
        return  $this->recusive->getOption(0);
    }

    function store(Request $req){}

    function edit($id)
    {
        $data = $this->model->find($id);
        $option  = $this->recusive->getOption($data->parent_id);
        $result["data"] = $data;
        $result["option"] = $option;
        return $result;
    }

    function update(Request $req,$id){}

    function delete($id)
    {
        $result = $this->recusive->get_delete_list($id);
        $result[] = $id;
        $this->model->whereIn('id',$result)->delete();
        return $result;
    }
}
