<?php
namespace modules\hoddbconfig\model;
use lib\model\BaseModel;

class ConfigItem{
    var $id;
    var $key;
    var $section;
    var $value;

    function initialize($key,$section){
        $this->key=$key;
        $this->section=$section;
        return $this;
    }

    //manual implementation because config is used before full initialisation
    function fromArray($arr){
        $this->id=$arr["id"];
        $this->key=$arr["key"];
        $this->section=$arr["section"];
        $this->value=$arr["value"];
        return $this;
    }
    function _saved(){}
}
?>