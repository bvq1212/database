<?php
class MasterModel extends Database
{
    public function register($table,$column,$value)
    {       
        $this->insert($table,$column,$value);
    }
}