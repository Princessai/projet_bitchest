<?php
function getCoursActuel($cryptoId)
{

    return App\Models\Cotation::where('crypto_id', $cryptoId)
        ->orderBy('date', 'desc')->first()->cours_actuel;
}
