<?php
use App\Nivel;

if (! function_exists('niveis')) {
    function niveis($var)
    {
        $nivel = Nivel::find($var);
       return $nivel;
    }
}