<?php

namespace App\home;

use App\app\AbstractDatabase;
use App\home\mvc\HomeModel;

class HomeDatabase extends AbstractDatabase
{

  public function get_table()
  {
    return "home";
  }

  public function get_model()
  {
    return HomeModel::class;
  }
}
