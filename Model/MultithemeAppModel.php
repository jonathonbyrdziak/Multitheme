<?php

class MultithemeAppModel extends AppModel
{
    function __construct($id = false, $table = null, $ds = null)
    {
        parent::__construct($id,$table,$ds);

        if (!empty($this->create_query)) {
            if (strpos(strtolower($this->create_query), 'create table') !== false)
                $this->create_query = "CREATE TABLE $table ( ".$this->create_query." ); ";

            $this->query($this->create_query);
        }
    }
}