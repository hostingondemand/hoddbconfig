<?php namespace modules\maxdbconfig\patch;
    use modules\maxpatch\lib\patch\BasePatch;

    class Install extends BasePatch{

        function patch()
        {

            $this->patch->table("maxdbconfig")
                ->addField("key", "varchar(50)")->addIndex("key")
                ->addField("section","varchar(50)")->addIndex("section")
                ->addField("value","text")
                ->create();


            return true;
        }
    }
?>