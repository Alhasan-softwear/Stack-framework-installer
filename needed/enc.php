<?php
function encrypt ($string){
    $string = str_rot13($string);
    $string = strtolower($string);
    $string = str_replace('a','16',$string);
    $string = str_replace('b','1b',$string);
    $string = str_replace('c','3_1',$string);
    $string = str_replace('d','23',$string);
    $string = str_replace('e',':2',$string);
    $string = str_replace('f','1',$string);
    $string = str_replace('g','6',$string);
    $string = str_replace('h','5g',$string);
    $string = str_replace('i','2_1',$string);
    $string = str_replace('j','cs_3',$string);
    $string = str_replace('k','5',$string);
    $string = str_replace('l','10',$string);
    $string = str_rot13($string);
    $string = str_replace('m','10_=',$string);
    $string = str_replace('n','199',$string);
    $string = str_replace('o','s',$string);
    $string = str_replace(' ','5--60',$string);
    $string = strtoupper($string);
    $string = str_rot13($string);
    $string = str_replace('16','yto',$string);
    $string = str_replace('1B','__+',$string);
    $string = str_replace('3_1','1',$string);
    $string = str_replace('23','mt_-',$string);
    $string = str_replace(':2',':',$string);
    $string = str_replace('199','exe',$string);
    $string = str_replace('5--60',':__68lkd',$string);
    $string = strtolower($string);
    $string = str_rot13($string);
    $string = substr($string,1,19);

    echo $string;
}
encrypt('This is an encryption software please enjoy knowing that know one understands but still enjoy');
?>