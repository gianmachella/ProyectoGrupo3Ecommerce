<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

  protected $fillable = [
      'name', 'description1', 'description2', 'price', 'stock', 'photo',
  ];
}
