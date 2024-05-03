<?php
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
?>

<table class="table table-striped">
  <thead>
    <tr class="text-uppercase">
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Parking</th>
      <th scope="col">Vote</th>
      <th scope="col">Distance</th>
    </tr>
  </thead>

  <tbody>
    <?= $tamplate; ?>
  </tbody>
</table>