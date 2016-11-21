<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
  protected $table = "company";

  protected $filiable = ['name', 'email', 'password', 'requisition'];

  public function requisitions() {
    return $this->hasMany('\App\requisition');
  }
}
