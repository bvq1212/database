<?php
class BaseModel
{
    public static function Load($model)
    {
        $model_path = 'Model/'. $model. '.php';
        if(file_exists($model_path))
        {

            require_once $model_path;
            $model = $model;
            return new $model;
        }
    }
}