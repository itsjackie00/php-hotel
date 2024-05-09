<?php
include __DIR__ . '/../Models/steam.php';

function printRows($hotels)
{
    $template = '';
    foreach ($hotels as $hotel) {
        $template .= '<tr>';
        $template .= '<td>' . $hotel['name'] . '</td>';
        $template .= '<td>' . $hotel['description'] . '</td>';
        $template .= '<td>' . $hotel['parking'] . '</td>';
        $template .= '<td>' . $hotel['vote'] . '</td>';
        $template .= '<td>' . $hotel['distance_to_center'] . '</td>';
        $template .= '</tr>';
    }
    echo $template;
}


$hotel = getHotels($hotels);

$template = printRows($hotels);