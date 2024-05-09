<?php
$hotels = [
    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],
    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];
//var_dump($hotels);

function getHotels($hotels)
{
    if (isset($_GET['parking'])) {
        $parking = $_GET['parking'];
        $template = '';
        foreach ($hotels as $hotel) {
            if ($parking == '1') {
                if ($hotel['parking'] == true) {
                    $template .= '<tr>';
                    $template .= '<td>' . $hotel['name'] . '</td>';
                    $template .= '<td>' . $hotel['description'] . '</td>';
                    $template .= '<td>' . $hotel['parking'] . '</td>';
                    $template .= '<td>' . $hotel['vote'] . '</td>';
                    $template .= '<td>' . $hotel['distance_to_center'] . '</td>';
                    $template .= '</tr>';
                }
            } elseif ($parking == '0') {
                if ($hotel['parking'] == false) {
                    $template .= '<tr>';
                    $template .= '<td>' . $hotel['name'] . '</td>';
                    $template .= '<td>' . $hotel['description'] . '</td>';
                    $template .= '<td>' . $hotel['parking'] . '</td>';
                    $template .= '<td>' . $hotel['vote'] . '</td>';
                    $template .= '<td>' . $hotel['distance_to_center'] . '</td>';
                    $template .= '</tr>';
                }
            } else {
                $template .= '<tr>';
                $template .= '<td>' . $hotel['name'] . '</td>';
                $template .= '<td>' . $hotel['description'] . '</td>';
                $template .= '<td>' . $hotel['parking'] . '</td>';
                $template .= '<td>' . $hotel['vote'] . '</td>';
                $template .= '<td>' . $hotel['distance_to_center'] . '</td>';
                $template .= '</tr>';
            }
        }

        return $template;
    }
}

function getVote($hotels)
{
    if (isset($_GET['vote'])) {
        $vote = $_GET['vote'];
        $template = '';
        foreach ($hotels as $hotel) {
            if ($vote == 'tutti') {
                if ($hotel['vote'] == 1 || $hotel['vote'] == 2 || $hotel['vote'] == 3 || $hotel['vote'] == 4 || $hotel['vote'] == 5) {
                    $template .= '<tr>';
                    $template .= '<td>' . $hotel['name'] . '</td>';
                    $template .= '<td>' . $hotel['description'] . '</td>';
                    $template .= '<td>' . $hotel['parking'] . '</td>';
                    $template .= '<td>' . $hotel['vote'] . '</td>';
                    $template .= '<td>' . $hotel['distance_to_center'] . '</td>';
                    $template .= '</tr>';
                }
            } else {
                if ($hotel['vote'] == $vote) {
                    $template .= '<tr>';
                    $template .= '<td>' . $hotel['name'] . '</td>';
                    $template .= '<td>' . $hotel['description'] . '</td>';
                    $template .= '<td>' . $hotel['parking'] . '</td>';
                    $template .= '<td>' . $hotel['vote'] . '</td>';
                    $template .= '<td>' . $hotel['distance_to_center'] . '</td>';
                    $template .= '</tr>';
                }
            }
        }
        return $template;
    }
}
