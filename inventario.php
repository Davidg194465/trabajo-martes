<?php
$productos = [
    ["nombre" => "Concentrado", "stock" => 10],
    ["nombre" => "Vacuna", "stock" => 12],
    ["nombre" => "Sal mineral", "stock" => 7],
    ["nombre" => "Melaza", "stock" => 2]
];

echo "<h2>Inventario</h2>";

foreach ($productos as $producto) {

    echo "<strong>" . $producto["nombre"] . "</strong>";
    echo " - Stock: " . $producto["stock"];

    if ($producto["stock"] <= 5) {
        echo " - ALERTA: stock bajo";
    } else {
        echo " - Disponible";
    }

    echo "<br>";
}
?>
