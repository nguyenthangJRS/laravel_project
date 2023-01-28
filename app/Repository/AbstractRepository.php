<?php
namespace App\Repository;

use App\Repository\Interface\GenaralInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AbstractRepository implements GenaralInterface{

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

    function store(Request $req)
    {
        $result = $this->model->create([
            'parent_id' => $req->parent_id,
            "name" => $req->name,
            'slug' => Str::slug($req->name),
        ]);
        return $result;
    }

    function edit($id)
    {
        $data = $this->model->find($id);
        $option  = $this->recusive->getOption($data->parent_id);
        $result["data"] = $data;
        $result["option"] = $option;
        return $result;
    }

    function update(Request $req,$id)
    {
        $data = $this->model->find($id);
        $result = $data->update([
            "name" => $req->name,
            'parent_id' => $req->parent_id,
            'slug' => Str::slug($req->name),
        ]);
        return $result;
    }

    function delete($id)
    {
        $result = $this->recusive->get_delete_list($id);
        $result[] = $id;
        $this->model->whereIn('id',$result)->delete();
        return $result;
    }
}
