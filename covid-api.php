<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>COVID-19 API</title>
    <link rel="stylesheet" href="covid-api.css">
  </head>
  <body>
    <h1>Global Details</h1>
    <br>
    <br>
    <?php
      $url = "https://api.covid19api.com/summary";
      $data = json_decode(file_get_contents($url), true);
      ?>
      <div class="global">
        <div class="country">
          <?php
          echo "Total Cases:".$data['Global']['TotalConfirmed'];
          ?>
        </div>
        <div class="country">
          <?php
          echo "New Cases:".$data['Global']['NewConfirmed'];
          ?>
        </div>
        <div class="country">
          <?php
          echo "Total Deaths:".$data['Global']['TotalDeaths'];
          ?>
        </div>
        <div class="country">
          <?php
          echo "New Deaths:".$data['Global']['NewDeaths'];
          ?>
        </div>
        <div class="country">
          <?php
          echo "Total Recovered:".$data['Global']['TotalRecovered'];
          ?>
        </div>
        <div class="country">
          <?php
          echo "New Recovered:".$data['Global']['NewRecovered'];
          ?>
        </div>
      </div>
      <br>
      <br>
        <h1>Countrywise Details</h1>
        <div class="countrywise">
          <?php
          for($i=0;$i<count($data['Countries']);$i++){
            ?>
            <div class="country">
              <?php
              echo "Country:".$data['Countries'][$i]['Country'];
              ?>
              <br>
              <?php
              echo "Total Cases:".$data['Countries'][$i]['TotalConfirmed'];
              ?>
              <br>
              <?php
              echo "New Cases:".$data['Countries'][$i]['NewConfirmed'];
              ?>
              <br>
              <?php
              echo "Total Deaths:".$data['Countries'][$i]['TotalDeaths'];
              ?>
              <br>
              <?php
              echo "New Deaths:".$data['Countries'][$i]['NewDeaths'];
              ?>
              <br>
              <?php
              echo "Total Recovered:".$data['Countries'][$i]['TotalRecovered'];
              ?>
              <br>
              <?php
              echo "New Recovered:".$data['Countries'][$i]['NewRecovered'];
              ?>
              <br>
            </div>
            <?php
          }
        ?>
        </div>
  </body>
</html>
