<?php

namespace App\controller;

use App\controller\BaseController;
use App\model\PokemonModel;

class HomeController extends BaseController
{
  public function index()
  {
    $this->view("home", ["pokemon" => ""]);
  }

  public function post_index()
  {
    $pokemon = $_POST["pokemon"];
    $poke_model = new PokemonModel;
    $data = $poke_model->get_poke_data("https://pokeapi.co/api/v2/pokemon/$pokemon");

    if (!$data) {
      $data["error"] = "No Pokemon found";
    }

    $this->view("home", ["pokemon" => $data]);
  }
}
