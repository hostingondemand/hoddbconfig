<?php
namespace modules\maxdbconfig\service;
use lib\service\BaseService;

class Maxdbconfig extends  BaseService{
    function getAllItems(){
        $items= $this->db->select("maxdbconfig")
            ->ignoreParent()
            ->fetchAllModel("configItem");
        return $items;
    }

    function saveItem($item){
            $this->db->saveModel($item,"maxdbconfig");
    }
}
?>