<?php

namespace App\Component;

abstract class RecusiveAbstract {

    private $list = [];
    private $data;
    private $filter_data;
    public function __construct($object,$id)
    {
        $this->object = $object;
        $this->id = $id;
        $this->filter_data = $this->object->orderBy("id",'desc')->get();
        $this->data = $this->recusive_func($this->id);
    }

    function recusive_func($id,$level = ""){
       foreach($this->filter_data as $key => $val){
           $level = $id == 0 ? "" : str_replace("→","",$level)."→";
           if($val->parent_id === $id){
               $val["name"] = $level.$val["name"];
               $this->list[$key] = $val->toArray();
               $this->recusive_func($val->id,$level."　→");
           }
       }
       return array_values($this->list);
    }

    function getOption($parent_id)
    {
        $html = "";
        foreach($this->data as $val){
            if(!empty($parent_id) && $parent_id == $val["id"]){
                $seleted = "selected";
            }else{
                $seleted = "";
            }
            $html .= "<option ${seleted} value = '${val['id']}' >${val['name']}</option>";
        }
        return $html;
    }

    function getAtribute($title)
    {
        $getData = array_filter($this->data,function($val) use ($title){
            return trim($val[$title]);
        });
        return $getData;
    }

    public function get_delete_list($id)
    {
        $id_list = [];
        $list = array_filter($this->data,function($parent) use ($id){
            return $parent['parent_id'] == $id;
        });
        foreach ($list as $id){
            $id_list[] = $id["id"];
        }
        return ($id_list);
    }
}
