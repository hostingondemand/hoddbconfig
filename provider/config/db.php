<?php
    namespace modules\maxdbconfig\provider\config;
    use lib\provider\baseprovider\BaseConfigProvider;

    class Db extends baseConfigProvider{

        var $values=array();



        function getItem($key,$section){
            static $loaded=false;
            if(!$loaded){
                $loaded=true;
                $items=$this->service->maxdbconfig->getAllItems();
                foreach($items as $item){
                    $this->values[$item->key][$item->section]=$item;
                }

            }
            if(!isset($this->values[$key][$section])){
                $item=$this->model->configItem;
                $item->initialize($key,$section);
                $this->values[$key][$section]=$item;
            }

            return  $this->values[$key][$section];
        }

        function get($key,$section)
        {
            return $this->getItem($key,$section)->value;
        }

        function set($key,$section, $val)
        {
            $item=$this->getItem($key,$section);
            $item->value=$val;
            $this->service->maxdbconfig->saveItem($item);
        }

        function contains($key,$section)
        {

            return($section!="server" && $this->get($key,$section)!==null);
        }
    }
?>