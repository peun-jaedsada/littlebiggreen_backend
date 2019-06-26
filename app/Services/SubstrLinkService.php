<?php

namespace App\Services;

Trait SubstrLinkService
{

    public function parseGetKey( $url ){
        $substr_url = $url;
        parse_str(parse_url( $substr_url, PHP_URL_QUERY ), $vars );
        return $vars['v'];
    }

    // public function upload($folder, $filename,$moveto)
    // {
    //     $name = !is_null($filename) ? $filename : str_random(25);
    //     $moveto->move(base_path('public/backoffice/'.$folder), $filename);
    //     return $name;
    // }
}