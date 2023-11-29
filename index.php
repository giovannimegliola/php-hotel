<?php
include __DIR__ . "/partials/header.php";
?>

<main>
<div class="container py-4 ">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Descrizione</th>
        <th>Parcheggio</th>
        <th>Voto</th>
        <th>Distanza dal centro (km)</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($hotels as $hotel) {  
        echo "<td>{$hotel['name']} </td>";
        echo "<td>{$hotel['description']} </td>";
        echo "<td>" . ($hotel['parking'] ? 'Sì' : 'No') .  "</td>";
        echo "<td>{$hotel['vote']} </td>";
        echo "<td>{$hotel['distance_to_center']} </td>
      </tr>";
      } ?>
    </tbody>
  </table>
</div>
</main>

<?php
include __DIR__ . "/partials/footer.php";
?>
