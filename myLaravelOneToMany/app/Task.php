<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  protected $fillable = [
    'title',
    'description',
  ];

  public function employee() {
    return $this ->belongsTo(Employee::class);
  }
}
