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

    public static function secureUrl($value, $action)
    {
        $key = hash('sha256', 'XQ62K19mQ1');
        $iv = substr(hash('sha256', 'F66CE19546FDF'), 0, 16);
        $output = false;
        if ($action == 'e') {
            $output = base64_encode(openssl_encrypt($value, "AES-256-CBC", $key, 0, $iv));
        } else {
            $output = openssl_decrypt(base64_decode($value), "AES-256-CBC", $key, 0, $iv);
        }

        return $output;
    }
}
