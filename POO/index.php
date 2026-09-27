<?php

require_once __DIR__ . "/Model/Planta.php";
require_once __DIR__ . "/Model/Arbol.php";
require_once __DIR__ . "/Model/Flor.php";
require_once __DIR__ . "/Model/Arbusto.php";

$arbol = new Arbol("Arbol", "2 metros", "si tiene hojas", "clima ideal", "s", "d", "2.5", "marron", "b");
$flor = new Flor("Flor", "1 metros", "no tiene hojas", "clima ideal", "rosado", "4", "verde", "s", "primavera");
$arbusto = new Arbusto("Arbusto", "1.5 metros", "si tiene hojas", "clima ideal", "1 metro", "si es doméstico", "s", "verdes", "si se poda");

echo "Árbol: " .$arbol->saludar(). "<br>";
echo "Flor: " .$flor->saludar1(). "<br>";
echo "Arbusto: " .$arbusto->saludar2(). "<br>";