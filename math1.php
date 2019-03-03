<?php

function math1()
{
$tab = array(1,2,3,2,2,4, 1, 5, 5);
$tabResult = array();
foreach ($tab as $valeur){
    if (array_key_exists($valeur, $tabResult))
    {
        $tabResult[$valeur]++;
    }
    else
    {
        $tabResult[$valeur] = 1;
    }
}

return $tabResult;
}