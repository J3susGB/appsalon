<?php

function debuguear($variable) : string {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

// Escapa / Sanitizar el HTML
function s($html) : string {
    $s = htmlspecialchars($html);
    return $s;
}

//Función que revisa que el usuario esté autenticado
function isAuth() : void {
    if ( !isset($_SESSION['login']) ) {
        header('location: /');
    }
}

//Función que revisa que el usuario es administrador
function isAdmin(): void {
    if ( !isset($_SESSION['admin']) ) {
        header('location: /');
    }
}

function esUltimo(string $actual, string $proximo): bool {
    if($actual !== $proximo) {
        return true;
    } else {
        return false;
    }
}