<?php
include __DIR__ . "/../Model/db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>PHP Hotel</title>
</head>

<body>

  <header class="container">
    <div class="row">
      <div class="col-12">
        <form method="GET" class="py-4">
          <div class="mb-3">
            <label for="filterP" class="form-label">Filtra Hotel per parcheggio:</label>
            <select name="filterP" id="filterP">
              <option value="">Tutti</option>
              <option value="0">No</option>
              <option value="1">Si</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Cerca</button>
        </form>
      </div>
      <div class="col-12">
        <table class="table">
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
            <tr>
              <?php
              $filteredHotel = [];
              $parking = isset($_GET['filterP']) ? $_GET['filterP'] : '';
              foreach ($hotels as $hotel) {
                if ($parking === '' || $hotel['parking'] == $parking) {
                  $filteredHotel[] = $hotel;
                }
              }

              foreach ($filteredHotel as $hotel) {
                echo "<td> {$hotel['name']} </td>";
                echo "<td> {$hotel['description']} </td>";
                echo "<td>" . ($hotel['parking'] ? "Sì" : "No") . "</td>";
                echo "<td> {$hotel['vote']} </td>";
                echo "<td> {$hotel['distance_to_center']} </td></tr>";
              }
              ?>
          </tbody>
        </table>
      </div>
    </div>

  </header>