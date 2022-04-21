<?php

    $cantidad = $_POST["cantidad"];
    $conversion = $_POST["conversion"];

    if (is_numeric($cantidad)) {

        switch ($conversion) {
            case '0':
                $error = "Debe elegir una opción de conversión.";
                header('Location: formulario.php?error='.$error);
                break;
            
            case '1':
                $resultado = $cantidad / 29.574;
                $unidad = $resultado.' onzas fluidas';
                header('Location: formulario.php?resultado='.$unidad);
                break;
    
            case '2':
                $resultado = $cantidad * 1.094;
                $unidad = $resultado.' yardas';
                header('Location: formulario.php?resultado='.$unidad);
                break;
    
            case '3':
                $resultado = $cantidad / 454;
                $unidad = $resultado.' libras';
                header('Location: formulario.php?resultado='.$unidad);
                break;
    
            case '4':
                $resultado = (($cantidad * (9/5)) + 32);
                $unidad = $resultado.' grados farenheit';
                header('Location: formulario.php?resultado='.$unidad);
                break;
    
            case '5':
                $resultado = $cantidad / 1.609;
                $unidad = $resultado.' millas';
                header('Location: formulario.php?resultado='.$unidad);
                break;
    
            case '6':
                $resultado = $cantidad / 26.1405;
                $unidad = $resultado.' libras esterlinas';
                header('Location: formulario.php?resultado='.$unidad);
                break;
    
            default:
                echo "Este error no debería presentarse";
                break;
        }

    }else{
        $error = "La cantidad a convertir debe ser un número.";
        header('Location: formulario.php?error='.$error);
    }
?>