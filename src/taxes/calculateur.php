<?php

namespace App\taxes;

class calculateur
{
function prixTVA($prix):float
{
    $mTVA=$prix*0.2;
    return $mTVA;
}

    function prixTTC($prix):float
    {
        $mTTC=$prix*1.2;
        return $mTTC;
    }
}