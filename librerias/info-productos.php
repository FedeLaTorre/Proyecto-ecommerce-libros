<?php


const JSON_LIBROS = __DIR__ . '/../json/libros.json';

function traerLIBROS() {
   
    $contents = file_get_contents(JSON_LIBROS);
    
    return json_decode($contents, true);
    

}
