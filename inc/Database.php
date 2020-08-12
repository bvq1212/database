<?php

class Database
{
    public function __construct()
    {
        $this->connect =  mysql_connect('localhost', 'root', '');
        mysql_set_charset('utf8', $this->connect);
        if(!$this->connect)
        {
            die('Could not connect: '.mysql_error());
        }
        mysql_select_db("learn_php",$this->connect);
    }


    public function query($sql)
    {
        return mysql_query($sql);
    }

    public function getAll($what,$table)
    {
        return $this->query("SELECT {$what} FROM {$table}");
    }
    public function getOne($what,$table, $where)
    {
        $sql = $this->query("SELECT {$what} FROM {$table} WHERE {$where}");
        return $sql;
    }

    public function update($table,$data, $where)
    {
        $this->query("UPDATE {$table} SET {$data} WHERE {$where}");
    }

    public function insertData($table,$column, $value)
    {
        $this->query("INSERT INTO {$table} ({$column}) VALUES ({$value})");
    }

    public function deleteData($table,$where)
    {
        $this->query("DELETE FROM {$table} WHERE {$where}");
    }
}