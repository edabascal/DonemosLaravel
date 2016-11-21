<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aceptrequisition extends Model
{
  protected $table = "aceptrequisition";

  protected $filiable = ['requisition_id'];

  public function user()
  {
      return $this->belongsToMany('App\user');
  }
  public function requisition() {
    return $this->belongsTo('\App\requisition');
  }
}
