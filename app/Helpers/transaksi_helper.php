<?php

function hitungPPN($total_harga)
{
    return $total_harga * 0.11;
}

function hitungBiayaAdmin($total_harga)
{
    if ($total_harga <= 20000000) {
        return $total_harga * 0.006;
    } elseif ($total_harga <= 40000000) {
        return $total_harga * 0.008;
    } else {
        return $total_harga * 0.01;
    }
}
