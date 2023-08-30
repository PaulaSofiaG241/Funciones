<?php

// Paso 1: Definir función "repartirCartas"
function repartirCartas() {
    $mazo = array(
        "As de Corazones", "2 de Corazones", "3 de Corazones", "4 de Corazones", "5 de Corazones", "6 de Corazones", "7 de Corazones", "8 de Corazones", "9 de Corazones", "10 de Corazones", "Jota de Corazones", "Reina de Corazones", "Rey de Corazones",
        "As de Diamantes", "2 de Diamantes", "3 de Diamantes", "4 de Diamantes", "5 de Diamantes", "6 de Diamantes", "7 de Diamantes", "8 de Diamantes", "9 de Diamantes", "10 de Diamantes", "Jota de Diamantes", "Reina de Diamantes", "Rey de Diamantes",
        "As de Picas", "2 de Picas", "3 de Picas", "4 de Picas", "5 de Picas", "6 de Picas", "7 de Picas", "8 de Picas", "9 de Picas", "10 de Picas", "Jota de Picas", "Reina de Picas", "Rey de Picas",
        "As de Picas", "2 de Picas", "3 de Picas", "4 de Picas", "5 de Picas", "6 de Picas", "7 de Picas", "8 de Picas", "9 de Picas", "10 de Picas", "Jota de Picas", "Reina de Picas", "Rey de Picas",
        "As de Picas", "2 de Trebol", "3 de Trebol", "4 de Trebol", "5 de Trebol", "6 de Trebol", "7 de Trebol", "8 de Trebol", "9 de Trebol", "10 de Trebol", "Jota de Trebol", "Reina de Trebol", "Rey de Trebol"

    );
    $mano = array();


    for ($i = 0; $i < 5; $i++) {
        $cartaAleatoria = $mazo[array_rand($mazo)];
        $mano[] = $cartaAleatoria;
    }

    return $mano;
}

$repartir = repartirCartas();

// Paso 2: Definir función "mostrarCartas"

function mostrarCartas($mostrar){
    foreach ($mostrar as $cartas => $carta){
    echo $carta.'<br>';
}
}
mostrarCartas($repartir);

