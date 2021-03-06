<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
  protected $fillable = [
    'firstname',
    'lastname',
    'ral'
  ];

  public function task() {
    return $this ->hasMany(Task::class);
  }
}
