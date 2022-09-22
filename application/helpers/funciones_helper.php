<?php 

function formatearSoloFecha($fecha)
{
    /*2022-06-17 03:10:41*/
    if ($fecha) {
        $dia=substr($fecha,8,2);
        $mes=substr($fecha,5,2);
        $anio=substr($fecha,0,4);
        //$hora=substr($fecha,11,5);
        $fechaformateada=$dia.'/'.$mes.'/'.$anio;
        return $fechaformateada;
    }
    else{
        return '-';
    } 
}

function formatearSoloHora($fecha)//nota: si el valor es nulo saldrá error.
{
    /*2022-06-17 03:10:41*/
    if ($fecha) {
        $hora=substr($fecha,11,5);
        $fechaformateada=$hora;
        return $fechaformateada;
    }
    else{
        return '-';
    }
    
}

function formatearFechaMasHora($fecha)
{
    /*2022-06-17 03:10:41*/
    if ($fecha) {
        /*si el valor recibido tiene datos:*/
        $dia=substr($fecha,8,2);
        $mes=substr($fecha,5,2);
        $anio=substr($fecha,0,4);
        $hora=substr($fecha,11,5);
        $fechaformateada=$dia.'/'.$mes.'/'.$anio.' '.$hora;
        return $fechaformateada; 
    }
    else{
        /*caso contrario en que el valor recibido es NULL:*/
        return '-';
    }
}
function formatearGenero($genero)
{
    if ($genero=='M') 
    {
        return 'Masculino';
    }
    else{
        return 'Femenino';
    } 
}

?>