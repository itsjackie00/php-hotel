<?php
include __DIR__ . '/Models/steam.php';

if (isset($GET['parking'])) {
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
        }else {
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
?>
<?php
include __DIR__ . '/Views/header.php';
?>
<main class="container">
    <?php
    include __DIR__  . '/Views/table.php';
    ?>
</main>

<?php
include __DIR__ . '/Views/footer.php';
?>