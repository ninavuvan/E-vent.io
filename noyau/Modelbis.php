<?php

final class Modelbis
{
  
  public function generstr($number = 6){
  $carac = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
  $password = array(); 
  $lenght = strlen($carac) - 1; 
  for ($i = 0; $i < $number; $i++) {
      $n = rand(0, $lenght);
      $password[] = $carac[$n];
  }
  $password = implode($password);
  return $password; 
  }

}

?>