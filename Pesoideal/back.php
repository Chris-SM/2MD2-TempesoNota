<?php 
$peso = $_GET['peso'];
$alt = $_GET['Altu'];
$IMC= $peso/($alt*$alt);



echo "
<table border='2px solid'>
    <th>IMC</th>
    <th>Classificado</th>
    <tr id='f1'>
        <td>Igual ou Maior que 25°</td>
        <td>Quente</td>
    </tr>
    <tr id='f2'>
        <td>Igual ou menor que 25° e maior que 15°</td>
        <td>Razoável</td>
    </tr>
    <tr id='f3'>
        <td>Igual ou menor que 15° e maior que 0°</td>
        <td>Frio</td>
    </tr>
    <tr id='f4'>
        <td>Menor que 0°</td>
        <td>Congelante</td>
    </tr>
</table></center>"
?>