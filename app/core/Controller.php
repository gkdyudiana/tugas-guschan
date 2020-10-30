<?php

class Controller extends Databases
{

    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }

    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }

    public function generateToken($strength = 30)
    {
        $rand_string = "";
        $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        for ($i = 0; $i <= $strength; $i++) {
            $rand_char = $chars[mt_rand(0, $strength - 1)];
            $rand_string .= $rand_char;
        }

        return $rand_string;
    }
}
