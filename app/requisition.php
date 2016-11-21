<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class requisition extends Model
{
  protected $table = "requisition";

  protected $filiable = ['TipoDeSangre', 'fecha', 'lugar', 'company'];

  public function company() {
    return $this->belongsTo('\App\company');
  }
  public function aceptrequisition() {
    return $this->hasMany('\App\aceptrequisition');
  }
}
