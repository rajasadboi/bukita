<?php
class Controller
{
    public function model($model)
    {
        $modelPath = '../app/models/' . $model . '.php';
        if (file_exists($modelPath)) {
            require_once $modelPath;
            return new $model;
        } else {
            die("Model file not found: " . $modelPath);
        }
    }

    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }
}
