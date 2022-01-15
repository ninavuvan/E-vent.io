<?php

final class campagne{

  

  public function getcamp(){

    require_once('noyau/Model.php')
    session_start();

    $req = $pdo -> query('SELECT date_fin FROM campagne ');
    $curr_date = Date('Y/m/d');
    $left = $curr_date->diff($Date_fin)->format("%a");
    echo $left;

    
}

<?