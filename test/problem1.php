
<?php
function count($s, $c)
{
    $res = 0;
 
    for ($i = 0; $i < strlen($s); $i++)
        if ($s[$i] == $c)
            $res++;
 
    return $res;
}
 
    // Driver Code
    $str= "geeksforgeeks";
    $c = 'e';
    echo count($str, $c) ;
    return 0;
?>