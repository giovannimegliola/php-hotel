<?php
include __DIR__ . "/partials/header.php";
?>

<main class="container">
<?php 
foreach ($hotels as $hotel) {
  echo "Nome: " . $hotel['name'] . "<br>";
  echo "Descrizione: " . $hotel['description'] . "<br>";
  echo "Parcheggio disponibile: " . ($hotel['parking'] ? 'Sì' : 'No') . "<br>";
  echo "Voto: " . $hotel['vote'] . "<br>";
  echo "Distanza dal centro: " . $hotel['distance_to_center'] . " km <br>"; 
}
?>
</main>

<?php
include __DIR__ . "/partials/footer.php";
?>
