<?php

namespace App\model;

class PokemonModel
{
  public function get_poke_data($url)
  {
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); //string return
    curl_setopt($curl, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);
    $response = curl_exec($curl);

    if (curl_errno($curl)) {
      echo "Error: " . curl_error($curl);
    } else {
      $decoded = json_decode($response, true);
      curl_close($curl);
      return $decoded;
    }

    curl_close($curl);
  }
}
