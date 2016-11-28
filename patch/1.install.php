<?php namespace modules\hoddbconfig\patch;
    use lib\patch\BasePatch;

    class Install extends BasePatch{

        function patch()
        {

            $this->patch->table("hoddbconfig")
                ->addField("key", "varchar(50)")->addIndex("key")
                ->addField("section","varchar(50)")->addIndex("section")
                ->addField("value","text")
                ->create();


            return true;
        }
    }
?>