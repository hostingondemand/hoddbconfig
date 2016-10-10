<?php
namespace modules\hoddbconfig\service;
use lib\service\BaseService;

class hoddbconfig extends  BaseService{
    function getAllItems(){
        $items= $this->db->select("hoddbconfig")
            ->ignoreParent()
            ->fetchAllModel("configItem");
        return $items;
    }

    function saveItem($item){
            $this->db->saveModel($item,"hoddbconfig");
    }
}
?>